<?php
$path = "../../../";
include '../../../templates/header.php'; ?>
       
        <section class="container">
	    <div class="row">
	       <div class="faixa-post col-xs-12">
	           <div class="titulo-container col-xs-12">
                <h1 class="col xs-12">Como criar um site estático com o Metalsmith</h1>
                   <hr>
                   <div class="glyphicon glyphicon-calendar"><span class="data">14/05/2016</span>
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
                   <ul>
                   <li class="p-html">Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing elit</a>. Suspendisse nec leo eleifend, ullamcorper elit ac, varius erat.</li>
                   <li class="p-html">Duis in justo maximus, efficitur justo in, bibendum erat. Nullam mollis fringilla lorem, quis condimentum nibh ullamcorper et.</li>
                   </ul>
                    <h2>Porquê Metalsmith?</h2>
                    <p class="p-html">Curabitur efficitur consequat porttitor. Suspendisse et massa malesuada, maximus augue a, cursus augue. Curabitur dignissim massa ipsum, at aliquet leo finibus ut. Pellentesque non arcu non mauris gravida fringilla. Nam eget magna massa.
Morbi sed lacus viverra, ultrices ligula nec, finibus tortor. Cras blandit pharetra ante, ac mattis erat pulvinar sit amet. </p>
                   <h2>Instale o Metalsmith</h2>
                   <p class="p-html">Aenean congue felis sapien, in <a href="#">pharetra</a> metus ultrices vitae. In euismod tellus at aliquam mattis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras tristique dui non ipsum cursus, vitae accumsan massa rhoncus. Aliquam quis ultrices lacus.</p>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
cd project && cd project
npm init -y
                            </code>
                        </pre>
                    </div>
                   <h2>Estrutura do projeto</h2>
                   <p class="p-html">Praesent luctus bibendum ipsum, quis lacinia risus vehicula quis. Sed sagittis sit amet sapien quis cursus. Ut augue nibh, viverra nec arcu ac, <a href="#">suscipit ultricies augue.</a></p>
                        <h4>Páginas</h4>
                        <p class="p-html">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin iaculis sagittis iaculis. Praesent lacinia et nunc vel sodales. Duis orci felis, accumsan ac varius ac, facilisis id lacus. Integer egestas ut risus non rhoncus. Quisque a pellentesque neque. Nullam vel mauris id mauris semper congue in eget sem.</p>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
---
title: Título da minha página
description: Descrição da página
layout: page.html
priority: 0.9
date: 14/05/2016
publish: draft
---

Isso é uma página de demonstração

## Exemplo de título
(Corpo do texto)
                            </code>
                        </pre>
                    </div>
                        <h4>Templates</h4>
                        <p class="p-html">Maecenas imperdiet mi eget felis sodales pulvinar. Etiam quis aliquet ex, eu sodales enim. Donec vestibulum, dui ut porta mollis, purus nisl laoreet lacus, at lobortis nibh eros ac ligula. Pellentesque viverra justo in est tempor, id tristique enim rhoncus. Phasellus orci purus, varius non felis eu, tristique semper est. Etiam hendrerit at tellus et pharetra. Nulla sit amet laoreet arcu, vitae efficitur nisi.</p>
                        <h4>Partials</h4>
                        <p class="p-html">Quisque quis lacus neque. Donec venenatis enim vel diam dictum faucibus. Etiam quis cursus diam. Maecenas ut nunc posuere, convallis est id, bibendum urna. Mauris egestas ligula faucibus cursus tincidunt. Suspendisse pulvinar tristique erat et fringilla. Sed non neque tincidunt, rhoncus elit id, congue mi.</p>
                        <h4>Assets estáticos</h4>
                        <p class="p-html">Pellentesque nisi massa, facilisis vel odio aliquet, dictum volutpat odio. Nullam blandit risus turpis, vel varius enim euismod in. Nullam ut tincidunt velit.</p>
                        <h4>Plugins personalizados</h4>
                        <p class="p-html">Phasellus maximus nunc ligula, nec dictum massa accumsan sed. Aliquam nec augue arcu. Proin ut dui fringilla, fringilla ante mattis, commodo leo.</p>
                        <h4>Construção do diretório</h4>
                        <p class="p-html">Pellentesque dictum orci vitae dui tincidunt fermentum. Sed vitae urna facilisis, accumsan neque vitae, eleifend est. Mauris vulputate nibh efficitur enim auctor posuere. Sed varius elementum mattis. Phasellus vel augue eu tellus pretium ullamcorper vitae elementum orci.</p>
                    <h2>Definindo seu primeiro Build File</h2>
                    <div class="codigo-g">
                        <pre>
                            <code class="language-js">
// Build básico

'use strict';

