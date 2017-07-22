<?php

require '../includes/globals.php';
require '../includes/connect.php';

$applicant = $db->query("
SELECT * FROM student_info")->fetchAll(PDO::FETCH_ASSOC);


require '../views/admin/all-applications.php';
?>

