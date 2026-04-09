<?php
include "config.php";

/* PATH */
$uploadDir = __DIR__ . "/Assets/upload/";

/* CREATE FOLDER */
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

/* UPDATE DATA */
if(isset($_POST['update'])){

  $id = $_POST['id'];
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $button = mysqli_real_escape_string($conn, $_POST['button']);
  $link = mysqli_real_escape_string($conn, $_POST['link']);

  // GET OLD IMAGE
  $old = mysqli_fetch_assoc(mysqli_query($conn,"SELECT image FROM content_section WHERE id='$id'"));
  $oldImage = $old['image'];

  $image = $oldImage;

  /* NEW IMAGE UPLOAD */
  if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){

    $filename = time().'_'.basename($_FILES['image']['name']);
    $targetFile = $uploadDir . $filename;

    if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)){

        // DELETE OLD IMAGE
        if(!empty($oldImage) && file_exists($uploadDir.$oldImage)){
            unlink($uploadDir.$oldImage);
        }

        $image = $filename;
    }
  }

  mysqli_query($conn,"UPDATE content_section SET 
    title='$title',
    description='$description',
    button_text='$button',
    button_link='$link',
    image='$image'
    WHERE id='$id'
  ");

  echo "✅ Updated Successfully";
}

/* INSERT DATA */
if(isset($_POST['save'])){

  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $button = mysqli_real_escape_string($conn, $_POST['button']);
  $link = mysqli_real_escape_string($conn, $_POST['link']);

  $image = "";

  if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){

    $filename = time().'_'.basename($_FILES['image']['name']);
    $targetFile = $uploadDir . $filename;

    if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)){
        $image = $filename;
    }
  }

  mysqli_query($conn,"INSERT INTO content_section(title,description,button_text,button_link,image)
  VALUES('$title','$description','$button','$link','$image')");
}

/* FETCH DATA FOR EDIT */
$editData = null;
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $editData = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM content_section WHERE id='$id'"));
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Content Admin</title>
</head>

<body style="font-family:Arial; padding:20px;">

<h2><?= $editData ? "Update Content" : "Add Content"; ?></h2>

<form method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?= $editData['id'] ?? ''; ?>">

<input type="text" name="title" placeholder="Title"
value="<?= $editData['title'] ?? ''; ?>"><br><br>

<textarea name="description" placeholder="Description"><?= $editData['description'] ?? ''; ?></textarea><br><br>

<input type="text" name="button" placeholder="Button Text"
value="<?= $editData['button_text'] ?? ''; ?>"><br><br>

<input type="text" name="link" placeholder="Button Link"
value="<?= $editData['button_link'] ?? ''; ?>"><br><br>

<input type="file" name="image"><br><br>

<?php if(!empty($editData['image'])){ ?>
  <img src="Assets/upload/<?= $editData['image']; ?>" width="120"><br><br>
<?php } ?>

<button name="<?= $editData ? 'update' : 'save'; ?>">
  <?= $editData ? 'Update' : 'Save'; ?>
</button>

</form>

<hr>

<h3>All Content</h3>

<?php
$data = mysqli_query($conn,"SELECT * FROM content_section ORDER BY id DESC");

while($row = mysqli_fetch_assoc($data)){
?>

<div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
  <h4><?= $row['title']; ?></h4>
  <img src="Assets/upload/<?= $row['image']; ?>" width="100"><br><br>

  <a href="?edit=<?= $row['id']; ?>">✏ Edit</a>
</div>

<?php } ?>

</body>
</html>