<?php
// Define valores recebidos
$id = $_POST['id'];
$content = $_POST['content'];
$link = $_POST['link'];
$level = $_POST['level'];

$Menus = Model::load('menus');

$Menus->update(array('content'=> $content, 'link'=> $link, 'level'=> $level), "id = :id", array('id'=> $id));
header("location: /application.php?page=admin/def");
