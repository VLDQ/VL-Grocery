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
    <section class='hero' style='background-image:url(img/home_bg.jpg); background-size:cover;'>
		
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
							<li>Home</li>
						</ul>
					</div>
					
					<div class='slideshow-container col-lg-12 col-md-12 col-sm-12 col-xs-12'> <!-- Slideshow -->
						<!-- Full-width images with number -->
						<div class='mySlides fade'>
							<div class='numbertext'><b>1 / 6</b></div>
							<img src='img/slideshow1.jpg' alt='Slideshow 1' style='width:100%; border-radius:12px;'>
						</div>

						<div class='mySlides fade'>
							<div class='numbertext'><b>2 / 6</b></div>
							<img src='img/slideshow2.jpg' alt='Slideshow 2' style='width:100%; border-radius:12px;'>
						</div>
						  
						<div class='mySlides fade'>
							<div class='numbertext'><b>3 / 6</b></div>
							<img src='img/slideshow3.jpg' alt='Slideshow 3' style='width:100%; border-radius:12px;'>
						</div>
						  
						<div class='mySlides fade'>
							<div class='numbertext'><b>4 / 6</b></div>
							<img src='img/slideshow4.jpg' alt='Slideshow 4' style='width:100%; border-radius:12px;'>
						</div>
						  
						<div class='mySlides fade'>
							<div class='numbertext'><b>5 / 6</b></div>
							<img src='img/slideshow5.jpg' alt='Slideshow 5' style='width:100%; border-radius:12px;'>
						</div>

						<div class='mySlides fade'>
							<div class='numbertext'><b>6 / 6</b></div>
							<img src='img/slideshow_main.png' alt='Slideshow Main' style='width:100%; border-radius:12px;'>
						</div>
					</div>
					<br>			
                  
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' align='right'>
						<a href='products.php'><button class='primary-btn'>SHOP NOW ></button></a>
					</div>
                </div>
            </div>
        </div>		
		
    </section>
    <!-- Hero Section Ends -->

    <!-- Featured Categories Section Begins -->
    <section class='featured spad' style='background-image:url(img/home_bg.jpg); background-size:cover;'>
	
        <div class='container'>	
            <div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='section-title'>
                        <h2>Featured Categories</h2><br/>
	  				    <h6>Check out what is in our grocery today!</h6>
                    </div>                    
                </div>
            </div>
			
            <div class='row'>
				<div class='categories__slider owl-carousel'>
					<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
						<div class='categories__item set-bg' data-setbg='img/featured_category/rice.png' style='border-radius:12px; border: 1px solid #dcdcdc;'>
						</div>
						<div class='featured__item' align='center'>
							<br>						
							<h5><b>Rice</b></h5>
							<br>
							<a href='products.php#products'><button class='primary-btn'>View Products</button></a>
						</div>
					</div>
				
					<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
						<div class='categories__item set-bg' data-setbg='img/featured_category/noodles_pasta.png' style='border-radius:12px; border: 1px solid #dcdcdc;'>
						</div>
						<div class='featured__item' align='center'>
							<br>
							<h5><b>Noodles & Pasta</b></h5>
							<br>
							<a href='products.php#products'><button class='primary-btn'>View Products</button></a>
						</div>
					</div>
					
					<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
						<div class='categories__item set-bg' data-setbg='img/featured_category/fish_freshmeat.png' style='border-radius:12px; border: 1px solid #dcdcdc;'>
						</div>
						<div class='featured__item' align='center'>
							<br>						
							<h5><b>Fish & Fresh Meat</b></h5>
							<br>
							<a href='products.php#products'><button class='primary-btn'>View Products</button></a>							
						</div>
					</div>			           
					
					<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
						<div class='categories__item set-bg' data-setbg='img/featured_category/eggs_dairyproducts.png' style='border-radius:12px; border: 1px solid #dcdcdc;'>
						</div>
						<div class='featured__item' align='center'>
							<br>
							<h5><b>Eggs & Dairy Products</b></h5>
							<br>
							<a href='products.php#products'><button class='primary-btn'>View Products</button></a>
						</div>						
					</div>
					
					<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
						<div class='categories__item set-bg' data-setbg='img/featured_category/freshvegetables.png' style='border-radius:12px; border: 1px solid #dcdcdc;'>							
						</div>
						<div class='featured__item' align='center'>
							<br>						
							<h5><b>Fresh Vegetables</b></h5>
							<br>
							<a href='products.php#products'><button class='primary-btn'>View Products</button></a>
						</div>
					</div>
					
					<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
						<div class='categories__item set-bg' data-setbg='img/featured_category/freshfruits.png' style='border-radius:12px; border: 1px solid #dcdcdc;'>							
						</div>
						<div class='featured__item' align='center'>
							<br>
							<h5><b>Fresh Fruits</b></h5>
							<br>
							<a href='products.php#products'><button class='primary-btn'>View Products</button></a>
						</div>
					</div>
				</div>
			</div>
			<br><br><br>
			
			<div class='row'>
				<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' align='right'>
					<a href='products.php'><button class='primary-btn'>Explore more products</button></a>
				</div>				
			</div>
        </div>
		
    </section>
    <!-- Featured Categories Section Ends -->		              
	
	<!-- About Us Section Begins -->
	<section class='about spad' style='background-image:url(img/about/about_translucent.jpg); background-size:cover;'>

		<div class='container'>
            <div class='row'>
				<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='section-title'>
                        <h2>What is VL Grocery?</h2><br/>
                    </div>                    
                </div>
			
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
					<img src='img/about/about_1.jpg' alt='About 1' width='100%' style='border-radius:12px;'/>
				</div>
				
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
					<br><br><br><br>
					<p><b>VL Grocery is a newly opened grocery store based in Penang, Malaysia. 
						Mr.Vincent Lee is the founder of VL Grocery. Well, ......</b></p><br>
					<a href='about_us.php'><button class='primary-btn'>Learn More</button></a>
				</div>
			</div>
		</div>
		
	</section>
	<!-- About Us Section Ends -->
	
	<!-- Contact Us Section Begins -->
	<section class='contact spad' style='background-image:url(img/contact/contact_translucent.jpg); background-size:cover;'>
		
		<div class='container'>
            <div class='row'>
				<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='section-title'>
                        <h2>Feel Free to Contact Us!</h2><br/>
                    </div>                    
                </div>
			
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
					<br><br><br><br>
					<p>Email: <b>vlgrocery@gmail.com</b></p>
					<p>Phone: <b>04-1234567</b></p>
					<p>Address: <b>88, Grocery Road, 11900 Penang</b></p><br>
					<a href='contact_us.php'><button class='primary-btn'>Learn More</button></a>
				</div>
				
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
					<img src='img/contact/contact.jpg' alt='Contact' width='100%' style='border-radius:12px;'/>
				</div>
			</div>
		</div>
		
	</section>
	<!-- Contact Us Section Ends -->
	
	<!-- Careers Section Begins -->
	<section class='careers spad' style='background-image:url(img/careers/career_translucent.jpg); background-size:cover;'>
	
		<div class='container'>
            <div class='row'>
				<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <div class='section-title'>
                        <h2>We are Hiring!</h2><br/>
                    </div>                    
                </div>
			
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
					<img src='img/careers/career.jpg' alt='Career' width='100%' style='border-radius:12px;'/>
				</div>
			
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
					<br><br><br><br><br>
					<p><b>Interested in pursuing your career in grocery industry? Feel free to check out the job vacancies that are available in VL Grocery!</b></p>
					<a href='careers.php'><button class='primary-btn'>Learn More</button></a>
				</div>				
			</div>
		</div>
		
	</section>
	<!-- Careers Section Ends -->

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