<?php
$path = "../../../";
if(!isset($_GET['idioma'])){ $idioma = "pt";} else {$idioma = $_GET['idioma'];}
require_once ("../../../templates/vetor.php"); 
include '../../../templates/header.php';
?>
       
        <section class="container">
	    <div class="row">
	       <div class="faixa-post col-xs-12">
	           <div class="titulo-container col-xs-12">
                <h1 class="col xs-12">Limpando um código de base do CSS</h1>
                   <hr>
                        <div class="glyphicon glyphicon-calendar"><span class="data">19/05/2016</span>
                        </div>
               </div>
            </div>
        </div>
        </section>
        <section>
            <div class="div-bio-autorh">
                <div class="autorpost">
                   <img src="<?php echo $path; ?>img/quem-somos/guilherme.jpg" alt="Guilherme Felipe" class="foto-autor">
                </div>
                <div class="bio-autorh">
                    <p><b>Guilherme Felipe</b>, o responsável pela área de HTML e CSS do NightTools, cursa o 2º semestre de Sistemas para Internet na FATEC de São Roque, é desenvolvedor iniciante, palmeirense e tem 18 anos. Gosta de praticar esportes, sair com os amigos e jogar videogame nas horas vagas.  Futuro Bill Gates.</p>
                </div>
            </div>
        </section>
               <article class="container-post col-sm-3 col-xs-12 col-lg-offset-1">
                   <p class="p-html">Praesent ac consequat ipsum. Duis porttitor dui nunc, vitae facilisis ex cursus ut. Ut facilisis dui augue, sed efficitur libero scelerisque eget. Nullam scelerisque tortor vel interdum iaculis. Phasellus pretium aliquam mauris non tempus.</p>
                   <h2>A dificuldade do Lint</h2>
                   <p class="p-html">Vestibulum lacinia a nisl in ultrices. Maecenas quis vulputate odio. <a href="#">Quisque</a> at erat eu erat lacinia suscipit. Aliquam venenatis dignissim enim sit amet consectetur. Nam placerat malesuada dolor at eleifend. Proin eleifend nec risus id <a href="#">tincidunt</a>. Etiam blandit justo nec lacus tempus pulvinar.</p>
                   <h2>Fixando erros encontrados no Lint</h2>
                   <p class="p-html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor lobortis turpis non sollicitudin. Aenean pharetra accumsan nisi non tempor. Quisque <a href="#">pretium diam urna</a>, ac tristique ligula consectetur sed.</p>
                   <h2>Reveja a estrutura</h2>
                   <p class="p-html">Pellentesque habitant morbi tristique senectus et netus et malesuada <a href="#">fames ac turpis</a> egestas. Mauris sodales erat nec libero imperdiet, maximus feugiat urna aliquam. Proin ullamcorper aliquet metus, et mollis urna sagittis sed. <a href="#">Quisque</a> sollicitudin tincidunt augue, sed tempus leo ullamcorper in. Morbi vel ullamcorper est, at <a href="#">finibus nisl</a>. Ut ac blandit orci, in iaculis nibh. Donec id dapibus quam.</p>
                   <pre>
                        <code class='language-css'>
.quote {
  padding: 10px;
}

.quote__attribution {
  font-size: 80%;
}

.quote > :first-child {
  margin-top: 0;
}

.quote > :last-child {
  margin-bottom: 0;
}
      
                        </code>
                    </pre>
                   <h2>Remova o excesso</h2>
                   <p class="p-html">Suspendisse id eleifend est. Maecenas nec ex ac sapien cursus consectetur eget iaculis lacus. Etiam scelerisque, purus eu rutrum lobortis, orci leo egestas nisl, ut tristique arcu velit non lorem. Sed commodo augue eu sodales suscipit. Morbi in nisl est. Curabitur consectetur mi sed aliquam malesuada. Sed sit amet iaculis arcu. Ut sed venenatis urna, ac venenatis neque. In pulvinar luctus risus in tempor. Sed fringilla varius dui, sed rhoncus leo condimentum nec.</p>
                   <pre>
                        <code class='language-css'>
.parent {
  /* ...alguma coisa aqui... */
}

.child-A {
  color: red;
}

