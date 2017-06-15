

document.addEventListener("DOMContentLoaded", function () {


  function carregaCategorias(page) {
    return new Promise((resolve, reject) => {
      const url = '/admin/categorias/buscar_categorias.php?page='+page


      document.getElementById('categorias-table').innerHTML = 'Carregando...'
      fetch(url).then(response => {
        if (response.ok) {
          response.json().then(res => {
            const target = document.getElementById('table-template')
            const source = target.innerHTML
            const template = Handlebars.compile(source)

            let context = { categorias: res.categorias, count: Math.ceil(res.count/10), activePage:page }
            const html = template(context)
            document.getElementById('categorias-table').innerHTML = html

            bindPageChangeEvent('categorias-pagination')

          })
        } else {
          response.text().then(text => document.getElementById('categorias-table').innerHTML = text)
        }
      }).catch(err => {
        document.getElementById('categorias-table').innerHTML = err
      })
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
        carregaCategorias(pages[i].childNodes[0].innerHTML)
      }
    }
  }

  carregaCategorias(1)






})


