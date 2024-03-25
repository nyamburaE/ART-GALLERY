<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('dbconnection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Check if the file upload field is set and not null
    if (isset($_FILES['oilpaintingpicture']) && $_FILES['oilpaintingpicture']['error'] !== UPLOAD_ERR_NO_FILE) {
        // Handle file upload
        $target_dir = "pictures/";
        $target_file = $target_dir . basename($_FILES["oilpaintingpicture"]["name"]);

        // Check if file is a valid image
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (!in_array($imageFileType, array("jpg", "jpeg", "png", "gif"))) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            exit();
        }

        // Check if file is moved successfully
        if (move_uploaded_file($_FILES["oilpaintingpicture"]["tmp_name"], $target_file)) {
            // Insert file path into database
            $sql = "INSERT INTO  tbloilpainting (oilpaintingpicture, name, description, price) VALUES (?, ?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("sssd", $target_file, $name, $description, $price);

            if ($stmt->execute()) {
                // Success message
                                       echo "Record inserted successfully. Redirecting...";
                                       // Redirect after 2 seconds
                                       header("refresh:2;url=addoilpainting.php");
                                       exit(); // Terminate script after redirection
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Sorry, there was an error moving the uploaded file.";
        }
    } else {
        echo "No file selected.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Art Web</title>
    <!-- Include CSS files -->
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Global CSS -->
    <link href="css/global.css" rel="stylesheet">
    <!-- Product CSS -->
    <link href="css/product.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz@9..144&display=swap" rel="stylesheet">
    <!-- Include Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Custom Styles -->
    <style>
       .errorWrap {
           padding: 10px;
           margin: 20px 0 0px 0;
           background: #fff;
           border-left: 4px solid #dd3d36;
           -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
           box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
       }
       .succWrap{
           padding: 10px;
           margin: 0 0 20px 0;
           background: #fff;
           border-left: 4px solid #5cb85c;
           -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
           box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
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
        input[type="text"],
               input[type="number"],
               textarea {
                   color: black;
               }
                .content-body {
                       display: flex;
                       justify-content: center;
                       margin-top: 20px; /* Add space between the top of the page and the form */
                       margin-bottom: 20px; /* Add space between the bottom of the form and the footer */
                   }

                   /* Smaller form */
                   #woodcarving-form {
                       background-color: #f2f2f2;
                       padding: 20px;
                       border-radius: 10px;
                       width: 70%; /* Adjust the width of the form */
                   }
               </style>
    </style>
</head>
<body>
    <!-- Header section -->
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

    <!-- Left sidebar section -->

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


   <!-- Main content section -->
  <div class="content-body">
      <form name="woodcarving" method="post" enctype="multipart/form-data" id="woodcarving-form">
          <!-- Wood Carving Details -->
          <section class="formatter" id="formatter">
              <!-- Form fields -->
              <div class="row">
                  <div class="form-group">
                      <label style="color: black;">OilPaintings</label>
                      <br>
                      <input type="file" class="form-control-file" id="oilpaintingpicture" name="oilpaintingpicture" accept="image/*" required style="color: black;">
                  </div>
                  <!-- Other input fields -->
                  <!-- Name -->
                  <br>
                  <div class="form-group">
                      <label style="color: black;">Name</label>
                      <input class="form-control white_bg" id="name" type="text" name="name" required>
                  </div>
                  <!-- Description -->
                  <br>
                  <div class="form-group">
                      <label style="color: black;">Description</label>
                      <textarea class="form-control white_bg" name="description" required></textarea>
                  </div>
                  <!-- Price -->
                  <br>
                  <div class="form-group">
                      <label style="color: black;">Price</label>
                      <input class="form-control white_bg" id="price" type="number" name="price" step="0.01" required>
                  </div>
              </div>
              <br>
              <div class="row">
                  <div class="col-xl-6 col-lg-12">
                      <button type="submit" name="submit" class="btn btn-info btn-min-width mr-1 mb-1">ADD</button>
                  </div>
              </div>
          </section>
      </form>
  </div>


    <!-- Footer section -->
    <footer>
     <div class="row footer_2 mt-4 text-center">
     		   <div class="col-md-12">
     			 <ul>
     			   <li class="d-inline-block me-3 font_14"><a href="#">CONTACT</a></li>
     			   <li class="d-inline-block me-3 font_14"><a href="#">PRIVACY POLICY</a></li>
     			   <li class="d-inline-block me-3 font_14"><a href="#">TERMS OF USE</a></li>
     			   <li class="d-inline-block font_14"><a href="#">FAQ</a></li>
     			 </ul>
     		   </div>
     		 </div>
     		 <div class="row">
     		   <div class="col-md-12 text-center">
     			 <footer>
     			   <p class="mb-0">© 2024 Zuri Art Gallery. All Rights Reserved | Design by <a class="col_pink" href="http://www.templateonweb.com">Paul, Brian, Elsie</a></p>
     			 </footer>
     		   </div>
     		 </div>
    </footer>

    <!-- JavaScript code here -->
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
       function validateForm() {
           var oilpaintingpicture = document.getElementById("aoilpaintingpicture").value;
           var name = document.getElementById("name").value;
           var description = document.getElementById("description").value;
           var price = document.getElementById("price").value;

           // Check if any field is empty
           if (oilpaintingpicture === "" || name === "" || description === "" || price === "") {
               alert("Please fill in all fields.");
               return false;
           }

           // Check if oilpaintingpicture is not empty
           if (oilpaintingpicture === "") {
               alert("Please select an image for acrylic painting picture.");
               return false;
           }

           return true; // Form is valid
       }
    </script>
</body>
</html>