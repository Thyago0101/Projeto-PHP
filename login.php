<?php 
include("conectaBD.php");

$senha = $_POST["senha"];
$email = $_POST["email"];

//$sql = "SELECT id FROM usuários WHERE senha = '$senha' AND email = '$email'";


$sql = "SELECT id, nome, data_de_nascimento FROM usuários WHERE senha = ? AND email = ?";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $senha);
$stmt->bindParam(2, $email);
$stmt->execute();

$resultado = $stmt->fetchAll();
var_dump($resultado);


if($resultado){
    if(count($resultado)>0){
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["id"] = $resultado[0][0];
        $_SESSION["nome"] = $resultado[0][1];
        $_SESSION["dn"] = $resultado[0][2];
        header("Location: menu.php");
    }
}else{
    header("Location: index.html");
    echo "<p>Usuário ou senha inválido</p>";
    exit();
}
