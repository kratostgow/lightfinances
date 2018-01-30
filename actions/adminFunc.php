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

// Create a card with passed parameters
function Card($panelTitle, $title, $text, $btnContent, $formAction, $formMethod, $isForm = 0) {
    if ($isForm) {
        echo "<form action='{$formAction}' method='{$formMethod}'>
                <div class='card'>
                  <div class='card-header'>
                    {$panelTitle}
                  </div>
                  <div class='card-body'>
                    <h5 class='card-title'>{$title}</h5>
                    <p class='card-text'>{$text}</p>
                    <button type='submit' class='btn btn-primary'>{$btnContent}</button>
                  </div>
                </div>
              </form>";
    } else {
        echo "<div class='card'>
          <div class='card-header'>
            {$panelTitle}
          </div>
          <div class='card-body'>
            <h5 class='card-title'>{$title}</h5>
            <p class='card-text'>{$text}</p>
            <a href='#' class='btn btn-primary'>{$btnContent}</a>
          </div>
        </div>";
    }
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


$tabs = getTabs($Conn);
$users = getUsers($Conn);


//Close the connection
mysqli_close($Conn);
