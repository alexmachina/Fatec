document.addEventListener('DOMContentLoaded', function () {
  const target = document.getElementById('posts')
  target.innerHTML = 'Carregando...'

  const source = document.getElementById('posts-template').innerHTML
  const template = Handlebars.compile(source)

  
  function getPosts(page) {
    return new Promise((resolve, reject) => {
     let  url = '/rep/index.php?pagina='+page
     
      fetch(url).then(response => {
        if(response.status == 200) {
          response.json().then(posts => {
           
            let html = template({posts})
            target.innerHTML = html
            if(posts.categoria) {
              document.getElementById('jumbotron-categoria').style.backgroundColor = posts.categoria.cor;
            }
          })
        } else {
          response.text().then(text => {
            target.innerHTML = text
          })
        }
      })
    })
  }

  getPosts(1, null);



})



