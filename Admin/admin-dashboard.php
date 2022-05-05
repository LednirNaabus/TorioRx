<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['loggedin']) {
} else {
    header("location:registerlogin.php");
}
include 'includes/connection/db.php';
?>
<html>

<head>
    <title>Admin Dashboard</title>
    <?php include('includes/main/header.php'); ?>
</head>

<body>
    <!-- navbar -->
    <?php include('includes/main/navbar.php'); ?>

    <div class="header-contents">
        <!-- carousel header -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.pexels.com/photos/3652103/pexels-photo-3652103.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="..." height="700px" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/4058359/pexels-photo-4058359.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="..." height="700px" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/4058357/pexels-photo-4058357.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="..." height="700px" width="100%">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- feature header  -->
        <div class="header-features">
            <div class="container">
                <div class="row justify-content-md-center">
                    <?php 
                        $product_query = mysqli_query($link, "SELECT * FROM products ORDER BY product_id LIMIT 3");

                        if($product_query != null) {
                            while($row = mysqli_fetch_array($product_query)) {
                                //print 3 earliest queries from products table
                                if($row['product_id'] == 1) {
                                    echo '<div class="col-md-3 feature-link-1">
                                            <br>
                                            <h5 style="padding-left: 20px"> ' . $row['product_name'] . '</h5>
                                            <p style="font-size: 14px; font-weight: 200; padding-left: 20px;"> ' . $row['product_briefinfo'] . '</p>
                                            <a href="viewproduct.php?product_id='. $row['product_id'] . '"><button type="button" class="btn btn-outline-light" style="margin-left: 20px"> Read More </button></a>
                                         </div>';
                                } elseif($row['product_id'] == 2) {
                                    echo    '<div class="col-md-3 feature-link-2">
                                                <br>
                                                <h5 style="padding-left: 20px">' . $row['product_name'] . ' </h5>
                                                <p style="font-size: 14px; font-weight: 200; padding-left: 20px">' . $row['product_briefinfo'] . '</p>
                                                <a href="viewproduct.php?product_id=' . $row['product_id'] . '"><button type="button" class="btn btn-outline-light" style="margin-left: 20px"> Read More</button></a>
                                            </div>';
                                } elseif($row['product_id'] == 3) {
                                    echo    '<div class="col-md-3 feature-link-3">
                                                <br>
                                                <h5 style="padding-left: 20px">' . $row['product_name'] . ' </h5>
                                                <p style="font-size: 14px; font-weight: 200; padding-left: 20px">' . $row['product_briefinfo'] . '</p>
                                                <a href="viewproduct.php?product_id=' . $row['product_id'] . '"><button type="button" class="btn btn-outline-light" style="margin-left: 20px"> Read More</button></a>
                                            </div>';
                                }
                            }
                        } else {
                            echo '<div class="header-features">
                                    <div class="container">
                                        <div class="row justify-content-md-center">
                                        </div>
                                    </div>
                                </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- section 2 -->
    <div class="section-2">
        <div class="desc-1">
            <h2> > See all of our products now! </h3>
        </div>
        <div class="btn-desc">
            <a href="products.php"><button type="button" class="btn btn-outline-light" style="margin-left: 20px">View All Products</button></a>
        </div>
    </div>

    <!-- section 3 -->
    <div class="section-3">
        <h2> Taking care of your health </h2>
        <div class="container section-3-container">
            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <i class="fas fa-comment-medical" style="color: #09427D; font-size: 65px;"></i>
                    <br><br>
                    <h5> Connect with us </h5>
                    <p style="font-weight: 200; line-height: 30px"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="admin-about.php" style="text-decoration: none; color: #09427D;"> > Read More </a>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-prescription" style="color: #09427D; font-size: 65px;"></i>
                    <br><br>
                    <h5> Check our products </h5>
                    <p style="font-weight: 200; line-height: 30px"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="admin-about.php" style="text-decoration: none; color: #09427D;"> > Read More </a>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-user-nurse" style="color: #09427D; font-size: 65px;"></i>
                    <br><br>
                    <h5> Know the team </h5>
                    <p style="font-weight: 200; line-height: 30px"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="admin-about.php" style="text-decoration: none; color: #09427D;"> > Read More </a>
                </div>
            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.3321823711744!2d121.11447421466437!3d14.580137989815567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c762a336c69b%3A0x1ffc06b52e2658b!2sTorio%20Rx%20Pharmacy!5e0!3m2!1sen!2sph!4v1650881573814!5m2!1sen!2sph" width="100%" ; height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="overflow-x:hidden"></iframe>

    <!-- footer -->
    <?php include('includes/main/footer.php'); ?>
</body>

</html>