<?php

// Define valores recebidos
$id = $_POST['id'];
$categoria = $_POST['categoria'];

$Categorias = Model::load('categorias');
$Categorias->update(array('categoria'=> $categoria), "id = :id" , array('id'=> $id));
header("location: /admin/def.php");
