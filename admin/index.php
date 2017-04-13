<?php 
  session_start();
  if($_SESSION['logado'] == true) {
    header('Location: painel.php');
  } else {
    header('Location: login.php');
  }
?>
