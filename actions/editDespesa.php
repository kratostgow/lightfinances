<?php
require 'connectDb.php';

// Define valores recebidos
$id = $_POST['id'];
$descr = $_POST['descr'];
$valor = $_POST['valor'];
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
$modified = date('d-m-Y');

// Seleciona a table users
$query = "UPDATE despesas SET descr='$descr', valor='$valor', rep='$rep', modified='$modified' WHERE id = {$id}";
$result = mysqli_query($Conn, $query);
header("location: /admin/despesas.php");
mysqli_close($Conn);
