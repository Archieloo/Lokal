<?php
	include 'database_connect.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
		<?php
		$fname = $_POST["fname"];
		$lname =  $_POST["lname"];
		$email = $_POST["email"];
		$phone_num =  $_POST["phone_num"];
		$address =  $_POST["address"];
		$username = $_POST["username"];
		$password = $_POST["password"];
		$password2 = $_POST["password2"];

		if($password != $password2){
			echo "<script>alert(\"Passwords dont match\")</script>";
			echo "<script>window.location = 'sign-up.php'</script>";
		}
		else{
				$checkuser = mysqli_query($conn, "SELECT * FROM accounts WHERE username = '".$username."'");
                $checkemail = mysqli_query($conn, "SELECT * FROM accounts WHERE email = '".$email."'");
	
		if(mysqli_num_rows($checkuser) and isset($_POST["signup"])){
			?>
			<br>
			<br>
			<?php echo "<script>alert('That username is already taken')</script>";
			 header("Refresh:0; url=sign-up.php"); ?>
	
	<?php	}
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<script>alert('E-mail format is invalid!')</script>";
                echo "<script>window.location = 'sign-up.php'</script>";
            }

        elseif(mysqli_num_rows($checkemail) and isset($_POST["signup"])){
            ?>
            <br>
			<br>
			<?php echo "<script>alert('That e-mail is already taken')</script>";
			 header("Refresh:0; url=sign-up.php"); ?>
    <?php }
		elseif(isset($_POST["signup"]) and !mysqli_num_rows($checkuser)){
			$sql = "INSERT INTO accounts (username, password, email)
			VALUES ('$username', '$password', '$email')";

			$sql2 = "INSERT INTO account_details (first_name, last_name, phone_num, address)
				VALUES ('$fname', '$lname', '$phone_num', '$address')";

			mysqli_query($conn, $sql);

			mysqli_query($conn, $sql2);		  
			
			$conn->close();
			header("Refresh:0; url=login.php");
		}
		}
				        
		
	?>
	
</body>
</html>