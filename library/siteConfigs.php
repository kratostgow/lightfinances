<?php
require_once 'db.php';

$config = Db::fetchRow("SELECT * FROM site_configs");
$siteName = $config->name;
if ($config->registration == 1) {
    $registration = 'enabled';
} else {
    $registration = 'disabled';
}
