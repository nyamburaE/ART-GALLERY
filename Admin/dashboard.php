<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('dbconnection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Art Web</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/font-awesome.min.css" rel="stylesheet" >
	<link href="css/global.css" rel="stylesheet">
	<link href="css/blog.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz@9..144&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
<style>
	/* Custom CSS for card body and progress bar */
       .card-body {
           background-color: #d63384;
           padding: 10px; /* Add padding to the card body */
           margin: 10px; /* Add margin to the card body */
           border-radius: 10px; /* Add border radius for rounded corners */
           border: none; /* Remove border */
       }

       .progress-bar {
           background-color: black;
       }

       #left-sidebar {
           background-color: lightgrey;
           height: 100vh; /* Set the height to occupy the full viewport height */
           width: 20%; /* Set the width to 20% */
           float: left; /* Float the sidebar to the left */
           padding-top: 20px; /* Add padding to the top */
           box-sizing: border-box; /* Include padding and border in the width calculation */
       }

       #left-sidebar .nav-item {
           margin-bottom: 10px; /* Add margin between each navigation item */
       }

       #left-sidebar .nav-item a {
           display: block; /* Make the anchor tags block-level to occupy full width */
           padding: 10px 20px; /* Add padding to the anchor tags */
           color: black; /* Change the color of the text */
           text-decoration: none; /* Remove underline from the text */
       }

       #left-sidebar .nav-item a:hover {
           background-color: #f0f0f0; /* Change background color on hover */
       }

       #left-sidebar .menu-content {
           display: none; /* Hide dropdown menus by default */
       }

       #left-sidebar .nav-item:hover .menu-content {
           display: block; /* Show dropdown menu when parent item is hovered over */
       }

       #navbar_sticky .container-xl {
           display: flex;
           justify-content: space-between;
           align-items: center;
       }

       #navbar_sticky .navbar-collapse {
           flex-grow: 1;
           display: flex;
           justify-content: flex-end;
       }

       #navbar_sticky .navbar-text {
           margin-right: 10px; /* Adjust margin as needed */
       }
</style>

</head>
<body>
<section id="header">
	<nav class="navbar navbar-expand-md navbar-light" id="navbar_sticky">
		<div class="container-xl">
			<a class="navbar-brand fs-2 p-0 fw-bold text-white" href="index.html"><i class="fa fa-pencil col_pink me-1 align-middle"></i> art <span class="col_pink span_1">WEB</span>
				<br> <span class="font_12 span_2">DIGITAL ART</span></a>
				 <a class="nav-item" class="nav-link active" aria-current="page" href="index.html">Home</a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Welcome Admin -->
				<span class="navbar-text me-3" style="color: #d63384;">Welcome Admin</span>
				<!-- Profile Image -->
				<img src="C:\xampp\htdocs\zamuri art\pictures/profileimage.jpg" alt="Profile Image" class="rounded-circle" style="width: 40px; height: 40px;">
			</div>



		</div>
	</nav>
