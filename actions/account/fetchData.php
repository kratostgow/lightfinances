<?php
$sql = "SELECT * FROM users";
$id = $_SESSION['id'];
$user = Db::fetchRow($sql, array("id"=> "{$id}"));
