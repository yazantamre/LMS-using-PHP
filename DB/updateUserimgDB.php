  <?php 

session_start();

  if ( !$_SESSION['valid'] == '1' or  ! $_SESSION['valid'] == 3 or  ! $_SESSION['valid'] == 2 )  
 {               
 

   header('Location:../Pallms/signInUp.php');
  }
  else

   { 
 
require('DB.php');
     $db = new DB(); 
      
echo"ggggg";
        

    if(isset($_POST['submit1'])){
 echo"ffffffff fvfgv ";
      $userid =  $_SESSION['id'];

 
     $currDate = date("Y-m-d"); 
       $title =   $_SESSION['name'];
        $rb = rand(10,499);
        $ra = rand(500,1000);

     // rename image by use sub title and date 
    $newName=$rb." ".substr($title, 0,20) ." ". $currDate." ". $ra; 
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

 echo $target_file; 
 echo "<br>";


     $result =$db-> updateUserimg($userid,$target_file);
 
 


 if($result==1)
{

if( $_SESSION['valid'] == 1)  
        header("location:../admin/myAccount.php?res=1"); 
    else if( $_SESSION['valid'] == 2)  

        header("location:../teacher/teacher_profile.php?res=1"); 
  else if( $_SESSION['valid'] == 3)  

        header("location:../student/profile.php?res=1"); 
   }


 else 
 {
if( $_SESSION['valid'] == 1) 
 header("location:../admin/myAccount.php?res=0");
else if( $_SESSION['valid'] == 2)  

        header("location:../teacher/teacher_profile.php?res=0"); 
    
else if( $_SESSION['valid'] == 3)  

        header("location:../student/profile.php?res=0"); 

}




 
 }}




?>