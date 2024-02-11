<?php session_start();
 if    (    ! $_SESSION['valid'] == 3 or  ! $_SESSION['valid'] == 2 )   
   {  
  
    header('Location:../Pallms/signInUp.php');
 
   }
   else
    {
    
 
require('DB.php');
     $db = new DB(); 
      

        

    if(isset($_POST['submit'])){
 
     $assigmentId=$_POST['assigmentId'];
     $comment=$_POST['comment'];
      $userid =  $_SESSION['id'];
     $DateAdded = date("Y-m-d");
    $courseId =  $_POST['courseId'];

     $actionroot ="../teacher/assayments.php" ;





     $result =$db->addaassaymentComment($userid,$comment,$assigmentId,$DateAdded);

if ( $_SESSION['valid'] == '3' ) 
     {
   $actionroot  = "../student/comments.php";

    }
    ?>

 
   <form name="myForm" id="myForm"  action="<?php echo $actionroot;?>"  method="POST" style="display: none;">
            <input name="courseId" value="<?php echo $courseId;?>" hidden />
 <input name="assigmentId" value="<?php echo $assigmentId;?>"  hidden/>
             
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