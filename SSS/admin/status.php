
<?php
session_start();
require("../includes/connect.php");
//require '../includes/globals.php';
require '../functions.php';

if(isset($_POST['submit']))
{
$status_var = $_POST['status'];
$comments_var = $_POST['comments'];
$edit_id=$_GET['form_id'];


 echo $status_var;
if($status_var=='')
  {
echo '<script>alert("nothing in status var!")</script>';
exit();
  }
else {
	
$insert_query_var = "UPDATE student_info SET status = '$status_var', comments= '$comments_var' WHERE id='$edit_id' " ;
	
if(mysqli_query($connection, $insert_query_var)){
echo "<script> alert('Post Published successfully')</script>";
echo("<script>window.location = '../views/admin/all-applications.php';</script>");


	                   
	                                            }

}//............else
}//....on submit
?>
