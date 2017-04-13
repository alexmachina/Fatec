<?php 
  $path="";
  include 'templates/header.php';
?>

<div class="row">
  <a href="<?php echo $path;?>categorias/">
    <div class="col-xs-12 col-md-5 col-md-offset-1 panel-item">
      <h1>Categorias</h1>
    </div>
  </a>
  <a href="<?php echo $path;?>posts">
  <div class="col-xs-12 col-md-5 panel-item">
    <h1>Posts</h1>
  </div>
  </a>
  <a href="<?php echo $path; ?>autores">
  <div class="col-xs-12 col-md-5 col-md-offset-1 panel-item">
    <h1>Autores</h1>
  </div>
</a>

</div>

<?php 
  include 'templates/footer.php';
?>
