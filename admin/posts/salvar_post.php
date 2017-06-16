<?php 

$path = '../';
include $path.'config.php';
include $path.'conexao.php';

if(isset($_REQUEST['IdPost'])) {
  $IdPost = $_POST['IdPost'];
  $query = 'Update Posts Set titulo=?, texto=?, IdCategoria=? Where IdPost = ?';
  $stmt = $con->prepare($query);
  $stmt->bind_param('ssii', $_POST['titulo'], $_POST['texto'], $_POST['IdCategoria'], $IdPost);
  $rc = $stmt->execute();

  if($rc == false) {
    echo json_encode(["erro" => $stmt->error]);
  }

  echo json_encode(["message" => "Post atualizado"]);

} else {
  $query = 'Insert Into Posts(titulo, texto, IdAutor, IdCategoria) values(?,?,?,?)';
  $stmt = $con->prepare($query);
  $stmt->bind_param('sssi', $_POST['titulo'], $_POST['texto'], $_POST['IdAutor'], $_POST['IdCategoria']);
  $didExecute = $stmt->execute();

  if(!$didExecute) {
    http_response_code(500);
    echo json_encode(["erro" =>$stmt->error]);
  }

  $IdPost = $con->insert_id;
  echo json_encode(["IdPost" => $IdPost]);
    
}

?>
