<!DOCTYPE html>
<html lang="en">
  <?php 
 
 $loginStutes =0;
 $userType = 0 ;
      session_start();
 
       if (isset($_SESSION['valid'])) {
        if ( $_SESSION['valid'] == 3 ) 
 {$loginStutes =1;
 $userType = 3;
 }
 
 else  if ( $_SESSION['valid'] == 2 ) 
 
 {$loginStutes =1;
 $userType = 2 ;
 }
 
 else if ( $_SESSION['valid'] == 1 ) 
 {$loginStutes =1;
 $userType = 1;
 }
     }
  
  

require('../DB/DB.php');

     $db = new DB(); 
      

        

    if(isset($_POST['submit']) ){ 

      $courseId=$_POST['courseId'];
      
$result =$db->getcourseById($courseId);
          
        $name= ''  ;
        $description= ''  ;
        $outline= ''  ;
        $requirements= ''  ;
        $outcome= ''  ;
        $imagePath= ''  ;

        $price= ''  ;
        $RegistrationExpirationDate= ''  ;
        $DateAdded= ''  ;
        $firstName= ''  ;
        $lastName= ''  ;
        $userimg= ''  ;
        $status= ''  ;
 $startDate= ''  ;



       foreach ($result as $item) 

      
         { 
        
         $name= $item['name']   ;   
        $description=  $item['description']   ;   
        $outline=  $item['outline']   ;   
        $requirements=  $item['requirements']   ;  
        $outcome= $item['outcome']   ;   
        $imagePath=  $item['imagePath']   ;   

        $price=  $item['price']   ;   
        $RegistrationExpirationDate=  $item['RegistrationExpirationDate']   ;   
        $DateAdded=  $item['DateAdded']   ;   
        $firstName=  $item['firstName']   ;   
        $lastName=  $item['lastName']   ;  
        $userimg=  $item['userimg']   ;   
 $startDate=  $item['startDate']   ; 

  $status = $item['status']   ;  
  


         }


 ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HebrOnline</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png"  sizes="32x32"  rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
  <link href="assets/css/style.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
.checked {
  color: orange;
}
</style>
</head>

<body> 

  <!-- ======= Header ======= -->
  

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto">PalLMS</h1>
  
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul class="d-flex align-items-center"> 
          <li><a  href="index.php">Home</a></li>
          <li><a  class="active" href="courses.php">Courses</a></li>
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
  <!-- End Header -->

  
  <main id="main" style="margin-top:0px">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in" >
      <div class="container">
        <h2>Course Overview</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            <img style="width:80%; height:80%; border-radius:20px;" src="<?php echo $imagePath; ?>" class="img-fluid" alt="">
            <h3 style="color: #5fcf80;">Description</h3>
            <p>
              <?php echo $description; ?>
            </p>
            <br>
          </div>
          <div class="col-lg-4">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Teacher</h5>
              <p><a href="#"><?php echo $firstName .' '. $lastName; ?> </a></p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Course Price</h5>
              <p>$<?php echo $price; ?></p>
            </div>


             <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Course Start Date</h5>
              <p>
  <?php echo $startDate; ?></p>
            </div>
             <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Registration Expiration Date</h5>
              <p>
  <?php echo $RegistrationExpirationDate; ?></p>
            </div>

            
<?PHP 
$currentDate =date("Y-m-d");
   if($RegistrationExpirationDate >= $currentDate and ($status ==1))  {

 ?>
            <button  onclick="Registercourse()"  style="width: 100%; border: 0px; color:#fff !important; background: #5fcf80;  padding: 8px 25px; border-radius:50px;">Register course</button>
 <?PHP } ?>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->

    <!-- ======= Cource Details Tabs Section ======= -->
    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Course outline</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Recommended prerequisites</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Course outcome</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">

              <div class="tab-pane show" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3 style="color: #5fcf80;">Course outline</h3>
                    <p class="fst-italic">
  <?php echo $outline; ?>
                    </p>
                     
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3 style="color: #5fcf80;">Recommended prerequisites</h3>
                    <p class="fst-italic">

<?php echo $requirements; ?>
                    </p>
                     
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3 style="color: #5fcf80;">Course outcome</h3>
                    <p class="fst-italic">
<?php echo $outcome; ?>
                    </p>
                    
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/course-details-tab-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Tabs Section -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <p style="color: #5fcf80;">Reviews and feedback</p>
    </div>

    <div class="testimonials-wrapper" data-aos="fade-up" data-aos-delay="100">
      <?php
        $result2 = $db->getCourseReviews($courseId);
        foreach ($result2 as $item2) { ?>
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img  src="<?php echo $item2['userimg']; ?>" class="testimonial-img" alt="">
              <h3><?php echo $item2['firstName'].$item2['lastName']; ?></h3>
              <h4>
                <?php
                for ($i = 0; $i < $item2['rate']; $i++) {
                  echo "<span class='fa fa-star checked'></span>";
                }
                for ($i = 5; $i > $item2['rate']; $i--) {
                  echo "<span class='fa fa-star '></span>";
                }
                ?>
              </h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php echo $item2['Comment']; ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
      <?php } ?>
    </div>
  </div>
</section><!-- End Testimonials Section -->
  

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
<script type="text/javascript">
  
  function  Registercourse() 
  { 
    var userType="<?php echo $userType; ?>";
    var loginStutes = "<?php echo $loginStutes; ?>";
    loginStutes= parseInt(loginStutes);

    if ((loginStutes == '0') || (userType == 1 ) || (userType==2)) {
    sweetAlert("Error!","You must be logged in as a student","error");
  }

  else
   { 

var courseId  = "<?php echo $courseId; ?>";
  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 
                 if (xmlhttp.responseText == 1) {

                  sweetAlert("Error!","You have already registered in this course","info");
                 }
                 else
                 {
                  sweetAlert("Done!","Registration application sent, please visit us to pay the fee and finalize your enrollment","success");
                 }
             }
        };
    xmlhttp.open("GET", "../DB/Registercourse.php?courseId=" + courseId  , true);
        xmlhttp.send();

    }
  }
  

</script>
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

 <?php }
else {
      header('Location:courses.php');
     
 
}

?>  