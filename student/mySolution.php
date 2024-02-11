<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="ie lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html> <![endif]-->
<!--[if !IE]><!--><html><!-- <![endif]-->

         <?php 
 session_start();
 if ($_SESSION['valid'] != 3)  
       header('Location:../Pallms/signInUp.php');

   
 
require('../DB/DB.php');

     $db = new DB(); 
      

        

 if(isset($_POST['submit']) or  isset($_POST['submitDB'])){ 

        $courseId=$_POST['courseId'];
        $assigmentId= $_POST['assigmentId'];
        $DataSubmit= $_POST['DataSubmit'];
        $markStutas= $_POST['markStutas'];
        $solutionFile= $_POST['solutionFile'];

        
        $fmark= $_POST['fmark'];


         $userid =  $_SESSION['id'];


 ?>
<head>
<title>Academic Center</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />

	<link rel="stylesheet" href="../assets/css/admin/module.admin.page.profile_resume.min.css" />
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">



	<script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>	
 <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
<style type="text/css">
</head>
<style>
.active3 {

    background-color: #cb4040;
    color: #fff;
        }
#rowInfo { 
    display: none;
}
        .container {
            width: 70%;
            margin: 100px auto;
            background-color: white;
            padding: 20px;
            border-radius: 30px;
            box-shadow: 0 0 20px rgba(168, 3, 3, 0.1);
       
           
        }

        h2 {
       
            color: #6f6363;
            padding: 10px;
            border-radius: 5px 5px 0 0;
            text-align: center;
        }

        #fileInput {
            display: none;
        }

     

      

        .fa-upload {
            margin-right: 10px;
            
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: separate;
            border-spacing: 5px;
            border: 2px dashed #aca9a9; 
        }

        th, td {
            border: 1px solid  #aca9a9;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        button {
            background-color: #e74c3c;
            color: white;
            border: none;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .confirmButton {
            background-color: #e74c3c;
        }

         .myButton {
    top: 150px;
    left: 240px;
    cursor: pointer;

        }




 
  /* قوم بتغيير لون الزر عند تمرير المؤشر عليه */
  .alias:hover {
    background-color: #6f6363;  /* يمكنك تغيير اللون إلى اللون الذي ترغب فيه */
    color: #ffffff; /* يمكنك تغيير لون النص إلى اللون الذي ترغب فيه */
  }



   
</style>
<script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script>   
</head>
<body  >


      <div id="includedMenu"></div>






    <div id="content"><div class="layout-app">
        <div class="col-table">
            
            <h1 class="bg-white text-primary content-heading border-bottom text-center">Course page </h1>
            <div class="bg-white text-center  innerAll border-bottom">
           

    <ul class="menubar">
                <li class="active">
            <form class="form-horizontal" action="advertisements.php" method="POST" enctype="multipart/form-data" >

        <input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
        <button  type="submit"    name ="submit"  style = "  text-decoration: none;
        background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; "   > advertisements </button>
                </form> 


</li>

    <li>



    <form class="form-horizontal" action="assayments.php" method="POST" enctype="multipart/form-data" >

        <input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
        <button  type="submit"    name ="submit"  style = " background: #ededed;
    color: #3b3b3b;
    font-weight: 600;
    padding: 3px;
     
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; 
     "    > Assigment </button>
                </form> 

 

        </li>


    <li>



    <form class="form-horizontal" action="teacher.php" method="POST" enctype="multipart/form-data" >

        <input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
        <button  type="submit"    name ="submit"  style = "  text-decoration: none;
        background-color: inherit;
    color: #878787;
    height: 30px;
    line-height: 30px;
    padding: 0 10px;
    display: block;
    border: none; "  > Teacher </button>
                </form> 

  

        </li>

 
    
        </ul>
            
        </div>
        

	<!-- Widget -->


	<div class="container">
        <div  style="text-align: center;  width: 100%; background-color:;" >
          <a download   target="_blank" href="<?php echo  $solutionFile;?>"  class="btn btn-primary">View My Solution</a>
             <label style="border: 1px solid #c93737; padding: 4px 10px;"   for=""><?php echo  $fmark;?> </label>
         </div>
        <div class="myButton">

            <form class="form-horizontal" action="assayments.php" method="POST" enctype="multipart/form-data" >

        <input type="text"  name="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>


		<button style="color: #cb4040; background: transparent;" type="submit"    name ="submit"   ><i class="fa fa-fw icon-delete-symbol"></i>	 </button>
</form>
    </div>



        
        <div style="text-align: center;">
           

        <h2   >Upload Files </h2>
    </div>
       
<form class="form-horizontal" action="../DB/updateassaymentSolution.php" method="POST" enctype="multipart/form-data" >
 
     <input type="text"  name="assigmentId" id="" value="<?php echo $assigmentId  ;  ?>" hidden readonly/> 
  <input type="text"  name="courseId" id="courseId" value="<?php echo $courseId;  ?>" hidden readonly/>
   <input type="text"  name="DataSubmit" id="DataSubmit" value="<?php echo $DataSubmit;  ?>" hidden readonly/>


        <input type="file" name="file" id="fileInput" required >


        <div  style="background-color: rgb(255, 255, 255); text-align: center;"  >
        <label class="btn btn-primary" for="fileInput">
            <i  class="fa fa-upload"></i> Select Files
        </label>
    </div>
        <table>
              <thead>
            <tr>
                <th>File Name </th>
                <th> File Size</th>
                <th>  Upload Date</th>
                <th>Delete </th>
            </tr>
        </thead>
        <tbody id="fileTable">
            <tr id="rowInfo" >
               <td id="FileName">File Name </td>
                <td id="FileSize"> File Size</td>
                <td id="UploadDate">  Upload Date</td>
                <td id="Delete"> <a style="background-color: #e74c3c;
    color: white;
    border: none;
    cursor: pointer;
    padding: 5px 10px;
    border-radius: 5px;" id="deleteButton"><i class="fa fa-fw icon-trash-can"></i>  </a></td>  

            </tr>
        </tbody>
           
        </table>
        
     <br>

     <div style="text-align: center;" id="saveButtonContainer">

        <a   onclick="UpdateFiles()"   class="btn btn-primary"  >
                     Update Files   <i class="fa   fa-close" ></i> </a>

        <button  type="submit" id="submitUpdate"   name ="submit"   class="btn btn-primary"   style="display: none;"  > Update Files</button>
    </div>

      </form>
      
    </div>


			</div> 
			<!-- // END col -->

		</div>		

		</div>
		<!-- // END row -->
	</div>
</div>
<!-- // END row-app -->

	
	
		
		</div>
		<!-- // Content END -->
		
		<div class="clearfix"></div>
		<!-- // Sidebar menu & content wrapper END -->
		
	<!-- // Main Container Fluid END -->
	

	

	<!-- Global -->
	<script>

function UpdateFiles()  {
    var markStutas =  "<?php echo $markStutas; ?>";
   
   if (markStutas == 1 ) {

       sweetAlert("oops...", "You cannot Update the solution because the mark has been signed by the teacher! ", "error");;
   }

    else {

   swal({
  title: "Are you sure?",
  text: "You will not be able to recover Current solution eever!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, Update my solution!",
  closeOnConfirm: false
},
function(){
    document.getElementById("submitUpdate").click();

});
}
   preventDefault();

}

const fileInput = document.getElementById('fileInput');
const deleteButton = document.getElementById('deleteButton');

          deleteButton.addEventListener('click', function () {
     document.getElementById('FileName').innerHTML='';
       document.getElementById('FileSize').innerHTML='';
 document.getElementById('UploadDate').innerHTML= '';  
document.getElementById('rowInfo').style.display = 'none'; 



                });
        
        fileInput.addEventListener('change', function () {

           
  document.getElementById('FileName').innerHTML='';
       document.getElementById('FileSize').innerHTML='';
 document.getElementById('UploadDate').innerHTML= '';  
document.getElementById('rowInfo').style.display = 'none'; 

               
  

              
                

       const files = fileInput.files;
            
            for (const file of files) {
                  document.getElementById('rowInfo').style.display = 'contents';
    document.getElementById('FileName').innerHTML=file.name;
     document.getElementById('FileSize').innerHTML=file.size;
document.getElementById('UploadDate').innerHTML=new Date().toLocaleString();
                

            }
            
             
        });

        saveButton.addEventListener('click', function () {
            // يمكنك هنا استخدام fileData لحفظ المعلومات أو إرسالها إلى الخادم
            alert(' The file is saved successfully!');
        });


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
<script src="../assets/components/modules/admin/gallery/blueimp-gallery/assets/lib/js/blueimp-gallery.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/gallery/blueimp-gallery/assets/lib/js/jquery.blueimp-gallery.min.js?v=v1.2.0"></script>
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