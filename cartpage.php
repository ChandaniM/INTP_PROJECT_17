<?php
    session_start();
    include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD TO CART PAGE</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="CSS/cartpage.css">
	<link rel="stylesheet" type="text/css" href="CSS/header.css">
	<link rel="stylesheet" href="./CSS/footer.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
	include './PHP/header.php';
?>
<!-- start middle page  -->
<div class="conatiner">
	<div class="page-title">
		<h1>CART</h1>
	</div>
	<div class="middle-page">
		<div class="cart-page">
			<!-- part 1 -->
			<?php 
				if(!isset($_SESSION['userid']) && !$_SESSION['loggedin']==true){
                	echo "<script> location.href='./loginform.php'; </script>";
            		exit;
            	}
				$sql = "SELECT * FROM cart_db WHERE customer_id = ".$_SESSION['userid']."";
				$result=mysqli_query($connection,$sql) or die('Invalid query:');
				while($row = mysqli_fetch_assoc($result)){
			        //echo $row['product_id'];
			        $sql2="SELECT * FROM dishes WHERE dish_id=".$row['dish_id'];
			        $result2=mysqli_query($connection,$sql2) or die('Invalid query:');
			        $row2 = mysqli_fetch_assoc($result2);
			        // while($row2 = mysqli_fetch_assoc($result2)){
			        	echo'
			        		<div class="cart--1 flex-space">
								<div class="img-container">
									<img src="'.$row2["image"].'" class="Images--dish" alt="">
								</div>
								<div class="cart--detail flex-space">
									<span class="dish--name dish--items">'.$row2["dish_name"].'</span>
									<span class="dish--quanity dish--items">x'.$row["quantity"].'</span>
									<span class="dish--price dish--items">&#8377;'.$row["quantity"]*$row2["cost"].'</span>
								</div>
								<div class="clear">
									
										<a href="./cartpage.php?id='.$row["dish_id"].'" class="clear">
											<img src="./Icons/clear-white.svg" class="clear-image">
										</a>
									
								</div>
							</div>
			        	';	
			        // }
			    }
			?>
		</div>
	</div>
		<form method="post">
			<button class="order-button" name='order'>CONFIRM ORDER</button>
		</form>
</div>
<!--end  middle page  -->
<?php
	include './PHP/footer.php';
?>
<?php
		if(isset($_POST['order'])){
				$sql = "SELECT * FROM cart_db WHERE customer_id = ".$_SESSION['userid']."";
				$result=mysqli_query($connection,$sql) or die('Invalid query:');
				while($row = mysqli_fetch_assoc($result)){
					$sql2="SELECT cost FROM dishes WHERE dish_id=".$row['dish_id']."";
			        $result2=mysqli_query($connection,$sql2) or die('Invalid query:');
			        $row2 = mysqli_fetch_assoc($result2);
			        // while($row2 = mysqli_fetch_assoc($result2)){
			        	$cost=$row['quantity']*$row2['cost'];
			       
						$sql3='INSERT INTO `order` (customer_id, dish_id, quantity, total_cost, status) VALUES ('.$_SESSION["userid"].', '.$row["dish_id"].', '.$row["quantity"].', '.$cost.',"In Progress")';
						$result3=mysqli_query($connection,$sql3) or die('Invalid query:'.mysqli_error($connection));
						
					// }
				}

				echo "<script> location.href='./AccountInfo.php'; </script>";
    			exit;
			}


			if(isset($_GET['id'])){
				$sql= "DELETE FROM  cart_db WHERE customer_id=". $_SESSION['userid'] ." AND dish_id=".$_GET['id'];
				$result=mysqli_query($connection,$sql) or die('Invalid query:'.mysqli_error($connection));
			}
?>
<script src="./headerLogic.js"></script>
</body>
</html>