<?php 

session_start();
session_destroy();

 
header('Location:../Pallms/signInUp.php');
?>