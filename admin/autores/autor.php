<?php 
$path ="../";
include $path."templates/header.php";
include $path."config.php";
include $path."conexao.php";
include $path."motumbo.php";

$mot = new Motumbo("Usuarios",$con, false);

if(isset($_GET["id"])) {
  $IdUsuario = $_GET["id"];
  $row = $mot->select(
    array("nome,username,foto,password"),
    array("IdUsuario" => $_GET["id"]))->fetch_assoc();
}

?>

<article class="container">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <form action="salvar_autor.php" id="form-autor" method="POST" enctype="multipart/form-data">
        <?php if(isset($IdUsuario)) { ?>
        <input name="IdUsuario" type="hidden" value="<?php if(isset($IdUsuario)) { echo $IdUsuario; } ?>"/>
        <?php }?>

                <div class="form-group">
          <label>Nome</label>
          <input id="campo-nome" type="text" value="<?php  if(isset($row["nome"])){echo $row["nome"]; } ?>" class="form-control" name="nome" />
          <span id="nome-validation" class="validation"></span>
        </div>
        <div class="form-group">
          <label>Username</label>
          <input id="campo-descricao" type="text" value="<?php if(isset($row["username"])) { echo $row["username"]; } ?>" class="form-control" name="username" />
          <span id="username-validation" class="validation"></span>
        </div>
        <div>
          <label>Password</label>
          <input id="campo-password" type="password" value="<?php if(isset($row["password"])) { echo $row["password"]; } ?>" class="form-control" name="password" />
          <span id="password-validation" class="validation">
        </div>

        <div class="form-group">
          <label>Foto</label>
          <input type="file" name="foto" />
          <span id="foto-validation" class="validation"></span>
<?php 
        if(isset($row["foto"]) and !empty($row["foto"])) { ?>
        <input name="foto-atual" type="hidden" value="<?php echo $row["foto"]; ?>"/>
        <img class="img img-responsive" src="<?php echo $row["foto"]; ?>" />
<?php } ?>

        </div>
        <span id="message-span"></span>
        <button type="submit" class="form-control btn btn-primary">
          Salvar
        </button>
      </form>
    </div>
  </div>

</article>

    <script src="<?php echo $path."js/autores/autor.js"; ?>"></script>

