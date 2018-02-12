<?php

$hasAlert = false;

// Define valores recebidos
$id = $_POST['id'];

$Users = Model::load('users');
$Users->delete("id = :id", array('id'=> $id));
