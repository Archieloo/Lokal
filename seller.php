<?php
	include 'database_connect.php';
	include 'navbar.php';
	include 'homepage-functions.php';
	include 'image_slider.php';

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
	
<body>
	
	 
	
	<div class="container3">
		<h2>Sign Up</h2>			  
		<form method = "post" action="seller-submit.php">
			<div class="row">
				<div class="col">
					<div class="form-group my-2">
						<label for="fname_input">Item Name</label>
						<input type="text" class="form-control" id="fname_input" name="item_name" placeholder="First Name" required>		
					</div>
				</div>
				<div class="col">
					<div class="form-group my-2">
						<label for="lname_input">Item Price</label>
						<input type="text" class="form-control" id="lname_input" name="item_price" placeholder="Last Name" required>
					</div>
				</div>					
			</div>
			
			<div class="row">
				<div class="col">
					<div class="form-group my-2">
						<label for="email_input">Item Image</label>
						<input type="text" class="form-control" id="email_input" name="item_img" placeholder="Email" required>	
					</div>
				</div>
				
			</div>

			<div class="row">
				<div class="col">
					<div class="form-group my-2">
						<label for="email_input">Category</label>
						<input type="text" class="form-control" id="email_input" name="category" placeholder="Email" required>	
					</div>
				</div>
				
			</div>
			
			<button type="submit" class="btn btn-primary" name="signup">Sell</button>
		</form>
	</div>
	

	
	
	 <script>
         const menuBtn = document.querySelector(".menu-icon span");
         const searchBtn = document.querySelector(".search-icon");
         const cancelBtn = document.querySelector(".cancel-icon");
         const items = document.querySelector(".nav-items");
         const form = document.querySelector("form");
         menuBtn.onclick = ()=>{
           items.classList.add("active");
           menuBtn.classList.add("hide");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
         cancelBtn.onclick = ()=>{
           items.classList.remove("active");
           menuBtn.classList.remove("hide");
           searchBtn.classList.remove("hide");
           cancelBtn.classList.remove("show");
           form.classList.remove("active");
           cancelBtn.style.color = "#ff3d00";
         }
         searchBtn.onclick = ()=>{
           form.classList.add("active");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
		 
      </script>
	     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	   
	   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>