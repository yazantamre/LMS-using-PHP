    <?php 

session_start();
 if  (  ! $_SESSION['valid'] == 2 )   
     
     {   header('Location:../Pallms/signInUp.php');
   }
   else
 {
 
require('DB.php');
     $db = new DB(); 
    
$assaymentIdv = $_REQUEST["assaymentIdv"];
 
$result1 =$db->deleteaallassaymentIComment($assaymentIdv);

$result1 =$db->deleteassayment($assaymentIdv );

 

 
}


?>