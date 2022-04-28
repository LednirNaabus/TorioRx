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

	</style>
    <body>
        <!-- navbar -->
        <?php include('includes/main/navbar.php'); ?>

        <img src="img/customers1.jpg" width="1600" height="660" style="border-bottom: 2px solid #09407c">
		
		<center>
			<div class="container" style="margin-top:-8.6vh; font-family: 'Cutive Mono'; font-size: 35px;">
			  <div class="row justify-content-md-center">
				<div class="col-5"  style="background-color:rgba(9, 64, 124, 0.94); color: white; padding-top:1vh; padding-bottom:1vh;">
				  <a href="#feedbacks" style="color: white; text-decoration: none;">CUSTOMER FEEDBACKS</a>
				</div>
			  </div>
			</div>
			
			<div id = "feedbacks" class="container-fluid">
				<div class="container-fluid" style="background-color:#09407c; width:1vw; height:2.5vh; margin-top:10vh;">
					<p> &nbsp;</p>
				</div>
				<div class="container-fluid list-group" style="margin-top:10vh; margin-bottom: 10vh;">
					 <a class="list-group-item list-group-item-action" aria-current="true">
						<div class="d-flex w-100 justify-content-between">
						  <h5 class="mb-1">Email</h5>
						  <small>Time/Date</small>
						</div>
						<p class="mb-1" >Some placeholder content in a paragraph.</p>
						<small>Name</small>
					  </a>
					  <a class="list-group-item list-group-item-action">
						<div class="d-flex w-100 justify-content-between">
						  <h5 class="mb-1">Email</h5>
						  <small class="text-muted">Time/Date</small>
						</div>
						<p class="mb-1">Some placeholder content in a paragraph.</p>
						<small class="text-muted">Name</small>
					  </a>
					  <a class="list-group-item list-group-item-action">
						<div class="d-flex w-100 justify-content-between">
						  <h5 class="mb-1">Email</h5>
						  <small class="text-muted">Time/Date</small>
						</div>
						<p class="mb-1">Some placeholder content in a paragraph.</p>
						<small class="text-muted">Name</small>
				  </a>
				</div>
			</div>
			
			
		</center>
            <!-- footer -->
            <?php include('includes/main/footer.php'); ?>
    </body>
</html>