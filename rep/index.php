<?php 
include '../admin/config.php';
include '../admin/conexao.php';

try {
  $skip = 0;
  if (isset($_GET['pagina'])) {
    $skip = ($_GET['pagina'] -1) * 10;
  }
  $query = "Select p.titulo, p.texto, c.nome as nomeCategoria, a.nome as nomeAutor, c.IdCategoria, c.cor, p.IdPost ";
  $query .= " from Posts p ";
  $query .= " inner join Categorias c on c.IdCategoria = p.IdCategoria ";
  $query .= " inner join Usuarios a on a.IdUsuario = p.IdAutor ";
  if (isset ($_GET['categoria'])) {
    $query .= "Where p.IdCategoria = ".$_GET['categoria'];
  }
  $query .= " limit $skip,10";

  $res = $con->query($query);
  if ($res) {
    $posts = $res->fetch_all(MYSQLI_ASSOC);

    echo json_encode($posts);
  } else {
    http_response_code(500);
    echo json_encode(["erro" => $con->error]);
  }
} catch(Exception $ex) {
  http_response_code(500);
  echo $ex->getMessage();
}

?>


