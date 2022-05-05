<?php 

    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("location: registerlogin.php");
        exit;
    } else {
        header("location: user-dashboard.php");
    }
 ?>