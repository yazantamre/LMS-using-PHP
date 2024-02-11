<!DOCTYPE html>
<html lang="en">
  <?php 
 
$loginStutes =0;
     session_start();

      if (isset($_SESSION['valid'])) {
       if ( $_SESSION['valid'] == 3 ) 
$loginStutes =1;

else  if ( $_SESSION['valid'] == 2 ) 
$loginStutes =1;
else if ( $_SESSION['valid'] == 1 ) 
$loginStutes =1;
    } 
      
 
 echo $loginStutes ;


require('../DB/DB.php');

     $db = new DB(); 
      

     
 ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HebrOnline</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/icon.png"  sizes="32x32"  rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>
 <!-- ======= Header ======= -->
   
 
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto">PalLMS</h1>
  
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul class="d-flex align-items-center"> 
          <li><a   class="active" href="index.php">Home</a></li>
          <li><a   href="courses.php">Courses</a></li>
          <li><a  href="contact.php">Contact</a></li>
          <li><a  href="about.php">About</a></li>

          <?php 
  $actionroot   = '' ;
    if ($loginStutes ==1) {
      // code...
   
if ( $_SESSION['valid'] == '3' ) 
     {
   $actionroot  = "../student/";

    }
    else 
      if ( $_SESSION['valid'] == '2' ) 
     {
   $actionroot  = "../teacher/";

    }

    else if  ( $_SESSION['valid'] == '1' ) 
     {
   $actionroot  = "../admin/";

    }


           ?>
          <ul>
            <li><img  src="<?php echo $_SESSION['img']; ?>"  alt="" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 35px;object-fit:cover;"></li>
            <li class="dropdown"><a href="#"><span> <?php echo $_SESSION['name'] ;?> </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo $actionroot ?>">My account</a></li>
              <li><a href="../DB/logout.php">Log out</a></li>
            </ul>
            </li>
            </ul>

             </ul>
      </nav>
          <?php 
 }
else 
     
 {
          ?>

  </ul>
      </nav>
      <a href="signInUp.php" class="get-started-btn">Sign Up</a>

        <?php  } ?>
       <!-- .navbar -->

    </div>
  </header>
  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Teachers</h2>
        <p>Elevate your learning experience with our exceptional teachers who inspire, guide, and redefine education</p>
      </div>
    </div><!-- End Breadcrumbs -->

<!-- ======= Trainers Section ======= -->
<section id="trainers" class="trainers" >
  <div  class="container" data-aos="fade-up">
    <div  class="row" data-aos="zoom-in" data-aos-delay="100">
      <?php
        $result1 = $db->getTeachers();
        foreach ($result1 as $item) {
      ?>
      <div  class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="member">
          <img style="object-fit:cover;"  src="<?php echo $item['imagePath']; ?>" class="img-fluid trainer-image" alt="">
          <div  class="member-content">
            <br>
            <h4><?php echo $item['firstName'] . " " . $item['lastName']; ?></h4>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- End Trainers Section -->


  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">
    <div class="copyright"><strong><span>HebrOnline&nbsp;&copy; &nbsp;</span></strong>All rights reserved</div>
    <p>
      <br>
          Salam street <br>
          Hebron, West Bank<br>
          Palestine <br><br>
          <strong>Phone : &phone;</strong> +970 599  123 456 <br>
          <strong>Email : &#9993;</strong> pallmsacademy@gmail.com<br>
        </p>

    </div>
  </div>
</div>
</footer>
<!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>