</section>

	  <section id="left-sidebar">
                <ul class="navigation">
                    <!-- Wood Carving -->
                     <li class="nav-item">
                        <a href="#"><i class="la la-file"></i><span class="menu-title" data-i18n="nav.footers.main">Wood Carving</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="addwoodcarving.php" data-i18n="nav.footers.footer_light">Add Wood Carving</a></li>

                        </ul>
                    </li>
            <hr>
                    <!-- Oil Paintings -->
                    <li class="nav-item">
                        <a href="#"><i class="la la-file"></i><span class="menu-title" data-i18n="nav.footers.main">Oil Paintings</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="addoilpainting.php" data-i18n="nav.footers.footer_light">Add Oil Painting</a></li>

                        </ul>
                    </li>
            <hr>
                    <!-- Impasto Paintings -->
                    <li class="nav-item">
                        <a href="#"><i class="la la-file"></i><span class="menu-title" data-i18n="nav.footers.main">Impasto Paintings</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="addimpasto.php" data-i18n="nav.footers.footer_light">Add Impasto Painting</a></li>

                        </ul>
                    </li>
            <hr>
                    <!-- Encaustic Paintings -->
                    <li class="nav-item">
                        <a href="#"><i class="la la-file"></i><span class="menu-title" data-i18n="nav.footers.main">Encaustic Paintings</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="addencaustic.php" data-i18n="nav.footers.footer_light">Add Encaustic Painting</a></li>

                        </ul>
                    </li>
            <hr>
                    <!-- Acrylic Paintings -->
                    <li class="nav-item">
                        <a href="#"><i class="la la-file"></i><span class="menu-title" data-i18n="nav.footers.main">Acrylic Paintings</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="addacrylics.php" data-i18n="nav.footers.footer_light">Add Acrylic Painting</a></li>

                        </ul>
                    </li>
            <hr>
                    <!-- Orders -->
                    <li class="nav-item">
                        <a href="orders.php"><i class="la la-download"></i><span class="menu-title" data-i18n="nav.dash.main">Orders</span></a>
                    </li>
            <hr>


                </ul>
            </section>

	  <div class="app-content content">
		  <div class="content-wrapper">
			  <div class="content-header row">
			  </div>
			  <div class="content-body">
				  <!-- Revenue, Hit Rate & Deals -->
				  <div class="row">
					  <?php
                // Query to get the count of woodcarving
                $sql_woodcarving = mysqli_query($con, "SELECT paintingid FROM tblwoodcarving");
                $cntwoodcarving = mysqli_num_rows($sql_woodcarving);

                // Query to get the count of oilpainting
                $sql_oilpainting = mysqli_query($con, "SELECT paintingid from tbloilpainting");
                $cntoilpainting = mysqli_num_rows($sql_oilpainting);

                // Query to get the count of impasto
                $sql_impasto = mysqli_query($con, "SELECT paintingid from tblimpasto");
                $cntimpasto = mysqli_num_rows($sql_impasto);

                ?>

					  <div class="col-xl-4 col-lg-6 col-12">
						  <div class="card pull-up">
							  <div class="card-content">
								  <a href="manage-course.php">
									  <div class="card-body">
										  <div class="media d-flex">
											  <div class="media-body text-left">
												  <h3 class="info"><?php echo $cntwoodcarving; ?></h3>
												  <h6>List of Wood Carving</h6>
											  </div>
											  <div>
												  <i class="icon-file success font-large-2 float-right"></i>
											  </div>
										  </div>
										  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
											  <div class="progress-bar bg-gradient-x-info" role="progressbar"
												   style="width: 100%" aria-valuenow="80" aria-valuemin="0"
												   aria-valuemax="100"></div>
										  </div>
									  </div>
								  </a>
							  </div>
						  </div>
					  </div>

					  <div class="col-xl-4 col-lg-6 col-12">
						  <div class="card pull-up">
							  <div class="card-content">
								  <a href="manage-course.php">
									  <div class="card-body">
										  <div class="media d-flex">
											  <div class="media-body text-left">
												  <h3 class="info"><?php echo $cntoilpainting; ?></h3>
												  <h6>List of Oil Painting</h6>
											  </div>
											  <div>
												  <i class="icon-file success font-large-2 float-right"></i>
											  </div>
										  </div>
										  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
											  <div class="progress-bar bg-gradient-x-info" role="progressbar"
												   style="width: 100%" aria-valuenow="80" aria-valuemin="0"
												   aria-valuemax="100"></div>
										  </div>
									  </div>
								  </a>
							  </div>
						  </div>
					  </div>

					  <div class="col-xl-4 col-lg-6 col-12">
						  <div class="card pull-up">
							  <div class="card-content">
								  <a href="manage-course.php">
									  <div class="card-body">
										  <div class="media d-flex">
											  <div class="media-body text-left">
												  <h3 class="info"><?php echo $cntimpasto; ?></h3>
												  <h6>List of Impasto Paintings</h6>
											  </div>
											  <div>
												  <i class="icon-file success font-large-2 float-right"></i>
											  </div>
										  </div>
										  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
											  <div class="progress-bar bg-gradient-x-info" role="progressbar"
												   style="width: 100%" aria-valuenow="80" aria-valuemin="0"
												   aria-valuemax="100"></div>
										  </div>
									  </div>
								  </a>
							  </div>
						  </div>
					  </div>
					  <!-- Repeat the above HTML block for other cards -->

				  </div>
				  <br>
				  <br>
				  <div class="row">
					  <?php

                // Query to get the count of encaustic
                $sql_encaustic = mysqli_query($con, "SELECT paintingid from tblencaustic");
                $cntencaustic = mysqli_num_rows($sql_encaustic);

                // Query to get the count of acrylics
                $sql_acrylics = mysqli_query($con, "SELECT paintingid from tblacrylics");
                $cntacrylics = mysqli_num_rows($sql_acrylics);

                // Query to get the count of cart
                $sql_cart = mysqli_query($con, "SELECT ID from tblcart");
                $cntcart = mysqli_num_rows($sql_cart);
                ?>

					  <div class="col-xl-4 col-lg-6 col-12">
						  <div class="card pull-up">
							  <div class="card-content">
								  <a href="manage-course.php">
									  <div class="card-body">
										  <div class="media d-flex">
											  <div class="media-body text-left">
												  <h3 class="info"><?php echo $cntencaustic; ?></h3>
												  <h6>List of Encaustic Paintings</h6>
											  </div>
											  <div>
												  <i class="icon-file success font-large-2 float-right"></i>
											  </div>
										  </div>
										  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
											  <div class="progress-bar bg-gradient-x-info" role="progressbar"
												   style="width: 100%" aria-valuenow="80" aria-valuemin="0"
												   aria-valuemax="100"></div>
										  </div>
									  </div>
								  </a>
							  </div>
						  </div>
					  </div>

					  <div class="col-xl-4 col-lg-6 col-12">
						  <div class="card pull-up">
							  <div class="card-content">
								  <a href="manage-course.php">
									  <div class="card-body">
										  <div class="media d-flex">
											  <div class="media-body text-left">
												  <h3 class="info"><?php echo $cntacrylics; ?></h3>
												  <h6>List of Acrylics Paintings</h6>
											  </div>
											  <div>
												  <i class="icon-file success font-large-2 float-right"></i>
											  </div>
										  </div>
										  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
											  <div class="progress-bar bg-gradient-x-info" role="progressbar"
												   style="width: 100%" aria-valuenow="80" aria-valuemin="0"
												   aria-valuemax="100"></div>
										  </div>
									  </div>
								  </a>
							  </div>
						  </div>
					  </div>

					  <div class="col-xl-4 col-lg-6 col-12">
						  <div class="card pull-up">
							  <div class="card-content">
								  <a href="manage-course.php">
									  <div class="card-body">
										  <div class="media d-flex">
											  <div class="media-body text-left">
												  <h3 class="info"><?php echo $cntcart; ?></h3>
												  <h6>List of Orders</h6>
											  </div>
											  <div>
												  <i class="icon-file success font-large-2 float-right"></i>
											  </div>
										  </div>
										  <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
											  <div class="progress-bar bg-gradient-x-info" role="progressbar"
												   style="width: 100%" aria-valuenow="80" aria-valuemin="0"
												   aria-valuemax="100"></div>
										  </div>
									  </div>
								  </a>
							  </div>
						  </div>
					  </div>
					  <!-- Repeat the above HTML block for other cards -->

				  </div>


			  </div>
		  </div>
	  </div>

   <div class="row footer_2 mt-4 text-center">
    <div class="col-md-12">
	 <ul>
	  <li class="d-inline-block me-3 font_14"><a href="#">CONTACT</a></li>
	  <li class="d-inline-block me-3 font_14"><a href="#">PRIVACY POLICY</a></li>
	  <li class="d-inline-block me-3 font_14"><a href="#">TERMS OF USE</a></li>
	  <li class="d-inline-block font_14"><a href="#">FAQ</a></li>
	 </ul>
	 <p class="mb-0">© 2013 Your Website Name. All Rights Reserved | Design by <a class="col_pink" href="http://www.templateonweb.com">TemplateOnWeb</a></p>
	</div>
   </div>
 </div>
</section>

<script>
window.onscroll = function() {myFunction()};

var navbar_sticky = document.getElementById("navbar_sticky");
var sticky = navbar_sticky.offsetTop;
var navbar_height = document.querySelector('.navbar').offsetHeight;

function myFunction() {
  if (window.pageYOffset >= sticky + navbar_height) {
    navbar_sticky.classList.add("sticky")
	document.body.style.paddingTop = navbar_height + 'px';
  } else {
    navbar_sticky.classList.remove("sticky");
	document.body.style.paddingTop = '0'
  }
}
</script>

</body>

</html>