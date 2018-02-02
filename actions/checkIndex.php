<?php
session_start();
if ((isset ($_SESSION['login']) == true) and (isset ($_SESSION['email']) == true)) {
    header("location: /admin");
} else {
}
