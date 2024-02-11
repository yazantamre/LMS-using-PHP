<?php
 session_start();
  if ($_SESSION['valid'] == 1)  
{
      require('../DB/DB.php');
     $db = new DB();
 

   if(isset($_POST['submit'])){ 

        $postId=$_POST['postId'];

$title ='';
$body ='';
$imagePath  ='';
         $result =$db->getPostbyId($postId);
  
       foreach ($result as $item) 
       {
$title =$item['title'];
$body =$item['body'];
$imagePath=$item['imagePath'];

       }
  ?>
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
	
	<!-- 
	**********************************************************
	In development, use the LESS files and the less.js compiler
	instead of the minified CSS loaded by default.
	**********************************************************
	<link rel="stylesheet/less" href="../assets/less/admin/module.admin.page.my_account.less" />
	-->
	
	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.my_account.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">



<script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<style type="text/css">

	.active11 
	{
    background-color: #cb4040;
    color: #fff;
    }
	.content-heading 
    {
        margin: 0 auto;
        text-align: center;
        padding: 20px !important; /* Adjust the padding as needed */
    }

	label
	{
		font-size: 18px;
	}
	input
	{
		width: 40% !important;
		height: 50px !important;
		font-size: 16px !important;
	}
    .tab-content > .row {
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
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
    $(function()
	{
      $("#includedMenu").load("menu.php");
    });

    </script> 	
</head>
<body>
    <div id="includedMenu"></div>

    <!-- Widget -->
    <div id="content" class="widget widget-tabs widget-tabs-gray border-bottom-none">
        <h1 class="bg-white content-heading border-bottom text-primary">Edit Post</h1>

        <!-- Widget heading -->

        <!-- // Widget heading END -->

        <div class="widget-body">
            <form class="form-horizontal" action="../DB/editPostDB.php" method="POST" enctype="multipart/form-data">


                <div class="tab-content">
                    <div class="row">
                        <div class="col-md-2">
                            <strong>Post title</strong>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="postId" value="<?php echo $postId; ?>" hidden>
                            <input style="width: 100%; color: black;" type="text" id="editableTextbox1" class="form-control" value="<?php echo $title; ?>" placeholder="Enter the post title here..." name="title" required /><br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <strong>Post Body</strong>
                        </div>
                        <div class="col-md-10" id="account-details">
                            <textarea style="width: 50%;" id="mustHaveId" class="wysihtml5 form-control" required rows="5" placeholder="Enter the post body here..." name="body"><?php echo $body; ?></textarea>
                        </div>
                    </div>

                    <hr class="separator bottom" />

                    <div class="row">
    <div class="col-md-2">
        <strong>Post Photo</strong>
    </div>
    <div class="col-md-3">
        <div style="display: flex; flex-direction: column; align-items: center;">
            <input type="text" name="fileStatus" id="fileStatus" value="0" hidden />
            <div style="max-width: 300px; max-height: 300px; overflow: hidden; border-radius: 8px;">
                <img class="img-input" id="blah1" alt=" " style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;" src="<?php echo $imagePath; ?>" />
            </div>
            <br>
            <div style="display: flex; align-items: center;">
                <label style="height: auto" for="image" class="btn btn-info">Select Photo</label>
                <input style="display: none;" class="img-input" id="image" type='file' name="image" onchange="readURL1(this);" accept="image/*"/>
            </div>
            <br>
        </div>
    </div>
</div>

                    <hr class="separator top" />

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary">
                                Save Post <span class="fa fa-fw fa-check"></span>
                            </button>

                            <button type="submit" id="submit2" name="submit2" class="btn btn-primary" style="display: none;">
                                delete cs <i class="fa fa-close"></i>
                            </button>

                            <a onclick="deletpost()" class="btn btn-primary">
                                Delete Post <i class="fa fa-close"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- // Widget END -->
</body>

	
		
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
 

	function deletpost()  {
   

   swal({
  title: "Are you sure?",
  text: "This post will be permanently deleted",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#cb4040",
  confirmButtonText: "Yes",
  closeOnConfirm: false
},
function(){
    document.getElementById("submit2").click();
});
}


preventDefault();
	</script>
	
<script>
  function readURL1(input) {
$('#blah1').attr('src', '');
  $("#fileStatus").val("0") ;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
// console.log(reader.readAsText(logFile));
  $("#fileStatus").val("1") ;
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
   <?php }   else {
   	       header('Location:index.php');


   }  }

else {
       header('Location:../Pallms/signInUp.php');
}

?>  