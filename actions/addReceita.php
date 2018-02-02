<?php
require 'connectDb.php';

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

// Seleciona a table users
$query = "INSERT INTO receitas (descr, valor, rep, created) VALUES ('$descr', '$valor', '$rep', '$created')";
$result = mysqli_query($Conn, $query);
$lastId = $Conn->insert_id;
for ($i=0;$i<count($categoriasR);$i++)
{
   $query2 = "INSERT INTO receitas_categorias (receita_id, categoriaR_id) VALUES ('$lastId', '$categoriasR[$i]')";
   $result2 = mysqli_query($Conn, $query2);
}
header("location: /admin/receitas.php");
mysqli_close($Conn);
