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

	<!-- Login Form Section Begins -->
	<section class='flex-container'>
	
		<!-- Login Form Left Section Begins -->
		<section class='sign__in-form spad' style='background-image:url(img/home_bg_ori.jpg); background-size:cover; width:40%;'>
		
			<div class='container'>
				<div class='row'>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
						<div class='breadcrumb__text'>
							<br><br>
							<h2>Login to your <br>account now!</h2>
						</div>
					</div>
				</div>
			</div>
		
		</section>
		<!-- Login Form Left Section Ends -->
		
		<!-- Login Form Right Section Begins -->
		<section class='sign__in-form spad' style='background-image:url(img/home_bg.jpg); background-size:cover; width:60%;'>
		
			<div class='container'>
				<div class='sign__in-form__widget'>	
					<div class='container'>		
						<?php
							//Check whether variable is set or declared
							if (isset($_POST['submitted'])) {
								//Retrieve form data
								$id = $_POST['id'];
								$password = $_POST['password'];
								//Variables to display error messages
								$idError = "";
								$passwordError = "";
								$id_passwordError = "";
								$problem = false; //Variable determining if there is any error
								$found = false;
								
								if (empty($id) || empty($password)) {
									//Check whether ID is empty
									if (empty($id)) {
										$idError = "ID cannot be empty! Please fill out this field.";
										$problem = true;
									}

									//Check whether password is empty
									if (empty($password)) {
										$passwordError = "Password cannot be empty! Please fill out this field.";
										$problem = true;
									}
								}			
								else {
									//Retrieve data from database
									$dbc = mysqli_connect('localhost','root','');
									@mysqli_select_db($dbc,'205cde_vlgrocery');
									if($dbc){
										$result=mysqli_query($dbc,"SELECT username,password FROM user");
										while($row=mysqli_fetch_array($result)){
											if($id==$row['username']&&$password==$row['password']){
												$found=true;
											}
										}
										if($found==false){
											$id_passwordError = "Incorrect ID or Password!";
											$problem = true;
										}
									}								
								}
								
								//If there is problem, redisplay the form with appropriate error message
								if ($problem) {
									echo "
									<form method='post' action='login.php'>
										<div class='row'>
											<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
												<div class='sign__in__form__title'>
													<h2>Login Form</h2>
												</div>
											</div>
											<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
												<p style='color: red;'><small><strong>NOTE: All fields are mandatory.</strong></small></p>
											</div>
											<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
											</div>
											<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
												<br><p align='left'><b>ID:</b></p>
												<input name='id' type='text' placeholder='Enter ID' required>
												<p style='color: red;'>$idError</p>
											</div>
											<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
											</div>
											<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
											</div>
											<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6' align='left'>
												<br><p><b>Password:</b></p>
												<input name='password' type='password' placeholder='Enter password' style='margin-bottom:10px;' id='my_password' required>
												<input type='checkbox' onclick='showPasswordFunction()' class='showPassword'>&nbsp <small>Show Password</small>
												<p style='color: red;'>$passwordError</p>
												<p style='color: red;'>$id_passwordError</p>
											</div>
											<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
											</div>								
											<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
												<br><br><input type='hidden' name='submitted' value='true'/>
												<button type='submit' class='primary-btn'>LOGIN</button>
											</div>
											<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
												<br><br><p>Login using:</p>
												<div class='footer__widget'>
													<div class='footer__widget__social'>
														<a href='https://www.facebook.com/'><i class='fa fa-facebook'></i></a>
														<a href='https://twitter.com/'><i class='fa fa-twitter'></i></a>
														<a href='https://www.linkedin.com/'><i class='fa fa-linkedin'></i></a>
													</div>
												</div>
											</div>
											<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
												<a href='register.php'><small>New user? Register here!</small></a>								
											</div>
										</div>
									</form>
									";
								}
								//If there is no problem,redirect user to Home page after successful login
								else {
									//Session
									if (isset($_POST['id'])) {
										session_start(); //Start the session
										
										//Store session variable values
										$_SESSION['id'] = $_POST['id'];
										$_SESSION['time'] = time();
										
										//For admin
										if ($_POST['id'] == "Admin") {
											echo "<script>location.replace('admin_control_panel.php');</script>"; //Redirect user to Admin Control Panel page
										}
										//For normal user
										else {
											echo "<script>location.replace('homepage.php');</script>"; //Redirect user to Home page
										}
									}
								}

							}
							//Display form
							else {
								echo "
								<form method='post' action='login.php'>
									<div class='row'>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
											<div class='sign__in__form__title'>
												<h2>Login Form</h2>
											</div>
										</div>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
											<p style='color: red;'><small><strong>NOTE: All fields are mandatory.</strong></small></p>
										</div>
										<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
										</div>
										<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
											<br><p align='left'><b>ID:</b></p>
											<input name='id' type='text' placeholder='Enter ID' required>
										</div>
										<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
										</div>
										<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
										</div>
										<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6' align='left'>
											<br><p><b>Password:</b></p>
											<input name='password' type='password' placeholder='Enter password' style='margin-bottom:10px;' id='my_password' required>
											<input type='checkbox' onclick='showPasswordFunction()' class='showPassword'>&nbsp <small>Show Password</small>
										</div>
										<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
										</div>								
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
											<br><br><input type='hidden' name='submitted' value='true'/>
											<button type='submit' class='primary-btn'>LOGIN</button>
										</div>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
											<br><br><p>Login using:</p>
											<div class='footer__widget'>
												<div class='footer__widget__social'>
													<a href='https://www.facebook.com/'><i class='fa fa-facebook'></i></a>
													<a href='https://twitter.com/'><i class='fa fa-twitter'></i></a>
													<a href='https://www.linkedin.com/'><i class='fa fa-linkedin'></i></a>
												</div>
											</div>
										</div>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
											<a href='register.php'><small>New user? Register here!</small></a>								
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
		<!-- Login Form Right Section Ends -->
	
	</section>
	<!-- Login Form Section Ends -->
	
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