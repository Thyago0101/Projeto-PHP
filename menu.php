<?php
session_start();
if(!isset($_SESSION["email"])) {
    // Se não estiver autenticado, redireciona para a página de login
    header("Location: index.html");
    exit();
}

echo "ID: ". $_SESSION["id"];
echo "Nome: ". $_SESSION["nome"];
echo "Data de nascimento: ". $_SESSION["dn"];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h1>Menu Inicial</h1>
    <p>Olá, <?php echo $_SESSION["nome"];?></p>
    <p>Seu email é: <?php echo $_SESSION["email"];?></p>

    <a href="logout.php">Logout</a>
</body>
</html>