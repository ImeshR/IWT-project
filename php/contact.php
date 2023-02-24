<?php

	@include 'config.php';

	if(isset($_POST['submit'])){

		$first_name = mysqli_real_escape_string($conn, $_POST['f_name']);
		$last_name = mysqli_real_escape_string($conn, $_POST['l_name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$mobile =$_POST['phone'];
		$message =$_POST['msg'];

		 $insert = "INSERT INTO contact(first_name, last_name, c_email, c_mobile, msg) VALUE('$first_name', '$last_name', '$email', '$mobile', '$message')";
		 mysqli_query($conn, $insert);

	}


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact Us Page</title>
		<link rel="stylesheet" href="../css/contact.css">

	</head>
	<body>
	    <div class="header">
        <div class="navbar">
            <img class="logo" src="../images/My project.png">
            <div class="account">
                <ul>
                    <li><a class="login" href="login.php"><img src="../images/login.png">Login</a></li>
                    <li><a class="singup" href="register.php"><img src="../images/Singup.png">Sign Up</a></li>
                    <li><a class="singup" href="user_page.php"><img src="../images/user.png">My account</a></li>
                </ul>
            </div>
        </div>
        <div class="menu-container">
            <ul>
                <li><a href="../html/home.html">Home</a></li>
                <li><a href="../php/gallery.php">Gallery</a></li>
                <li><a href="../php/packages.php">Packages</a></li>
                <li><a href="../php/aboutus.php">About Us</a></li>
            </ul>
        </div>

       
    </div>
	<!--my**************************************************************************-->
		<div class="contactUs">
			<div class="title">
				<h5>Get in Touch</h5>
				
			</div>
			<div class="box">
				<!-- Form -->
				<div class="contact form">
					<h3>We are here to help and answer for you. Message us with any question. We would be happy to answer your questions</h3>
					<form method="POST">
						<div class="formBox">
							<div class="row50">
								<div class="inputBox">
									<span>First Name</span>
									<input type="text" name="f_name" placeholder="John">
								</div>
								<div class="inputBox">
									<span>Last Name</span>
									<input type="text" name="l_name" placeholder="Doe">
								</div>
							</div>
						
							<div class="row50">
								<div class="inputBox">
									<span>Email</span>
									<input type="text" name="email" placeholder="johndoe@gmail.com">
								</div>
									<div class="inputBox">
									<span>Mobile</span>
									<input type="text" name="phone" placeholder="+94 987 654 321">
								</div>
							</div>
						
							<div class="row100">
								<div class="inputBox">
									<span>Message</span>
									<textarea name="msg" placeholder="Write your message here..."></textarea>
								</div>
							</div>
							
							<div class="row100">
								<div class="inputBox">
									<input name="submit"  type="submit" value="Send">
								</div>
							</div>
						</div>
					</form>
				</div>
				
				<!-- Info Box -->
				<div class="contact info">
					<h3>Contact Info</h3>
					<div class="infoBox">
						<div>
							<span><ion-icon name="location-outline"></ion-icon></span>
							<p>Hotel Sapphire, Dadella,<br>Galle</p>
						</div>
						<div>
							<span><ion-icon name="mail"></ion-icon></span>
							<p>hotelsapphire@gmail.com</p>
						</div>
						<div>
							<span><ion-icon name="call"></ion-icon></span>
							<p>+94 115 067 235</p>
						</div>
						
						<!-- social Media -->
						<ul class="sci">
							<li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
							<li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
							<li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
							<li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
						</ul>
					</div>
				</div>
				
				<!-- Map -->
				<div class="contact map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3149.110301342615!2d80.19411713117357!3d6.045332445406998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slk!4v1652509189433!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>	
			</div>
		</div>
		
		<!--*****************************************footer********************************************************-->	
			
    <div class="footer">
        <div class="footer1">
            <ul>
                <li><a href="#">Privacy&Policy</a></li>
                <li><a href="#">Trem & Condition</a></li>
            </ul>
        </div>
        <div class="footer2">
            <ul>
                <li><a href="#"><img src="../images/instagram.png">Instagram</a></li>
                <li><a href="#"><img src="../images/facebook.png">Facebook</a></li>
                <li><a href="#"><img src="../images/tripadvisor.png">TripAdvisor</a></li>
            </ul>
        </div>
    </div>
		<!--*****************************************footer********************************************************-->	
			
			
			
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</body>