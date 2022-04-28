<html>

<head>
    <title>TorioRx Pharmacy | Announcements</title>

    <?php include('includes/main/header.php'); ?>
    <?php include("../Customer/includes/main/announcement_style.php"); ?>

</head>
<?php
session_start();
if ($_SESSION['loggedin']) { 
} else { 
    header("location:registerlogin.php");
}
?>

<body style="font-family: Poppins;">

    <!-- navbar -->
    <?php include('includes/main/navbar.php'); ?>

    

    <?php include("../Customer/includes/main/products_search.php"); ?>

    <!-- footer -->
    <?php include('includes/main/footer.php'); ?>
</body>

</html>