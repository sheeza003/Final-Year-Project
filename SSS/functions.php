<?php
require 'includes/globals.php';
require 'includes/connect.php';


if (empty($_GET['applicant_id'])) {
	$applicant = false;

} else {
$id = $_GET['applicant_id'];
$applicant=$db->prepare("
SELECT * FROM student_info WHERE id = :id LIMIT 1
	");
$applicant->execute(['id'=>$id]);
$applicant = $applicant->fetch(PDO::FETCH_ASSOC);
}

require "views/show_applicant.php";





?>