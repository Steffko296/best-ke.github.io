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
	<meta name="color-scheme" content="light only">
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
        	<li><a href="?id=about_us">About Us</a></li>
        	<li><a href="https://bestkosice.com/"  target="_blank">Our course</a></li>
        	<li><a href="?id=events">Events</a></li>
        	<li><a href="?id=contact">Contact</a></li>
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
				
				case "about_us":
				include"web/about_us.php";
				break;
	
				case "events":
				include"web/events.php";
				break;
			
				case "contact":
				include"web/contact.php";
				break;
			
			
				default:
				include "web/default.php";
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
		
		<div id="partners_logos">
			<img src="img/partners/infobip.png">
			<img src="img/partners/rmkk.png">
		</div>	
		
		<div class="shadow2"></div>	
	</div>

	<div id="footer_part">
		<div class="footer_part"></div>
		
		<div class="footer_part">
			<h3 class="footer_info">SOCIAL MEDIA</h3>
			<p>
				<img href="https://instagram.com" src="/img/icons/facebook.png"></img>
				<a href="https://facebook.com">FACEBOOK</a>
			</p>
			<p>
				<img href="https://instagram.com" src="/img/icons/instagram.png"></img>
				<a href="https://instagram.com">INSTAGRAM</a>
			</p>
		</div>
	
		<div class="footer_part">
			<h3 class="footer_info">CONTACT US</h3>
			<p>
				<img style="height: 48px;" src="/img/icons/email_white.png"></img>
				<a>kosice@best.eu.org</a>
			</p>
			<p>
				<img style="height: 48px;" src="/img/icons/location_white.png"></img>
				<a>Boženy Nemcovej 32</a>
			</p>
		</div>
	</div>

	<p id="year"><?php echo date("Y"); ?></p>
</footer>
		
	<!-- SCRIPTA NA MENU -->	
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
	
	
	document.addEventListener('DOMContentLoaded', function() {
    // Get the value of the 'id' parameter from the URL
    const urlParams = new URLSearchParams(window.location.search);
    const activeId = urlParams.get('id');

    // Find all <a> elements inside the nav-links
    const navLinks = document.querySelectorAll('.nav-links li a');

    // Loop through each <a> element and check if its href attribute matches the activeId
    navLinks.forEach(function(link) {
        if (link.getAttribute('href').includes(`?id=${activeId}`)) {
            link.classList.add('active'); // Add 'active' class to the matching link
        }
    });
});

</script>


		
		
		
</body>
</html>
