<?php
include('security.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ఇ-ఆంధ్ర</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
   


  <link rel="stylesheet" href="https://drvic10k.github.io/bootstrap-sortable/Contents/bootstrap-sortable.css" />



  


    <link rel="shortcut icon" href="img/odi.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

 

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
<link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style0.css">
     <!-- Vendor CSS Files -->
  
  <link href="vendor1/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor1/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor1/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor1/remixicon/remixicon.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <style type="text/css">
    .responsive {
  max-width: 90%;
  height: auto;
}


#mapsbtn {

  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  margin-bottom: 10px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: blue;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

#mapsbtn:hover {background-color: grey}

#mapsbtn:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

#mapsbtn:hover a{

   color: #21c87a;    
}
    



  </style>
  </head>

    <body>
   
     <?php
    include('navbar.php');
    ?>
    


 <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container"><br><br><br>
         <img class="animated fadeInDown" src="img/blog/o1.png" >
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
        
          <img class="animated fadeInDown" src="img/blog/o3.png">
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
         <img class="animated fadeInDown" src="img/blog/o2.png" >
          
         
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section>



 <section id="features" class="features">
      <div class="container">


        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block"> COVID 19 SUPPLIES</h4></a>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" data-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">GROCERY</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <a class="nav-link" data-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">ESSENTIALS</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
            <a class="nav-link" data-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">HEALTH & FITNESS</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
             <div class="card-deck col-lg-12">
    <?php
          $query = "SELECT * FROM ecommerce WHERE type='covid'";
          $query_run = mysqli_query($connection, $query);
        ?>
    <?php 
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
              ?>
    <div class="col-md-4">
      <div class="card" style="height:430px">
        <div class="card-body text-center" style="height: 290px;">
          <?php echo $row['image'];?>
        </div>
        <div class="card-footer">
          <h5 class="card-title text-center" style="height: 100px;"><?php echo $row['text'];?></h5>
        </div>
      </div>
      <br>
    </div>
    <?php
        }
      }
    ?>

  </div>

              
            </div>

          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
       <div class="card-deck col-lg-12">
    <?php
          $query = "SELECT * FROM ecommerce WHERE type='grocery'";
          $query_run = mysqli_query($connection, $query);
        ?>
    <?php 
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
              ?>
    <div class="col-md-4">
      <div class="card" style="height:430px">
        <div class="card-body text-center" style="height: 290px;">
          <?php echo $row['image'];?>
        </div>
        <div class="card-footer">
          <h5 class="card-title text-center" style="height: 100px;"><?php echo $row['text'];?></h5>
        </div>
      </div>
      <br>
    </div>
    <?php
        }
      }
    ?>

  </div>

             
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
             <div class="card-deck col-lg-12">
    <?php
          $query = "SELECT * FROM ecommerce WHERE type='essentials'";
          $query_run = mysqli_query($connection, $query);
        ?>
    <?php 
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
              ?>
    <div class="col-md-4">
      <div class="card" style="height:430px">
        <div class="card-body text-center" style="height: 290px;">
          <?php echo $row['image'];?>
        </div>
        <div class="card-footer">
          <h5 class="card-title text-center" style="height: 100px;"><?php echo $row['text'];?></h5>
        </div>
      </div>
      <br>
    </div>
    <?php
        }
      }
    ?>

  </div>
             
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
           <div class="card-deck col-lg-12">
    <?php
          $query = "SELECT * FROM ecommerce WHERE type='health'";
          $query_run = mysqli_query($connection, $query);
        ?>
    <?php 
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
              ?>
    <div class="col-md-4">
      <div class="card" style="height:520px">
        <div class="card-body text-center" style="height: 290px;">
          <?php echo $row['image'];?>
        </div>
        <div class="card-footer">
          <h5 class="card-title text-center" style="height: 190px;"><?php echo $row['text'];?></h5>
        </div>
      </div>
      <br>
    </div>
    <?php
        }
      }
    ?>

  </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->





















<!--
<div class="card-deck col-lg-12">
    <?php
          $query = "SELECT * FROM ecommerce";
          $query_run = mysqli_query($connection, $query);
        ?>
    <?php 
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
              ?>
    <div class="col-md-4">
      <div class="card" style="height:290px">
        <div class="card-body text-center" style="height: 290px;">
          <?php echo $row['image'];?>
        </div>
        <div class="card-footer">
          <h5 class="card-title text-center"><?php echo $row['text'];?></h5>
        </div>
      </div>
      <br>
    </div>
    <?php
        }
      }
    ?>

  </div>-->


  <br><br><br><br>
    <footer class="site-footer" role="contentinfo">
     
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">An online inuitive platform designed to serve the society.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
           
            <div><a href="contact.php">
             <button id="mapsbtn">CONTACT US</button></a>
            </div>
          </div>

          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">About</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Disclaimers</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
        
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    

    <script src="js/main.js"></script>
    <script src="js/main1.js"></script>
    
  </body>
</html>