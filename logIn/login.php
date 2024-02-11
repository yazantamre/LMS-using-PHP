<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->
<head>
	<title>HebrOnline</title>
 	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.login.min.css" />
	<link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">


	<script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>	

  <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
</head>
<body class=" loginWrapper">

	
	
	<div id="content"><h4 class="innerAll margin-none border-bottom text-center"><i class="fa fa-lock"></i> Login to your Account</h4>

<div class="login spacing-x2">
	<div class="placeholder text-center"><i class="fa fa-lock"></i></div>
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-default">
			<div class="panel-body innerAll">
		  		<form role="form" action="../DB/loginDB.php" method="POST">

		  	  		<div class="form-group">
			    		<label for="exampleInputEmail1">Email address</label>
		    			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required  >
			  		</div>
			  		<div class="form-group">
			    		<label for="exampleInputPassword1">Password</label>
			    		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" 
			    		name="password" required>
			  		</div>
			  		<a href="resetPassword.php" class="" style="display: flex; justify-content: center;">Forgot password?</a><br>
			  		<button type="submit"    class="btn btn-primary btn-block" name="login" >Login </button>
			  	 
				</form>
		  	</div>
		</div>
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

	document.addEventListener("DOMContentLoaded", () => {
  
 
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
const res = urlParams.get('res');
if (res == 891 ) {
	 

	    sweetAlert("Oops...", " your email  or  Password  wrong! ", "error");

}  
else if (res == 98) {
 swal("Good job!", "Your password has been changed!", "success")
}


if (res == 821 ) {
	 

	    sweetAlert("Your account  deactivate.", " Please contact the administration to learn more and solve the problem ... ", "error");

}






 
});


	</script>
	
	<script src="../assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/breakpoints/breakpoints.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/animations.init.js?v=v1.2.0"></script>
<script src="../assets/components/helpers/themer/assets/plugins/cookie/jquery.cookie.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/core.init.js?v=v1.2.0"></script>	
</body>
</html>