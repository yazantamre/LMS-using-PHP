 <?php 

session_start();
  // send email
$from = 'pallmsacademy@gmail.com';  

$to = 'pallmsacademy@gmail.com';
$name = $_REQUEST["name"];
$subject = $_REQUEST["subject"];
$messagetxt = $_REQUEST["message"];
$useremail = $_REQUEST["email"];


$message ="<html>   <body> <h2>Sender Name : "  .$name ."</h2>
<h3>Sender E-mail : "  .$useremail ."</h3>
<P>".
$messagetxt ."<P><br>". " <span>". date("Y-m-d h:i:sa"). " </span>  </body>
</html>";
// use wordwrap() if lines are longer than 70 characters

$message = wordwrap($message,70);

  $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
        $headers .= 'From: '.$useremail."\r\n".
        'Reply-To: '.$useremail."\r\n" .
        'X-Mailer: PHP/' . phpversion();

// send email
mail($to, $subject, $message, $headers);




 
  

 

?>