document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('post-render').innerHTML = 'Carregando...'
  let source = document.getElementById('post-template').innerHTML
  let template = Handlebars.compile(source)

  let id = window.location.href.split('id')[1].replace('=','')
  let url = `/rep/post.php?id=${id}`

  fetch(url).then(response => {
    response.json().then(json => {
      let html = template(json)
      console.log(json)
      document.getElementById('post-render').innerHTML = html
    })

      /*  response.text().then(json => {
      document.getElementById('post-render').innerHTML = json
    })*/
  })
})
