 
<?php
 session_start();
  if ($_SESSION['valid'] == 1)  
{  ?>
<!DOCTYPE <html>
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
	

	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.my_account.min.css" />
	<link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">



	<script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<style type="text/css">
	.active3 
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
		width: 40% !important;
		height: 50px !important;
		font-size: 16px !important;
	}
	.content-heading 
    {
        margin: 0 auto;
        text-align: center;
        padding: 20px !important; 
    }
</style>
 	
</head>
<body>

	  <div id="includedMenu"></div>



	<div id="content"><h1 class="bg-white content-heading border-bottom text-primary">Add Post</h1>


	<!-- Widget -->
<div class="widget widget-tabs widget-tabs-gray border-bottom-none">

	<!-- Widget heading -->

	<!-- // Widget heading END -->
	
	<div class="widget-body">
		<form class="form-horizontal" action="../DB/addPostDB.php" method="POST" enctype="multipart/form-data">
			<div class="row">
				<!-- Column -->
				<div class="col-md-1">
					<strong>Post title</strong>
				</div>
				<!-- // Column END -->

				<!-- Column -->
				<div class="col-md-9">
					<input style="width:25%; color: black;" type="text" id="editableTextbox1" class="form-control" value=""  placeholder="Enter the post title here..." name="title" required /><br>
				</div>
				<!-- // Column END -->
			</div>
			<hr class="separator bottom" />
			<div class="tab-content">
				<!-- Tab content -->
				<label>Post body</label><br><br>
				<div class="tab-pane active" id="account-details">
					<textarea style="width: 50%;" id="mustHaveId" class="wysihtml5 form-control" rows="5" placeholder="Enter the post body here..." name="body" required ></textarea>
					
				</div>
				<!-- // Tab content END -->
			</div>	
			<hr class="separator bottom" />
			<div class="tab-content">
				<div class="separator bottom"></div>
				
				<label>Post Photo</label>
				<div style="max-width: 300px; max-height: 300px; overflow: hidden; border-radius: 8px;">
 					<img id="blah1" src="#" alt=" " style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;" />
				</div>
				<br><br>
				<!-- File input and "Remove photo" button -->
				<div style="display: flex; align-items: center;">
					<label for="image" class="btn btn-info">Select Photo</label>
					 <input style="display: none;" class="img-input" id="image"  type='file' name="image" onchange="readURL1(this);" accept="image/*"  required/>
					 &nbsp;
					 <button type="submit"  id="submit" name="submit"   class="btn btn-primary">Add  post <span class="fa fa-fw fa-check"></span> </button>
				</div>
				<div class="separator top">
					 

					 

					 
				</div>
			</div>
		</form>
	</div>
</div>


<!-- // Widget END -->


	
</div>	
	
		
		</div>
		<!-- // Content END -->
		

		
	</div>
	<!-- // Main Container Fluid END -->
	

	<script>
		
       $("#includedMenu").load("menu.php");

	document.addEventListener("DOMContentLoaded", () => {
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
const res = urlParams.get('res');
var myNewURL = "Online Lms/admin/addPost.php";
 if (res == 1   ) {
	 
	 	sweetAlert("Done","Post added successfully!","success");


window.history.pushState("object or string", "Title", "/" + myNewURL );


}
 

else if(res == 2) {
	 
	 
  sweetAlert("Failed", "Encountered an error", "error");
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
 
	function addPostImage() {
    const fileInput = document.getElementById("image");
    const postImg = document.getElementById("postImage");

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function (e) {
            postImg.src = e.target.result;
        };

        reader.readAsDataURL(fileInput.files[0]);
    }
}

	</script>
	
<script>
  function readURL1(input) {
$('#blah1').attr('src', '');
 
        if (input.files && input.files[0]) {
            var reader = new FileReader();
// console.log(reader.readAsText(logFile));


            reader.onload = function (e) {
                $('#blah1')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(220);
            };

            reader.readAsDataURL(input.files[0]);
        }
    } ;
	

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
   <?php }
else {
       header('Location:../Pallms/signInUp.php');
}

?>  