<?php include('./includes/helper.php');?>
<?php session_start() ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Vrundavan Infosys Leading New Technology With.We decided to start the business after working for 4+ years in it industry and witnessing firsthand what development companies do to their clients.">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript,PHP,design,development,Wordpress">
        <meta name="author" content="vrundavan infosys">
         <meta name="robots" content="noindex,nofollow">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Fonts CSS -->
        <link rel="stylesheet" href="assets/css/montserrat.css">
        <link rel="stylesheet" href="assets/css/arial_rounded_bold.css">
        <link rel="stylesheet" href="assets/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen"/>
        <!-- <link href="assets/images/favicon.png"> -->
        <title>Vrundavan Infosys - We Are Design & Develop Your Website & Application</title>
        <link rel="icon" href="assets/images/favicon.png">

        <!-- WOW CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Page CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Title -->
        <title>Vrundavan Infosys</title>

    </head>
    <body data-spy="scroll" data-target="#navbar-example" id="home">

    <!-- Header Start -->
   

    <header class="site_header" id="myHeader">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="https://vrundavaninfosys.com">
                        <img src="assets/images/vrundavan_logo.png" alt="vrundavan_logo">
                    </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-lg-0">
                            <li class="nav-item">
                                <a href="#home" class="nav-link menu font_2_medium color_black active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="About Us.php" class="nav-link menu font_2_medium color_black">About Us</a>
                            </li>
                            <li class="nav-item has-child">
                                <a  class="nav-link has-link menu font_2_medium color_black">Services <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a class="nav-link menu " href="Website Development.php">Web Design &amp; Development</a></li>
                                    <li class="menu-item"><a class="nav-link menu" href="Mobile Application Development.php">Application Design &amp; Development</a></li>
                                    <li class="menu-item"><a class="nav-link menu" href="Graphics Designing.php">Graphics Designing</a></li>
                                    <li class="menu-item"><a class="nav-link menu" href="Digital Marketing.php">Digital Marketing</a></li>
                                    <li class="menu-item"><a class="nav-link menu" href="Server Setup.php">Server Setup &amp; Support</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio" class="nav-link menu font_2_medium color_black">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href="#how it works" class="nav-link menu font_2_medium color_black">How It Works</a>
                            </li>
                            <li class="nav-item">
                                <a href="Contact Us.php" class="nav-link menu font_2_medium color_black">Contact Us</a>
                            </li>
                        </ul>
                    
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header End -->

    <!-- Wrapper Start -->

    <!-- Home Banner Section Start -->
    <section class="home_banner_section bg_light_grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 order-1 order-md-1 order-lg-0 order-sm-1">
                    <div class="banner_text">
                        <h1 class="font_1 color_black wow fadeInDown" data-wow-delay="0.2s">Leading New Technology With</h1>
                        <h4 class="font_1 color_pink wow fadeInDown" data-wow-delay="0.2s">W<span class="txt-rotate color_pink" data-period="2000" data-rotate='[ "ebsite Design & Development.", "eb Application Design & Development."]'>&nbsp;</span></h4>
                        <h6 class="font_2_semibold color_black wow fadeInDown" data-wow-delay="0.3s">We Are Design & Develop Your Website & Application</h6>
                        <a href="#contact" class="blue_btn btn font_2_bold text-uppercase wow fadeInUp">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="banner_image">
                        <div id="MoveImage">
                            <img src="assets/images/home_right_image.png" class="home_right_image layer wow fadeIn"
                                data-wow-duration="2s" data-depth="-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Banner Section end -->

    <!-- Home About Us Section Start -->
    <section class="home_aboutus_section" id="about">
        <div class="container">
            <div class="row">
                <!-- order-1 order-md-1 order-lg-0 order-sm-1 -->
                <div class="col-lg-6 home_aboutus_left col-md-12 ">
                    <div class="heading mobile_heading  ">
                        <h1 class="font_1 color_blue wow fadeInDown" data-wow-delay="0.1s">About <span class="color_pink">Us</span></h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-6">
                            <div class="icon_box icon_box_up wow fadeIn" data-wow-delay="0.2s">
                                <img src="assets/images/icons/Client_Satisfaction.gif" alt="">
                                <h3 class="font_2_bold">100%</h3>
                                <h6 class="font_2_bold">Client Satisfaction</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="icon_box wow fadeIn" data-wow-delay="0.3s">
                                <img src="assets/images/icons/Hours_of_Support.gif" alt="">
                                <h3 class="font_2_bold">1000+</h3>
                                <h6 class="font_2_bold">Hours of Support</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="icon_box wow fadeIn" data-wow-delay="0.4s">
                                <img src="assets/images/icons/Projects.gif" alt="">
                                <h3 class="font_2_bold">30+</h3>
                                <h6 class="font_2_bold">Projects</h6>
                            </div>
                        </div>
                        <div class="col-md-6 col-6">
                            <div class="icon_box icon_box_up2 wow fadeIn" data-wow-delay="0.5s">
                                <img src="assets/images/icons/Years_Experience.gif" alt="">
                                <h3 class="font_2_bold">4+</h3>
                                <h6 class="font_2_bold">Years Experience</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="heading desktop_heading">
                        <h1 class="font_1 color_blue wow fadeInDown" data-wow-delay="0.1s">About <span class="color_pink">Us</span></h1>
                    </div>
                    <div class="content">
                        <p class="font_2_regular color_black wow fadeInDown" data-wow-delay="0.2s"><h4 class="color_blue wow fadeInDown" data-wow-delay="0.2s">Vrundavan Infosys Leading New Technology With.</h4><p class="font_2_regular color_black wow fadeInDown" data-wow-delay="0.2s"> We decided to start the business after working for 4+ years in it industry and witnessing firsthand what development companies do to their clients.</p>
                        <p class="font_2_regular color_black wow fadeInDown" data-wow-delay="0.3s">Vrundavan Infosys always working sincerely with all my heart for my customers. Your project will be completed on time with 100% quality and accuracy. Our aim is to place our client’s satisfaction first while working with the latest technology and optimized solutions.</p>
                        <p class="font_2_regular color_black wow fadeInDown" data-wow-delay="0.4s">Creativity comes in many forms, from wonderful designs to complicated programming solutions. Creative problem-solving is one of the most valuable assets we have as an agency.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Us Section End -->

    <!-- Home Service Page Start -->
    <section class="home_service_section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading heading_center text-center">
                        <h1 class="font_1 color_white wow fadeInDown" data-wow-delay="0.1s">Services <span class="color_pink">We Offer</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6"> 
                    <div class="service_box wow fadeInDown"  data-wow-delay="0.1s">
                        <img src="assets/images/icons/Web Development.svg" alt="" class="img-fluid">
                        <h6 class="font_2_semibold color_white">Web Development</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6"> 
                    <div class="service_box wow fadeInDown"  data-wow-delay="0.2s">
                        <img src="assets/images/icons/Web Designing.svg" alt="" class="img-fluid">
                        <h6 class="font_2_semibold color_white">Web Designing</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6"> 
                    <div class="service_box wow fadeInDown"  data-wow-delay="0.3s">
                        <img src="assets/images/icons/E-commerce Website.svg" alt="" class="img-fluid">
                        <h6 class="font_2_semibold color_white">E-commerce Website</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6"> 
                    <div class="service_box wow fadeInDown"  data-wow-delay="0.4s" >
                        <img src="assets/images/icons/UI_UX Design.svg" alt="" class="img-fluid">
                        <h6 class="font_2_semibold color_white">UI/UX Design</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6"> 
                    <div class="service_box wow fadeInDown">
                        <img src="assets/images/icons/Mobile App Development.svg" alt="" class="img-fluid">
                        <h6 class="font_2_semibold color_white">Mobile App Development</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6"> 
                    <div class="service_box wow fadeInDown"  data-wow-delay="0.4s">
                        <img src="assets/images/icons/Application Design.svg" alt="" class="img-fluid">
                        <h6 class="font_2_semibold color_white">Application Design</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6"> 
                    <div class="service_box wow fadeInDown"  data-wow-delay="0.5s">
                        <img src="assets/images/icons/WordPress Development.svg" alt="" class="img-fluid">
                        <h6 class="font_2_semibold color_white">WordPress Development</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6"> 
                    <div class="service_box wow fadeInDown" data-wow-delay="0.6s"> 
                        <img src="assets/images/icons/Logo & Graphic Design.svg" alt="" class="img-fluid">
                        <h6 class="font_2_semibold color_white">Logo & Graphic Design</h6>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.3s">
                        <a href="#contact" class="pink_btn btn font_2_bold text-uppercase">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Service Page End -->

    <!-- Technology Section Start -->
    <section class="technology_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading heading_center text-center">
                        <h1 class="font_1 color_blue wow fadeInDown" data-wow-delay="0.1s">Technology <span class="color_pink">We Work</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 custom_size">
                    <div class="technology_box wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="font_2_semibold">DESIGN</h5>
                        <ul>
                            <li><img src="assets/images/icons/xd.png" alt="xd"> <h6 class="color_black font_2_medium">Adobe Xd</h6></li>
                            <li><img src="assets/images/icons/ps.png" alt="xd"> <h6 class="color_black font_2_medium">Adobe Photoshop</h6></li>
                            <li><img src="assets/images/icons/ai.png" alt="xd"> <h6 class="color_black font_2_medium">Adobe Illustrator</h6></li>
                            <li><img src="assets/images/icons/figma.png" alt="xd"> <h6 class="color_black font_2_medium">Figma</h6></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 custom_size">
                    <div class="technology_box wow fadeInUp" data-wow-delay="0.3s">
                        <h5 class="font_2_semibold">Web-Frontend</h5>
                        <ul>
                            <li><img src="assets/images/icons/Angular.png" alt="xd"> <h6 class="color_black font_2_medium">Angular</h6></li>
                            <li><img src="assets/images/icons/React_Js.png" alt="xd"> <h6 class="color_black font_2_medium">React Js</h6></li>
                            <li><img src="assets/images/icons/HTML.png" alt="xd"> <h6 class="color_black font_2_medium">HTML</h6></li>
                            <li><img src="assets/images/icons/CSS.png" alt="xd"> <h6 class="color_black font_2_medium">CSS</h6></li>
                            <li><img src="assets/images/icons/Java_Script.png" alt="xd"> <h6 class="color_black font_2_medium">Java Script</h6></li>
                            <li><img src="assets/images/icons/Vue_Js.png" alt="xd"> <h6 class="color_black font_2_medium">Vue Js</h6></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 custom_size">
                    <div class="technology_box wow fadeInUp" data-wow-delay="0.4s">
                        <h5 class="font_2_semibold">App-Frontend</h5>
                        <ul>
                            <li><img src="assets/images/icons/Flutter.png" alt="xd"> <h6 class="color_black font_2_medium">Flutter</h6></li>
                            <li><img src="assets/images/icons/Ionic.png" alt="xd"> <h6 class="color_black font_2_medium">Ionic</h6></li>
                            <li><img src="assets/images/icons/Android.png" alt="xd"> <h6 class="color_black font_2_medium">Android</h6></li>
                            <li><img src="assets/images/icons/Swift.png" alt="xd"> <h6 class="color_black font_2_medium">Swift</h6></li>
                            <li><img src="assets/images/icons/Xamarin.png" alt="xd"> <h6 class="color_black font_2_medium">Xamarin</h6></li>
                            <li><img src="assets/images/icons/Native_Script.png" alt="xd"> <h6 class="color_black font_2_medium">Native Script</h6></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 custom_size">
                    <div class="technology_box wow fadeInUp" data-wow-delay="0.5s">
                        <h5 class="font_2_semibold">Database</h5>
                        <ul>
                            <li><img src="assets/images/icons/Ms-sql.png" alt="xd"> <h6 class="color_black font_2_medium">Ms-sql</h6></li>
                            <li><img src="assets/images/icons/Sql-lite.png" alt="xd"> <h6 class="color_black font_2_medium">Sql-lite</h6></li>
                            <li><img src="assets/images/icons/My-sql.png" alt="xd"> <h6 class="color_black font_2_medium">My-sql</h6></li>
                            <li><img src="assets/images/icons/Postgresql.png" alt="xd"> <h6 class="color_black font_2_medium">Postgresql</h6></li>
                            <li><img src="assets/images/icons/Graphql.png" alt="xd"> <h6 class="color_black font_2_medium">Graphql</h6></li>
                            <li><img src="assets/images/icons/Oracle.png" alt="xd"> <h6 class="color_black font_2_medium">Oracle</h6></li>
                        </ul>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-6 custom_size">
                    <div class="technology_box wow fadeInUp" data-wow-delay="0.6s">
                        <h5 class="font_2_semibold">Backend</h5>
                        <ul>
                            <li><img src="assets/images/icons/ASP.NET.png" alt="xd"> <h6 class="color_black font_2_medium">ASP.NET</h6></li>
                            <li><img src="assets/images/icons/Php.png" alt="xd"> <h6 class="color_black font_2_medium">Php</h6></li>
                            <li><img src="assets/images/icons/Java.png" alt="xd"> <h6 class="color_black font_2_medium">Java</h6></li>
                            <li><img src="assets/images/icons/Python.png" alt="xd"> <h6 class="color_black font_2_medium">Python</h6></li>
                            <!-- <li><img src="assets/images/icons/Django.png" alt="xd"> <h6 class="color_black font_2_medium">Django</h6></li> -->
                            <!-- <li><img src="assets/images/icons/Ruby_on_Rails.png" alt="xd"> <h6 class="color_black font_2_medium">Ruby on Rails </h6></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 custom_size">
                    <div class="technology_box wow fadeInUp" data-wow-delay="0.4s">
                        <h5 class="font_2_semibold">CMS</h5>
                        <ul>
                            <li><img src="assets/images/icons/Wordpress.png" alt="xd"> <h6 class="color_black font_2_medium">Wordpress</h6></li>
                            <li><img src="assets/images/icons/Magento.png" alt="xd"> <h6 class="color_black font_2_medium">Magento</h6></li>
                            <li><img src="assets/images/icons/Laravel.png" alt="xd"> <h6 class="color_black font_2_medium">Laravel</h6></li>
                            <li><img src="assets/images/icons/Drupal.png" alt="xd"> <h6 class="color_black font_2_medium">Drupal</h6></li>
                            <li><img src="assets/images/icons/Shopify.png" alt="xd"> <h6 class="color_black font_2_medium">Shopify</h6></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <a href="javascript();" class="blue_btn btn font_2_bold text-uppercase wow fadeInUp" data-wow-delay="0.3s">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Technology Section End -->

    <!-- Project Section Start -->
    <section class="project_section bg_light_grey" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading heading_center text-center">
                        <h1 class="font_1 color_blue wow fadeInDown" data-wow-delay="0.1s">Recent <span class="color_pink">Projects</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="projects_tabs">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link font_2_bold active" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">All design</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link font_2_bold" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">Website Design</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link font_2_bold" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="false">Graphics Design</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link font_2_bold" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-four" aria-selected="false">application design</button>
                              </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery1">
                                            <a href="assets/images/projects/All Design/1.jpg">
                                                <img src="assets/images/projects/All Design/1.1.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery1">
                                            <a href="assets/images/projects/All Design/2.jpg">
                                                <img src="assets/images/projects/All Design/2.1.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery1">
                                            <a href="assets/images/projects/All Design/3.jpg">
                                                <img src="assets/images/projects/All Design/3.3.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery1">
                                            <a href="assets/images/projects/All Design/4.jpg">
                                                <img src="assets/images/projects/All Design/4.4.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery1">
                                            <a href="assets/images/projects/All Design/5.jpg">
                                                <img src="assets/images/projects/All Design/5.5.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery1">
                                            <a href="assets/images/projects/All Design/6.jpg">
                                                <img src="assets/images/projects/All Design/6.6.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery2">
                                            <a href="assets/images/projects/Website Design/1.jpg">
                                                <img src="assets/images/projects/Website Design/1.1.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery2">
                                            <a href="assets/images/projects/Website Design/2.jpg">
                                                <img src="assets/images/projects/Website Design/2.2.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery2">
                                            <a href="assets/images/projects/Website Design/3.jpg">
                                                <img src="assets/images/projects/Website Design/3.3.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery2">
                                            <a href="assets/images/projects/Website Design/4.jpg">
                                                <img src="assets/images/projects/Website Design/4.4.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery2">
                                            <a href="assets/images/projects/Website Design/5.jpg">
                                                <img src="assets/images/projects/Website Design/5.5.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery"2>
                                            <a href="assets/images/projects/Website Design/6.jpg">
                                                <img src="assets/images/projects/Website Design/6.6.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery3">
                                            <a href="assets/images/projects/Graphics Design/1.jpg">
                                                <img src="assets/images/projects/Graphics Design/1.1.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery3">
                                            <a href="assets/images/projects/Graphics Design/2.jpg">
                                                <img src="assets/images/projects/Graphics Design/2.2.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery3">
                                            <a href="assets/images/projects/Graphics Design/3.jpg">
                                                <img src="assets/images/projects/Graphics Design/3.3.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery3">
                                            <a href="assets/images/projects/Graphics Design/4.jpg">
                                                <img src="assets/images/projects/Graphics Design/4.4.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery3">
                                            <a href="assets/images/projects/Graphics Design/5.jpg">
                                                <img src="assets/images/projects/Graphics Design/5.5.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery3">
                                            <a href="assets/images/projects/Graphics Design/6.jpg">
                                                <img src="assets/images/projects/Graphics Design/6.6.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery4">
                                            <a href="assets/images/projects/Application Design/1.jpg">
                                                <img src="assets/images/projects/Application Design/1.1.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery4">
                                            <a href="assets/images/projects/Application Design/2.jpg">
                                                <img src="assets/images/projects/Application Design/2.2.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery4">
                                            <a href="assets/images/projects/Application Design/3.jpg">
                                                <img src="assets/images/projects/Application Design/3.3.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery4">
                                            <a href="assets/images/projects/Application Design/4.jpg">
                                                <img src="assets/images/projects/Application Design/4.4.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery4">
                                            <a href="assets/images/projects/Application Design/5.jpg">
                                                <img src="assets/images/projects/Application Design/5.5.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="project_image gallery4">
                                            <a href="assets/images/projects/Application Design/6.jpg">
                                                <img src="assets/images/projects/Application Design/6.6.jpg" class="img-fluid w-100" alt="project Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="#contact" class="blue_btn btn font_2_bold text-uppercase wow fadeInUp" data-wow-delay="0.3s">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Section End -->

    <!-- Work Process Section Start -->
    <section id="how it works" class="work_process_section bg_pink">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading heading_center text-center">
                        <h1 class="font_1 color_white wow fadeInDown" data-wow-delay="0.1s">Our Work Process</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="process_ul">
                        <li>
                            <div class="process_box">
                                <div class="right_arrow">
                                    <img src="assets/images/icons/box_arrow.png" alt="box_arrow">
                                </div>
                                <img src="assets/images/icons/Requirement_Gathering.png" alt="Requirement_Gathering">
                                <h6 class="font_2_semibold color_black">Requirement Gathering</h6>
                            </div>
                        </li>
                        <li>
                            <div class="process_box">
                                <div class="right_arrow">
                                    <img src="assets/images/icons/box_arrow.png" alt="box_arrow">
                                </div>
                                <img src="assets/images/icons/UIUX_Design.png" alt="UIUX_Design">
                                <h6 class="font_2_semibold color_black">UI/UX Design</h6>
                            </div>
                        </li>
                        <li>
                            <div class="process_box">
                                <div class="right_arrow">
                                    <img src="assets/images/icons/box_arrow.png" alt="box_arrow">
                                </div>
                                <img src="assets/images/icons/Development.png" alt="Development">
                                <h6 class="font_2_semibold color_black">Development</h6>
                            </div>
                        </li>
                        <li>
                            <div class="process_box">
                                <div class="right_arrow">
                                    <img src="assets/images/icons/box_arrow.png" alt="box_arrow">
                                </div>
                                <img src="assets/images/icons/Launch.png" alt="Launch">
                                <h6 class="font_2_semibold color_black">Launch</h6>
                            </div>
                        </li>
                        <li>
                            <div class="process_box">
                                <img src="assets/images/icons/Support.png" alt="Support">
                                <h6 class="font_2_semibold color_black">Support</h6>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Process Section End -->

    <!-- Contact Section Start -->
    <section class="contact_section" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading heading_center text-center" id="contact">
                        <h1 class="font_1 color_blue wow fadeInDown" data-wow-delay="0.1s">Contact <span class="color_pink">Form</span></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="contact_form wow fadeInLeft" data-wow-delay="0.3s">
                        <form method="POST" action="<?php echo url('contact_form.php') ?>">
                            <h2 class="font_2_bold color_black">Get in Touch</h2>
                            <div class="mb-3">
                                <input type="text" class="form-control custom_form_control" placeholder="Full Name*" name="fname" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control custom_form_control" placeholder="Contact Number*" name="num"  minlength="10" maxlength="14" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control custom_form_control" placeholder="Email*" name="email" required>
                            </div>
                            <div class="mb-3">
                                <select class="form-service" required name="service_id">
                                    <option>Select Service</option>
                                    <?php

                                    include 'includes/connection.php';
                                    $sql = "select * from services where status=1";
                                    if ($result = $conn->query($sql)) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<option value=".$row['id'].">".$row['name']."</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Message*" name="message"></textarea required>
                            </div>
                            <button class="blue_btn btn font_2_bold text-uppercase wow fadeInLeft" data-wow-delay="0.3s" type="submit" value="add" name="submit">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 contact_padding">
                    <div class="logo_box wow fadeInRight" data-wow-delay="0.2s">
                        <img src="assets/images/footer_logo.svg" alt="footer_logo">
                    </div>
                    <ul class="contact_ul">
                        <li class="wow fadeInDown">
                            <div class="left">
                                <img src="assets/images/icons/Location.svg" alt="map_circle">
                            </div>
                            <div class="right">
                                <h6 class="color_black font_2_semibold font_2_medium text-uppercase">Address</h6>
                                <span class="color_black font_2_medium">Surat, Gujarat, 300006</span>
                            </div>
                        </li>

                        <li class="wow fadeInDown">
                            <div class="left">
                                <img src="assets/images/icons/Call.svg" alt="call_circle">
                            </div>
                            <div class="right">
                                <h6 class="color_black font_2_semibold font_2_medium text-uppercase">Call US</h6>
                                <span><a class="email_link" href="callto:9409481342"class="color_black font_2_medium">+91 9409481342</a></span>
                            </div>
                        </li>
                        <li class="wow fadeInDown">
                            <div class="left">
                                <img src="assets/images/icons/email.svg" alt="mail_circle">
                            </div>
                            <div class="right">
                                <h6 class="color_black font_2_semibold font_2_medium text-uppercase">Email</h6>
                                <span><a class="email_link" href="mailto:info@vrundavaninfosys.com" class="color_black font_2_medium">Info@vrundavaninfosys.com</a></span>
                                <div><a class="email_link" href="mailto:contact@vrundavaninfosys.com" class="color_black font_2_medium">contact@vrundavaninfosys.com</a></div>
                            </div>
                        </li>
                    </ul>
                    <div class="social_links">
                        <h4 class="font_2_bold color_black text-uppercase wow fadeInUp" data-wow-delay="0.3s">Follow Us</h4>
                        <ul class="social_link_ul">
                            <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="https://join.skype.com/invite/vbP8xVegUwAM" target="_blank"><i class="fab fa-skype"></i></a></li>
                            <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="https://www.linkedin.com/company/78279858/admin/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="https://instagram.com/vrundavan_infosys?utm_medium=copy_link" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    
    <!-- Wrapper End -->

    <!-- Footer Start -->
    <footer class="text-center">
        <p class="mb-0 font_2_medium color_white wow fadeInUp" data-wow-delay="0.2s">Copyright 2021. Vrundavan Infosys. All Rights Reserved.</p>
    </footer>
    <!-- Footer End -->


    <!-- social Media -->

        <div class="s-soft">
            <a href="https://join.skype.com/invite/vbP8xVegUwAM" target="_blank" class="s-item skype">
                <span class="fab fa-skype"></span>
            </a>
            <a href="https://wa.me/919409481342" target="_blank" class="s-item whatsapp">
                <span class="fa fa-whatsapp"></span>
            </a>
        </div>
        
    



    <!-- jquery , Bootstrap  with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="assets/js/script.js"></script>
    </body>
