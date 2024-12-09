<?php
session_start();
if ($_SESSION['user_tipo'] !== 'supervisor' && $_SESSION['user_tipo'] !== 'administrador') {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel do Supervisor</title>
</head>
<body>
    <h1>Bem-vindo, Supervisor!</h1>
    <p>Você tem acesso limitado.</p>
</body>
</html>