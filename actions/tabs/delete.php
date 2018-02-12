<?php

// Define valores recebidos
$id = $_POST['id'];

$DefTabs = Model::load('defTabs');
$DefTabs->delete("id = :id", array('id'=> $id));
