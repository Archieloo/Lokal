<?php
	include 'database_connect.php';
	include 'navbar.php';
	include 'homepage-functions.php';
	include 'image_slider.php';
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>LOKAL</title>
      <link rel="stylesheet" href="second1.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="shortcut icon" href="favicon.ico">
    
	 <!----->
	 <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	   
	   
	  <!-- Fontawesome -->
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   </head>
   <body>
      
	 <br>
	<br>
	<br>
	<div class="container d-flex justify-content-center mt-50 mb-50 ms-10">
		<div class="categories">
			<h2 class="header2">CATEGORIES</h2>
			<br>
			<div class="row">
				<div class="col">
					<div class="card shadow">
                        <div>
						<a href="page_men_clothing.php">
                            <img src="CATEGORIES\men damit.jpg" alt="Image1" class="img-fluid card-img-top" style="height: 250px">
							</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Men's Clothing</h5>                                                          
                        </div>
                    </div>
				</div>
				
				<div class="col">
					<div class="card shadow">
                        <div>
						<a href="page_women_clothing.php">
                            <img src="CATEGORIES\baba_damit.jpg" alt="Image1" class="img-fluid card-img-top" style="height: 250px">
							</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Women's Clothing</h5>                                                          
                        </div>
                    </div>
				</div>
				
				<div class="col">
					<div class="card shadow">
                        <div>
						<a href="page_footwear.php">
                            <img src="CATEGORIES\shoes.png" alt="Image1" class="img-fluid card-img-top" style="height: 250px">
							</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Footwear</h5>                                                          
                        </div>
                    </div>
				</div>
				
				<div class="col">
					<div class="card shadow">
                        <div>
						<a href="page_gadgets.php">
                            <img src="CATEGORIES\gadgets.png" alt="Image1" class="img-fluid card-img-top" style="height: 250px">
							</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gadgets</h5>                                                          
                        </div>
                    </div>
				</div>
				
				<div class="col">
					<div class="card shadow">
                        <div>
						<a href="page_cosmetics.php">
                            <img src="CATEGORIES\makeup.png" alt="Image1" class="img-fluid card-img-top" style="height: 270px">
							</a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Cosmetics</h5>                                                          
                        </div>
                    </div>
				</div>
			</div>
		</div>
		</div>
	
	  <div class="container d-flex justify-content-center mt-50 mb-50 ms-10">
	  <div class="ads">	
			<h2 class="header2">HIGHLIGHTS</h2>
			<?php
                 addtocart("homepage");
            ?>
			<div class="row">
            <?php
				 $sql = "SELECT * FROM highlights";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);
						if($resultCheck > 0){
							while($row = mysqli_fetch_assoc($result))
								product($row['item_name'], $row['category'], $row['item_price'], $row['item_img'], $row['item_code']);
                        }
			?>
			</div>
		<!--</div>-->
</div>

</div>
<br>
<br>
<br>
<p style="text-align: center"> Disclaimer: Ads shown are sponsored. </p>
<br>
<br>
<br>
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