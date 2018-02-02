<?php
require 'db.php';
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login && $senha) {
    $sql = "SELECT * FROM users WHERE login = '$login' AND senha = '$senha' LIMIT 1";
        $user = Db::fetchRow($sql);
        if ($user) {
            $_SESSION['id'] = $user->id;
            $_SESSION['nome'] = $user->nome;
            $_SESSION['login'] = $user->login;
            $_SESSION['email'] = $user->email;
            header('location: /admin/');
        } else {
            $hasAlert = true;
            $alertType = 'danger';
            $alertMsg = 'Usuário ou senha incorretos!';
            header("location: /?hasAlert=$hasAlert&alertType=$alertType&alertMsg=$alertMsg");
    }
} else {
    echo 'erro';
}
