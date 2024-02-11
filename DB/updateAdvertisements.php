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
 
     $content=$_POST['advertisementscontent'];
     $fileStatus=$_POST['fileStatus'];
     $courseId=$_POST['courseId'];
 $dvertisementId=$_POST['dvertisementId'];
     

      echo $fileStatus ;

if ( $fileStatus== 0) {
	 

     $result =$db->updateAdvertisements($dvertisementId,$content);

echo $result ;
  
 
 
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
         $target_dir = "../assets/files/advertisement/";

    //echo $target_file;
    $target_file = $target_dir .$newfilename;
 
    // MOVE IMAGE TO FOLDER 
     move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
 $target_dir =  $target_dir = "files/advertisement/"; 

     $target_file = $target_dir .$newfilename;

  


    $result =$db->updateAdvertisementfile($dvertisementId,$content ,$target_file);



  echo $result ;
 

}

     // rename image by use sub title and date 
    

    
 
   

  
 
    ?>
    <form name="myForm" id="myForm"  action="../teacher/advertisements.php" method="POST" style="display:none;">
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