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

  <!-- Favicons -->
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


  <style>
.custom-card {
      display: flex;
      flex-direction: column;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s ease-in-out;
    }

    .custom-card:hover {
      transform: scale(1.05);
    }

    .custom-card-img img {
      width: 100%;
      max-height: 500px;;
      border-bottom: 1px solid #ddd;
    }

    .custom-card-details {
      padding: 15px;
    }

    .custom-card-title {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }

    .fst-italic {
      font-style: italic;
      color: #777;
    }

    .custom-card-text {
      line-height: 1.6;
    }
</style>
</head>

<body>

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
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Posts</h2>
        <p>Here you will find all of the posts to keep you updated on everything about HebrOnline</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
  <div class="container">
    <div class="row">
      <?php
      $result1 = $db->getPosts();
      foreach ($result1 as $item) {
        $dateAdded = $item['dateAdded'];
        $daYAdded = date('l', strtotime($dateAdded));
        $dateAdded = date('F d', strtotime($dateAdded));
        $timeAdded = date('h:i a', strtotime($item['timeAdded']));
      ?>
        <div class="col-md-12 mb-4">
          <div class="custom-card">
            <div class="custom-card-img">
              <img style="object-fit:cover;" src="<?php echo $item['imagePath']; ?>" alt="...">
            </div>
            <div class="custom-card-details">
              <h5 class="custom-card-title">
                <a> <?php echo $item['title']; ?></a>
              </h5>
              <p class="fst-italic"><?php echo $daYAdded . ', ' . $dateAdded . ' at ' . $timeAdded; ?></p>
              <p class="custom-card-text">
                <?php echo $item['body']; ?>
              </p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- End Events Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>PalLMS</h3>
            <p>
              Salam street <br>
              Hebron, West Bank<br>
              Palestine <br><br>
              <strong>Phone:</strong> +972 599  123 456<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
             <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="signInUp.php">Log in</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="signInUp.php">Sign up</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
      
      <div class="me-md-auto text-center text-md-start">
        
        <div class="copyright">
          جميع الحقوق محفوظة  <strong><span>PalLMS  &copy; &nbsp;</span></strong>  
        </div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>