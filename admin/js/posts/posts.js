

document.addEventListener("DOMContentLoaded", function () {


  function carregaPosts(page) {
    return new Promise((resolve, reject) => {
      const url = '/admin/posts/buscar_posts.php?pagina='+page


      document.getElementById('posts-table').innerHTML = 'Carregando...'
      fetch(url).then(response => {
        if (response.ok) {
          response.json().then(res => {
            const target = document.getElementById('table-template')
            const source = target.innerHTML
            const template = Handlebars.compile(source)

            let context = { posts: res.posts, count: Math.ceil(res.count/10), activePage:page }
            const html = template(context)
            document.getElementById('posts-table').innerHTML = html

            bindPageChangeEvent('posts-pagination')

          })
        } else {
          response.text().then(text => document.getElementById('posts-table').innerHTML = text)
        }
      }).catch(err => {
        document.getElementById('posts-table').innerHTML = err
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
        carregaPosts(pages[i].childNodes[0].innerHTML)
      }
    }
  }

  carregaPosts(1)






})


