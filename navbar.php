<?php
	session_start();
	include 'database_connect.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LOKAL</title>
<link rel="stylesheet" href="second.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="shortcut icon" href="favicon.ico">
    
	 <!----->
	 <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	   
	   
	  <!-- Fontawesome -->
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
.cart{
     text-align: right;
 position: absolute;
 right: 220px;
 
}

.user{
    text-align: right;
 position: absolute;
 right: 100px;
  
}
</style>

<body>
	<nav>
         <div class="menu-icon">
            <span class="fas fa-bars"></span>
         </div>
         <div class="logo">
            LOKAL
         </div>
         <div class="nav-items">
            <li class="active"><a href="homepage.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact_new.php">Contact</a></li>
         
			 
       <!--  </div>
         <div class="search-icon">
            <span class="fas fa-search"></span>
         </div>
         <div class="cancel-icon">
            <span class="fas fa-times"></span>
         </div>
         <form action="#" class="me-4">
            <input type="search" class="search-data" placeholder="Search" required>
            <button type="submit" class="fas fa-search"></button>
         </form> -->
		
		<!-- ONLY SHOW CART IF THERE IS A LOGGED IN ACC -->
		
		
		<div class="cart" align="right">
			<?php
				if(!empty($_SESSION["username"])){
				
					if(isset($_SESSION["cart"])){
						$count = count($_SESSION["cart"]);
						
						echo 
						"<a href=\"new_cart.php\" class=\"nav-item nav-link active\" style=\"\">
							  <h5 style=\"color: #796a53\">
								<i class=\"fa-solid fa-cart-shopping\"></i>Cart
							<span id=\"cart_count\" class=\"text-warning bg-light\" style=\"padding: 3px 8px; border-radius: 30px; width: 20px\">$count</span>
							  </h5>
						  </a>" ;	
					
					}
					else{
						echo 
						"<a href=\"new_cart.php\" class=\"nav-item nav-link active\" style=\"border-radius: 30px;\">
							  <h5 style=\"color: #796a53\">
								<i class=\"fa-solid fa-cart-shopping\"></i>Cart
							<span id=\"cart_count\" class=\"text-warning bg-light\" style=\"\">0</span>
							  </h5>
						  </a>" ;
					}
							
				}
			  ?>
		</div>
		
		  <!-- <a href="http://localhost/andeng/latest/latest/login.php" class="nav-item nav-link active"> -->
			  <h5 class="user me-0" align="right">
				  
				  <?php 
				  	if(empty($_SESSION["username"])){
						echo "<a href=\"login2.php\" class=\"nav-item nav-link active\">";
						echo "<i class=\"fa-solid fa-user\"></i>User";
					}
				  	elseif(!empty($_SESSION["username"])){ 
						$user = $_SESSION["username"];
						echo "<div class=\"menu-icon\" >
								<span class=\"fas fa-bars\" align=\"right\"></span>
							 </div>
							 
							 <div class=\"nav-items\" style=\"\">
							 <div class=\"dropdown\" style=\"\">
								  <button  style=\"\" class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
									$user
								  </button>
								  <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
                                    <li><a class=\"dropdown-item\" href=\"seller_page2.php\">Sell an Item</a></li>
									<li><a class=\"dropdown-item\" href=\"change_pass.php\">Change Password</a></li>
                                    <li><a class=\"dropdown-item\" href=\"purchase_history2.php\">Purchase History</a></li>
                                    <li><a class=\"dropdown-item\" href=\"sold_items2.php\">Sold Items</a></li>
									<li>
										<form action=\"\" method=\"post\" style=\"background-color: white;\">
										<button class=\"btn \" name=\"logout\">Logout</button>
										</form>
									</li>
								  </ul>
								</div>
								 </div>";
						
					 }
				  ?>
			  </h5>
		  </a>

		  
      </nav>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	   
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

	
	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>