.child-B {
  color: red;
}
      
                        </code>
                    </pre>
                   <h2>O CSS é esperto, você tem que ser mais ainda</h2>
                   <p class="p-html">Proin luctus lobortis nibh vitae varius. In vitae vestibulum nisi. Suspendisse feugiat fringilla vulputate. Pellentesque suscipit dignissim ex, at laoreet leo mollis id.</p>
                   <pre>
                        <code class='language-css'>
a {
  color: black; /* nããão... */
}
      
                        </code>
                    </pre>
                   <p class="p-html">Sed lacinia elit ante, quis molestie metus pulvinar vitae. Etiam quis iaculis ligula. Sed ullamcorper quis magna in dignissim. Maecenas et erat ut nisl bibendum tincidunt. Proin neque massa, ullamcorper nec posuere pellentesque, pulvinar quis tortor. Maecenas tempor sagittis augue, vel rutrum neque tempus ac.</p>
                   <pre>
                        <code class='language-css'>
a {
  color: inherit; /* Simmm! */
}
      
                        </code>
                    </pre>
                   <h2>Consiga seu melhor Git</h2>
                   <p class="p-html">Mauris fringilla sollicitudin malesuada. Proin in vulputate orci. Ut <a href="#">Git</a> dui sit amet eros malesuada semper. Cras eleifend at nisi ac eleifend. Phasellus nec metus elit. Donec rutrum, lectus ut lacinia dictum, massa urna lobortis justo, in facilisis massa augue non enim. In hac habitasse platea dictumst.</p>
                   <h2>Envolvendo</h2>
                   <p class="p-html">Aliquam consectetur justo fermentum, pellentesque risus eget, pellentesque leo. Pellentesque neque ante, feugiat sit amet mauris ac, malesuada interdum orci. Pellentesque at fermentum enim, at aliquet nisi. Praesent sagittis tempus nulla, in porta tortor finibus in.</p>
                </article>
           <aside class="cont-aside-html col-xs-offset-1 col-xs-2">
                <h1 class="more-this">MAIS SOBRE HTML & CSS:</h1>
                <ul>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post1.php">(Tutorial) Game em HTML5 utilizando Canvas</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post2.php">Como criar um site estático com o Metalsmith</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post3.php">Melhore a qualidade do seu CSS com PostCSS</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post4.php">Um modelo básico de HTML5 para qualquer projeto</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post6.php">Limpando um código de base do CSS</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post7.php">Como usar o ARIA com o HTML5</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post8.php">Aprenda a usar a unidade rem no CSS</a></li>
                </ul>
            </aside>
            <aside class="cont-aside-html col-xs-offset-1 col-xs-2">
                <h1 class="more-this-js">MAIS SOBRE JAVASCRIPT:</h1>
                <ul>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/javascript/posts/post-1.php">ES6 - O que há de novo? O guia definitivo</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/javascript/posts/post-2.php">React vs Ember vs Angular</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/javascript/posts/post-3.php">O que o TypeScript tem a ver com o C#?</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/javascript/posts/post-5.php">VueJs Primeiros Passos</a></li>
                </ul>
            </aside>
            <aside class="cont-aside-html col-xs-offset-1 col-xs-2">
                <h1 class="more-this-mobile">MAIS SOBRE MOBILE:</h1>
                <ul>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-1.php">Criando uma aplicação Mobile com Reapp</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-2.php">O que os desenvolvedores podem esperar em Android N?</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-3.php">Gerenciamento de dependência com o Gerenciador de Pacotes Swift</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-4.php">Retrofit, um cliente HTTP simples para Android e Java</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-5.php">Um passeio com Android Auto</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-6.php">Explorando Os Elementos UI Do Ubuntu Phone</a></li>
                </ul>
            </aside>
            <aside class="cont-aside-html col-xs-offset-1 col-xs-2">
                <h1 class="more-this-design">MAIS SOBRE DESIGN & UX:</h1>
                <ul>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxa.php">Mobile em um novo olhar sobre o desing</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxb.php">Desing e Layout</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxc.php">Flat X Realismo</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxd.php">Dominando Patterns SVG</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxe.php">Olhar simples</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxf.php">Os logos de 2016</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxg.php">Por que UX desing está relacionado mais com negócios do que com Desing?</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxh.php">O projeto UX no Brasil.org</a></li>
                </ul>
            </aside>
<?php include '../../../templates/footer.php'; ?>
