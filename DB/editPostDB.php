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
 $postId=$_POST['postId']; 
    $fileStatus=$_POST['fileStatus'];


    if ( $fileStatus == 0) {
 
     $result =$db->editPost($postId,$title,$body);
 if($result==1)
     header("location:../admin/posts.php?res=1"); 
 
 else   header("location:../admin/posts.php?res=2"); 

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
    $filename=$_FILES["image"]["name"];
    // GET IMAGE EXTENTION 

    $fileNameParts = explode('.', $filename);
     $ext = end($fileNameParts);


    // $extension=end(explode(".", $filename));
    //  MERGE  NEW NAME WITH EXTENSION
    $newfilename=$newName .".".$ext;
         $target_dir = "../assets/images/post/";

    //echo $target_file;
    $target_file = $target_dir .$newfilename;

    // MOVE IMAGE TO FOLDER 
     move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
 $target_dir = "post/";
     $target_file = $target_dir .$newfilename;
 

     $result =$db->editPostimg($postId,$title,$body,$target_file);
   

 if($result==1)
     header("location:../admin/posts.php?res=1"); 
 
 else   header("location:../admin/posts.php?res=2"); 






 


 

  }
 
  }

   else if(isset($_POST['submit2']))

   {

 $postId=$_POST['postId']; 

 $result =$db->deletePost($postId);
   

 if($result==1)
     header("location:../admin/posts.php?res=11"); 
 
 else   header("location:../admin/posts.php?res=22"); 





   }

 else header("location:../admin/addPost.php?res=2");
 
 }


?>