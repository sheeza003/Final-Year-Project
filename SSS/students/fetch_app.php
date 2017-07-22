<?php
session_start();

//require '../includes/globals.php';
require '../includes/connect.php';


$user_name = $_SESSION['student_name'];
/*
if (empty($_SESSION['student_name'])) {
	$applicant = false;

} else {


echo "session is in there " . $user_name;*/

$fetch_query = "SELECT * FROM student_info WHERE user_name = '$user_name' ";


$run = mysqli_query($connection, $fetch_query);

$row = mysqli_fetch_array($run);
	
	?>
   

 <?php 
  require "../views/students/show_form.php"; 

 ?>





