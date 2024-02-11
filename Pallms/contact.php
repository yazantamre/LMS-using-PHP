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
  <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto">PalLMS</h1>
  
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul class="d-flex align-items-center"> 
          <li><a  href="index.php">Home</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a class="active" href="contact.php">Contact</a></li>
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
      <a href="signInUp.php" class="get-started-btn">Sign In</a>

        <?php  } ?>
       <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
        <p>Need some help? Don't hesitate to contact us. we'll be happy to answer all of your enquiries!</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <!-- <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div> -->

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4 style="color: #5fcf80;">Our Location</h4>
                <p>Salam street</p>
                <p>Hebron, West Bank</p>
                <p>Palestine</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4 style="color: #5fcf80;">Email</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4 style="color: #5fcf80;">Call us</h4>
                <p>+970 599 123 456</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

           
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                  
              </div>
              <div class="text-center"><button style=" background: #5fcf80;
    border: 0;
    padding: 10px 35px;
    color: #fff;
    transition: 0.4s;
    border-radius: 50px;" onclick="contactUs()"  >Send Message</button></div>
           

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
  <script>
     

    function contactUs(form) {

  var name  = document.getElementById("name").value;
  var subject  = document.getElementById("subject").value;
  var message  = document.getElementById("message").value;
var email  = document.getElementById("email").value;

    if (name &&  subject &&  message  && email) {


        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


      if(email.match(mailformat))
         {
         
 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 
 
console.log('true');
 
 
             }
        };
        xmlhttp.open("GET", "../DB/sendContactMsg.php?email=" + email+" && message=" + message +" && subject=" + subject +" && name=" + name , true);
        xmlhttp.send();

 sweetAlert("Done", "We recived your e-mail and we will contact you as soon as possible!", "success"); 



         }
         else
         {
            

 sweetAlert("Oops", "Please enter a valid email!", "error"); 
         }
              
            }


            else  
          {   

 sweetAlert("Oops", "Please fill all fields!", "error");}


}
  </script>

</body>

</html>