<?php 
//require "../includes/globals.php";
require "../includes/connect.php";


//require "../functions.php";
//require "fetch_app.php";

session_start();

if(!isset($_SESSION['student_name'])){

header("location: ../student-login.php");

                                    }
else {
?>

<html>
	<head>
		<title>Admin Panel</title>
	
       <link rel="stylesheet" type="text/css" href="../css/admin-panel-styles.css">
	</head>
	

<body>

<div id="sidebar">
<br><br> <span> WELCOME :</span>
<div class="admin-name"><?php echo $_SESSION['student_name']; ?></div>
<br> <br>
<button><a href="../student-logout.php">Logout</a></button> <br><br>

<div class="link"><a href="../views/students/student-form.php">
Fill your Scolarship Form</a></div>

<div class="link"><a href="fetch_app.php"> View Your Application</a></div>


<div class="link"><a href="edit-form.php"> Edit Your Application</a></div>




<div id="welcome"> 
<br><br><br>

<b>Please read our Scholarship criteria. </b>

<p> This is your contenct, where you can manage your website files and content. Please read the requirenments carefully.
This is your contenct, where you can manage your website files and content. Please read the requirenments carefullyThis is your contenct, where you can manage your website files and content. Please read the requirenments carefullyThis is your contenct, where you can manage your website files and content. Please read the requirenments carefullyThis is your contenct, where you can manage your website files and content. Please read the requirenments carefully</p>


</div>


</body>
</html>

<?php } ?>