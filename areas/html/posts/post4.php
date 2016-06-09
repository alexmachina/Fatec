<?php
$path = "../../../";
include '../../../templates/header.php'; ?>
        <section class="container">
	    <div class="row">
	       <div class="faixa-post col-xs-12">
	           <div class="titulo-container col-xs-12">
                <h1 class="col xs-12">Um modelo básico de HTML5 para qualquer projeto</h1>
                   <hr>
                <div class="autorpost col-xs-12"></div>
                   <img src="<?php echo $path; ?>img/quem-somos/guilherme.jpg" alt="Guilherme Felipe" class="foto-autor">
                   <a href="<?php echo $path; ?>comum/quem-somos.php" class="nome-autor">Guilherme Felipe</a>
                   <div class="glyphicon glyphicon-calendar"><span class="data">17/05/2016</span>
                   </div>
               </div>
            </div>
        </div>
        </section>
               <article class="container-post col-sm-3 col-xs-10 col-lg-offset-1">
                   <p class="p-html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus efficitur nisl cursus, dictum justo eu, feugiat nisi. Nullam fermentum, tellus vel ullamcorper luctus, erat orci scelerisque felis, porttitor euismod lectus libero vel tellus. Praesent non tortor eu urna aliquam ullamcorper. Pellentesque rutrum magna in pulvinar fermentum:</p>
                   <pre>
                        <code class='language-markup'>
&lt;!doctype html&gt;

&lt;html lang="en"&gt;
&lt;head&gt;
  &lt;meta charset="utf-8"&gt;

  &lt;title&gt;The HTML5 Basic&lt;/title&gt;
  &lt;meta name="description" content="The HTML5 Basic"&gt;
  &lt;meta name="author" content="Nighttools"&gt;

  &lt;link rel="stylesheet" href="css/styles.css"&gt;

  &lt;!--[if lt IE 9]&gt;
    &lt;script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"&gt;&lt;/script&gt;
  &lt;![endif]--&gt;
&lt;/head&gt;

&lt;body&gt;
  &lt;script src="js/scripts.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;            </code>
                    </pre>
                   <h2>Doctype</h2>
                   <p class="p-html">Fusce purus magna, aliquam eget efficitur vitae, lobortis non magna. Mauris pharetra vehicula consequat. Nunc efficitur lectus maximus sem iaculis eleifend. Nam porta nisi ut orci pharetra placerat. Ut id purus vestibulum, aliquam magna eu, faucibus nisl.</p>
                   <pre>
                    <code class='language-markup'>
&lt;!doctype html&gt;
                    </code>
                   </pre>
                   <p class="p-html">Quisque malesuada et ante ut ultrices. Donec fermentum venenatis pellentesque. Curabitur porta nulla enim, id placerat ligula imperdiet a. Fusce nec ultricies orci, iaculis varius tortor. Proin et elit finibus, luctus eros at, pretium urna. Nam ex sapien, dignissim a iaculis at, fringilla sed neque. Sed vehicula eu dui et feugiat. Suspendisse volutpat placerat quam sed vehicula.</p>
                   <h2>Elemento HTML</h2>
                   <pre>
                    <code class='language-markup'>
&lt;!doctype html&gt;
&lt;html lang="en"&gt;

