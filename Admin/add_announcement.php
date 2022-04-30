<?php
session_start();
if ($_SESSION['loggedin']) {
    include 'includes/connection/db.php';
} else {
    header("location:registerlogin.php");
}
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $announcement_id = $_GET['id'];
    $announcement_details = ($_POST['announcement_details']);
    $announcement_level = ($_POST['type']);
  
    $sql = "INSERT INTO announcements (announcement_details, announcement_level) VALUES ('$announcement_details','$announcement_level')"; 
    mysqli_query($link,  $sql);  
    
    header("location: announcements.php");
} else {
    header("location:admin-dashboard.php");
}
?>