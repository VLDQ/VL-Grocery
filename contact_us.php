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

    <!-- Hero Section Begins -->
    <section class='hero hero-normal' style='background-image:url(img/home_bg.jpg); background-size:cover;'>
		
		<br>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
                    <div class='hero__categories'>
                        <div class='hero__categories__all'>
                            <span>All Categories</span>
                        </div>
                        <ul>
                            <li><a href='products.php#products'>Rice</a></li>
							<li><a href='products.php#products'>Noodles & Pasta</a></li>
                            <li><a href='products.php#products'>Fish & Fresh Meat</a></li>
                            <li><a href='products.php#products'>Eggs & Dairy Products</a></li>
                            <li><a href='products.php#products'>Fresh Vegetables</a></li>
                            <li><a href='products.php#products'>Fresh Fruits</a></li>
                        </ul>
                    </div>
                </div>
				
                <div class='col-lg-9 col-md-9 col-sm-9 col-xs-9'>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
						<!-- Breadcrumbs -->
						<ul class='breadcrumb'>
							<li><a href='homepage.php'>Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
                </div>
            </div>
        </div>		
		
    </section>
    <!-- Hero Section Ends -->

    <!-- Contact Us Header Section Begins -->
    <section class='breadcrumb-section set-bg' data-setbg='img/banner-header.jpg'>
	 
		<div class='container'>
            <div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
                    <div class='breadcrumb__text'>
                        <h2>Contact Us</h2><br>
						<h5>Feel free to contact us if you have any questions.</h5>
                    </div>
                </div>
            </div>
        </div>
		 
    </section>
    <!-- Contact Us Header Section Ends -->

    <!-- Contact Us Section Begins -->
    <section class='contact spad' style='background-image:url(img/home_bg.jpg); background-size:cover;'>
	 
        <div class='container'>
            <div class='row'>
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center'>
                    <div class='contact__widget'>
                        <span class='icon_mail_alt'></span>
                        <h4>Email</h4> <!-- Email -->
                        <p>vlgrocery@gmail.com</p>
                    </div>
                </div>
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center'>
                    <div class='contact__widget'>
                        <span class='icon_pin_alt'></span>
                        <h4>Address</h4> <!-- Address -->
                        <p>88, Grocery Road, 11900 Penang</p>
                    </div>
                </div>
                <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center'>
                    <div class='contact__widget'>
                        <span class='icon_phone'></span>
                        <h4>Phone</h4> <!-- Phone number -->
                        <p>04-1234567</p>
                    </div>
                </div>
                <div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center'>
                    <div class='contact__widget'>
                        <span class='icon_clock_alt'></span>
                        <h4>Operation Hours</h4> <!-- Operation Hours -->
                        <p>10:00am to 22:00pm daily</p>
                    </div>
                </div>
            </div>
        </div>
		 
    </section>
	<hr/>
    <!-- Contact Us Section Ends -->
	
	<!-- Map Begins -->
    <div class='map'>
        <iframe
            src='https://maps.google.com/maps?q=inti%20international%20college%20penang&t=&z=13&ie=UTF8&iwloc=&output=embed'
            height='500' width='600' style='border:0;' allowfullscreen='' aria-hidden='false' tabindex='0'></iframe>
        <div class='map-inside'>
            <i class='icon_pin'></i>
            <div class='inside-widget'>
                <h4>We are Here!</h4>               
            </div>
        </div>
    </div>
	<hr/>
    <!-- Map Ends -->

    <!-- Contact Form Section Begins -->
    <section class='contact-form spad' style='background-image:url(img/home_bg.jpg); background-size:cover;'>
	 
        <div class='container'>
			<div class='contact-form__widget'>			
				<div class='container'>
					<?php
						//If form is submitted, do the following:
						if (isset($_POST['submitted'])) {
							//Retrieve form data
							$fname = $_POST['first_name'];
							$lname = $_POST['last_name'];
							$email = $_POST['email_address'];
							$phone_num = $_POST['hp_number'];
							$message = $_POST['message'];
							
							//Store to database
							$dbc = mysqli_connect('localhost','root','');
							if(mysqli_select_db($dbc,'205cde_vlgrocery')) {
								$query="INSERT INTO contact_us (fname,lname,email,phone_num,message)
										VALUES('$fname','$lname','$email','$phone_num','$message')";
											
								if(@mysqli_query($dbc,$query)) {
									mysqli_close($dbc);
									//display success message
									echo "<script>alert('Your form has been successfully submitted! We will get back to you soon.')</script>";
									//redirect to Contact Us
									echo "<script>location.replace('contact_us.php');</script>";
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
							<form method='post' action='contact_us.php'>
								<div class='row'>						
									<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
										<div class='contact__form__title'>
											<h2>Contact Us Now!</h2>
										</div>
									</div>
									<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' align='center'>
										<p style='color: red;'><small><strong>NOTE: All fields are mandatory.</strong></small></p>
									</div>
									<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
										<br><p align='left'><b>First Name:</b></p>
										<input name='first_name' type='text' placeholder='Your first name' id='my_firstname' onchange='validateFirstName()' required>
									</div>
									<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
										<br><p align='left'><b>Last Name:</b></p>
										<input name='last_name' type='text' placeholder='Your last name' id='my_lastname' onchange='validateLastName()' required>
									</div>
									<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
										<br><p align='left'><b>Email Address:</b></p>
										<input name='email_address' type='email' placeholder='Your email address' required>
									</div>
									<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
										<br><p align='left'><b>H/P Number:</b></p>
										<input name='hp_number' type='text' placeholder='Your h/p number' id='my_hpnumber' onchange='validateHpNumber()' required>
									</div>
									<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left'>
										<br><p align='left'><b>Message:</b></p>
										<textarea name='message' placeholder='Enter a message...' required></textarea>
									</div>
									<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' align='right'>
										<input type='hidden' name='submitted' value='true'/>
										<button type='submit' class='primary-btn'>SUBMIT</button>
									</div>						
								</div>
							</form>
							";
						}
					?>
				</div>				
			</div>
        </div>
		 
    </section>
    <!-- Contact Form Section Ends -->

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