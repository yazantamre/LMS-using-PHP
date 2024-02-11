<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7 app"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8 app"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9 app"> <![endif]-->
<!--[if gt IE 8]> <html class="app"> <![endif]-->
<!--[if !IE]><!--><html class="app">


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
	<title>Course classroom</title>
	
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
 <script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script> 

      <style type="text/css">
    .active3 {

    background-color: #cb4040;
    color: #fff;
        }
		body,strong,label,button
	{
		font-size: 18px;
		color: #333333;
        font-family: 'Poppins', sans-serif;
        letter-spacing: 0.5px;
        overflow-x: hidden;
        font-weight: 500 !important;
    }

</style>	
</head>
<body>

	  <div id="includedMenu"></div>


	<div id="content"><div class="layout-app">
<div class="col-table">
	
	<h1 class="bg-white text-primary content-heading border-bottom text-center">Course Classroom</h1>
	<div class="bg-white text-center  innerAll border-bottom">
	
	<ul class="menubar">
		<li class="active">
			<form class="form-horizontal" action="advertisements.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = " text-decoration: none;
		background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none;
     "     > Posts </button>
				</form> 


</li>
		<li>



	<form class="form-horizontal" action="assayments.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button    type="submit"    name ="submit"  style = "   background: #ededed;
    color: #3b3b3b;
    font-weight: 600;
    padding: 3px;
     
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; "   > Assignments </button>
				</form> 

 

		</li>
		<li>
		 


			<form class="form-horizontal" action="cementEvaluation.php" method="POST" enctype="multipart/form-data" >

		<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
		<button  type="submit"    name ="submit"  style = " text-decoration: none;
		background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none;
     "   > Assignment Grading </button>
				</form> 
		</li>
		
<li>

		<form class="form-horizontal" action="students.php" method="POST" enctype="multipart/form-data" >

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
								
								<div class="col-md-12">
                                    
									<div class="col-separator col-separator-last box">


										<div class="widget widget-tabs widget-tabs-gray border-bottom-none">
						

																	 
	
		
	
	<!-- // To END -->
	<div class="clearfix"></div>

<!-- // Filters END -->
											<!-- Widget heading -->
										
											<!-- // Widget heading END -->
											
		<div class="widget-body">
		 
				<div class="tab-content">
			 
													
			<form class="form-horizontal" action="../DB/addAssigmentDB.php" method="POST" enctype="multipart/form-data" >										 
				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
																	
		 <div class="tab-pane active" id="account-details">
														
				<input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>							<!-- Row -->
				<div class="row">
				
					<!-- Column -->
					<div class="col-md-2">
						<strong>Assignment name</strong>
					</div>
					<!-- // Column END -->
					
					<!-- Column -->
					<div class="col-md-5">
						<input style="border-radius: 10px;" type="text"  id="inputTitle" class="form-control" value="" placeholder="Assignment Name ..."  name ="name" required  />
						<div class="separator"></div>
					</div>
					<!-- // Column END -->
					
				</div>
				<!-- // Row END -->	
                <hr class="separator bottom" />
				
				<!-- Row -->
				<div class="row">
				
					<!-- Column -->
					<div class="col-md-2">
						<strong>Assignment Description</strong>
					</div>
					<!-- // Column END -->
					
					<!-- Column -->
					<div class="col-md-5">
						<textarea style="border-radius: 10px;" id="textDescription" placeholder="Assignment Description ..."  class="wysihtml5 form-control" rows="5" name ="description" required></textarea>
					</div>
					<!-- // Column END -->
					
				</div>
				<!-- // Row END -->
                <hr class="separator bottom" />

                <!-- Row -->
				<div class="row">
				
					<!-- Column -->
					<div class="col-md-2">
						<strong>Assignment mark</strong>
					</div>
					<!-- // Column END -->
					
					<!-- Column -->
					<div class="col-md-1">
						<input style="border-radius: 10px;" type="number" id="inputmark" class="form-control" value="" placeholder="Mark ..."  name ="mark" required />
						<div class="separator"></div>
					</div>
					<!-- // Column END -->
					
				</div>
				<!-- // Row END -->	

                <hr class="separator bottom" />

                <!-- Row -->
				<div class="row">
				
					<!-- Column -->
					<div class="col-md-2">
						<strong>Assignment due Date</strong>
					</div>
					<!-- // Column END -->
					
					<!-- Column -->
					<div class="input-group col-md-2 "   >
                        <input  type="text" name="to" style="height: 50px;" id="dateRangeTo" class="form-control" placeholder="08/18/13"  name ="DataSubmit" required />
                         <span  class="input-group-addon" >
                            <label  for="to"><i  class="fa fa-calendar"  id="openCalendar"></i></label>
                        </span>
                       						
                        <div class="separator"></div>
					</div>
					<!-- // Column END -->
					
				</div>
				<!-- // Row END -->	

                <hr class="separator bottom" />

                <!-- Row -->
				<div class="row">
				
					<!-- Column -->
					<div class="col-md-2">
						<strong>Assignment File :</strong>
					</div>
					<!-- // Column END -->
					
					<!-- Column -->
					<div class="col-md-5">
                        <input required type="file" name="file" id="file" style="display: none; "  onchange="displayFileName()" />
                        <button style="border-radius:10px;" type="button"  class="btn btn-info"  onclick="document.getElementById('file').click();">Add file &nbsp;<i class="fa fa-plus"></i> </button>
                            <p id="file-name"></p>	
						</div>						
							<div class="separator"></div>
					</div>
					<!-- // Column END -->
					
				</div>
				<!-- // Row END -->	
                <hr class="separator bottom" />

                <div class="innerAll center"  >
                    <button style="border-radius:10px;" type="submit"  name="submit"  class="btn btn-primary">Post Assignment &nbsp;<i class="fa fa-fw fa-check"></i></button>
                </div>
</form>
                <script>
                    function displayFileName() {
                                const fileInput = document.getElementById('file');
                                const fileNameDisplay = document.getElementById('file-name');

                            if (fileInput.files.length > 0) {
                                const fileName = fileInput.files[0].name;
                                fileNameDisplay.textContent = 'Selected file: ' + fileName;
                                } else {
                                fileNameDisplay.textContent = '';
                            }
                                }
                    </script>

                <script>
                    $(function() {
                        // قم بربط حقل التاريخ بتقويم jQuery UI Datepicker
                        $("#dateRangeTo").datepicker();
                    
                        // عند النقر على أيقونة التقويم، افتح التقويم
                        $("#openCalendar").click(function() {
                            $("#dateRangeTo").datepicker("show");
                        });
                    });
                    </script>
                
									
															
															
															

								</div> 
                                <!-- end col 2 -->

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