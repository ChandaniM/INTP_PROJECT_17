<?php
	session_start();
	include 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>LogIn Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/signupdesgin.css">
	<link rel="stylesheet" href="./CSS/header.css">
</head>
<body>
	<?php
	include './PHP/header.php';
?>
	<!-- middle page  -->
	<div class="flex login-container">
		<!-- loginform start -->
		<div class="loginform hide">
			<h2>SIGN IN</h2>
			<!-- form -->
			<form action="#" method="post" autocomplete="off">
				<div class="input-box">
					<input type="email" name="semail" placeholder="abc123@gmail.com" autocomplete="off" class="firstinput">
					<input type="password" name="spass" placeholder="password" class="firstinput" 
					id="passwordcheck">	
					<button class="button" name="signin">Sign In</button>
				</div>
			</form>
			<!-- form end -->
			<div class="login-bottom">
				<span>OR</span><br>
				<!-- <span>New account?</span> -->
				<a class="new-but">Create Account?</a>
			</div>
			<!-- end3 -->
		</div>
		<!-- create account  -->
		<div class="newform"  >
			<h2>SIGN UP</h2>
			<form action="#" method="post" autocomplete="off" >
					<div class="input-box">
						<input type="text" name="name" placeholder="FirstName"autocomplete="off
						" class="firstinput ">
						<input type="text" name="lastname" placeholder="LastName" autocomplete="off" class="firstinput">
						<input type="email" name="email" placeholder="abc123@gmail.com" autocomplete="off"
						class="firstinput">
						<input type="tel" name="tel_num" placeholder="Phone Number" autocomplete="off"  class="firstinput">
						<input type="text" name="Address" placeholder="Address" autocomplete="off"  class="firstinput">
						<input type="password" placeholder="Password"  name="pass" autocomplete="off"  class="firstinput password" oninput='checkpassword()'>
 						<input type="password" placeholder="Confirm password" name="pass1" class="firstinput password" oninput='checkpassword()' autocomplete="off"><br>
						<button  class="button signup"  name='submit' disabled='true'>Sign Up</button>
					</div>
			</form>
			<div class="login-bottom">
				<span>OR</span><br>
				<!-- <span>New account?</span> -->
				<a class="login-but">Already have an account?</a>
			</div>
		</div> 
		<!-- create account end -->
		<!-- end loginform -->
		<div class="image"></div>
	</div>
	 <script src="logic.js"></script>
	 <script src="./headerLogic.js"></script> 
	 <?php 
	 if(isset($_POST['submit'])){
			$FirstName=$_POST["name"];
			$LastName=$_POST["lastname"];
			$email=$_POST["email"];
			$phone=$_POST["tel_num"];
			$Address=$_POST["Address"];
			$pas=$_POST["pass"];
			$SQL = "INSERT INTO Customer (First_Name,Last_Name,Email_Id,Phone_Num,Address,Password) VALUES ('". $FirstName ."','". $LastName ."','". $email ."',". $phone .",'". $Address ."','". $pas ."')";
			$result = mysqli_query($connection,$SQL);
		}
		
	if (isset($_POST['signin'])){
		
			$email = $_POST['semail'];
			//echo $email;
			$password = $_POST['spass'];
			
			$sql= "SELECT * FROM Customer WHERE Email_ID = '$email' AND Password = 
			'$password'";
			$result = mysqli_query($connection,$sql);
			$check = mysqli_fetch_array($result);
			if(isset($check)){
				//echo 'success';
				$_SESSION['loggedin']=true;
				$_SESSION['userid']=$check['customer_id'];
				//$_SESSION['useremail']=$check['Email_Id'];
				//echo($check['customer_id']);
				echo "<script> location.href='./index.php'; </script>";
    			exit;
				//header('Location: ./index.php');
			}
			else{
				echo 'failure';
			}
		}

		 
	  ?>
</body>
</html>
