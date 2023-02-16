<?php
	session_start();
	include 'database_connect.php';
?>

	<?php
		$username = $_POST["username"];
		$password = $_POST["password"];
	
		$checklogin = mysqli_query($conn, "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'");
		$count = mysqli_num_rows($checklogin);
		
		if($count > 0){
            $row=mysqli_fetch_assoc($checklogin);
            $_SESSION['acc_no'] = $row["account_no"];
			$_SESSION['username'] = $username;	
			header("Refresh:0; url=homepage.php");			
		}
		else{
			echo "<script>alert('Invalid Username or Password')</script>";
			header("Refresh:0; url=login2.php");
		}
		
	?>
