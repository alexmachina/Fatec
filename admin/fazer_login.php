<?php
require 'config.php';
require 'conexao.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM Usuarios WHERE username='".$username."' and password='".$password."';";
$result = $con->query($query);

if($result->num_rows > 0) {
  session_start();
  $_SESSION['logado'] = true; 
  header('Location: painel.php');

} else {
  header('Location: index.php');
}

?>

