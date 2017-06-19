document.addEventListener('DOMContentLoaded', function () {
  let source = document.getElementById('categoria-template').innerHTML
  let template = Handlebars.compile(source)

  let id = window.location.href.split('id')[1].replace('=','')
  console.log(id)
  let url = '/rep/categoria.php?id='+id

  fetch(url).then(response => {
    response.json().then(categoria => {
      let html = template(categoria)
      document.getElementById('categoria-render').innerHTML = html
    })
  })
})
