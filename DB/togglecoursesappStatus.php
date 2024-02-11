<?php 

session_start();
 if ( $_SESSION['valid'] != 1)  
     {   header('Location:../Pallms/signInUp.php');
   }
   else
 {
 
require('DB.php');
     $db = new DB(); 
    
$appid = $_REQUEST["appid"];
$appStatus = $_REQUEST["appStatus"];
$result1 =$db->togglecoursesappStatus($appid,$appStatus);

if ($appStatus == '1'  ) {

      $result2 =$db->getcoursesappByid($appid);
     
          foreach ($result2 as $item) 

      
         {

$courseId = $item['courseId'] ;
         $result3 =$db->updateCourseEnrolledNumber($courseId);
  }
  

}


 
}


?>