<?php
if(!isset($_GET['idioma'])){ $idioma = "pt";} else {$idioma = $_GET['idioma'];}
require_once ("../templates/vetor.php");

$path = "../";
include '../templates/header.php';
?>

<div class="container">
  <div id="post-render"></div>
</div>

<script id="post-template" type="text/x-handlebars-template">
<div>
  <div class="row">
    <div class="jumbotron text-center" style="background-color:{{post.cor}};color:white;">
        <h1>{{post.nomeCategoria}}</h1>
    </div>
  </div>
  <div class="row">

    <div class="banner js col-xs-12">

      <div class="banner-post js col-xs-12" >
        <div class="row">


          <div class="title-post js col-xs-12">
            <h3>{{post.titulo}}</h3>
          </div>

        </div>
        <div class="row">
          <div class="author-post col-xs-12">
            <div class="thumb-post-container col-xs-12 ">
              <img class="thumb" alt="Imagem do rosto do autor do post" src="{{post.fotoAutor}}"/>
            </div>
            <div class="author-post-name-container col-xs-6">
              <p class="author-name"><a href="/admin/autor.php?id={{post.IdAutor}}">{{post.nomeAutor}}</a></p>
              <p class="author">
              Autor
              </p>

            </div>
           

          </div>

        </div>
      </div>
      </div>
  </div>
  <div class="row">

    <div class="col-xs-12 col-sm-8 js-article-1">
      <div class="text-center">
      <img src="{{post.imagem}}" class="img img-responsive" id="post-image" />
      </div>
      <div id="" class="col-xs-12 js-post-text-1">
        {{{post.texto}}}
      </div>
       
      <div class="col-xs-12 text-center img-js-post">
      </div>
    </div>
    <?php include '../areas/javascript/posts/aside.php'; ?>

  </div>

</div>
</div>

</script>

<?php include '../templates/footer.php'; ?>
<script src="/js/post.js"></script>
