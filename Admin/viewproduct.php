<?php
    session_start();
?>

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
            <div class="container-fluid">
                <div class="wrapper row">
                    <?php
                        $product_id_exists = false;
                        if(!empty($_GET['product_id'])) {
                            $product_id = $_GET['product_id'];
                            $_SESSION['product_id'] = $product_id;
                            $product_id_exists = true;
                            include "includes/connection/db.php";
                            $sql = "SELECT * FROM products where product_id='$product_id'";
                            $query = mysqli_query($link, $sql);
                            $count = mysqli_num_rows($query);
                            if($count > 0) {
                                while($row = mysqli_fetch_array($query)) {
                                    $product_image = $row['product_image'];
                                    $product_name = $row['product_name'];
                                    $product_briefinfo = $row['product_briefinfo'];
                                    $product_description = str_replace("\n", "<br><br>", $row['product_description']); 
                                    $product_price = $row['product_price'];
                                    $productContains = str_replace("\n", "<br><br>", $row['product_contains']); 
                                    $productPrescription = str_replace("\n", "<br><br>", $row['product_prescription']);
                                }
                            }
                        } else {
                            $product_id_exists = false;
                        }

                        if($product_id_exists) {
                            echo '<div class="preview col-md-6">
                                    <div class="preview-pic tab-content">';
                            print '<div class="tab-pane active" id="pic-1"><img src="data:image/png;base64,' . base64_encode($product_image). '" class="card__image" alt="" /></div>';
                            echo '</div> </div>';

                            echo '<div class="details col-md-6">
                                    <h3 class="product-title"> ' . $product_name . '<button type="button" style="float: right;" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button>
                                        <button type="button" style="float: right;" class="btn btn-danger btn-sm" onClick="confirmDelete('.$_GET['product_id'].')"><span class="glyphicon glyphicon-trash"></span></button>
                                    <h3>
                                <hr style="width: 100%; text-align: left; border: 1px solid white;">
                                <p class="product-description">';
                            echo $product_briefinfo;
                            echo $product_description;
                            echo '</p> <br><br>';
                            echo '<h5 class="price"> Price: &#8369; ' . $product_price . ' .00 </h5>
                            </div>';
                        } else {
                            echo '<div class="details col-md-6">
                                    <h5> No Products available. </h5>
                                  </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Product Entry</h4>
                </div>
                <form action="product_edit.php" method="post">
                    <div class="modal-body">
                        <input name="product_edit" value="<?php echo $product_id; ?>" style="width:0px; height:0px;" hidden>
                        <div class="form-group">
                            <label for="prod_name">Name of Product</label>
                            <input style="margin-left:30px; width:90%;" name="prod_name" type="text" class="form-control" id="" placeholder="Biogesic">
                        </div>
                        <div class="form-group">
                            <label for="prod_img">Product Image</label>
                            <input style="margin-left:30px; width:90%;" name="prod_img" type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <label for="prod_price">Product Price</label>
                            <div class="input-group" style="margin-left:30px; width:90%;">
                                <span class="input-group-addon">PhP</span>
                                <input type="text" name="prod_price" id="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prod_brief_info">Brief Info</label>
                            <input style="margin-left:30px; width:90%;" name="prod_brief_info" type="text" class="form-control" id="" placeholder="Relief and care for headache and fever">
                        </div>
                        <div class="form-group">
                            <label for="prod_desc">Main Description</label>
                            <textarea style="margin-left:30px; width:90%;" name="prod_desc" class="form-control" id="" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="prod_contains">Product Content</label>
                            <textarea style="margin-left:30px; width:90%;" name="prod_contains" class="form-control" id="" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="prod_presc">Intake Interval</label>
                            <textarea style="margin-left:30px; width:90%;" name="prod_presc" class="form-control" id="" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-default">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /modal -->

    <?php
        if($product_id_exists) {
            echo '<center>
                    <div class="c">
                        <input type="checkbox" class="input1" id="faq-2">
                        <h1><label for="faq-2">What is in this medicine?</label></h1>
                        <div class="p">
                            <p>' . $productContains;
            echo            '</p>
                        </div>
                    </div>
                 </center>';

            echo '<center>
                 <div class="c">
                     <input type="checkbox" class="input1" id="faq-3">
                     <h1><label for="faq-3">How much and how often should you take this medicine?</label></h1>
                     <div class="p">
                         <p>' . $productPrescription;
            echo        '</p>
                     </div>
                 </div>
              </center>'; 
        }
    ?>
    <!-- footer -->
    <?php include('includes/main/footer.php'); ?>

    <!-- scripts -->
    <script>
        function confirmDelete(id) {
            var x = confirm("Are you sure you want to delete this item?");
            if(x == true) {
                window.location.assign("product_delete.php?id="+id);
            }
        }
    </script>
</body>
</html>