<?php
$path = "../../";
if(!isset($_GET['idioma'])){ $idioma = "pt";} else {$idioma = $_GET['idioma'];}
require_once ("../../templates/vetor.php"); 
include '../../templates/header.php';
?>
          
           <article class="container">
	<div class="row">
	<div class="faixa-html col-xs-12">
	    <div class="titulo-container col-xs-12">
	        <h1 class="title-htmlecss">HTML e CSS</h1>
	    </div>
	</div>
		<ul class="articles-list">
		<li class="caixa-h col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <a href="<?php echo $path; ?>areas/html/posts/post8.php">
				<div class="caixa-indexhtml">
                    <img src="<?php echo $path; ?>img/html/rem.png" alt="Unidade REM" class="img-caixa">
				</div>
                <div class="caixa-bottom">
                    <article class="titulo-caixah">
						<h2><a href="<?php echo $path; ?>areas/html/posts/post8.php">Aprenda a usar a unidade rem no CSS</a></h2>
					</article>
                </div>
			</li>
			<li class="caixa-h col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<a href="<?php echo $path; ?>areas/html/posts/post7.php">
                <div class="caixa-indexhtml">
                    <img src="<?php echo $path; ?>img/html/aria.png" alt="Aria" class="img-caixa">
				</div>
                <div class="caixa-bottom">
                    <article class="titulo-caixah">
						<h2><a href="<?php echo $path; ?>areas/html/posts/post7.php">Como usar o ARIA com o HTML5</a></h2>
					</article>
                </div>
                </a>
			</li>
			<li class="caixa-h col-lg-3 col-md-4 col-sm-6 col-xs-12">
			    <a href="<?php echo $path; ?>areas/html/posts/post6.php">
				<div class="caixa-indexhtml">
                    <img src="<?php echo $path; ?>img/html/css.png" alt="CSS" class="img-caixa">
				</div>
                <div class="caixa-bottom">
                    <article class="titulo-caixah">
						<h2><a href="<?php echo $path; ?>areas/html/posts/post6.php">Limpando um código de base do CSS</a></h2>
					</article>
                </div>
                </a>
			</li>
			<li class="caixa-h col-lg-3 col-md-4 col-sm-6 col-xs-12">
			    <a href="<?php echo $path; ?>areas/html/posts/post5.php">
				<div class="caixa-indexhtml">
                    <img src="<?php echo $path; ?>img/html/css.png" alt="CSS" class="img-caixa">
				</div>
                <div class="caixa-bottom">
                    <article class="titulo-caixah">
						<h2><a href="<?php echo $path; ?>areas/html/posts/post5.php">Introdução ao CSS Grid Layout</a></h2>
					</article>
                </div>
                </a>
			</li>
			<li class="caixa-h col-lg-3 col-md-4 col-sm-6 col-xs-12">
			    <a href="<?php echo $path; ?>areas/html/posts/post4.php">
				<div class="caixa-indexhtml">
                    <img class="img-caixa" alt="HTML5" src="<?php echo $path; ?>img/html/html5.png">
				</div>
                <div class="caixa-bottom">
                    <article class="titulo-caixah">
						<h2><a href="<?php echo $path; ?>areas/html/posts/post4.php">Um modelo básico de HTML5 para qualquer projeto</a></h2>
					</article>
                </div>
                </a>
			</li>
			<li class="caixa-h col-lg-3 col-md-4 col-sm-6 col-xs-12">
			    <a href="<?php echo $path; ?>areas/html/posts/post3.php">
				<div class="caixa-indexhtml">
                    <img src="<?php echo $path; ?>img/html/postcss.png" alt="PostCSS" class="img-caixa">
				</div>
                <div class="caixa-bottom">
                    <article class="titulo-caixah">
						<h2><a href="<?php echo $path; ?>areas/html/posts/post3.php">Melhore a qualidade do seu CSS com PostCSS</a></h2>
					</article>
                </div>
                </a>
			</li>
			<li class="caixa-h col-lg-3 col-md-4 col-sm-6 col-xs-12">
			    <a href="<?php echo $path; ?>areas/html/posts/post2.php">
				<div class="caixa-indexhtml">
                    <img src="<?php echo $path; ?>img/html/metalsmith.png" alt="Metalsmith" class="img-caixa">
				</div>
                <div class="caixa-bottom">
                    <article class="titulo-caixah">
						<h2><a href="<?php echo $path; ?>areas/html/posts/post2.php">Como criar um site estático com o Metalsmith</a></h2>
					</article>
                </div>
                </a>
			</li>
			<li class="caixa-h col-lg-3 col-md-4 col-sm-6 col-xs-12">
			    <a href="<?php echo $path; ?>areas/html/posts/post1.php">
				<div class="caixa-indexhtml">
                    <img src="<?php echo $path; ?>img/html/canvas.png" alt="Canvas" class="img-caixa">
				</div>
                <div class="caixa-bottom">
                    <article class="titulo-caixah">
						<h2><a href="<?php echo $path; ?>areas/html/posts/post1.php">(Tutorial) Game em HTML5 utilizando Canvas</a></h2>
					</article>
                </div>
                </a>
			</li>
			<div class="col-lg-4 post">
		</div>
	</div>
</article>
            <hr>
<?php include '../../templates/footer.php'; ?>
