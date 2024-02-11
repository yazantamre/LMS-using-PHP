
<?php
 session_start();
 if (  $_SESSION['valid'] != 1)  
       header('Location:../Pallms/signInUp.php');

   
 
require('../DB/DB.php');

     $db = new DB();  
$monthCoursesNum ='';
$totalCoursesNum ='';
$total6montCoursesNum ='';


$result1 =$db->getmonthCoursesNotifications();
  foreach ($result1 as $item)        
 {$monthCoursesNum = $item['monthCoursesNum'] ; }


$result2 =$db->getTotalCoursesNotifications();
  foreach ($result2 as $item)        
 {$totalCoursesNum = $item['totalCoursesNum'] ; }

$result3 =$db->getTotalCourses6monthNotifications();
  foreach ($result3 as $item)        
 {$total6montCoursesNum = $item['total6montCoursesNum'] ; }

 //users  users users users users

$monthusersNum ='';
$totalusersNum ='';
$total6montusersNum ='';


$result4 =$db->getmonthusersNotifications();
  foreach ($result4 as $item)        
 {$monthusersNum = $item['monthusersNum'] ; }


$result5 =$db->getTotalusersNotifications();
  foreach ($result5 as $item)        
 {$totalusersNum = $item['totalusersNum'] ; }

$result6 =$db->getTotalusers6monthNotifications();
  foreach ($result6 as $item)        
 {$total6montusersNum = $item['total6montusersNum'] ; }

//course registrations course registrations course registrations 

$monthregAppsNum ='';
$totalregAppNum ='';
$total6montregAppNum ='';


$result7 =$db->getmonthregAppNotifications();
  foreach ($result7 as $item)        
 {$monthregAppsNum = $item['monthregAppsNum'] ; }


$result8 =$db->getTotalregAppNotifications();
  foreach ($result8 as $item)        
 {$totalregAppNum = $item['totalregAppNum'] ; }

$result9 =$db->getTotalregApp6monthNotifications();
  foreach ($result9 as $item)        
 {$total6montregAppNum = $item['total6montregAppNum'] ; }

 




       ?>

<!DOCTYPE html>
 
  <html><!-- <![endif]-->
<head>
	<title>Academic center</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	
  
	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.my_account.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">

	 

<script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>	

