<?php

// Define valores recebidos
$id = $_POST['id'];

$Icons = Model::load('icons');
$Icons->delete("id = :id", array('id'=> $id));
