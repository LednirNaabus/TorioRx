<html>
    <head>
        <title>TorioRx Pharmacy | Products</title>

        <?php include('includes/main/header.php'); ?>
        <?php include('includes/main/products_header.php'); ?>
        <?php include("../Admin/includes/main/viewproduct_style.php"); ?>

    </head>

    <body style="font-family: Poppins;">

    <!-- navbar -->
    <?php include('includes/main/navbar.php'); ?>

    <div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="../Customer/img/test.png" /></div>
						</div>
						
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">
                            Biogesic 
                            <button type="button" style="float: right;" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button>
                        </h3>
                        <hr style="width: 100%; text-align: left; border: 1px solid white;">
						<p class="product-description">
                            Relief and care for headache and fever
                            <br>
                            <br>
                            Biogesic is used and trusted for headache and fever relief. It can be consumed on an empty stomach, and can be taken by pregnant women, breastfeeding moms and the elderly. Biogesic has been caring for Filipinos for over 50 years. #AlagangBiogesic
                            <br>
                            <br>
                            If you are pregnant or breastfeeding, consult your doctor before use.
                            If symptoms persist, consult your doctor.
                        </p>
                        <br><br>
						<h5 class="price">Price: Product Price</h5>
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
        <p>This product contains Paracetamol, a fever reducer and pain reliever.</p>
    </div>
    </div>
    </center>
    <center>
    <div class="c">
    <input type="checkbox" class="input1" id="faq-3">
    <h1><label for="faq-3">How much and how often should you take this medicine?</label></h1>
    <div class="p">
        <p>
        Adults and children 12 years and older: orally, 1 to 2 tablets every 4 to 6 hours, as needed for pain and/or fever, or, as directed by a doctor
        <br><br>
        Do not take more than 4g (8 tablets) in each 24-hour period.
        <br><br>
        Do not use more than the recommended dose.
        </p>
    </div>
    </div>
    </center>

     <!-- footer -->
     <?php include('includes/main/footer.php'); ?>
    </body>
</html>
