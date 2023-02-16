<!-- Log-out function -->
<?php
	if(isset($_POST["logout"])){
		//header("Refresh:0; url=http://localhost/ANDENG/LATEST/LATEST/homepage.php");
		session_destroy();
		echo "<script>window.location = \"homepage.php\"</script>";
	}
?>

<!-- Add products function -->
<?php
	function product($prodname, $category, $price, $item_img, $item_code){
		$element = "
			<div class=\"products col-md-4 mt-2\">
				<form action=\"\" method=\"post\">
					<div class=\"card\">
						<div class=\"card-body\">
							<div class=\" images card-img-actions\" > <img src=$item_img class=\"card-img img-fluid\" style=\"height: 400px;\" width=\"96\" height=\"350\" alt=\"img\"> </div>
						</div>
						<div class=\"card-body bg-light text-center\">
							<div class=\"mb-2\">
								<h6 class=\"font-weight-semibold mb-2\">$prodname</h6> <a href=\"page_$category.php\" class=\"text-muted\" data-abc=\"true\">$category</a>
							</div>
                            
							<h3 class=\"mb-0 font-weight-semibold\">₱$price &nbsp <input type=\"number\" style = \"width: 50px;font-size: 20px;\"step=\"1\" min=\"1\" max=\"\" name=\"quantity\" value=\"1\" 
                            title=\"Qty\" class=\"input-text qty text\" size=\"2\" pattern=\"\" inputmode=\"\"> </h3> 
							
							 <button type=\"submit\" name=\"add\" class=\"btn bg-cart\"><i class=\"fa fa-cart-plus mr-2\" ></i> Add to cart</button>
							 <input type=\"hidden\" name=\"itemcode\" value=\"$item_code\">
						</div>
					</div>
				</form>
			</div>";
		echo $element;
       
	}
?>

<?php
    function cart_product($prodname, $category, $price, $item_img, $qty, $item_code){
        $element2 = "
        <form class=\"form1\"method=\"post\" action=\"new_cart.php?remove&id=$item_code\" style=\"border: 1px solid black; margin: 20px; padding: 20px;\">
            <div class=\"Cart-Items\">
                <div class=\"image-box\">
                    <img src=\"$item_img\" style={{ height=\"120px\" }} />
                </div>
                <div class=\"about\">
                    <h3 class\"subtitle\">$prodname</h3>
                    <h1 class=\"title\">$category</h1>
                    
                   
                </div>
                <div class=\"counter\">
                    <div class=\"quantity buttons_added\">
                    <h6>Quantity: $qty</h6>

                    </div>
                </div>
                <div class=\"prices\">
                    <div class=\"amount\"> ₱$price</div>
                    
                    	<button class=\"btn btn-danger\" name=\"remove\">Remove</button>
                     <input type=\"hidden\" name=\"itemcode\" value=\"$item_code\">
                </div>
            </div>
        </form>
        ";
        echo $element2;
        //echo "$price";
    }
?>

<?php //function for adding items inside the cart
function addtocart($inpage){
    $page = $inpage;
	if(isset($_POST['add'])){
        if(!isset($_SESSION["username"])){
            header("Refresh:0; url=login.php");
        }
		elseif(isset($_SESSION["cart"])){
			$item_array_id = array_column($_SESSION["cart"], "product_id");	
			
			if(in_array($_POST["itemcode"], $item_array_id)){
				echo "<script>alert(\"Product is already in the cart\")</script>";
				echo "<script>window.location = \"$page.php\"</script>";
				print_r($_SESSION["cart"]) . '<br>';

			}
			else{
				$count = count($_SESSION["cart"]);
                $count2 = count($_SESSION["qty"]);
				$item_array = array('product_id' => $_POST["itemcode"]);
                $qty_array = array('qty' => $_POST["quantity"]);
				$_SESSION["cart"][$count] = $item_array;
                $_SESSION["qty"][$count] = $qty_array;
				echo "<script>window.location = \"$page.php\"</script>";
				print_r($_SESSION["cart"]);
			}
		}
		else{
			$item_array = array('product_id' => $_POST["itemcode"]);
            $qty_array = array('qty' => $_POST["quantity"]);
			$_SESSION["cart"][0] = $item_array;
            $_SESSION["qty"][0] = $qty_array;
			print_r($_SESSION["cart"]);
			echo "<script>window.location = \"$page.php\"</script>";
		}	
	}
}
?>

