<?php 
//require "../app/start.php";

session_start();

if(!isset($_SESSION['admin_name'])){

header("location: admin-login.php");
}
else {

?>

<html>
	<head>
		<title>Admin Panel</title>
	
       <link rel="stylesheet" type="text/css" href="../css/admin-panel-styles.css">
	</head>
	

</div> 

<div id="sidebar">
WELCOME : <br>
<div class="admin-name"> <?php echo $_SESSION['admin_name']; ?></div>
<br> <br>
<button><a href="../admin-logout.php">Logout</a></button> <br><br>
<div class="link"><a href="all-applications.php">View all Applicants</a></div>
<div class="link"><a href="../views/reg/register.html">Add New User</a></div>
 





</div>

<div id="welcome"> 

<br><br><br><br>

<b>Please read the following Instructions:</b>

<p> You can only access admin index if you log in, you can use admin as useername and password for login, This is your contenct, where you can manage your website files and content</p>


</div>


</body>
</html>

<?php } ?>