var
  metalsmith = require('metalsmith'),
  markdown   = require('metalsmith-markdown'),

  ms = metalsmith(__dirname) // diretório de trabalho
    .clean(true)            // limpa a build do diretório
    .source('src/html/')    // diretório da source da página
    .destination('build/')  // o diretório destinatário
    .use(markdown())        // converte markdown para HTML
    .build(function(err) {  // constrói o site
      if (err) throw err;   // e alguns erros...
    });
                            </code>
                        </pre>
                    </div>
                    <p class="p-html">Ut non faucibus tellus. Maecenas vehicula consequat nisl, posuere fermentum mauris porta id. Nulla in neque posuere, ullamcorper justo eu, varius lacus. Mauris sollicitudin odio dolor, et malesuada lacus blandit non. Nunc sodales, nulla quis rhoncus pharetra, urna urna iaculis dolor, sit amet consectetur quam justo id ante.</p>
                    <h2>Plugin do Metalsmith</h2>
                    <div class="codigo-g">
                        <pre>
                            <code class="language-js">
function debug(logToConsole) {
  return function(files, metalsmith, done) {
    if (logToConsole) {
      console.log('\nMETADATA:');
      console.log(metalsmith.metadata());

      for (var f in files) {
        console.log('\nFILE:');
        console.log(files[f]);
      }
    }

    done();
  };
};
                            </code>
                        </pre>
                    </div>
                   <p class="p-html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultricies mattis tortor, vitae mattis magna sollicitudin id. Nam tristique condimentum purus sed volutpat. In at erat eget sem pharetra pretium. Etiam tristique nisl dui, vel porttitor risus tempus et. Duis rhoncus est sed velit ornare, eget interdum <a href="#">tellus dignissim.</a></p>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
ms = metalsmith(__dirname) // diretório de trabalho
  .clean(true)             // limpa a build do diretório
  .source('src/html/')     // diretório da source da página
  .destination('build/')   // o diretório destinatário
  .use(markdown())         // converte Markdown para HTML
  .use(debug(true))        // *** NOVO *** informação de saída do debug
  .build(function(err) {   // constrói o site
    if (err) throw err;    // e alguns erros...
  });
                            </code>
                        </pre>
                    </div>
                    <h2>Fazendo o melhor Build</h2>
                   <p class="p-html">Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing</a> elit. Vivamus id risus tempor mi rutrum fermentum a sed nisi.</p>
                    <div class="codigo-g">
                        <pre>
                            <code class="language-js">
devBuild = ((process.env.NODE_ENV || '').trim().toLowerCase() !== 'production')
                            </code>
                        </pre>
                    </div>
                   <p class="p-html">Aenean sodales malesuada sem ornare sagittis.</p>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
dir = {
  base:   __dirname + '/',
  lib:    __dirname + '/lib/',
  source: './src/',
  dest:   './build/'
}
                            </code>
                        </pre>
                    </div>
                   <p class="p-html">Donec lacinia, felis ac condimentum bibendum, justo massa porta nunc, et mollis justo augue nec lorem.</p>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
metalsmith  = require('metalsmith'),
markdown    = require('metalsmith-markdown'),
publish     = require('metalsmith-publish'),
wordcount   = require("metalsmith-word-count"),
collections = require('metalsmith-collections'),
permalinks  = require('metalsmith-permalinks'),
inplace     = require('metalsmith-in-place'),
layouts     = require('metalsmith-layouts'),
sitemap     = require('metalsmith-mapsite'),
rssfeed     = require('metalsmith-feed'),
assets      = require('metalsmith-assets'),
htmlmin     = devBuild ? null : require('metalsmith-html-minifier'),
browsersync = devBuild ? require('metalsmith-browser-sync') : null,

// plugins padrões
setdate     = require(dir.lib + 'metalsmith-setdate'),
moremeta    = require(dir.lib + 'metalsmith-moremeta'),
debug       = consoleLog ? require(dir.lib + 'metalsmith-debug') : null,
                            </code>
                        </pre>
                    </div>
                   <p class="p-html">Sed sodales eros elit, nec elementum nibh dapibus eget. Donec at est et orci blandit tempor. Donec ac tempor lacus. Sed a porta diam. Curabitur quis purus leo. </p>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
siteMeta = {
  devBuild: devBuild,
  version:  pkg.version,
  name:     'Site estático',
  description:     'Uma demonstração de como fazer um site estático com Metalsmith',
  author:   'Guilherme Felipe',
  rootpath:  devBuild ? null  : '/sitepoint-editors/metalsmith-demo/master/build/' // aponta para um path absoluto (nulo para relativos)
}
                            </code>
                        </pre>
                     </div>
                   <p class="p-html">Nullam vel nibh in magna porttitor hendrerit at quis dolor. Mauris at enim ultrices, interdum diam sit amet, sodales odio.</p>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
