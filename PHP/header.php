<?php
	// session_start();
	$Account='';
	if(isset($_SESSION['userid']) && $_SESSION['loggedin']==true) {
		$Account.='<a href="./AccountInfo.php"><button class="header-button">MY ACCOUNT</button></a>';
	}
	else{
		$Account.='<a href="loginform.php"><button class="header-button">SIGN IN</button></a>';
	}
	echo'
	<!-- mobile navigation  -->
	<header class="phone-nav">
			<div class="container flex-space">
					<div class="icon-box ">

						<i class="fa fa-bars nav-toggle" style="font-size:26px;"></i>
					</div>
					<div class="logo logo-mobile">
						<img src="Images/logo.png" class="logo-mobile-img"/> 
					</div>	
				'.$Account.'
			</div>
			<div class="mobile-nav-bar hide">
							
							<ul class="nav-bar--primary">
								<li class="nav-items"><a href="index.php">HOME</a></li>
								<li class="nav-items"><a href="#footer-tag">CONTACT US </a></li>
								<li class="nav-items"><a href="Gallery.php">GALLERY </a></li>
								<li class="nav-items"><a href="menu.php">MENU</a></li>
								<li class="nav-items"><a href="Aboutus.php">ABOUTUS</a></li>
							</ul>
							<ul class=" nav-bar--secondary">
								<a href="cartpage.php">
									<button class="cart-button flex">
									<span class="cart-icon flex"></span>
									MY CART</button>
								</a>
							</ul>

			</div>
	</header>
<!-- mobiles navigations ends -->
<!-- desktop navigation  -->
	<header class="desktop--nav">
			<div class="container">
					<div class="nav-bar flex-space">
							
							<ul class="flex nav-bar--primary">
								<div class="logo">
									<img src="Images/logo.png" class="logo-img"/> 
								</div>
								<li class="nav-items"><a href="index.php">HOME</a></li>
								<li class="nav-items"><a href="#footer-tag">CONTACT US </a></li>
								<li class="nav-items"><a href="Gallery.php">GALLERY </a></li>
								<li class="nav-items"><a href="menu.php">MENU</a></li>
								<li class="nav-items"><a href="Aboutus.php">ABOUTUS</a></li>
							</ul>
							<ul class="flex-space nav-bar--secondary">
								<a href="cartpage.php">
									<button class="cart-button flex">
									<span class="cart-icon flex"></span>
									MY CART</button>
								</a>
								'.$Account.'
							</ul>

					</div>
					
			</div>
	</header>
<!-- desktop navigation ends -->
	';
?>

