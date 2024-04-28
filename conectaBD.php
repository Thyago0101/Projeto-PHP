<?php
//$mysqli = new mysqli("localhost", "root", "", "info login");
//if($mysqli){echo "conectado";}else{echo "Falha ao conectar o BD";}


// Configurações do banco de dados
$host = 'localhost';
$dbname = 'info login';
$username = 'root';
$password = '';

try {
    // Conectar ao banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Definir o modo de erro do PDO para exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<script>console.log('Coneção OK')</script>";
} catch(PDOException $e) {
    // Em caso de erro na conexão, exibir mensagem de erro
    echo "Erro de conexão: " . $e->getMessage();
}
