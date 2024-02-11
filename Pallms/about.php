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
      

        

     

       
$result1 =$db->getusersCOUNTBytype(3);
$result2 =$db->getusersCOUNTBytype(2);
$result3 =$db->getCoursesCOUN();   
    foreach ($result1 as $item1)  
   $StudentsSUM = $item1["usersSUM"] ;

  foreach ($result2 as $item2)  
   $TeachersSUM = $item2["usersSUM"] ;

  foreach ($result3 as $item3)  
   $CoursesSUM = $item3["CoursesSUM"] ;


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
          <li><a  href="index.php">Home</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a  class="active" href="about.php">About</a></li>

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
            <li><img  src="<?php echo $_SESSION['img']; ?>"  alt="" style="width: 40px; height: 40px; border-radius: 100%; margin-left: 35px;object-fit:cover;"></li>
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
      <a href="signInUp.php" class="get-started-btn">Sign In</a>

        <?php  } ?>
       <!-- .navbar -->

    </div>
  </header>
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p>Considering an adventure with HebrOnline but feeling unsure? Let's address your uncertainties and shed light on the captivating journey that awaits you!</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img style="border-radius: 20px;" src="assets/img/events-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>With HebrOnline there are no limits, only endless possibilities reaching beyond the sky!</h3>
            <p class="fst-italic">
            Joining HebrOnline is more than just a decision; it's an invitation to a realm of opportunities. Here's how HebrOnline can redefine your educational journey:
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>Cutting-Edge Technology: Stay ahead in the digital age with HebrOnline's use of cutting-edge technology for a seamless and modern learning experience.</li>
              <li><i class="bi bi-check-circle"></i>Commitment to Improvement: HebrOnline continuously enhances its offerings, incorporating feedback, and staying at the forefront of educational innovation.</li>
              <li><i class="bi bi-check-circle"></i>Expert-Led Courses: Learn from seasoned professionals dedicated to delivering top-notch education and guiding you through your learning journey.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

   <div class="row counters" style="display: flex; justify-content: center;">
          

           <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $StudentsSUM; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $CoursesSUM; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>



          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $TeachersSUM; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Teachers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

  
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

  <script src="assets/js/main.js"></script>

</body>

</html>