<?php
include('include/config.php');
include('include/header.php');
include('include/navbar.php');
include('include/sidebar.php');

// GET ID
$id = isset($_GET['id']) ? $_GET['id'] : '';
$edit = false;

// DEFAULT VALUES
$title = "";
$subtitle = "";
$button_text = "";
$button_link = "";
$image = "";
$image_path = "";
$status = 1;

// FETCH DATA FOR EDIT
if($id != ""){
    $edit = true;
    $query = "SELECT * FROM banaer_slider WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if($row){
        $title = $row['title'];
        $subtitle = $row['subtitle'];
        $button_text = $row['button_text'];
        $button_link = $row['button_link'];
        $image = $row['image'];
        $image_path = $row['image_path']; // ✅ important
        $status = $row['status'];
    }
}

// INSERT / UPDATE
if(isset($_POST['save_banner'])){

    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $button_text = $_POST['button_text'];
    $button_link = $_POST['button_link'];
    $status = $_POST['status'];

    // 🔥 IMAGE UPLOAD FIXED
    if(!empty($_FILES['image']['name'])){

        $folder = "uploads/";

        if(!is_dir($folder)){
            mkdir($folder, 0755, true);
        }

        $image_name = time() . "_" . $_FILES['image']['name'];
        $image_path = $folder . $image_name;

        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);

        // DELETE OLD IMAGE
        if($edit && !empty($image_path) && file_exists($row['image_path'])){
            unlink($row['image_path']);
        }

    } else {
        $image_name = $image;
        $image_path = $row['image_path'] ?? "";
    }

    if($edit){
        // ✅ UPDATE
        $update = "UPDATE banaer_slider SET 
            title='$title',
            subtitle='$subtitle',
            button_text='$button_text',
            button_link='$button_link',
            image='$image_name',
            image_path='$image_path',
            status='$status'
            WHERE id='$id'";

        mysqli_query($conn, $update);

        echo "<script>alert('Banner Updated Successfully'); window.location='viewbanner.php';</script>";

    } else {
        // ✅ INSERT
        $insert = "INSERT INTO banaer_slider 
        (title, subtitle, button_text, button_link, image, image_path, status, created_at)
        VALUES 
        ('$title','$subtitle','$button_text','$button_link','$image_name','$image_path','$status',NOW())";

        mysqli_query($conn, $insert);

        echo "<script>alert('Banner Added Successfully'); window.location='viewbanner.php';</script>";
    }
}
?>

<!-- Content Wrapper -->
<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <h1><?= $edit ? "Edit Banner" : "Add Banner"; ?></h1>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">

        <div class="card-header">
          <h3 class="card-title">Banner Details</h3>
        </div>

        <form method="post" enctype="multipart/form-data">

          <div class="card-body">
            <div class="row">

              <!-- Title -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" name="title"
                    value="<?= $title ?>" required>
                </div>
              </div>

              <!-- Subtitle -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Subtitle</label>
                  <input type="text" class="form-control" name="subtitle"
                    value="<?= $subtitle ?>">
                </div>
              </div>

              <!-- Button Text -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Button Text</label>
                  <input type="text" class="form-control" name="button_text"
                    value="<?= $button_text ?>">
                </div>
              </div>

              <!-- Button Link -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Button Link</label>
                  <input type="url" class="form-control" name="button_link"
                    value="<?= $button_link ?>">
                </div>
              </div>

              <!-- Image -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Banner Image</label>
                  <input type="file" class="form-control" name="image" onchange="previewImage(event)">

                  <!-- OLD IMAGE SHOW -->
                  <?php if($edit && !empty($image_path) && file_exists($image_path)){ ?>
                    <p class="mt-2">Old Image:</p>
                    <img src="<?= $image_path ?>" width="120" style="border:1px solid #ccc; padding:5px;">
                  <?php } else if($edit){ ?>
                    <p class="text-danger mt-2">No Image Found</p>
                  <?php } ?>

                  <!-- NEW PREVIEW -->
                  <img id="preview" width="120" class="mt-2">

                </div>
              </div>

              <!-- Status -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status">
                    <option value="1" <?= ($status==1) ? "selected" : "" ?>>Active</option>
                    <option value="0" <?= ($status==0) ? "selected" : "" ?>>Inactive</option>
                  </select>
                </div>
              </div>

            </div>
          </div>

          <div class="card-footer">
            <button type="submit" name="save_banner" class="btn btn-primary">
              <i class="fas fa-save"></i> <?= $edit ? "Update" : "Save"; ?>
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