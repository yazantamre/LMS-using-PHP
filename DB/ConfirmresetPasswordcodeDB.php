  <?php 


 
 
      
	 require 'DB.php';
	 $db = new DB();
         

  
  


 $data['PasswordCode'] = $_POST['PasswordCode'];
   
   $data['email'] =  $_POST['email'];

 
   $result =$db->ConfirmresetPasswordcodeDB($data['PasswordCode'], $data['email']);
    $num = mysqli_num_rows($result);

 
  echo  $num  ;
 
?>