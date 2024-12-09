<?php
session_start();
if ($_SESSION['user_tipo'] !== 'administrador') {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel do Administrador</title>
</head>
<body>
    <h1>Bem-vindo, Administrador!</h1>
    <p>Você tem acesso total.</p>
</body>
</html>