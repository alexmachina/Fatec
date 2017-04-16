<?php
  session_start();
  $path = '../';
  include $path.'templates/header.php';
  include $path.'config.php';
  include $path.'conexao.php';

  if(isset($_GET['id'])) {
    $IdPost = $_GET['id'];
    $query = 'Select Posts.titulo, Posts.IdCategoria as IdCategoria, Posts.texto, Categorias.nome as categoria, Usuarios.nome as autor ';
    $query = $query.'from Posts Inner Join Categorias on Categorias.IdCategoria = Posts.IdCategoria ';
    $query = $query.'Inner Join Usuarios on Usuarios.IdUsuario = Posts.IdAutor ';
    $query = $query.'Where Posts.IdPost = '.$IdPost.' And Posts.IdAutor = '.$_SESSION['IdUsuario'];
    $result = $con->query($query);


    if($result) {
      $post = $result->fetch_assoc();
    }




  }
  $query = 'Select IdCategoria, nome from Categorias';
  $categorias = $con->query($query);
?>

<article class="container">
<div id="debug">
</div>
  <div class="row">
    <div class="col-xs-12">
      <form  id="post-form" action="salvar_post.php" method="POST">
        <?php if(isset($IdPost)) { ?>
        <input type="hidden" name="IdPost" value="<?php echo $IdPost; ?>
        <div class="form-group">
          <span>Autor: <?php if (isset($post['autor'])) { echo $post['autor']; } ?></span>
        </div>
<?php  }  ?>

          <input type="hidden" name="IdAutor" value="<?php echo $_SESSION['IdUsuario']; ?>" />
        <div class="form-group">
          <label>Categoria</label>
          <select class="form-control" name="IdCategoria"> 
            <option value="0">-- Selecione a Categoria --</option>
            <?php while($row =$categorias->fetch_assoc()) { ?>
            <option value="<?php echo $row['IdCategoria']; ?>"
<?php if( isset($post) && $row['IdCategoria'] == $post['IdCategoria']) {
echo "selected"; } ?>
            >
              <?php echo $row['nome']; ?>
            </option>
            <?php } ?>
          </select>
      <span id="categoria-validation" class="validation"></span>
        <div class="form-group">
          <label>Titulo</label>
          <input type="text" name="titulo"
            value="<?php if(isset($post['titulo'])) { echo $post['titulo']; } ?>" class="form-control" />
          <span id="titulo-validation" class="validation"></span>
        </div>
        <div class="form-group">
          <label>Texto</label>
          <textarea id="editor" name="texto" rows="10" class="form-control" ><?php if(isset($post['texto'])) { echo $post['texto']; } ?>
          </textarea>
          <span id="texto-validation" class="validation"></span>
        </div>
      <button type="submit" class="btn btn-primary form-control">
        Salvar
      </button>
<span id="message-span"></span>
      </form>
    </div>
  </div>
</article>
<?php include $path.'templates/footer.php'; ?>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.5.1//js/froala_editor.pkgd.min.js"></script>

<script src="/admin/js/posts.js"></script>
