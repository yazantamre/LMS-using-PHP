<?php session_start();
if ( $_SESSION['valid'] != 1)  
       {  
  
    header('Location:../Pallms/signInUp.php');
 
   }
   else
    {
require('DB.php');
     $db = new DB(); 
      

         

    if(isset($_POST['submit'])){
 
     $title=$_POST['title'];
     $body=$_POST['body'];
    $addedBy = $_SESSION['id'] ;


     $DateAdded = date("Y-m-d");
         
    
     // rename image by use sub title and date 
    $newName=substr($title, 0,20)." ".$DateAdded; 
    $filename=$_FILES["image"]["name"];
    // GET IMAGE EXTENTION 

    $fileNameParts = explode('.', $filename);
     $ext = end($fileNameParts);


    // $extension=end(explode(".", $filename));
    //  MERGE  NEW NAME WITH EXTENSION
    $newfilename=$newName .".".$ext;
   // echo $newfilename;
         $target_dir = "../assets/images/post/";

    //echo $target_file;
    $target_file = $target_dir .$newfilename;

    // MOVE IMAGE TO FOLDER 
     move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
 $target_dir = "post/";
     $target_file = $target_dir .$newfilename;

 






 


 

     $result =$db->addPost($title,$body,$DateAdded,$addedBy,$target_file);
if ($result==1) {
       header("location:../admin/addPost.php?res=1");

}
 
  else header("location:../admin/addPost.php?res=2");
 }

 else header("location:../admin/addPost.php?res=2");
 
 }


?>