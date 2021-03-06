<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VL Grocery</title>

    <!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	
	<!-- Google Icons -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
</head>

<body>
	<!-- Page Preloader -->
    <div id='preloader'>
        <div class='loader'></div>
    </div>
	
	<!-- To Top -->
	<button onclick='topFunction()' id='topBtn' title='Go to top'>To Top</button>

	<!-- Humberger Begins -->
    <div class='humberger__menu__overlay'></div>
    <div class='humberger__menu__wrapper'>
        <div class='humberger__menu__logo'>
            <a href='homepage.php'><img src='img/VL Grocery_whitebg.png' alt='VL Grocery'></a>
        </div>        
        <nav class='humberger__menu__nav mobile-menu'>
            <ul>
                <li><a href='homepage.php'>Home</a></li> <!-- Go to Home page -->
				<li><a href='products.php'>Products</a></li> <!-- Go Products page	-->						
				<li><a href='about_us.php'>About Us</a></li> <!-- Go to About Us page -->
				<li><a href='contact_us.php'>Contact Us</a></li> <!-- Go to Contact Us page -->
				<li><a href='careers.php'>Careers</a></li> <!-- Go to Careers page -->
				<li><a href='settings.php'>Settings</a></li> <!-- Go to Settings page -->
				<li><a href='faq.php'>FAQ</a></li> <!-- Go to FAQ page -->							
            </ul>
        </nav>
        <div id='mobile-menu-wrap'></div>
        <div class='header__top__right__social'>
			<a href='https://www.facebook.com/'><i class='fa fa-facebook'></i></a> <!-- Facebook -->
			<a href='https://twitter.com/'><i class='fa fa-twitter'></i></a> <!-- Twitter -->
			<a href='https://www.linkedin.com/'><i class='fa fa-linkedin'></i></a> <!-- LinkedIn -->            
        </div>        
    </div>
    <!-- Humberger Ends -->
	
	<?php
		//Cookies for Header & Footer Colour Settings
		include("cookies.php");
	?>

    <!-- Header Section Begins -->
	<header class='header' style='background-color:<?php echo "$color"; ?>'>
	
		<div class='container'>
			<div class='row'>
				<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
					<div class='header__logo'>
						<a href='homepage.php'><img src='img/VL Grocery.png' alt='VL Grocery'></a> <!-- Logo -->
					</div>
				</div>
				<nav class='header__menu'>
					<ul>
						<li><a href='homepage.php'>Home</a></li> <!-- Go to Home page -->
						<li><a href='products.php'>Products</a></li> <!-- Go Products page	-->						
						<li><a href='about_us.php'>About Us</a></li> <!-- Go to About Us page -->
						<li><a href='contact_us.php'>Contact Us</a></li><br> <!-- Go to Contact Us page -->
						<li><a href='careers.php'>Careers</a></li> <!-- Go to Careers page -->
						<li><a href='settings.php'>Settings</a></li> <!-- Go to Settings page -->
						<li><a href='faq.php'>FAQ</a></li> <!-- Go to FAQ page -->							
					</ul>
				</nav>
				<?php
					//Session
					include("session.php");
				?>
			</div>
			<div class='humberger__open'>
				<i class="fa fa-bars"></i>
			</div>
		</div>		
		
    </header>
    <!-- Header Section Ends -->

	<!-- Register Form Section Begins -->
	<section class='flex-container'>
	
		<!-- Register Form Left Section Begins -->
		<section class='register-form spad' style='background-image:url(img/home_bg_ori.jpg); background-size:cover; width:40%;'>
		
			<div class='container'>
				<div class='row'>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
						<div class='breadcrumb__text'>
							<br><br>
							<h2>Register now <br>to be a <br>part of us!</h2>
						</div>
					</div>
				</div>
			</div>
		
		</section>
		<!-- Register Form Left Section Ends -->
		
		<!-- Register Form Right Section Begins -->
		<?php
			//If form is submitted, do the following:
			if (isset($_POST['submitted'])) {
				//Retrieve form data
				$fname = $_POST['first_name'];
				$lname = $_POST['last_name'];
				$email = $_POST['email_address'];
				$phone_num = $_POST['hp_number'];
				$address = $_POST['home_address'];
				$username = $_POST['id'];
				$password = $_POST['password'];
				
				//Store to database
				$dbc = mysqli_connect('localhost','root','');
				if(mysqli_select_db($dbc,'205cde_vlgrocery')) {
					$query="INSERT INTO user (username,fname,lname,password,email,phone_num,address)
							VALUES('$username','$fname','$lname','$password','$email','$phone_num','$address')";
								
					if(@mysqli_query($dbc,$query)) {
						mysqli_close($dbc);
						//display success message
						echo "<script>alert('Successful Registration! You will be redirected to the Login page.')</script>";
						//redirect to login
						echo "<script>location.replace('login.php');</script>";
					}
					else {
						echo"ERROR! Table not found!";
						mysqli_close($dbc);
					}
				}
				else {
					echo"ERROR! Database not found!";
					mysqli_close($dbc);
				}
				
			}
			//If form is not submitted, display the form
			else {
				echo "
				<section class='register-form spad' style='background-image:url(img/home_bg.jpg); background-size:cover; width:60%;'>
				 
					<div class='container'>
						<div class='register-form__widget'>	
							<div class='container'>				 		
								<form method='post' action='register.php'>
									<div class='row'>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
											<div class='register__form__title'>
												<h2>Registration Form</h2>
											</div>
										</div>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
											<p style='color: red;'><small><strong>NOTE: All fields are mandatory.</strong></small></p>
										</div>
										<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
											<br><p align='left'><b>First Name:</b></p>
											<input name='first_name' type='text' placeholder='First Name' id='my_firstname' onchange='validateFirstName()' required>
										</div>
										<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
											<br><p align='left'><b>Last Name:</b></p>
											<input name='last_name' type='text' placeholder='Last Name' id='my_lastname' onchange='validateLastName()' required>
										</div>								 
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
											<br><p align='left'><b>Email Address:</b></p>
											<input name='email_address' type='email' placeholder='Email Address' required>
										</div>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
											<br><p align='left'><b>H/P Number:</b></p>
											<input name='hp_number' type='text' placeholder='H/P Number' id='my_hpnumber' onchange='validateHpNumber()' required>
										</div>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
											<br><p align='left'><b>Home Address:</b></p>
											<input name='home_address' type='text' placeholder='Home Address' required>
										</div>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
											<br><p align='left'><b>ID:</b></p>
											<input name='id' type='text' placeholder='ID' required>
										</div>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' align='left'>
											<br><p><b>Password:</b></p>
											<input name='password' type='password' placeholder='Password' style='margin-bottom:10px;' id='my_password' onkeyup='validateConfirmPassword()' onchange='validatePassword()' required>
											<input type='checkbox' onclick='showPasswordFunction()' class='showPassword'>&nbsp <small>Show Password</small>																		
										</div>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' align='left'>
											<br><p><b>Confirm Password:</b></p>
											<input name='confirm_password' type='password' placeholder='Confirm Password' style='margin-bottom:10px;' id='my_confirmpassword' onkeyup='validateConfirmPassword()' required>
											<input type='checkbox' onclick='showConfirmPasswordFunction()' class='showPassword'>&nbsp <small>Show Password</small>
										</div>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
											<br><br><input type='hidden' name='submitted' value='true'/>
											<button type='submit' class='primary-btn'>REGISTER NOW</button>
											<p><small>By clicking the Register Now button, you agree to<br/>our Terms of Use & Privacy Policy.</small></p>
										</div>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
											<br><a href='login.php'><small>Already have an account? Login here!</small></a>
										</div>					
									</div>
								</form>			
							</div>
						</div>
					</div>
					 
				</section>
				";
			}
		?>
		<!-- Register Form Right Section Ends -->
		
	</section>
	<!-- Register Form Section Ends -->
	
    <!-- Footer Section Begins -->
	<footer class='footer spad' style='background-color:<?php echo "$color"; ?>'>
	
		<div class='container'>		
			<div class='row'>
				<div class='col-lg-9 col-md-9 col-sm-9 col-xs-9'>
					<div class='footer__about'>
						<div class='footer__about__logo'>
							<a href='homepage.php'><img src='img/VL Grocery.png' alt='VL Grocery'></a> <!-- Logo -->
						</div>
						<ul>
							<li>Email: <b>vlgrocery@gmail.com</b></li> <!-- Email -->
							<li>Phone: <b>04-1234567</b></li> <!-- Phone number -->
							<li>Address: <b>88, Grocery Road, 11900 Penang</b></li> <!-- Address -->
						</ul>
					</div>
				</div>
				
				<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
					<div class='footer__widget'>
						<h6>Useful Links</h6> <!-- Useful links -->
						<ul>
							<li><a href='about_us.php'>About Us</a></li> <!-- Go to About Us page -->
							<li><a href='contact_us.php'>Contact Us</a></li> <!-- Go to Contact Us page -->
							<li><a href='careers.php'>Careers</a></li> <!-- Go to Careers page -->
							<li><a href='settings.php'>Settings</a></li> <!-- Go to Settings page -->
							<li><a href='faq.php'>FAQ</a></li> <!-- Go to FAQ page -->
						</ul>
					</div>
					<div class='footer__widget'>
						<div class='footer__widget__social'>
							<p><b>Visit us at:</b></p>
							<a href='https://www.facebook.com/'><i class='fa fa-facebook'></i></a> <!-- Facebook -->
							<a href='https://twitter.com/'><i class='fa fa-twitter'></i></a> <!-- Twitter -->
							<a href='https://www.linkedin.com/'><i class='fa fa-linkedin'></i></a> <!-- LinkedIn -->
						</div>
					</div>
				</div>
			</div>
			
			<div class='row'>
				<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
					<div class='footer__copyright'>
						<div class='footer__copyright__text__left'>
							<p>Copyright &copy2021 VL Grocery. All Rights Reserved.</p>
						</div>
						<div class='footer__copyright__text__right'>
							<p>Code of Coduct - Privacy Policy - Terms of Service</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</footer>
    <!-- Footer Section Ends -->

    
	<!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/main2.js"></script>
	
</body>

</html>