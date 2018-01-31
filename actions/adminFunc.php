<?php
require 'connectDb.php';

// Get menus for navbar
$menus = array();
$result = $Conn->query('SELECT * FROM menus');
while ($row = $result->fetch_assoc()) {
    $menus[] = $row;
}


// update Site Name when received
if (isset($_POST['sitename'])) {
    $v = $_POST['sitename'];
    $query = "UPDATE site_configs SET name='{$v}'";
    mysqli_query($Conn, $query);
    header('location: /admin/def.php');
}

// Get tabs
function getTabs($Conn) {
    $query = "SELECT * FROM defTabs";
    $result = mysqli_query($Conn, $query);
    while ($row = $result->fetch_assoc()){
        $tabs [] = $row;
    }
    return $tabs;
}


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



$tabs = getTabs($Conn);
$users = getUsers($Conn);
$despesas = getExpenses($Conn);
$categorias = getCat($Conn);


//Close the connection
mysqli_close($Conn);
