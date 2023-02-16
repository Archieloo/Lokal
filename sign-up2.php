<?php
	
	include 'database_connect.php';
    include 'homepage-functions.php';
    include 'navbar.php';

?>

<!DOCTYPE html>    
<html>    
<head>    
    <title>Login</title>    
   <!-- <link rel="stylesheet" type="text/css" href="login.css">   -->
</head>    
<style>
body  
{  
    margin: 0;  
    padding: 0;  
    background-image: url(uploads/login_background.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;	
    font-family: 'Arial';  
}  
.sign-up{  
        width: 60%;  
        overflow: hidden;  
        margin: auto;  
        margin: 50 10 0 150px;  
        padding: 80px;  
        background: #d7c1ab;  
		opacity: 0.7;
        border-radius: 15px ;  
          
}  
h2{  
    text-align: center;  
    color: black;  
    padding: 20px;  
    font-weight: bold;
}  
label{  
    color: black;  
    font-size: 17px;  
}  
#Uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  

    width: 150px;  
    height: 30px;  
    border: none;  
    border-radius: 10px;  
    padding-left: 7px;  
    color: black; 
		font-size: 15px;
  
  
}  
span{  
    color: white;  
    font-size: 16px;  
}  
a{  
    /*float: right;  */
    background-color: none;
		color: white;
		 font-size: 15px
}  
</style>
<body>    
    <h2>Sign Up</h2><br>    
    <div class="sign-up">    
    <form method = "post" action="sign-up-check.php">
			<div class="row">
				<div class="col">
					<div class="form-group my-2">
						<label for="fname_input">First Name</label>
						<input type="text" class="form-control" id="fname_input" name="fname" placeholder="First Name" required>		
					</div>
				</div>
				<div class="col">
					<div class="form-group my-2">
						<label for="lname_input">Last Name</label>
						<input type="text" class="form-control" id="lname_input" name="lname" placeholder="Last Name" required>
					</div>
				</div>					
			</div>
			
			<div class="row">
				<div class="col">
					<div class="form-group my-2">
						<label for="email_input">Email Address</label>
						<input type="text" class="form-control" id="email_input" name="email" placeholder="Email" required>	
					</div>
				</div>
				<div class="col">
					<div class="form-group my-2">
						<label for="phonenum_input">Phone Number</label>
						<input type="text" class="form-control" id="phonenum_input" name="phone_num" placeholder="Phone Number" minlength="11" maxlength = "13" required>	
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="email_input">Enter Username</label>
						<input type="text" class="form-control" id="username_input" name="username" placeholder="Username" minlength="4" maxlength = "16" required>		
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="pass_input">Enter Password</label>
						<input type="password" class="validate form-control" id="password_input" name = "password" placeholder="Password" minlength="8" maxlength = "16" required>
						
					</div>
				</div>	
				
				<!-- new pass -->
				<div class="col">
					<div class="form-group">
						<label for="pass_input">Re-Enter Password</label>
						<input type="password" class="validate form-control" id="password_input" name = "password2" placeholder="Password" required>
						
					</div>
				</div>		
			</div>
			
			<div class="row">
				<div class="col">
					<div class="form-group my-2">
						<label for="address_input">Complete Delivery Address</label>
						<input type="text" class="form-control" id="address_input" name="address" placeholder="Address" required>	
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary" name="signup"  style="background-color: 	#6F4E37;  border: 1px 	#6F4E37;">Sign Up</button>
		
		</form>
</div>    
</body>    
</html>   