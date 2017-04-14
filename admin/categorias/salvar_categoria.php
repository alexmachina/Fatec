<?php 
$path = '../';
include $path.'config.php';
include $path.'conexao.php';

if(isset($_POST['IdCategoria']) && !empty($_POST['IdCategoria'])) {
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $id = $_POST['IdCategoria'];

  $query = 'UPDATE Categorias SET nome=?, descricao=? where IdCategoria=?';
  $stmt = $con->prepare($query);
  $stmt->bind_param('ssi',$nome, $descricao, $id);
  $stmt->execute();

  header('Location: categoria.php?id='.$id);

  
}
else{
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];

  $query = 'Insert Into Categorias(nome, descricao) values(?,?)';
  $stmt = $con->prepare($query);
  $stmt->bind_param('ss',$nome, $descricao);
  $stmt->execute();

  header('Location: index.php');
}

?>

