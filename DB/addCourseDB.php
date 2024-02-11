 <?php 
 session_start();
 if ( $_SESSION['valid'] != 1)  
        {  
  
    header('Location:../Pallms/signInUp.php');
 
   }
   else
    {
require('DB.php');
     $db = new DB(); 
      

        

    if(isset($_POST['submit'])){
 
     $name=$_POST['name'];
     $description=$_POST['description'];
     $outline=$_POST['outline'];
     $requirements=$_POST['requirements'];
     $outcome=$_POST['outcome'];
    
     $teacherId = $_POST['teacherId'];
     $price=$_POST['price'];
   $RegistrationExpirationDate=$_POST['RegistrationExpirationDate'];

   $StartDate=$_POST['StartDate'];

     $DateAdded = date("Y-m-d");
     



     // rename image by use sub title and date 
    

    
     // rename image by use sub title and date 
    $newName=substr($name, 0,20) ." ". $DateAdded; 
    $filename=$_FILES["img"]["name"];
    // GET IMAGE EXTENTION 

    $fileNameParts = explode('.', $filename);
     $ext = end($fileNameParts);


    // $extension=end(explode(".", $filename));
    //  MERGE  NEW NAME WITH EXTENSION
    $newfilename=$newName .".".$ext;
   // echo $newfilename;
         $target_dir = "../assets/images/course/";

    //echo $target_file;
    $target_file = $target_dir .$newfilename;

    // MOVE IMAGE TO FOLDER 
     move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
 $target_dir = "course/";
     $target_file = $target_dir .$newfilename;

 
 





 


 

     $result =$db->addCourse($name,$description,$outline,$requirements,$outcome,$teacherId,$price,$RegistrationExpirationDate,$StartDate,$DateAdded,$target_file);

  if($result==1)
{





 
 $to  ='';
  $result2 =$db->getusersById($teacherId);
 foreach ($result2 as $item) { 
  $to  =  $item['email'];
 }




   $from = 'pallmsacademy@gmail.com';  

  
 
$subject = 'New HebrOnline course';
 
 


$message ="<html>   <body> <h2>Hello, You have been assigned to teach the new  course :
 : " .$name  ."</h2> <span>. Please Check your account for more information </span>  <br >


</body>
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



        header("location:../admin/addCourse.php?res=1"); 

   }
 else 
 header("location:../admin/addCourse.php?res=0");


 
 }
 
}



?>