</html>



<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>


<script>
    
    window.console = window.console || function(t) {};
</script><script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script id="rendered-js">
$(document).ready(function () {
  $('#so-close').click(function () {
    $('.s-soft').addClass('so-collapse');
    $('#so-open').delay(300).css('left', '0');
  });

  $('#so-open').click(function () {
    $('#so-open').css('left', '-60px');
    $('.s-soft').removeClass('so-collapse');
  });}); 

</script>

<script>
    // $(window).scroll(function () {
    //     var scroll = $(window).scrollTop();

    //     if (scroll >= 400) {
    //         $(".sticky").addClass("darkheader");
    //     } else {
    //         $(".sticky").removeClass("darkheader");
    //     }
    // });

    // animaion images code here
    var scene = document.getElementById('MoveImage');
    var parallax = new Parallax(scene);


    $(document).ready(function () {
        $('#nav-icon3').click(function () {
            $(this).toggleClass('open');
            $(".slider-nav-thumbnails").toggle();
        });
        new WOW().init();

        
    });


    var TxtRotate = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
    };

    TxtRotate.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = this.txt;
    // this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 300 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
    }

    setTimeout(function() {
        that.tick();
    }, delta);
    };

    // Typeriting Effect - Banner
    window.onload = function() {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-rotate');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
    document.body.appendChild(css);
    };