templateConfig = {
  engine:     'handlebars',
  diretório:  dir.source + 'template/',
  partials:   dir.source + 'partials/',
  padrão:    'page.html'
}
                            </code>
                        </pre>
                     </div>
                   <p class="p-html">Integer blandit cursus felis id suscipit.</p>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
.use(collections({                  // determina a coleção da página/taxonomia
   page: {
     pattern:    '**/index.*',
     sortBy:     'priority',
     reverse:    true,
     refer:      false
   },
   start: {
     pattern:    'start/**/*',
     sortBy:     'priority',
     reverse:    true,
     refer:      true,
     metadata: {
       layout:   'article.html'
     }
   },
   article: {
     pattern:    'article/**/*',
     sortBy:     'date',
     reverse:    true,
     refer:      true,
     limit:      50,
     metadata: {
       layout:   'article.html'
     }
   }
 }))
                            </code>
                        </pre>
                     </div>
                    <p class="p-html">Aliquam eu nulla placerat, sodales est ac, varius nibh. Pellentesque at interdum enim.</p>
                    <div class="codigo-g">
                        <pre>
                            <code class="language-js">
ms
  .use(sitemap({                          // gera um sitemap.xml
    hostname:     siteMeta.domain + (siteMeta.rootpath || ''),
    omitIndex:    true
  }))
  .use(rssfeed({                          // gera um RSS feed para articles
    collection:   'article',
    site_url:     siteMeta.domain + (siteMeta.rootpath || ''),
    title:        siteMeta.name,
    description:  siteMeta.desc
  }))
  .use(assets({                            // cópia dos assets: CSS, imagens etc.
    source:       dir.source + 'assets/',
    destination:  './'
  }))
                            </code>
                        </pre>
                     </div>
                    <h2>As partes ruins do Metalsmith</h2>
                    <p class="p-html">Ut eget odio hendrerit arcu molestie elementum porttitor non lacus. Vivamus tincidunt nulla vitae dui scelerisque interdum</p>
                        <h4>Plugins imcompatíveis</h4>
                   <p class="p-html">Pellentesque eget <a href="#">turpis nisl</a>. Aliquam erat volutpat. Suspendisse nec feugiat sapien. Mauris porttitor nibh vel porttitor finibus. Maecenas viverra cursus sapien, nec tincidunt leo rutrum eget.</p>
                        <h4>Um erro de ordem no plugin é perigoso</h4>
                   <p class="p-html">Vivamus ex dolor, laoreet vel pharetra suscipit, dignissim a nisi. Aliquam ante turpis, volutpat non elementum non, congue id nibh. Duis risus lectus, <a href="#">convallis</a> non placerat ac, facilisis dignissim lacus. Maecenas ultrices mi non vulputate hendrerit.</p>
                        <h4>Reconstruir erros do Browsersync</h4>
                   <p class="p-html">Phasellus fermentum porta pharetra. Duis vitae ultricies ipsum. Cras nisl purus, venenatis et nunc vel, venenatis accumsan nulla. <a href="#">Phasellus sem</a> quam, suscipit ac sem in, auctor mollis turpis.</p>
                    <h2>Você ainda precisa de um Gulp?</h2>
                   <p class="p-html">Nullam venenatis sit amet lectus et interdum. Aenean <a href="#">pellentesque rhoncus</a> odio vitae auctor. Morbi tellus ipsum, tempor nec est eget, egestas dignissim nisi. Ut et commodo orci, mattis vestibulum diam. Proin tincidunt nisi et felis aliquam, a laoreet odio imperdiet. Curabitur <a href="#">bibendum</a>, velit sed volutpat pharetra, nunc ipsum rutrum nisi, nec facilisis tellus odio in nibh. Aliquam turpis mi, accumsan porttitor quam in, <a href="#">interdum</a> vulputate quam.</p>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
                   var
  gulp       = require('gulp'),
  metalsmith = require('metalsmith'),
  publish    = require('metalsmith-publish'),
  markdown   = require('metalsmith-markdown');

// constrói arquivos HTML usando Metalsmith
gulp.task('html', function() {

  var ms = metalsmith(dir.base)
    .clean(false)
    .source('src/html/')
    .destination('build')
    .use(publish())
    .use(markdown())
    .build(function(err) {
      if (err) throw err;
    });

});
                            </code>
                        </pre>
                     </div>
                    <h2>Metalsmith é para você?</h2>
                   <p class="p-html">Aenean dictum enim vel nisi finibus fermentum. Pellentesque luctus porttitor erat in pellentesque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut venenatis velit quis ligula mollis placerat. Duis eu efficitur ipsum. Integer commodo justo sit amet auctor finibus. Ut ac dictum diam. Mauris nec ligula nisl. Pellentesque rhoncus, justo ut luctus placerat, eros nibh maximus felis, at accumsan nunc velit non justo. Aenean lacinia massa a rhoncus <a href="#">volutpat.</a></p>
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
