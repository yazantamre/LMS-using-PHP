 
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->


	<?php 
 session_start();
 if (  $_SESSION['valid'] != 2)  
       header('Location:../Pallms/signInUp.php');

   
 
require('../DB/DB.php');

     $db = new DB(); 

$userid =  $_SESSION['id'];
       $result =$db->getteacherlastCourse($userid);
       $result2 =$db->getLastAssignmentNotifications($userid);
 
  


       $result3 =$db->getLastAssignmentCommentsNotifications($userid);

       $result1 =$db->getcoursesappByforteacher($userid);
$coursesapp = mysqli_num_rows($result);
    $courses = mysqli_num_rows($result1);  
$Assigmentnum = mysqli_num_rows($result2);
$Commentsnum = mysqli_num_rows($result3);
          
       

        

   
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
  <script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script>   

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

	.content-heading 
    {
        margin: 0 auto;
        text-align: center;
        padding: 20px !important; /* Adjust the padding as needed */
    }
</style>
</head>
<body style="overflow-x: hidden;">


        <div id="includedMenu"></div>  



	<div id="content">
		<h1 class="bg-white content-heading border-bottom text-primary">Dashboard</h1>

	
		<div class="col-md-3 col-sm-6">
			<div class="panel-3d">
				<div class="front">

					<div class="widget text-center">
						<div class="widget-body padding-none">
							<div>
								<div class="innerAll bg-primary">
									<p class="lead strong margin-none"><i class="icon-bookmark"></i><br/><?php echo $coursesapp  ; ?>   New Courses this Week</p>
								</div>
								<div class="innerAll">
									<button class="btn btn-primary">View</button>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="back">
					<div class="widget widget-inverse widget-scroll" data-scroll-height="165px">
						<div class="widget-head">
							<button class="btn btn-xs btn-default pull-right"><i class="fa fa-times"></i></button>
						</div>
						<div class="widget-body padding-none">
							<div>

								<?php 

 $name= ''  ;
$price= ''  ;
$enrolledNumber= ''  ;

         foreach ($result as $item) 

      
         { 
        $name=$item['name']   ;
        $price=$item['price']   ;
        $enrolledNumber=$item['enrolledNumber']   ;
               
      ?>
								<div class="box-generic text-center">
									<p class="margin-none text-large text-primary">Course: <?php echo $name; ?></p>
									<p>Price:<?php echo $price; ?></p>
									<p class="margin-none"> <i class="fa fa-fw fa-arrow-up text-success"></i><?php echo $enrolledNumber; ?>   Students</p>
								</div>

							<?php }?>
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
									<p class="lead strong margin-none text-white"><i class="icon-bookmark"></i><br/><?php echo $Assigmentnum; ?> New Assignments this Week</p>
								</div>
								<div class="innerAll">
									<button class="btn btn-success">View</button>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="back">
					<div class="widget widget-inverse widget-scroll" data-scroll-height="165px">
						<div class="widget-head">
							<button class="btn btn-xs btn-default pull-right"><i class="fa fa-times"></i></button>
						</div>
						<div class="widget-body padding-none">
							<div>
							<?php 


		foreach ($result2 as $item) {

?>
								<div class="media innerAll half margin-none">
		                            
		                            <div class="media-body ">
		                                <a style="pointer-events: none;" href="" class="strong text-success"> <i class="fa fa-circle"></i> 

										<?php echo $item['name']; ?> 
		                                </a> 
										<div class="clearfix"></div>
		                                <em> <?php echo "Added on " . $item['DateAdded']; ?> </em>
		                            </div>
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
									<p class="lead strong margin-none text-white"><i class="icon-envelope-2"></i><br/>  

 
<?php echo $Commentsnum; ?>  New Comments this Week</p>
								</div>
								<div class="innerAll">
									<button class="btn btn-info">View</button>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="back">

					<div class="widget widget-inverse widget-scroll" data-scroll-height="165px">
						<div class="widget-head">
							<button class="btn btn-xs btn-default pull-right"><i class="fa fa-times"></i></button>
						</div>
						<div class="widget-body padding-none">
							
							<div>

													<?php 
 

		foreach ($result3 as $item) {
			$Student = '';
$Studentid=$item["userId"] ;

$courseId = $item["courseId"] ;
	$result5 =$db->getusersById($Studentid);
foreach ($result5  as $item1) { }
$Student=  $item1["firstName"] ." ".$item1["lastName"];
?>
		
								<div class="media innerAll">
		                            <i class="fa fa-chat fa-2x pull-left disabled"></i>
		                            <div class="media-body">
		                                <div class="pull-right label label-default"></div>
		                                <a href="" style="pointer-events:none;" class="strong text-success"> <i class="fa fa-circle success"></i><?php echo $Student; ?></a>
										<em>commented: </em>
		                                 <p>  <?php echo substr($item['Comment'], 0, 60); ?>... </p>
		                                	<form class="form-horizontal" action="assayments.php" method="POST" enctype="multipart/form-data" >
		                                		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		                                <button  type="submit"    name ="submit"  class="btn btn-info btn-xs">read comment</button>

		                                </form> 

		                            </div>
		                        </div>
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