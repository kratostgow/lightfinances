<?php
require 'actions/connectDb.php';
// CONFIGS DO SITE
if($result = $Conn->query("SELECT * FROM site_configs")) {
    while($row = $result->fetch_assoc()){
        $siteName = $row['name'];

        // Hablilitar ou desabilitar cadastros no sistema
        if ($row['registration'] == 1) {
            $Registration = 'enabled';
        } else {
            $Registration = 'disabled';
        }
    }
}
mysqli_close($Conn);
