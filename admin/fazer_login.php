<?php
require 'config.php';
require 'conexao.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT IdUsuario FROM Usuarios WHERE username='".$username."' and password='".$password."';";
$result = $con->query($query);

if($result->num_rows > 0) {
  session_start();
  $_SESSION['logado'] = true; 
  $_SESSION['IdUsuario'] = $result->fetch_assoc()['IdUsuario'];
  echo $_SESSION['IdUsuario'];
  header('Location: painel.php'); 

} else {
  header('Location: login.php');
}

?>

