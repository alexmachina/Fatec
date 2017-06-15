document.addEventListener("DOMContentLoaded", function () {
  function carregaAutores(page) {
    return new Promise((resolve, reject) => {
      const url = `/admin/autores/buscar_autores.php?pagina=${page}`

      document.getElementById('autores-table-render').innerHTML = 'Carregando...'
      fetch(url).then(response => {
        if (response.ok) {
          response.json().then(res => {
            let source = document.getElementById('autores-table').innerHTML
            let template = Handlebars.compile(source)
            let context = {
              autores: res.autores,
              count: Math.ceil(res.count/10),
              activePage: page
            }
            let html = template(context)
            document.getElementById('autores-table-render').innerHTML = html
            bindPageChangeEvent('autores-pagination')

          })
        } else {
          response.text().then(text => document.getElementById('autores-table-render').innerHTML = response.statusText)
        }

      }).catch(err => document.getElementById('autores-table-render').innerHTML = err)

    })

  }

  Handlebars.registerHelper('times', function(n, activePage, block) {
    var accum = '';
    for(var i = 0; i < n; ++i) {
      active = (activePage == i + 1)
      accum += block.fn({page: i+1, active});
    }
    return accum;
  });
  function bindPageChangeEvent(idPagination) {
    let pagination = document.getElementById(idPagination)
    let pages = pagination.childNodes
    for (let i = 0; i < pages.length; i++) {
      pages[i].onclick = function () {
        carregaAutores(pages[i].childNodes[0].innerHTML)
      }
    }
  }

  carregaAutores(1)
})

