<?php
require_once 'db.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

$menuSql = "SELECT * FROM menus";
$menus = Db::fetchAll($menuSql);

// update Site Name when received
// if (isset($_POST['sitename'])) {
//     $v = $_POST['sitename'];
//     $sql = "UPDATE site_configs SET name='{$v}'";
//     Db::query($sql);
//     header('location: /admin/def.php');
// }

// Get users
function getUsers($Conn) {
    $query = "SELECT * FROM users";
    $result = mysqli_query($Conn, $query);
    while ($row = $result->fetch_assoc()){
        $users [] = $row;
    }
    return $users;
}

// Get categories
function getCat($Conn) {
    $query = "SELECT * FROM categorias";
    $result = mysqli_query($Conn, $query);
    while ($row = $result->fetch_assoc()){
        $categorias [] = $row;
    }
    return $categorias;
}

// Get expenses
function getExpenses($Conn) {
    $query = "SELECT d.*, GROUP_CONCAT(c.categoria) cat FROM despesas_categorias dc INNER JOIN despesas d ON d.id = dc.despesa_id INNER JOIN categorias c ON c.id = dc.categoria_id GROUP BY d.id";
    $result = mysqli_query($Conn, $query);
    while ($row = $result->fetch_assoc()){
        $despesas [] = $row;
    }
    return $despesas;
}

// Get expenses
function getExpensesT($Conn) {
    $query = "SELECT SUM(valor) FROM despesas";
    $result = mysqli_query($Conn, $query);
    while ($row = $result->fetch_assoc()){
        $despesasTotal = $row;
    }
    return $despesasTotal;
}

$tabs = Db::fetchAll("SELECT * FROM defTabs");
$users = Db::fetchAll("SELECT * FROM users");
$despesas = Db::fetchAll("SELECT d.*, GROUP_CONCAT(c.categoria) cat FROM despesas_categorias dc INNER JOIN despesas d ON d.id = dc.despesa_id INNER JOIN categorias c ON c.id = dc.categoria_id GROUP BY d.id");
$despesasTotal = Db::fetchRow("SELECT SUM(valor) as soma FROM despesas");
$categorias = Db::fetchAll("SELECT * FROM categorias");
