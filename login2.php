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
.login{  
        width: 482px;  
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
    <h2>Sign In</h2><br>    
    <div class="login">    
    <form id="login" method="post" action="login-check.php">    
        <label><b>Enter User Name     
        </b>    
        </label>    
        <input type="text" name="username" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Enter Password     
        </b>    
        </label>    
        <input type="Password" name="password" id="Pass" placeholder="Password">    
        <br><br>    
        <button style="margin-top: 15px; background-color: 	#6F4E37;  border: 1px 	#6F4E37;"type="submit" class="btn btn-primary">Login</button>       
           
        <br><br>    
        <p>Don't have an account yet? <a href="sign-up2.php">Make one here!</a></p>    
    </form>     
</div>    
</body>    
</html>   