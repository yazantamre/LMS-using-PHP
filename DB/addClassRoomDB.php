<?php session_start();
 if (  $_SESSION['valid'] != 1)  
          {  
  
    header('Location:../Pallms/signInUp.php');
 
   }
   else
    {
 
require('DB.php');
     $db = new DB(); 
      

        

     
 
       $courseId=$_POST['courseId'];

 
     
  
   $result =$db->addClassroom($courseId);

 

 header("location:../admin/courses.php"); 

 


  
  
}
 



?>