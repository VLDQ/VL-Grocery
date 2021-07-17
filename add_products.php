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

    <!-- Header Section Begins -->
	<header class='header'>
	
		<div class='container'>
			<div class='row'>
				<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
					<div class='header__logo'>
						<img src='img/VL Grocery.png' alt='VL Grocery'> <!-- Logo -->
					</div>
				</div>
				<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6'>
				</div>
				<?php
					//Session
					include("session.php");
				?>
			</div>
		</div>		
		
    </header>
    <!-- Header Section Ends -->
	
	<!-- Admin Control Panel Header Section Begins -->
    <section class='breadcrumb-section set-bg' data-setbg='img/banner-header.jpg'>
	 
        <div class='container'>
            <div class='row'>
                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
                    <div class='breadcrumb__text'>
                        <h2>Admin Control Panel</h2>
                    </div>
                </div>
			</div>
        </div>
		 
    </section>
    <!-- Admin Control Panel Header Section Ends -->
	
	<!-- Add Products Section Begins -->
	<section class='acp spad' style='background-image:url(img/acp_bg.jpg); background-size:cover;'>
	
        <div class='container'>
			<div class='acp__widget'>	
				<div class='container'>
					<?php
						//Check whether variable is set or declared
						if (isset($_POST['submitted'])) {
							//Retrieve form data
							$product_name = $_POST['product_name'];
							$product_price = $_POST['product_price'];
							$product_category = $_POST['product_category'];
							//Product Image
							$product_image = $_FILES['file']['name'];
							$target_directory = 'upload/';
							$target_file = $target_directory.basename($_FILES['file']['name']);

							//Select image file type
							$image_file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

							//Valid image file extensions
							$image_file_extensions = array("jpg","jpeg","png");
							
							//Connect to database
							if ($dbc = mysqli_connect('localhost','root','')) {
								//Select database
								if (@mysqli_select_db($dbc, '205cde_vlgrocery')) {
									//Define the query
									if (in_array($image_file_type, $image_file_extensions)) {
										$query = "INSERT INTO product (product_name, product_price, product_image, product_category)
												VALUES('$product_name', '$product_price', '$product_image', '$product_category')";
										
										//Execute the query
										if (@mysqli_query($dbc, $query)) {
											//Upload image file
											move_uploaded_file($_FILES['file']['tmp_name'], $target_directory.$product_image);
											//display success message
											echo "<script>alert('A new product has been successfully added!')</script>";
											//redirect to Admin Control Panel
											echo "<script>location.replace('admin_control_panel.php');</script>";
										}
										else {
											echo "<p style='color: red; font-size: 20px'><b><i>Failed to add a new product because: " . mysqli_error() . "<br/>The query was: " . $query . "</i></b></p>";
										}
									}
								}
								else {
									echo "<p style='color: red; font-size: 20px'><b><i>Failed to select the database because: " . mysqli_error() . "</i></b></p>";
								}
								
								//Close the database connection
								mysqli_close($dbc);
								
							}
							else {
								echo "<p style='color: red; font-size: 20px'><b><i>Failed to connect to MySQL: " . mysqli_error() . "</i></b></p>";
							}
						}
						//Display form
						else {
							echo "<form method='post' action='add_products.php' enctype='multipart/form-data'>";
								echo "<div class='row'>";
									echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
										echo "<div class='acp__title'>";
											echo "<h2>Add Products</h2>";
										echo "</div>";
									echo "</div>";
									echo "<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left'>";
										echo "<p style='font-size: 17px'><b>Product Name:<br/><input name='product_name' type='text' placeholder='Product Name' required></b></p>"; //Product name
									echo "</div>";
									echo "<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left'>";	
										echo "<p style='font-size: 17px'><b>Product Price(RM):<br/><input name='product_price' type='number' placeholder='Product Price' required></b></p>"; //Product price
									echo "</div>";
									echo "<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left'>";
										echo "<p style='font-size: 17px'><b>Product Category:<br/><input name='product_category' type='text' placeholder='Product Category' required></b></p>"; //Product category
									echo "</div>";
									echo "<div class='col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left'>";
										echo "<p style='font-size: 17px'><b>Product Image:<br/><input name='file' type='file' required/></b></p>"; //Product image
									echo "</div>";
									echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";	
										echo "<input type='hidden' name='submitted' value='true'/>";
									echo "</div>";
									echo "<div class='col-lg-12 col-md-12' col-sm-12 col-xs-12 align='right'>";	
										echo "<button type='submit' class='primary-btn'>ADD PRODUCT</button>"; //Submit
									echo "</div>";
								echo "</div>";
							echo "</form>";
						}
					?>
					<div class='row'>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' align='right'>
							<br/><br/><br/><a href='admin_control_panel.php'><button class='site-btn'>VIEW PRODUCT RECORDS</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
    </section>
	<!-- Add Products Section Ends -->

    <!-- Footer Section Begins -->
	<footer class='footer spad'>
	
		<div class='container'>		
			<div class='row'>
			</div>
			
			<div class='row'>
				<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center'>
					<div class='footer__copyright'>
						<p>Copyright &copy2021 VL Grocery. All Rights Reserved.</p>
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