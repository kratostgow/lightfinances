<?php

// Define valores recebidos
$id = $_GET['id'];

$Despesas = Model::load('despesas');
$Despesas->delete("id = :id", array('id'=> $id));
header("location: /application.php?page=admin/despesas");
