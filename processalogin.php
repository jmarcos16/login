<?php
session_start();
include_once("conexao.php");

//receber os dados do usuario
$user = $_POST['usuario'];
$pass = $_POST['senha'];

//echo $user;
//echo $pass;

//verificar no banco de dados.
$selectUser = "SELECT * FROM usuarios WHERE nome='$user' AND senha='$pass'";
$queryUser = mysqli_query($conn, $selectUser);
$numUser = mysqli_num_rows($queryUser);
if($numUser>0){
	echo "usuario encontrado";
}else{
	echo "nenhum usuario encontrado";
};
