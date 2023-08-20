<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sports' Event Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">



</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html">
              
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                <li><a href="events.php#here" class="nav-link">List of Events</a></li>
                <li><a href="contact.html" class="nav-link">About Us</a></li>
                <li><a href="contact.html" class="nav-link">Contact Us</a></li>
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="hero overlay" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 ml-auto" >
            <h3>Your personal details are listed below:</h3>
            <?php
              $uname=$_REQUEST["a"];

              $con=mysqli_connect("localhost","root","1234","sports");
              $r=mysqli_query($con,"select * from registration where username='$uname' ");


              while($row=mysqli_fetch_array($r))
              {     if ($row[2]=="Female")
          				{	?>
          					<img src="images/female.jpeg" alt="Girl " width="150" height="150">
          					 <a href="update.php?a=<?php echo $row[5];?>" class="btn btn-primary py-3 px-2 mr-3" style="margin-left:120px ;">Update Details</a></br></br></br>
          			<?php	}
              		 else
					{	?>
							<img src="images/male.jpeg" alt="boy" width="150" height="150">
							 <a href="update.php?a=<?php echo $row[5];?>" class="btn btn-primary py-3 px-2 mr-3" style="margin-left:120px ;">Update Details</a></br></br></br>
          			<?php 	}

					echo "<tr><td ><h4>Name: $row[1]</td></tr>"; ?></h4></br><?php
					echo "<tr><td ><h4>Gender: $row[2]</td></tr>"; ?></h4></br><?php
					echo "<tr><td ><h4>Contact no.: $row[3]</td></tr>"; ?></h4></br><?php
					echo "<tr><td ><h4>Email: $row[4]</td></tr>"; ?></h4></br><?php
					echo "<tr><td ><h4>Username: $row[5]</td></tr>"; ?></h4></br><?php
        }

        ?>             

              
                                     
          </div>
        </div>
      </div>
    </div>

    
    
    <div class="container">
      

      <div class="row">
        <div class="col-lg-12">
          
          
        </div>
      </div>
    </div>
  

    <!-- .site-section -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
            <h2 class="heading">"Keep seeking and you'll find doors of opportunity opening for you."</h2>
          </div>
          <div class="col-6 text-right">
            <div class="custom-nav">
            <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
            <span></span>
            <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>


        <div class="owl-4-slider owl-carousel">
          <div class="item">
            <div class="video-media">
              <img src="images/img1.jpg" alt="Image" class="img-fluid">
              
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img2.jpg" alt="Image" class="img-fluid">
              
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img3.jpg" alt="Image" class="img-fluid">
              
            </div>
          </div>

          <div class="item">
            <div class="video-media">
              <img src="images/img4.jpg" alt="Image" class="img-fluid">
              
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img_5.jpg" alt="Image" class="img-fluid">
             
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img6.jpg" alt="Image" class="img-fluid">
              
            </div>
          </div>

        </div>

      </div>
    </div>
    

    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>News</h3>
              <ul class="list-unstyled links">
                <li><a href="#">All</a></li>
                <li><a href="#">Club News</a></li>
                <li><a href="#">Media Center</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">RSS</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Tickets</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Online Ticket</a></li>
                <li><a href="#">Payment and Prices</a></li>
                <li><a href="#">Contact &amp; Booking</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Coupon</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Matches</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Standings</a></li>
                <li><a href="#">World Cup</a></li>
                <li><a href="#">La Lega</a></li>
                <li><a href="#">Hyper Cup</a></li>
                <li><a href="#">World League</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Social</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="row text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div>
  <!-- .site-wrap -->

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