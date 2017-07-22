
<link rel="stylesheet" type="text/css" href= "../css/admin-panel-styles.css">
<br>
<?php if (!$row): ?>
	<p>No page found sorry </p>

<?php else: ?>

<div class="app-show">
<h1>Your Application:</h1>


<div><span class="app_left">First Name:</span>  <?php echo ($row['fname']); ?> </div>
<br>	
<div><span class="app_left">Last name: </span>  <?php echo ($row['lname']); ?> </div>
<br>	

<div><span class="app_left">Email: </span>  <?php echo ($row['email']); ?> </div>
<br>	

<div><span class="app_left">Age: </span>  <?php echo ($row['age']); ?> </div>
<br>	

<div><span class="app_left">Reason: </span>  <?php echo ($row['file']); ?> </div>
<br>

<div><span class="app_left">Location: </span>  <?php echo ($row['location']); ?> </div>

<br>	
<div><span class="app_left">Institution: </span>  <?php echo ($row['institution']); ?>  </div>

<br>

<div><span class="app_left">Reference No: </span>  <?php echo ($row['ref_no']); ?> 
</div> <br>

<div><span class="app_left">Job: </span>  <?php echo ($row['ref_job']); ?> 
</div> <br>

<div><span class="app_left">Relation: </span>  <?php echo ($row['ref_relation']); ?> 
</div> <br>


<hr>

<div><span class="app_left">Status: </span>  <?php echo ($row['status']); ?> 
</div> <br>

<div><span class="app_left">Comments: </span>  <?php echo ($row['comments']); ?> 
</div> <br>
<hr>

</div>
<br>

<?php endif; ?>