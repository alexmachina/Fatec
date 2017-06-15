let form = document.getElementById('form-autor')

let messageSpan = document.getElementById('message-span')



function validaFormulario(fd) {
  let isValid = true

  if(!fd.get('nome')) {
    isValid = false
    document.getElementById('nome-validation')
      .innerHTML = 'Campo obrigatório'
  }

  if(!fd.get('username')) {
    isValid = false
    document.getElementById('username-validation')
      .innerHTML = 'Campo obrigatório'
  }

  if(!fd.get('password')) {
    isValid = false
    document.getElementById('password-validation')
      .innerHTML = 'Campo obrigatório'
  }

  if(!fd.get('foto') && !fd.get('foto-atual')) {
    isValid = false
    document.getElementById('foto-validation')
      .innerHTML = 'Campo obrigatório'
  }

  return isValid

  

}

form.onsubmit = function(e) {
  e.preventDefault()
  messageSpan.innerHTML = 'Salvando...'
  let form_data = new FormData(form)
  if(validaFormulario(form_data)) {
    fetch('/admin/autores/salvar_autor.php', {
      method: 'POST',
      body: form_data
    }).then(response => {
      if(response.ok)
        response.text().then(text => {
          messageSpan.innerHTML = text
        })
      else 
        messageSpan.innerHTML = response.statusText
    })
  } else {
    messageSpan.innerHTML = 'Ops! Dados invalidos... Verifique e tente novamente'
  }
}
