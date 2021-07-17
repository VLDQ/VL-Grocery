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
	
	<!-- Delete Products Section Begins -->
	<section class='acp spad' style='background-image:url(img/acp_bg.jpg); background-size:cover;'>
	
        <div class='container'>
			<div class='acp__widget'>	
				<div class='container'>
					<?php
						//Connect to database
						$dbc = mysqli_connect('localhost','root','');				
							
						//Select database
						mysqli_select_db($dbc, '205cde_vlgrocery');
							
						//Display entry in a form
						if (isset($_GET['product_id']) && is_numeric($_GET['product_id'])) {
							//Define the query
							$query = "SELECT product_name FROM product WHERE product_id={$_GET['product_id']}";
							
							//Execute the query
							if ($result = mysqli_query($dbc, $query)) {
								$row = mysqli_fetch_array($result); //Retrieve data
								
								//Form
								echo "<form method='post' action='delete_products.php'>";
									echo "<div class='row'>";
										echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
											echo "<div class='acp__title'>";
												echo "<h2>Delete Products</h2>";
											echo "</div>";
										echo "</div>";
										echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
											echo "<p style='font-size: 20px; color: red;'>Delete <strong>" . $row['product_name'] .  "</strong> ?</p>"; //Display name of the product to be deleted
										echo "</div>";						
										echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";	
											echo "<input type='hidden' name='product_id' value='" . $_GET['product_id'] . "'/>";
										echo "</div>";
										echo "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";	
											echo "<br/><button type='submit' class='primary-btn'>DELETE PRODUCT</button>"; //Submit
										echo "</div>";
									echo "</div>";
								echo "</form>";
							}
							else {
								echo "<p style='color: red; font-size: 20px'><b><i>Failed to retrieve data because: " . mysqli_error() . "<br/>The query was: " . $query . "</i></b></p>";
							}
						}
						//Handle form
						else if (isset($_POST['product_id']) && is_numeric($_POST['product_id'])) {
							//Define the query
							$query = "DELETE FROM product WHERE product_id={$_POST['product_id']} LIMIT 1";

							//Execute the query
							if ($result = mysqli_query($dbc, $query)) {
								//display success message
								echo "<script>alert('The product has been successfully deleted!!')</script>";
								//redirect to Admin Control Panel
								echo "<script>location.replace('admin_control_panel.php');</script>";
							}
							else {
								echo "<p style='color: red; font-size: 20px'><b><i>Failed to delete the product because: " . mysqli_error() . "<br/>The query was: " . $query . "</i></b></p>";
							}
						}
						//ID absent
						else {
							echo "<p style='color: red; font-size: 20px'><b><i>Error!</i></b></p>";
						}

						//Close the database connection
						mysqli_close($dbc);
					?>
					<div class='row'>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' align='right'>
							<br/><br/><a href='admin_control_panel.php'><button class='site-btn'>VIEW PRODUCT RECORDS</button></a>
						</div>
					</div>		
				</div>
			</div>
		</div>
		
    </section>
	<!-- Delete Products Section Ends -->

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