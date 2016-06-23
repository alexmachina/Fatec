<?php
$path = "../../../";
include '../../../templates/header.php'; ?>
       
        <section class="container">
	    <div class="row">
	       <div class="faixa-post col-xs-12">
	           <div class="titulo-container col-xs-12">
                <h1 class="col xs-12">Como usar o ARIA com o HTML5</h1>
                   <hr>
                        <div class="glyphicon glyphicon-calendar"><span class="data">20/05/2016</span>
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
                   <p class="p-html">Proin tellus sapien, hendrerit ut dolor sed, efficitur vehicula felis. Etiam egestas urna lectus, in fringilla dui condimentum mollis. Etiam eleifend, neque posuere euismod luctus, velit turpis ultricies lacus, a dictum quam nunc ac elit. Vivamus varius blandit tellus, venenatis blandit magna maximus non. Donec quis scelerisque purus.</p>
                   <h2>Funções do ARIA</h2>
                   <p class="p-html">Phasellus id cursus nibh. Vivamus dapibus vel quam quis pellentesque. Integer velit tellus, scelerisque at tellus quis, elementum egestas ante. Morbi fringilla, nibh a ultricies rutrum, purus sapien suscipit enim, vel maximus lorem nisl vitae turpis.</p>
                   <pre>
                        <code class='language-markup'>
&lt;div role="alert"&gt;
    Por favor, atualize seu browser para uma melhor experiência.
&lt;/div&gt;           
                        </code>
                    </pre>
                   <p class="p-html">Curabitur eleifend turpis ut turpis fermentum iaculis. Suspendisse a quam aliquet, gravida augue id, molestie dui. Sed aliquam sagittis mi. Mauris pharetra tortor elit, faucibus suscipit magna vehicula vitae. Etiam et erat et ipsum iaculis viverra venenatis nec lorem.</p>
                   <pre>
                        <code class='language-markup'>
&lt;a href="aria.html" role="presentation"&gt;
  &lt;img src="aria-thumbnail.jpg" role="presentation" alt="Use ARIA efetivamente"&gt;
&lt;/a&gt;       
                        </code>
                    </pre>
                   <h2>Atributos do ARIA</h2>
                   <p class="p-html">Curabitur tincidunt ullamcorper lectus ac fermentum. Vestibulum varius odio a dignissim porttitor. Vivamus ut facilisis purus. Duis consectetur rhoncus magna tincidunt tristique. Duis ac mi sit amet nunc dignissim condimentum. Morbi eget mauris eu quam faucibus luctus:</p>
                   <ul>
                   <li class="p-html">Nunc at ipsum felis. Fusce imperdiet aliquet justo egestas consectetur. </li>
                   <li class="p-html">Aliquam luctus nisi at metus imperdiet, sed ultrices neque sagittis.</li>
                   </ul>
                   <pre>
                        <code class='language-markup'>
&lt;span role="checkbox"
      aria-checked="true"
      tabindex="0"
      id="simulatedcheckbox"&gt;
&lt;/span&gt;      
                        </code>
                    </pre>
                   <p class="p-html">In non faucibus nulla. Cras sit amet viverra dolor. Nulla condimentum arcu ut nibh luctus consectetur. Donec convallis aliquam ipsum at maximus. Nulla gravida viverra lorem a suscipit. <a href="#">Pellentesque at scelerisque ipsum.</a></p>
                   <pre>
                        <code class='language-markup'>
&lt;figure aria-labelledby="operahouse_1" role="group"&gt;
    &lt;img src="operahousesteps.jpg" alt="A casa de Opera do Sidney"&gt;
    &lt;figcaption id="operahouse_1"&gt;Nós vimos opera  &lt;cite>Barbeador de Seville&lt;/cite&gt; aqui!&lt;/figcaption&gt;
