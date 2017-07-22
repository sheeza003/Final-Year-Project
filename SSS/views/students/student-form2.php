<!doctype html>
<html>
<head>
 
  <title>Application Form</title>
  
</head>

<body>
<?php require("../../includes/connect.php"); ?>
<?php require("../../includes/globals.php"); ?>

    <h1>Application</h1>
    
    <form method="POST" action="../../students/student_form.php">
 
        First Name
        <input type="text" name="fname"/>
      

       Last Name
        <input type="text" name="lname"/>

        <input type="text" name="lname"/>

        <input type="text" name="email"/>

        <input type="text" name="age"/>

        <input type="text" name="current_degree"/>

        <input type="text" name="loc"/>

        <input type="text" name="ins"/>

        <input type="text" name="file"/>

        <input type="text" name="ref_no"/>

        <input type="text" name="ref_job"/>

        <input type="text" name="ref_relation"/>

    
      
        <input type="submit" name="submit">

      


      
      </form>


</body>
</html>