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
     $DataSubmit=$_POST['DataSubmit'];
//echo $DataSubmit;
 $DataSubmit=date_create($DataSubmit);
$DataSubmit = date_format($DataSubmit,"Y-m-d");

  $assigmentId=$_POST['assigmentId'];
       $fileStatus=$_POST['fileStatus'];

      

if ( $fileStatus== 0) {
	 

     $result =$db->updateAassigment($assigmentId,$name ,$description,$mark,$DataSubmit);

   
 
 
}


else 

	 {
$Datenow = date("Y-m-d");
	 	$n =5;
$filenamef = bin2hex(random_bytes($n));

$n =1;
$filenamel = bin2hex(random_bytes($n));
	  // rename image by use sub title and date 
    $newName=$filenamef ." ". $Datenow ." ".$filenamel; 
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
 $target_dir =  $target_dir = "files/Assignment/"; 

     $target_file = $target_dir .$newfilename;

 


    $result =$db->updateAassigmentfile($assigmentId,$name ,$description,$mark,$DataSubmit,$target_file);


 

}

     

    
 
   

  
  
    ?>
     <form name="myForm" id="myForm"  action="../teacher/assayments.php" method="POST" style="display:none;">
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
