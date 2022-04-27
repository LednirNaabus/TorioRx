<html>

<head>
    <title>TorioRx Pharmacy | Products</title>

    <?php include('includes/main/header.php'); ?>
    <?php include("../Customer/includes/main/viewproduct_style.php"); ?>

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
    <div class="contact-nav">
        <div class="contact-nav-left"> <i class="fas fa-location-arrow" style="color: #09427D; font-size: 13px;"></i> 052 P. Burgos St, Brgy. Lunsad, Binangonan, 1940 Rizal </div>
        <div class="contact-nav-right"> <i class="fas fa-phone" style="color: #09427D; font-size: 13px;"></i> Tel: 0915 512 5563 </div>
    </div>
    <nav>
        <div class="logo">TorioRx</div>
        <ul class="nav-links">
            <li class="nav-links-li"><a href="user-dashboard.php" style="font-weight: 100">Home</a></li>
            <li class="nav-links-li"><a href="user-about.php" style="font-weight: 100">About</a></li>
            <li class="nav-links-li"><a href="products.php" style="font-weight: 100">Products</a></li>
            <li class="nav-links-li"><a href="user-contact.php" style="font-weight: 100">Contact</a></li>
            <li class="nav-links-li"><a href="registerlogin.php" style="font-weight: 100">Logout</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <?php 
                        include "includes/connection/db.php";
                        $sql = "SELECT * FROM products";
                        $query = mysqli_query($link, $sql); 

                        while ($row = mysqli_fetch_array($query)) {

                            $string = str_replace("\n", "<br><br>", $row['product_description']); 

                            print '<div class="preview col-md-6">';
                                print '<div class="preview-pic tab-content">';
                                    print '<div class="tab-pane active" id="pic-1"><img src="data:image/png;base64,' . base64_encode($row['product_image']). '" /></div>';
                                print '</div>';
                            print '</div>';

                            print '<div class="details col-md-6">';
                                print '<h3 class="product-title">Biogesic</h3>';
                                print '<hr style="width: 100%; text-align: left; border: 1px solid white;">';
                                print '<p class="product-description">';
                                    print $row['product_briefinfo'];
                                    print '<br><br>';
                                    print $string;
                                print '</p>';
                                print '<br><br>';
                                print '<h5 class="price">Price: ₱'. $row['product_price'] .'.00</h5>';
                            print '</div>';                                                
                    ?> 

                </div>
            </div>
        </div>
    </div>

    <center>
        <div class="c">
            <input type="checkbox" id="faq-2">
            <h1><label for="faq-2">What is in this medicine?</label></h1>
            <div class="p">
                <p>
                    <?php  
                        $productContains = str_replace("\n", "<br><br>", $row['product_contains']); 
                        print $productContains;
                    ?>
                </p>
            </div>
        </div>
    </center>
    <center>
        <div class="c">
            <input type="checkbox" id="faq-3">
            <h1><label for="faq-3">How much and how often should you take this medicine?</label></h1>
            <div class="p">
                <p>
                    <?php  
                        $productPrescription = str_replace("\n", "<br><br>", $row['product_prescription']); 
                        print $productPrescription;
                    }?>
                </p>
            </div>
        </div>
    </center>

    <!-- footer -->
    <?php include('includes/main/footer.php'); ?>
</body>

</html>