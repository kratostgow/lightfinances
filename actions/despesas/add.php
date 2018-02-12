<?php
// Define valores recebidos
$descr = $_POST['descr'];
$categorias = $_POST['categoria'];
if ($_POST['rep'] == 1) {
    $rep = 'Nao';
}
if ($_POST['rep'] == 2) {
    $rep = 'Diariamente';
}
if ($_POST['rep'] == 3) {
    $rep = 'Semanalmente';
}
if ($_POST['rep'] == 4) {
    $rep = 'Mensalmente';
}
$valor = $_POST['valor'];
$created = date('d-m-Y');

$Despesas = Model::load('despesas');
$DesCat = Model::load('despesas_categorias');
$data = array('descr'=> $descr, 'valor'=> $valor, 'rep'=> $rep, 'created'=> $created);

$lastId = $Despesas->insert($data);
for ($i = 0; $i < count($categorias); $i++) {
    $data = array('despesa_id'=> $lastId, 'categoria_id'=> $categorias[$i]);
    $DesCat->insert($data);
}
header("location: /application.php?page=admin/despesas/index");
