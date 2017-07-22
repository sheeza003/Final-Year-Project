<?php session_start();
$user_name = $_SESSION['student_name'];
 ?>
<html>
	<head>
		<title>Update post</title>
	
	
	</head>
	
<body>
<h3><a href="#">Logout</a></h3>
<h3><a href="index.php">Go Back</a></h3>



<?php 

require '../includes/connect.php';


$fetch_query = "SELECT * FROM student_info WHERE user_name = '$user_name' ";


$run = mysqli_query($connection, $fetch_query);

$row = mysqli_fetch_array($run);
	

?>

<form method="post" action="edit-form.php?edit_form=<?php echo ($row['id']); ?>" >
	


<table width="600" bgcolor="orange" align="center" border="10">
		
<tr><td align="center" bgcolor="yellow" colspan="6"><h1>Edit Form Here</h1></td></tr>
		
<tr><td align="right">First name:</td>
<td><input type="text" name="fname" size="30" value="<?php echo ($row['fname']); ?>" /></td></tr>
		
<tr><td align="right">Last Name</td>
<td><input type="text" name="lname" size="30" value="<?php echo ($row['lname']); ?>"></td></tr>

<tr><td align="right">Email:</td>
<td><input type="email" name="email" size="30"value="<?php echo ($row['email']); ?> "></td></tr>
		
<tr><td align="right">Location:</td><td>
<select name="loc">
          <option value="Islamabad"> Islamabd</option>
          <option value="Karachi"> Karachi</option>
          <option value="Rawalpindi"> Rawalpindi</option>
          <option value="Lahore"> Lahore</option>
     </select></td></tr>
<tr><td align="right">Reason</td><td>

<select name="ins">
          <option value="Punjab-uni">Punjab University</option>
          <option value="FAST"> FAST University </option>
          <option value="NUST"> NUST University </option>
          <option value="COMSATS"> COMSATS University </option>
        </select>
	</td></tr>

<tr><td align="right">Current Degree</td><td>
<input type="text" name="current_degree" value="<?php echo ($row['current_degree']); ?> "/>
	</td></tr>


<tr><td align="right">Reason</td>
<td><textarea name="content" cols="30" rows="15"><?php echo ($row['file']); ?></textarea></td></tr>
		
<tr><td align="right">Reference NO</td><td>
<input type="text" name="ref_no" size="30" value="<?php echo ($row['ref_no']); ?> "/></td></tr>

<tr><td align="right">Reference job</td><td>
<input type="text" name="ref_job" size="30" value="<?php echo ($row['ref_job']); ?> " />
	</td></tr>

<tr><td align="right">Reference relation</td><td>
<input type="text" name="ref_relation" size="30" value="<?php echo ($row['ref_relation']); ?> "/>
	</td></tr>

		<tr>
			<td align="center" colspan="6"><input type="submit" name="update" value="Update Now"></td>
		</tr>		
	</table>

</form>
</body>
</html>
<?php
	
if(isset($_POST['update'])){
	
$update_id = $_GET['edit_form'];
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
//$username=$_SESSION['student_name'];
	
	
$update_query = "UPDATE student_info SET fname ='$f_name', lname ='$l_name', email='$email_var', age='$age_var', institution='$ins_var', location='$loc_var', file='$file_var', ref_no='$ref_no', ref_job='$ref_job', ref_relation='$ref_relation' WHERE id='$update_id'";
		
		if(mysqli_query($connection, $update_query)){
		 
		echo "<script>alert('Form has been updated')</script>";
		
		echo "<script>window.open('index.php','_self')</script>";
		
		
	
	
	}

}

?>