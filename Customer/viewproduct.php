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
    <?php include('includes/main/navbar.php'); ?>

    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <?php 
                        if(!empty($_GET['product_id'])){
                            $product_id = $_GET['product_id'];
                            $_SESSION['product_id'] = $product_id;
                            $product_id_exists = true;
                            include "includes/connection/db.php";
                            $sql = "SELECT * FROM products Where product_id='$product_id'";
                            $query = mysqli_query($link, $sql); 
                            $count = mysqli_num_rows($query);
                            if ($count > 0) {
                                while ($row = mysqli_fetch_array($query)) { 
                                    $product_image = $row['product_image'];
                                    $product_name = $row['product_name'];
                                    $product_briefinfo = $row['product_briefinfo'];
                                    $product_description = str_replace("\n", "<br><br>", $row['product_description']); 
                                    $product_price = $row['product_price'];
                                    $productContains = str_replace("\n", "<br><br>", $row['product_contains']); 
                                    $productPrescription = str_replace("\n", "<br><br>", $row['product_prescription']); 
                                }
                            } else {
                                $product_id_exists = false;
                            }
                        }                                       
                        if ($product_id_exists) {
 
                            print '<div class="preview col-md-6">';
                                print '<div class="preview-pic tab-content">';
                                    print '<div class="tab-pane active" id="pic-1"><img src="data:image/png;base64,' . base64_encode($product_image). '" class="card__image" alt="" /></div>';
                                print '</div>';
                            print '</div>';

                            print '<div class="details col-md-6">';
                                print '<h3 class="product-title">'.$product_name.'</h3>';
                                print '<hr style="width: 100%; text-align: left; border: 1px solid white;">';
                                print '<p class="product-description">';
                                    print $product_briefinfo;
                                    print '<br><br>';
                                    print $product_description;
                                print '</p>';
                                print '<br><br>';
                                print '<h5 class="price">Price: ₱'. $product_price .'.00</h5>';
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
                        print $productPrescription;
                    ?>
                </p>
            </div>
        </div>
    </center>
    <?php }?>
    <!-- footer -->
    <?php include('includes/main/footer.php'); ?>
</body>

</html>