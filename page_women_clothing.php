<?php
	include 'database_connect.php';
	include 'navbar.php';
	include 'homepage-functions.php';
	//include 'image_slider.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<!-- <link rel="stylesheet" href="categories.css"> -->
    <link rel="stylesheet" href="second.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="shortcut icon" href="favicon.ico">
    
	 <!----->
	 <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	   
	   
	  <!-- Fontawesome -->
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>


<body>
<img src="BANNER-PHOTOS/lokal.png" width=100%>	
<?php
    addtocart("page_women_clothing");
?>


    <div class="products1">
			<div class="container d-flex justify-content-center mt-50 mb-50">
				<div class="row">
					<!--<div class="col-md-4 mt-2"> -->
					
						<?php
                        page_category(women_clothing);
						/*$sql = "SELECT * FROM item WHERE category = men_clothing;";

						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);
                        $category = "Men's Clothing";
						if($resultCheck > 0){
							while($row = mysqli_fetch_assoc($result))
								product($row['item_name'], $row['item_price'], $row['item_img'], $row['item_code'], $row['category']);
                               // product($row['item_name'], $category, $row['item_price'], $row['item_img'], $row['item_code']);
						}*/	
                        ?>
					
					<!-- </div> -->
				</div>
			</div>
		</div> 

        
	
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	   	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	
	
</body>
</html>