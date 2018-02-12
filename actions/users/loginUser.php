<?php
@session_start();
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
            $_SESSION['tipo'] = $user->tipo;
            if ($user->tipo == 1) {
                $tipo = 'Administrador';
            } else {
                $tipo = 'Normal';
            }
            $sessionSql = "INSERT INTO sessions (user_id, username, tipo) VALUES ('$user->id', '$user->nome', '$tipo')"; //Insere dados no banco para informar que este usuario esta logado
            Db::query($sessionSql);
            header('location: /application.php?page=admin/index');
        } else {
            header("location: /application.php?page=admin/login");
    }
} else {
    echo 'erro';
}
