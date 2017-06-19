<?php 
include '../admin/config.php';
include '../admin/conexao.php';

try {
$query = "Select IdCategoria, nome, cor from Categorias";
$result = $con->query($query);

$categorias = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($categorias);
} catch (Exception $ex) {
  http_response_code(500);
  echo json_encode(["erro" => $ex->getMessage()]);

}

?>


