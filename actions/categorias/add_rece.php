<?php

// Define valores recebidos
$categoria = $_POST['categoria'];
$Categorias = Model::load('categoriasR');
$data = array('categoria'=> $categoria);

$Categorias->insert($data);
header("location: /admin/def.php");
