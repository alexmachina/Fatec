<?php
$path = "../../../";
include '../../../templates/header.php'; ?>
<article class="container">
	<div class="row">
		<div class="banner js col-xs-12">
			<div class="banner-post js col-xs-12" >
				<div class="row">

					<div class="title-post js col-xs-12">
						<h3>ES6 - O que há de novo? O guia definitivo</h3>
					</div>

				</div>
				<div class="row">
					<div class="author-post col-xs-12">
						<div class="thumb-post-container col-xs-12 ">
							<img class="thumb" src="<?php echo $path; ?>/img/thumbs/alex.png"/>
						</div>
						<div class="author-post-name-container col-xs-6">
							<p class="author-name"><a href="/comum/quem-somos.php"> Alex Alonso</a></p>
							<p class="author">
								Autor
							</p>

						</div>
						<div id="circulo-post" class="hidden-xs col-xs-4 col-xs-offset-1 col-sm-offset-0">
							Js
						</div>

					</div>

				</div>
			</div>
			<!-- CIRCULO
			<div id="" class="col-sm-1 hidden-xs circulo-tag-2">
			Js
		</div>
		<div id="circulo-tag" class="col-sm-1 hidden-xs circulo-tag-3">
		ES6
	</div>
	<div id="circulo-tag" class="col-sm-1 hidden-xs circulo-tag-4">
	Guia
</div>
<div id="circulo-tag" class="col-sm-1 hidden-xs circulo-tag-4">
Novo
</div>
-->
</div>
</div>
<div class="row">

	<!-- Artigo -->
	<div class="col-xs-12 col-sm-8 js-article-1">
		<div id="" class="col-xs-12 js-post-text-1">
			<hr />

			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				Nullam sodales, purus in rutrum porta, mauris velit fringilla
				dolor, in sagittis odio libero a mi. Morbi sed orci eget
				dui finibus aliquam.

			</p>
			<p>

				Suspendisse accumsan nisl id tempus malesuada. Pellentesque vehicula risus
				id ante ullamcorper dignissim. Nunc tristique mattis accumsan.
				Curabitur tincidunt porttitor purus in ullamcorper.
				Aliquam scelerisque vel dui ac
			</p>
		</div>
		<div class="js code col-xs-12">
			<p class="js code caption">
				app/folder/todoList.js
			</p>
			<pre class="line-numbers"><code class="language-javascript">
				var personFactory = function(){
					var misteriousPrivateAtb = "something";
					//Execute misterious logic here.
					function getBirthday(){
						return "21/08";

					}
					function Person(){
						this.name = "foo";
						this.age = "32";
						this.birthday = getBirthday();
					}

					return new Person();
				};

				var person = personFactory();
				console.log(person.birthday); //Result from misterious inacessible function!
			</code></pre>
		</div>
		<div id="" class="col-xs-12 js-post-text-1">


			<p>
				Nam nibh ligula, accumsan in purus non, elementum elementum
				leo. Ut pretium massa id sem volutpat venenatis. Aenean dignissim,
				sem at imperdiet pulvinar, lacus nisl volutpat nisi, molestie
				tincidunt mi augue nec mauris. Ut et diam elementum, sodales nisi ac,
				convallis felis. Pellentesque ligula est, efficitur fringilla auctor
				eget, venenatis in sapien. Curabitur lectus erat,
				placerat eget ante vel, pulvinar

			</p>
		</div>
		<div class="js code col-xs-12">
			<p class="js code caption">
				app/folder/todoList.js
			</p>
			<pre class="number-lines">
				<code class="language-javascript">
					var TodoList2 = React.createClass({
						render: function() {
							var _this = this;
							var createItem = function(item, index) {
								return (
								<li key={ index }>
									{ item.text }
									<span onClick={ _this.props.removeItem.bind(null, item['.key']) }
									style={{ color: 'red', marginLeft: '10px', cursor: 'pointer' }}>
									X
								</span>
							</li>
							);
						};
						return <ul>{ this.props.items.map(createItem) }</ul>;
					}
				});

				var TodoApp2 = React.createClass({
					getInitialState: function() {
						return {
							items: [],
							text: ''
						};
					},

					componentWillMount: function() {
						this.firebaseRef = new Firebase('https://ReactFireTodoApp.firebaseio.com/items/');
						this.firebaseRef.limitToLast(25).on('value', function(dataSnapshot) {
							var items = [];
							dataSnapshot.forEach(function(childSnapshot) {
								var item = childSnapshot.val();
								item['.key'] = childSnapshot.key();
								items.push(item);
							}.bind(this));

							this.setState({
								items: items
							});
						}.bind(this));
					},

					componentWillUnmount: function() {
						this.firebaseRef.off();
					},

					onChange: function(e) {
						this.setState({text: e.target.value});
					},

					removeItem: function(key) {
						var firebaseRef = new Firebase('https://ReactFireTodoApp.firebaseio.com/items/');
						firebaseRef.child(key).remove();
					},

					handleSubmit: function(e) {
						e.preventDefault();
						if (this.state.text && this.state.text.trim().length !== 0) {
							this.firebaseRef.push({
								text: this.state.text
							});
							this.setState({
								text: ''
							});
						}
					},

					render: function() {
						return (

						);
					}
				});

				ReactDOM.render(<TodoApp2 />, document.getElementById('todoApp2'));
			</code>
		</pre>
	</div>
	<div id="" class="col-xs-12 js-post-text-1">


		<p>
			Nam nibh ligula, accumsan in purus non, elementum elementum
			leo. Ut pretium massa id sem volutpat venenatis. Aenean dignissim,
			sem at imperdiet pulvinar, lacus nisl volutpat nisi, molestie
			tincidunt mi augue nec mauris. Ut et diam elementum, sodales nisi ac,
			convallis felis. Pellentesque ligula est, efficitur fringilla auctor
			eget, venenatis in sapien. Curabitur lectus erat,
			placerat eget ante vel, pulvinar

		</p>
		<p>
			incidunt mi augue nec mauris. Ut et diam elementum, sodales nisi ac,
			convallis felis. Pellentesque ligula est, efficitur fringilla auctor
			eget, venenatis in sapien. Curabitur lectus erat,
			placerat eget ante vel, pulvinar
		</p>
	</div>
	<div class="col-xs-12 text-center img-js-post">
		<figure>
			<img class="text-center img img-responsive" src="<?php echo $path; ?>/img/javascript/folders.png" />
			<figcaption>
				Neque porro quisquam est qui dolorem ipsum quia dolor
			</figcaption>
		</figure>
	</div>
</div>

<?php include 'aside.php'; ?>
			
</article>
<?php include '../../../templates/footer.html'; ?>
