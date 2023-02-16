<?php
	session_start();
	include 'database_connect.php';
    include 'homepage-functions.php';
//	include 'C:\xampp\htTdocs\WebDev\PROJECT\file_upload\uploads';
	//include 'C:\xampp\htdocs\ANDENG\LATEST\LATEST\database_connect.php';
	
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // HERE IS THE DIRECTORY FOR COPY IN DB
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	  if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
        
	  } else {
		echo "File is not an image.";
		$uploadOk = 0;
	  }
	}
	
	// Check if file already exists
	if (file_exists($target_file)) {
	  //echo "Sorry, file already exists.";
    	echo "<script>alert(\"Sorry, file already exists\")</script>";
		echo "<script>window.location = \"seller_page2.php\"</script>";

	  $uploadOk = 0;
	}
	
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 5000000) {
	  //echo "Sorry, your file is too large.";
      echo "<script>alert(\"Sorry, your file is too large.\")</script>";
		echo "<script>window.location = \"seller_page2.php\"</script>";

	  $uploadOk = 0;
	}
	
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "webp") {
	  echo "Sorry, only JPG, JPEG, PNG & WEBP files are allowed.";
	  $uploadOk = 0;
	}
	
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	  //echo "Sorry, your file was not uploaded.";
        echo "<script>alert(\"Sorry, your file was not uploaded..\")</script>";
		echo "<script>window.location = \"seller_page2.php\"</script>";
      
	// if everything is ok, try to upload file
	} else {
	  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        echo"<form action=\"\" method=\"post\">
                <button class=\"btn \" name=\"sell_submit\">Ok</button>
            </form>";
	  } else {
		//echo "Sorry, there was an error uploading your file.";
        echo "<script>alert(\"Sorry, there was an error uploading your file..\")</script>";
		echo "<script>window.location = \"seller_page2.php\"</script>";
        
	  }
	}
    if($uploadOk == 1){
		$item_name = $_POST["item_name"];
		$item_price =  $_POST["item_price"];
		$item_img = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		//$category = $_POST["category"];

		$seller = $_SESSION["username"];	
		$category = $_POST["RadioD"];

	
		//$sql = "INSERT INTO $item (item_code, item_name, item_price, item_img, category, seller) VALUES('10','$item_name', '$item_price', '$item_img', '$category')"; //, '$user')";
		$sql = "INSERT INTO item (item_name, item_price, item_img, category, seller) VALUES('$item_name', '$item_price', '$item_img', '$category', '$seller')"; //, '$user')";
		mysqli_query($conn, $sql);
    }

	?>
	