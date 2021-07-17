<?php
	echo "<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>";
		echo "<div class='header__top__right'>";
			if(!isset($_SESSION)) {
				session_start(); //Start the session
			}
			
			if(isset($_SESSION['id'])) {
				//For admin
				if ($_SESSION['id'] == "Admin") {
					echo "<div class='header__top__right__auth'>";
						echo "<a href='homepage.php?logout=true'><i class='fa fa-sign-out'></i>Logout</a>"; //Logout
					echo "</div><br>";
				}
				//For normal user
				else {
					echo "<div class='header__top__right__auth'>";
						echo "<a href='products.php#shopping-cart'><i class='fa fa-shopping-cart'></i>Shopping Cart</a>"; //Shopping Cart
					echo "</div>";
					echo "<div class='header__top__right__auth'>";
						echo "<p>|</p>";
					echo "</div>";
					echo "<div class='header__top__right__auth'>";
						echo "<a href='homepage.php?logout=true'><i class='fa fa-sign-out'></i>Logout</a>"; //Logout
					echo "</div><br>";
				}
			}
			else {
				echo "<div class='header__top__right__auth'>";
					echo "<a href='login.php'><i class='fa fa-user'></i>Login</a>"; //Go to Login page
				echo "</div>";
				echo "<div class='header__top__right__auth'>";
					echo "<p>|</p>";
				echo "</div>";
				echo "<div class='header__top__right__auth'>";
					echo "<a href='register.php'><i class='fa fa-user'></i>Register</a>"; //Go to Register page
				echo "</div><br>";
			}
	
			echo "<div class='header__top__right__auth'>";
				/* --- SESSION --- */
				//If the user has logged in
				if(isset($_SESSION['id'])) {
					$id = $_SESSION['id'];
					$time = $_SESSION['time'];
					
					date_default_timezone_set('Asia/Kuala_Lumpur');
					
					echo "<p>Welcome, <b>$id</b>! <br/> <small>You have logged in since <b>" . date('g:i a', $time) . "</b></small></p>";
					
					//When logout action is submitted
					if(isset($_GET['logout'])) {
						session_destroy(); //Destroy the session
						
						echo "<script>alert('You have successfully logged out!')</script>"; //Display success message
						echo "<script>location.replace('homepage.php');</script>"; //Redirect user to Home page
					}
				}
			echo "</div>";
		echo "</div>";
	echo "</div>";
?>