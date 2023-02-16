<?php
    include 'database_connect.php';
    include 'navbar.php';
    include 'homepage-functions.php';


    $old = $_POST["old_pass"];
    $new = $_POST["new_pass"];
    $new2 = $_POST["new_pass2"];
    $user = $_SESSION["username"];

    $sql = "SELECT * FROM accounts WHERE username = '$user' AND password = '$old'";
    $checkoldpass = mysqli_query($conn, $sql);
    $countrows = mysqli_num_rows($checkoldpass);

    if($countrows > 0){
       if($new == $new2){
           $sql2 = "UPDATE accounts SET password = '$new' WHERE username = '$user'";
           mysqli_query($conn, $sql2);
           echo "<script>alert(\"Update Successful!\")</script>";
           echo "<script>window.location = 'homepage.php'</script>";
       }
       elseif($new != $new2){
           echo "<script>alert(\"Passwords dont match!\")</script>";
           echo "<script>window.location = 'change_pass.php'</script>";
       }
    }
    elseif($countrows == 0){
        echo "<script>alert(\"Old Password is incorrect\")</script>";
        echo "<script>window.location = 'change_pass.php'</script>";
    }
    

    /*if(!mysqli_num_rows($checkoldpass) and isset($_POST["sub"])){
        echo "<script>alert(\"Old Password is incorrect\")</script>";
		echo "<script>window.location = 'change_pass.php'</script>";
    }
    elseif($new != $new2 and isset($_POST["sub"])){
        echo "<script>alert(\"Passwords dont match\")</script>";
		echo "<script>window.location = 'change_pass.php'</script>";
    }
    elseif(mysqli_num_rows($checkoldpass) && $new == $new2 && isset($_POST["sub"])){
        $sql = "UPDATE item SET password = '".$new."' WHERE username = '".$user."' ";
        mysqli_query($conn, $sql);

        $conn->close();
		header("Refresh:0; url=login.php");
    } */
?>