<?php
require 'connectDb.php';
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login && $senha) {
    $query = "SELECT * FROM users WHERE login = '$login' AND senha = '$senha' LIMIT 1";
    if ($exec = mysqli_query($Conn, $query) or die($Conn->error)){
        $row = $exec->fetch_assoc();
        if ($row) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['login'] = $row['login'];
            $_SESSION['email'] = $row['email'];
            header('location: /admin/');
        } else {
            $hasAlert = true;
            $alertType = 'danger';
            $alertMsg = 'Usuário ou senha incorretos!';
            header("location: /?hasAlert=$hasAlert&alertType=$alertType&alertMsg=$alertMsg");
        }
    }
} else {
    echo 'erro';
}
mysqli_close($Conn);
