<?php
if(!isset($_GET['idioma'])){ $idioma = "pt";} else {$idioma = $_GET['idioma'];}
require_once ("../templates/vetor.php");

$path = "../";
include '../templates/header.php';
?>

<div class="container-fluid">
  <div id="categoria-render"></div>
</div>

<script id="categoria-template" type="text/x-handlebars-template">
<div>
  <div class="row">
    <div class="jumbotron text-center" style="background-color:{{categoria.cor}};color:white;">
      <h1>{{categoria.nome}}</h1>
    </div>
  </div>
  <div class="container">
 <ul class="articles-list">
   {{#each posts}}
   <li class="item js col-lg-3 col-md-4 col-sm-6 col-xs-12">
     <div class="item-container">
       <header class="item-header" style="border-bottom: 3px solid {{cor}};">
       <h1><a href="/pages/categoria.php?id={{IdCategoria}}&idioma=<?php echo $idioma; ?>" style="color:{{cor}};">{{nomeCategoria}}</a></h1>
       </header>
     <article class="item-title">
     <h2><a href="/pages/post.php?id={{IdPost}}&idioma=<?php echo $idioma; ?>">{{titulo}}</a></h2>
    </article>
     <footer>
        <?php echo $vetIdioma[10]; ?>: <span><a href="/pages/autor.php?id={{IdAutor}}" style="color:{{cor}};">{{nomeAutor}}</a></span>
     </footer>
    </div>
   </li>
   {{/each}}

 </ul>


  </div>
</div>
</div>
</script>

<?php 
include $path.'templates/footer.php';
?>

<script src="/js/categoria.js"></script>

