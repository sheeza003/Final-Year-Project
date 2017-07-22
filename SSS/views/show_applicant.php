

<link rel="stylesheet" type="text/css" href="css/admin-panel-styles.css">
<br>


<?php if (!$applicant): ?>
	<p>No page found sorry </p>

<?php else: ?>

<div class="app-show">
<h1>Student Application</h1>
<div><span class="app_left">Applicant ID:</span>  <?php echo ($applicant['id']); ?> </div>
<br>

<div><span class="app_left">First Name:</span>  <?php echo ($applicant['fname']); ?> </div>
<br>	
<div><span class="app_left">Last name: </span>  <?php echo ($applicant['lname']); ?> </div>
<br>	
<div><span class="app_left">Email: </span>  <?php echo ($applicant['email']); ?> </div>
<br>	
<div><span class="app_left">Age: </span>  <?php echo ($applicant['age']); ?> </div>
<br>	

<div><span class="app_left">Reason: </span>  <?php echo ($applicant['file']); ?> </div>
<br>

<div><span class="app_left">Location: </span>  <?php echo ($applicant['location']); ?> </div>

<br>	
<div><span class="app_left">Institution: </span>  <?php echo ($applicant['institution']); ?> 
</div> <br>
<div><span class="app_left">Status: </span>  <?php echo ($applicant['status']); ?> 
</div> <br>
<div><span class="app_left">Comments: </span>  <?php echo ($applicant['comments']); ?> 
</div> <br>

<hr/>

<div><span class="app_left">Reference No: </span>  <?php echo ($applicant['ref_no']); ?> 
</div> <br>

<div><span class="app_left">Job: </span>  <?php echo ($applicant['ref_job']); ?> 
</div> <br>

<div><span class="app_left">Relation: </span>  <?php echo ($applicant['ref_relation']); ?> 
</div> <br>

</div>
<br>
<div>
<?php endif; ?>
<div class="app-show">

<form method="post" action="admin/status.php?form_id=<?php echo ($applicant['id']); ?>">

<div class='admin-name'>Application Marking</div> <br> <br>

<b>Status :</b>
 <select name="status">
 <option value="Completed"> Complete </option> 
 <option value="Pending"> Pending </option> 
 <option value="Accepted"> Accept </option> 
 <option value="Declined"> Decline </option> 

 </select>

<br><br>
Comments:<textarea cols="30" rows="5" name="comments"></textarea>
<br>
<input type="submit" name="submit"></input>
</div>
</form>

<a href="admin/all-applications.php"> << Go Back </a>

