<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bdnome = "banco_pi";

$conn = mysqli_connect ($servidor, $usuario, $senha, $bdnome);

if(!$conn){
    die("Falha na Conexão". mysqli_connect_error());
} else {
   // echo("Conectado");
}
?>