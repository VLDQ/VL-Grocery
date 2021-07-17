<?php
session_start();

if(!empty($_GET["action"])) {
	switch($_GET["action"]) {
		case "add":
			if(!empty($_POST["quantity"])) {
				//Connect to database
				$dbc = mysqli_connect('localhost', 'root', '');

				//Select database
				@mysqli_select_db($dbc, '205cde_vlgrocery');

				//Define the query
				if ($dbc) {
					$query = 'SELECT * FROM product WHERE product_id="' . $_GET['product_id'] . '"';
					
					//Execute the query
					if ($result = mysqli_query($dbc, $query)) {
						while($row=mysqli_fetch_assoc($result)) {
							$resultset[] = $row;
						}		
						if(!empty($resultset)) {
							$productById = $resultset;
						}							
						
						$itemArray = array($productById[0]["product_id"]=>array('product_id'=>$productById[0]["product_id"], 'product_name'=>$productById[0]["product_name"], 'quantity'=>$_POST["quantity"], 'product_price'=>$productById[0]["product_price"], 'product_image'=>$productById[0]["product_image"]));
						
						if(!empty($_SESSION["cart_item"])) {
							if(in_array($productById[0]["product_id"],array_keys($_SESSION["cart_item"]))) {
								foreach($_SESSION["cart_item"] as $k => $v) {
										if($productById[0]["product_id"] == $k) {
											if(empty($_SESSION["cart_item"][$k]["quantity"])) {
												$_SESSION["cart_item"][$k]["quantity"] = 0;
											}
											
											$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
										}
								}
							}
							else {
								$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
							}
						} 
						else {
							$_SESSION["cart_item"] = $itemArray;
						}
					}
					else {
						echo "<p style='color: red; font-size: 20px'><b><i>Failed to retrieve data because: " . mysqli_error() . "<br/>The query was: " . $query . "</i></b></p>";
					}
				}

				//Close the database connection
				mysqli_close($dbc);
			}
		break;
		
		case "remove":
			if(!empty($_SESSION["cart_item"])) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if($_GET["product_id"] == $k)
							unset($_SESSION["cart_item"][$k]);				
						if(empty($_SESSION["cart_item"]))
							unset($_SESSION["cart_item"]);
				}
			}
		break;
		
		case "empty":
			unset($_SESSION["cart_item"]);
		break;
	}
}
?>

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
	
	<!-- Shopping Cart Style -->
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even){
			background-color: #f2f2f2;
		}

		th {
			background-color: #008000;
			color: white;
		}
		
		.cart-item-image {
			width: 60px;
			height: 60px;
			border-radius: 50%;
			border: #E0E0E0 1px solid;
			padding: 5px;
			vertical-align: middle;
			margin-right: 15px;
		}
	</style>
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
							<li>Products</li>
						</ul>
					</div>
                </div>
            </div>
        </div>		
		
    </section>
    <!-- Hero Section Ends -->

	<!-- Products Header Section Begins -->
    <section class='breadcrumb-section set-bg' data-setbg='img/banner-header.jpg'>
	 
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
                    <div class='breadcrumb__text'>
                        <h2>Products</h2>
						<h5>Shop with us now!</h5>
                    </div>
                </div>
            </div>
        </div>
		 
    </section>
    <!-- Products Header Section Ends -->

    <!-- Products Section Begins -->
    <section class='product spad' style='background-image:url(img/home_bg_ori.jpg); background-size:cover;'>
	 
        <div class='container'>
			<div class='acp__widget'>
				<div class='container'>
					<div class='row'>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' id='shopping-cart'>
							<div class='section-title'>
								<h2>Shopping Cart <i class='fa fa-shopping-cart'></i></h2>
							</div>
						</div>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
							<?php
							if(isset($_SESSION["cart_item"])){
								$total_quantity = 0;
								$total_price = 0;
								$ordered_product = "";
							?>	
								<div class='container'>
									<div class='row' align='right'>
										<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
											<a href="products.php?action=empty"><button class='site-btn' style='background-color: #0000a5;'>Empty Cart</button></a>
										</div>
									</div>
								</div><br>
								
								<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
									<table>
										<tr>
											<th style="text-align:left;">Name</th>
											<th style="text-align:right;">Quantity</th>
											<th style="text-align:right;">Unit Price</th>
											<th style="text-align:right;">Total Price</th>
											<th style="text-align:center;">Remove</th>
										</tr>	
										<?php		
											foreach ($_SESSION["cart_item"] as $item){
												$item_price = $item["quantity"]*$item["product_price"];
												?>
														<tr>
															<td><img src="upload/<?php echo $item["product_image"]; ?>" class="cart-item-image" /><?php echo $item["product_name"]; ?></td>
															<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
															<td style="text-align:right;"><?php echo "RM ".$item["product_price"]; ?></td>
															<td style="text-align:right;"><?php echo "RM ". number_format($item_price,2); ?></td>
															<td style="text-align:center;"><a href="products.php?action=remove&product_id=<?php echo $item["product_id"]; ?>">
																<button class='site-btn' style='background-color: #ed0000;'><i class='fa fa-trash'></i></button>
															</a></td>
														</tr>
														<?php
														$total_quantity += $item["quantity"];
														$total_price += ($item["product_price"]*$item["quantity"]);
														$ordered_product .= $item["quantity"] .= $item["product_name"] .= ", ";
												}
												?>

										<tr>
											<td style="text-align:right;"><strong>Total:</strong></td>
											<td style="text-align:right;"><strong><?php echo $total_quantity; ?></strong></td>
											<td style="text-align:right;" colspan="2"><strong><?php echo "RM ".number_format($total_price, 2); ?></strong></td>
											<td></td>
										</tr>
									</table>
								</div><br><br>
								
								<?php
									//If form is submitted, do the following:
									if (isset($_POST['submitted'])) {
										//Get user id from database
										//Connect to database
										$dbc = mysqli_connect('localhost', 'root', '');

										//Select database
										@mysqli_select_db($dbc, '205cde_vlgrocery');

										//Define the query
										if ($dbc) {
											$query = 'SELECT user_id FROM user WHERE username="' . $_SESSION['id'] . '"';
											
											//Execute the query
											if ($result = mysqli_query($dbc, $query)) {												
												//Retrieve user id
												while ($row = mysqli_fetch_array($result)) {
													$user_id = $row['user_id'];
												}
											}
											else {
												echo "<p style='color: red; font-size: 20px'><b><i>Failed to retrieve data because: " . mysqli_error() . "<br/>The query was: " . $query . "</i></b></p>";
											}
										}

										//Close the database connection
										mysqli_close($dbc);
										
										//Store the order details to database
										$dbc = mysqli_connect('localhost','root','');
										if(mysqli_select_db($dbc,'205cde_vlgrocery')) {
											$query="INSERT INTO orders (ordered_product,total_payment_amount,user_id)
													VALUES('$ordered_product','$total_price','$user_id')";
														
											if(@mysqli_query($dbc,$query)) {
												mysqli_close($dbc);
												//redirect to Successful Order page
												echo "<script>location.replace('successful_order.php');</script>";
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
									else {
										echo "
										<div class='container'>
											<form method='post' action='products.php'>
												<div class='row' align='right'>
													<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
														<input type='hidden' name='submitted' value='true'/>
														<button type='submit' class='primary-btn'>Place Order</button>
													</div>
												</div>
											</form>
										</div><br>
										";
									}
								?>
							<?php
							} 
							else {
							?>
								<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
									<h4 style='color:red;'><strong>Your Cart is Empty!</strong></h4>
								</div>
							<?php 
							}
							?>
						</div>
					</div>
				</div>
			</div>

			<div class='acp__widget'>	
				<div class='container'>
					<div class='row'>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' id='products'>
							<div class='section-title'>
								<h2>Our Products</h2>
							</div>
							<div class='featured__controls'>
								<ul>
									<li class='active' data-filter='*'>All Products</li><br><br>
									<li data-filter='.rice'>Rice</li>|&nbsp &nbsp
									<li data-filter='.noodles-pasta'>Noodles & Pasta</li>|&nbsp &nbsp
									<li data-filter='.fish-freshmeat'>Fish & Fresh Meat</li>|&nbsp &nbsp
									<li data-filter='.eggs-dairyproducts'>Eggs & Dairy Products</li>|&nbsp &nbsp
									<li data-filter='.fresh-vegetables'>Fresh Vegetables</li>|&nbsp &nbsp
									<li data-filter='.fresh-fruits'>Fresh Fruits</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row featured__filter">
				<?php
					//Connect to database
					$dbc = mysqli_connect('localhost', 'root', '');

					//Select database
					@mysqli_select_db($dbc, '205cde_vlgrocery');

					//Define the query
					if ($dbc) {
						$query = 'SELECT * FROM product';
						
						//Execute the query
						if ($result = mysqli_query($dbc, $query)) {
							//Retrieve data and display every product
							while ($row = mysqli_fetch_array($result)) {
								if ($row['product_category'] == "Rice") {
									$category = "rice";
								}
								else if ($row['product_category'] == "Noodles & Pasta") {
									$category = "noodles-pasta";
								}
								else if ($row['product_category'] == "Fish & Fresh Meat") {
									$category = "fish-freshmeat";
								}
								else if ($row['product_category'] == "Eggs & Dairy Products") {
									$category = "eggs-dairyproducts";
								}
								else if ($row['product_category'] == "Fresh Vegetables") {
									$category = "fresh-vegetables";
								}
								else if ($row['product_category'] == "Fresh Fruits") {
									$category = "fresh-fruits";
								}
								
								echo "<div class='col-lg-4 col-md-4 col-sm-4 col-xs-4 mix $category'>";
									echo "<div class='acp__widget'>";
										echo "<form method='post' action='products.php?action=add&product_id={$row['product_id']}'>";
											echo "<h4><b>" . $row['product_name'] . "</b></h4><br>";
											echo "<img src='upload/" . $row['product_image'] . "'>";
											echo "<br><br><h5><strong>RM" . $row['product_price'] . "</strong><small> /each</small></h5><br>";
											
											if(isset($_SESSION['id'])) {
												echo "<div class='row'>";
													echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
														echo "<input type='number' name='quantity' value='1' size='2' style='width:20%;'/>&nbsp&nbsp";
														echo "<button type='submit' class='site-btn'>ADD TO CART &nbsp<i class='fa fa-shopping-cart'></i></button>";
													echo "</div>";
												echo "</div>";
											}
											else {
												echo "<p style='color: red;'><small><strong>Please login to your account <br> to add product to cart!</strong></small></p>";
											}
										echo "</form>";
									echo "</div>";
								echo "</div>";								
							}
						}
						else {
							echo "<p style='color: red; font-size: 20px'><b><i>Failed to retrieve data because: " . mysqli_error() . "<br/>The query was: " . $query . "</i></b></p>";
						}
					}

					//Close the database connection
					mysqli_close($dbc);
				?>
			</div>

    </section>
    <!-- Products Section Ends -->

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