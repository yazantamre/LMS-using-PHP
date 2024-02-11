
 <?php 
 session_start();
 if ( $_SESSION['valid'] != 3)  
      {   header('Location:../Pallms/signInUp.php');

   }
   else
    {
 
   
 
require('DB.php');
     $db = new DB(); 
      

        

    if(isset($_POST['submit'])){
 
     $assigmentId=$_POST['assigmentId'];
     $courseId=$_POST['courseId'];
     $DataSubmit=$_POST['DataSubmit'];
 $type=1;
      $userid =  $_SESSION['id'];
       $DateAdded = date("Y-m-d");
    if ( $DateAdded >$DataSubmit ) {
        $type=2;
    }

$timeAdded  = date("H:i:s");
      
  $bytes = bin2hex(openssl_random_pseudo_bytes(10)); 

$name =$type .$bytes.'-'.$DateAdded.$userid;
    

     // rename image by use sub title and date 
    

    
     // rename image by use sub title and date 
    $newName=substr($name, 0,20) ." ". $DateAdded; 
    $filename=$_FILES["file"]["name"];
    // GET IMAGE EXTENTION 

    $fileNameParts = explode('.', $filename);
     $ext = end($fileNameParts);


    // $extension=end(explode(".", $filename));
    //  MERGE  NEW NAME WITH EXTENSION
    $newfilename=$newName .".".$ext;
   // echo $newfilename;
         $target_dir = "../assets/files/AssignmentsSolutionss/";

    //echo $target_file;
    $target_file = $target_dir .$newfilename;

    // MOVE IMAGE TO FOLDER 
     move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
 $target_dir = "files/AssignmentsSolutionss/"; 
     $target_file = $target_dir .$newfilename;

 // echo $target_file; 
 // echo "<br>";

 
  

 $result =$db->addAssignmentsSolutions($assigmentId,$courseId,$type, $userid , $DateAdded ,$timeAdded ,$target_file);


   ?>

  
   <form name="myForm" id="myForm"  action="../student/assayments.php"  method="POST" hidden>
            <input name="courseId" value="<?php echo $courseId;?>" />
        
        <input     name ="submitDB"    />

    </form>

    <script>
    function submitform()
    {
      document.getElementById("myForm").submit();
    }
    window.onload = submitform;
    </script>  
<?php
 


 
 }
 
 }



?>