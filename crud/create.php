<?php require_once 'db.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Contato</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <h1>Adicionar Contato</h1>
    <form action="" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required><br>
        <label>Email:</label>
        <input type="passowrdmail" name="email" required><br>
        <label>Senha:</label>
        <input type="passowrd" name="senha" required><br>
        <label>Tipo:</label>
        <select type="text" name="tipo" value="<?= $contato['tipo'] ?>">
            <option value="atendente">Atendente</option>
            <option value="supervisor">Supervisor</option>
            <option value="administrador">Administrador</option>
            </select><br>
        <button type="submit">Cadastrar</button>
    </form>
    <br>
    <a href="index_crud.php">
        <button >Voltar</button>
        
    </a>
    <br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $tipo = $_POST['tipo'];

        $sql = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$nome, $email, $senha, $tipo,]);

        echo "Contato adicionado com sucesso!";
    }
    ?>
</body>
</html>
