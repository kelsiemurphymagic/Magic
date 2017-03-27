<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kelsie Murphy - Magician</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="magicwebsiteCSS.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#myPage" style="padding-top: 0px;">
					<div>
						<img src="images/nav_logo.jpg" alt="Logo" style="width: 90px; height: 50px;"/>
					</div>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#about">ABOUT</a></li>
					<li><a href="#services">SERVICES</a></li>
					<li><a href="#pricing">PRICING</a></li>
					<li><a href="#gallery">GALLERY</a></li>
					<li><a href="#contact">CONTACT</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid parallax">
		<div class="caption text-center">
			<img src="images/banner_aberdeen.png" alt="Logo"/>
		</div>
	</div>

	<?php include("about.php"); ?>

	<?php include("services.php"); ?>

	<?php include("pricing.php"); ?>

	<?php include("gallery.php"); ?>

	<?php include("contact.php"); ?>

	<footer class="container-fluid text-center">
		<a href="#myPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		<p>Kelsie Murphy ©2017</p>
		<a class="links" href="www.google.com"><i class="fa fa-facebook-official fa-3x"></i></a>
		<a class="links" href="www.google.com"><i class="fa fa-youtube fa-3x"></i></a>
		<a class="links" href="www.google.com"><i class="fa fa-instagram fa-3x"></i></a>
		<p></br>Contact Form Powered by </br><a class="footerLink13" title="123ContactForm" href="http://www.123contactform.com">123ContactForm</a> | <a style="font-size:small!important;color:#000000!important; text-decoration:underline!important;" title="Looks like phishing? Report it!" href="http://www.123contactform.com/sfnew.php?s=123contactform-52&control119314=http:///contact-form--2527372.html&control190=Report%20abuse" rel="nofollow">Report abuse</a></p>
	</footer>

	<script>
	$(document).ready(function(){
	  // Add smooth scrolling to all links in navbar + footer link
	  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
		  // Prevent default anchor click behavior
		  event.preventDefault();

		  // Store hash
		  var hash = this.hash;

		  // Using jQuery's animate() method to add smooth page scroll
		  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  }, 900, function(){
	   
			// Add hash (#) to URL when done scrolling (default click behavior)
			window.location.hash = hash;
		  });
		} // End if
	  });
	  
	  $(window).scroll(function() {
		$(".slideanim").each(function(){
		  var pos = $(this).offset().top;

		  var winTop = $(window).scrollTop();
			if (pos < winTop + 600) {
			  $(this).addClass("slide");
			}
		});
	  });
	})
	</script>

</body>
</html>
