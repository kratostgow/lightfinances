<?php

// Define valores recebidos
$id = $_GET['id'];

$Categorias = Model::load('categorias');
$Categorias->delete("id = :id", array('id'=> $id));
header("location: /application.php?page=admin/def");