<?php 
function page_category($inputpage){
    include 'database_connect.php';
    $sql = "SELECT * FROM item WHERE category = '$inputpage'";
						$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);
						if($resultCheck > 0){
							while($row = mysqli_fetch_assoc($result))
								product($row['item_name'], $row['category'], $row['item_price'], $row['item_img'], $row['item_code']);
                        }
    
}
?>

<?php
	function showlogout(){
		$log= "
			<div class=\"logout\">
				<form action=\"\" method=\"post\">
					<button class=\"btn btn-danger\" name=\"logout\">Logout</button>
				</form>
			</div> ";
		echo $log;
	}
?>

<?php //function for sell button in seller page
    if(isset($_POST["sell_submit"])){
        //header("Refresh:0; url=homepage.php");
        echo "<script>window.location = 'homepage.php'</script>";
    }
?>

<?php //function for radio button in seller page
    if(isset($_POST["signup"])){
        $category = $_POST["RadioD"];
        echo $category;
    }
?>


<?php //function to remove items from cart
    if(isset($_POST["remove"])){
        //if($_GET["action"] == "remove"){
            // echo "hello";
            foreach($_SESSION["cart"] as $key => $value){
                if($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$key]);
                    echo "<script>alert(\"Item has been removed from the cart.\")</script>";
                     echo "<script>window.location = 'new_cart.php'</script>";
                }
            }
        //}
    }
?>


<?php /*/purchase history function
function purchase($prodname, $category, $item_img, $orderdate, $seller, $Total){
$element2 = "<div class=\"grid-container\" style=\"padding: 0\">
 
  <div class=\"item2\"><img src=\"$item_img\" style=\"width:150px\"></div>
  <div class=\"item3\"><strong>$prodname</strong><br> $category</div>  
  <div class=\"item4\">$orderdate</div>
  <div class=\"item5\">$seller</div>
  <div class=\"item6\">$Total</div>
  
</div>"; } */
?>


<?php //sold items function
    function sold_items($prodname, $category, $item_img, $date, $seller, $contactnum, $address, $total, $item_code){
        $element2 = "
        <div>
        <div class=\"grid-container\" style=\"border: 1px solid black; margin: 10px 5px;\">
        <div class=\"item2\"><img src=\"$item_img\" style=\"width:150px\"></div>
        <div class=\"item3\"><strong>$prodname</strong><br>$category</div>  
        <div class=\"item4\">Date Sold: $date</div>
        <div class=\"item5\">Buyer: $seller
        <br>Contact Number: $contactnum<br>
        Delivery Address: <br>$address<br></div>
        <div class=\"item6\">Price: ₱$total</div>
        <input type=\"hidden\" name=\"itemcode\" value=\"$item_code\">
        </div>    ";

        echo $element2;
    }
?>

<?php //purchase history function
    function purchased_items($prodname, $category, $item_img, $date, $username, $qty, $total, $item_code){
        $element2 = "
        <div>
        <div class=\"grid-container\" style=\"border: 1px solid black; margin: 10px 5px;\">
        <div class=\"item2\"><img src=\"$item_img\" style=\"width:150px\"></div>
        <div class=\"item3\"><strong>$prodname</strong><br>$category<br>Quantity: $qty</div>  
        <div class=\"item4\">Date Sold: $date</div>
        <div class=\"item5\">Seller: $username</div>
        <div class=\"item6\">Total Price: ₱$total</div>
        <input type=\"hidden\" name=\"itemcode\" value=\"$item_code\">
        </div>    ";

        echo $element2;
    }
?>