 
<!DOCTYPE html>
<?php 
if(!isset($_POST['email']))
{ 
 header("location:../logIn/login.php");

}
else 
$email = $_POST['email']; 
?>
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

	
	
	<div id="content"><h4 class="innerAll margin-none border-bottom text-center">    Change password </h4>

<div class="login spacing-x2">
	<div class="placeholder text-center"><i class="fa fa-lock"></i></div>
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-default">
			<form class=" " action="../DB/updateUserpasswordDB.php" method="POST" enctype="multipart/form-data" > 
				<div class="panel-body innerAll">
		  	   

                <p> <span id="txtHint"></span></p>
  
		  	  		<div class="form-group">
			    		<label for="exampleInputEmail1"> 
			    		new  password </label>
			    		 <div class="input-group" style="  display: flex;">
			    		 	<input  type="hidden" id="email"   name ="email"  value="<?php echo $email ;  ?>" readonly hidden />
 
                                <input  type="password" id="passwordField" class="form-control"    name ="password"    placeholder="Enter your password">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="showPasswordButton" onclick="showPassword()">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
			  		</div>
                      <button type="submit" name="submit"   id="submit" 
                          class="btn  btn-info btn-block"  name="submit" >  submit </button>
			  	 
			 
		 
		  	</div>
		  	</form>
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
	
	<script src="../assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/breakpoints/breakpoints.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/animations.init.js?v=v1.2.0"></script>
<script src="../assets/components/helpers/themer/assets/plugins/cookie/jquery.cookie.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/core.init.js?v=v1.2.0"></script>	
</body>
</html>