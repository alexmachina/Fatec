<?php 

$path = '../';
include $path.'config.php';
include $path.'conexao.php';

function generateRandomString($length = 10) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}

if(isset($_REQUEST['IdPost'])) {
  $IdPost = $_POST['IdPost'];
  $imagem = null;
  if($_FILES['imagem']['error'] == 0) {
    $arquivo = $_FILES['imagem'];
    $tmp_name = $arquivo['tmp_name'];
    $name = generateRandomString(rand(0,24));
    move_uploaded_file($tmp_name,"../img/posts/".$name);
    $imagem = "/admin/img/posts/".$name;

  } else {
    $imagem = $_POST['imagem-atual'];
  }
  $query = 'Update Posts Set titulo=?, texto=?, IdCategoria=?, imagem=? Where IdPost = ?';
  $stmt = $con->prepare($query);
  $stmt->bind_param('ssisi', $_POST['titulo'], $_POST['texto'], $_POST['IdCategoria'], $imagem, $IdPost);
  $rc = $stmt->execute();

  if($rc == false) {
    echo json_encode(["erro" => $stmt->error]);
  } else {
    echo json_encode(["menssagem" => "Post atualizado"]);
  }


} else {
  $query = 'Insert Into Posts(titulo, texto, IdAutor, IdCategoria, imagem) values(?,?,?,?,?)';
  $stmt = $con->prepare($query);

  $arquivo = $_FILES['imagem'];
  $tmp_name = $arquivo['tmp_name'];
  $name = generateRandomString(rand(0,24));
  $path = "/admin/img/posts/".$name;
  move_uploaded_file($tmp_name,"../img/posts/".$name);

  $stmt->bind_param('ssiis', $_POST['titulo'], $_POST['texto'], $_POST['IdAutor'], $_POST['IdCategoria'], $path);

  $didExecute = $stmt->execute();

  if(!$didExecute) {
    http_response_code(500);
    echo json_encode(["erro" =>$stmt->error]);

  }

  $IdPost = $con->insert_id;
  echo json_encode(["IdPost" => $IdPost]);

}

?>
