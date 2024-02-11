<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->

		<?php 
 session_start();
 if (  $_SESSION['valid'] != 3)  
       header('Location:../Pallms/signInUp.php');

    
 
require('../DB/DB.php');

     $db = new DB(); 
     $userid =  $_SESSION['id']; 

        

   
 ?>
<head>
<title>Academic Center</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.surveys_multiple.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">

	<script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>	

  <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
</head>
<style>

 .active4  {

 	background-color: #cb4040;
 	color: #fff;
        } 
		.courseform 
{
	border: none;
outline: none;
background: none;
}
	.courses {
			display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center the cards horizontally */
            gap: 20px; /* Added gap for spacing between cards horizontally */
			}
		
			.course {
				border: 1px solid #ccc;
			   	color: #6f6363;
				width: 500px;
				height: 400px;
				transition: transform 0.2s, box-shadow 0.2s;
				text-align: center;
				font-size: 20px;
				border-radius: 5%;
			}
	
			.course:hover {
				transform: scale(1.05);
				box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
				
			}
			.button-container button {
				background-color: #c52828;
				color: white;
				border: none;
				cursor: pointer;
				font-size: 20px;
				border-radius: 10px;
			   /* margin-left: 46px;*/
				padding: 5px 10px;
				position: absolute;
				top: 350px;
				right: 5px;
			}
	
			

			.label-container {
				color: #6f6363;
				padding: 5px 10px;
				border-radius: 5px;
				position: absolute;
				top: 350px;
				left: 5px;
			}






		.review-modal {
    display: none;
    position: fixed; /* تغيير إلى position: fixed لعدم التأثير على التمرير */
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    z-index: 1000;
}

.review-modal .close-button {
    position: absolute;
    top: 5px;
    left: 5px;
    cursor: pointer;
    font-size: 18px; /* حجم الخط */
    line-height: 30px; /* لوضع النص في وسط الزر عموديًا وأفقيًا */
}


.course:hover .review-modal {
    display: block;
}
		
/* تنسيق نجوم التقييم */
.star-rating {
    margin-top: 10px;
}

.star-rating .fa-star {
    font-size: 24px;
    color: #cac9c2; /* لون النجوم غير المحددة */
    cursor: pointer;
    transition: color 0.3s;
}

.star-rating .fa-star.checked {
    color: #e4ca06; /* لون النجوم المحددة */
}

.star-rating .fa-star:hover {
    color: #f39c12; /* لون النجوم عند التحويم */
}

/* CSS to style the image and course card */
.course {
		
		position: relative;
		overflow: hidden;
	}
	
	.course img {
		width: 100%;
		height: 50%;
		object-fit: cover;
		position: absolute;
		top: 0;
		left: 0;
	}
body,strong,label
	{
		font-size: 18px;
		color: #333333;
        font-family: 'Poppins', sans-serif;
        letter-spacing: 0.5px;
        overflow-x: hidden;
        font-weight: 500 !important;
    }
</style>
<script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script>   
</head>
<body>


      
	<div id="includedMenu"></div>
	
	
	
	<div id="content"><div class="heading-buttons bg-white border-bottom innerAll">
	<h1 class="content-heading bg-white border-bottom center text-primary">My Old Courses </h1>
	
 
	


	<div class="innerAll spacing-x2">
	
	
	
		
	   
						
		
		<div class="courses">
	 
	
		 	<?php 

$result =$db->getStudentOldCourse($userid);

		foreach ($result as $item) 
  
      
         { 

         $courseId=$item['id'] ;
         $coursesevaluation =0;

    $result1 =$db->getcoursSumMarks($userid,$courseId) ;
 $result2 =$db->getcoursesevaluation($userid,$courseId) ;
 foreach ($result2 as $item1)  
   $coursesevaluation = 1;
 
 foreach ($result1 as $item1)  
   $markSUM = $item1["markSUM"] ;
$totalmarks= $item1["totalmarks"] ;
if ($markSUM==0 or $markSUM== NULL ) {
	$markSUM ='-';
}
     ?>	
	<!-- Course 1 -->
	<div class="course" id="c<?php echo $item['id']; ?>">
		<input type="text"  name="courseIdv"  id="courseIdv"  value="<?php echo $item['id']; ?>" hidden readonly>

		<img  src="<?php echo $item['imagePath']; ?>" alt="Course Image"/>
	<input type="text"  name="coursesevaluation"  id="coursesevaluation"  value="<?php echo $coursesevaluation; ?>" hidden    readonly>
		<div class="label-container">
			<label style="border: 2px solid red; border-radius:10px;padding:5px;"><?php  echo "Grade: " . $markSUM .'/'.$totalmarks ;?></label>
		</div>
		<br><br><br><br><br><br><br><br>
		<h2> <?php echo $item['name']   ; ?></h2>

	
		
	
		<div class="button-container">
			<button onclick="openReviewModal('c<?php echo $item['id']; ?>')">Feedback</button>
		</div>
	
	</div>
	
	 <?php } ?>
	 
		
	 
	<!-- Review Modal -->
	<div class="review-modal" id="review-modal">
		<br>
		<div class="close-button" onclick="closeReviewModal()">	<i class="fa fa-fw icon-delete-symbol"></i>	</div>
		<br>
		<h3 style="color: #c52828;">Evaluation : <span  style="color: #c52828;" id="course-name"></span></h3>
		<br>
		<div style="margin-left: 30px;" class="star-rating">
			<span class="fa fa-star unchecked" onclick="rateCourse(1)"></span>
			<span class="fa fa-star unchecked" onclick="rateCourse(2)"></span>
			<span class="fa fa-star unchecked" onclick="rateCourse(3)"></span>
			<span class="fa fa-star unchecked" onclick="rateCourse(4)"></span>
			<span class="fa fa-star unchecked" onclick="rateCourse(5)"></span>
		</div>
		<br>
		<textarea style=" width:100%; " id="review-text" placeholder="Enter your rating here  "></textarea>
		<br><br>
		<button style="border-radius: 20px; margin-left: 44px;" class="btn btn-primary"  onclick="submitReview()">Save Evaluation   </button>
	
		
		
	</div>

			</div>
			<!-- // END row -->
		</div>
	</div>
	<!-- // END row-app -->
	

