 <?php 
 session_start();
 if ( $_SESSION['valid'] != 2)  
    {   header('Location:../Pallms/signInUp.php');

   }
   else
    {
 
require('DB.php');
     $db = new DB(); 
      

        

    if(isset($_POST['submit'])){
 
     $name=$_POST['name'];
     $description=$_POST['description'];
     $courseId=$_POST['courseId'];
     $mark=$_POST['mark'];
     $Datato=$_POST['to'];
 $Datato=date_create($Datato);
$DataSubmit = date_format($Datato,"Y-m-d");
     

     $DateAdded = date("Y-m-d");
     $target_file='0';
     $fileStatus=$_POST['fileStatus'];


 
 $contentf = trim($name,"/.\!");

 
	  // rename image by use sub title and date 
    $newName=substr($contentf, 0,20) ." ". $DateAdded; 
    $filename=$_FILES["file"]["name"];
    // GET IMAGE EXTENTION 

    $fileNameParts = explode('.', $filename);
     $ext = end($fileNameParts);


    // $extension=end(explode(".", $filename));
    //  MERGE  NEW NAME WITH EXTENSION
    $newfilename=$newName .".".$ext;
   // echo $newfilename;
         $target_dir = "../assets/files/Assignment/";

    //echo $target_file;
    $target_file = $target_dir .$newfilename;

    // MOVE IMAGE TO FOLDER 
     move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
     $target_dir = "files/Assignment/"; 
     $target_file = $target_dir .$newfilename;

 
     // rename image by use sub title and date 
    

     $result =$db->addAssigmentDB($courseId,$name,$description,$mark,$DataSubmit,$DateAdded,$target_file);


     if ( $result ==1 ) {
          
 
$result2 =$db->getCoursestudents($courseId,1);

        foreach ($result2 as $item) { 

 $to  =  $item['email'];



   $from = 'pallmsacademy@gmail.com';  

  
 
$subject = 'New Assignment!';
 
$message ="<html>   <body> <h2>Hello, You have a new assignment : " .$name  ."</h2> <span>  Check your HebrOnline account for more details </span>  <br >


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


            }

     }
  
 
    ?>
  <form name="myForm" id="myForm"  action="../teacher/assayments.php" method="POST" hidden>
            <input name="courseId" value="<?php echo $courseId;?>" hidden />
		<input     name ="submitDB" hidden    />

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