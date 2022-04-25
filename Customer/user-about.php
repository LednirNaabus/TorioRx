<!DOCTYPE html>
<html>
    <head>
        <title>User Dashboard</title>
        <?php include('includes/main/header.php'); ?>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cutive+Mono">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
	<style>
		body 
			{
				overflow-x:hidden;
				font-family: Times New Roman, Times, serif;
			}
			
		 .background {
			  position:relative;
			  height:150vh;
			  background-color: rgba(9, 64, 123,  0.74);
			  background-image: url(header3.jpg); 
			  z-index:-1;
			}

			.background:after {
				content:" ";
				background-color:inherit;
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%; 
				z-index:-1;
			}

	</style>
    <body>
        <!-- navbar -->
        <?php include('includes/main/navbar.php'); ?>
		
		<center>
		<img src="header1.jpg" width="1600" height="709">
			<div class="container" style="margin-top:-10.6vh; font-family: 'Cutive Mono'; font-size: 35px; ">
			  <div class="row">
				<div class="col" style="background-color:rgba(25, 144, 206, 0.92); color: white; padding-top:2vh; padding-bottom:2vh;">
				  <a href="#aboutUs" style="color: white; text-decoration: none;">ABOUT US</a>
				</div>
				<div class="col"  style="background-color:rgba(9, 64, 124, 0.94); color: white; padding-top:2vh; padding-bottom:2vh;">
				  <a href="#ourMedicines" style="color: white; text-decoration: none;">OUR MEDICINES</a>
				</div>
				<div class="col"  style="background-color:rgba(25, 144, 206, 0.92); color: white; padding-top:2vh; padding-bottom:2vh;">
				  <a href="#location" style="color: white; text-decoration: none;">OUR LOCATION</a>
				</div>
			  </div>
			</div>
		</center>
		
		
		<center>
			<div id = "aboutUs" class="container-fluid">
				<b><p style="font-family: Arial,Helvetica,sans-serif; font-size: 60px; margin-top: 10vh; color:#09407c;">ABOUT US</p></b>
				<div class="container-fluid" style="background-color:#09407c; width:1vw; height:2.5vh;">
					<p> &nbsp;</p>
				</div>
				<div class="container" style="margin-top:10vh; font-family: 'Raleway'; font-size: 20px; ">
					  <div class="row">
						<div class="col" style="border-right: 1px solid grey; color: gray; padding-right: 3vw;">
								<br><br>
							<p>TorioRx Pharmacy was founded by Analyn Torio and Rolly Torio, who
								wanted to give people the right medicine at an affordable price. </p>
							
								<br>
								
							<p>The family started first by franchising a pharmaceutical business from
								a close friend. After gathering enough information on how they could start their own
								pharmaceutical business, the family decided to put up TorioRx
								Pharmacy last March 08, 2022. </p>
							
						</div>
						<div class="col"  style="color: grey; font-family: 'Raleway'; padding-left:5vh;">
								<br><br><br><br>
							
							<p>TorioRx Pharmacy is strategically placed in places where other
								pharmacies are far from the location, allowing the business to
								provide people with the medicine they need without competition. </p>
								
								<br><br><br><br><br><br><br>
						</div>
					  </div>
				</div>
			</div>
		</center>
		
		<center>
			<div id = "ourMedicines" class="container-fluid background">
				<b><p style="font-family: Arial,Helvetica,sans-serif; font-size: 60px; color:white; z-index:1; padding-top: 10vh;">OUR MEDICINES</p></b>
				<div class="container-fluid" style="background-color:white; width:1vw; height:2.5vh;">
					<p> &nbsp;</p>
				</div>
				<div class="container container-fluid" style="padding-top: 10vh; color: white; font-family: Poppins;">
				  <div class="row">
					<div class="col" style="background-color: rgba(255, 255, 255,  0.2); margin-right: 15px; margin-bottom: 15px; padding: 40px;">
						<p style="font-size: 25px;"> Drugs for Abdominal & Stomach Pain</p>
							<br>
					   <p style="font-size: 17px;"> Drugs for relief of abdominal or stomach pain symptoms include: Algina, Diatabs, Flotera Tablet, Hydrite, Kremil-S Advance, Medicol, and Rexidol Forte.</p> 
					</div>
					<div class="col" style="background-color: rgba(255, 255, 255,  0.2); margin-bottom: 15px;  padding: 40px;">
						<p style="font-size: 25px;"> Drugs for Allergy Care</p> 
							<br>
						<p style="font-size: 17px;"> Drugs for relief of allergy symptoms include: Allerkid, Allerta Tablet, Alnix Plus Syrup, Alnix Syrup, Cetirizine, Loratadine, and <br> NasoClear.</p>
					</div>
	
				  </div>
				  <div class="row">
					<div class="col" style="background-color: rgba(255, 255, 255,  0.2); margin-right: 15px; margin-bottom: 15px; padding: 40px;">
						<p style="font-size: 25px;"> Drugs for Cough & Colds</p> 
							<br>
						<p style="font-size: 17px;"> Drugs for relief of cough or colds symptoms include: Alnix Plus Syrup, Decolgen Forte, Expel OD, Myracof Tablet, Neozep Forte, <br> No-Drowse Decolgen, and Solmux Advance.</p>
					</div>
					<div class="col" style="background-color: rgba(255, 255, 255,  0.2); margin-bottom: 15px; padding: 40px;">
						<p style="font-size: 25px;"> Drugs for Headache, Fever & Flu</p> 
							<br>
						<p style="font-size: 17px;"> Drugs for relief of migraine or headache symptoms include: Aspirin, Bioflu, Biogesic, Dolfenal, Ibuprofen, Medicol, and <br> Rexidol Forte.</p> 
					</div>
				  </div>
				  <div class="row">
					<div class="col" style="background-color: rgba(255, 255, 255,  0.2); margin-right: 15px; padding: 40px;">
						<p style="font-size: 25px;"> Drugs for Heart Disease</p> 
							<br>
						<p style="font-size: 17px;"> Modern heart drug therapy includes the following “big six” medications: ACE inhibitors, Aspirin, Statins, Beta-blockers, Clopidogrel, and Warfarin.</p> 
					</div>
					<div class="col" style="background-color: rgba(255, 255, 255,  0.2); padding: 40px;">
						<p style="font-size: 25px;"> Drugs for Muscle Pain</p> 
							<br>
						<p style="font-size: 17px;"> Drugs for relief of muscle pain symptoms include: Algina, Diatabs, Flotera Tablet, Hydrite, Kremil-S Advance, Medicol, and <br> Rexidol Forte.</p>
					</div>
				  </div>
				</div>
			</div>
		</center>
		
		<center>
			<div id = "location"  class="container-fluid" style="padding-bottom: 10vh;">
				<b><p style="font-family: Arial,Helvetica,sans-serif; font-size: 60px; color:#1990ce; z-index:1; padding-top: 10vh;">OUR LOCATION</p></b>
				<div class="container-fluid" style="background-color:#1990ce; width:1vw; height:2.5vh;">
					<p> &nbsp;</p>
				</div>
				<div class="container" style="margin-top:10vh; ">
					  <div class="row">
						<div class="col" style="border-right: 1px solid grey; padding-right: 3vw;">
								<br><br>
							<b><p style="color: #1990ce; font-size: 25px; font-family: 'Raleway';">Our Address</p></b>
							
								<br>
								
							<p style="color: #999999; font-family: 'Poppins'; font-size: 17px;">052 P. Burgos St, Brgy. Lunsad, Binangonan, 1940 Rizal</p>
								
							<p style="color: #999999; font-family: 'Poppins'; font-size: 17px;">TorioRx@gmail.com</p>
							
							<p style="color: #999999; font-family: 'Poppins'; font-size: 17px;">Contact: 0915 512 5563</p>
							
							<br><br>
						</div>
						<div class="col"  style="color: grey; font-family: 'Raleway'; padding-left:5vh;">
								<br><br>
							<b><p style="color: #1990ce; font-size: 25px; font-family: 'Raleway';">Opening Hours</p></b>
								
								<br><br>
							<p style="color: #999999; font-family: 'Poppins'; font-size: 17px;">Monday - Sunday: 8AM - 9PM</p>
							
							<p style="color: #999999; font-family: 'Poppins'; font-size: 17px;">Labour Day: Hours might differ</p>
							<br><br>
						</div>
							
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15445.32872877058!2d121.1166629!3d14.580138!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1ffc06b52e2658b!2sTorio%20Rx%20Pharmacy!5e0!3m2!1sen!2sph!4v1650863560833!5m2!1sen!2sph" width="600" height="450" style="border:0; margin-top: 10vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					  </div>
				</div>
			</div>
		</center>

		<!-- footer -->
		<?php include('includes/main/footer.php'); ?>
    </body>
</html>