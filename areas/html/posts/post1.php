<?php
$path = "../../../";
include '../../../templates/header.php'; ?>
        <section class="container">
	    <div class="row">
	       <div class="faixa-post col-xs-12">
	           <div class="titulo-container col-xs-12">
                <h1 class="col xs-12">(Tutorial) Game em HTML5 utilizando Canvas</h1>
                <hr>
                <div class="autorpost col-xs-12"></div>
                   <img src="<?php echo $path; ?> img/quem-somos/guilherme.jpg" alt="Guilherme Felipe" class="foto-autor">
                   <a href="<?php echo $path; ?> comum/quem-somos.php" class="nome-autor">Guilherme Felipe</a>
                   <div class="glyphicon glyphicon-calendar"><span class="data">12/05/2016</span>
                   </div>
               </div>
            </div>
        </div>
        </section>
               <article class="container-post col-md-12 col-lg-9">
                   <p class="p-html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id mauris ut diam facilisis efficitur ac nec urna. <a href="#">Phasellus nisl mi</a>, efficitur vel ex suscipit, imperdiet varius tortor. Proin vehicula mattis neque vel pharetra. Suspendisse urna turpis, mollis in ultricies blandit, aliquet quis ligula. Ut aliquam ornare lacus, et porttitor libero.</p>
                    <h2>1. Crie o canvas</h2>
                    <div class="codigo-g">
                        <pre>
                            <code class="language-js">
// Crie o canvas
var canvas = document.createElement("canvas");
var ctx = canvas.getContext("2d");
canvas.width = 512;
canvas.height = 480;
document.body.appendChild(canvas);
                            </code>
                        </pre>
                    </div>
                    <p class="p-html">Vivamus sodales arcu in metus viverra, et venenatis ex bibendum. In dignissim, tellus ac elementum volutpat, est magna rutrum tortor, vitae varius tortor dui in metus. Donec pulvinar pulvinar magna quis elementum. Nunc quis sem sed neque feugiat suscipit non quis leo. Praesent nec urna purus. Donec accumsan tempus ante vel lobortis. Maecenas et mi tortor.</p>
                   <h2>2. Inclua imagens</h2>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
// Imagens no background
var bgReady = false;
var bgImage = new Image();
bgImage.onload = function () {
	bgReady = true;
};
bgImage.src = "images/background.png";
                            </code>
                        </pre>
                    </div>
                   <p class="p-html">Duis eleifend risus massa, non fermentum elit molestie ut. Donec condimentum, turpis eget accumsan scelerisque, est massa sollicitudin risus, ac tristique lacus elit vitae tellus. Donec bibendum sagittis pulvinar. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam vel dignissim nisi. Nam gravida consequat elit, ac feugiat libero placerat a.</p>
                   <h2>3. Objetos do jogo</h2>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
// Objetos do jogo
var hero = {
	speed: 256, // movimento em pixels por segundo
	x: 0,
	y: 0
};
var monster = {
	x: 0,
	y: 0
};
var monstersCaught = 0;
                            </code>
                        </pre>
                    </div>
                   <p class="p-html">Aliquam ut velit lacus. Phasellus ac massa et libero sodales elementum vitae id leo. Etiam pulvinar tellus nec ante maximus, at maximus metus elementum. Ut consectetur lorem ut turpis tempor, quis eleifend erat scelerisque. Donec mattis semper turpis sit amet elementum. Sed sit amet metus ante. Proin pretium euismod ante. Nam et molestie nulla, quis pretium massa.</p>
                   <h2>4. Entrada do jogador</h2>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
// Controles
var keysDown = {};

addEventListener("keydown", function (e) {
	keysDown[e.keyCode] = true;
}, false);

addEventListener("keyup", function (e) {
	delete keysDown[e.keyCode];
}, false);
                            </code>
                        </pre>
                    </div>
                   <p class="p-html">Vestibulum tempus mi risus, lacinia porttitor ligula dapibus non. Etiam sed imperdiet arcu, a eleifend nulla. Morbi quis lorem ac arcu porttitor condimentum. Ut euismod ex id nunc luctus vehicula. Integer rutrum posuere justo non ornare. Nunc efficitur suscipit efficitur. Pellentesque sagittis scelerisque condimentum.</p>
                   <h2>5. Novo jogo</h2>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
