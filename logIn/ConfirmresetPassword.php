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

	
	
	<div id="content"><h4 class="innerAll margin-none border-bottom text-center">  Reset Password code </h4>

<div class="login spacing-x2">
	<div class="placeholder text-center"><i class="fa fa-lock"></i></div>
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-default">
			<div class="panel-body innerAll">
		  	   

                <p> <span id="txtHint"></span></p>

		  	  		<div class="form-group">
			    		<label for="exampleInputEmail1"> 
			    		Reset Password code </label>
			    		<input type="email" name="email"  class="form-control" id="email" placeholder="Enter Email">
		    			<input type="text" name="PasswordCode"  class="form-control" id="PasswordCode" placeholder="Enter Code">
			  		</div>
                      <button type="submit"   id="submit" 
                          class="btn  btn-success btn-block"  name="login" >  submit </button>
						  <a class="btn btn-info btn-block" href="../Pallms/signinUp.php">go back</a>

			  	 
			 
		 
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

    function confirmMessage() {
    var PasswordCode  = document.getElementById("PasswordCode").value;

  
        
        }


         $("#submit").click(function() { 

 var PasswordCode = $("#PasswordCode").val();
  var email = $("#email").val();

//new Password.php

 $.ajax({
 type: "POST",
 url: "../DB/ConfirmresetPasswordcodeDB.php",
 data: {
 
 PasswordCode: PasswordCode ,
 email: email
 
 },
 cache: false,
 success: function(data) {
   
  var responseyy =  parseInt(data )
 	if (responseyy == 1) {

 	sweetAlert("success");

    var form = $(document.createElement('form'));
    $(form).attr("action", "new Password.php");
    $(form).attr("method", "POST");
    $(form).css("display", "none");

    var emailinput = $("<input>")
    .attr("type", "text")
    .attr("name", "email")
    .val(email);
    $(form).append($(emailinput));


    

    form.appendTo( document.body );
    $(form).submit();

 	}
 		else 
    sweetAlert("Error!", "Please check your e-mail and reset code", "error"); 
 },
 error: function(xhr, status, error) {
 
 sweetAlert("Oops...", "Something went wrong! ", "error");
 }

 });


} );

	</script>
	
	<script src="../assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/breakpoints/breakpoints.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/animations.init.js?v=v1.2.0"></script>
<script src="../assets/components/helpers/themer/assets/plugins/cookie/jquery.cookie.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/core.init.js?v=v1.2.0"></script>	
</body>
</html>