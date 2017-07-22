
<?php require VIEW_ROOT . '/templates/header.php'; ?>

<br><h2>Add New Page</h2><br>

<form action="<?php echo  BASE_URL; ?>/admin/add-page.php" method="POST">

<br><br> Title <input type="text" name="title" id="title"> 

<br><br>Content <input type="text" name="content" id="content">

<br><br> Slug <input type="text" name="slug" id="slug"> 

<br><br> <input type="submit" name="submit" value="ADD">
</form>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>

