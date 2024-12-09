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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="admin-container">
        
        <h1>Bem-vindo, Administrador!</h1>
        <p>Você tem acesso total.</p>
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
</html>

