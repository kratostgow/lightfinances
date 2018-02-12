<?php
@session_start();
if ((!isset($_SESSION['login']) == true) && (!isset($_SESSION['email']) == true)) {
    $hasAlert = true;
    $alertType = 'warning';
    $alertMsg = 'Você deve fazer login antes.';
    unset($_SESSION['senha']);
    if ($_GET['page'] =! 'admin/login') {
        header("location: /application.php?page=admin/login");
    }
} else {
}
