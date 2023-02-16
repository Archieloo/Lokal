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
<link rel="stylesheet" href="fourth.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="shortcut icon" href="favicon.ico">
    
	 <!----->
	 <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	   
	   
	  <!-- Fontawesome -->
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>	
	<div class="container6" style="margin-left = 150px; margin-right = 150px">
		
				<div class="row">
					<?php
						$arr = $_SESSION["cart"];
						$product_id = array_column($_SESSION['cart'], 'product_id');
						$category = "Men's Clothing";
						foreach($product_id as $id){
							$num = $id;

							$sql = "SELECT * FROM item WHERE item_code = $id";

							$result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_assoc($result))
										product($row['item_name'], $category, $row['item_price'], $row['item_img'], $row['item_code']);
						}
					?>
			</div>
		
	</div>
	
</body>
</html>