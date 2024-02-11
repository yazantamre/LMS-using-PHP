 <?php session_start();
 
    
require('DB.php');
     $db = new DB(); 
      

        

    if(isset($_POST['submit'])){

            $email=$_POST['email'];

$result =$db->checkEmail($email);

  $num = mysqli_num_rows($result);
if($num==1) {
    header("location:../Pallms/signInUp.php?res=371");
}
else {
 
     $firstName=$_POST['firstName'];
     $lastName=$_POST['lastName'];
      $phone=$_POST['phone'];
     $password=$_POST['password'];
     $type="3";
     $status ="3"; 
     $address=$_POST['address']  ;
  $imgStutas=$_POST['imgStutas'];
  $target_file='users/student.png';


     $registrationDate = date("Y-m-d");
      
if($imgStutas=='1')
{
       $title =  $firstName. $lastName;
    




     // rename image by use sub title and date 
    $newName=substr($title, 0,20) ." ".$registrationDate; 
    $filename=$_FILES["img"]["name"];
    // GET IMAGE EXTENTION 

    $fileNameParts = explode('.', $filename);
     $ext = end($fileNameParts);

     //  MERGE  NEW NAME WITH EXTENSION
    $newfilename=$newName .".".$ext;
   // echo $newfilename;
         $target_dir = "../assets/images/users/";

    //echo $target_file;
    $target_file = $target_dir .$newfilename;

    // MOVE IMAGE TO FOLDER 
     move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
 $target_dir = "users/";
     $target_file = $target_dir .$newfilename;

 
 }

     $result =$db-> adduser($firstName,$lastName,$email,$phone,$password,$type,$status,$address,$registrationDate,$target_file);
  
 


  
 
 if($result==1)
{

     $n =3;
$confCode = bin2hex(random_bytes($n));
 
  $result2 =$db->addPasswordReset($email,$confCode);

 
   $from = 'pallmsacademy@gmail.com';  

   $to = $email;
 

$subject ='HebrOnline account confirmation';


$message ="<html>   <body> <h2>Hello, Your account Confirmation  code is : " .$confCode ."</h2> <span>  This code is valid for one time only! <br> If you did not sign up on HebrOnline, please ignore this E-mail.</span>  <br >
<a href='http://localhost/Online Lms/Pallms/EmailConfirmation.php'> Click here to complete your account creation process</a></body>
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





        header("location:../Pallms/signInUp.php?res=1"); 

   }
 else 
 header("location:../Pallms/signInUp.php ?res=0");
}





  }
// echo "rrr";



 
?>