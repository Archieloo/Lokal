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

<?php
	if(isset($_POST['add'])){
		if(isset($_SESSION["cart"])){
			$item_array_id = array_column($_SESSION["cart"], "product_id");	
			
			if(in_array($_POST["itemcode"], $item_array_id)){
				echo "<script>alert(\"Product is already in the cart\")</script>";
				
			}
			else{
				$count = count($_SESSION["cart"]);
				$item_array = array('product_id' => $_POST["itemcode"]);
				$_SESSION["cart"][$count] = $item_array;
				echo "<script>window.location = 'page_men_clothing.php'</script>";
				print_r($_SESSION["cart"]);
			}
		}
		else{
			$item_array = array('product_id' => $_POST["itemcode"]);
			$_SESSION["cart"][0] = $item_array;
			print_r($_SESSION["cart"]);
			echo "<script>window.location = 'page_men_clothing.php'</script>";
				
		}
	
			
	}
?>
	
	
		<div class="products1">
			<div class="container d-flex justify-content-center mt-50 mb-50">
				<div class="row">
					<!--<div class="col-md-4 mt-2"> -->
					<?php
                        $user = $_SESSION["username"];
                        $userid = $_SESSION["acc_no"];
                        $itemcode_array = array();
                        $username_array = array();

                        $sql = "SELECT a.order_id, b.account_no,  d.username, a.item_code, c.seller
                                FROM order_items a INNER JOIN orders b 
                                ON a.order_id = b.order_id
                                INNER JOIN item c ON a.item_code = c.item_code 
                                INNER JOIN accounts d 
                                ON b.account_no = d.account_no
                                WHERE seller = '$user';";

                        $result = mysqli_query($conn, $sql);

                        $i = 0;

                        while($row = mysqli_fetch_assoc($result)){
                            $itemcode_array[] = $row['item_code'];
                            $username_array[] = $row['username'];
                        }
                        
                      

                        foreach($itemcode_array as $id){
                            $sql2 = "SELECT * FROM item WHERE item_code = $id";
                            $result2 = mysqli_query($conn, $sql2);

                            while($row = mysqli_fetch_assoc($result2)){
                                    
                                    //product($row['item_name'], $row['category'], $row['item_price'], $row['item_img'], $row['item_code']);
                                    product($row['item_name'], $username_array[$i], $row['item_price'], $row['item_img'], $row['item_code']);
                                    $i++;
                            }
                        }
                    ?>
					<!-- </div> -->
				</div>
			</div>
		</div>
	
			
	     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	   
	   	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	
	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>