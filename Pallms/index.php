<!DOCTYPE html>
<html lang="ar">

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
    <!-- Favicons -->
    <link href="assets/img/icon.png"  sizes="32x32"  rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">



  <style type="text/css">
  .titleText  {
    color: #37423b;
    transition: 0.3s;
    text-decoration: none;
    font-weight: 700;
    font-size: 20px;
    font-family: "Raleway", sans-serif;
        border: none;
    background: none;
}

.titleText:hover 
{
    color: #5fcf80;
}
.custom-card {
  display: flex;
  flex-direction: column;
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  transition: transform 0.3s ease-in-out;
  max-width: 100%;
  max-height: 100%;
  margin: 0 auto;
}

.custom-card:hover {
  transform: scale(1.05);
}

.custom-card-img img {
  width: 100%;
  max-height: 500px;
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

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto">HebrOnline</h1>
  
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul class="d-flex align-items-center"> 
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="courses.php">Courses</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="about.php">About</a></li>

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
            <li><img  src="<?php echo $_SESSION['img']; ?>"  alt="" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 35px; object-fit:cover;"></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative"  data-aos="zoom-in" data-aos-delay="100" style="justify-content: center;">
      <h1>Infinite Knowledge, Infinite possibilites</h1>
      <br>
      <h2>Discover the Joy of Intellectual Adventure, Unleash Your Potential, Embrace Challenges, and Flourish in the Garden of Knowledge. Now with HebrOnline</h2>
     
    <br><br>      
    <center>
    <form action="Courses Search Result.php" method="POST" enctype="multipart/form-data">
      <div class="SearchBox">
        <input type="text" name="textSearch" class="SearchBox-input" placeholder="Search for courses here" required>
        <button type="submit" name="submit" class="SearchBox-button">
          <i class="">Search &nbsp;</i><span class="material-icons bi bi-search"></span>
        </button>
      </div>
    </form>
  </center>
  </section><!-- End Hero -->

  <main id="main">
 
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

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose HebrOnline?</h3>
              <p >
              HebrOnline offers a unique academic experience known for excellence, fostering critical thinking and innovation.
               With a dedicated team, flexible courses, and cutting-edge technology, students engage in a collaborative virtual environment.
                More than just academics. Join us for a transformative journey in a vibrant online learning community.
              </p>
              <div class="text-center">
                <a href="about.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Flexibility</h4>
                    <p>HebrOnline prioritizes flexibility, offering a range of courses that adapt to individual schedules. Whether you're a working professional or a busy student, the center ensures education fits seamlessly into your life, allowing you to learn at your own pace.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Avanced teaching methods</h4>
                    <p>HebrOnline embraces innovation in education, employing cutting-edge teaching methods and technology. The center goes beyond traditional approaches, fostering critical thinking and creativity.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-happy"></i>
                    <h4>Skiled teachers</h4>
                    <p>HebrOnline takes pride in its team of dedicated and experienced educators. Passionate about unlocking the potential in every student. With HebrOnline, we ensure a supportive and enriching educational experience.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->

 <!-- ======= Events Section ======= -->
 <div class="section-title">
  <p><a href="Posts.php" style="color: #5fcf80;">Posts</a></p>
</div>
<section id="events" class="events">
  <div class="container">
    <div class="row">
      <?php
        $result2 = $db->getIndexPost();
        foreach ($result2 as $item) {
          $dateAdded = $item['dateAdded'];
          $daYAdded = date('l', strtotime($dateAdded));
          $dateAdded = date('F d', strtotime($dateAdded));
          $timeAdded = date('h:i a', strtotime($item['timeAdded']));
      ?>
      <div class="col-md-12 mb-4">
        <div class="custom-card">
          <div class="custom-card-img">
            <img style="object-fit:cover !important;" src="<?php echo $item['imagePath']; ?>" alt="...">
          </div>
          <div class="custom-card-details">
            <h5 class="custom-card-title"><?php echo $item['title']; ?></h5>
            <p class="fst-italic">
              <?php echo $daYAdded . ', ' . $dateAdded . ' at ' . $timeAdded; ?>
            </p>
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
    <!-- ======= Popular Courses Section ======= -->
    
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
        
        <div class="section-title">
          <p style="color: #5fcf80;">Latest Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
<?php

     $result =$db->getIndexCourseWithTeacher();
foreach ($result as $item) {
 ?> 
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item" style="border-radius: 20px; overflow: hidden;">
              <img style="width: 500px; height: 250px;object-fit:cover;" src="<?php echo $item['imagePath']; ?>" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="price">$<?php echo $item['price']; ?></p>
                </div>
    <form   action="course-details.php" method="POST" enctype="multipart/form-data" >
<input type="text"  name="courseId" value="<?php echo $item['id']; ?>" hidden readonly>
                <h3><input class="titleText" type="submit"    name ="submit"   value="<?php echo $item['name']; ?>" /></h3><br>
                </form>
                  <br>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="d-flex align-items-center">
                    <img style="border-radius: 50px; width:50px; height:50px; margin-left: 5px; margin-right: 20px;object-fit:cover!important;" src="<?php echo $item['userimg']; ?>" class="img-fluid" alt="">
                    <span><?php echo $item['firstName']. "  ".$item['lastName']; ?>  </span>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        <?php
}
         ?>
         
        
        
        </div>

      </div>
    </section><!-- End Popular Courses Section -->


    <div class="section-title">
      <p > <a href="teachers.php" style="color: #5fcf80;">Popular teachers </a> </p>
    </div>

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        
<?php

 
     $result =$db->getIndexTeacher(1);
foreach ($result as $item) {
 ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img style="object-fit:cover!important;" src="<?php echo $item['imagePath']; ?>" class="img-fluid trainer-image" alt="">
              <div class="member-content"><br>
                <h4> <?php echo $item['firstName']. "  ".$item['lastName']; ?></h4>  
              </div>
            </div>
          </div>

                <?php
}
         ?>

        </div>

      </div>
    </section><!-- End Trainers Section -->

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

  <script>
  document.addEventListener("DOMContentLoaded", function() {
    var footer = document.getElementById("footer");
    var contentHeight = document.body.scrollHeight;
    var viewportHeight = window.innerHeight;

    if (contentHeight < viewportHeight) {
      footer.style.display = "block";
    }
  });
</script>


  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>