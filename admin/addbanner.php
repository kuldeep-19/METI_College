<?php
include('include/config.php');
include('include/header.php');
include('include/navbar.php');
include('include/sidebar.php');

// ✅ INSERT DATA
if(isset($_POST['save_banner'])){

    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $button_text = $_POST['button_text'];
    $button_link = $_POST['button_link'];
    $status = $_POST['status'];

   // IMAGE UPLOAD
$image_name = "";
$image_path = "";

if($_FILES['image']['name'] != ""){

   $folder = "uploads/";
    if(!is_dir($folder)){
        mkdir($folder, 0755, true);
    }
    $image_name = time() . "_" . $_FILES['image']['name'];
    $image_path = $folder . $image_name;
    move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
}

    // INSERT QUERY
    $query = "INSERT INTO banaer_slider 
(title, subtitle, button_text, button_link, image, image_path, status, created_at)
VALUES 
('$title','$subtitle','$button_text','$button_link','$image_name','$image_path','$status',NOW())";

    mysqli_query($conn, $query);

    echo "<script>alert('Banner Added Successfully'); window.location='viewbanner.php';</script>";
}
?>

<!-- Content Wrapper -->
<div class="content-wrapper">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <h1>Add Banner</h1>
    </div>
  </section>

  <!-- Main content -->
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
                  <input type="text" class="form-control" name="title" >
                </div>
              </div>

              <!-- Subtitle -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Subtitle</label>
                  <input type="text" class="form-control" name="subtitle">
                </div>
              </div>

              <!-- Button Text -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Button Text</label>
                  <input type="text" class="form-control" name="button_text" !require>
                </div>
              </div>

              <!-- Button Link -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Button Link</label>
                  <input type="url" class="form-control" name="button_link" !require>
                </div>
              </div>

              <!-- Image -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Banner Image</label>
                  <input type="file" class="form-control" name="image" >
                </div>
              </div>

              <!-- Status -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" >
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select>
                </div>
              </div>

            </div>
          </div>

          <div class="card-footer">
            <button type="submit" name="save_banner" class="btn btn-primary">
              <i class="fas fa-save"></i> Save Banner
            </button>
            <button type="reset" class="btn btn-secondary ml-2">Reset</button>
          </div>

        </form>

      </div>
    </div>
  </section>

</div>

<?php include('include/footer.php'); ?>