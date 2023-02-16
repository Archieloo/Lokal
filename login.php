<?php
	
	include 'database_connect.php';
    include 'homepage-functions.php';
    include 'navbar.php';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log in</title>
	<link rel="stylesheet" href="second.css">
	 <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	   
	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
    body{
        background: #e9dfc1;
    /* background-image: url(images/bg1.jpg);*/}

    label{
        font-size: 16px;
         margin-right: 50px;
    }
    input{
        margin-right: 50px;
    }
</style>
<body>
	
<div
	<div class="container4" >
    <br>
    <br>
		<h2 style="text-align: center; margin-top: 50px; font-weight: bold;">Sign In</h2>
		<form method="post" action="login-check.php" style="margin: 0 500px;">
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="username_input">Enter Username</label>
						<input type="text" class="form-control" id="username_input" name="username" placeholder="Username">		
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="pass_input">Enter Password</label>
						<input type="password" class="form-control" id="password_input" name="password" placeholder="Password">
					</div>
				</div>					
			</div>
			<button style="margin-top: 20px; background-color: 	#6F4E37;  border: 1px 	#6F4E37;"type="submit" class="btn btn-primary">Login</button>
			<br>
			<br>
			<p>Don't have an account yet? <a href="sign-up.php">Make one here!</a></p>
		</form>
				
	</div>
	     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	   
	   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>