</script>


<script>
    $(document).ready(function() {
        // add all to same gallery
        $(".gallery1 a").attr("data-fancybox","mygallery");
        $(".gallery2 a").attr("data-fancybox","mygallery");
        $(".gallery3 a").attr("data-fancybox","mygallery");
        $(".gallery4 a").attr("data-fancybox","mygallery");

        // assign captions and title from alt-attributes of images:
        $(".gallery1 a").each(function(){
            $(this).attr("data-caption", $(this).find("img").attr("alt"));
            $(this).attr("title", $(this).find("img").attr("alt"));
        });
        $(".gallery2 a").each(function(){
            $(this).attr("data-caption", $(this).find("img").attr("alt"));
            $(this).attr("title", $(this).find("img").attr("alt"));
        });
        $(".gallery3 a").each(function(){
            $(this).attr("data-caption", $(this).find("img").attr("alt"));
            $(this).attr("title", $(this).find("img").attr("alt"));
        });
        $(".gallery4 a").each(function(){
            $(this).attr("data-caption", $(this).find("img").attr("alt"));
            $(this).attr("title", $(this).find("img").attr("alt"));
        });

        // start fancybox:
        $(".gallery1 a").fancybox();
        $(".gallery2 a").fancybox();
        $(".gallery3 a").fancybox();
        $(".gallery4 a").fancybox();
    });
</script>
<?php
    if (isset($_SESSION['alert'])) {
        $message = $_SESSION['alert'];
        unset($_SESSION['alert']);
    ?>
        <script src="<?php echo url('/assets/js/sweetalert2.js') ?>"></script>
        <script>
        Swal.fire(
            '<?php echo ($message['title']) ?>',
            '<?php echo ($message['body']) ?>',
            '<?php echo ($message['type']) ?>',
        )
        </script>
    <?php
    }
?>