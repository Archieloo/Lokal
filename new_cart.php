<?php
    include 'database_connect.php';
    include 'navbar.php';
    include 'homepage-functions.php';
    //include 'image_slider.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<link rel="stylesheet" type="text/css" href="try3.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
</head>
<body>

   <div class="CartContainer" style="padding: 30px; margin: auto; margin-top: 20px">
   	   <div class="Header">
   	   	<h3 class="Heading">Shopping Cart</h3>
   	    </div>
    <?php

        $count = 0;
        $total = 0;
		$arr = $_SESSION["cart"];

		$product_id = array_column($_SESSION['cart'], 'product_id');
        
        //$qty_array = array('qty' => $_SESSION["qty"]);
        //$qty = array($_SESSION["qty"]);
        $qty = $_SESSION["qty"];

        $i=0;
		foreach($product_id as $id){
			$num = $id;
			$sql = "SELECT * FROM item WHERE item_code = $id";
            
			$result = mysqli_query($conn, $sql);
           
			while($row = mysqli_fetch_assoc($result)){
               
					cart_product($row['item_name'], $row['category'], $row['item_price'] * $qty[$i]['qty'], $row['item_img'], $qty[$i]['qty'], $row['item_code']);
                        $counts = $counts + 1;
                        $total = $total + ($row['item_price'] * $qty[$i]['qty']);
                        $i++;
            }
                        $_SESSION["total"] = $total;
                
 
                        
		} 

	?>
    
   	
   	 <div class="checkout" style = "margin-top: 50px; margin-bottom: 20px;" >
   	 <div class="total">
   	 	<div>
   	 		<div class="Subtotal" >Sub-Total</div>
   	 		<div class="items"><?php echo "$counts items" ?></div>
   	 	</div>
   	 	<div class="total-amount"> <?php echo "₱$total"; ?></div>
   	 </div>
   	 <div class=but> 
        <form class="form3" method="post" action="checkout.php"> 
        <button class="button" type = "submit" name="checkout">Checkout</button>
        </form>
        </div>
	
   </div>

   <?php
       
   ?>

</body>
</html>