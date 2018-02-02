<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['User']);
unset($_SESSION['login']);
unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['senha']);
@session_destroy();

header('location: /');
