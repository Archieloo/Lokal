<?php
	include 'navbar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="about.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="shortcut icon" href="favicon.ico">
	
</head>
<!-- css grid -->
<style> 
body{
  background-image: url(uploads/login_background.jpg);
background-repeat: no-repeat;
 background-attachment: fixed;  
  background-size: cover;
}
.item1 { grid-area: menu; }
.item2 { grid-area: main; }
.item3 { grid-area: right; }


.grid-container {
  display: grid;
  grid-template-areas:
    'menu menu main main right right'
    'menu menu main main right right'
    'menu menu main main right right';
  gap: 4px;
 
  padding: 10px;
}

.grid-container > div {

  padding: 10px 0;
}
.container{
margin-left:auto;
margin-right:auto;
}
</style>
<!-- css image -->
<style>
.container1 {
  position: relative;
  width: 90%;
  
}

.image {
  display: block;
  width: 90%;
  height: auto;
    border-radius: 50%;
    border-style: double;
    
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #796a53;
 
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
  border-radius: 55%;
    
}

.container1:hover .overlay {
  width: 100%;
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

.about-section {
  padding: 50px;
  text-align: center;
 /*    background-image: radial-gradient(#fffef2,#f8f0c6,#e9dfc1);
  
  background-image: linear-gradient(to right, #A96F44 , #F2ECB6); #e9dfc1,#e9dfc1)*/

  color: #664229;
}

@font-face { font-family: Dream Glory; src: url('DREAM GLORY.ttf'); } 
    .h1{ font-family: Dream Glory; font-size: 45px;}

</style>
 
<body>
<div class="about-section">
  <h1><strong>About Us</strong> </h1>
  <p>Some text about who we are and what we do.</p>
</div>
    <div class= "container">
 

        <main>
 <div class="grid-container" style="margin-left:30px">
  <div class="item1">
  <div class="container1">
  <img src="BANNER-PHOTOS/rich.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><strong>Richelieu Q. Taberdo</strong><br> artaberdo@gmail.c0m<br>mahilig sa kape</div>
  </div>
</div></div>
  <div class="item2"><div class="container1">
  <img src="BANNER-PHOTOS/me.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><strong>Andrea Nicole B. Gallardo</strong><br>andreagllrdo@gmail.com<br>mahilig sa pusa</div>
  </div>
</div></div>
  <div class="item3"><div class="container1">
  <img src="BANNER-PHOTOS/nae.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text"><strong>Kyle Ivan P. Eduvane</strong><br>hgfrsh@gmail.com<br>mahilig</div>
  </div>
</div></div>

        </main>
        <footer>
        </footer>
    </div>
</body>
</html>