<!DOCTYPE html>

 <?php 
 session_start();
 if ( $_SESSION['valid'] != 2)  
       header('Location:../Pallms/signInUp.php');

 
 
require('../DB/DB.php');

     $db = new DB(); 
      

        

    if(isset($_POST['submit'])){ 

        $courseId=$_POST['courseId'];
        $assigmentId=$_POST['assigmentId']; 
 
        $name= '';
     $description= '';
     
     $mark= '';
     $DataSubmit = '';
$assigmentfile='';

        $result =$db->getassigmentById($assigmentId);

          foreach ($result as $item) 

      
         { 
         $name= $item['name']  ; 
     $description=  $item['description']  ;
      $mark=  $item['mark']  ;
     $DataSubmit =  $item['DataSubmit']  ;
       $assigmentfile=$item['File'];   
         }


        
  ?>

<html>
<head>
    <title>Course classroom</title>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

    <link rel="stylesheet" href="../assets/css/admin/module.admin.page.index.min.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">


    <script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
    <script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
    <script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
    <script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
    <script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
    <script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>
    <script src="../assets/components/library/jquery-ui/js/jquery-ui.min.js?v=v1.2.0"></script>
    <script src="../assets/components/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js?v=v1.2.0"></script>
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
    input,textarea
    {
        color: black !important;
        border-radius: 10px !important;
    }
 
</style>
 <script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script>
</head>

<body style="overflow-x: hidden;">
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
        <button  type="submit"    name ="submit"  style = "   background: #ededed;
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
    <div class="separator"></div>
  
        <div class="col-separator-h"></div>

<div  id="content" class="col-md-11" style="margin-left: 75px;">
    <h1 class="bg-white content-heading border-bottom center text-primary">Edit Assignment</h1>
    <div class="widget widget-tabs widget-tabs-gray">
        <div class="widget-body">
          <div class="tab-content">
                <!-- Description -->
               <form class="form-horizontal" action="../DB/updateAssigment.php" method="POST" enctype="multipart/form-data" >
                  <input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden  readonly/>

                   <input type="text"  name="assigmentId" value="<?php echo $assigmentId;  ?>" hidden readonly/>
                <div class="tab-pane active" id="productDescriptionTab">
                    <!-- Row -->
                    <div class="row">
                        

                        <!-- Column -->
                        <div class="col-md-2 " >
                            <strong>Assignment name</strong>
                        </div>
                        <div class="col-md-9">
                            <input style="width:50%;" type="text" id="editableTextbox1" name="name" 
                            value="<?php echo $name  ?>"
                             class="form-control"  

                            placeholder="Assignment Name" /><br>
                        </div>
                            <div class="separator"></div>

                            <div class="col-md-2">
                                <strong>Assignment Description</strong>
                            </div>
                            <div class="col-md-9">
                                <textarea type="text" id="editableTextbox2" class="form-control"   placeholder="Assignment Description" rows="5"  name="description"><?php echo $description  ?></textarea> <br>
                            </div>
                                <div class="separator"></div>

                                <div class="col-md-2">
                                    <strong>Assignment Mark</strong>
                                </div>   
                                <div class="col-md-9">
                         
                <input style="width:10%;" type="number"  name="mark" id="editableTextbox3" class="form-control"   value="<?php echo $mark  ?>" placeholder="Assignment Mark" /><br>
                                </div>
                                <div class="separator"></div>

                                <div class="col-md-2">
                                    <strong>Assignment Due Date</strong>
                                </div>
                               
                               <div class=" col-md-9 "    >
                                <input style="width:20%;" type="date" name="DataSubmit" id="editableTextbox4" class="form-control"  
value="<?php echo $DataSubmit  ?>"
                                placeholder="MM/DD/YYYY" />
                                <br>
                                                        
                            </div>
                               <div class="separator"></div>
                               

<div class="separator">

</div>


                            <div class="separator">
<br>
                            <div class="col-md-2">
                                <strong>Assignment File:</strong>

                            </div>    
               
         <div class="col-md-3">    
        <a download target="_blank" href="<?php echo $assigmentfile ?>">view current File </a>
     </div>
                            <div class="col-md-3">
                                <div class="input-group" style="display: flex;">
                                   <input id="editableTextbox8" class="form-control" value="" readonly>
                                    
                                    <div class="input-group-append">
                        <input type="file" name="file" id="file"   onchange="updateFileName()"  style="display:none;" />
                        <input type="text" name="fileStatus" id="fileStatus" value="0"  style="display:none;"   />


                                        <button style="margin-left:5px; border-radius:10px;" type="button" class="btn btn-info"  onclick="document.getElementById('file').click();">
                                            New file &nbsp;<i class="fa fa-plus"></i>
                                        </button>
                                        <p id="file-name"></p>
                                    </div>
                                </div>
                            </div>
                            
        
                            
                                <div class="separator"></div>
                               

                            <!-- Edit/Save Button -->
                            <div class="col-md-12 text-center">
                                <br><br>
                            <button style="width: 10%; border-radius:10px;"  type="submit" name="submit" id="editBtn" class="btn btn-primary">Save assignment</button>
                            </div>

                            <!-- // Column END -->
                          </div>
                        <!-- // Column END -->
                    </div>
                    <!-- // Row END -->
                </div>
            </form>
                <!-- // Description END -->
            </div>
        </div>
    </div>
</div>
<!-- // Content END -->

<div class="clearfix"></div>
<!-- // Sidebar menu & content wrapper END -->

<!-- Main Container Fluid END -->
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



function updateFileName() {
    const fileInput = document.getElementById('file');
    const fileNameDisplay = document.getElementById('editableTextbox8');

    if (fileInput.files.length > 0) {
        const fileName = fileInput.files[0].name;
        fileNameDisplay.value = fileName;
      document.getElementById('fileStatus').value ='1';
    } else {
        fileNameDisplay.value = '';
        document.getElementById('fileStatus').value ='0';

         // إذا لم يتم اختيار ملف
    }
}

  

    document.addEventListener('DOMContentLoaded', function () {
        updateFileName();
    });





</script>
<script>

    </script>
  
        

<script src="../assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v=v1.2.0"></script>
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
      header('Location:index.php');
       
 
}

?>  
