
<!DOCTYPE html>
 <html> 
	<?php 
 session_start();
 if (  $_SESSION['valid'] != 3)  
       header('Location:../Pallms/signInUp.php');

   
 
require('../DB/DB.php');

     $db = new DB(); 
      
$weekPostsNum ='';
$userid =  $_SESSION['id'];
 


$result =$db->getweekmarkNotifications($userid );
     $weekarksNum = mysqli_num_rows($result);


$result1 =$db->getweekPostsNumNotifications();
     $weekPostsNum = mysqli_num_rows($result1);  
  
 $result2 =$db->getweekAssigmentNotifications($userid );
     $weekAssigmentNum = mysqli_num_rows($result2);  


 $result3 =$db->getweekAdvertisementsNotifications($userid );
     $weekAdvertisementsNum = mysqli_num_rows($result3);  
 
        

   
 ?>


<head>
	<title>Academic Center</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.index.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">

	<script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery-ui/js/jquery-ui.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js?v=v1.2.0"></script>	
</head>
<style type="text/css">
	
	.active1 {

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




	<div id="content"><h1 class="bg-white content-heading border-bottom center text-primary">Dashboard</h1>


		<div class="col-md-3 col-sm-6">
			<div class="panel-3d">
				<div class="front">

					<div class="widget text-center">
						<div class="widget-body padding-none">
							<div>
								<div class="innerAll bg-primary">
									<p class="lead strong margin-none"><i class="icon-bookmark"></i><br/><?php  echo $weekPostsNum ;?> New HebrOnline Posts this Week</p>
								</div>
								<div class="innerAll">
									<button class="btn btn-primary">View Posts</button>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="back">
					<div class="widget widget-inverse widget-scroll" data-scroll-height="165px">
						<div class="widget-head">
							<button class="btn btn-xs btn-default pull-right"><i class="fa fa-times"></i></button>
							<h4 class="heading">Post </h4>
						</div>
						<div class="widget-body padding-none">
							<div>

								<?php      

								foreach ($result1 as $item)  { 
 ?>
								<div class="box-generic border-none text-center">
									<p class="text-large text-primary">
									 <?php  echo $item['title'];?></p>
								 
								
								</div>

							<?php  } ?>
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
									<p class="lead strong margin-none text-white"><i class="icon-bookmark"></i><br/><?php echo $weekAssigmentNum;  ?> New Assignments this Week</p>
								</div>
								<div class="innerAll">
									<button class="btn btn-success">View Assignments </button>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="back">
					<div class="widget widget-inverse widget-scroll" data-scroll-height="165px">
						<div class="widget-head">
							<button class="btn btn-xs btn-default pull-right"><i class="fa fa-times"></i></button>
							<h4 class="heading">Assigment :</h4>
						</div>
						<div class="widget-body padding-none">
							<div>
								<?php  

								 foreach ($result2 as $item)  {?>
								<div class="media innerAll half margin-none">
		  	<form class="form-horizontal" action="assayments.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $item['id'];  ?>" hidden readonly/>                          
<div class="media-body ">
    <button  type="submit" style = "   
		background-color: inherit;border:none;    " name ="submit"   class="strong text-success"> <i class="fa fa-circle"></i><?php echo $item['name']; ?></button>  
<div class="clearfix"></div>
		                                <em>
<?php echo $item['DateAdded']; ?>
		                                	 </em>
		                            </div>
		                            </form> 
		                        </div>
		                        <hr class="margin-none"/>
								 
								 <?php  } ?>
		                        
		                     
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
								<div class="bg-info innerAll">
									<p class="lead strong margin-none text-white"><i class="icon-envelope-2"></i><br/><?php echo $weekAdvertisementsNum; ?>
									 	 New course posts this Week </p>
								</div>
								<div class="innerAll">
									<button class="btn btn-info">View Posts</button>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="back">

					<div class="widget widget-inverse widget-scroll" data-scroll-height="165px">
						<div class="widget-head">
							<button class="btn btn-xs btn-default pull-right"><i class="fa fa-times"></i></button>
							<h4 class="heading">Advertisements</h4>
						</div>
						<div class="widget-body padding-none">
							
							<div>
							   <?php  

								 foreach ($result3 as $item)  {?>
								<div class="media innerAll half margin-none">
		  	<form class="form-horizontal" action="advertisements.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $item['id'];  ?>" hidden readonly/>                          
<div class="media-body ">
    <button  type="submit" style = "   
		background-color: inherit;border:none;    " name ="submit"   class="strong text-success"> <i class="fa fa-circle"></i><?php 

		echo  substr($item['content'], 0,50).'...' ;?></button>  
<div class="clearfix"></div>
		                                <em>
<?php echo $item['DateAdded']; ?>
		                                	 </em>
		                            </div>
		                            </form> 
		                        </div>
		                        <hr class="margin-none"/>
								 
								 <?php  } ?>
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
<script src="../assets/components/modules/admin/charts/flot/assets/lib/jquery.flot.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/jquery.flot.resize.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/plugins/jquery.flot.tooltip.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/custom/js/flotcharts.common.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/custom/js/flotchart-simple.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/custom/js/flotchart-simple-bars.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/widgets/widget-chat/assets/js/widget-chat.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/slimscroll/jquery.slimscroll.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/elements/bootstrap-datepicker/assets/lib/js/bootstrap-datepicker.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/elements/bootstrap-datepicker/assets/custom/js/bootstrap-datepicker.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/easy-pie/assets/lib/js/jquery.easy-pie-chart.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/easy-pie/assets/custom/easy-pie.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/widgets/widget-scrollable/assets/js/widget-scrollable.init.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/holder/holder.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/sidebar.main.init.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/sidebar.collapse.init.js?v=v1.2.0"></script>
<script src="../assets/components/helpers/themer/assets/plugins/cookie/jquery.cookie.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/core.init.js?v=v1.2.0"></script>	
</body>
</html>
   