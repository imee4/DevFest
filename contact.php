<!DOCTYPE html>
<html lang="en">
  <head>
    <title>gdg gussu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">DevFest<span>2022.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
  
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto" style="background-color: black;">
            <li class="nav-item active"><a href="index.html" class="nav-link" style=" color: white;">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link" style=" color: white;">About</a></li>
            <li class="nav-item"><a href="speakers.html" class="nav-link" style=" color: white;">Speakers</a></li>
            <!-- <li class="nav-item"><a href="schedule.html" class="nav-link">Schedule</a></li> -->
            <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
            <li class="nav-item"><a href="contact.php" class="nav-link" style=" color: white;">Contact</a></li>
            <li class="nav-item cta mr-md-2"><a href="regpro.php" class="nav-link">Register Your Project For DevFest</a></li>
  
          </ul>
        </div>
      </div>
 
	  </nav>
    <!-- END nav -->
    
    <section class=" js-fullheight" style="background-image: url('images/bg_2.jpg'); background-position:center; background-repeat: no-repeat;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
            <h1 class="mb-3 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span>Zamfara State,
              Gusau, Nigeria</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+ 234 7035 4605 99</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">gdggusau@gmail.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">gdg.community.dev/gdg-gusau</a></p>
          </div>
        </div>
        <div class="row block-9">
          <?php

  // if (isset($_POST['save']))
  // {
    
   // include "db_config.php";

   //  $dbname = "dev_fest";
   //  $name = $_POST['name'];
   //  $email = $_POST['email'];
   //  $subject = $_POST['subject'];
   //  $message = $_POST['message'];


   //  // Create connection
   //  $conn = new mysqli($servername, $username, $password, $dbname);
   //  // Check connection
   //  if ($conn->connect_error) {
   //    die("Connection failed: " . $conn->connect_error);
   //  }

   //  $sql = "INSERT INTO contact (name, email, subject, message)
   //  VALUES ('" .  $name .  "', '" .  $email . "', '" .  $subject . "', '" .  $message . "')";

   //  if ($conn->query($sql) === TRUE) {
   //    echo "<center><div class='card' style='background-color:blue; color: white; height: 40px; width:450px; justify-content: center;'><b>Your Message was Successfully Sent</b></div></center>";
   //  } else {
   //    echo "Error: " . $sql . "<br>" . $conn->error;
   //  }

   //  $conn->close();
   //  }
?>
          <div class="col-md-6 order-md-last d-flex">
            <form action="http://127.0.0.1:8000/api/contact-us" method="post" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" name="email" id="email"class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" name="save" id="save" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
		<!-- <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">DevFest</h2>
              <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                there live the blind texts.</p> -->
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <!-- <li><a href="#" class="py-2 d-block">Speakers</a></li> -->
                <!-- <li><a href="#" class="py-2 d-block">Shcedule</a></li> -->
                <!-- <li><a href="#" class="py-2 d-block">Events</a></li> -->
                <!-- <li><a href="#" class="py-2 d-block">Blog</a></li> -->
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <!-- <li><a href="#" class="py-2 d-block">Career</a></li> -->
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <!-- <li><a href="#" class="py-2 d-block">Services</a></li> -->
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Zamfara State,
                     Gusau, Nigeria</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+234 070 3546
                        0599</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span
                        class="text">gdggusau@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
  
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script>  CodesWell</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>