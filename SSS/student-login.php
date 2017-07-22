<?php 
session_start();
?>

<html>
	<head>
		<title>Student Login</title>
	</head>

<body bgcolor="gray">
	
	<form method="post" action="student-login.php">
	
		<table width="400" border="10" align="center" bgcolor="#79CDCD">
			
			<tr>
				<td bgcolor="yellow" colspan="4" align="center"><h1>Student Login form</h1></td>
			</tr>
		
			<tr>
				<td align="right">User Name:</td>
				<td><input type="text" name="student_name"></td>
			</tr>
			
			<tr>
				<td align="right">User Password:</td>
				<td><input type="password" name="student_pass"></td>
			</tr>
			
			<tr>
				<td colspan="4" align="center"><input type="submit" name="login" value="Login"></td>
			</tr>
		
		
		</table>
	</form>

</body>
</html>
<?php 
require("includes/connect.php");

if(isset($_POST['login'])){
	
	$user_name = $_POST['student_name'];
	$user_pass = $_POST['student_pass'];
	
	//$encrypt = md5($user_password);

$admin_query = "SELECT * from student_login WHERE student_name='$user_name' AND student_pass='$user_pass'";

	$run = mysqli_query($connection ,$admin_query);     

/*
$db = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);

$sql="SELECT * FROM admin_login where admin_name='$user_name' AND admin_pass='$user_pass'";
$STH = $db->prepare($sql);
$STH->execute(array($user_name));
$User = $STH->fetch();

if (!empty($user_name) && password_verify($user_pass,$User[admin_pass]))
  echo "Logged in";
else
  echo "User/password incorrect";               */

	
	if(mysqli_num_rows($run)>0){
	
	$_SESSION['student_name'] = $user_name;
	
	echo "<script>window.open('students/index.php','_self')</script>";
	}
	else {
	
	echo "<script>alert('User name or password is incorrect')</script>";
	
	}
}


?>