<?php

// Define valores recebidos
$id = $_POST['id'];
$categoria = $_POST['categoria'];

$CategoriasR = Model::load('categoriasR');
$CategoriasR->update(array('categoria'=> $categoria), "id = :id" , array('id'=> $id));
header("location: /admin/def.php");
