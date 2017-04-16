<?php
  $path = '../';
  include $path.'config.php';
  include $path.'conexao.php';

  if(isset($_GET['id'])) {
  $IdCategoria = $_GET['id'];

  $query = "Select nome, descricao from Categorias where IdCategoria=".$IdCategoria;
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_row($result);
  }

  include $path.'templates/header.php';





?>

<article class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <form action="salvar_categoria.php" id="form-categoria" method="POST">
        <input name="IdCategoria" type="hidden" value="<?php if(isset($IdCategoria)) { echo $IdCategoria; } ?>"/>
        <div class="form-group">
          <label>Nome</label>
          <input id="campo-nome" type="text" value="<?php  if(isset($row[0])){echo $row[0]; } ?>" class="form-control" name="nome" />
          <span id="nome-validation" class="validation"></span>
        </div>
        <div class="form-group">
          <label>Descrição</label>
          <input id="campo-descricao" type="text" value="<?php if(isset($row[1])) { echo $row[1]; } ?>" class="form-control" name="descricao" />
        </div>
        <span id="message-span"></span>
        <button type="submit" class="form-control btn btn-primary">
          Salvar
        </button>
      </form>
    </div>
  </div>

</article>



<?php include $path.'templates/footer.php'; ?>
<script src="/admin/js/categoria.js"></script>

