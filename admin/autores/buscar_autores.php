<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path = "../";
require $path.'config.php';
require $path.'conexao.php';
require $path.'motumbo.php';

$mot = new Motumbo('Usuarios', $con, false);
$pagina = 1;
if (isset($_GET["pagina"])) {
  $pagina = $_GET["pagina"];
}

$skip = ($pagina -1) * 10;
$limit = 10;

$result = $mot->select(
  array("IdUsuario","nome"),
  null,
  array("skip" => $skip, "limit" => $limit));
$usuarios = $result->fetch_all(MYSQLI_ASSOC);


$total = $mot->count();

echo json_encode(array("autores" => $usuarios, "count" => $total));
?>



