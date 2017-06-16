<?php 
  $path = "../";
  include $path."config.php";
  include $path."conexao.php";

  $pagina = $_GET["pagina"];
  $skip = ($pagina - 1) * 10;
  $limit = 10;

  $query =  "Select p.IdPost, p.titulo, c.nome as categoria from Posts p ";
  $query .= "Inner Join Categorias c on p.IdCategoria = c.IdCategoria ";
  $query .= "Limit $skip,$limit"; 

  $posts = $con->query($query)->fetch_all(MYSQLI_ASSOC);

  $query = "select count(*) from Posts";
  $count = $con->query($query)->fetch_array()[0];

  echo json_encode(["posts" => $posts, "count" => $count]);

?>
