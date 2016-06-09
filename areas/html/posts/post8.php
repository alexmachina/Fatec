<?php
$path = "../../../";
include '../../../templates/header.php'; ?>
        <section class="container">
	    <div class="row">
	       <div class="faixa-post col-xs-12">
	           <div class="titulo-container col-xs-12">
                <h1 class="col xs-12">Aprenda a usar a unidade rem no CSS</h1>
                   <hr>
                <div class="autorpost col-xs-12"></div>
                  <img src="<?php echo $path; ?>img/quem-somos/guilherme.jpg" alt="Guilherme Felipe" class="foto-autor">
                   <a href="<?php echo $path; ?>comum/quem-somos.php" class="nome-autor">Guilherme Felipe</a>
                        <div class="glyphicon glyphicon-calendar"><span class="data">22/05/2016</span>
                        </div>
            </div>
        </div>
        </section>
               <article class="container-post col-sm-3 col-xs-12 col-lg-offset-1">
                   <p class="p-html">Suspendisse varius vitae risus sit amet <a href="#">pellentesque</a>. Quisque volutpat ante arcu, a condimentum tellus porttitor ut. Praesent auctor erat nec diam posuere, in <a href="#">consectetur nibh varius</a>. In lacinia ut felis nec fringilla. Nullam vestibulum, metus quis maximus accumsan, justo lorem gravida nulla, at <a href="#">tristique purus justo ac lorem</a>.</p>
                   <h2>O que são as unidades 'rem'?</h2>
                   <p class="p-html">Nam massa mauris, vulputate sit amet ultricies non, mollis vel diam. Phasellus nec leo sit amet arcu fermentum sollicitudin. Nullam a tellus diam. Nullam ipsum urna, facilisis eget lorem at, iaculis condimentum velit. Pellentesque at ex cursus massa malesuada blandit eget nec elit. Phasellus mollis magna orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per <a href="#">conubia nostra</a>, per inceptos himenaeos.</p>
                   <h2>'Rem' vs. 'Em'</h2>
                   <p class="p-html">Suspendisse et mi ut est semper varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis convallis sem quis neque posuere, ornare condimentum quam tempor. Praesent porttitor sem eget orci mattis, sit amet finibus enim hendrerit. Suspendisse blandit orci vitae leo molestie ultricies. Donec volutpat magna sit amet velit egestas, quis eleifend lectus iaculis. Integer neque enim, lacinia vitae tincidunt a, feugiat vitae enim. Morbi vulputate dui pretium, maximus tortor nec, bibendum sapien:</p>
                   <pre>
                        <code class='language-css'>
html {
  font-size: 100%;
}

ul {
  font-size: 0.75em;
}     
                        </code>
                    </pre>
                   <p class="p-html">Sed mattis lorem a tempus vestibulum. Suspendisse faucibus risus eget enim suscipit consectetur. Suspendisse ornare suscipit auctor. Phasellus nibh metus, mattis vel ultrices sit amet, condimentum eget diam:</p>
                   <pre>
                        <code class='language-css'>
html {
  font-size: 100%;
}

ul {
  font-size: 0.75rem;
}
                        </code>
                    </pre>
                   <h2>As font-sizes do 'rem'</h2>
                   <p class="p-html">Mauris ac libero quis justo elementum sodales. Etiam accumsan pretium turpis vitae venenatis. Vivamus aliquet at <a href="#">nibh et pulvinar</a>. Sed maximus arcu pretium sem fermentum, ut posuere metus consequat. Etiam vel tincidunt lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec nec ullamcorper lorem.</p>
                   <p class="p-html">Etiam sollicitudin condimentum dui id pulvinar:</p>
                   <ul>
                   <p><li class="p-html">10px = 0.625rem</li></p>
                   <p><li class="p-html">12px = 0.75rem</li></p>
                   <p><li class="p-html">14px = 0.875rem</li></p>
                   <p><li class="p-html">16px = 1rem (base)</li></p>
                   <p><li class="p-html">18px = 1.125rem</li></p>
                   <p><li class="p-html">20px = 1.25rem</li></p>
                   <p><li class="p-html">24px = 1.5rem</li></p>
                   <p><li class="p-html">30px = 1.875rem</li></p>
                   <p><li class="p-html">32px = 2rem</li></p>
                   </ul>
                   <pre>
                        <code class='language-css'>
