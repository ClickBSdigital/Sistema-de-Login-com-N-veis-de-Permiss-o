<?php
session_start();
if ($_SESSION['user_tipo'] !== 'atendente' && $_SESSION['user_tipo'] !== 'supervisor' && $_SESSION['user_tipo'] !== 'administrador') {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel de Atendimento</title>
</head>
<body>
    <h1>Bem-vindo, Atendente!</h1>
    <p>Você pode acessar apenas esta página.</p>
</body>
</html>