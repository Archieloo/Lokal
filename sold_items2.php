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
body{ background-image: url(uploads/login_background.jpg);
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
<body>
 
<body>
<div class= "container">
        <header>
        </header>

<main style="height: 90%">
    <br><h1 style="font-weight:bold">Sold Items</h1>
<hr>

    <?php
        $user = $_SESSION["username"];
        $userid = $_SESSION["acc_no"];
        $itemcode_array = array();
        $username_array = array();

        $sql = "SELECT a.order_id, b.account_no,  d.username, a.item_code, order_date, phone_num, address, c.seller
                 FROM order_items a INNER JOIN orders b ON a.order_id = b.order_id
                 INNER JOIN item c ON a.item_code = c.item_code INNER JOIN accounts d ON b.account_no = d.account_no
                 INNER JOIN account_details e ON d.account_no =  e.account_no 
                  WHERE seller = '$user';";

         $result = mysqli_query($conn, $sql);

        $i = 0;

        while($row = mysqli_fetch_assoc($result)){
             $itemcode_array[] = $row['item_code'];
             $username_array[] = $row['username'];
             $date_array[] = $row['order_date'];
             $contact_array[] = $row['phone_num'];
             $address_array[] = $row['address'];
         }
      
        foreach($itemcode_array as $id){
            $sql2 = "SELECT * FROM item WHERE item_code = $id 
                    GROUP BY '$date_array'";
            $result2 = mysqli_query($conn, $sql2);

            while($row = mysqli_fetch_assoc($result2)){                  
                sold_items($row['item_name'], $row['category'], $row['item_img'], $date_array[$i], $username_array[$i], $contact_array[$i], $address_array[$i], $row['item_price'],  $row['item_code']);
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