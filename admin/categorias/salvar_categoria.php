<?php 
$path = '../';
include $path.'config.php';
include $path.'conexao.php';

if(isset($_POST['IdCategoria']) && !empty($_POST['IdCategoria'])) {
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $id = $_POST['IdCategoria'];
  $cor = $_POST['cor'];

  $query = 'UPDATE Categorias SET nome=?, descricao=?, cor=? where IdCategoria=?';
  $stmt = $con->prepare($query);
  $stmt->bind_param('sssi',$nome, $descricao, $cor, $id);
  $stmt->execute();

  header('Location: categoria.php?id='.$id);

  
}
else{
  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $cor = $_POST['cor'];

  $query = 'Insert Into Categorias(nome, descricao, cor) values(?,?,?)';
  $stmt = $con->prepare($query);
  $stmt->bind_param('sss',$nome, $descricao, $cor);
  $stmt->execute();

  //header('Location: index.php');
  echo $cor;
}

?>

