document.addEventListener('DOMContentLoaded', function() {
  let source = document.getElementById('menu-template').innerHTML
  let template = Handlebars.compile(source)
  document.getElementById('render-menu').innerHTML = 'Carregando...'


  let url = '/rep/header.php'
  fetch(url).then(response => {
    /* response.text().then(text => {
      document.getElementById('render-menu').innerHTML = text
    })*/
    response.json().then(categorias => {
      let html = template({categorias})
      document.getElementById('render-menu').innerHTML = html
    })
  })
})
