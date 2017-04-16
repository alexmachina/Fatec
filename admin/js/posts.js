var form = document.getElementById('post-form');
$('#editor').froalaEditor();

form.onsubmit = function (e) {
  e.preventDefault();
  var fd = new FormData(form);
  fd.set('texto', $('#editor').froalaEditor('html.get', true));

  if (_validate(fd)) { 
    _postData(fd)
  } else {
  }


}

function _postData(fd) {
  fetch('/admin/posts/salvar_post.php', {
    method: 'POST',
    body: fd
  }).then(function(response) {
    response.text().then(text => {
      if(response.ok) {
        window.location = '/admin/posts';
      } else {
        document.getElementById('message-span').innerHTML = text
      }
    })
  })

}

function _validate(fd) {
  var isValid = true

  if(!fd.get('titulo')) {
    isValid = false
    document.getElementById('titulo-validation').innerHTML= 'Campo obrigatório!'
  }

  if(!fd.get('texto')) {
    isValid = false
    document.getElementById('texto-validation').innerHTML = 'Campo obrigatório!'
  }

  if(!fd.get('IdCategoria')) {
    isValid = false
    document.getElementById('categoria-validation').innerHTML = 'Campo obrigatório!'
  }

  return isValid

}

