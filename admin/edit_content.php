<?php
include('include/config.php');
include('include/header.php');
include('include/navbar.php');
include('include/sidebar.php');

// FIXED ID (single record)
$id = 1;

// DEFAULT VALUES
$title = "";
$description = "";
$button_text = "";
$button_link = "";
$image = "";

// FETCH DATA
$query = "SELECT * FROM content_section WHERE id=1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if($row){
    $title = $row['title'];
    $description = $row['description'];
    $button_text = $row['button_text'];
    $button_link = $row['button_link'];
    $image = $row['image'];
}

// UPDATE
if(isset($_POST['update_content'])){

    $title = $_POST['title'];
    $description = $_POST['description'];
    $button_text = $_POST['button_text'];
    $button_link = $_POST['button_link'];

    // IMAGE UPLOAD
    if(!empty($_FILES['image']['name'])){

        $folder = "uploads/";

        if(!is_dir($folder)){
            mkdir($folder, 0755, true);
        }

        $image_name = time() . "_" . $_FILES['image']['name'];
        $image_path = $folder . $image_name;

        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

        // DELETE OLD IMAGE
        if(!empty($image) && file_exists($folder.$image)){
            unlink($folder.$image);
        }

    } else {
        $image_name = $image; // keep old
    }

    // UPDATE QUERY
    $update = "UPDATE content_section SET 
        title='$title',
        description='$description',
        button_text='$button_text',
        button_link='$button_link',
        image='$image_name',
        updated_at=NOW()
        WHERE id=1";

    mysqli_query($conn, $update);

    echo "<script>alert('Content Updated Successfully'); window.location='view-content.php';</script>";
}
?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <h1>Edit Content Section</h1>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">

        <div class="card-header">
          <h3 class="card-title">Update Content</h3>
        </div>

        <form method="post" enctype="multipart/form-data">

          <div class="card-body">
            <div class="row">

              <!-- Title -->
              <div class="col-md-6">
                <label>Title</label>
                <input type="text" name="title" class="form-control"
                       value="<?= $title ?>" required>
              </div>

              <!-- Button Text -->
              <div class="col-md-6">
                <label>Button Text</label>
                <input type="text" name="button_text" class="form-control"
                       value="<?= $button_text ?>">
              </div>

              <!-- Description -->
              <div class="col-md-12 mt-3">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="4"><?= $description ?></textarea>
              </div>

              <!-- Button Link -->
              <div class="col-md-6 mt-3">
                <label>Button Link</label>
                <input type="url" name="button_link" class="form-control"
                       value="<?= $button_link ?>">
              </div>

              <!-- Image -->
              <div class="col-md-6 mt-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">

                <?php if(!empty($image) && file_exists("upload/".$image)){ ?>
                  <p class="mt-2">Old Image:</p>
                  <img src="uploads/<?= $image ?>" width="120">
                <?php } ?>
              </div>

            </div>
          </div>

          <div class="card-footer">
            <button type="submit" name="update_content" class="btn btn-primary">
              <i class="fas fa-save"></i> Update
            </button>
          </div>

        </form>

      </div>
    </div>
  </section>

</div>

<?php include('include/footer.php'); ?>

<!-- IMAGE PREVIEW SCRIPT -->
<script>
function previewImage(event){
  var reader = new FileReader();
  reader.onload = function(){
    document.getElementById('preview').src = reader.result;
  }
  reader.readAsDataURL(event.target.files[0]);
}
</script>