<?php 

$path = '../';
include $path.'config.php';
include $path.'conexao.php';

if(isset($_POST['IdPost']) && !empty($_POST['IdPost'])) {
  $IdPost = $_POST['IdPost'];
  $query = 'Update Posts Set titulo=?, texto=?, IdCategoria=? Where IdPost = ?';
  $stmt = $con->prepare($query);
  $stmt->bind_param('ssii', $_POST['titulo'], $_POST['texto'], $_POST['IdCategoria'], $IdPost);
  $rc = $stmt->execute();

  if($rc == false) {
    echo $stmt->error;
  }
  header('Location: post.php?id='.$IdPost);

} else {
  session_start();
  $query = 'Insert Into Posts(titulo, texto, IdAutor, IdCategoria) values(?,?,?,?)';
  $stmt = $con->prepare($query);
  $stmt->bind_param('sssi', $_POST['titulo'], $_POST['texto'], $_POST['IdAutor'], $_POST['IdCategoria']);
  $didExecute = $stmt->execute();

  if(!$didExecute) {
    header("HTTP/1.1 500 Internal Server Error");
    echo $stmt->error;
  }
    
}

?>
