<?php
$path = "../";
if(!isset($_GET['idioma'])){ $idioma = "pt";} else {$idioma = $_GET['idioma'];}
require_once ("../templates/vetor.php"); 
include '../templates/header.php';
?>

    <div class="container">
    <!-- Page header -->
    <div class="page-header">
        <h1>Quem somos</h1>
        <h3>Alunos e sessões</h3>
    </div>
    <!-- /Page header -->

    <!-- Timeline -->
    <div class="timeline">

        <!-- Line component -->
        <div class="line text-muted"></div>

        <!-- Separator -->
        <div class="separator text-muted">
            <time><h4>Alex Alonso</h4></time>
        </div>
        <!-- /Separator -->

        <!-- Panel -->
        <article class="panel panel-danger panel-outline">

            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-heart"></i>
            </div>
            <!-- /Icon -->

            <!-- Body -->
            <div class="panel-body">
                <strong>R.A</strong> 26.50.83.14.13.002.
            </div>
            <!-- /Body -->

        </article>

        <!-- Panel -->
        <article class="panel panel-default panel-outline">

            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-picture"></i>
            </div>
            <!-- /Icon -->

            <!-- Body -->
            <div class="panel-body">
                <img class="img-responsive img-rounded" src="../img/quem-somos/alex.png" />
            </div>
            <!-- /Body -->

        </article>
        <!-- /Panel -->

        <!-- Panel -->
        <article class="panel panel-primary">

            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-plus"></i>
            </div>
            <!-- /Icon -->

            <!-- Heading -->
            <div class="panel-heading">
                <h2 class="panel-title">Desenvolvedor e Gerente de Projetos</h2>
            </div>
            <!-- /Heading -->

            <!-- Body -->
            <div class="panel-body">
                Minhas sessões
            </div>
            <!-- /Body -->

            <!-- Body -->
            <div class="panel-body">
			<a href="<?php echo $path; ?>areas/javascript/index.php">JavaScript</a>, <a href="<?php echo $path; ?>">Home</a> e Layout
            </div>
            <!-- /Body -->


            <!-- Footer -->
            <div class="panel-footer">
                <small>Desenvolvedor JavaScript, amante de software livre e tecnologias Open Source, e roteirista de cinema nas horas vagas.</small>
            </div>
            <!-- /Footer -->

        </article>
        <!-- /Panel -->


    <!-- Timeline -->
    <div class="timeline">

        <!-- Line component -->
        <div class="line text-muted"></div>

        <!-- Separator -->
        <div class="separator text-muted">
            <time><h4>Amanda Altava Palhares</h4></time>
        </div>
        <!-- /Separator -->

        <!-- Panel -->
        <article class="panel panel-danger panel-outline">

            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-heart"></i>
            </div>
            <!-- /Icon -->

            <!-- Body -->
            <div class="panel-body">
                <strong>R.A</strong> 26.50.83.15.23.025.
            </div>
            <!-- /Body -->

        </article>

        <!-- Panel -->
        <article class="panel panel-default panel-outline">

            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-picture"></i>
            </div>
            <!-- /Icon -->

            <!-- Body -->
            <div class="panel-body">
                <img class="img-responsive img-rounded" src="../img/quem-somos/amanda.jpg" />
            </div>
            <!-- /Body -->

        </article>
        <!-- /Panel -->

        <!-- Panel -->
        <article class="panel panel-primary">

            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-plus"></i>
            </div>
            <!-- /Icon -->

            <!-- Heading -->
            <div class="panel-heading">
                <h2 class="panel-title">Desenvolvedora e Designer de Layout</h2>
            </div>
            <!-- /Heading -->

            <!-- Body -->
            <div class="panel-body">
                Minhas sessões
            </div>
            <!-- /Body -->

            <!-- Body -->
            <div class="panel-body">
			<a href="<?php echo $path; ?>areas/ux/homeux.php">Design e UX</a>, Design do layout,
                <a href="<?php echo $path; ?>comum/quem-somos.php">Quem somos,</a>
                <a href="<?php echo $path; ?>comum/contato.php">e Contato.</a>
            </div>
            <!-- /Body -->


            <!-- Footer -->
            <div class="panel-footer">
                <small>Compradora por ofício, pedagoga por formação e estudante de T.I. por curiosidade. Tem 27 anos e busca um sentido na vida.</small>
            </div>
            <!-- /Footer -->

        </article>
        <!-- /Panel -->


    <!-- Timeline -->
    <div class="timeline">

        <!-- Line component -->
        <div class="line text-muted"></div>

        <!-- Separator -->
        <div class="separator text-muted">
            <time><h4>Ketlin Moura</h4></time>
        </div>
        <!-- /Separator -->

        <!-- Panel -->
        <article class="panel panel-danger panel-outline">

            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-heart"></i>
            </div>
            <!-- /Icon -->

            <!-- Body -->
            <div class="panel-body">
                <strong>R.A</strong> 26.50.83.15.23.029
            </div>
            <!-- /Body -->

        </article>

        <!-- Panel -->
        <article class="panel panel-default panel-outline">

            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-picture"></i>
            </div>
            <!-- /Icon -->

            <!-- Body -->
            <div class="panel-body">
                <img class="img-responsive img-rounded" src="../img/quem-somos/ketlin.jpg" />
            </div>
            <!-- /Body -->

        </article>
        <!-- /Panel -->

        <!-- Panel -->
        <article class="panel panel-primary">

            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-plus"></i>
            </div>
            <!-- /Icon -->

            <!-- Heading -->
            <div class="panel-heading">
                <h2 class="panel-title">Desenvolvedora e Criadora do Logo</h2>
            </div>
            <!-- /Heading -->

            <!-- Body -->
            <div class="panel-body">
                Minhas sessões
            </div>
            <!-- /Body -->

            <!-- Body -->
            <div class="panel-body">
			<a href="<?php echo $path; ?>areas/mobile/">Mobile</a>, Logo
            </div>
            <!-- /Body -->


            <!-- Footer -->
            <div class="panel-footer">
                <small>Com 28 anos é estagiária em redes, estudante determinada, amante de cinema, tecnologia e animais.</small>
            </div>
            <!-- /Footer -->

        </article>
        <!-- /Panel -->


    <!-- Timeline -->
    <div class="timeline">

        <!-- Line component -->
        <div class="line text-muted"></div>

        <!-- Separator -->
        <div class="separator text-muted">
            <time><h4>Guilherme Felipe</h4></time>
        </div>
        <!-- /Separator -->

        <!-- Panel -->
        <article class="panel panel-danger panel-outline">

            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-heart"></i>
            </div>
            <!-- /Icon -->

            <!-- Body -->
            <div class="panel-body">
                <strong>R.A</strong> 26.50.83.15.23.024.
            </div>
            <!-- /Body -->

        </article>

        <!-- Panel -->
        <article class="panel panel-default panel-outline">

            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-picture"></i>
            </div>
            <!-- /Icon -->

            <!-- Body -->
            <div class="panel-body">
                <img class="img-responsive img-rounded" src="../img/quem-somos/guilherme.jpg" />
            </div>
            <!-- /Body -->

        </article>
        <!-- /Panel -->

        <!-- Panel -->
        <article class="panel panel-primary">

            <!-- Icon -->
            <div class="panel-heading icon">
                <i class="glyphicon glyphicon-plus"></i>
            </div>
            <!-- /Icon -->

            <!-- Heading -->
            <div class="panel-heading">
                <h2 class="panel-title">Desenvolvedor e Tester</h2>
            </div>
            <!-- /Heading -->

            <!-- Body -->
            <div class="panel-body">
                Minhas sessões
            </div>
            <!-- /Body -->

            <!-- Body -->
            <div class="panel-body">
			<a href="<?php echo $path; ?>areas/html/html-e-css.php">HTML e CSS</a>
			<a href="<?php echo $path; ?>comum/normas.php">e Normas de utilização</a>
            </div>
            <!-- /Body -->


            <!-- Footer -->
            <div class="panel-footer">
                <small> Desenvolvedor iniciante, estudante, palmeirense e tem 19 anos. Futuro Bill Gates.</small>
            </div>
            <!-- /Footer -->

        </article>
        <!-- /Panel -->


    </div>
    <!-- /Timeline -->
</div>


</div>
</div>

 <?php include '../templates/footer.php'; ?>
