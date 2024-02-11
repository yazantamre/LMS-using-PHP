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


            $email=$_POST['emailteacher'];

$result =$db->checkEmail($email);

  $num = mysqli_num_rows($result);
if($num==1) {
    header("location:../admin/addTeacher.php?res=31");
}
else {

   
     $firstName=$_POST['firstName'];
     $lastName=$_POST['lastName'];
     $phone=$_POST['phone'];
     $password=$_POST['passwordteacher'];
     $type="2";
     $status ="1"; 
     $address=$_POST['address1'];
  // $imgStutas=$_POST['imgStutas'];
  $target_file='users/teacher.png';


     $registrationDate = date("Y-m-d");

 
     $result2 =$db-> adduser($firstName,$lastName,$email,$phone,$password,$type,$status,$address,$registrationDate,$target_file);
 
 


 if($result2==1)
{

 
        header("location:../admin/addTeacher.php?res=1"); 

   }
 else 
 header("location:../admin/addTeacher.php?res=0");

}


  }
}
?>