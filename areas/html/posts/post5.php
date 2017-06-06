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
                <h1 class="col xs-12">Introdução ao CSS Grid Layout</h1>
                   <hr>
                        <div class="glyphicon glyphicon-calendar"><span class="data">18/05/2016</span>
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
                   <p class="p-html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper porta nisl, ut efficitur ipsum feugiat nec. Suspendisse lobortis <a href="#">sit amet nibh eget</a> euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque eget magna quam. Vivamus varius est et facilisis rutrum. Aenean eget nulla id leo commodo elementum ac consequat ligula.</p>
                   <h2>Suporte para o Browser</h2>
                   <p class="p-html">Integer ante odio, fermentum eget lobortis at, vestibulum a mauris. Class aptent taciti sociosqu ad litora torquent per <a href="#">conubia nostra</a>, per inceptos himenaeos. Ut vel aliquet neque, vel scelerisque libero.</p>
                   <h2>Sistema de grade terminológica</h2>
                   <p class="p-html">Quisque ac nisi consectetur, consectetur risus pulvinar, condimentum orci. Mauris pellentesque arcu sed ipsum eleifend, id condimentum diam vehicula. Nullam egestas neque quis lorem lobortis auctor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas pharetra porttitor consectetur.</p>
                   <img class="img-post5" src="<?php echo $path; ?>img/html/img1-post5.png">
                   <p class="p-html"><b>Unidade fr: </b>Mauris ullamcorper mauris sed vulputate luctus. Nunc tincidunt dui vel commodo pulvinar. Aliquam fermentum mauris eget ex iaculis pharetra. Donec eget libero sodales, bibendum enim volutpat, porttitor risus. Aenean lobortis arcu purus, quis congue diam blandit ut.</p>
                   <p class="p-html"><b>Linhas: </b>Curabitur ultrices tempor odio. Ut purus metus, pretium mattis purus sed, auctor pharetra magna. Vivamus tristique neque massa, sit amet lacinia turpis bibendum ut.</p>
                   <p class="p-html"><b>Espaço entre linhas: </b>Etiam dapibus eget orci at porta. Sed cursus massa metus, nec imperdiet leo consectetur ac. Aliquam faucibus dui quis dolor semper, ut aliquam arcu accumsan.</p>
                   <p class="p-html"><b>Células: </b>Proin accumsan, leo in tincidunt rutrum, dui sem laoreet ex, eu rutrum nisl ante sed urna. Vestibulum lobortis, risus ut luctus molestie, arcu ex lobortis tellus, nec finibus metus tortor vel nibh.</p>
                   <p class="p-html"><b>Áreas: </b>Duis consequat, elit vitae suscipit rutrum, odio urna dignissim est, vitae tincidunt purus ligula a orci. Donec elementum diam convallis nisl malesuada ullamcorper.</p>
                   <h2>Posicionando elementos na grade</h2>
                   <pre>
                        <code class='language-markup'>
&lt;div class="grid-container"&gt;
  &lt;div class="grid-element item-a"&gt;A&lt;/div&gt;
  &lt;div class="grid-element item-b"&gt;B&lt;/div&gt;
  &lt;div class="grid-element item-c"&gt;C&lt;/div&gt;
  &lt;div class="grid-element item-d"&gt;D&lt;/div&gt;
  &lt;div class="grid-element item-e"&gt;E&lt;/div&gt;
  &lt;div class="grid-element item-f"&gt;F&lt;/div&gt;
&lt;/div&gt;            
                        </code>
                    </pre>
                   <p class="p-html">Duis tortor lorem, ornare ac leo sit amet, gravida consequat ante. Etiam et dolor sit amet neque sollicitudin auctor at vel felis. In vestibulum nulla dui, nec convallis est malesuada eu. Nunc suscipit sem in libero imperdiet, at iaculis dui tristique.</p>
                   <pre>
                        <code class='language-css'>
