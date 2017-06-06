<?php
if(!isset($_GET['idioma'])){ $idioma = "pt";} else {$idioma = $_GET['idioma'];}
require_once ("templates/vetor.php");
include 'templates/header.php';
?>

<article class="container">
	<div class="row">
		<ul class="articles-list">

		<li class="item js col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="item-container">
					<header class="item-header">
						<h1><a href="<?php echo $path; ?>areas/javascript/index.php"><?php echo $vetIdioma[5]; ?></a></h1>
					</header>
					<article class="item-title">
						<h2><a href="<?php echo $path; ?>areas/javascript/posts/post-1.php"><?php echo $vetIdioma[9]; ?></a></h2>
					</article>
					<footer>
					 <?php echo $vetIdioma[10]; ?>: <span><a href="<?php echo $path; ?>comum/quem-somos.php">Alex Alonso</a></span>
					</footer>
				</div>
			</li>
		<li class="item html col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="item-container">
					<header class="item-header">
						<h1><a href="<?php echo $path; ?>areas/html/html-e-css.php"><?php echo $vetIdioma[7]; ?></a></h1>
					</header>
					<article class="item-title">
						<h2><a href="<?php echo $path; ?>areas/html/posts/post5.php"><?php echo $vetIdioma[11]; ?></a></h2>
					</article>
					<footer>
					 <?php echo $vetIdioma[10]; ?>: <span><a href="<?php echo $path; ?>comum/quem-somos.php">Guilherme Felipe</a></span>
					</footer>
				</div>
			</li>
		<li class="item design col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="item-container">
					<header class="item-header">
						<h1><a href="<?php echo $path; ?>areas/ux/homeux.php"><?php echo $vetIdioma[6]; ?></a></h1>
					</header>
					<article class="item-title">
						<h2><a href="<?php echo $path; ?>areas/ux/postuxb.php"><?php echo $vetIdioma[12]; ?></a></h2>
					</article>
					<footer>
					 <?php echo $vetIdioma[10]; ?>: <span><a href="<?php echo $path; ?>comum/quem-somos.php">Amanda Altava</a></span>
					</footer>
				</div>
			</li>
		<li class="item design col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="item-container">
					<header class="item-header">
						<h1><a href="<?php echo $path; ?>areas/ux/homeux.php"><?php echo $vetIdioma[6]; ?></a></h1>
					</header>
					<article class="item-title">
						<h2><a href="<?php echo $path; ?>areas/ux/postuxc.php"><?php echo $vetIdioma[13]; ?></a></h2>
					</article>
					<footer>
					 <?php echo $vetIdioma[10]; ?>: <span><a href="<?php echo $path; ?>comum/quem-somos.php">Amanda Altava</a></span>
					</footer>
				</div>
			</li>
		<li class="item js col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="item-container">
					<header class="item-header">
						<h1><a href="<?php echo $path; ?>areas/javascript/index.php"><?php echo $vetIdioma[5]; ?></a></h1>
					</header>
					<article class="item-title">
						<h2><a href="<?php echo $path; ?>areas/javascript/posts/post-2.php"><?php echo $vetIdioma[14]; ?></a></h2>
					</article>
					<footer>
					 <?php echo $vetIdioma[10]; ?>: <span><a href="<?php echo $path; ?>comum/quem-somos.php">Alex Alonso</a></span>
					</footer>
				</div>
			</li>
			<li class="item html col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<div class="item-container">
						<header class="item-header">
							<h1><a href="<?php echo $path; ?>areas/html/html-e-css.php"><?php echo $vetIdioma[7]; ?></a></h1>
						</header>
						<article class="item-title">
							<h2><a href="<?php echo $path; ?>areas/html/posts/post2.php"><?php echo $vetIdioma[15]; ?></a></h2>
						</article>
						<footer>
						 <?php echo $vetIdioma[10]; ?>: <span><a href="<?php echo $path; ?>comum/quem-somos.php">Guilherme Felipe</a></span>
						</footer>
					</div>
				</li>
						<li class="item mobile col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="item-container">
							<header class="item-header">
								<h1><a href="<?php echo $path; ?>areas/mobile/index.php"><?php echo $vetIdioma[8]; ?></a></h1>
							</header>
							<article class="item-title">
								<h2><a href="<?php echo $path; ?>areas/mobile/posts/post-1.php"><?php echo $vetIdioma[16]; ?></a></h2>
							</article>
							<footer>
							 <?php echo $vetIdioma[10]; ?>:  <span><a href="<?php echo $path; ?>comum/quem-somos.php">Ketlin Moura</a></span>
							</footer>

							  </div>

					</li>

		</ul>

		<div class="col-lg-4 post">
		</div>


	</div>

</article>

<?php include 'templates/footer.php'; ?>
