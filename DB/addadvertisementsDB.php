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
 
     $content=$_POST['content'];
     $fileStatus=$_POST['fileStatus'];
     $courseId=$_POST['courseId'];

     

     $DateAdded = date("Y-m-d");
     $target_file='0';


echo $courseId; 
 echo "<br>";
 $contentf = trim($content,"/.\!");

if ( $fileStatus== 1) {
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
         $target_dir = "../assets/files/advertisement/";

    //echo $target_file;
    $target_file = $target_dir .$newfilename;
 
    // MOVE IMAGE TO FOLDER 
     move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
 $target_dir =  $target_dir = "files/advertisement/"; 

     $target_file = $target_dir .$newfilename;

 echo $target_file; 
 echo "<br>";





  
 

}

     // rename image by use sub title and date 
    

    
   
 echo $target_file; 
 echo "<br>";
   

     $result =$db->addadvertisementsDB($courseId,$content,$DateAdded,$target_file);




        if ( $result ==1 ) {
            $advertisementtxt  = substr($content, 0,30);
          
 
$result2 =$db->getCoursestudents($courseId,1);

        foreach ($result2 as $item) { 

 $to  =  $item['email'];



   $from = 'pallmsacademy@gmail.com';  

  
 
$subject = 'New Classroom Post';
 
     $txt=substr($content, 0,50) ; 



$message ="<html>   <body> <h2>Hello, You have a new classroom post : " .$txt  ." ...</h2> <span>  Check your HebrOnline account for more information </span>  <br >


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
    <form name="myForm" id="myForm"  action="../teacher/advertisements.php" method="POST" hidden>
            <input name="courseId" value="<?php echo $courseId;?>" hidden />
		<input     name ="submitDB"   hidden  />

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