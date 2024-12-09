<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit;
}

$user_tipo = $_SESSION['user_tipo'];

switch ($user_tipo) {
    case 'administrador':
        header("Location: admin.php");
        break;
    case 'supervisor':
        header("Location: supervisor.php");
        break;
    case 'atendente':
        header("Location: atendimento.php");
        break;
    default:
        echo "Acesso não autorizado.";
        exit;
}
?>