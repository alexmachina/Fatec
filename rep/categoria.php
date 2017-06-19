<?php 
  include '../admin/config.php';
  include '../admin/conexao.php';

  $id = $_GET['id'];
  $query = "Select nome, descricao, cor from Categorias ";
  $query .= "Where IdCategoria = $id";
  
  $result = $con->query($query);
  $categoria = $result->fetch_assoc();

  $query = "Select p.titulo, p.texto, a.nome as nomeAutor, c.nome as nomeCategoria, p.IdPost, c.cor from Posts p ";
  $query .= "inner join Usuarios a on a.IdUsuario = p.IdAutor ";
  $query .= "inner join Categorias c on c.IdCategoria = p.IdCategoria ";
  $query .= "Where p.IdCategoria = $id";

  $result = $con->query($query);
  $posts = $result->fetch_all(MYSQLI_ASSOC);

  $response = array("categoria" => $categoria,
                    "posts" => $posts);

  echo json_encode($response);

?>

