<?php
    include 'database_connect.php';
    include 'navbar.php';
    include 'homepage-functions.php';
    //include 'image_slider.php';
?>

<?php

    if(empty($_SESSION["cart"])){
        echo "<script>alert(\"Cart is empty!\")</script>";
		echo "<script>window.location = \"homepage.php\"</script>";
    }
    else{

    $qty = $_SESSION["qty"];

    $userid = $_SESSION["acc_no"];
    $total_purchase = $_SESSION["total"];
    $user = $_SESSION["username"];
    $date = date('Y-m-d');
    $sql2 = "INSERT INTO orders (account_no, order_date, order_total) VALUES('$userid', '$date', '$total_purchase');";
    mysqli_query($conn, $sql2);

     $last_id = mysqli_insert_id($conn);
    $i = 0;
    $product_id = array_column($_SESSION['cart'], 'product_id');
    foreach($product_id as $id){
        $sql = "SELECT * FROM item WHERE item_code = $id";
        $result = mysqli_query($conn, $sql);
        $date = date('Y-m-d');
        while($row = mysqli_fetch_assoc($result)){
                $icode = $row['item_code'];
                $sql3 = "INSERT INTO order_items (order_id, item_code, qty) VALUES('$last_id', '$icode', '".$qty[$i]['qty']."');";
                //$sql3 = "INSERT INTO order_items (order_id, item_code, qty) VALUES('$last_id', '$row['item_code']', 1);";
                mysqli_query($conn, $sql3);   
                echo "<script>alert(\"Checkout Successful!\")</script>";
				echo "<script>window.location = \"homepage.php\"</script>";
                $i++;
            }
    }
    }
?>