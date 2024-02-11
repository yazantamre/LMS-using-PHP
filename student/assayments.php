<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->

	 <?php 
 session_start();
 if ($_SESSION['valid'] != 3)  
       header('Location:../Pallms/signInUp.php');

   
 
require('../DB/DB.php');

     $db = new DB(); 
      

        

    if(isset($_POST['submit']) or  isset($_POST['submitDB'])){ 

    	$courseId=$_POST['courseId'];

    $userid =  $_SESSION['id'];


 ?>
<head>
<title>Course classroom</title>
	
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

.active3 {

    background-color: #cb4040;
    color: #fff;
        }
      
      
.post {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
			background-color: white;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .user-info {
            display: flex;
            align-items: center;
        }
        .user-info img {
		margin-top: 1px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .user-info .user-name {
            font-weight: bold;
        }  

		.label {
            font-size: 1em;
            color: #999;
            margin: 10px;
            padding-right: 40px;
          top: 0;
			margin-left: 700px;
        }
        body,strong ,button
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
		<button  type="submit"    name ="submit"  style = " background: #ededed;
    color: #3b3b3b;
    font-weight: 600;
    padding: 3px;
     
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; 
     "    > Assignments </button>
				</form> 

 

		</li>


	<li>



	<form class="form-horizontal" action="teacher.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = "  text-decoration: none;
		background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; "  > Teacher </button>
				</form> 

  

		</li>

 
	
		</ul>
</div>

<div class="innerAll spacing-x2">

<?php

	$result =$db->getCourseaassigmentwithTeacher($courseId);

		foreach ($result as $item) 
{

	$DataSubmit =$item['DataSubmit'];
			$fmark=$item['mark'];					 ?>	

	<div class="post">


        <div class="user-info">
          
            
             <img style ="width: 50px; height:50px;object-fit:cover;" src="<?php echo $item['imagePath']; ?>" alt="" width="35" class="thumb img-responsive img-circle pull-left" />
             <h4 style="margin-left: 20px; pointer-events: none;" class=" strong"><?php echo $item['firstName']." " .$item['lastName']  ; ?></h4>
             
            </div>
            <p>
            <br>
            <small><i style="margin-left: 20px;" class="fa fa-fw icon-calendar-2"></i>Added on : <?php echo $item['DateAdded']   ; ?></small><br>
            <small><i style="margin-left: 20px;" style="margin-left: 20px;" class="fa fa-fw icon-calendar-2"></i>Due on : <?php echo $item['DateAdded']   ; ?> </small>
          </p><br>
	
        <div class="post-content">
		
        </div>
     
        <div class="post-content">
        <h3 style="margin-left: 90px;"><b><?php echo $item['name']   ; ?></b></h3><br>
    <p style="margin-left: 90px;"> <?php echo $item['description']   ; ?></p>
        </div>
        <div class="innerAll bg-white">
<div class="media inline-block margin-none">
<div class="innerLR">
<i class="fa fa-paperclip pull-left fa-2x"></i>
<div class="media-body">
<a target="_blank" download href="<?php echo $item['File']   ; ?>" class="strong text-regular"> view file  </a>
</div>
 </div>
<div class="clearfix"></div>
</div>
</div>
 
</div>
<?php 

$assigmentId=$item['id'];
$assigmentSol = 0 ;
$result1 =$db->getCourseaassigmentMark($userid,$assigmentId);

 

		foreach ($result1 as $item1) 
{
								
 $assigmentSol = 1 ;
$mark =$item1['mark'];
$markStutas =1 ;
if ($mark == NULL) {
  $fmark=  $item['mark'].'/'.'-';
  $markStutas =0 ;
}
else

 $fmark= $mark.'/'.$item['mark'];

  $solutionFile =  $item1['solutionFile']; 

?>

  
       <div  style="text-align: center;  width: 100%; background-color:;" >
  <form action="mySolution.php" method="POST" enctype="multipart/form-data" style="display: inline-block;" >
		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<input type="text"  name="assigmentId" value="<?php echo $assigmentId;  ?>" hidden readonly/>
<input type="text"  name="markStutas" value="<?php echo $markStutas;  ?>" hidden readonly/>
<input type="text"  name="solutionFile" value="<?php echo $solutionFile;  ?>" hidden readonly/>

<input type="text"  name="fmark" value="<?php echo $fmark;  ?>" hidden readonly/>


<input type="text"  name="assigmentId" value="<?php echo $assigmentId;  ?>" hidden readonly/>
   <input type="text"  name="DataSubmit" id="DataSubmit" value="<?php echo $DataSubmit;  ?>" hidden readonly/>  
         <button   type="submit" name="submit"  class="btn btn-primary">View My Solution</button>

    </form>
  
	 

	
		<label style="border: 1px solid #c93737; padding: 4px 10px;"   for=""><?php echo "mark : ".  $fmark;?> </label>
    </div>

<?php }

if ($assigmentSol == 0 ) 
   
    { ?>


     
        <div  style="text-align: center;  width: 100%; background-color:w;" >
<form style="    display: inline-block;"   action="up files.php" method="POST" enctype="multipart/form-data">
	 <input type="text"  name="assigmentId" id="" value="<?php echo $item['id']  ;  ?>" hidden readonly/> 
  <input type="text"  name="courseId" id="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
   <input type="text"  name="DataSubmit" id="DataSubmit" value="<?php echo $DataSubmit;  ?>" hidden readonly/>
        <button  type="submit"    name ="submit"    class="btn btn-primary"> Upload solution</button>
    </form>
	 
		<label style="border: 1px solid #c93737; padding: 4px 10px;"   for=""><?php echo "mark : " .  $fmark;?> </label>
    </div>

    <?php }
      


      ?>

 
    <br>
   <div class="col-separator-h box"></div>
<div class="innerAll " style="width:100%;" >
	<form class="form-horizontal" action="comments.php" method="POST" enctype="multipart/form-data">
	 <input type="text"  name="assigmentId" id="" value="<?php echo $item['id']  ;  ?>" hidden readonly/> 
  <input type="text"  name="courseId" id="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
<button  type="submit"    name ="submit"   class="btn btn-info text-center" style="width:100%; border-radius:10px;" >Comments</button> 

</form>
    </div>
</div>
    
    
    
       
                
 
<?php  } ?>

	 
	
		
	
		<!-- // Content END -->
		
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
		
	
	<!-- // Main Container Fluid END -->
	

	

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