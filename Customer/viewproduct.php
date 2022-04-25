<html>
    <head>
        <title>TorioRx Pharmacy | Products</title>

        <?php include('includes/main/header.php'); ?>
        <?php include("../Customer/includes/main/products_header.php"); ?>
        <?php include("../Customer/includes/main/viewproduct_style.php"); ?>

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
						<h3 class="product-title">Biogesic</h3>
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
						<h4 class="price">Price: Product Price</h4>
                        <br>
						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <center>
    <div class="c">
    <input type="checkbox" id="faq-1">
    <h1><label for="faq-1">What is this medicine used for?</label></h1>
    <div class="p">
        <p>
            For the relief of minor aches and pains such as headache, backache, menstrual cramps, muscular aches, minor arthritis pain, toothache, and pain associated with the common cold and flu.
        </p>
    </div>
    </div>
    </center>
    <center>
    <div class="c">
    <input type="checkbox" id="faq-2">
    <h1><label for="faq-2">What is in this medicine?</label></h1>
    <div class="p">
        <p>This product contains Paracetamol, a fever reducer and pain reliever.</p>
    </div>
    </div>
    </center>
    <center>
    <div class="c">
    <input type="checkbox" id="faq-3">
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
