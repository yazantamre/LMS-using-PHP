
<?php
 session_start();
  if ($_SESSION['valid'] == 1)  
{  ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
<title>Academic center</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	

	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.index.min.css" />
	<!-- Include Bootstrap CSS (if not already included) -->
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">

<!-- Include Bootstrap Datepicker CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery-ui/js/jquery-ui.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js?v=v1.2.0"></script>
 <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">	
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
<script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script> 
    <style type="text/css">
	.active6 
	{
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
	input
	{
		width: 30% !important;
		height: 50px !important;
		font-size: 16px !important;
	}
	#showPasswordButton
	{
		height:50px;
	}
	#submit
	{
		width: 4% !important;
	}
	.content-heading 
    {
        margin: 0 auto;
        text-align: center;
        padding: 20px !important; 
    }
</style>
</head>
<body style="overflow-x: hidden;">

	 
		
		 <div id="includedMenu"></div> 

	<div id="content">


	<h1  class="bg-white content-heading border-bottom text-primary">Add Teacher</h1 >
			<form action="../DB/addTeacherDB.php" method="POST" enctype="multipart/form-data">
			<div class="widget widget-tabs widget-tabs-gray">

				<div class="widget-body">
					<div class="">
						<div class="">
							<!-- Row -->
							<div class="row">
								<!-- Column -->
								<div class="col-md-1">
									<strong>First Name</strong>
								</div>
								<!-- // Column END -->
				
								<!-- Column -->
								<div class="col-md-9">
									<input style="width:15%; color: black;" type="text" id="editableTextbox1" class="form-control" value="" placeholder="Enter first name"  name="firstName" required /><br>
								</div>
								<!-- // Column END -->
							</div>
							<!-- // Row END -->
							<!-- Row -->
							<div class="row">
								<!-- Column -->
								<div class="col-md-1">
									<strong>Last Name</strong>
								</div>
								<!-- // Column END -->
				
								<!-- Column -->
								<div class="col-md-9">
									<input style="width:15%; color: black;" type="text" id="editableTextbox2" class="form-control" value="" placeholder="Enter Last name" name="lastName" required /><br>
								</div>
								<!-- // Column END -->
							</div>
							<!-- // Row END -->
				
							<hr class="separator bottom" />
				
							<!-- Row -->
							<div class="row">
								<!-- Column -->
								<div class="col-md-1">
									<strong>E-mail</strong>
								</div>
								<!-- // Column END -->
				
								<!-- Column -->
								<div class="col-md-9">
									<input style="width:15%; color: black;" type="text" id="editableTextbox4" class="form-control" value="" placeholder="Enter e-mail"  name="emailteacher" required/><br>
								</div>
								<!-- // Column END -->
							</div>
							<!-- Row -->
							<div class="row">
								<!-- Column -->
								<div class="col-md-1">
									<strong>Number</strong>
								</div>
								<!-- // Column END -->
				
								<!-- Column -->
								<div class="col-md-9">
									<input style="width:15%; color: black;" type="text" id="editableTextbox3" class="form-control" value="" placeholder="Enter phone Number" name="phone" required /><br>
								</div>
								<!-- // Column END -->
							</div>
							<hr class="separator bottom" />
							<div class="row">
								<!-- Column -->
								<div class="col-md-1">
									<strong>Address</strong>
								</div>
								<!-- // Column END -->
				
								<!-- Column -->
								<div class="col-md-9">
									<input style="width:15%; color: black;" type="text" id="editableTextbox5" class="form-control" value="" placeholder="Enter address 1" name="address1"  required /><br>
									 
								</div>
								<!-- // Column END -->
							</div>
							<hr class="separator bottom" />

							<div class="row">
								<!-- Column -->
								<div class="col-md-1">
									<strong>Password</strong>
								</div>
								<!-- // Column END -->
				
								<!-- Column -->
								<div class="col-md-9">
									<div style="display: flex;">
										<input type="password" id="passwordField" class="form-control" value="" placeholder="Enter password" name="passwordteacher" required />

										</div>
									</div>
								</div>
								
								<!-- // Column END -->
							</div>
							<!-- // Row END -->

							 
							 	<hr class="separator bottom" />

							 

							
						 
		<!-- 				 	<div class="row">
								<div class="col-md-3">
									<strong>PHOTO</strong>
								</div>
				
								<div class="col-md-9">
									<div class="input-group" style="display: flex;">
										 
				<img class="img-input" id="blah1" src="../assets/images/users/teacher.png" alt=" " style="position: absolute; left: 36%;width: 70px;"  />
      <input class="img-input"  type='Number' name="imgStutas" value="0" id="imgStutas"  hidden />
      <input class="img-input"  type='file' name="img" onchange="readURL1(this);"  accept="image/*" />
										 
									</div>
								</div>
								
							</div> -->

							<!-- Edit/Save Button -->
							 

							<input   type="submit"  id="submit" name="submit"   class="btn btn-primary" value="Add" >
						</div>
						<!-- // Description END -->
						
					</div>
				</div>
			</div>
		</form>

		</div>
		<!-- // Content END -->
		

		
	<!-- // Main Container Fluid END -->
	
<script>
 
	document.addEventListener("DOMContentLoaded", () => {
  
 
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
const res = urlParams.get('res');

var myNewURL = "Online Lms/admin/addTeacher.php";
 if (res == 1   ) {
	 
	sweetAlert("Done","Teacher added succesfully","success");


window.history.pushState("object or string", "Title", "/" + myNewURL );


}
 

else if(res == 0) {
	 
	 
	sweetAlert("Failed", "Encountered an error", "error");
 window.history.pushState("object or string", "Title", "/" + myNewURL );


}



else if(res == 31) {
	 
	 
	sweetAlert("Addition failed", "The email you entered has already been used by another user!", "error");
 window.history.pushState("object or string", "Title", "/" + myNewURL );


}
 

});

</script>
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
	

	function showPassword() {
		const passField = document.getElementById("passwordField");
        const editButton = document.getElementById("showPasswordButton");
		
		if (passField.type == "password") 
		{
			passField.type = "text";
		}
		else
		{
			passField.type = "password";
			
		}
	}


	
	</script>
	
	<script>
  function readURL1(input) {
$('#blah1').attr('src', '../assets/images/users/teacher.png');
 $("#imgStutas").val("0") ;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
// console.log(reader.readAsText(logFile));
 $("#imgStutas").val("1") ;

            reader.onload = function (e) {
                $('#blah1')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(120);
            };
 
            reader.readAsDataURL(input.files[0]);
        }
    } ;

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
   <?php }
else {
      header('Location:../Pallms/signInUp.php');
 
}

?>  