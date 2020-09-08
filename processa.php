<?php

session_start();

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Email: $email <br>";


$result_usuarios = "INSERT INTO usuarios (nome, email, created ,senha) VALUE ('$nome', '$email', NOW(), '$senha')";
$resultado_usuario = mysqli_query($conn,$result_usuarios);

if (mysqli_insert_id($conn)){
    $_SESSION ['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso!</p>";
    header("Location: pagina_cadastro.php");
}else{
    $_SESSION ['msg'] = "<p style='color:red;'>usuario n cadastrado</p>";
    header("Location: pagina_cadastro.php");
}

