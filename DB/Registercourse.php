 <?php 

session_start();
 if ( $_SESSION['valid'] != 3)  
       {   header('Location:../Pallms/signInUp.php');
   }
   else
 {
 
   
 
require('DB.php');
     $db = new DB(); 
 $courseId = $_REQUEST["courseId"];
  $studentId =  $_SESSION['id'];

 $currentcoursesapp = 0;
$result =$db->getcoursesappBycourseIdstudentId($courseId,$studentId);
 
 foreach ($result as $item) { 
$currentcoursesapp +=1;
 }

if ($currentcoursesapp <= 0) {
	$Extras =$db->Registercourse($courseId,$studentId);

}
 echo $currentcoursesapp  ;


}


 ?>