.grid-container {
  display: grid;
  grid-template-columns: 200px 10px 0.3fr 10px 0.7fr;
  grid-template-rows: auto 20px auto;
}           
                        </code>
                    </pre>
                   <p class="p-html">Nunc eu nulla commodo, iaculis leo vitae, varius ligula. Donec cursus mauris at tellus placerat ullamcorper. Mauris in est vitae eros rhoncus ullamcorper sit amet porta tortor. In purus enim, placerat nec imperdiet placerat, pulvinar eget dui. Nullam vitae maximus purus, mattis sagittis libero.</p>
                   <img class="img-post5" src="<?php echo $path; ?>img/html/img2-post5.png">
                   <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas:</p>
                   <p class="p-html">Proin nibh libero, viverra nec mauris ut, lacinia varius augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla placerat malesuada turpis sit amet rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae augue a erat lobortis consectetur at nec purus. Sed consequat, nulla in consectetur pharetra.</p>
                   <pre>
                        <code class='language-css'>
.element-b {
  grid-column-start: 3;
  grid-column-end: 4;
  grid-row-start: 1;
  grid-row-end: 2;
}
        
.element-f {
  grid-column-start: 5;
  grid-column-end: 6;
  grid-row-start: 3;
  grid-row-end: 4;
}           
                        </code>
                    </pre>
                   <p class="p-html">Morbi eget nibh felis. Nunc lobortis lacus quam, non maximus enim ullamcorper et.</p>
                   <h2>Criando um layout básico</h2>
                   <pre>
                        <code class='language-markup'>
&lt;div class="grid-container"&gt;
  &lt;div class="grid-element header"&gt;Header&lt;/div&gt;
  &lt;div class="grid-element sidebar"&gt;Sidebar&lt;/div&gt;
  &lt;div class="grid-element main"&gt;Main Content&lt;/div&gt;
  &lt;div class="grid-element extra"&gt;Extra Info&lt;/div&gt;
  &lt;div class="grid-element footer"&gt;Footer&lt;/div&gt;
&lt;/div&gt;            
                        </code>
                    </pre>
                   <img class="img-post5" src="<?php echo $path; ?>img/html/img3-post5.png">
                   <p class="p-html">Sed augue augue, porta a vestibulum sit amet, interdum eu risus. Nam eleifend molestie enim sit amet iaculis. Etiam semper luctus interdum. Vestibulum ac dignissim arcu. Morbi consequat aliquam urna nec lacinia. Phasellus quis lorem viverra urna facilisis facilisis. Pellentesque laoreet vulputate varius. Morbi vel nibh scelerisque, tincidunt justo non, pharetra massa. Nullam sit amet ex id massa porta laoreet. Aliquam dapibus tincidunt ante, vitae fringilla lacus commodo a. Vivamus vehicula, ipsum ut interdum sodales, lacus elit lobortis enim, elementum euismod orci odio nec augue. Vestibulum laoreet vel risus quis ornare:</p>
                   <p class="p-html">Quisque porta, nisl quis sodales elementum, nunc elit porttitor ligula, ac vestibulum nisl nunc viverra enim.</p>
                   <pre>
                        <code class='language-css'>
.header {
  grid-column-start: 1;
  grid-column-end: 4;
  grid-row-start: 1;
  grid-row-end: 2;
}
        
.extra {
  grid-column-start: 3;
  grid-column-end: 4;
  grid-row-start: 5;
  grid-row-end: 6;
}        
                        </code>
                    </pre>
                   <p class="p-html">Mauris sollicitudin nisl eu sodales dignissim. Nam blandit leo et sapien bibendum tincidunt. Aenean dignissim justo sit amet nulla dictum dapibus. Etiam ac quam et purus ultrices malesuada a sed odio.</p>
                   <h2>Conclusão</h2>
                   <p class="p-html">Sed vestibulum lectus non erat iaculis, nec rutrum erat feugiat. Ut vitae ipsum pharetra, euismod sem ac, placerat ex. Mauris eros augue, tincidunt sed nulla eu, pretium ultricies tortor. Pellentesque dictum quam et odio tristique convallis. In ornare ex mauris, sit amet tincidunt magna placerat sit amet. Donec a eleifend ex, sed aliquam odio. Integer elementum nulla non metus dapibus, et consectetur velit egestas.</p>
                   <p class="p-html">Mauris egestas cursus eleifend. Quisque eu tincidunt tortor. Nulla rutrum risus in tincidunt porttitor.</p>
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
