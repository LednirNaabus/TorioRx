<html>
    <head>
        <title>TorioRx Pharmacy</title>

        <?php include("../Admin/includes/main/header.php"); ?>

        <?php include("../Admin/includes/main/registerlogin_style.php"); ?>

    </head>

    <body style="font-family: Poppins;">

    <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="register.php" method="POST">
					<label for="chk" aria-hidden="true">Register</label>
					<input type="text" name="username" placeholder="Username" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button type="submit">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="login.php" method="POST">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<button>Sign in</button>
				</form>
			</div>
	</div>

    </body>
</html>
