<?php
session_start();
require "../includes/connect.php";
//require "../includes/globals.php";


//require "../views/students/student-form.html";


if(isset($_POST['submit']))
{
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$email_var = $_POST['email'];
$age_var = $_POST['age'];
$loc_var =$_POST['loc'];
$ins_var =$_POST['ins'];
$file_var = $_POST['file'];
$ref_no = $_POST['ref_no'];
$ref_job = $_POST['ref_job'];
$ref_relation = $_POST['ref_relation'];
$current_degree = $_POST['current_degree'];
$username=$_SESSION['student_name'];
	
  
$insert_query_var = "INSERT INTO student_info (fname, lname, email, age, location, institution, file, ref_no, ref_job, ref_relation, current_degree, user_name) VALUES('$f_name', '$l_name', '$email_var', '$age_var', '$loc_var', '$ins_var', '$file_var', '$ref_no', '$ref_job', '$ref_relation', '$current_degree', '$username')" ;
  
if(mysqli_query($connection, $insert_query_var)){
echo "<script>alert('Form Submited successfully')</script>";
 echo("<script>window.location = 'index.php';</script>");
                                                 }

else{ echo "couldent connect"; } 


}//....on submit
?>