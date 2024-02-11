  <?php
session_start();

if(isset($_POST['login']))
{
	 require 'DB.php';
	 $db = new DB();

     $email = $_POST['email'];
     $password = $_POST['password'];
	 $result = $db->login($email,$password);

     $num = mysqli_num_rows($result);
if($num==1)
{
	foreach ($result as $r) {
		# code...
		if ($r["status"] ==1 ) {
			

				$_SESSION['valid'] = $r["type"];
	$_SESSION['id'] = $r["id"];
	$_SESSION['img'] = $r["imagePath"];
	$_SESSION['name'] = $r["firstName"] ." ".$r["lastName"];;

	if($_SESSION['valid']== '1'){
 		 
  		header("location:../admin/index.php"); }
 else if ($_SESSION['valid']== '2')
 	{
 		 
  		header("location:../teacher/index.php"); 

 	}
 else if ($_SESSION['valid']== '3')
 	{header("location:../student/index.php"); 
}
  
		 

		
	


}

else   header("location:../Pallms/signInUp.php?res=821");
	

 } }

 else  header("location:../Pallms/signInUp.php?res=891");

  
}
else  header("location:../Pallms/signInUp.php?res=891");



 
?>