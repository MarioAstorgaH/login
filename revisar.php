<?php
$nombre = $_GET["txtNombre"];
$usuario = $_GET["txtUsuario"];
$password= $_GET["txtPassword"];

if($usuario=="Papu" && $password=="1234"){
    echo "Ta bien";
}
else{
    echo"Ta mal";
}
?>