document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('login-form').onsubmit = function(e) {
    e.preventDefault()

    let form_data = new FormData(e.target)
    if (valida(form_data)) {
      const url = 'fazer_login.php'

      fetch(url,{
        method: 'POST',
        body: form_data
      }).then(response => {
        if(response.ok && response.status == 200) {
          response.json().then(usuario => {
            Cookies.set('logado', true)
            Cookies.set('usuario',usuario)
            document.location.href = '/admin/painel.php'
          })

        } else {
          document.getElementById('message-span').innerHTML = 'Usuário inválido'
        }
      })
    }

  }
})


function valida(fd) {
  let valid = true

  if(!fd.get('username')) {
    valid = false
    document.getElementById('username-validation').innerHTML = 'Campo obrigatório'
  }

  if(!fd.get('password')) {
    valid = false
    document.getElementById('password-validation').innerHTML = 'Campo obrigatório'
  }


  return valid
}
