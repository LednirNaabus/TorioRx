<html>

<head>
    <title>TorioRx Pharmacy | Products</title>
    <?php include('includes/main/header.php'); ?>

    <?php include("../Customer/includes/main/products_style.php"); ?>

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

    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">TorioRx Pharmacy - Products</h1>
            <br>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="search">
        </div>
    </div>

    <ul class="cards" id="myUL">

        <?php 
            include "includes/connection/db.php";
            $sql = "SELECT * FROM products";
            $query = mysqli_query($link, $sql);              
            $_SESSION['product_image_array']=array();
            while ($row = mysqli_fetch_array($query)) {   

                print "<li>";
                    print '<a  href="viewproduct.php?product_id=' . $row['product_id'] . '" class="card">';
                        print '<img src="data:image/png;base64,' . base64_encode($row['product_image'] ). '" class="card__image" alt="" />';
                        print '<div class="card__overlay">';
                            print '<div class="card__header">';
                                print '<svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>';
                                print '<div class="card__header-text">';
                                    print '<h3 class="card__title">' . $row['product_name'] . '</h3>';
                                    print '<span class="card__status">' . $row['product_briefinfo'] . '</span>';
                                print "</div>";
                            print "</div>";
                            print '<button style="margin-left: 2em; margin-bottom: 2em;">More Details</button>';
                        print '</div>';
                    print "</a>";
                print "</li>";
            }
        ?>
 

    </ul>

    <?php include("../Customer/includes/main/products_search.php"); ?>

    <!-- footer -->
    <?php include('includes/main/footer.php'); ?>
</body>

</html>