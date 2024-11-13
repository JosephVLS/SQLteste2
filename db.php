<?php
$host = 'localhost'; // Nome do host
$db = 'exemplo_db';  // Nome do banco de dados
$user = 'root';      // Nome do usuário do banco de dados
$pass = '';          // Senha do banco de dados

// Conectar ao banco de dados
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die('Conexão falhou: ' . $conn->connect_error);
}
?>
