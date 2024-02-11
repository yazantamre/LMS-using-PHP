<?php 

session_start();
 if ( $_SESSION['valid'] != 1)  
       {   header('Location:../Pallms/signInUp.php');
   }
   else
 {
 
   
 
require('DB.php');
     $db = new DB(); 
 $courseid = $_POST["courseId"];

$courseStatus = $_POST["courseStatus"];
 
 

  $Extras =$db->toggleCourseStatus($courseid,$courseStatus);
 header("location:../admin/courses.php"); 

}


 ?>