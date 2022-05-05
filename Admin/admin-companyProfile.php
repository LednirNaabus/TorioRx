<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
        <?php include('includes/main/header.php'); ?>
		
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
	<style>
		body 
			{
				overflow-x:hidden;
				font-family: 'Poppins';
			}
		
		.background {
			  position:relative;
			  background-color: rgba(9, 64, 123,  0.75);
			  background-image: url(img/pharmacy2.png); 
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

        <img src="img/pharmacy.jpeg" width="1600" height="660" style="border-bottom: 2px solid #09407c">
		
		<center>
			<div class="container" style="margin-top:-10.6vh; font-family: 'Cutive Mono'; font-size: 35px; ">
			  <div class="row">
				<div class="col"  style="background-color:rgba(9, 64, 124, 0.94); color: white; padding-top:2vh; padding-bottom:2vh;">
				  <a href="#aboutUs" style="color: white; text-decoration: none;">ABOUT US</a>
				</div>
				<div class="col"  style="background-color:rgba(25, 144, 206, 0.92); color: white; padding-top:2vh; padding-bottom:2vh;">
				  <a href="#contactUs" style="color: white; text-decoration: none;">CONTACT US</a>
				</div>
			  </div>
			</div>
			
			<div id = "aboutUs" class="container-fluid background" style = "padding-bottom:15vh; padding-top:10vh;">
				<b><p style="font-family: Arial,Helvetica,sans-serif; font-size: 60px; color:white">ABOUT US</p></b>
				<div class="container-fluid" style="background-color:white; width:1vw; height:2.5vh;">
					<p> &nbsp;</p>
				</div>
				<div class="container" style="margin-top:5vh; font-family: 'Poppins'; font-size: 19px; width: 65vw; ">
					  <div class="row">
						<div class="col" style="color: white; padding-right: 3vw;">
								<br>
							<p>TorioRx Pharmacy was founded by Analyn Torio and Rolly Torio, who
								wanted to give people the right medicine at an affordable price. 
								
								<br><br>
							
								The family started first by franchising a pharmaceutical business from
								a close friend. After gathering enough information on how they could start their own
								pharmaceutical business, the family decided to put up TorioRx
								Pharmacy last March 08, 2022. 
								
								<br><br>
							
								TorioRx Pharmacy is strategically placed in places where other
								pharmacies are far from the location, allowing the business to
								provide people with the medicine they need without competition. </p>
						</div>
					  </div>
				</div>
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-top:10vh;">
					<div class="carousel-inner">
						<div class="carousel-item active">
						<img src="img/torio.jpg" class="d-block" alt="..." height="500px" width="50%">
						</div>
						<div class="carousel-item">
						<img src="img/torio2.jpg" class="d-block" alt="..." height="500px" width="50%">
						</div>
						<div class="carousel-item">
						<img src="img/torio3.jpg" class="d-block" alt="..." height="500px" width="50%">
						</div>
					</div>
					 
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="margin-left:20vw;">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="margin-right:20vw;z-index:2;">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
				<div id="contactUs"class="container-fluid" style="padding-bottom: 10vh;">
				<b><p style="font-family: Arial,Helvetica,sans-serif; font-size: 60px; color:#1990ce; z-index:1; padding-top: 10vh;">CONTACT US</p></b>
				<!-- <button type="button" style="float: center; " class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal1">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
						  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
						  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
					</svg>
				</button> -->
				<div class="container" style="margin-top:10vh; ">
					  <div class="row">
						<div class="col" style="border-right: 1px solid grey; padding-right: 3vw;">
								<br><br>
							<b><p style="color: #1990ce; font-size: 25px; font-family: 'Raleway';">Our Address</p></b>
							
								<br>
								
							<p style="color: #6f6767; font-family: 'Poppins'; font-size: 17px;">052 P. Burgos St, Brgy. Lunsad, Binangonan, 1940 Rizal</p>
								
							<p style="color: #6f6767; font-family: 'Poppins'; font-size: 17px;">TorioRx@gmail.com</p>
							
							<p style="color: #6f6767; font-family: 'Poppins'; font-size: 17px;">Contact: 0915 512 5563</p>
							
							<br><br>
						</div>
						<div class="col"  style="color: grey; font-family: 'Raleway'; padding-left:5vh;">
								<br><br>
							<b><p style="color: #1990ce; font-size: 25px; font-family: 'Raleway';">Opening Hours</p></b>
								
								<br><br>
							<p style="color: #6f6767; font-family: 'Poppins'; font-size: 17px;">Monday - Sunday: 8AM - 9PM</p>
							
							<p style="color: #6f6767; font-family: 'Poppins'; font-size: 17px;">Labour Day: Hours might differ</p>
							<br><br>
						</div>
							
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15445.32872877058!2d121.1166629!3d14.580138!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1ffc06b52e2658b!2sTorio%20Rx%20Pharmacy!5e0!3m2!1sen!2sph!4v1650863560833!5m2!1sen!2sph" width="600" height="450" style="border:0; margin-top: 10vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					  </div>
					</div>
				</div>
				
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit Announcement</h4>
						</div>
						<div class="modal-body">
						<form>
						<div class="form-group">
							<label for="exampleFormControlInput1" >Announcement Title</label>
							<input style="margin-left:30px; width:90%; margin-top:2vh;" type="text" class="form-control" id="exampleFormControlInput1">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" style="margin-top:3vh;">Announcement Content</label>
							<textarea class="form-control" id="floatingTextarea2" style="width:90%; margin-left:2vw;"></textarea>
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" style="margin-top:3vh;">Announcement Time/Date</label>
							<input style="margin-left:30px; width:90%; margin-top:2vh;" type="text" class="form-control" id="exampleFormControlInput1">
						</div>
						</form>
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-default" data-bs-dismiss="modal">Discard</button>
						<button type="button" class="btn btn-default">Save</button>
						</div>
					</div>
					</div>
				</div>
				
				<div class="modal fade" id="myModal1" role="dialog">
					<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
						<button type="button" class="close" data-bs-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit Pharmacy Details</h4>
						</div>
						<div class="modal-body">
						<form>
						<div class="form-group">
							<label for="exampleFormControlInput1" >Pharmacy Address</label>
							<input style="margin-left:30px; width:90%; margin-top:2vh;" type="text" class="form-control" id="exampleFormControlInput1">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" style="margin-top:3vh;">Pharmacy Email</label>
							<input style="margin-left:30px; width:90%; margin-top:2vh;" type="text" class="form-control" id="exampleFormControlInput1">
						</div>
						<div class="form-group">
							<label for="exampleFormControlInput1" style="margin-top:3vh;">Pharmacy Contact Number</label>
							<input style="margin-left:30px; width:90%; margin-top:2vh;" type="text" class="form-control" id="exampleFormControlInput1">
						</div>
						</form>
						</div>
						<div class="modal-footer">
						<button type="button" class="btn btn-default" data-bs-dismiss="modal">Discard</button>
						<button type="button" class="btn btn-default">Save</button>
						</div>
					</div>
					</div>
				</div>
		</center>
            <!-- footer -->
            <?php include('includes/main/footer.php'); ?>
    </body>
</html>