<?php
@session_start();
if ((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['email']) == true)) {
    $hasAlert = true;
    $alertType = 'warning';
    $alertMsg = 'Você deve fazer login antes.';
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header("location: /?hasAlert=$hasAlert&alertType=$alertType&alertMsg=$alertMsg");
} else {
}
