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

<style>

    body{
 background-image: url(uploads/login_background.jpg);
background-repeat: no-repeat;
 background-attachment: fixed;  
  background-size: cover;}
    
    .container8{  
        width: 582px;  
        overflow: hidden;  
        margin: auto;  
        
        padding: 80px;  
        background: #d7c1ab;  
		opacity: 0.8;
        border-radius: 15px ;  
          
}  

    .container8{
        margin-left: auto;
            margin-right: auto;
        margin-top: 30px;
        padding: 30px;
       
    }
    h1{
        text-align:center;
        font-weight: bold;
        margin-bottom: 20px;
    }

    input[type="text"]{
        margin-bottom: 50px;
    }

    input[type="file"]{
        width: 30%;
        margin-bottom: 20px;
    }

    table{
        margin-bottom: 30px;
    }

    .container8 button{
        width: 9%;
    }


</style>
<body>

     <?php
                /*if(isset($_POST["fileToUpload"])){
                    $try = $_POST["fileToUpload"];
                    echo $try;
                }
                else if(!isset($_POST["fileToUpload"])){
                     echo "wew";
                } */
                   
     ?>

    <div>     
        <div class="container8">
            <h1>Sell an Item!</h1>
            <div class="wrapper">
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
			

			</div>

			    <table width="500">
                <h5>Choose the item's category:</h5>
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
				
			

            Select image to upload:
            <input type="file" style = "width: 300px;" class="form-control" id="customFile" method="post" name="fileToUpload" id="fileToUpload">
            
			<button type="submit" style = "width: 70px; background-color: 	#6F4E37; color: white" class="btn" name="signup">Sell</button>

            </div>
		</form>
        </div>
        </div>
    </div>
</body>
</html>