<!DOCTYPE html>
 
        <?php 
 session_start();
 if ( $_SESSION['valid'] != 2)  
       header('Location:../Pallms/signInUp.php');

   
 
require('../DB/DB.php');

     $db = new DB(); 
      

        

    if(isset($_POST['submit']) or  isset($_POST['submitDB'])){ 

        $courseId=$_POST['courseId'];
$studentId=$_POST['studentId'];
$studentName=$_POST['studentName'];


         

        
        echo $courseId;
 ?>
    <html class="app"><!-- <![endif]-->
<head>
    <title>Course Classroom</title>
    
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

     <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">      
</head>

   <script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script>   
    <style type="text/css">
    .active3 {

    background-color: #cb4040;
    color: #fff;
        }
        body,label,th,td
	{
		font-size: 18px !important;
		color: #333333;
        font-family: 'Poppins', sans-serif !important;
        font-weight: 500 !important;
        letter-spacing: 0.5px;
        overflow-x: hidden;
    }
</style>
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
        <button  type="submit"    name ="submit"  style = " text-decoration: none;
        background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none;
     "    > Assignments </button>
                </form> 

 

        </li>
        <li>
         


            <form class="form-horizontal" action="cementEvaluation.php" method="POST" enctype="multipart/form-data" >

        <input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
        <button  type="submit"    name ="submit" style = " text-decoration: none;
        background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none;
     "     > Assignment Grading </button>
                </form> 
        </li>
        
<li>

        <form class="form-horizontal" action="students.php" method="POST" enctype="multipart/form-data" >

        <input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
        <button  type="submit"    name ="submit"   style = "   background: #ededed;
    color: #3b3b3b;
    font-weight: 600;
    padding: 3px;
     
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; "  > Students   </button>
                </form> 
</li>
    </ul>
    
</div>
    <div class="col-separator-h"></div>

    <div class="col-table-row">
    
        <div class="col-app col-unscrollable" style="margin-left: 15px;">
            
            <div class="col-app">
                <div class="row row-app email">
                   
                    <div class="col-md-12">
                        <div class="col-separator">

                            <div class="row row-app">
                                
                                <div class="col-md-12">
                                    
                                    <div class="col-separator col-separator-last box">

										

        <div class="widget widget-tabs widget-tabs-gray border-bottom-none">

			<div class="innerAll center text-primary" >
				<h3 > <strong>Student : <?php echo $studentName; ?> </strong>  </h3>
				
			</div>
<!-- Filters -->


<center>
<table style="width: 50%; border: 3px solid #cb4040; " class="table table-bordered table-condensed table-striped table-primary table-vertical-center">
<thead>
                <tr>
                    <th class="center bg-primary" class="center"><b>Assignment Name</b></th>
                    <th class="center bg-primary"><b>Student Mark</b></th>
                    <th class="center bg-primary"><b>Assignment Mark</b></th>
                    <th class="center bg-primary"><b>Action</b></th>
                </tr>
            </thead>
    <?php
    $assigmentId = 0;
    $totalMark= 0;

$result =$db->getCourseaassigment($courseId);



        foreach ($result as $item)  
   { 
    $mark = 0;
   $assigmentevId = 0;
   $assigmentId =$item['id'];
    $assigmentmark=$item['mark'];
   $result2=$db->getCourseaassigmentMark($studentId,$assigmentId);
        foreach ($result2 as $item2)  
   {
    $mark= $item2['mark']; 
     $assigmentevId =$item2['id'];
 
    }

    $totalMark=$totalMark +$mark;

     ?>
     <tr>
    <td class="center"> <?php echo $item['name']   ; ?></td>
    <td class="editable center"><?php echo $mark   ; ?></td>
    <td class="lMark" hidden><?php echo $mark   ; ?></td>

    <td class="assigmentevId" hidden><?php echo $assigmentevId   ; ?></td>
    <td class="studentId" hidden><?php echo $studentId   ; ?></td>
    <td class="assigmentId" hidden><?php echo $assigmentId   ; ?></td>
     <td class="assigmentmark center"  ><?php echo $assigmentmark   ; ?></td>
     
    <td class="center">
        <div class="btn-group btn-group-sm">
            <a href="#" title="Edit mark" class="btn btn-success" onclick="enableEditFields(this)"><i class="fa fa-pencil"></i></a>
            <a href="#" title="Save mark" class="btn btn-primary hidden" onclick="saveChanges(this)"><i class="fa fa-check"></i></a>
        </div>
    </td>
  </tr>
     <?php } ?>
     
   

   <tr>
    <th class="center text-primary" type="number">Total Mark :</th>
    <td class="center text-success" id ="totalMark"><?php echo $totalMark   ; ?></td>
  </tr>

  


 
</table>
</center>

<!-- // Products table END -->

</div>     



        
        
    
    <!-- // To END -->
    <div class="clearfix"></div>

<!-- // Filters END -->
                                            <!-- Widget heading -->
                                        
                                            <!-- // Widget heading END -->
                                            
                                            <div class="widget-body">
                                                <form class="form-horizontal">
                                                    <div class="tab-content">

                                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                                                        
                                                    
        

                                                                            

        
        
        

                                                    
                                                        <!-- Tab content -->
                                <div class="tab-pane active" id="account-details">
                                                        
                                            
                                    
                                                            
                                                            
                                                                

                                </div> 
                                <!-- end col 2 -->

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
        
        <div class="clearfix"></div>
        <!-- // Sidebar menu & content wrapper END -->
        
        
        
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


    function enableEditFields(button) {
        // تمكين حقول التحرير (الثالث والرابع والخامس) في الصف الذي تم النقر عليه
     const row = button.closest('tr');
        const editableFields = row.querySelectorAll('.editable');

        for (const field of editableFields) {
            field.contentEditable = true;
            
        }
        
        

    

        // إظهار زر حفظ التغييرات وإخفاء زر التعديل في الصف الذي تم النقر عليه
        const editButton = row.querySelector('.btn-success');
        const saveButton = row.querySelector('.btn-primary');
        editButton.classList.add('hidden');
        saveButton.classList.remove('hidden');
    }

    function saveChanges(button) {
        // تعطيل حقول التحرير (الثالث والرابع والخامس) في الصف الذي تم النقر عليه
        const row = button.closest('tr');
        const editButton = row.querySelector('.btn-success');
        const saveButton = row.querySelector('.btn-primary');
        editButton.classList.remove('hidden');
        saveButton.classList.add('hidden');
        const assigmentevIdFields=row.getElementsByClassName('assigmentevId');


        const editableFields = row.querySelectorAll('.editable');
  
   const  assigmentIdFields= row.querySelectorAll('.assigmentId');
        
   const studentIdFields= row.getElementsByClassName('studentId');

   const assigmentmarkFields= row.getElementsByClassName('assigmentmark');
        


 


 
        var totalMark =0;

        var cMark=0;
        var assigmentId=0;
       var studentId =0;
       var  assigmentevId=0;
     var  assigmentmark=0;
  
  var  txt="Are you sure you want to update this mark?";

     for (const fieldaassigmentevId of assigmentevIdFields) {
             
            assigmentevId= fieldaassigmentevId.innerHTML ;
        }



  for (const fieldM of editableFields) {
            fieldM.contentEditable = false;
            cMark= fieldM.innerHTML ;
        }

           for (const fieldassigmentId of assigmentIdFields) {
             
            assigmentId= fieldassigmentId.innerHTML ;
        }


   for (const fieldastudent of studentIdFields) {
             
            studentId= fieldastudent.innerHTML ;
        }

for (const fieldassigmentmark of assigmentmarkFields) {
             
            assigmentmark= fieldassigmentmark.innerHTML ;
        }
         if (assigmentevId == '0') {

      txt="This student did not submit a solution, are you sure you want to add the mark anyway?";      
        }



 cMark= parseInt(cMark);
         assigmentmark= parseInt(assigmentmark);
      

 if(cMark <=assigmentmark )
   {
      swal({
  title: "Caution!",
  text: txt,
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes",
  closeOnConfirm: true
},
function(){ 




const markfields = document.querySelectorAll('.editable');

  for (const mfield of markfields) {
            
         totalMark  =totalMark + Number(mfield.innerHTML);
        } 
document.getElementById('totalMark').innerHTML=totalMark 
        // إظهار رسالة تأكيد وحفظ التغييرات
     
        
        // إخفاء زر حفظ التغييرات وإظهار زر التعديل في الصف الذي تم النقر عليه

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 
 
 
 


             }
        };

           cMark= parseInt(cMark);
     xmlhttp.open("GET", "../DB/updateCourseaassigmentMark.php?assigmentId=" + assigmentId +" && cMark=" + cMark +" && studentId=" + studentId +" && assigmentevId=" + assigmentevId , true);
        xmlhttp.send();

     
});
        }

      else
  {

var lMark = 0; 
      sweetAlert('full mark is '+assigmentmark, "Please enter a mark equal to or less than the full mark", "info");

 const lMarkFields= row.getElementsByClassName('lMark');

        for (const fieldlM of lMarkFields) {
 
             lMark= fieldlM.innerHTML ;
        }



          for (const fieldM of editableFields) {
            fieldM.contentEditable = false;
           fieldM.innerHTML =lMark;
        }


   }


    }
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