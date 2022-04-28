<html>

<head>
    <title>TorioRx Pharmacy | Products</title>

    <?php include('includes/main/header.php'); ?>
    <?php include('includes/main/products_header.php'); ?>
    <?php include("../Admin/includes/main/viewproduct_style.php"); ?>

</head> 

<body style="font-family: Poppins;">

    <!-- navbar -->
    <div class="contact-nav">
        <div class="contact-nav-left"> <i class="fas fa-location-arrow" style="color: #09427D; font-size: 13px;"></i> 052 P. Burgos St, Brgy. Lunsad, Binangonan, 1940 Rizal </div>
        <div class="contact-nav-right"> <i class="fas fa-phone" style="color: #09427D; font-size: 13px;"></i> Tel: 0915 512 5563 </div>
    </div>
    <nav>
        <div class="logo">TorioRx</div>
        <ul class="nav-links">
            <li class="nav-links-li"><a href="admin-dashboard.php" style="font-weight: 100">Home</a></li>
            <li class="nav-links-li"><a href="admin-about.php" style="font-weight: 100">About</a></li>
            <li class="nav-links-li"><a href="products.php" style="font-weight: 100">Products</a></li>
            <li class="nav-links-li"><a href="admin-contact.php" style="font-weight: 100">Contact</a></li>
            <li class="nav-links-li"><a href="registerlogin.php" style="font-weight: 100">Logout</a></li>
        </ul>
    </nav>

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
                         ?>
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <?php 
                                print '<div class="tab-pane active" id="pic-1"><img src="data:image/png;base64,' . base64_encode($product_image). '" class="card__image" alt="" /></div>';
                            ?>
                        </div>
                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">
                            <?php print $product_name; ?>
                            <button type="button" style="float: right;" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button>
                        </h3>
                        <hr style="width: 100%; text-align: left; border: 1px solid white;">
                        <p class="product-description">
                            <?php 
                                print $product_briefinfo;
                                print $product_description;
                            ?> 
                        </p>
                        <br><br>
                        <h5 class="price">Price: ₱ <?php print $product_price; ?> .00</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Product Entry</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name of Product</label>
                            <input style="margin-left:30px; width:90%;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Biogesic">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Product Image</label>
                            <input style="margin-left:30px; width:90%;" type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Brief Info</label>
                            <input style="margin-left:30px; width:90%;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Relief and care for headache and fever">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Main Description</label>
                            <textarea style="margin-left:30px; width:90%;" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Product Content</label>
                            <textarea style="margin-left:30px; width:90%;" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Intake Interval</label>
                            <textarea style="margin-left:30px; width:90%;" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">Delete</button>
                    <button type="button" class="btn btn-default">Save</button>
                </div>
            </div>
        </div>
    </div>


    <center>
        <div class="c">
            <input type="checkbox" class="input1" id="faq-2">
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
            <input type="checkbox" class="input1" id="faq-3">
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