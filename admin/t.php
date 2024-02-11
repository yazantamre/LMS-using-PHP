 <!DOCTYPE html>
 <html><!-- <![endif]-->
        <?php
        require('../DB/DB.php');
     $db = new DB();
 session_start();
  if ($_SESSION['valid'] == 1)  
{  ?>
<head>
<title>Academic center</title>
    
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
    
     
    
    <link rel="stylesheet" href="../assets/css/admin/module.admin.page.shop_products.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="../assets/images/icon.png"  sizes="32x32"  rel="icon">

     

    <script src="../assets/components/library/jquery/jquery.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery/jquery-migrate.min.js?v=v1.2.0"></script>
<script src="../assets/components/library/modernizr/modernizr.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/less-js/less.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v1.2.0"></script>
<script src="../assets/components/library/jquery-ui/js/jquery-ui.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js?v=v1.2.0"></script>    
<script> 
    $(function(){
      $("#includedMenu").load("menu.php");
 
    });

    </script> 
   <style type="text/css"> 
   .activecou  {
   color: rgb(0, 190, 0)!important;; }

    .inactivecou {
   color: red!important;



 }
    

     .active9 {

    background-color: #cb4040;
    color: #fff;
        }</style>
</head>
<body>

          <div id="includedMenu"></div>
   
        


<div id="content"><h1 class="bg-white content-heading border-bottom ">Courses management</h1>
    <div style="display: flex; justify-content: center;" class="input-group mb-3">
        <input style="width: 15%;" type="text" class="form-control" id="searchInput" placeholder="Search">
        <div class="input-group-append">
            <button class="btn btn-primary" type="button" id="searchButton">Search</button>
        </div>
    </div>
    <center>
    <table style="width: 90%; border: 3px solid #d9534f; " class="table table-bordered table-condensed table-striped table-primary table-vertical-center">
        <thead>
            <tr>
                <th style="width: 5%;" class="center">Course ID</th>
                <th class="center">Course name</th>
                <th class="center" style="width: 15%;">Status</th>
                <th class="center" style="width: 15%;"> classroom </th>
                <th>Teacher</th>
                <th class="center" style="width: 15%;">Number of enrolled students</th>
                <th class="center" style="width: 15%;"> classroom Action</th>
                <th class="center" style="width: 100px;">Status Actions</th>
            </tr>
        </thead>
        <tbody>

             <?php 

     $result =$db->getCourseWithTeachers();
     $No= 0  ;
       foreach ($result as $item) 

      
         { 
  $No= $No +1  ;
$status = $item['status'] ;
$classroom = $item['classroom'] ;
$classroomtxt = 'Inactive'  ;
if ( $classroom == 1 ) {
$classroomtxt = 'Active'  ;}


if ($status== 1)
 {  echo " <tr>
                <td class='center'>".$No. "</td>
                <td >  ".$item['name']." </td>
                <td class='s".$item['id']." activecou'  >Active

                </td>

                <td   > 
" ;
                if ($classroom == 1) {
    echo "  
                     
                     <form  action='admin_advertisements.php' method='POST' enctype='multipart/form-data' >
        
        <input type='text'  name='courseId' value='".$item['id']."' hidden readonly>
                        <button  type='submit'    name ='submit' title='go to classroom'   class='btn btn-success'>  visit  </button>
                    </form>
                 " ;
} 

else 
echo $classroomtxt ;
          echo "      
</td>

                <td>".$item['firstName']." ".$item['lastName']." </td>
                <td >  ".$item['enrolledNumber']." </td> 

                 <td class='center'>
                   <form  action='admin_advertisements.php' method='POST' enctype='multipart/form-data' >
        
        <input type='text'  name='courseId' value='".$item['id']."' hidden readonly>
                        <button  type='submit'    name ='submit' title='go to classroom'   class='btn btn-success'><i class='fa fa-check-square'></i></button>
                    </form>  
                </td>

                  <td class='center'>
                    <div class='btn-group btn-group-sm'>
                        <a title='Inactive courses' href='#'   id='a".$item['id']."'  class='btn btn-danger' onclick='runMyFunction(this.id)'><i class='fa fa-times'></i></a>
                           
                    </div>
                </td>
            </tr>




            " ;}
else 

  {  echo " <tr>
                <td class='center'>".$No. "</td>
                <td >  ".$item['name']." </td>
                <td class='s".$item['id']." inactivecou'  >Inactive</td>

                <td    >".$classroomtxt."</td>

                <td>".$item['firstName']." ".$item['lastName']." </td>
                <td >  ".$item['enrolledNumber']." </td>
                


  <td class='center'>
                  $classroomtxt 
                   
                </td>

                  <td class='center'>
                    <div class='btn-group btn-group-sm'>
                        <a title='Active courses' href='#' class='btn btn-danger'   id='i".$item['id']."'  onclick='runMyFunction(this.id)'><i class='fa fa-check' ></i></a>

                           
                    </div>
                </td>
            </tr>" ;}
                  }

 

              ?>
                           
                       

           
            
                     
                
                </tbody>
    </table>
</center>

    <!-- // Products table END -->


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

    

    

    <!-- Global -->
    <script>

$(".btn").mouseup(function(){
    $(this).blur();
    
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

         // Function to handle the delete action
    
function runMyFunction(id)
{ 
 

 var courseid =id.substring(1);
 var courseStatustxt = id.charAt(0);
 
 var courseStatus= "";
 var txtStatus= "";
 var txtStatusmg = "";
 if (courseStatustxt=='a') 

    {
    courseStatus = 2 ; 

    txtStatus= "Inactive";
    txtStatusmg= "Are you sure you want to Inactive this application?"; }
else
    {
    courseStatus = 1 ; 

    txtStatus= "Active"; 
    txtStatusmg= "Are you sure you want to Active this application?"; }



  var txt;
  if (confirm(txtStatusmg)) {
   
  {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

 var xxx= document.querySelectorAll(".s"+courseid);
  var i;

  for (i = 0; i < xxx.length; i++) {
     xxx[i].innerHTML = txtStatus;
     if ( courseStatus == '2') {

        xxx[i].classList.remove("activecou");

    xxx[i].classList.add("inactivecou");

document.getElementById(id).setAttribute('id', "i"+courseid);


     }
     else
     
     {

        xxx[i].classList.remove("inactivecou");

    xxx[i].classList.add("activecou");
    document.getElementById(id).setAttribute('id', "a"+courseid);
 
     }

  }



   
             }
        };
        xmlhttp.open("GET", "../DB/toggleCourseStatus.php?courseid=" + courseid +" && courseStatus=" + courseStatus, true);
        xmlhttp.send();
    }

  } else {
    txt = "You pressed Cancel!";
  }

 

 
}
    


 
 

    document.addEventListener("DOMContentLoaded", function () {
        // Get the input field and button
        const searchInput = document.getElementById("searchInput");
        const searchButton = document.getElementById("searchButton");

        // Get all table rows
        const tableRows = document.querySelectorAll("table tbody tr");

        // Add an event listener to the search button
        searchButton.addEventListener("click", function () {
            const searchText = searchInput.value.toLowerCase();

            // Loop through all table rows
            tableRows.forEach(function (row) {
                const rowData = row.textContent.toLowerCase();
                if (rowData.includes(searchText)) {
                    row.style.display = ""; // Show matching rows
                } else {
                    row.style.display = "none"; // Hide non-matching rows
                }
            });
        });
    });
    
    </script>
    
    <script src="../assets/components/library/bootstrap/js/bootstrap.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/nicescroll/jquery.nicescroll.min.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/breakpoints/breakpoints.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/animations.init.js?v=v1.2.0"></script>
<script src="../assets/components/plugins/holder/holder.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/elements/bootstrap-select/assets/lib/js/bootstrap-select.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/elements/bootstrap-select/assets/custom/js/bootstrap-select.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/elements/uniform/assets/lib/js/jquery.uniform.min.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/forms/elements/uniform/assets/custom/js/uniform.init.js?v=v1.2.0"></script>
<script src="../assets/components/modules/admin/tables/classic/assets/js/tables-classic.init.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/sidebar.main.init.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/sidebar.collapse.init.js?v=v1.2.0"></script>
<script src="../assets/components/helpers/themer/assets/plugins/cookie/jquery.cookie.js?v=v1.2.0"></script>
<script src="../assets/components/core/js/core.init.js?v=v1.2.0"></script>  
</body>
</html>
</html>
 <?php }
else {
       header('Location:../logIn/login.php');
}

?>  