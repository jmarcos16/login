<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "usuarios";

//conexão com o banco de dados
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
    die("Erro ao conectar");
}