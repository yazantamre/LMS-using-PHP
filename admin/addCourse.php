<?php
 session_start();
  if ($_SESSION['valid'] == 1)  
{  ?>

<!DOCTYPE html>
 <html>
<head>
<title>Academic center</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.shop_edit_product.min.css" />
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">

	

	<script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>	
<script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

<style type="text/css">
	.active4
	{
    background-color: #cb4040;
    color: #fff;
    }
	body,strong,label,select
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
	textarea
	{
		font-size: 16px !important;
	}
	#submit
	{
		width: 10% !important;
	}
    .content-heading 
    {
        margin: 0 auto;
        text-align: center;
        padding: 20px !important;
    }
</style>
  <script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script> 
</head>
<body>

	

  <div id="includedMenu"></div>


	<div id="content">
        <h1  class="bg-white content-heading border-bottom text-primary">Add Course</h1 >



	<!-- Widget -->
	<form action="../DB/addCourseDB.php" method="POST" enctype="multipart/form-data" >
    <div class="widget widget-tabs widget-tabs-gray">
        <!-- Widget heading -->
        <div class="widget-head">
            <ul>
                <li class="active"><a href="#productDescriptionTab" data-toggle="tab" class="glyphicons font"><i></i>Description</a></li>
                <li><a href="#productSeoTab" data-toggle="tab" class="glyphicons podium"><i></i>Outline</a></li>
                <li><a href="#prereqTab" data-toggle="tab" class="glyphicons podium"><i></i>Prerequisites</a></li>
                <li><a href="#outcomeTab" data-toggle="tab" class="glyphicons podium"><i></i>Outcome</a></li>
                <li><a href="#productPhotosTab" data-toggle="tab" class="glyphicons picture"><i></i>Photo</a></li>
                <li><a href="#productAttributesTab" data-toggle="tab" class="glyphicons adjust_alt"><i></i>Teacher</a></li>
                <li><a href="#productDateTab" data-toggle="tab" class="glyphicons table"><i></i>Registration Date</a></li>
                <li><a href="#productPriceTab" data-toggle="tab" class="glyphicons money"><i></i>Price</a></li>
            </ul>
        </div>
        <!-- // Widget heading END -->
        <div class="widget-body">
            <div class="tab-content">
                <!-- Description -->
                <div class="tab-pane active" id="productDescriptionTab">
                    <!-- Row -->
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-2">
                            <strong>Course name</strong>
                        </div>
                        <!-- // Column END -->
                        <!-- Column -->
                        <div class="col-md-9">
                            <input style="color: black;" type="text" id="inputTitle" class="form-control" value="" placeholder="Enter Course name..." name="name" required />
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
                            <strong>Course Description</strong>
                        </div>
                        <!-- // Column END -->
                        <!-- Column -->
                        <div class="col-md-9">
                            <textarea style="width: 50%;" id="textDescription" class="wysihtml5 form-control" rows="5" name="description" required></textarea>
                        </div>
                        <!-- // Column END -->
                    </div>
                    <!-- // Row END -->
                </div>
                <!-- SEO -->
                <div class="tab-pane" id="productSeoTab">
                    <label class="strong text-uppercase">Course outline</label>
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-9">
                            <textarea style="width:50%" id="outline" class="wysihtml5 form-control" rows="5" name="outline" required></textarea>
                        </div>
                    </div>
                </div>
                <!-- // SEO END -->
                <!-- SEO -->
                <div class="tab-pane" id="prereqTab">
                    <label class="strong text-uppercase">Course Prerequisites</label>
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-9">
                            <textarea style="width:50%" id="requirements" class="wysihtml5 form-control" rows="5" name="requirements" required></textarea>
                        </div>
                    </div>
                </div>
                <!-- // SEO END -->
                <!-- SEO -->
                <div class="tab-pane" id="outcomeTab">
                    <label class="strong text-uppercase">Course outcome</label>
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-9">
                            <textarea style="width:50%" id="outcome" class="wysihtml5 form-control" name="outcome" rows="5" required></textarea>
                        </div>
                    </div>
                </div>
                <!-- // SEO END -->
                <!-- // Description END -->
                <!-- Photos -->
                <div class="tab-pane" id="productPhotosTab">
                    <div class="separator bottom"></div>
                    <label for="img" class="btn btn-info">Select Course Photo</label><br><br>
                    <div style="max-width: 300px; max-height: 300px; overflow: hidden; border-radius: 8px;">
                        <img class="img-input" id="blah1" src="#" alt=" " style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;" />
                    </div>
                    <div style="display: flex; align-items: center;">
                        <!-- Use a label with a for attribute to associate it with the input -->
                        <input id="img" style="display: none;" class="img-input" type='file' name="img" onchange="readURL1(this);" accept="image/*" required />
                    </div>
                </div>
                <!-- // Photos END -->
                <!-- Attributes -->
                <div class="tab-pane" id="productAttributesTab">
                    <label class="strong text-uppercase">Choose teacher</label><br>
                    <select id="select2_6_1" name="teacherId" style="width: 20%; color: black;" required>
                        <option selected disabled value="">...</option>
                        <?php
                        require('../DB/DB.php');
                        $db = new DB();
                        $result = $db->getusersByTypestatus(2, 1);
                        foreach ($result as $item) {
                            $Id = $item['id'];
                            echo "<option value='" . $Id . "'>" . $item['firstName'] . " " . $item['lastName'] . " </option>";
                        }
                        ?>
                    </select>
                </div>
                <!-- // Attributes END -->
                <div class="tab-pane" id="productDateTab">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="strong text-uppercase">Registration Expiration Date</label>
                            <input type="Date" class="form-control" name="RegistrationExpirationDate" id="RegistrationExpirationDate" required />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="strong text-uppercase">Course Start Date</label>
                            <input type="Date" class="form-control" name="StartDate" id="StartDate" required />
                        </div>
                    </div>
                </div>
                <!-- Price -->
                <div class="tab-pane" id="productPriceTab">
                    <label class="strong text-uppercase">Price</label>
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-9">
                            <input style="width: 20% !important;" type="number" id="inputTitle" class="form-control" value="" name="price" placeholder="Enter Course price..." required />
                            <div class="separator"></div>
                            <div class="heading-buttons">
                                <div class="buttons">
                                    <input style="width:150px!important;" type="submit" id="submit" name="submit" class="btn btn-primary" value="Add course" />
                                </div>
                            </div>
                        </div>
                        <!-- // Column END -->
                    </div>
                </div>
                <!-- // Price END -->
            </div>
        </div>
    </div>
    <!-- // Widget END -->

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const queryString = window.location.search;
            console.log(queryString);
            const urlParams = new URLSearchParams(queryString);
            const res = urlParams.get('res');
            var myNewURL = "Online Lms/admin/addCourse.php";
            if (res == 1) {
                sweetAlert("Done!","Course added succesfully","success");
                window.history.pushState("object or string", "Title", "/" + myNewURL);
            } else if (res == 0) {
                sweetAlert("Failed!", "Encountered an error", "error");
                window.history.pushState("object or string", "Title", "/" + myNewURL);
            }
        });
    </script>
</div>
</form>


		
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