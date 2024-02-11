 <?php 

session_start();
 if ($_SESSION['valid']  != 3)  
       {  
  
    header('Location:../Pallms/signInUp.php');
 
   }
   else
    {
require('DB.php');
     $db = new DB(); 
    
$rateCoursevaluecurrent = $_REQUEST["rateCoursevaluecurrent"];
$courseIdcurrent = $_REQUEST["courseIdcurrent"];
$reviewText = $_REQUEST["reviewText"];

$studentId = $_SESSION['id']  ;

  
        $result3 =$db->addcoursesevaluation($rateCoursevaluecurrent,$courseIdcurrent,$studentId,$reviewText);
  echo $result3 ;
  
 

 
}

?>