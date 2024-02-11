<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->

		<?php 
 session_start();
 if ( $_SESSION['valid'] != 3)  
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
</head>
<style>

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

    .active3 {

    background-color: #cb4040;
    color: #fff;
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
<body style="overflow-x: hidden;">

<div id="includedMenu"></div>

    
    
    <div id="content">
    <h1 class="content-heading bg-white border-bottom text-primary center"> Courses </h1>
    <div class="heading-buttons bg-white border-bottom innerAll">
	
 
	


	<div class="innerAll">
	

		<div class="courses">
	 	<?php 

$result =$db->getStudentCurrentCourse($userid);

		foreach ($result as $item) 

      
         { 

           ?>
	
			
	<!-- Course 1 -->
	<form class="form-horizontal" action="advertisements.php" method="POST" enctype="multipart/form-data" >
		
        <button  class="courseform"  type="submit"    name ="submit">

            <input type="text"  name="courseId" value="<?php echo $item['id']; ?>" hidden readonly>
            <div class="course" id="course1">
                
                <img src="<?php echo $item['imagePath']; ?>" alt="Course Image"> 
                
                
                
                <br><br><br><br><br><br><br><br>

                <h2 style="color:black;" ><?php echo $item['name']   ; ?></h2>
                
                
                
                

                    
                </div>
                
            </button>  
 </form> 

<?php } ?>
 

 
    
</div>

	
			</div>
			<!-- // END row -->
		</div>
	</div>
	<!-- // END row-app -->
	

<script>


// احصل على الزر بواسطة معرفه
var myButton = document.getElementById("myButton");

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