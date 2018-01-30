<?php
@session_start();
set_include_path('../');
require 'config/siteConfigs.php';
require 'actions/adminFunc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>User Area</title>
        <link rel="stylesheet" href="/styles/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/e0bd3ce984.js"></script>
    </head>
    <body>
        <?php require 'menu.php'; ?>

        <?php require 'resumo.php'; require 'admin/templates/bottom.php';?>

        <!-- Imports -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>
