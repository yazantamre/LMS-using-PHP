<!DOCTYPE html>
 
<?php
	require('../DB/DB.php');
     $db = new DB();
 session_start();
  if ($_SESSION['valid'] == 1)  
{  ?>

<html>
<head>
<title>Academic center</title>
	
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
<style type="text/css">
	.active5 {

    background-color: #cb4040;
    color: #fff;
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



	<div id="content"><h1 class="bg-white content-heading border-bottom">Open Classroom</h1>
		<div class="widget widget-tabs widget-tabs-gray border-bottom-none">
			<div class="widget-body">

            <!-- Form -->
        <form class="form-horizontal" action="../DB/addClassRoomDB.php" method="POST" enctype="multipart/form-data" >
            
            <!-- Widget -->
                
                    <!-- Row -->
                    <div class="row">
                    
                        <!-- Column -->
                        <div class="col-md-9">
                        
                            <!-- Group -->
                            <div class="form-group">
                                <label class="col-md-1 control-label" for="id">Course </label>
                                <div class="col-md-8">

<select  id="select2_6_1"  name="courseId"
				 style="width:40%; color: black;">
				 <?php 

     $result =$db->getCourseBystatusClassRoom(1,2);
       foreach ($result as $item) 

         { 

$Id = $item['id'] ;
          echo "<option value= '".$Id. "'>".$item['name']."</option> " ;
				  }?>
		                   
		                   
		        </select>
                                </div>
                            </div>
                            
							<div class="form-actions" style="margin-left: 250px;" >
								<input   type="submit"  id="submit" name="submit"   class="btn btn-primary" value="Open  " >
								<button type="button" class="btn btn-default "><i></i> Cancel <span class="fa fa-times"></span></button>
							</div>
							<!-- // Form actions END -->
                            
                            
                        </div>
                        <!-- // Column END -->
                        
                        
                        
                    </div>
                    <!-- // Row END -->
  
            <!-- // Widget END -->
            
        </form>
			</div>
        <!-- // Form END -->
        
        
            
        </div>	


	</div>	
	
		
		</div>
		<!-- // Content END -->
		
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
		
		<div id="footer" class="hidden-print">
			
			<!--  Copyright Line -->
			<div class="copy">&copy; 2012 - 2014 - <a href="http://www.mosaicpro.biz">MosaicPro</a> - All Rights Reserved. <a href="http://themeforest.net/?ref=mosaicpro" target="_blank">Purchase FLAT PLUS on ThemeForest</a> - Current version: v1.2.0 / <a target="_blank" href="http://demo.mosaicpro.biz/flatplus/CHANGELOG.txt">changelog</a></div>
			<!--  End Copyright Line -->
	
		</div>
		<!-- // Footer END -->
		
	</div>
	<!-- // Main Container Fluid END -->
	
<script>
 
	document.addEventListener("DOMContentLoaded", () => {
  
 
const queryString = window.location.search;
console.log(queryString);
const urlParams = new URLSearchParams(queryString);
const res = urlParams.get('res');
if (res == 1 ) {
	alert("Done"); 
}
else if (res == 0) {
alert("Open failed"  +"\n"
             
            +" something  is wrong"); 
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