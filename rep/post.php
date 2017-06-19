<?php 
include '../admin/config.php';
include '../admin/conexao.php';


$id = $_GET['id'];

$query = "Select p.titulo, p.texto, p.imagem, ";
$query .= "c.nome as nomeCategoria, c.cor, p.IdAutor, a.nome as nomeAutor, ";
$query .= "a.foto as fotoAutor, p.IdAutor ";
$query .= "from Posts p ";
$query .= "inner join Categorias c on c.IdCategoria = p.IdCategoria ";
$query .= "inner join Usuarios a on a.IdUsuario = p.IdAutor ";
$query .= "Where p.IdPost = $id";

$result = $con->query($query);


$post = $result->fetch_assoc();

echo json_encode(["post" => $post]);


?>
