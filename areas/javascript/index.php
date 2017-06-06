<?php
$path = "../../";
if(!isset($_GET['idioma'])){ $idioma = "pt";} else {$idioma = $_GET['idioma'];}
require_once ("../../templates/vetor.php"); 
include '../../templates/header.php';
?>


<div class="container">
  <section class="faixa js">
    <div id="text-faixa" class="col-sm-3 col-xs-6 col-sm-3">

      <h1>JavaScript</h1>

    </div>

    <div id="strip" class="hidden col-sm-12 col-sm-offset-1 col-md-offset-0"></div>

    <div id="circulo" class="hidden-xs col-sm-1 col-lg-offset-8 col-md-offset-8 col-xs-1 col-sm-offset-6 col-xs-offset-4">JS</div>

  </section>

  <div class="js-list">
    <div class="row">
      <div class="col-xs-12">
        <ul class="js-list-ul">

          <li class="js-list-item col-sm-6  col-lg-3 col-md-4">
            <div class="js-list-container col-xs-12">
              <header class="header">
                <a href="posts/post-1.php">
                  <img class="js-list-img" alt="electron logo"
                                           src="<?php echo $path; ?>img/javascript/es6-logo.png">
                </a>
              </header>

              <article class="js-list-title">

                <h3> <a href="posts/post-1.php">ES6 - O que há de novo? o guia definitivo</a> </h3>
              </article>
            </div>
          </li>
          <li class="js-list-item col-sm-6  col-lg-3 col-md-4">
            <div class="js-list-container col-xs-12">
              <header class="header">

                <a href="posts/post-2.php">
                  <img class="js-list-img" alt="emberjs logo"
                                           src="<?php echo $path; ?>img/javascript/ember-logo.jpg">
                </a>
              </header>

              <article class="js-list-title">
                <h3> <a href="posts/post-2.php">Uma comparação entre EmberJs e outros frameworks similares</a></h3>
              </article>
            </div>
          </li>
          <li class="js-list-item col-sm-6  col-lg-3 col-md-4">
            <div class="js-list-container col-xs-12">
              <header class="header">
                <a href="posts/post-3.php">
                  <img class="js-list-img" alt="electron logo"
                                           src="<?php echo $path; ?>img/javascript/csharp-logo2.jpg">
                </a>
              </header>

              <article class="js-list-title">
                <h3><a href="posts/post-3.php">Quanto C# está presente em TypeScript
                  </a>
                </h3>
              </article>
            </div>
          </li>
                <li class="js-list-item col-sm-6  col-lg-3 col-md-4">
            <div class="js-list-container col-xs-12">
              <header class="header">
                <a href="posts/post-4.php">
                  <img class="js-list-img" alt="electron logo"
                                           src="<?php echo $path; ?>img/javascript/electron.png">
                </a>
              </header>

              <article class="js-list-title">
                <h3>
                  <a href="posts/posts-4.php">
                    ElectronJs: A forma mais criativa para aplicações desktop
                  </a>
                </h3>

              </article>
            </div>
          </li>
          <li class="js-list-item col-sm-6 col-lg-3 col-md-4">
            <div class="js-list-container col-xs-12">
              <header class="header">
                <a href="posts/post-5.php">

                  <img class="js-list-img" alt="electron logo"
                                           src="<?php echo $path; ?>img/javascript/vuejs-logo.jpg">
                </a>
              </header>

              <article class="js-list-title">

                <a href="posts/post-5.php">
                  <h3>vuejs - primeiros passos</h3>
                </a>
              </article>
            </div>
          </li>



        </ul>
      </div>
    </div>
  </div>
</div>

<?php include '../../templates/footer.php'; ?>
