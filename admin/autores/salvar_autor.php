<?php 

$path = "../";
require $path."config.php";
require $path."conexao.php";
require $path."motumbo.php";

$mot = new Motumbo("Usuarios",$con, false);
$IdUsuario = $_POST["IdUsuario"];
$nome = $_POST["nome"];
$username = $_POST["username"];
$password = $_POST["password"];


$foto = $_FILES['foto']['tmp_name'];
$name = $_FILES['foto']['name'];


$moveu = move_uploaded_file($foto, $path."img/".$name);

if(isset($_POST["IdUsuario"])) {
 $result= $mot->update(array(
    "nome" => $nome,
    "username" => $username,
    "password" => $password,
    "foto" => "img/".$name
  ), 
  array("IdUsuario" => $IdUsuario));
}
else {
 $result = $mot->insert(array(
    "nome" => $nome,
    "username" => $username,
    "password" => $password,
    "foto" => "img/".$name));

}

echo "Salvo com sucesso";



?>
