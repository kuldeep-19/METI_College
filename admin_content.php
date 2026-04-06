<?php
include "config.php";

/* SAVE DATA */
if(isset($_POST['save'])){

  $title = $_POST['title'];
  $description = $_POST['description'];
  $button = $_POST['button'];
  $link = $_POST['link'];

  if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
    $image = time().'_'.$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "Assets/upload/".$image);
  }

  mysqli_query($conn,"INSERT INTO content_section(title,description,button_text,button_link,image)
  VALUES('$title','$description','$button','$link','$image')");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Content Admin</title>
</head>

<body style="font-family:Arial; padding:20px;">

<h2>Add Content</h2>

<form method="POST" enctype="multipart/form-data">

<input type="text" name="title" placeholder="Title"><br><br>

<textarea name="description" placeholder="Description"></textarea><br><br>

<input type="text" name="button" placeholder="Button Text"><br><br>

<input type="text" name="link" placeholder="Button Link"><br><br>

<input type="file" name="image"><br><br>

<button name="save">Save</button>

</form>

</body>
</html>