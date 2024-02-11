 <?php 


 
 
      
	 require 'DB.php';
	 $db = new DB();
         

  
  
 

 $email = $_POST['email'];
   
   $confirmCode =  $_POST['confirmCode'];
 
 
   $result =$db->ConfirmEmailDB($email, $confirmCode,);

    $num = mysqli_num_rows($result);
    
 if ($num==1) {
  
   $result2 =$db->updateConfirmEmailDB($email, $confirmCode);
 
        header("location:../Pallms/signInUp.php?res=31"); 



 } 
 else {
 
 header("location:../Pallms/EmailConfirmation.php?res=0"); 

 }

   
 
?>