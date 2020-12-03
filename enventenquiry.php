<!DOCTYPE html>
<html>
<head>
	<title>Envent Enquiry Page</title>
	<link rel="stylesheet" type="text/css" href="CSS/enventenquiry.css">
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

<!-- middlepage -->
<div class="mid-page">
		<div class="box">
			<div class="envent-detail">
				<div class="event-title">
					<h1>EVENT</h1>
				</div>
				<div class="mid-par">
					<p>We are here to celebrate all your special events of your life.
						and make you feel special. we celebrate some special kind of events like private party, wedding, birdthday, puja etc
					</p>
				</div>
			</div>
			<div class="image-container">
				<img src="Images/pdfimage.png" alt="Event" class="image">
			</div>
		</div>
	<!-- box1 -->
	<!-- box2 -->
		<div class="box reverse-flex">
			<div class="envent-detail Design-text">
				<div class="event-title">
					<h1>Wedding</h1>
				</div>
				<div class="mid-par">
					<p>
					Design, planning & execution of complete wedding events from invitation card selection, menu to venue selection.
					</p>
				</div>
			</div>
			<div class="image-container">
					<img src="Images/wedding12.jpg" alt="Event" class="image mySlides">
					<img src="Images/wedding2.jpg" alt="Event" class="image mySlides">
					<img src="Images/wedding3.jpg" alt="Event" class="image mySlides">
				</div>

		</div>
	<!-- box2 -->
		<!-- box3 -->
		<div class="box">
			<div class="envent-detail">
				<div class="event-title">
					<h1>Private Dining Room</h1>
				</div>
				<div class="mid-par">
					<p>
					Our Private Dining Room allows you to conduct your meeting in a quiet, beautiful atmosphere while being able to have food and drinks served at your staff. We are here to take care of all  your Business meeting and Private party`s.
					</p>
				</div>
			</div>
			<div class="image-container">
				<img src="Images/greenroom3.jpg" alt="Event" class="image mySlide">
				<img src="Images/greenroom4.jpg" alt="Event" class="image mySlide">
				<img src="Images/greenroom2.jpg" alt="Event" class="image mySlide">
			</div>
		</div>
	<!-- box3 -->
		<!-- box4 -->
		<div class="box reverse-flex">
			<div class="envent-detail Design-text">
				<div class="event-title">
					<h1>Brithday</h1>
				</div>
				<div class="mid-par">
					<p>
						Celebrate a big day of your loved ones and select decoration, themes, music etc. we will try to match your taste to make you feel special and your loved one.
					</p>
				</div>
			</div>
			<div class="image-container">
				<img src="Images/birthday3.jpg" alt="Event" class="image birthdayclass">
				<img src="Images/birthday2.jpg" alt="Event" class="image birthdayclass">
				<img src="Images/birthday1.jpg" alt="Event" class="image birthdayclass">
			</div>
		</div>
	<!-- box4 -->
<!-- box5 -->
		<div class="box ">
			<div class="envent-detail">
				<div class="event-title">
					<h1>EVENT ENQUIRY</h1>
				</div>
				<div class="mid-par	">
						<div class="input-box--1">
							<input type="text" name="fname" placeholder="NAME" class="input-text"><br>
							<input type="email" placeholder="EMAIL" class="input-text">
						</div>
						<div class="input-box flex-space input-box-text-design">
								<div class="chage-design">
									<label>Contact Number</label><br>
									<input type="tel" placeholder="Mobile" class="input-box-pro">
								</div>
								<div class="chage-design">
									<label>Lunch or Dinner</label><br>
									 <select class="input-box--change">
										<option value="Lunch">Lunch</option>
										<option value="dinner">Dinner</option>
									</select>
								</div>
						</div>
						<div class="input-box flex-space input-box-text-design ">
							<div class="chage-design">
								<label>Date of Event</label><br>
								<input type="date" class="input-box-pro">
							</div>
							<div class="chage-design">
								<label>Number of Guests</label><br>
								<input type="number" name="" placeholder="Guests" class="input-box-pro">
							</div>
						</div>
						<div class="input-box flex-space input-box-text-design">
							<div class="chage-design">
								<label>Nature of Events</label><br>
								 <select class="input-box-pro">
									<option value="Lunch">Engagement party</option>
									<option value="birthday">Birthday</option>
									<option value="private party">Private party</option>
									<option value="wedding">Wedding</option>
									<option value="wedding">Seminar</option>
									<option value="wedding">Christmas party</option>
									<option value="wedding">Business Meeting</option>
									<option value="wedding">Launching Event</option>
									<option value="wedding">Other's</option>
								</select>
							</div>
							<div class="chage-design">
							<label>Event Time </label><br>	
							 <select class="input-box--change design-box">
							 	<option value="Lunch">Lunch 12:00AM</option>
							 	<option value="Lunch">Lunch 1:00PM</option>
							 	<option value="Lunch">Lunch 2:00PM</option>
							 	<option value="Lunch">Lunch 3:00PM</option>
							 	<option value="Lunch">Dinner 7:00PM</option>
							 	<option value="Lunch">Dinner 8:00PM</option>
							 	<option value="Lunch">Dinner 9:00PM</option>
							 	<option value="Lunch">Dinner 10:00PM</option>
							</select>
							</div>
						</div>
						<div class="input-box">
								<label>Feedback</label>
								<textarea cols="30" rows="3" placeholder="Message......" class="input-box-pro textarea-box"></textarea><br>
						</div>
						<div class="input-box" >
							<button class="button-box">Submit</button>
						</div>
				</div>
			</div>
			<div class="image-container">
				<img src="Images/contact-page-8.jpg" alt="Event" class="image">
			</div>
		</div>
<!-- box5 -->
</div>
<!-- middlepage -->
<!-- start of footer -->
<?php
	include './PHP/footer.php';
?>
<!-- end of footer -->

<script type="text/javascript">
	  var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 6000); // Change image every 2 seconds
}

 var image22 = 0;
IMAGE();

function IMAGE() {
  var i;
  var x = document.getElementsByClassName("mySlide");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  image22++;
  if (image22 > x.length) {image22 = 1}    
  x[image22-1].style.display = "block";  
  setTimeout(IMAGE, 6000); // Change image every 2 seconds
}


 var birthday1 = 0;
birthday();

function birthday() {
  var i;
  var x = document.getElementsByClassName("birthdayclass");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  birthday1++;
  if (birthday1 > x.length) {birthday1= 1}    
  x[birthday1-1].style.display = "block";  
  setTimeout(birthday,6000); // Change image every 2 seconds
}
</script>
<script src="./headerLogic.js"></script>
</body>
</html>