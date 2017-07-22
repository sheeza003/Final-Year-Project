<?php /*

require '../app/start.php';

if (!empty($_POST)) {
	$title = $_POST['title'];
	$content = $_POST['content'];
	$slug = $_POST['slug'];

$insertPage = $db->prepare["
INSERT INTO pages (title, content, slug, created) VALUES (:title, :content, :slug, NOW()) "];

$insertPage->execute([
'title'   => $title,
'content' => $content,
'slug'    => $slug,
]);

header('Location' . BASE_URL . '/admin/list.php');
}
require VIEW_ROOT . '../admin/add-page.php';
*/
?>
<!-- <html>
<head>
<meta charset="utf-8">
<title>Post</title>
</head>
<body>
<form method="POST" action="add.php" enctype="multipart/form-data">
<h3>Insert new page</h3>
 <input type="text" name="title" placeholder="Post Title"> <br>
 <input type="text" name="slug" placeholder="Slug"> <br>
 <input type="text" name="content" placeholder="Post Content" style="height:100px; width:300px"> <br>
 <input type="submit" name='submit' >
</form>
</body>
</html>  -->

<?php
require("../connect.php");
require '../app/start.php';
require VIEW_ROOT . '../admin/add-page.php';
if(isset($_POST['submit']))
{
$title_var = $_POST['title'];
$content_var = $_POST['content'];
$slug_var = $_POST['slug'];
$date_var = date("d-M-Y H:i:s");
 echo $date_var;
if($title_var=='' or $content_var=='' or $slug_var=='')
  {
echo '<script>alert("Please Fill all Fields!")</script>';
exit();
  }
else {
	
$insert_query_var = "INSERT INTO pages (title, content, slug, created) VALUES('$title_var', '$content_var', '$slug_var', '$date_var') " ;
	
if(mysqli_query($connection, $insert_query_var)){
echo "<script>alert('Post Published successfully')</script>";
header('Location:' . BASE_URL . '/admin/all-pages.php' );
	                                             }

}//............else
}//....on submit
?>
