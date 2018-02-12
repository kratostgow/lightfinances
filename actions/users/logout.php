<?php
@session_start();
$id = $_SESSION['id'];
unset($_SESSION['id']);
unset($_SESSION['User']);
unset($_SESSION['login']);
unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['senha']);
$sessionSql = "DELETE FROM sessions WHERE user_id = {$id}";
Db::query($sessionSql);
@session_destroy();

header('location: /application.php?page=admin/login');
