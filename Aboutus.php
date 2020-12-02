<!DOCTYPE html>
<html>
<head>
	<title>About us page</title>
		<link rel="stylesheet" type="text/css" href="CSS/aboutuspage.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="./CSS/header.css">
		<link rel="stylesheet" href="./CSS/footer.css">
</head>
<body>
<?php
	include './PHP/header.php';
?>
<!-- middle part -->
<div class="container-middle-page">
		<div class="mid--part">
			<div class="about-text">
				<div class="title">
					<h1>About Us</h1>
				</div>
				<div class="mid-pragraph">
					<p class="deatil-page">We believe in Delicious as well as quality food. All the vegetables as well as Non veg products used by us are chosen after testing for good quality.</p>
				</div>
			</div>
			<div class="image-container">
				<img src="./Images/aboutpageimage.jpg" class="image" alt="">
			</div>
		</div>	
		<div class="mid--part-2">
			<div class="part-1">
				<h1 class="heading">KEEP UP TO DATE WITH C/S</h1>
				<span class="page--text">Sign up to be the first to receive special news and event updates from abcs</span>
			</div>
			<div class="part-2">
				<input type="email" placeholder="Email Address" autocomplete="off" class="firstinput">
				<button  class="button">SUBSCRIBE</button>
			</div>
		</div>
</div>
<script src="./headerLogic.js"></script>
<!-- end middle part -->
<!-- start of footer -->
<?php
	include './PHP/footer.php';
?>
<!-- end of footer -->
</body>
</html>