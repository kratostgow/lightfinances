<?php
require 'connectDb.php';

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

// Seleciona a table users
$query = "INSERT INTO despesas (descr, valor, rep, created) VALUES ('$descr', '$valor', '$rep', '$created')";
$result = mysqli_query($Conn, $query);
$lastId = $Conn->insert_id;
for ($i=0;$i<count($categorias);$i++)
{
   $query2 = "INSERT INTO despesas_categorias (despesa_id, categoria_id) VALUES ('$lastId', '$categorias[$i]')";
   $result2 = mysqli_query($Conn, $query2);
}
header("location: /admin/despesas.php");
mysqli_close($Conn);
