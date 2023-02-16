<?php
	include 'database_connect.php';
	include 'navbar.php';
	include 'homepage-functions.php';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="second.css">
	 <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	   
	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
body{
  background-image: url(uploads/login_background.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;	}

</style>
	
<body>	
	<div class="container3" style="margin-left: 300px; margin-right: 300px;">
		<h2 style="text-align: center; margin-top: 50px; font-weight: bold;">Sign Up</h2>			  
		<!-- <form method = "post" action="http://localhost/andeng/latest/latest/sign-up-check.php"> -->
		
		<form method = "post" action="sign-up-check.php">
			<div class="row">
				<div class="col">
					<div class="form-group my-2">
						<label for="fname_input">First Name</label>
						<input type="text" class="form-control" id="fname_input" name="fname" placeholder="First Name" required>		
					</div>
				</div>
				<div class="col">
					<div class="form-group my-2">
						<label for="lname_input">Last Name</label>
						<input type="text" class="form-control" id="lname_input" name="lname" placeholder="Last Name" required>
					</div>
				</div>					
			</div>
			
			<div class="row">
				<div class="col">
					<div class="form-group my-2">
						<label for="email_input">Email Address</label>
						<input type="text" class="form-control" id="email_input" name="email" placeholder="Email" required>	
					</div>
				</div>
				<div class="col">
					<div class="form-group my-2">
						<label for="phonenum_input">Phone Number</label>
						<input type="text" class="form-control" id="phonenum_input" name="phone_num" placeholder="Phone Number" minlength="11" maxlength = "13" required>	
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="email_input">Enter Username</label>
						<input type="text" class="form-control" id="username_input" name="username" placeholder="Username" minlength="4" maxlength = "16" required>		
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="pass_input">Enter Password</label>
						<input type="password" class="validate form-control" id="password_input" name = "password" placeholder="Password" minlength="8" maxlength = "16" required>
						
					</div>
				</div>	
				
				<!-- new pass -->
				<div class="col">
					<div class="form-group">
						<label for="pass_input">Re-Enter Password</label>
						<input type="password" class="validate form-control" id="password_input" name = "password2" placeholder="Password" required>
						
					</div>
				</div>		
			</div>
			
			<div class="row">
				<div class="col">
					<div class="form-group my-2">
						<label for="address_input">Complete Delivery Address</label>
						<input type="text" class="form-control" id="address_input" name="address" placeholder="Address" required>	
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary" name="signup"  style="background-color: 	#6F4E37;  border: 1px 	#6F4E37;">Sign Up</button>
		
		</form>
	</div>
	
		
	
		
	     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	   
	   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	
		<script>
			var password = document.getElementById('pwd'), confirm_password = document.getElementById('cpwd');
				function validatePassword() {
					if (password.value != confirm_password.value) {
						confirm_password.setCustomValidity('Passwords Don\'t Match');
					} else {
						confirm_password.setCustomValidity('');
					}
				}
				password.onchange = validatePassword;
				confirm_password.onkeyup = validatePassword;
		</script>
</body>
</html>