<script>


// احصل على الزر بواسطة معرفه
var myButton = document.getElementById("myButton");
var  courseIdv = '0';
var  rateCoursevalue = '0';
// قم بإضافة مستمع لحدث تحريك الماوس
myButton.addEventListener("mousemove", function () {
// قم بتغيير لون الزر إلى اللون الأحمر
myButton.style.backgroundColor = "#c33222";
});

// قم بإضافة مستمع لحدث مغادرة الماوس
myButton.addEventListener("mouseleave", function () {
// قم بإعادة لون الزر إلى اللون  الافتراضي
myButton.style.backgroundColor = "white";
});

// دالة لفتح النافذة
function openReviewModal(courseId) {
var courseElement = document.getElementById(courseId);

var coursesevaluation= courseElement.querySelector('#coursesevaluation').value ;
if (coursesevaluation == '0' ) {
var courseName = courseElement.querySelector('h2').textContent;

courseIdv = courseElement.querySelector('#courseIdv').value ;

var modal = document.getElementById("review-modal");
var modalContent = modal.querySelector('#course-name');
modalContent.textContent = courseName;

// حساب موقع الكورس وتعيين موقع النافذة المنبثقة بناءً على ذلك
var courseRect = courseElement.getBoundingClientRect();
modal.style.top = (courseRect.top + window.scrollY) + "px"+"px";
modal.style.left = courseRect.left + "px";

modal.style.display = "block";
}

else  sweetAlert("info...", "You have rated this course before!", "info"); 

 


 }

function submitReview() {
	var rateCoursevaluecurrent =rateCoursevalue;

	var courseIdcurrent = courseIdv;
	courseIdv=0;
	rateCoursevalue=0;
	var evtxt = document.getElementById("course-name").textContent;
	var reviewText = document.getElementById("review-text").value;
 	 var starElements = document.querySelectorAll('.star-rating .fa-star');

 	 for (var i = 0; i < starElements.length; i++) {
starElements[i].classList.remove('checked');
}
  
   document.getElementById("review-text").value= '';

if (rateCoursevaluecurrent>0) 

{
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 
 
console.log('true');
 
 
             }
        };
        xmlhttp.open("GET", "../DB/addcoursesevaluation.php?rateCoursevaluecurrent=" + rateCoursevaluecurrent +" && courseIdcurrent=" + courseIdcurrent +" && reviewText=" + reviewText, true);
        xmlhttp.send();

closeReviewModal() ;
        var courseElement = document.getElementById('c'+courseIdcurrent);

courseElement.querySelector('#coursesevaluation').value= '1' ;

 

    }
else
{

	 
sweetAlert("Oops...", "Please add your evaluation!", "error"); 

}


	// هنا يمكنك إجراء الإرسال أو معالجة المراجعة كما تريد

	// إغلاق النافذة المنبثقة بعد الإرسال
	var modal = document.getElementById("review-modal");
	modal.style.display = "none";

	// إزالة الغطاء العلوي
	var overlay = document.querySelector('.modal-overlay');
	overlay.style.display = "none";
	document.body.removeChild(overlay);
}
// دالة لإغلاق النافذة
function closeReviewModal() {
var modal = document.getElementById("review-modal");
modal.style.display = "none";
}
// دالة لتقييم الكورس بناءً على عدد النجوم المختارة
function rateCourse(stars) {
var starElements = document.querySelectorAll('.star-rating .fa-star');

for (var i = 0; i < stars; i++) {
starElements[i].classList.add('checked');
}

for (var i = stars; i < starElements.length; i++) {
starElements[i].classList.remove('checked');
}

rateCoursevalue =stars ;
}



	var basePath = '',
		commonPath = '../assets/',
		rootPath = '../',
		DEV = false,
		componentsPath = '../assets/components/';
	
	var primaryColor = '#cb4040',
		dangerColor = '#b55151',
		infoColor = '#466baf',
		successColor = '#8baf46',
		warningColor = '#ab7a4b',
		inverseColor = '#45484d';
	
	var themerPrimaryColor = primaryColor;
	</script>
	
	<script src="../assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/breakpoints/breakpoints.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/animations.init.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/holder/holder.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/sidebar.main.init.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/sidebar.collapse.init.js?v=v1.2.0"></script>
<script src="../assets/components/helpers/themer/assets/plugins/cookie/jquery.cookie.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/core.init.js?v=v1.2.0"></script>	
</body>
</html>