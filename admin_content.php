<?php
include "config.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

/* SAVE DATA */
if(isset($_POST['save'])){

  $title = $_POST['title'];
  $description = $_POST['description'];
  $button = $_POST['button'];
  $link = $_POST['link'];

  echo "<h3>DEBUG INFO</h3>";

  // FILE DEBUG
  echo "<pre>";
  print_r($_FILES);
  echo "</pre>";

  $image = "";

  if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){

    $image = time().'_'.$_FILES['image']['name'];

    // TARGET PATH (ABSOLUTE)
    $target = __DIR__ . "/Assets/upload/" . $image;

    echo "Target Path: " . $target . "<br>";
    echo "Temp File: " . $_FILES['image']['tmp_name'] . "<br>";

    // CHECK FOLDER EXIST
    if(!is_dir(__DIR__ . "/Assets/upload/")){
        echo "❌ Folder does NOT exist<br>";
    } else {
        echo "✅ Folder exists<br>";
    }

    // TRY UPLOAD
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        echo "✅ Upload Success<br>";
    } else {
        echo "❌ Upload Failed<br>";
    }

  } else {
    echo "❌ No file uploaded OR error code: ".$_FILES['image']['error']."<br>";
  }

  // INSERT QUERY
  mysqli_query($conn,"INSERT INTO content_section(title,description,button_text,button_link,image)
  VALUES('$title','$description','$button','$link','$image')");
}
?>