<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 app"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 app"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 app"> <![endif]-->
<!--[if gt IE 8]> <html class="app"> <![endif]-->
<!--[if !IE]><!--><html class="app"><!-- <![endif]-->

		<?php 
 session_start();
 if ( $_SESSION['valid'] != 2)  
       header('Location:../Pallms/signInUp.php');

   
 
require('../DB/DB.php');

     $db = new DB(); 
      

        

    if(isset($_POST['submit']) or  isset($_POST['submitDB'])){ 

    	$courseId=$_POST['courseId'];
    	 
 ?>
<head>
	<title>Old classroom page</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	
	<!-- 
	**********************************************************
	In development, use the LESS files and the less.js compiler
	instead of the minified CSS loaded by default.
	**********************************************************
	<link rel="stylesheet/less" href="../assets/less/admin/module.admin.page.email.less" />
	-->
	
		<!--[if lt IE 9]><link rel="stylesheet" href="../assets/components/library/bootstrap/css/bootstrap.min.css" /><![endif]-->
	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.email.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	<script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>	
</head>
  <script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script> 	

      <style type="text/css">
    .active4 {

    background-color: #cb4040;
    color: #fff;
        }
		body,strong,label,button
	{
		font-size: 18px;
		color: #333333;
        font-family: 'Poppins', sans-serif;
        letter-spacing: 0.5px;
        font-weight: 500 !important;
    }
</style>
</head>
<body>

	  <div id="includedMenu"></div>


	<div id="content"><div class="layout-app">
<div class="col-table">
	
	<h1 class="bg-white text-primary content-heading border-bottom text-center">COURSE PAGE</h1>
	<div class="bg-white text-center  innerAll border-bottom">
  

  
 <ul class="menubar">
		<li class="active">
			<form class="form-horizontal" action="Finishedadvertisements.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = "   text-decoration: none;
		background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none;"   > Posts </button>
				</form> 


</li>
		<li>



	<form class="form-horizontal" action="Finishedassayments.php" method="POST" enctype="multipart/form-data" >

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
		 


			<form class="form-horizontal" action="FinishedcementEvaluation.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = "background: #ededed;
    color: #3b3b3b;
    font-weight: 600;
    padding: 3px;
     
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none;
     "   > Assignment Grading </button>
				</form> 
		</li>
		<li>


		<form class="form-horizontal" action="Finishedstudents.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = " text-decoration: none;
		background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none;
     "   > Students   </button>
				</form> 
</li>
	</ul>
	
	
</div>
	<div class="col-separator-h"></div>

	<div class="col-table-row">
	
		<div class="col-app col-unscrollable">
			
			<div class="col-app">
				<div class="row row-app email">
					
					<div class="col-md-11" style="margin-left: 75px;">
						<div class="col-separator">

							<div class="row row-app">
								
								<div class="col-md-12 bg-white">

									


                                    <div class="bg-white">
                                    	<?php

	$result =$db->getCourseaassigment($courseId);

		foreach ($result as $item) 
{
		$assigmentId=	$item['id']	;			 ?>

	    <div class="innerAll">
		<div class="list-group-item">
			<span class="media">
				<span class="media-body">
					<h2 class="text-primary center" style="font-weight: bold;"><?php echo $item['name']   ; ?></h2>
			  		<div class="clearfix"></div>
					  <small><i style="margin-left: 20px;" class="fa fa-fw icon-calendar-2"></i>Added on : <?php echo $item['DataSubmit']   ; ?> </small><br>
					  <small><i style="margin-left: 20px;" class="fa fa-fw icon-calendar-2"></i>Due on : <?php echo $item['DateAdded']   ; ?> </small>

					  <div class="clearfix"></div>
					  <div class="pull-right">
		<form class="form-horizontal" action="Finishedassigment_evaluation.php" method="POST" enctype="multipart/form-data" >

	<input type="text"  name="assigmentId" id="" value="<?php echo $assigmentId;  ?>" hidden readonly/> 
	<input type="text"  name="courseId" id="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
						 

						<button  type="submit"    name ="submit" class="btn btn-primary btn-xs text-center" style="width: 95px; height: 30px; font-weight: bold; font-size:medium;"><i class="fa fa-eye"></i> View </button> 
</form>

					</div>
<br>
			    	<p style="margin-left:20px; width: 90%; text-align:justify;"><?php echo $item['description']   ; ?></p>
					</span>
				
			</span>
					</div>
																
																
				
		</div>
					<?php } ?>				

								</div>	
								
								
								 

								</div>	


								


						

					</div>
				</div>

			</div>

		</div>

	</div>
</div>
</div>



	
	
		
		</div>
		<!-- // Content END -->
		
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
		
		
		
	</div>
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