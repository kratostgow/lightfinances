<?php
$users = Db::fetchAll("SELECT * FROM users");
$sessions = Db::fetchAll("SELECT * FROM sessions");
