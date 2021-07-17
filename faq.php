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
							<li>FAQ</li>
						</ul>
					</div>
                </div>
            </div>
        </div>		
		
    </section>
    <!-- Hero Section Ends -->
	
	<!-- FAQ Header Section Begins -->
    <section class='breadcrumb-section set-bg' data-setbg='img/banner-header.jpg'>
	 
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
                    <div class='breadcrumb__text'>
                        <h2>FAQ</h2><br>
						<h5>Top 10 Frequently Asked Questions</h5>
					</div>
                </div>
            </div>
        </div>
		 
    </section>
    <!-- FAQ Header Section Ends -->
	
	<!-- FAQ Section Begins -->
	<section class='faq spad' style='background-image:url(img/home_bg.jpg); background-size:cover;' align='center'>
	 
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='faq__categories1'>
                        <div class='faq__categories__all1'>
                            <span>1. How do I order groceries online?</span>
                        </div>
                        <ul>
                            <li><p style='color: black;'><br>It’s simple and easy! Use VL Grocery online portal, add your favourite items to the cart, enter a delivery location, and place your order.<br><br></p></li>
                        </ul>
                    </div>
                </div>
            </div>
			<br><br>
		
			<div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='faq__categories2'>
                        <div class='faq__categories__all2'>
                            <span>2. Is there a minimum order amount?</span>
                        </div>
                        <ul>
                            <li><p style='color: black;'><br>No! There is no minimum order amount. However, we cheer you to shop more to save more!<br><br></p></li>
                        </ul>
                    </div>
                </div>				 
			</div>
			<br><br>
			 
			<div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='faq__categories3'>
                        <div class='faq__categories__all3'>
                            <span>3. Are there a maximum number of orders allowed in a day?</span>
                        </div>
                        <ul>
                            <li><p style='color: black;'><br>No! You can order as much as you want!<br><br></p></li>
                        </ul>
                    </div>
                </div>				 
			</div>
			<br><br>
			 
			<div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='faq__categories4'>
                        <div class='faq__categories__all4'>
                            <span>4. Can I order the items that need to be kept cold or warm?</span>
                        </div>
                        <ul>
                            <li><p style='color: black;'><br>Yes! We will shop for and deliver your groceries with the same care that you would. Special attention is paid to items that need to be kept cold or warm. VL Grocery Shoppers will make sure to get them to you quickly and safely!<br><br></p></li>
                        </ul>
                    </div>
                </div>				 
			</div>
			<br><br>
			 
			<div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='faq__categories5'>
                        <div class='faq__categories__all5'>
                            <span>5. What if the store is out of something that I ordered?</span>
                        </div>
                        <ul>
                            <li><p style='color: black;'><br>Your shopper will contact you to see if you would like a substitute item!<br><br></p></li>
                        </ul>
                    </div>
                </div>				 
			</div>
			<br><br>
			 
			<div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='faq__categories6'>
                        <div class='faq__categories__all6'>
                            <span>6. Where do you deliver?</span>
                        </div>
                        <ul>
                            <li><p style='color: black;'><br>We currently deliver within Penang Island only. However, we will be soon expanding to other cities and states.<br><br></p></li>
                        </ul>
                    </div>
                </div>				 
			</div>
			<br><br>
			 
			<div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='faq__categories7'>
                        <div class='faq__categories__all7'>
                            <span>7. Can I have groceries delivered to family or friends?</span>
                        </div>
                        <ul>
                            <li><p style='color: black;'><br>Absolutely! We love that our members are so giving. You can send groceries to anyone as long as they are in Penang Island.<br><br></p></li>
                        </ul>
                    </div>
                </div>
			</div>
			<br><br>
			 
			<div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='faq__categories8'>
                        <div class='faq__categories__all8'>
                            <span>8. What days and times can I get my grocery orders delivered?</span>
                        </div>
                        <ul>
                            <li><p style='color: black;'><br>We deliver 7 days a week with the exception of public holidays.<br><br></p></li>
                        </ul>
                    </div>
                </div>				 
			</div>
			<br><br>
			 
			<div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='faq__categories9'>
                        <div class='faq__categories__all9'>
                            <span>9. What payment methods can I use?</span>
                        </div>
                        <ul>
                            <li><p style='color: black;'><br>You can use all the major credit cards such as Visa, MasterCard, or American Express.<br><br></p></li>
                        </ul>
                    </div>
                </div>				 
			</div>
			<br><br>
			 
			<div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='faq__categories10'>
                        <div class='faq__categories__all10'>
                            <span>10. How to contact customer service?</span>
                        </div>
                        <ul>
                            <li><p style='color: black;'><br>If you have question regarding our online store, please contact customer support at vlgrocery_customersupport@gmail.com <br>or call 04-9876543.<br><br></p></li>
                        </ul>
                    </div>
                </div>				 
			</div>
			<br><br>			
        </div>
		 
    </section>
	<!-- FAQ Section Ends -->
	
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