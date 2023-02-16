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
  background-size: cover;
    }

   .container8{  
        width: 582px;  
        overflow: hidden;  
        margin: auto;  
       margin-left: 300px;
            margin-right: 150px;
        padding: 80px;  
        background: #d7c1ab;  
		opacity: 0.8;
        border-radius: 15px ;  
          
}  

    .container8{
        margin-left:auto;
        margin-right:auto;
        margin-top: 70px;
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
            <h1>Change Password</h1>
            <div class="wrapper">
            <form  method = "post" action="change_pass_submit.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col">
					<div class="form-group my-2">
						<label for="oldpass_input">Enter Old Password</label>
						<input type="password" class="form-control" id="oldpass_input" name="old_pass" placeholder="Old Password" required>		
					</div>
				</div>			
			</div>
			
            <div class="row">
				<div class="col">
					<div class="form-group my-2">
						<label for="newpass_input">Enter New Password</label>
						<input type="password" class="form-control" id="newpass_input" minlength = "8" maxlength = "16" name="new_pass" placeholder="New Password" required>		
					</div>
				</div>	
                <div class="col">
					<div class="form-group my-2">
						<label for="newpass_input2">Re-Enter Password</label>
						<input type="password" class="form-control" id="newpass_input2" name="new_pass2" placeholder="Re-Enter Password" required>		
					</div>
				</div>			
			</div>
            
			<button type="submit" style = "width: 90px; background-color: 	#6F4E37; color: white" class="btn " name="sub">Submit</button>

            </div>
		</form>
        </div>
        </div>
    </div>
</body>
</html>