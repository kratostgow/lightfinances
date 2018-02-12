<?php
require_once 'actions/admin/load.php';
require_once 'actions/categorias/load.php';
require_once 'actions/despesas/load.php';
require_once 'actions/receitas/load.php';
require_once 'actions/icons/load.php';
require_once 'actions/menu/load.php';
require_once 'actions/tabs/load.php';
require_once 'actions/users/load.php';
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'admin/login' || $_GET['page'] == 'actions/users/loginUser') {

    } else {
        require_once 'actions/admin/check.php';
    }

}
