<?php
include("conectaBD.php");

$nome = $_POST["nome"];
$data_nascimento = $_POST["data_nascimento"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO usuários (nome, data_de_nascimento, email, senha) VALUES (?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $data_nascimento);
$stmt->bindParam(3, $email);
$stmt->bindParam(4, $senha);

$resultado = $stmt->execute();

if($resultado){
    
    echo "Cadastro realizado com sucesso. Encaminhando à tela de login";
    sleep(1);
    echo "<script>setTimeout(function() { window.location.href = 'index.html'; }, 2000);</script>";

    

}else{
    echo "erro ao cadastrar";
}