&lt;/html&gt;       </code>
                   </pre>
                   <p class="p-html">Ut molestie dui sapien, pellentesque sollicitudin turpis viverra at. Donec consequat, risus in auctor lacinia, turpis nulla tincidunt massa, in pulvinar ante neque sed odio. Aenean posuere neque nec nisl sodales, quis porta augue malesuada. Donec quis tellus tincidunt, cursus lectus ut, tincidunt libero. Praesent sit amet metus massa. Donec suscipit posuere magna, auctor egestas nisi aliquet sollicitudin. Mauris sit amet hendrerit nunc, in mattis arcu. Sed at euismod nulla. Nulla blandit justo eget lorem fermentum ultricies.</p>
                   <h2>Elemento HEAD</h2>
                   <p class="p-html">Ut porta urna a nisl feugiat, vel finibus purus elementum. Aliquam erat volutpat. Fusce gravida enim ac arcu tristique fermentum. Vestibulum fringilla mollis maximus. Integer maximus nibh et commodo dignissim. Maecenas quis interdum mauris. Integer id ex et enim ullamcorper cursus aliquet ac felis. Suspendisse convallis, velit et molestie interdum, velit urna condimentum velit, id porta ligula magna et dui. Morbi eu urna mattis, <a href="#">tempus erat ut</a>, <a href="#">finibus justo.</a></p>
                   <pre>
                    <code class='language-markup'>
  &lt;meta charset="utf-8"&gt;

  &lt;title&gt;The HTML5 Basic&lt;/title&gt;
  &lt;meta name="description" content="The HTML5 Basic"&gt;
  &lt;meta name="author" content="Nighttools"&gt;

  &lt;link rel="stylesheet" href="css/styles.css"&gt;
                    </code>
                   </pre>
                   <p class="p-html">Aliquam pretium massa eu magna fringilla sodales. Vivamus dignissim felis in maximus ultrices. Nulla cursus tortor lacus, id pharetra enim fringilla at. Donec sit amet libero eget augue iaculis laoreet. Duis non orci semper, egestas odio at, venenatis diam. Quisque tempor et ipsum ut aliquam. Quisque mauris nisi, condimentum sit amet aliquam ultricies, pharetra sit amet elit. Proin elementum sagittis dictum. Cras scelerisque ornare orci ac porttitor.</p>
                   <h2>Nivelando o código</h2>
                   <p class="p-html">In bibendum sed enim ut malesuada. Mauris rutrum magna ut lorem ornare, et laoreet quam cursus. Morbi rhoncus dapibus diam, eu dapibus nulla feugiat vitae. Sed neque ligula, tempus et velit eu, interdum tristique neque. Quisque eget dapibus orci, et sodales sem. Integer facilisis turpis viverra rhoncus ultricies. Etiam a augue eu magna sodales elementum sed tempor nisi..</p>
                   <p class="p-html">Proin et tellus neque. Cras tincidunt fringilla nisi quis tristique. Donec porta ut odio eu rhoncus. Aenean accumsan dui orci, eu hendrerit tellus pellentesque id. Vestibulum auctor orci ac elit elementum placerat. Vestibulum ultrices, lectus molestie congue tincidunt, arcu felis dignissim dolor, non pellentesque massa quam eget ipsum.</p>
                   <pre>
                     <code class='language-markup'>
&lt;!--[if lt IE 9]&gt;
&lt;script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"&gt;&lt;/script&gt;
&lt;![endif]--&gt;   
                     </code>
                   </pre>
                   <p class="p-html">Aliquam ut tellus eu felis molestie sodales non in diam. Morbi rhoncus urna at sapien tincidunt aliquet. Cras rhoncus commodo risus quis vehicula.</p>
                   <p class="p-html">Ut interdum eget ex sed scelerisque. Donec commodo libero sit amet nunc condimentum porttitor.</p>
                   <h2>O resto é história</h2>
                   <p class="p-html">In gravida porttitor finibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras condimentum nisi vel magna mattis luctus. Nulla tempus tristique libero, non consectetur massa gravida sed. Ut ut risus tristique enim posuere tincidunt.</p>
                   <pre>
                     <code class='language-markup'>
&lt;script src="js/scripts.js"&gt;
                     </code>
                   </pre>
                   <p class="p-html">Cras vel metus vel justo venenatis varius. Sed nec interdum lectus, eu tempus orci. Pellentesque ultricies nibh sem, quis vulputate augue rhoncus in. Donec ipsum elit, viverra ut velit id, tempus suscipit risus. Aliquam in nibh id sem malesuada ultricies ac ut mi. Phasellus sed suscipit lacus, eget tristique eros.</p>
                       <hr>
                       <div class="autor-hr">
                      <span>por: </span><a href="<?php echo $path; ?> comum/quem-somos.php">Guilherme Felipe</a>
                        <div class="autor-bio">
                            <span>18 anos. Responsável pela área de "HTML e CSS" do site.</span>
                        </div>
                       </div>
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
                </ul>
            </aside>
            <aside class="cont-aside-html col-xs-offset-1 col-xs-2">
                <h1 class="more-this-mobile">MAIS SOBRE MOBILE:</h1>
                <ul>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-1.php">Criando uma aplicação Mobile com Reapp</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-2.php">O que os desenvolvedores podem esperar em Android N?</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-3.php">Gerenciamento de dependência com o Gerenciador de Pacotes Swift</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-4.php">Retrofit, um cliente HTTP simples para Android e Java</a></li>
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
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxh.php">Conheça o projeto UXnoBrasil.org</a></li>
                </ul>
            </aside>
 <?php include '../../../templates/footer.php'; ?>
