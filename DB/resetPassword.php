   <?php 

 
 
require('DB.php');
     $db = new DB(); 
      
 
    
 
     $email = $_REQUEST["email"];
$checkval =0;
 	$hint =0;
   $result =$db->checkemail($email);


 foreach ($result as $item) { 
$checkval =1;
 }
if ($checkval ==1) {
	  

	 $n =5;
$passwordReset = bin2hex(random_bytes($n));


  $result2 =$db->addPasswordReset($email,$passwordReset);





   $from = 'pallmsacademy@gmail.com';  

   $to = $email;
 
$subject = 'HebrOnline password reset';
 
 


$message ="<html>   <body> <h2>Hello, Your Password Reset code is : " .$passwordReset ."</h2> <span>  This code is valid for one time only <br> if you did not try to reset your password, we advise you change it immediately to secure your account!</span>  <br >
<a href='http://localhost/Online Lms/logIn/ConfirmresetPassword.php'> Click here to complete the password reset process</a></body>
</html>";
// use wordwrap() if lines are longer than 70 characters

$message = wordwrap($message,70);

  $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
        $headers .= 'From: '.$from."\r\n".
        'Reply-To: '.$from."\r\n" .
        'X-Mailer: PHP/' . phpversion();



// send email
mail($to, $subject, $message, $headers);



	  



 $hint = 1;
 echo  $result2;


}

else 
 {
	 
 echo $hint;
}


      
 


 




 
 




?>