<?php

// Define valores recebidos
$id = $_GET['id'];

$Categorias = Model::load('categoriasR');
$Categorias->delete("id = :id", array('id'=> $id));
