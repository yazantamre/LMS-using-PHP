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
      

        

    if(isset($_POST['submit'])){


                   $email=$_POST['email'];
$userid =  $_SESSION['id'];
$result0 =$db->checkEmailForUpdate($email,$userid );

  $num = mysqli_num_rows($result0);
if($num==1) {


if( $_SESSION['valid'] == 1) 
 header("location:../admin/myAccount.php?res=2");
else if( $_SESSION['valid'] == 2)  

        header("location:../teacher/teacher_profile.php?res=2"); 
     else if( $_SESSION['valid'] == 3)  

        header("location:../student/profile.php?res=2");
}
else {
       
     $firstName=$_POST['firstName'];
     $lastName=$_POST['lastName'];
     $phone=$_POST['phone'];
     $password=$_POST['password'];
      
     $address=$_POST['address'] ;
 

 


     $result =$db->updateUserDB($userid,$firstName,$lastName,$email,$phone,$password,$address);
 
 


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
 header("location:../admin/myAccount.php?res=2");
else if( $_SESSION['valid'] == 2)  

        header("location:../teacher/teacher_profile.php?res=2"); 
     else if( $_SESSION['valid'] == 3)  

        header("location:../student/profile.php?res=2");  
}
  } }
 
 }



?>