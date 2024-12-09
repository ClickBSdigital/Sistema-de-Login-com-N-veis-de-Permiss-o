<?php
session_start();

if (!isset($_SESSION['user_id']) || ($_SESSION['user_tipo'] !== 'supervisor' && $_SESSION['user_tipo'] !== 'administrador')) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel do Supervisor</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="admin-container">
        <h1>Bem-vindo, Supervisor!</h1>
        <p>Você tem acesso limitado.</p>
        <button>
            <a href="atendimento.php">Atendente</a>
        </button>
        <button>
            <a href="supervisor.php">Supervisor</a>
        </button>
        <button>
        <a href="admin.php">Administrador</a>
        </button>
        <button>
            <a href="painel.php">Painel</a>
        </button>
        <br><br>
        <button>
            <a href="index.html">Sair</a>
        </button>
    </div>
</body>
</head>
</html>