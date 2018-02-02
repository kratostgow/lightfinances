<?php
require_once 'db.php';

$receitas = Db::fetchAll("SELECT r.*, GROUP_CONCAT(cr.categoria) cat FROM receitas_categorias rc INNER JOIN receitas r ON r.id = rc.receita_id INNER JOIN categoriasR cr ON cr.id = rc.categoria_id GROUP BY r.id");
$receitasTotal = Db::fetchRow("SELECT SUM(valor) as soma FROM receitas");
$categoriasR = Db::fetchAll("SELECT * FROM categoriasR");
