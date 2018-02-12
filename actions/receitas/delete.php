<?php

// Define valores recebidos
$id = $_GET['id'];

$Receitas = Model::load('receitas');
$Receitas->delete("id = :id", array('id'=> $id));
header("location: /application.php?page=admin/receitas");
