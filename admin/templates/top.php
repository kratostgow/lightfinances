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
        <script src="/styles/js/jquery.min.js"></script>
        <link rel="stylesheet" href="/styles/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/e0bd3ce984.js"></script>
        <script src="/styles/js/jquery.tabslet.min.js" charset="utf-8"></script>
        <link href="/styles/js/chosenjs/chosen.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/styles/css/main.css">
    </head>
    <body>
        <?php require 'menu.php'; ?>
