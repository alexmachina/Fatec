var form = document.getElementById('post-form');

$('#editor').froalaEditor();
form.onsubmit = function (e) {
  var form_data = new FormData(form);
  form_data.set('texto', $('#editor').froalaEditor('html.get', true));
  e.preventDefault();
  fetch('/admin/posts/salvar_post.php', {
    method: 'POST',
    body: form_data
  }).then(function(response) {
    response.text().then(text => {
      if(response.ok) {
        window.location = '/admin/posts';
      } else {
      }
    })
  })
  
}

