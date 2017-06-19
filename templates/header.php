<?php 
if(!isset($_GET['idioma'])){ $idioma = "pt";} else {$idioma = $_GET['idioma'];}
require_once ("vetor.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<title>Nighttools</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="<?= $path ?>favicon.png">

		<!-- CSS Libs -->
		<link rel="stylesheet" href="<?php echo $path; ?>vendor/bootstrap/dist/css/bootstrap.min.css" media="all">
		<link rel="stylesheet" href="<?php echo $path; ?>vendor/prism/dist/css/prism.css" media="all">
		<link rel="stylesheet" href="<?php echo $path; ?>css/bootstrap-theme.css" media="all">

		<!-- CSS Area Comum -->
		<link rel="stylesheet" href="<?php echo $path; ?>css/comum/parceiros.css" media="all">
		<link rel="stylesheet" href="<?php echo $path; ?>css/comum/quem-somos.css" media="all" />
		<link rel="stylesheet" href="<?php echo $path; ?>css/comum/normas.css" media="all" />

		<!-- CSS Alex -->
		<link rel="stylesheet" href="<?php echo $path; ?>css/areas/javascript/index.css" media="all">
		<link rel="stylesheet" href="<?php echo $path; ?>css/areas/javascript/javascript.css" media="all">

		<!-- CSS Index e Menu -->
		<link rel="stylesheet" href="<?php echo $path; ?>css/index.css" media="all">

		<!-- CSS Guilherme -->
		<link rel="stylesheet" href="<?php echo $path; ?>css/areas/html/index.css">
		<link rel="stylesheet" href="<?php echo $path; ?>css/areas/html/html-e-css.css">
		<link rel="stylesheet" href="<?php echo $path; ?>css/areas/html/estilo-posts.css">
        
		<!-- CSS Amanda -->
		<link rel="stylesheet" href="<?php echo $path; ?>css/areas/ux/estilopostdesing.css">
        
     
        
		<!-- CSS Ketlin -->
		<link rel="stylesheet" href="<?php echo $path; ?>css/areas/mobile/index.css" media="all">

	</head>

	<body>
		<div class="container-fluid">
			<header>
				<div class="row">
					<nav class="hidden-xs navbar navbar-nav text-center col-xs-12">
						<div class="nav-header">
							<div class="nav-title col-lg-3 col-lg-offset-4
							col-sm-4">
							<a class="nav-brand" href="<?php echo $path."index.php?idioma=$idioma"; ?>">
								<img alt="Logo do site nighttools com a palavra nighttools escrita" class="logo-comum" src="<?php echo $path; ?>img/logo-night-tools-b.png"></a>
						</div>
						<div class="nav-comum col-lg-5 col-md-6 col-sm-8 col-xs-12">
							<ul class="nav navbar-nav">
								<li class="hidden"><a href="#">Contato</a></li>
                                                                <li><a href="<?php echo $path; ?>comum/quem-somos.php?idioma=<?php echo $idioma; ?>"><?php echo $vetIdioma[1]; ?></a></li>
                                                                <li><a href="<?php echo $path; ?>comum/normas.php?idioma=<?php echo $idioma; ?>"><?php echo $vetIdioma[2]; ?></a></li>
								<li><a href="<?php echo $path;?>comum/parceiros.php?idioma=<?php echo $idioma; ?>"><?php echo $vetIdioma[3]; ?></a></li>
                                                                <li><a href="<?php echo $path;?>comum/contato.php?idioma=<?php echo $idioma; ?>"><?php echo $vetIdioma[4]; ?></a></li>
							</ul>
						</div>
                        <div>
                            <a href='?idioma=pt'><img src="<?php echo $path; ?>img/pt.png"></a>&nbsp;&nbsp;
                            <a href='?idioma=eng'><img src="<?php echo $path; ?>img/eng.png"></a>&nbsp;&nbsp;
                            <a href='?idioma=esp'><img src="<?php echo $path; ?>img/esp.png"></a>&nbsp;&nbsp;
                        </div>
					</div>
				</nav>
			</div>

			<div class="row row-nav-baixo">
				<nav class="navbar navbar-nav nav-baixo text-center col-xs-12">
					<div class="navbar-header visible-xs">
						<div class="navbar-brand brand-baixo">
							<a class="nav-brand black" href="<?php echo $path; ?>index.php">
								<img alt="O logo do site Nighttools com a palavra nighttools escrita" class="logo-comum-baixo" src="<?php echo $path; ?>img/logo-night-tools.png">
							</a>
						</div>

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-baixo" aria-expanded="false">
							<span class="icon-bar black"></span>
							<span class="icon-bar black"></span>
							<span class="icon-bar black"></span>
						</button>
					</div>
                                        <div class="col-sm-8  col-xs-12 col-md-offset-3 col-lg-offset-3 col-sm-offset-3 collapse navbar-collapse" id="nav-baixo">
                                          <div id="render-menu"></div>
                                                                                                                        <hr>
                                                                        <ul class="visible-xs nav navbar-nav nav-baixo">
                                                                            <li><a href="<?php echo $path; ?>comum/contato.php"><?php echo $vetIdioma[1]; ?></a></li>
                                                                                <li><a href="<?php echo $path; ?>comum/quem-somos.php"><?php echo $vetIdioma[2]; ?></a></li>
                                                                                <li><a href="<?php echo $path; ?>comum/normas.php"><?php echo $vetIdioma[3]; ?></a></li>
                                                                                <li><a href="<?php echo $path; ?>comum/parceiros.php"><?php echo $vetIdioma[4]; ?></a></li>
                                                                        </ul>
                                                        </div>

                                                                </nav>
                        </div>
                                                </header>

                                        </div>

<script id="menu-template" type="text/x-handlebars-template">
<ul class="nav navbar-nav nav-baixo">
    {{#each categorias}}
    <li><a href="/pages/categoria.php?id={{IdCategoria}}&idioma=<?php echo $idioma; ?>">
        <span class="glyphicon glyphicon-dot green" style="color:{{cor}};"></span>
  {{nome}}</a></li>
    {{/each}}
</ul>

</script>
