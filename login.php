<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_tipo'] = $user['tipo'];
        header("Location: painel.php");
    } else {
        echo "E-mail ou senha incorretos.";
    }
}
?>