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
							<li>Careers</li>
						</ul>
					</div>
                </div>
            </div>
        </div>		
		
    </section>
    <!-- Hero Section Ends -->
	
	<!-- Careers Header Section Begins -->
    <section class='breadcrumb-section set-bg' data-setbg='img/banner-header.jpg'>
	 
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
                    <div class='breadcrumb__text'>
                        <h2>Careers</h2><br>
						<h5>Here are the job vacancies available!</h5>
                    </div>
                </div>
            </div>
        </div>
		 
    </section>
    <!-- Careers Header Section Ends -->
	
	<!-- Careers Section 1 Begins -->
	<section class='careers spad' style='background-image:url(img/careers/manager_translucent.jpg); background-size:cover;'>
	 
		<div class='container'>
            <div class='row'>
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
					<h3><u>Grocery Store Manager</u></h3><br> <!-- Grocery Store Manager -->
					<img src='img/careers/manager.jpg' alt='Manager' width='100%' style='border-radius:12px;'/> <!-- Image -->
				</div>
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>					 
					<h5>Duties & Responsibilities:</h5> <!-- Duties & Responsibilities -->
					<p>- Hires and trains new employees.
						<br/>- Supervises retail operations.
						<br/>- Ensures customer satisfaction.
						<br/>- Distributes and schedules work among employees.
						<br/>- Handles workplace conflicts.
						<br/>- Handles paperwork.
						<br/>- Answers inquiries regarding products.</p>
					<h5>Qualifications:</h5> <!-- Qualifications -->
					<p>- Previous experience in grocery store industry.
						<br/>- 20 years old or above.
						<br/>- Possesses at least Diploma in Business Management.
						<br/>- Possesses leadership and communication skills.
						<br/>- Possesses basic knowledge of using computers.</p>
					<h5>Salary:</h5> <!-- Salary -->
					<p>RM260,000 to RM325,000 per year.</p>
					<a href='careers.php#apply_now'><button class='primary-btn'>Apply Now</button></a><br/><br/><hr/> <!-- Go to application form located below -->               
                </div>
            </div>
        </div>
		 
	</section>	 
	<!-- Careers Section 1 Ends -->
	
	<!-- Careers Section 2 Begins -->
	<section class='careers spad' style='background-image:url(img/careers/cashier_translucent.jpg); background-size:cover;'>

		<div class='container'>
            <div class='row'>
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
					<h3><u>Grocery Store Cashier</u></h3><br> <!-- Grocery Store Cashier -->
					<img src='img/careers/cashier.jpg' alt='Cashier' width='100%' style='border-radius:12px;'/> <!-- Image -->
                </div>
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>					 
					<h5>Duties & Responsibilities:</h5> <!-- Duties & Responsibilities -->
					<p>- Assists customers with final purchases at checkout counter.
						<br/>- Scans coupons.
						<br/>- Ensures customer satisfaction.
						<br/>- Answers inquiries regarding products.</p>
					<h5>Qualifications:</h5> <!-- Qualifications -->
					<p>- No educational qualifications or working experience required.
						<br/>- 18 years old or above.
						<br/>- Possesses polite, friendly and patient attitudes.
						<br/>- Possesses basic knowledge of using computers.</p>
					<h5>Salary:</h5> <!-- Salary -->
					<p>RM130,000 per year.</p>
					<a href='careers.php#apply_now'><button class='primary-btn'>Apply Now</button></a><br/><br/><hr/> <!-- Go to application form located below -->                
                </div>
            </div>
        </div>
		 
	</section>	 
	<!-- Careers Section 2 Ends -->
	
	<!-- Careers Section 3 Begins -->
	<section class='careers spad' style='background-image:url(img/careers/bagger_translucent.jpg); background-size:cover;'>

		<div class='container'>
            <div class='row'>
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
					<h3><u>Grocery Store Bagger</u></h3><br> <!-- Grocery Store Bagger -->
					<img src='img/careers/bagger.jpg' alt='Bagger' width='100%' style='border-radius:12px;'/> <!-- Image -->
                </div>
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>					 
					<h5>Duties & Responsibilities:</h5> <!-- Duties & Responsibilities -->
					<p>- Assists customers or cashiers with grocery baggings.
						<br/>- Answers inquiries regarding products.</p>
					<h5>Qualifications:</h5> <!-- Qualifications -->
					<p>- No educational qualifications or working experience required.
						<br/>- 18 years old or above.
						<br/>- Possesses polite, friendly and helpful attitudes.</p>
					<h5>Salary:</h5> <!-- Salary -->
					<p>RM65,000 to RM87,000 per year.</p><br><br><br>
					<a href='careers.php#apply_now'><button class='primary-btn'>Apply Now</button></a><br/><br/><hr/> <!-- Go to application form located below -->
                </div>
            </div>
        </div>
		 
	</section>	 
	<hr/>
	<!-- Careers Section 3 Ends -->
	
	<!-- Careers Form Section Begins -->
    <section class='careers-form spad' style='background-image:url(img/home_bg.jpg); background-size:cover;' id='apply_now'>
	 
        <div class='container'>
			<div class='careers-form__widget'>	
				<div class='container'>
					<?php
						//If form is submitted, do the following:
						if (isset($_POST['submitted'])) {
							//Retrieve form data
							$fname = $_POST['first_name'];
							$lname = $_POST['last_name'];
							$email = $_POST['email_address'];
							$phone_num = $_POST['hp_number'];
							$job_pref = $_POST['job_preference'];
							$brief_intro = $_POST['brief_introduction'];
							
							//Store to database
							$dbc = mysqli_connect('localhost','root','');
							if(mysqli_select_db($dbc,'205cde_vlgrocery')) {
								$query="INSERT INTO career (fname,lname,email,phone_num,job_pref,brief_intro)
										VALUES('$fname','$lname','$email','$phone_num','$job_pref','$brief_intro')";
											
								if(@mysqli_query($dbc,$query)) {
									mysqli_close($dbc);
									//display success message
									echo "<script>alert('Your application form has been successfully submitted! We will keep you updated via email.')</script>";
									//redirect to Careers
									echo "<script>location.replace('careers.php');</script>";
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
							<form method='post' action='careers.php'>
								<div class='row'>
									<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
										<div class='careers__form__title'>
											<h2>Apply Now!</h2><br/>
											<h6>Email your resume to vlgrocery@gmail.com</h6>
										</div>
									</div>
									<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
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
									<div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
										<br><p align='left'><b>Email Address:</b></p>
										<input name='email_address' type='email' placeholder='Your email address' required>
									</div>
									<div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
										<br><p align='left'><b>H/P Number:</b></p>
										<input name='hp_number' type='text' placeholder='Your h/p number' id='my_hpnumber' onchange='validateHpNumber()' required>
									</div>
									<div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
										<br><p align='left'><b>Job Preference:</b></p>
										<input name='job_preference' type='text' placeholder='Your job preference' required>
									</div>
									<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left'>
										<br><p align='left'><b>Brief Introduction:</b></p>
										<textarea name='brief_introduction' placeholder='Tell us briefly about yourself...' required></textarea>
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
    <!-- Careers Form Section Ends -->
	
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