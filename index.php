<?php
if(!isset($_GET['idioma'])){ $idioma = "pt";} else {$idioma = $_GET['idioma'];}
require_once ("templates/vetor.php");
$path = "";
include 'templates/header.php';
?>

<article class="container">
        <div class="row">
          <div id="posts">
          </div>
               
                <div class="col-lg-4 post">
                </div>


        </div>

</article>

<?php include 'templates/footer.php'; ?>
<script id="posts-template" type="text/x--handlebars-template">
  {{#if categoria}}
  <div class="jumbotron">
    <h1>{{categoria.nome}}</h1>
    
  </div>
  {{/if}}
 <ul class="articles-list">
                {{#each posts}}
                <li class="item js col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="item-container">
                                        <header class="item-header" style="border-bottom:3px solid {{cor}};">
                                        <h1><a style="color:{{cor}};" href="/pages/categoria.php?id={{IdCategoria}}">{{nomeCategoria}}</a></h1>
                                        </header>
                                        <article class="item-title">
                                        <h2><a href="/pages/post.php?id={{IdPost}}&idioma=<?php echo $idioma; ?>">{{titulo}}</a></h2>
                                        </article>
                                        <footer>
                                         <?php echo $vetIdioma[10]; ?>: <span><a style="color:{{cor}};" href="/pages/autor.php?id={{IdAutor}}">{{nomeAutor}}</a></span>
                                        </footer>
                                </div>
                        </li>
                {{/each}}

                </ul>

</script>
<script src="js/index.js"></script>