body { font-size:62.5%; }  /* =10px */
h1   { font-size: 2.4em; } /* =24px */
p    { font-size: 1.4em; } /* =14px */
li   { font-size: 1.4em; } /* =14px? */
                        </code>
                    </pre>
                   <p class="p-html">Donec cursus enim a orci cursus, sit amet porttitor nunc commodo. Praesent ut lorem at neque venenatis iaculis. Pellentesque dignissim risus eros, vitae condimentum odio volutpat ac. In tristique venenatis felis, nec finibus mi cursus ac. Integer in dui molestie, gravida massa at, mollis erat. Duis rutrum eros vel velit dignissim viverra.</p>
                   <pre>
                        <code class='language-css'>
html { font-size: 62.5%; }  /* =10px */
body { font-size: 1.4rem; } /* =14px */
h1   { font-size: 2.4rem; } /* =24px */
                        </code>
                    </pre>
                   <h2>Usando 'rems' no Media Query</h2>
                   <p class="p-html">Vivamus convallis arcu massa, ut posuere est ultrices ac. Cras volutpat vulputate orci, in dictum elit dapibus vitae. Quisque lacinia, dui ut molestie tristique, elit velit maximus risus, at <a href="#">lacinia erat felis non leo</a>. Vivamus auctor aliquam purus vitae luctus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                   <pre>
                        <code class='language-css'>
.container {
  width: 100%;
}

@media (min-width: 85rem) {
  .container {
    width: 65rem;
  }
}
                        </code>
                    </pre>
                   <p class="p-html">Donec luctus magna at dolor facilisis, sit amet eleifend <a href="#">velit sagittis</a>. Maecenas sit amet est magna. Sed at rhoncus arcu. Morbi pellentesque magna cursus, eleifend lectus nec, ornare risus.</p>
                   <pre>
                        <code class='language-css'>
html {
  font-size: 62.5%; /* 62.5% of 16px = 10px */

  @media (min-width: 20rem) {
    /* 20*16px = 320px */
    background-color: lemonchiffon;
    font-size: 200%;
    /* 200% of 16px = 32px */
  }

  @media (min-width: 30em) {
    /* 30*16px = 480px */
    background-color: lightblue;
    font-size: 300%; /* 300% of 16px = 30px */
  }
}
                        </code>
                    </pre>
                   <p class="p-html">Nullam eget arcu finibus, blandit dui ac, pharetra lectus. Cras ultrices nec elit ac consectetur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac <a href="#">turpis egestas</a>.</p>
                   <h2>Usando 'rems' no <i>padding</i>, <i>margins</i> e <i>widths</i></h2>
                   <p class="p-html">Praesent sapien felis, ornare sed tincidunt sed, posuere sed libero. Integer dolor lorem, faucibus rhoncus eleifend eget, laoreet eu magna. Maecenas justo diam, consectetur vitae velit quis, rutrum faucibus orci.</p>
                   <p class="p-html"> Curabitur faucibus urna eu libero vulputate, nec tincidunt diam porttitor. Sed placerat est vel est sodales porttitor. Maecenas fermentum ipsum quis velit vehicula aliquet. Suspendisse ultricies est in turpis tristique eleifend. Quisque porttitor facilisis quam sed fringilla. Pellentesque luctus eleifend velit, in porttitor nibh gravida sit amet.</p>
                   <h2>Conclusão</h2>
                   <p class="p-html">Nunc maximus leo ultrices laoreet mattis. In finibus quam sit amet tellus sagittis, sit amet ultrices diam porta. Sed ut libero laoreet, viverra nisl id, condimentum diam. Praesent imperdiet, turpis sed auctor facilisis, quam erat commodo est, et euismod ante eros mollis ipsum. Nulla porta blandit tristique. Etiam vel mattis erat. Proin quis lectus viverra, molestie est id, finibus augue. Mauris tempor lorem quis leo ornare, non dapibus justo consectetur. Quisque maximus sem vel efficitur pharetra. Duis eget quam elit.</p>
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
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/js/posts/post-1.php">ES6 - O que há de novo? O guia definitivo</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/js/posts/post-2.php">React vs Ember vs Angular</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/js/posts/post-3.php">O que o TypeScript tem a ver com o C#?</a></li>
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
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/posts/postuxa.php">Mobile em um novo olhar sobre o desing</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/posts/postuxb.php">Desing e Layout</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/posts/postuxc.php">Flat X Realismo</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/posts/postuxd.php">Dominando Patterns SVG</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/posts/postuxe.php">Olhar simples</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/posts/postuxf.php">Os logos de 2016</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/posts/postuxg.php">Por que UX desing está relacionado mais com negócios do que com Desing?</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/posts/postuxh.php">Conheça o projeto UXnoBrasil.org</a></li>
                </ul>
            </aside>
 <?php include '../../../templates/footer.php'; ?>
