 <?php 

session_start();
 if  (! $_SESSION['valid'] == 3 or  ! $_SESSION['valid'] == 2 )   
     
     {   header('Location:../Pallms/signInUp.php');
   }
   else
 {
 
require('DB.php');
     $db = new DB(); 
    
$commentIdv = $_REQUEST["commentIdv"];
 
$result1 =$db->deleteAssigmentComment($commentIdv );

 

 
}


?>