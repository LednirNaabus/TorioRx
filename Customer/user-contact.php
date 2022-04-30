<!DOCTYPE html>
<html>
    <head>
        <title>User Dashboard</title>
        <?php include('includes/main/header.php'); ?>

		<?php
			session_start();
		?>
		
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			  height:48vh;
			  background-color: rgba(9, 64, 123,  0.7);
			  background-image: url(img/call.jpg); 
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
		<div id = "ourMedicines" class="container-fluid background">
				<b><p style="font-family: Arial,Helvetica,sans-serif; font-size: 60px; color:white; z-index:1; padding-top: 10vh;">CONTACT US</p></b>
				<div class="container-fluid" style="background-color:white; width:1vw; height:2.5vh;">
					<p> &nbsp;</p>
				</div>
					
				<p style="font-family: 'Poppins';  color: white; margin-top: 8vh; font-size: 20px;">Whether you have a question, complaints, or anything else, our team is ready to respond.</p>
		</div>
		</center>
		<div class="container" style="margin-top:10vh; margin-bottom:10vh; ">
					  <div class="row">
						<div class="col" >
								<br><br><br>
							
							<i class="fa fa-phone" style="font-size:25px; color:#1990ce; display:flex;">
								<b>
									<p style="color: #1990ce; font-size: 25px; font-family: 'Poppins';">&nbsp;&nbsp;For Inquiries:</p>
								</b>
							</i>
								<br>
								
							<p style="color: #999999; font-family: 'Poppins'; font-size: 17px;">Location: 052 P. Burgos St, Brgy. Lunsad, Binangonan, 1940 Rizal</p>
								
							<p style="color: #999999; font-family: 'Poppins'; font-size: 17px;">Email: TorioRx@gmail.com</p>
							
							<p style="color: #999999; font-family: 'Poppins'; font-size: 17px;">Contact: 0915 512 5563</p>
							
							<br><br>
							
							<i class="fa fa-clock-o" style="font-size:25px; color:#1990ce; display:flex;">
								<b>
									<p style="color: #1990ce; font-size: 25px; font-family: 'Poppins';">&nbsp;&nbsp;Opening Hours</p>
								</b>
							</i>
								<br>
							<p style="color: #999999; font-family: 'Poppins'; font-size: 17px;">Monday - Sunday: 8AM - 9PM</p>
							
							<p style="color: #999999; font-family: 'Poppins'; font-size: 17px;">Labour Day: Hours might differ</p>
						</div>
					
						<div class="col" style="color: grey; font-family: 'Raleway'; padding-left:5vh; border: ">
							<center>
								<form style="box-shadow: 0 0 15px; padding: 50px; border-radius: 5px;" action="post_feedback.php" method="post">
								  <b><p style="color: #09407c; font-size: 45px; font-family: 'Poppins';">Get in touch with us!</p></b>
								
								<br>

									<div class="form-floating" style="font-family: 'Poppins'; font-size: 15px;width:25vw;">
									  <input type="name" class="form-control" id="floatingInput" name="customer_name" placeholder="Name:" >
									  <label for="floatingInput">Name: </label>
									</div>
								<br>
								
									<div class="form-floating" style="font-family: 'Poppins'; font-size: 15px;width:25vw;">
									  <input type="email" class="form-control" id="floatingInput" name="customer_email" placeholder="name@example.com">
									  <label for="floatingInput">Email Address:</label>
									</div>
								
								<br>								
									<div class="form-floating" style="font-family: 'Poppins'; font-size: 15px;width:25vw;">
									  <textarea class="form-control" placeholder="Leave a comment here" name="feedback_details" id="floatingTextarea2" style="height: 100px"></textarea>
									  <label for="floatingTextarea2">Message: </label>
									</div>
								<br>
								  <button type="submit" class="btn btn-primary" style="font-family: 'Poppins'; font-size: 18px;width:25vw; color:white; background-color: #09407c;">Send Message</button>
								 
								</form>
							</center>	
						</div>
						
				
					  </div>
				</div>
		
			<!-- footer -->
			<?php include('includes/main/footer.php'); ?>
    </body>
				
</html>