// Reseta o jogo quando o jogador captura um monstro
var reset = function () {
	hero.x = canvas.width / 2;
	hero.y = canvas.height / 2;

	// Joga o monstro em algum lugar aleatório da tela
	monster.x = 32 + (Math.random() * (canvas.width - 64));
	monster.y = 32 + (Math.random() * (canvas.height - 64));
};
                            </code>
                        </pre>
                    </div>
                   <p class="p-html">Integer volutpat quis risus rhoncus ultricies. Donec porttitor tellus nec auctor pellentesque. Suspendisse volutpat eros tincidunt bibendum accumsan. Ut cursus posuere ante sit amet tempus. Fusce ut pellentesque velit. Praesent sagittis porttitor tristique. Morbi ut dolor nunc.</p>
                   <h2>6. Update dos objetos</h2>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
// Update dos objetos
var update = function (modifier) {
	if (38 in keysDown) { // Player holding up
		hero.y -= hero.speed * modifier;
	}
	if (40 in keysDown) { // Player holding down
		hero.y += hero.speed * modifier;
	}
	if (37 in keysDown) { // Player holding left
		hero.x -= hero.speed * modifier;
	}
	if (39 in keysDown) { // Player holding right
		hero.x += hero.speed * modifier;
	}

	// Eles estão tocando?
	if (
		hero.x <= (monster.x + 32)
		&& monster.x <= (hero.x + 32)
		&& hero.y <= (monster.y + 32)
		&& monster.y <= (hero.y + 32)
	) {
		++monstersCaught;
		reset();
	}
};
                            </code>
                        </pre>
                    </div>
                   <p class="p-html">Nullam vestibulum volutpat pulvinar. Morbi ornare neque consequat risus aliquet, non dictum sapien auctor. Nunc ultricies nunc vitae eros pharetra, id elementum diam porta. Suspendisse potenti. <a href="#">In gravida sem nunc</a>, a ullamcorper felis tristique eu. Aenean fringilla quis velit eget finibus. Fusce non risus hendrerit, ornare nunc at, ullamcorper odio.</p>
                   <h2>7. Renderização dos objetos</h2>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
// Desenha tudo
var render = function () {
	if (bgReady) {
		ctx.drawImage(bgImage, 0, 0);
	}

	if (heroReady) {
		ctx.drawImage(heroImage, hero.x, hero.y);
	}

	if (monsterReady) {
		ctx.drawImage(monsterImage, monster.x, monster.y);
	}

	// Pontuação
	ctx.fillStyle = "rgb(250, 250, 250)";
	ctx.font = "24px Helvetica";
	ctx.textAlign = "left";
	ctx.textBaseline = "top";
	ctx.fillText("Monsterrs caught: " + monstersCaught, 32, 32);
};
                            </code>
                        </pre>
                    </div>
                   <p class="p-html">Sed quis erat id erat dictum cursus quis ut dolor. Duis tristique sodales neque, non fermentum dui efficitur quis. In hac habitasse platea dictumst. Suspendisse porttitor egestas ex laoreet sollicitudin. Ut nec placerat dolor.</p>
                   <h2>8. O menu principal do jogo</h2>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
// Menu principal
var main = function () {
	var now = Date.now();
	var delta = now - then;

	update(delta / 1000);
	render();

	then = now;

	// Pede para fazer de novo o ASAP
	requestAnimationFrame(main);
};
                            </code>
                        </pre>
                    </div>
                   <p class="p-html">Sed eget dictum mauris, et vulputate sem. Suspendisse maximus lorem gravida ex dignissim, ut ullamcorper velit porttitor. Vestibulum vulputate lorem a ligula dapibus, ac pulvinar est rutrum. Praesent molestie eu ipsum at ultricies. In a neque nec neque pulvinar posuere sed ac est. Sed vestibulum volutpat mi, in lacinia diam pulvinar nec.</p>
                   <h2>9. Comece o jogo!</h2>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
// Vamos começar o jogo!
var then = Date.now();
reset();
main();
                            </code>
                        </pre>
                    </div>
                   <p class="p-html">Integer at libero sed mauris interdum ornare eu in lectus. Nunc tortor felis, cursus quis accumsan eget, molestie sed odio. Aliquam malesuada iaculis risus eget tincidunt. Mauris et elit ut tortor iaculis fringilla at eu libero. Integer vulputate bibendum turpis in <a href="#">ullamcorper</a>.</p>
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
