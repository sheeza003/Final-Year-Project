

<?php
require "../includes/globals.php";
require "../includes/connect.php";

?>
 App Form php

<?php

//require "../views/students/student-form.html";


if(isset($_POST['submit']))
{
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
//$pass_var = $_POST['password'];
$email_var = $_POST['email'];
$ins_var = $_POST['ins'];
$loc_var = $_POST['loc'];
$file_var = $_POST['file'];
$ref_no = $_POST['ref_no'];
$ref_job = $_POST['ref_job'];
$ref_relation = $_POST['ref_relation'];
$current_degree = $_POST['current_degree'];


echo $ref_no.$ref_relation.$current_degree;
//echo $f_name_var . $l_name_var . $email_var . $loc_var;

if($f_name=='')
{echo '<script>alert("Please Fill all Fields!")</script>';
 exit(); }

else {
  
$insert_query_var = "INSERT INTO student_info (fname, lname, email, location, institution, file, ref_no, ref_job, ref_relation, current_degree) VALUES('$f_name', '$l_name', '$email_var', '$loc_var', '$ins_var', $file_var, '$ref_no', '$ref_job', '$ref_relation', '$current_degree' ) " ;
  
if(mysqli_query($connection, $insert_query_var)){
echo "<script>alert('Post Published successfully')</script>";
  header('Location:' . BASE_URL . 'students/index.php' );

                                                 }//if query

  else{echo "couldent connect";} 
  /*
  $query_var = "SELECT * FROM student_info"; 
$run = mysqli_query($connection, $query_var);
while($row = mysqli_fetch_array($run)){
	echo $id_var = $row['id'];
	echo $date_var = $row['first-name'];
	echo $title_var = $row['last-name'];
	$author_var = $row['location'];
	$image_var = $row['file'];
 
                                     }//while */               

}//............else
}//....on submit
?>