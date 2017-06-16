document.addEventListener("DOMContentLoaded", function () {
  let renderTarget = document.getElementById('post-form')
  let source = document.getElementById('form-template').innerHTML
  let template = Handlebars.compile(source)

  function renderWrittenForm() {
    return new Promise((resolve, reject) => {
    const url = `/admin/posts/buscar_post.php?id=${IdPost}`
    renderTarget.innerHTML = "Carregando..."

    fetch(url).then(response => {
      if(response.ok) {
        response.json().then(res => {
          let context = res
          context.categorias.map(c => {
            if(c.IdCategoria == context.post.IdCategoria)
              c.isSelected = true
            return c
          })

          context.post.autor = JSON.parse(Cookies.get('usuario'))


          const html = template(context)
          renderTarget.innerHTML = html
          resolve()

        })
      }
    })
    })
  }

  function renderEmptyForm() {
    return new Promise((resolve, reject) => {
      const url = '/admin/categorias/buscar_todas_categorias.php'
      fetch(url).then(response => {
        if (response.ok) {
          response.json().then(categorias => {
            context = { post: {autor:JSON.parse(Cookies.get('usuario')) }
            , categorias}
            console.log(context)
            const html = template(context)
            renderTarget.innerHTML = html
            resolve()

          })
        }
      })
    })


  }

  function submit(e) {
    e.preventDefault()
    let fd = new FormData(e.target)

    if(valida(fd)) {
      document.getElementById('form-submit-button').innerHTML = 'Salvando...'

      let url = '/admin/posts/salvar_post.php'
      fetch(url, {
        method: 'POST',
        body: fd
      }).then(response => {
        if(response.ok) {
          response.json().then(json => {
            if(json.IdPost)
            document.location.href = '/admin/posts/post.php?id='+json.IdPost
            else {
              document.getElementById('form-submit-button').innerHTML = 'Salvo com sucesso!'
              setTimeout(() => {
                document.getElementById('form-submit-button').innerHTML = 'Salvar'
              },3000)
            }

          })

        } else {
          response.text().then(text => {
            document.getElementById('message-span').innerHTML = text
          })
          document.getElementById('message-span').innerHTML = response.statusText
        }
      })
    }

  }

  function valida(fd) {
    let valida = true

    if(!fd.get('titulo')) {
      valida = false
      document.getElementById('titulo-validation').innerHTML = 'Campo obrigatório'

    }
    if(!fd.get('texto')) {
      valida = false
      document.getElementById('texto-validation').innerHTML = 'Campo obrigatório'
    } else {
      document.getElementById('texto-validation').innerHTML = ''
    }
    if(fd.get('IdCategoria') == 0) {
      valid = false
      document.getElementById('categoria-validation').innerHTML = 'Campo obrigatório'
    }


    return valida


  }

  try {
    var IdPost = window.location.href.split('id')[1].replace('=','')
  } catch(Exception) {
    var IdPost = false
  }
  if (IdPost) {
    renderWrittenForm(IdPost).then(() => {
      $('#editor').froalaEditor()

      document.getElementById('theForm').onsubmit = submit   
    })
  } else {
    renderEmptyForm().then(() => {
      $('#editor').froalaEditor()
      document.getElementById('theForm').onsubmit = submit

    })
  }
})
