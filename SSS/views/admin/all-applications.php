<?php session_start(); ?>
<style type="text/css">
 a{ text-decoration: none; padding: 5px;}
  	button { margin-left: 20%; }
a:hover{color:black;}
 	button:hover { height:23px; }
 	td{ padding:5px; }
 	</style>

<link rel="stylesheet" type="text/css" href="../../css/admin-panel-style.css">
<?php if (empty($applicant)): ?>
    <p> None at the moment </p>
<?php else: ?>
<!--	<table>
	 <thead>
	  <tr>
	     <th>Label </th>
	     <th>Title </th>
	     <th>Slug </th>
	     <th>Content </th>
	     <th>Date </th>
	  </tr>
	 </thead>
	 <tbody> -->
	 <table width="1000" border="1" align="center"> 
	<tr>
		<td colspan="10" align="center" bgcolor=""><h1>View All Applications </h1></td>
	</tr>
	
	<tr bgcolor='#9EC1FF' style="border:2px; border-radius:50px;">
		<th>ID:</th>
		<th>First name:</th>
		<th>Last name:</th>
		<th>Email:</th>
		<th>Status:</th>
		<th>Expand</th>
      
		<th bgcolor='#FF5A5D'>Reject</th>
		
	</tr>
	<?php foreach($applicant as $applicant): ?>
	<tr>
	  <td> <?php echo $applicant['id']; ?>  </td>
	  <td> <?php echo $applicant['fname']; ?>  </td>
	  <td> <?php echo $applicant['lname']; ?>  </td>
	  <td> <?php echo $applicant['email']; ?>  </td>

	  <td> <?php echo $applicant['status']; ?>  </td>

      <td><button> <a href="<?php echo BASE_URL; ?>/functions.php?applicant_id=<?php echo $applicant['id']; ?>" > View </a> </button></td>

     
      <td> <button><a href="<?php echo BASE_URL; ?>/admin/delete_application.php?del-page=<?php echo $applicant['id']; ?>" > Delete Application </a> </button> </td>  
	 
    </tr>
     <?php endforeach; ?>
	 </tbody>
    </table>
<?php  endif; ?>


     <br><br> <a href="../views/reg/register.html">Add New User</a> <br>
     <br><br> <a href="../admin/index.php">GO Back</a> <br>



