<?php
    session_start();

    include "includes/connection/db.php";

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        if(isset($_SESSION['id'])) {
            $announcement_id = $_SESSION['id'];
            $sql_query = "DELETE FROM announcements WHERE announcement_id='$announcement_id'";

            mysqli_query($link, $sql_query);
            header("Location: announcements.php");
        }
    }
?>