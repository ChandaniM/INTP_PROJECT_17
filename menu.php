<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu Page</title>
	<link rel="stylesheet" type="text/css" href="CSS/menupage.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="./CSS/header.css">
	<link rel="stylesheet" href="./CSS/footer.css">
</head>
<?php
	require 'connection.php';
?>
<body>
<?php
	include './PHP/header.php';
?>
	<!-- MENU ITEMS start -->
	<div class="container">
			<div class="menu-title">
				<h1 class="page-title">MENU</h1>
			</div>
			<!-- veg  container -->
			<div class="veg-container">
				<div class="veg-container--title">
					<span>VEGETARIAN FOOD</span>
				</div>
					<div class="veg-dishes">
						<?php 
							$sql = "SELECT * FROM Dishes WHERE category = 'veg'";
							if($result = mysqli_query($connection, $sql)){
								//$row = mysqli_fetch_all($result, MYSQLI_NUM);
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
								    echo '
								    	<div class="dish-1">
											<div class="dish-image">
												<img src="'.$row["image"].'" class="dish-item-img" alt="dish-1">
											</div>
											<div class="dish-detail container">
												<h4><b>'.$row["dish_name"].'</b></h4>  
												<span><b>'.$row["dish_detail"].'</b></span>
												<p><b>RS '.$row["cost"].'</b></p>  
												
											</div>

											<a href="./menu.php?id='.$row["dish_id"].'"><button class="card-button">ADD TO CART</button></a>
										</div>
								    ';
								}
		
							}
						?>
					</div>
			</div>
			<!-- end of veg -->

			<!-- veg  container -->
			<div class="veg-container">
				<div class="veg-container--title">
					<span>NON-VEGETARIAN FOOD</span>
				</div>
					<div class="veg-dishes">
						<?php 
							$sql = "SELECT * FROM Dishes WHERE category = 'non-veg'";
							if($result = mysqli_query($connection, $sql)){
								//$row = mysqli_fetch_all($result, MYSQLI_NUM);
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
								    echo '
								    	<div class="dish-1">
											<div class="dish-image">
												<img src="'.$row["image"].'" class="dish-item-img" alt="dish-1">
											</div>
											<div class="dish-detail container">
												<h4><b>'.$row["dish_name"].'</b></h4>  
												<span><b>'.$row["dish_detail"].'</b></span>
												<p><b>RS '.$row["cost"].'</b></p>  
											</div>
											<a href="./menu.php?id='.$row["dish_id"].'"><button class="card-button">ADD TO CART</button></a>
										</div>
								    ';
								}
		
							}
						?>
					</div>
			</div>
			<!-- end of NON-veg -->

			<!-- sweets desserts container -->
			<div class="veg-container">
				<div class="veg-container--title">
					<span>SWEETS / DESSERTS</span>
				</div>
					<div class="veg-dishes">
								<?php 
									$sql = "SELECT * FROM Dishes WHERE category = 'sweets'";
									if($result = mysqli_query($connection, $sql)){
								//$row = mysqli_fetch_all($result, MYSQLI_NUM);
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
								    echo '
								    	<div class="dish-1">
											<div class="dish-image">
												<img src="'.$row["image"].'" class="dish-item-img" alt="dish-1">
											</div>
											<div class="dish-detail container">
												<h4><b>'.$row["dish_name"].'</b></h4>  
												<span><b>'.$row["dish_detail"].'</b></span>
												<p><b>RS '.$row["cost"].'</b></p>  
											</div>
											<a href="./menu.php?id='.$row["dish_id"].'"><button class="card-button">ADD TO CART</button></a>
										</div>
								    ';
								}
		
							}
						?>
					</div>
			</div>
			<!-- end of sweets desserts -->

			<!-- drink container -->
			<!-- end of drink -->
	</div>
	<!-- end of MENU -->
<!-- start of footer -->
<?php
	include './PHP/footer.php';
?>
<!-- end of footer -->
<?php
			
	if (isset($_GET['id'])) {
		if(!isset($_SESSION['userid']) && !$_SESSION['loggedin']==true){
	      	echo "<script> location.href='./loginform.php'; </script>";
	    	exit;
    	}
		$SQL="INSERT INTO cart_db(customer_Id,dish_id,quantity) VALUES ('". $_SESSION['userid'] ."','". $_GET['id'] ."','". 1 ."')";
	 	$result = mysqli_query($connection,$SQL);	
	 }
?>
<script src="./headerLogic.js"></script>
</body>
</html>