
<?php
	include 'database_connect.php';
	include 'navbar.php';
	include 'homepage-functions.php';
	//include 'C:\xampp\htdocs\ANDENG\LATEST\LATEST\image_slider.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- <div class = "container" style = "margin-left: 150px; margin-right: 150px" > -->
    <div class = "container">
        <?php
            if(!isset($_SESSION["username"])){
                echo"<h1 style = \"text-align: center\">
                    SELLER PAGE
                </h1>";
            }
            elseif(isset($_SESSION["username"])){
                $user = $_SESSION["username"];
                echo"<h1 style = \"text-align: center\">
                    SELLER PAGE for $user
                </h1>";
            }
        ?>
       <!-- <img src = "uploads\andeng.jpg" width = "150px" height = "250x"> -->

       <form  method = "post" action="seller-submit.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col">
					<div class="form-group my-2">
						<label for="fname_input">Item Name</label>
						<input type="text" class="form-control" id="fname_input" name="item_name" placeholder="Item Name" required>		
					</div>
				</div>
				<div class="col">
					<div class="form-group my-2">
						<label for="lname_input">Item Price</label>
						<input type="text" class="form-control" id="lname_input" name="item_price" placeholder="Item Price" required>
					</div>
				</div>					
			</div>
			
            



		<!-- END -->	

			</div>

			    <table width="500">
            <tr>
            <td><label>
                <input type="radio" name="RadioD" value="men_clothing" />
                Men Clothing</label></td>
            </tr>
            <tr>
            <td><label>
                <input type="radio" name="RadioD" value="women_clothing" />
                Women Clothing </label></td>
            </tr>
            <tr>
            <td><label>
                <input type="radio" name="RadioD" value="footwear" />
                Footwear</label></td>
            </tr>
            <td><label>
                <input type="radio" name="RadioD" value="gadgets" />
                Gadgets</label></td>
            </tr>
            <td><label>
                <input type="radio" name="RadioD" value="cosmetics" />
                Cosmetics</label></td>
            </tr>
        </table>
				
			</div>

            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            
			
			<button type="submit" class="btn btn-primary" name="signup">Sell</button>
		</form>

    </div>
        

</body>
</html>