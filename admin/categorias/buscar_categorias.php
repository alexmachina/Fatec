<?php 
$path = "../";
include $path."config.php";
include $path."conexao.php";
include $path."motumbo.php";

$mot = new Motumbo("Categorias",$con,false);

$campos = ["IdCategoria", "nome"];

$result = $mot->select($campos, null, ["skip"=> ($_GET['page'] - 1 )* 10, "limit" => 10]);
$count = $mot->count();

$response = ["categorias" => $result->fetch_all(MYSQLI_ASSOC),
             "count" => $count];


echo json_encode($response);


?>
