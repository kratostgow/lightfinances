<?php

// update Site Name when received
if (isset($_POST['sitename'])) {
    $v = $_POST['sitename'];
    $sql = "UPDATE site_configs SET name='{$v}'";
    Db::query($sql);
    header('location: /application.php?page=admin/def');
}
