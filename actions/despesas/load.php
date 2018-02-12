<?php
$despesas = Db::fetchAll("SELECT d.*, GROUP_CONCAT(c.categoria) cat FROM despesas_categorias dc INNER JOIN despesas d ON d.id = dc.despesa_id INNER JOIN categorias c ON c.id = dc.categoria_id GROUP BY d.id");
$despesasTotal = Db::fetchRow("SELECT SUM(valor) as soma FROM despesas");
