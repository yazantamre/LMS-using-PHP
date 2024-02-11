<?php session_start();
 if    (! $_SESSION['valid'] == 3 or  ! $_SESSION['valid'] == 2 )   
   {  
  
    header('Location:../Pallms/signInUp.php');
 
   }
   else
    {
    
 
require('DB.php');
     $db = new DB(); 
      

        

    if(isset($_POST['submit'])){
 
     $advertisementsId=$_POST['advertisementsId'];
     $Comment=$_POST['Comment'];
      $userid =  $_SESSION['id'];
     $DateAdded = date("Y-m-d");
           $courseId =  $_POST['courseId'];

     

$actionroot ="../teacher/advertisements.php" ;


     $result =$db->addadvertisementsComment($userid,$Comment,$advertisementsId,$DateAdded);
   //  echo  $result ;
 if ( $_SESSION['valid'] == '3' ) 
     {
   $actionroot  = "../student/advertisements.php";

    }
    ?>
   


    <form name="myForm" id="myForm"  action="<?php echo $actionroot;?>" method="POST" hidden>
            <input name="courseId" value="<?php echo $courseId;?>" hidden />
        <input     name ="submitDB"   hidden />

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