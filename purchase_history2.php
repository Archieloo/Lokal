<?php
	include 'database_connect.php';
	include 'navbar.php';
	include 'homepage-functions.php';
	//include 'image_slider.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sold Items</title>
	<link rel="stylesheet" type="text/css" href="purchase2.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="shortcut icon" href="favicon.ico">
	
</head>
<style>
body{
 background-image: url(uploads/login_background.jpg);
background-repeat: no-repeat;
 background-attachment: fixed;  
  background-size: cover;}

.container{
            margin-left: 300px;
            margin-right: 150px;
        }
         main{
            background: #d7c1ab;
            opacity: 0.9;}
            .grid-container {
                background: #d7c1ab;}
                .grid-container > div {
            background: #d7c1ab;}

        
</style>
 
<body style = "margin: 0px">
<div class= "container">
        <header>
        </header>

<main style="height: 90% ;">
    <br><h1 style="font-weight:bold">Items Bought</h1>
<hr>

    <?php
        $user = $_SESSION["username"];
        $userid = $_SESSION["acc_no"];
        $itemcode_array = array();
        $username_array = array();

        $sql = "SELECT a.item_code, qty, order_date, seller 
                FROM order_items a INNER JOIN orders b ON a.order_id = b.order_id 
                INNER JOIN item c ON a.item_code = c.item_code WHERE account_no = '$userid'";

         $result = mysqli_query($conn, $sql);

        $i = 0;

        while($row = mysqli_fetch_assoc($result)){
             $itemcode_array[] = $row['item_code'];
             $date_array[] = $row['order_date'];
             $username_array[] = $row['seller'];
             $qty_array[] = $row['qty'];
         }
                        
        foreach($itemcode_array as $id){
            $sql2 = "SELECT * FROM item WHERE item_code = $id";
            $result2 = mysqli_query($conn, $sql2);

            while($row = mysqli_fetch_assoc($result2)){                  
                purchased_items($row['item_name'], $row['category'], $row['item_img'], $date_array[$i], $username_array[$i], $qty_array[$i], $row['item_price'] * $qty_array[$i],  $row['item_code']);
                $i++;
            }
        }
    ?>      
    </div>
        </main>
        <footer>
        </footer>
    </div>
</body>
</html>