<?php
	include 'database_connect.php';
	include 'navbar.php';
	include 'homepage-functions.php';
	//include 'image_slider.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>LOKAL</title>
      <link rel="stylesheet" href="categories.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="shortcut icon" href="favicon.ico">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	 <!----->
	 <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
  <style>
  body{

  //background-image: url('BANNER-PHOTOS/lokal.png');
   background-size: 100%;
  background-repeat: no-repeat;
background-color: #e9dfc1;

}
  </style>
	  <div class= "container">
	<div class="container d-flex justify-content-center mt-50 mb-50 ms-10">
	<br>
	<!-- Card ---------------------->
	<style>

	.card-body button {
  border: none;
  outline: 0;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 15px;
}

.card-body button:hover {
  opacity: 0.7;
}
  </style>
<img src="BANNER-PHOTOS/lokal.png" heaight = 50% width =100%>	
<body>

<?php
    addtocart("womens");
?>

    <div class="products1">
			<div class="container d-flex justify-content-center mt-50 mb-50">
				<div class="row">
					<!--<div class="col-md-4 mt-2"> -->
					
						<?php
                        page_category(women_clothing);
                        ?>
					
					<!-- </div> -->
				</div>
			</div>
		</div> 

        
	
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	   	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	
    
</body>
</html>