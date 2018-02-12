<?php

// Define valores recebidos
$id = $_POST['id'];

$Menus = Model::load('menus');
$Menus->delete("id = :id", array('id'=> $id));
header("location: /admin/def.php");