&lt;/figure&gt;     
                        </code>
                    </pre>
                   <h2>Regras do ARIA</h2>
                   <p class="p-html">Aenean vehicula erat vitae varius convallis. Vivamus ut ipsum nec libero lobortis sodales.</p>
                   <h4>Use HTML Semântico sempre que possível</h4>
                   <p class="p-html">Ut enim leo, luctus in ullamcorper ac, <a href="#">dignissim</a> eget nisl. Nullam auctor erat urna, et ornare felis ultrices at. Phasellus tincidunt, enim quis varius sollicitudin, ante dolor aliquet eros, quis dictum ex velit blandit est. Phasellus id ligula mattis, ultricies augue nec, semper lorem. In ac consectetur nisl. Nam in justo porta, vulputate justo quis, mollis dolor. Nullam <a href="#">consectetur</a> enim mi, ut ultrices metus tincidunt quis.</p>
                   <h4>Seu elemento pode ter somente uma função</h4>
                   <p class="p-html">Aenean hendrerit dui risus, et interdum lorem imperdiet at. Duis egestas tempor erat at pellentesque. Nullam ultricies viverra urna, vel facilisis lorem ullamcorper et. Mauris in sapien condimentum, egestas ligula et, euismod lorem.</p>
                   <h4>Não mude os semânticos nativos</h4>
                   <p class="p-html">Integer finibus sollicitudin porttitor. Vivamus et consectetur quam, a pretium augue. Aliquam nulla massa, placerat rutrum gravida sit amet, iaculis vitae justo. Proin vitae tortor et tellus mollis faucibus. Praesent purus ex, pulvinar vel diam eu, <a href="#">fringilla tristique</a> mi.</p>
                   <pre>
                        <code class='language-markup'>
&lt;footer&gt;&lt;button&gt;Purchase this e-book&lt;/button&gt;&lt;/footer&gt;
                        </code>
                    </pre>
                   <h2>Quanto mais você pode fazer sua linguagem ficar mais acessível?</h2>
                   <h4 class="p-html">Use quantos elementos semânticos forem possíveis</h4>
                   <p class="p-html">Aenean dignissim ante erat, et viverra libero feugiat id. Aenean ut magna in quam bibendum tempus. Morbi faucibus egestas nulla a dapibus. Integer nec turpis et est molestie dictum <a href="#">sed a sem</a>.</p>
                   <ul>
                   <li class="p-html">Duis eget semper purus, id interdum neque. Nunc libero lorem, vehicula ac nibh pellentesque, scelerisque placerat neque.</li>
                   <li class="p-html">Phasellus et euismod risus. Vestibulum dignissim, quam non ullamcorper vehicula, dolor urna aliquet quam, in porta neque magna a nisi.</li>
                   </ul>
                   <pre>
                        <code class='language-markup'>
&lt;p&gt;In &lt;cite&gt;The Love Song - J. Alfred Prufock&lt;/cite&gt; by T.S. Eliot, the clinical imagery of the line &lt;q&gt;Like a patient etherized upon a table&lt;/q&gt; suggests themes of loneliness.&lt;/p&gt;
                        </code>
                    </pre>
                   <p class="p-html">In suscipit cursus magna a scelerisque. Sed at tristique est, quis luctus augue.</p>
                   <h4>Atributo 'alt'</h4>
                   <p class="p-html">Ut vel elit mauris. Maecenas sollicitudin <a href="#">orci</a> quis dui tempus, quis iaculis mi convallis. Morbi vel imperdiet quam. Sed in massa eget urna feugiat ultricies auctor eu nisl. Nullam viverra felis suscipit lacus bibendum, eu tristique orci scelerisque. Sed facilisis eros eu lorem porta, non gravida libero tristique.</p>
                   <pre>
                        <code class='language-markup'>
&lt;img src="bobby.jpg" alt="My dog Bobby playing fetch in the park"&gt;
                        </code>
                    </pre>
                   <h2>Um exemplo usando HTML Semântico e ARIA</h2>
                   <p class="p-html">Etiam at velit quis dolor commodo accumsan. Nulla ipsum neque, venenatis condimentum convallis ut, dictum vitae libero:</p>
                   <ul>
                   <li class="p-html">Aliquam rhoncus accumsan odio, ac facilisis ante ultrices sit amet. Fusce nulla purus, maximus vel libero quis, ultricies elementum nisi.</li>
                   <li class="p-html">Mauris aliquet dui vel placerat ultricies. Ut in vehicula odio.</li>
                   <li class="p-html">Praesent sit amet molestie lorem. Cras velit ligula, ultricies eu finibus ac, venenatis ut nulla.</li>
                   <li class="p-html">Etiam nec nibh consequat, varius nunc a, porttitor eros. Pellentesque lobortis mollis dictum.</li>
                   </ul>
                   <h2>Conclusão</h2>
                   <p class="p-html">Sed interdum leo leo. Donec luctus neque eu neque suscipit, ut fermentum neque egestas. Aenean interdum cursus mi non ultricies. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In cursus sapien eget ligula lacinia tristique. Aliquam blandit sed nulla ac hendrerit. Pellentesque ac tortor eu nisi sodales interdum. Mauris vel magna eget diam feugiat porttitor.</p>
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