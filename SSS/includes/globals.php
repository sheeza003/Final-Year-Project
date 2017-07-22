
<?php

error_reporting(0);

 ini_set('display_errors','on');

define('APP_ROOT', __DIR__ ); //two underscores
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL','http://localhost/SSS');

  // APP_ROOT;
  // '<br>' . BASE_URL;

/* $db = new PDO('mysql:localhost;dbname=student_scholar_sys;','root',''); */

try {
	$db = new PDO('mysql:host=localhost; dbname=student_scholar_sys' , 'root', '');
     //echo "connected";
    } 

   
catch (PDOException $e){
$error_message = $e->getMessage();
echo "An error occurred while connecting to the database:". $error_message;
                         }﻿  

?>
