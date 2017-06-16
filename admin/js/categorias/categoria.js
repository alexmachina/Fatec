var form = document.getElementById('form-categoria')
var messageSpan = document.getElementById('message-span')

form.onsubmit = function(e) {
  e.preventDefault()

  let fd = new FormData(form)
  if(fd.get('nome')) {
    _postData(fd)
  } else {
    _displayValidationMessages()
  }


}


function _postData(fd) {
  let postData = fetch('/admin/categorias/salvar_categoria.php', {
    method:'POST',
    body: fd
  })

  postData.then(response => {
    if (response.ok) {
      window.location = '/admin/categorias'
    }
  })

}

function _displayValidationMessages() {
  document.getElementById('nome-validation').innerHTML = 'Campo obrigatório!'
}