<style type="text/css">
	.active1
	{
    background-color: #cb4040;
    color: #fff;
    }
	body
	{
        
		font-size: 20px;
		color: #000000;
        font-family: 'Rubik', sans-serif;
        letter-spacing: 0.5px;
    }
	label
	{
		font-size: 18px;
	}
	.content-heading 
    {
        margin: 0 auto;
        text-align: center;
        padding: 20px !important; /* Adjust the padding as needed */
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
<body style="overflow-x:hidden;">

	   <div id="includedMenu"></div> 

		<div id="content">
		<h1 class="bg-white content-heading border-bottom text-primary">Dashboard</h1>
		<!-- start of widgets -->
		<div class="row" >
			
			<div class="col-md-3 col-sm-6">
				<div class="panel-3d">
					<div class="front">
	
						<div class="widget text-center">
							<div class="widget-body padding-none">
								<div>
									<div class="innerAll bg-info">
										<p class="lead strong margin-none text-white"><i class="icon-bookmark fa-3x text-white"></i><br/>
						<span style="font-size: 20px;"><?PHP echo $monthCoursesNum; ?> New courses this month</span>
					</p>
									</div>
									<div class="innerAll">
										<button class="btn btn-info">View courses Statistics</button>
									</div>
								</div>
							</div>
						</div>
	
					</div>
					<div class="back">
						<div class="widget widget-inverse widget-scroll" data-scroll-height="165px">
							<div class="widget-head">
								<button class="btn btn-xs btn-default pull-right"><i class="fa fa-times"></i></button>
								<h4 class="heading">Courses Statistics</h4>
							</div>
							<div class="widget-body padding-none">
								<div>
									<div class="box-generic border-none text-center">
										<p class="margin-none">Total number of courses</p>
										<p><strong class="text-large">
										<?PHP echo $totalCoursesNum; ?></strong></p>
										<p class="margin-none"><span class="text-success strong"><?php
										echo $total6montCoursesNum;
										   ?></span> <i class="fa fa-fw fa-arrow-up text-success"></i> last 6 months</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="panel-3d">
					<div class="front">
	
						<div class="widget text-center">
							<div class="widget-body padding-none">
								<div>
									<div class="innerAll bg-success">
										<p class="lead strong margin-none text-white"><i class="icon-document-add fa-3x"></i><br/>
							<span style="font-size: 20px;">

							<?php
										echo $monthusersNum;

										   ?>  New users this month</span>
										</p>
									</div>
									<div class="innerAll">
										<button class="btn btn-success text-white">View user Statistics</button>
									</div>
								</div>
							</div>
						</div>
	
					</div>
					<div class="back">
						<div class="widget widget-inverse widget-scroll" data-scroll-height="165px">
							<div class="widget-head">
								<button class="btn btn-xs btn-default pull-right"><i class="fa fa-times"></i></button>
								<h4 class="heading">New Users Statistics</h4>
							</div>
							<div class="widget-body padding-none">
								<div>
									<div class="box-generic border-none text-center">
										<p class="margin-none">Total number of users</p>
										<p><strong class="text-large"><?php
										echo $totalusersNum;

										   ?></strong></p>
										<p class="margin-none"><span class="text-success strong"><?php
										echo $total6montusersNum;

										   ?></span> <i class="fa fa-fw fa-arrow-up text-success"></i> last 6 months</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="panel-3d">
					<div class="front">
	
						<div class="widget text-center">
							<div class="widget-body padding-none">
								<div>
									<div class="innerAll bg-primary">
										<p class="lead strong margin-none text-white"><i class="icon-documents-check fa-3x"></i><br/>
											<span style="font-size: 20px;">  <?php
										echo $monthregAppsNum;

										   ?> New course registrations this month</span>
										</p>
									</div>
									<div class="innerAll">
										<button class="btn btn-primary">View course registrations Statistics</button>
									</div>
								</div>
							</div>
						</div>
	
					</div>
					<div class="back">
						<div class="widget widget-inverse widget-scroll" data-scroll-height="165px">
							<div class="widget-head">
								<button class="btn btn-xs btn-default pull-right"><i class="fa fa-times"></i></button>
								<h4 class="heading">Course Registrations Statistics</h4>
							</div>
							<div class="widget-body padding-none">
								<div>
									<div class="box-generic border-none text-center">
										<p class="margin-none">Total number of registrations</p>
										<p><strong class="text-large"><?php
										echo $totalregAppNum;

										   ?></strong></p>
										<p class="margin-none"><span class="text-success strong"> <?php
										echo $total6montregAppNum;

										   ?></span> <i class="fa fa-fw fa-arrow-up text-success"></i> last 6 months</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
		<!--end of widgets-->
		


	
	</div>	
	
		
		</div>
		<!-- // Content END -->
		
		
		
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
<script src="../assets/components/modules/admin/forms/elements/bootstrap-datepicker/assets/lib/js/bootstrap-datepicker.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/elements/bootstrap-datepicker/assets/custom/js/bootstrap-datepicker.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/editors/wysihtml5/assets/lib/js/wysihtml5-0.3.0_rc2.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/editors/wysihtml5/assets/lib/js/bootstrap-wysihtml5-0.0.2.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/editors/wysihtml5/assets/custom/wysihtml5.init.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/holder/holder.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/sidebar.main.init.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/sidebar.collapse.init.js?v=v1.2.0"></script>
<script src="../assets/components/helpers/themer/assets/plugins/cookie/jquery.cookie.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/core.init.js?v=v1.2.0"></script>	
</body>
</html>
 
 