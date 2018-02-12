<?php

// Define valores recebidos
$categoria = $_POST['categoria'];
$Categorias = Model::load('categorias');

$data = array('categoria'=> $categoria);

$Categorias->insert($data);
//header("location: /application.php?page=admin/def");
