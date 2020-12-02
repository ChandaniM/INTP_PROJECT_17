<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>website</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
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

	<div class="background">
		
	</div>
	<div class="middle">	
			<!-- Events -->
				<div class="box">
						<div class="card">
							<div class="container">	
							<!-- Card Header -->
								<span class="title-sub">EVENTS</span>
								<!-- Card Body -->
								<span class="span-text">
									Celebrate the Events of your life, enjoy your parties, business meetings, birthdays with us. 
							 	</span>
							 	<!-- Card Footer -->
							 	<div class="card-bottom flex">
							 		<button class="sub-button"><a href="enventenquiry.php">Event Enquiry</a></button>
					 			</div>
					 		</div>
						</div>
						<div class="image-container">
							<img src="Images/Quay-view-bridge.jpg">
						</div>
				</div>
				<!-- part1 end -->
				<!-- part2 start -->
				<div class="box center-box">
						<div class="card">
							<div class="container">
								<span class="title-sub">BEST CHEFS</span>
								<span class="span-text">
								Chefs that appreciate nature’s diversity and bring you finger lickin  delicious dishes are the driving forces of our restaurant.
							 	</span>
							 	<div class="card-bottom flex">
							 		<button class="sub-button"><a href="staffmanagement.php">Team Of Chefs</a></button>
							 	</div>
							 </div>
						</div>
						<div class="image-container">
							<img src="Images/chef.jpg" alt="best CHEFS here" class="image-chef">
						</div>	
				</div>
				<!-- part2  end-->
				<!-- part3 start -->
				<div class="box">
					<div class="card">
						<div class="container">
							<span class="title-sub">MENU ITEMS</span>
							<span class="span-text">
							We serve best quality food and we also take care of our customer health. we always provide best service  to our customer`s . 
						 	</span>
							 <div class="card-bottom flex">
						 		<button class="sub-button"><a href="menu.php">Check Menu</a></button>
					 		</div>
					 	</div>
					</div>
					<div class="image-container">
						<img src="./images/menudish.jpg">
					</div>	
				</div>
				<!--  part3 end -->
				<!-- end -->
		<!-- </div> -->
	</div>
<!-- start of footer -->
<?php
	include './PHP/footer.php';
?>
<!-- end of footer -->
<script src="./headerLogic.js"></script>
</body>
</html>