<!DOCTYPE html>
<html lang="en">
<head>
		<title>FAQ</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Cache-control" content="no-cache">
		
<!-- 			Fevicons		--> <!-- Animated GIF will work only in Firefox, Rest Fixed Image -->
	<link rel="icon" type="image/gif" href="images/crop_fevicon.gif">
	
<!-- Bootstrap 4.5 CSS Link -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- Bootstrap 4.5 jQuery, Popper.js and JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!-- My Own CSS -->
		<link rel="stylesheet" href="css/mainStyle.css">

</head>
<body>
	<header>
		<h1>Crop Recommender</h1>
		<nav class="navbar navbar-expand-md navbar-light">
					<button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#myNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="navbar navbar-nav">
						<li><a class="onScreen Home" href="index.php">Home</a></li>
						<li class="dropdown">
<!-- aria-expanded tells that is dropdown menu is open or not-->
							<a class="dropdown-toggle onScreen " data-toggle="dropdown" href="#" aria-expanded="false">Crop Prediction</a>
							<ul class="dropdown-menu">
								<li><a href="manual_entry.php">Entering Values Manually</a></li>
								<li><a href="viaBot.php">By using Agriculture Car</a></li>
							</ul>
						</li>
						<li><a class="active onScreen FAQ" href="#">FAQ</a></li>
					</ul>
				</div>
		</nav>
<!-- Search Button -->
		<form class="search_button" action="search_results.php" method = "post">
			<input type="text" class="form-control" name="search_item" placeholder="Search Crop Name">
			<button class="btn btn-secondary" type="submit" >
					<svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
						<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
					</svg>
			</button>
		</form>
		
	</header>
	<main>
		<br />
		<h2>FAQ</h2>
		<div class="container">
			<div class=="row">
			<details>
				<summary>How much moisture content should be maintained during storage to prevent from attack of insect pests?</summary>
				<p>The moisture content should be less than 8%.</p>
			</details>
			<br/>
			<details>
				<summary>What does rough rice mean?</summary>
				<p>Rough rice, is a rice that has been harvested and threshed but still has its hull and bran.</p>
			</details>
			<br/>
			<details>
				<summary>What is the cooking quality of hybrids rice?</summary>
				<p>Cooked hybrid rice is slightly sticky, which has lower amylase content.</p>
			</details>
			<br/>
			<details>
				<summary>What is the optimum time of sowing for rice fallow pulses?</summary>
				<p>Third week of January – Second week of February.</p>
			</details>
			<br/>
			<details>
				<summary>What is the optimum planting depth for better establishment of rice?</summary>
				<p>Shallow planting (3 cm) ensures quick establishment and more tillers.<br/>
				   Deeper planting (> 5cm) leads to delayed establishment and reduced tillers.</p>
			</details>
			<br/>
			<details>
				<summary>What is the ideal sowing time for Wheat?</summary>
				<p>Ideal sowing time is 15th October to 1st week of November. 
				   Sowing must be completed within the first fortnight of November.</p>
			</details>
			<br/>
			<details>
				<summary>What is the optimum stage to transplant ragi seedlings?</summary>
				<p>Pull out seedlings on the 17th to 20th day of sowing for planting.</p>
			</details>
			<br/>
			<details>
				<summary>Kindly suggest an intercropping system for ragi?</summary>
				<p>Finger millet + Pigeon pea combinations in 8 : 2 or 6 : 2 proportion brings higher returns in Tamil Nadu. 
				   Finger millet + field bean in 8 : 1 proportion or finger millet + blackgram or green gram in 8 : 2 proportion are the 
				   other profitable crop combinations.</p>
			</details>
			<br/>
			<details>
				<summary>Is there any direct role of soil color on crop production?</summary>
				<p>Soil color is mainly the concern of the parent materials by which soil is being formed 
				   as well as rocks which after metamorphism develop into different colors.</p>
			</details>
			<br/>
			<details>
				<summary>What is importance of dew in crop production and productivity in semi arid region of India?</summary>
				<p>Dew acts as a protective barrier on the leaves and transpiration process in plants which is known as "a necessary evil" 
				   will not occur until the dew evaporates from the surface. It allows plant to retain more moisture in its cells, making it 
				   more resilient in hot and dry conditions. Dew reduces heat stress in arid and semi arid environment by Acting as direct source 
				   of hydration in succulents.</p>
			</details>
			<br/>
			</div>
			</div>
			
			
	</main>
	<footer style="margin-top:15%">
		<div class="row">
			<div class="column"> 
				<p>
					<img src="images/leafLogo.png" alt="Logo"/>
					Created by Shrey Suri 
				</p>
			</div>
			<div class="column"> 
				<h3>Other</h3>
				<h5><a href="about.php" class="footer-named-link">About</a></h5>
			</div>
			<div class="column"> 
				<h3>Social Media</h3>
				<a href="https://www.linkedin.com/in/shrey-s-b4237716a/">
					<img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0002f2b676eb4ba0869_LinkedIn%20Icon.svg" alt="LinkedIn Icon" class="social-network-icons">
				</a>
				<a href="https://github.com/rayin19">
					<img src="images/Github_logo.png" alt="GitHub Icon" class="github-icon social-network-icons" >
				</a>
			</div>
		</div>
	</footer>
</body>
</html>