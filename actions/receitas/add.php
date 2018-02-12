<?php
// Define valores recebidos
$descr = $_POST['descr'];
$categoriasR = $_POST['categoriaR'];
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

$Receitas = Model::load('receitas');
$RecCat = Model::load('receitas_categorias');
$data = array('descr'=> $descr, 'valor'=> $valor, 'rep'=> $rep, 'created'=> $created);

$lastId = $Receitas->insert($data);
for ($i = 0; $i < count($categoriasR); $i++) {
    $data = array('receita_id'=> $lastId, 'categoria_id'=> $categoriasR[$i]);
    $RecCat->insert($data);
}
header("location: /application.php?page=admin/receitas/index");
