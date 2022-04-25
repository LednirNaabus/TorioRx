<?php 

    session_start();

    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("location: registerlogin.php");
        exit;
    }

    include "includes/connection/db.php";

    echo '<h1> WELCOME, ' . htmlspecialchars($_SESSION['username']) . '</h1>';
    echo '<a href="logout.php">LOGOUT</a>';
 ?>