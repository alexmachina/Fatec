<?php
require 'config.php';
require 'conexao.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT IdUsuario, nome FROM Usuarios WHERE username='".$username."' and password='".$password."';";
$result = $con->query($query);

if($result->num_rows > 0) {
  session_start();
  $usuario = $result->fetch_assoc();
  $_SESSION['IdUsuario'] = $usuario['IdUsuario'];
  http_response_code(200);

  echo json_encode($usuario);

} else {
  http_response_code(404);
}

?>

