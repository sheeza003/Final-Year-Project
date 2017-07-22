<?php
/* PDO
try {$handler= new PDO('mysql:host=127.0.0.1;dbname=project','root','');
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
catch(PDOException $e) {
echo $e->getMessage();} */
$connection=mysqli_connect("localhost","root","","student_scholar_sys");
if (!$connection){ die("not working").mysqli_error();}
//else {echo "databse connected";}

?>