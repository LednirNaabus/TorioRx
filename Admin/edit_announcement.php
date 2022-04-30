<?php
session_start();
if ($_SESSION['loggedin']) {
    include 'includes/connection/db.php';
} else {
    header("location:registerlogin.php");
}
if ($_SERVER['REQUEST_METHOD'] == "POST")
{ 
    $announcement_id = $_SESSION['id'];
    $announcement_details = ($_POST['announcement_details']);
    $announcement_level = ($_POST['type']);  

    $sql = "UPDATE announcements SET announcement_details='$announcement_details', announcement_level='$announcement_level' WHERE announcement_id='$announcement_id'"; 
    mysqli_query($link,  $sql);  
    
    header("location: announcements.php?id=$announcement_id");
} else {
    header("location:admin-dashboard.php");
}
?>