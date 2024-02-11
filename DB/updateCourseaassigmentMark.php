<?php 

session_start();
 if ($_SESSION['valid']  != 2)  
            {  header('Location:../Pallms/signInUp.php');
   }
   else
 {
   
 
require('DB.php');
     $db = new DB(); 
    
$assigmentId = $_REQUEST["assigmentId"];
$cMark = $_REQUEST["cMark"];
$assigmentevId = $_REQUEST["assigmentevId"];

$studentId = $_REQUEST["studentId"];



    
 



 if ($assigmentevId !='0') {
        $result3 =$db->updateCourseaassigmentMark($assigmentevId,$cMark);
 
 }
 else  if ($assigmentevId =='0')
      {
$result3 =$db->addCourseaassigmentMark($assigmentId,$cMark,$studentId);
 
 
 }

 }


?>