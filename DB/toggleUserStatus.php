<?php 

session_start();
 if ( $_SESSION['valid'] != 1)  
   {   header('Location:../Pallms/signInUp.php');
  } 
   else
 {
require('DB.php');
     $db = new DB(); 
      

        



 $userid = $_REQUEST["userid"];

$userStatus = $_REQUEST["userStatus"];

$hint =$userid;


  $Extras =$db->toggleUserStatus($userid,$userStatus);





echo  $hint === "" ? "no suggestion" : $hint;
}
?>