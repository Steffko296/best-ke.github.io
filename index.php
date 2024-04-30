<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="TRAJA Frankfuruvnici">
    <meta name="description" content="THIS IS BEST SITE KEver">
    <title>BEST KOSICE</title>
	<meta name = "format-detection" content = "telephone=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


	<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="email=no">
</head>
	<body>

		<!-- MENU -->
<nav>
    <div class="wrapper">
      <div class="logo"></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
		 <label for="close-btn" class="btn close-btn" id="close"><i class="fa fa-times"></i></label>
        <li><a href="?id=default">Home</a></li>
        <li><a href="?id=about_best">About BEST</a></li>
        <li><a href="?id=x">About Us</a></li>
        <li><a href="?id=x">Our courses</a></li>
        <li><a href="?id=x">Events</a></li>
        <li><a href="?id=x">Partners</a></li>
        <li><a href="?id=x">Contact</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fa fa-bars" style="color: #f26522;"></i></label>

    </div>
	<div class="shadow"></div>
  </nav>
		
		
		
	<?php
if(isset($_GET['id'])) {

    $id = $_GET['id'];
   
    switch($id) {
			
		case "about_best":
			include "web/about_best.php";
			break;
				
		default:
			include "web/default.php";
			break;
	
	
	case "x":
		include"web/404.php";
		break;
}
}
	
	else {
		include "web/default.php";
	}
	
?>
	
		
		
			

		
<footer>

	<div id="partners">
	<div class="shadow"></div>
	
		<h3>Our partners</h3>
		<div class="shadow2"></div>	
	</div>
	
	
<div id="footer_part">
	<div class="footer_part"></div>
	
	<div class="footer_part">
	<div><h3 class="footer_info">SOCIAL MEDIA</h3>
	<p><a href="https://facebook.com">FACEBOOK</a></p>
	<p><a href="https://instagram.com">INSTAGRAM</a></p>
	</div>
	</div>
	
	<div class="footer_part">
	<div><h3>CONTACT</h3>
	<p>EMAIL: kosice@best.eu.org</p>
	<p>PHONE: +421 908 568 992</p>
	</div>
	</div>
	
</div>	
	
</footer>
		
		
<script>

	document.addEventListener("DOMContentLoaded", function() {
  // Get all menu items
  var menuItems = document.querySelectorAll('.nav-links li a');

  // Add click event listener to each menu item
  menuItems.forEach(function(item) {
    item.addEventListener('click', function() {
      // Programmatically trigger the click event on the close button
      var closeBtn = document.getElementById('close-btn');
      closeBtn.click();
    });
  });
});
	
</script>


		
		
		
</body>
</html>
