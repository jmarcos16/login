<?php
 
 session_start();
 ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> Cadastro</title>
    <meta charset="UTF-8" />
</head>

<body>
    <h1>Formulario de Cadastro</h1>
    <?php
    if (isset($_SESSION ['msg'])){ 
    echo $_SESSION ['msg'];
    unset ($_SESSION ['msg']);
    }
    ?>
    <form method="POST" action="processa.php">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Username" /><br><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="E-mail" /><br><br>
        <label>Senha:</label>
        <input type="password" name="senha" placeholder="Password" /><br><br>
        <input type="submit" value="Cadastrar" />
    </form>
</body>

</html>