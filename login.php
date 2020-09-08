<?php
 
 session_start();
 ?>


<!DOCTYPE html>
<html>

<head>
    <title>Pagina de Login</title>
    <meta charset="utf-8" />
</head>

<body>
    <h1>Faça o seu Login</h1>
    <form method="POST" action="processalogin.php">
        <label>Nome: </label>
        <input type="text" name="usuario" placeholder="Nome de usuario"><br><br>
        <label>Senha: </label>
        <input type="password" name="senha" placeholder="Sua senha"><br><br>
        <input type="submit" name="bnt-entrar" value="Entrar">



    </form>
</body>

</html>