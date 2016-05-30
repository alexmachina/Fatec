<?php
$path = '';
include 'templates/header.php'; ?>

<article class="container">
	<div class="row">
		<ul class="articles-list">

		<li class="item js col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="item-container">
					<header class="item-header">
						<h1><a href="<?php echo $path; ?>areas/javascript/index.php">JavaScript</a></h1>
					</header>
					<article class="item-title">
						<h2><a href="<?php echo $path; ?>areas/javascript/posts/post-1.php">ES2015 - Um novo caminho para o JavaScript</a></h2>
					</article>
					<footer>
					 por: <span><a href="<?php echo $path; ?>comum/quem-somos.php">Alex Alonso</a></span>
					</footer>
				</div>
			</li>
		<li class="item html col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="item-container">
					<header class="item-header">
						<h1><a href="<?php echo $path; ?>areas/html/html-e-css.php">HTML e CSS</a></h1>
					</header>
					<article class="item-title">
						<h2><a href="<?php echo $path; ?>areas/html/posts/post5.php">Introdução ao CSS Grid Layout</a></h2>
					</article>
					<footer>
					 por: <span><a href="<?php echo $path; ?>comum/quem-somos.php">Guilherme Felipe</a></span>
					</footer>
				</div>
			</li>
		<li class="item design col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="item-container">
					<header class="item-header">
						<h1><a href="<?php echo $path; ?>areas/ux/homeux.php">Design e UX</a></h1>
					</header>
					<article class="item-title">
						<h2><a href="<?php echo $path; ?>areas/ux/postuxb.php">(Artigo) Entenda de uma vez por todas o que é UX</a></h2>
					</article>
					<footer>
					 por: <span><a href="<?php echo $path; ?>comum/quem-somos.php">Amanda Altava</a></span>
					</footer>
				</div>
			</li>
		<li class="item design col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="item-container">
					<header class="item-header">
						<h1><a href="<?php echo $path; ?>areas/ux/homeux.php">Design e UX</a></h1>
					</header>
					<article class="item-title">
						<h2><a href="<?php echo $path; ?>areas/ux/postuxc.php">Flat vs Realismo</a></h2>
					</article>
					<footer>
					 por: <span><a href="<?php echo $path; ?>comum/quem-somos.php">Amanda Altava</a></span>
					</footer>
				</div>
			</li>
		<li class="item js col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="item-container">
					<header class="item-header">
						<h1><a href="<?php echo $path; ?>areas/javascript/index.php">JavaScript</a></h1>
					</header>
					<article class="item-title">
						<h2><a href="<?php echo $path; ?>areas/javascript/posts/post-2.php">React vs Ember vs Angular</a></h2>
					</article>
					<footer>
					 por: <span><a href="<?php echo $path; ?>comum/quem-somos.php">Alex Alonso</a></span>
					</footer>
				</div>
			</li>
			<li class="item html col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<div class="item-container">
						<header class="item-header">
							<h1><a href="<?php echo $path; ?>areas/html/html-e-css.php">HTML e CSS</a></h1>
						</header>
						<article class="item-title">
							<h2><a href="<?php echo $path; ?>areas/html/posts/post2.php">Criando um site com Metalsmith</a></h2>
						</article>
						<footer>
						 por: <span><a href="<?php echo $path; ?>comum/quem-somos.php">Guilherme Felipe</a></span>
						</footer>
					</div>
				</li>
						<li class="item mobile col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="item-container">
							<header class="item-header">
								<h1><a href="<?php echo $path; ?>areas/mobile/index.php">Mobile</a></h1>
							</header>
							<article class="item-title">
								<h2><a href="<?php echo $path; ?>areas/mobile/posts/post-1.php">CRIANDO UMA APLICAÇÃO MOBILE COM REAPP</a></h2>
		</a>
		</h2>
							</article>
							<footer>
							 por:  <span><a href="<?php echo $path; ?>comum/quem-somos.php">Eclair</a></span>
							</footer>

							  </div>

					</li>

		</ul>

		<div class="col-lg-4 post">
		</div>


	</div>

</article>

<?php include 'templates/footer.php'; ?>
