<?php

// Define valores recebidos
$nome = $_POST['nome'];
$icone = $_POST['icon'];
$extContent = $_POST['extContent'];
$created = date('d-m-Y');

$DefTabs = Model::load('defTabs');
$data = array('name'=> $nome, 'icon'=> $icone, 'extContent'=> $extContent, 'created'=> $created);

$DefTabs->insert($data);
