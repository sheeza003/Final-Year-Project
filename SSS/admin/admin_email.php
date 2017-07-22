<?php
require "../views/admin/admin_email_form.php";
require "../includes/connect.php";

if(isset($_POST['submit'])){
$subject=$_POST['subject'];
$message=$_POST['message'];
$sender_email=$_POST['sender-email'];




//mail subject
$subject = "$subject" ;

//details
//$message = "$detail";
//sender's mail
$email_from = "$sender_email";
//from
$header = 'From:' .$email_from ."\n" . 
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
//target email address
$to="sheezakhan003@gmail.com";

$send_contact= mail($to, $subject, $message, $header);

//chech to see if mesage send ur email
if($send_contact){

	echo "we recieved your email"; } else {echo "Error";                            }

}else{echo "couldent submet";}
?>