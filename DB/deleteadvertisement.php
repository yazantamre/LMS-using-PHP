  <?php 

session_start();
 if  (  ! $_SESSION['valid'] == 2 )   
     
     {   header('Location:../Pallms/signInUp.php');
   }
   else
 {
 
require('DB.php');
     $db = new DB(); 
    
$advertisementIdv = $_REQUEST["advertisementIdv"];
 
$result1 =$db->deleteaalldvertisementsComment($advertisementIdv);

$result1 =$db->deletedvertisements($advertisementIdv );

 

 
}


?>