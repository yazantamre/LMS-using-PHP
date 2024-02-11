<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 app"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 app"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 app"> <![endif]-->
<!--[if gt IE 8]> <html class="app"> <![endif]-->
<!--[if !IE]><!--><html class="app"><!-- <![endif]-->


	 <?php 
 session_start();
 if ($_SESSION['valid'] != 3)  
       header('Location:../Pallms/signInUp.php');

   
 
require('../DB/DB.php');

     $db = new DB(); 
      

        

    if(isset($_POST['submit']) or  isset($_POST['submitDB'])){ 

    	$courseId=$_POST['courseId'];
    	 

    	$result =$db->getCoursethacher($courseId);
          
        $firstName= ''  ;
        $lastName= ''  ;
        $email= ''  ;
        $password= ''  ;
        $address= ''  ;
        $phone= ''  ;




       foreach ($result as $item) 

      
         { 
        $firstName=$item['firstName']   ;
        $lastName=$item['lastName']   ;
        $email=$item['email']   ;
        $img=$item['imagePath']   ;
         
        $phone=$item['phone']   ;

 
  


         }


 ?>
<head>
<title>Academic Center</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	

	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.email.min.css" />
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

	 .active3 {

    background-color: #cb4040;
    color: #fff;
        }
	div.col-separator.col-separator-first.box {
    margin: 50px; 
    width: 400px;
}

div.col-separator.col-separator-first.box {
    margin: 0 auto;
    width: 400px;
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



	<div id="content"><div class="layout-app">
<div class="col-table">
	
	<h1 class="bg-white text-primary content-heading border-bottom text-center">Course page </h1>
	<div class="bg-white text-center  innerAll border-bottom">
	                  
 
	<ul class="menubar">
				<li class="active">
			<form class="form-horizontal" action="advertisements.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = "  text-decoration: none;
		background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; "   > Posts </button>
				</form> 


</li>

	<li>



	<form class="form-horizontal" action="assayments.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = " text-decoration: none;
		background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none;
     "   > Assignments </button>
				</form> 

 

		</li>


	<li>



	<form class="form-horizontal" action="teacher.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = " background: #ededed;
    color: #3b3b3b;
    font-weight: 600;
    padding: 3px;
     
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; 
     "   > Teacher </button>
				</form> 

 

		</li>

 
	
		</ul>
		<img style="object-fit:cover;border-radius:50px;; margin-top:50px;" class="center" src="<?php echo $img ; ?> " alt="" class=" img-responsive" />
</div>
	<div class="col-separator-h"></div>

	<div  class="col-table-row">
	
		<div  class="col-app col-unscrollable">
 
					
						
			<h3 class="innerAll border-bottom margin-none center">Teacher information</h3>
						<div   class="col-separator col-separator-first box">




							<ul  class="list-group list-group-1 margin-none borders-none">
								<li class="list-group-item active center" style="font-size: 22px;
    font-weight: bold;
    color: #373737;
    display: block;
    padding: 10px 15px;
    text-decoration: none;"> <i class="fa fa-user" style="width: 25px;    font-size: 18px;"></i>  <?php echo $firstName . " " .$lastName ;  ?> </li>
								<li class="list-group-item center"style="font-size: 14px;
    font-weight: bold;
     
    display: block;
    padding: 10px 15px;
    text-decoration: none;"> <i class="fa fa-envelope" style="width: 25px;    font-size: 18px;"></i><?php echo $email ;  ?></a></li>
							</ul>

							<div class="col-separator-h box"></div>
							<div class="text-center innerAll">
								phone : <?php echo $phone ;  ?>
							</div>
							
					
					</div>

	<!-- Global -->
	<script>
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
 <?php }
else {
      header('Location:index.php');
   
}

?> 