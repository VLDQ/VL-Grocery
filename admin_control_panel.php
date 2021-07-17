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
	
	<!-- Product Listing Table Style -->
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
	</style>
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

	<!-- Admin Control Panel Section Begins -->
    <section class='acp spad' style='background-image:url(img/acp_bg.jpg); background-size:cover;'>
	 
        <div class='container'>
			<div class='acp__widget'>	
				<div class='container'>
					<div class='row'>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' align='right'>
							<a href='add_products.php'><button class='site-btn'>ADD MORE PRODUCTS</button></a>
						</div>
					</div><br><br>
					<div class='row'>
						<div class='col-lg-1 col-md-1 col-sm-1 col-xs-1'>
						</div>
						<div class='col-lg-10 col-md-10 col-sm-10 col-xs-10'>
							<?php
								//Connect to database
								$dbc = mysqli_connect('localhost', 'root', '');

								//Select database
								@mysqli_select_db($dbc, '205cde_vlgrocery');

								//Define the query
								if ($dbc) {
									$query = 'SELECT product_id, product_name, product_price, product_category FROM product';
									
									//Execute the query
									if ($result = mysqli_query($dbc, $query)) {
										echo "<table>";
										echo "<tr>";
										echo "<th style='padding:10px;'>Product</th>";
										echo "<th style='padding:10px;'>Price</th>";
										echo "<th style='padding:10px;'>Category</th>";
										echo "<th style='padding:10px; text-align:center;'>Edit Action</th>";
										echo "<th style='padding:10px; text-align:center;'>Delete Action</th>";
										echo "</tr>";
										
										//Retrieve data and display every record
										while ($row = mysqli_fetch_array($result)) {
											echo "<tr>";
											echo "<td style='padding:10px;'>" . $row['product_name'] . "</td>";
											echo "<td style='padding:10px;'>" . $row['product_price'] . "</td>";
											echo "<td style='padding:10px;'>" . $row['product_category'] . "</td>";
											echo "<td style='padding:10px; text-align:center;'><a href='edit_products.php?product_id={$row['product_id']}' style='font-size: 15px;'><button class='site-btn' style='background-color: #0000a5;'>&nbsp&nbsp EDIT &nbsp&nbsp</button></a></td>";
											echo "<td style='padding:10px; text-align:center;'><a href='delete_products.php?product_id={$row['product_id']}' style='font-size: 15px;'><button class='site-btn' style='background-color: #ed0000;'>DELETE</button></a></td>";
											echo "</tr>";
										}
										
										echo "</table>";
									}
									else {
										echo "<p style='color: red; font-size: 20px'><b><i>Failed to retrieve data because: " . mysqli_error() . "<br/>The query was: " . $query . "</i></b></p>";
									}
								}

								//Close the database connection
								mysqli_close($dbc);
							?>
						</div>
						<div class='col-lg-1 col-md-1 col-sm-1 col-xs-1'>
						</div>
					</div>
				</div>
			</div>
        </div>
		
    </section>
    <!-- Admin Control Panel Section Ends -->
	
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