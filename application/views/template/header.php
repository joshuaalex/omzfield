<!DOCTYPE html>
<html lang="lang_en">


<head>
  <meta charset="utf-8">
  <title>OMZField Services <?php echo $title; ?></title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.min.css">
  <!-- magnific popup -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/magnific-popup/magnific-popup.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/slick/slick.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/slick/slick-theme.css">
  <!-- themify icon -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/themify-icons/themify-icons.css">
  <!-- animate -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/animate/animate.css">
  <!-- Aos -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/aos/aos.css">
  <!-- Stylesheets -->
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.jpg" type="image/x-icon">

  <!-- jQuery -->
  <script src="<?php echo base_url();?>assets/plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="<?php echo base_url();?>assets/plugins/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/sweetalert2.js"></script>

</head>

<body>
   

<!-- preloader start -->
<div class="preloader">
    <img src="<?php echo base_url();?>assets/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end --> 

<!-- navigation -->
<header>
  
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <ul class="list-inline text-lg-right text-center">
                        <li class="list-inline-item" >
                            <a href="<?php echo base_url(); ?>page/payment" style="color: #fff;">
                                Pay Online<!-- <i class="ti-search"></i> -->
                            </a>
                        </li>
                       <!--  <li class="list-inline-item">
                            <a href="mailto:info@mozfield.com">info@companyname.com</a>
                        </li> -->
                        <li class="list-inline-item">
                            <a href="callto:1234565523">Call Us Now:
                                <span class="ml-2"><?php echo  $info['phone1']; ?></span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php echo base_url() ?>service" style="color: #fff;">
                                Request Services<!-- <i class="ti-search"></i> -->
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url();?>assets/images/logo.jpg" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active">
                           <a class="nav-link" href="<?php echo base_url(); ?>">
                               <i class="ti-home"></i> Home
                            </a>
                           
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                About 
                            </a>

                             <div class="dropdown-menu" >
                                <a class="dropdown-item" href="<?php echo base_url(); ?>about">About Us</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>our_team">Our Team</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>contact_us">Contact Us</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>careers">Careers</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>faq">FAQs</a>

                            </div>
                            
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>plumbing"
                                >
                                Plumbing 
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="<?php echo base_url(); ?>plumbing#repair">Repair</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>plumbing#Drain">Drain Cleaning</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>plumbing#Install">Replace &amp; Install</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>plumbing#plan">Maintainance Plan</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>air" role="button" >
                                Air-Conditioning
                            </a>
                            <div class="dropdown-menu" >
                                 <a class="dropdown-item" href="<?php echo base_url(); ?>air#repair">Repair</a>
                                 <a class="dropdown-item" href="<?php echo base_url(); ?>air#cool">All Cooling Services</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>air#Install">Replace &amp; Install</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>air#tune">Tune-up</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>air#plan">Maintainance Plan</a>
                                
                            </div>
                        </li>
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url(); ?>electrical" >
                                Electrical
                            </a>
                            <div class="dropdown-menu" >
                                 <a class="dropdown-item" href="<?php echo base_url(); ?>electrical#repair">Repair</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>electrical#Install">Replace &amp; Install</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>electrical#plan">Maintainance Plan</a>
                            </div>
                        </li>
                           <li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url(); ?>blog">
                                Blog
                            </a>
                          
                        </li>
                            <li class="nav-item ">
                            <a class="nav-link" href="#" role="button"  aria-haspopup="true"
                                aria-expanded="false">
                                Blog
                            </a>
                          
                        </li>
                      
                       
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Search Form -->
<div class="search-form">
    <a href="#" class="close" id="searchClose">
        <i class="ti-close"></i>
    </a>
    <div class="container">
        <form action="#" class="row">
            <div class="col-lg-10 mx-auto">
                <h3>Search Here</h3>
                <div class="input-wrapper">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Enter Keywords..." required>
                    <button>
                        <i class="ti-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /navigation --> 