<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location: index.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<style>
.dropbtn {
  background-color: #51be78;
  color: white;
  padding: 8px;
  font-size: 16px;
  border: none;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 8px;
  text-decoration: none;
  display: block;
}

.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #51be78;}
</style>	
	
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  
 
 

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style5.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> +91 9135449155</a> 
            <a href="https://mail.google.com/" class="small mr-3" target="_blank"><span class="icon-envelope-o mr-2"></span> stockupworld@gmail.com</a> 
          </div>
		  
          <div class="col-lg-3 text-right">
            <a>Welcome <?php echo $_SESSION['username'];?></a>
			<p><a href="logout.php" class="btn btn-primary rounded-0 px-4">Logout</a></p>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html" class="d-block">
              <img src="images/logo.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="#" class="nav-link text-left">Home</a>
                </li>
                <li class="has-childre">
                  <a href="#courses" class="nav-link text-left">Our Courses</a>
                  
                </li>
                <li>
                  <a href="#about us" class="nav-link text-left">About Us</a>
                </li>
                <li>
                  <a href="#connect_with_us" class="nav-link text-left">Connect with us</a>
                </li>
                <li>
                    <a href="#contact" class="nav-link text-left">Contact</a>
                  </li>
				  <li>
				  <div class="dropdown">
				   <button class="dropbtn">Profile</button>
						<div class="dropdown-content">
							<a href="my_course.php" target="_blank">My Course</a>
							<a href="acc_seting.php" target="_blank">Account Setting</a>
						</div>
						</div>
                    <!-- <a href="manage_profile.php" class="nav-link text-left">Profile</a> -->
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="https://www.youtube.com/channel/UCbSZg89peOsxVGerC2Tmp8A" target="_blank"><span class="icon-youtube"></span></a>
              <a href="https://www.facebook.com/Stock_up_world-111475723893008/" target="_blank"><span class="icon-facebook"></span></a>
              <a href="https://wa.me/917004471316" target="_blank"><span class="icon-whatsapp"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>

   <!------------------------------ Slider --------------------------> 
   
   
    <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('images/stock1.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>You can Learn Share Market</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/stock3.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h1>Open free Account</h1>
			  <div >
			  <p style="margin-left:34%;"><a href="https://upstox.com/open-account/?f=A2LS" class="btn btn-primary rounded-0 px-4" target="_blank">Upstox</a></p>
			  <h1>Or</h1>
			  <p style="margin-left:34%;"><a href="http://tinyurl.com/yx7d9fhg" class="btn btn-primary rounded-0 px-4" target="_blank">Angel Broker</a></p>
			  </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    

 

  <!------------------------------------ Courses ---------------------> 


    <div id="courses" class="site-section">
      <div class="container">


        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-3">
              <span>Our Courses</span>
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, id?</p>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
              <div >
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="images/course_1.jpg" alt="Image" class="img-fluid"></a>
                      <div class="price">$99.00</div>
                      <div class="category"><h3>Stock Exchange</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>How To Create Mobile Apps Using Ionic</h2>
                      
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>
      
              </div>
      
          </div>
        </div> 
      </div>
    </div>

    
<!----------------------------  About Us ------------------------------>

    <div id="about us" class="section-bg style-1" style="background-image: url('images/about_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>Why Choose Us ?</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="lead">Every month 2 days live DISCUSSION class</p>
            <p>Every Friday live class</p>
			<p>After my class you earn daily 5% to 10% on your capital</p>
			<p>My strategy work for all market</p>
			<p>Full price action strategy</p>
           <!-- <p><a href="#">Read more</a></p> -->
          </div>
        </div>
      </div>
    </div>

    
 
    
<!---------------------------  Connect with us ------------------------------>
   
    
   <div id="connect_with_us" class="Connect-with-us">
      <div class="container">
          <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-3">
              <span>Connect with us</span>
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, id?</p>
          </div>
        </div>
		<div class="ml-auto">
            <div class="social-wrap" style="padding:40px;margin-left:35%;">
              <a href="https://www.facebook.com/Stock_up_world-111475723893008/" target="_blank"><span class="icon-facebook"></span></a>
              <a href="https://www.linkedin.com/in/pankaj-kumar-94910a1a6" target="_blank"><span class="icon-linkedin"></span></a>
			  <a href="https://www.youtube.com/channel/UCbSZg89peOsxVGerC2Tmp8A" target="_blank"><span class="icon-youtube"></span></a>
			  <a href="STOCKUPWORLD@GMAIL.COM" target="_blank"><span class="icon-google-plus" ></span></a>
			  <a href="https://wa.me/917004471316" target="_blank"><span class="icon-whatsapp"></span></a>
			  <a href="https://instagram.com/stockupword?igshid=4vdraswdi8sz" target="_blank"><span class="icon-instagram"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
      </div>
    </div>

   
<!---------------------------------- Footer ------------------------------------->

    <div id="contact" class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="images/logo.png" alt="Image" class="img-fluid"></p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>  
            <p><a href="#">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Extra Links</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Affiliate</a></li>
                <li><a href="#">Privacy Policy</a></li>
                
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Courses</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">StockExchange</a></li>
                  
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Add:- nasriganj Biscuit factory more main road Digha,patna(800012)</a></li>
                  <li><a href="#">+91 9135449155</a></li>
				  <li><a href="#">+91 7004471316</a></li>
                  <li><a href="#">stockupworld@gmail.com</a></li>
              </ul>
          </div>
        </div>

       
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>