 <!DOCTYPE html>
    <html class="app"> 

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
	<title>Old course classroom</title>
	
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
        overflow-x: hidden;
        font-weight: 500 !important;
    }
</style> 
</head>
<body style="overflow-x: hidden;">
 
 

 
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
		<button  type="submit"    name ="submit"  style = "text-decoration: none;
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


		<form class="form-horizontal" action="Finishedstudents.php" method="POST" enctype="multipart/form-data" >

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
     "   > Students   </button>
				</form> 
</li>
	</ul>

 
</div>
	<div class="col-separator-h"></div>

	<div class="col-table-row" >
	
		<div class="col-app col-unscrollable" style="margin-left: 30px;">
			
			<div class="col-app">
				<div class="row row-app email">
					
					<div class="col-md-12">
						<div class="col-separator">
							<div class="row row-app">

							    <div class="col-md-12">
								    <div class="col-separator col-unscrollable box">
								        <div class="col-table">
										
   

<div class="col-table-row">
	<div class="col-app col-unscrollable">
		<div class="col-app">
			<div class="list-group email-item-list">

<?php 

$result =$db->getCoursestudents($courseId,1);

		foreach ($result as $item) {

?> 
					<form    action="Finished_students_marks.php" method="POST" enctype="multipart/form-data"  class="list-group-item ">
					<span class="media">
						<img style ="width: 50px; height:50px;object-fit:cover;" src="<?php echo $item['imagePath']; ?>" alt="" width="35" class="thumb img-responsive img-circle pull-left" />
						
						<span class="media-body">
							<input type="text"  name="studentId" value="<?php echo $item['studentId']; ?>" hidden  readonly>
							<input type="text"   value="<?php echo $courseId; ?>"  name="courseId"   hidden readonly>
							<input type="text"  value="<?php echo $item['firstName']. " ".$item['lastName']; ?>"   name="studentName"   hidden readonly>

							<div class="pull-left">
							<h4 class="">   <?php echo $item['firstName']. " ".$item['lastName']; ?>  <i class="icon-flag text-primary icon-2x"></i></h4> 
							<label ><small><i class="fa fa-fw fa-envelope"></i><?php echo $item['email']; ?></small></label>
							</div>
							<div class="pull-right">
							 <button id="userButton" type="submit"    name ="submit"  class="btn btn-circle btn-info"  ><i class="fa fa-fw fa-user" ></i></button>
							 </div>
							 <div class="clearfix"></div>

						
							


						</span>
					</span>
				</form>
				 			<br>					 
					<?php } ?>														
			 							
														
																													
														
													</div>
													<!-- // END list-group -->
												</div>
												<!-- // END col-app -->
											</div>
											<!-- // END col-app -->
										</div>
										<!-- // END col-table-row -->
									</div>
									<!-- // END col-table -->
								</div>
								<!-- // END col-separator -->
							</div> 
							<!-- // END col -->
								


								
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
		
	->
		
		
		
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



   

	

  
    $(document).ready(function () {
        // عند النقر على زر "Add"
        $("#addButton").click(function () {
            $("#addStudentModal").modal("show");
        });

        // عند النقر على زر "حفظ" في نافذة إضافة الطالب
        $("#saveStudent").click(function () {
            // استخراج بيانات الطالب من النموذج
            var studentName = $("#studentName").val();
            var studentID = $("#studentID").val();

            // يمكنك إجراء الإجراءات اللازمة لحفظ الطالب هنا
            // يمكنك أيضًا إظهار نافذة التأكيد
            $("#addStudentModal").modal("hide");
            $("#confirmationModal").modal("show");

            // إفراغ حقول النموذج بعد الحفظ
            $("#studentName").val("");
            $("#studentID").val("");
        });

        // عند النقر على زر "إلغاء" في نافذة إضافة الطالب
        $("#addStudentModal").on("hidden.bs.modal", function () {
            // إفراغ حقول النموذج عند إغلاق النافذة
            $("#studentName").val("");
            $("#studentID").val("");
        });
    });


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
       header('Location:../Pallms/signInUp.php');
 
}

?>  