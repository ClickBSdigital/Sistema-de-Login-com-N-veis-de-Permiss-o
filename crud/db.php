<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'sistema_acesso';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    exit;
}
?>