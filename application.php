<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
@session_start();
require_once 'library/db.php';
require_once 'library/model.php';
require_once 'library/siteConfigs.php';
require_once 'actions/general/loader.php';
require_once 'includes/includes.php';


// CHECK USER LEVEL
if (@$_SESSION['tipo'] == 1) {
    $userLevel = 'admin';
} else {
    $userLevel = 'normal';
}



if (isset($_GET['page']) && $_GET['page']) {
    $page = $_GET['page'];
} else {
    $page = 'admin/login';
}

if ($page != 'admin/login' && !isset($_GET['noTop'])) {
    require 'admin/templates/top.php';
}

require $page . ".php";

if ($page != 'admin/login' && !isset($_GET['noBot'])) {
    require 'admin/templates/bottom.php';
}
