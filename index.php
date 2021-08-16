<!-- =================================================
Theme Name: Party Bootstrap Theme 
Author: WebThemez.com
License: https://webthemez.com/license
======================================================= -->
  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Party Bootstrap 4 Website Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta content="Author" name="WebThemez">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet"> 
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">name@websitename.com</a>
        <i class="fa fa-phone"></i> +1 2345 67855 22
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><span><i class="fa fa-bolt" aria-hidden="true"></i></span>PARTY</a></h1> 
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#services">We Do</a></li>
          <li><a href="#about">Who We</a></li>
          <li><a href="#portfolio">Gallery</a></li>
          <li><a href="#event">Events</a></li>
          <li><a href="#team">Team</a></li> 
		  <li><a href="#price">Price</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <center><h2><span>Pool Party</span><br>By <br>The Department of Physics & Plant Breeding and Seed Technology</hh2></center>
      <div>
        <a href="#RegisterForm" class="btn-get-started scrollto">Register Now</a> 
      </div>
    </div>
    <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>  
  </section><!-- #intro -->

  <main id="main">



    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Register Now</h2>
          
        </div>

        
         
		 
		      <div class="container"></div>
        <div class="form"> 
		  
		   <!-- Form itself -->
          <center><form name="sentMessage" class="well" id="RegisterForm" action="processbill.php" method="post" novalidate> 
		 <div class="control-group">
                   <div class="form-group">
			<input type="text" class="form-control" 
			   	   placeholder="First name" name="first_name" required
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>
        <input type="text" class="form-control" 
			   	   placeholder="Last name" name="last_name" required
			           data-validation-required-message="Please enter your name" />
			  <p class="help-block"></p>

        <select name="gender" class="form-control" required>
          <option value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
         
        </select>

		   </div>
	         </div> 	
                <div class="form-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email" 
			   	            name="email" required
			   		   data-validation-required-message="Please enter your email" />
		</div>
	    </div> 	
			  
               		 
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" name="submit" class="btn btn-primary ">Pay</button><br />
          </form></center>
        </div>

      </div>
		 
         

        </div>
      </div>

      
 
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Made by <a href="https://adtrexdev.netlify.app/">adtrex</a>
      </div>
      
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript  -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script> 
 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
