   <?php 

   
require('DB.php');
     $db = new DB(); 
      

        

    if(isset($_POST['submit'])){
      
     $email=$_POST['email'];
 
     $password=$_POST['password'];
        

 


     $result =$db->updateUserpasswordDB($email,$password);
 
 
echo   $result;

 if($result==1)
{ 

   
        header("location:../Pallms/signInUp.php?res=98"); 
   

   }
   


 
  }
 
 



?>