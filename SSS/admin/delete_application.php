<?php
//session_start();  
require "../includes/connect.php";
require "../includes/globals.php";


if(isset($_GET['del-page'])){

	$delete_id = $_GET['del-page'];
	
	$delete_query = "DELETE FROM student_info WHERE id='$delete_id' ";
	
	if(mysqli_query($connection, $delete_query)){
	
	echo "<script>alert('Application Has been Deleted Successfully')</script>";
	echo "<script>window.open('all-applications.php','_self')</script>";
	
	                                  }
	



                        }//isset




?>
