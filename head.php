<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>YRMatrimony</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <style type="text/css">
  form{
    width: 100%;
    background-color: #e4e4e4;
    border-style: groove;
    border-radius: 20px;
    margin-top: 20px;
    padding: 15px;
    box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.6);
-webkit-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.6);
-moz-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.6);

  }
  input, select{
    width: 100%;
    background-color: #fff;
    border-style: groove;
    border-radius: 5px;
    padding: 5px;
    
  }
  input[type=radio], input[type=checkbox]{
    width: 10%;
    margin: 10px;
    padding: 10px;
  }
  label{
    font-weight: bold;
    margin: 5px;
  }
  #Register center{
    width: 100%;
    background-color: #eb5d1e;
    color: #fff;
    border-style: hidden;
    border-radius: 10px;
    
    padding: 5px;
  }
  .container-fluid .row{
    margin: 10px;
    padding: 10px;
  }
  .instructions {
    width: 100%;
    background-color: #e4e4e4;
    border-style: groove;
    border-radius: 20px;
    margin-right: 15px;
    margin-top: 20px;
    padding: 15px;
    box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.6);
-webkit-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.6);
-moz-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.6);

  }
  .yr_app{
    padding: 30px;
    margin: 30px;
  }
  .app_icon .app_icon_tittle{
    margin: 20px;
  }
  .app_icon:hover{
color: #eb5d1e;
  }
 /* .carousel-inner .active , .carousel-inner{
width: 100%!important;
  }*/
  </style>

  <!-- =======================================================
  * Template Name: Ninestars - v4.6.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light" style="font-size: 150%;"><a href="index.html"><span><img style="margin-bottom: 7px;margin-right: 5px;"src="logo4.png">YR Marathi Matrimony</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#about_app">Our App</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto <?php if(basename($_SERVER['PHP_SELF'])=='register.php'){ echo 'active';}?>" href="register.php">Register</a></li>
          <li><a class="getstarted scrollto" href="login.php">LogIn</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
