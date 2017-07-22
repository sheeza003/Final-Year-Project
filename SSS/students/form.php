<?php
require "../includes/globals.php";
require "../includes/connect.php";

if(isset($_POST['submit']))
{
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$l_name = $_POST['email'];
$l_name = $_POST['age'];
$l_name = $_POST['current_degree'];
$l_name = $_POST['loc'];
$l_name = $_POST['ins'];
$l_name = $_POST['file'];
$l_name = $_POST['ref_no'];
$l_name = $_POST['ref_job'];
$l_name = $_POST['ref_relation'];




$insert_query_var = "INSERT INTO student_info (fname, lname) VALUES('$f_name', '$l_name') " ;
  
if(mysqli_query($connection, $insert_query_var)){
echo "<script>alert('Post Published successfully')</script>";
  header('Location:' . BASE_URL . 'students/index.php' );

                                                 }//if query

  else{echo "couldent connect";} 


}

?>