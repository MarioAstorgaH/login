<?php
$nombre = $_POST["txtNombre"];
$usuario = $_POST["txtUsuario"];
$password= $_POST["txtPassword"];

if($usuario=="Papu" && $password=="1234"){
    echo "Ta bien";
}
else{
    echo"Ta mal";
}
?>