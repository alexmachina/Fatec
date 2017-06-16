<?php 
$path = "../";
include $path.'config.php';
include $path.'conexao.php';

$query = "Select IdCategoria, nome from Categorias";
$categorias = $con->query($query)->fetch_all(MYSQLI_ASSOC);

echo json_encode($categorias);
?>
