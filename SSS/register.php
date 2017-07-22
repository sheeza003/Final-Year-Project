<?php
require "includes/connect.php";
//require "includes/globals.php";
?>


<?php

//require "views/reg/register.html";

if(isset($_POST['submit']))
{
	session_start();
$code = $_SESSION['real'];
$user = $_POST['cap'];
$name_var = $_POST['name'];
$pass_var = $_POST['password'];
$email_var = $_POST['email'];
$ins_var =$_POST['ins'];
$loc_var =$_POST['loc'];

                          
 

// echo $date_var;
if($name_var=='' or $pass_var=='' or $code !== $user)
  {
echo '<script>alert("Please Fill all Fields Correctly!")</script>';
echo("<script>window.location = 'views/reg/register.html';</script>");

exit();
  }
else {
  
$insert_query_var = "INSERT INTO student_login (student_name, student_pass , email, institute, location) VALUES('$name_var', '$pass_var','$email_var', '$ins_var', '$loc_var') " ;
  
if(mysqli_query($connection, $insert_query_var)){
echo "<script>alert('You Registered Successfully !')</script>";
  echo("<script>window.location = 'student-login.php';</script>");

                                               }

}//............else
}//....on submit
?>