<?php 
  $path = "../";
  include $path."config.php";
  include $path."conexao.php";
  $IdPost = $_GET["id"];
  
  $query = "Select c.IdCategoria, c.nome as categoria, p.titulo, p.texto, a.nome as autor, p.IdPost ";
$query .= "from Posts p ";
$query .= "Inner Join Categorias c on c.IdCategoria = p.IdCategoria ";
$query .= "Inner Join Usuarios a on a.IdUsuario = p.IdAutor ";
$query .= "Where p.IdPost = ".$IdPost;

$post = $con->query($query)->fetch_assoc();

$query = "Select IdCategoria, nome from Categorias";

$categorias = $con->query($query)->fetch_all(MYSQLI_ASSOC);

$result = ["categorias" => $categorias, "post" => $post];

echo json_encode($result);

?>
