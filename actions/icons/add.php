<?php

// Define valores recebidos
$nome = $_POST['nome'];
$tag = $_POST['tag'];

$Icons = Model::load('icons');
$data = array('nome'=> $nome, 'tag'=> $tag);

$Icons->insert($data);
header("location: /admin/def.php");
