<?php

// Define valores recebidos
$id = $_POST['id'];
$name = $_POST['name'];
$icon = $_POST['icon'];
$extContent = $_POST['extContent'];

$DefTabs = Model::load('defTabs');
$DefTabs->update(array('name'=> $name, 'icon'=> $icon, 'extContent'=> $extContent), "id = :id", array('id'=> $id));
header("location: /application.php?page=admin/def");
