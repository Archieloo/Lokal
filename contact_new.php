<?php

	include 'navbar.php';
	
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Contact us </title>
    <link rel="stylesheet" href="">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <header>
   </header>
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

.container{  
        width: 60%;  
		height: 530px;
        overflow: hidden;  
        margin: auto;  
        margin: 50 0 0 150px;  
        padding: 80px;  
        background: #d7c1ab;  
		opacity: 0.9;
        border-radius: 15px ;  
          
}  
.fa {
  padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
 .content{
  display: flex;}
  align-items: center;
  .container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;


}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #594d3c;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #594d3c;}
  .container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #594d3c;
}
</style>
<body>

  <div class="container" style="margin-top: 100px">
    <div class="content"  style="margin-top: 73px">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt" align="center"></i>
          <div class="topic">Address</div>
          <div class="text-one">Sta. Mesa</div>
          <div class="text-two">Manila</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">0905 881 4160</div>
          <div class="text-two">0927 433 9967</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">ivankyle@gmail.com</div>
          <div class="text-two">richelieu@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have concern or any types of queries, you can send us message through our socials.</p>
      
        <a href="https://twitter.com/messages/compose" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="mailto:andreagllrdo@gmail.com" class="fa fa-google"></a>
      
    </div>
    </div>
  </div>
</body>
</html>
