<?php
@session_start();
set_include_path('../');
require 'config/siteConfigs.php';
require 'actions/adminFunc.php';
require 'actions/check.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>User Area</title>
        <link rel="stylesheet" href="/styles/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/e0bd3ce984.js"></script>
        <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php require 'menu.php'; ?>
