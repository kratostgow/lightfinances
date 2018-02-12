<?php
// Define valores recebidos
$content = $_POST['content'];
$link = $_POST['link'];
$level = $_POST['level'];

$Menus = Model::load('menus');
$data = array('content'=> $content, 'link'=> $link, 'level'=> $level);

$Menus->insert($data);
header("location: /admin/def.php");
