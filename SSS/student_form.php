<?php
require "includes/connect.php";
require "includes/globals.php";
?>
welcome to registration

<?php

require "views/reg/register.html";

if(isset($_POST['submit']))
{
$name_var = $_POST['fname'];
$lname_var = $_POST['lname'];

//$pass_var = $_POST['password'];
$email_var = $_POST['email'];
$ins_var =$_POST['ins'];
$loc_var =$_POST['loc'];



// echo $date_var;
if($name_var=='' or $lname_var=='')
  {
echo '<script>alert("Please Fill all Fields!")</script>';
exit();
  }
else {
  
$insert_query_var = "INSERT INTO student_login (fname, lname, email, institution, location) VALUES('$name_var', '$lname_var','$email_var', '$ins_var', '$loc_var') " ;
  
if(mysqli_query($connection, $insert_query_var)){
echo "<script>alert('Post Published successfully')</script>";
  header('Location:' . BASE_URL . '/views/reg/register.html' );
                                               }

}//............else
}//....on submit
?>