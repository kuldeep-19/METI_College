<?php
include('include/config.php');
include('include/header.php');
include('include/navbar.php');
include('include/sidebar.php');

// DEFAULT ID (single record)
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

// UPDATE ONLY
if(isset($_POST['save_content'])){

    $title = $_POST['title'];
    $description = $_POST['description'];
    $button_text = $_POST['button_text'];
    $button_link = $_POST['button_link'];

    // IMAGE UPLOAD
    if(!empty($_FILES['image']['name'])){
        $image_name = time() . "_" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/content-image/".$image_name);

        // DELETE OLD IMAGE
        if(!empty($image) && file_exists("uploads/content-image/".$image)){
            unlink("uploads/content-image/".$image);
        }

    } else {
        $image_name = $image; // keep old
    }

    $update = "UPDATE content_section SET 
        title='$title',
        description='$description',
        button_text='$button_text',
        button_link='$button_link',
        image='$image_name'
        WHERE id=1";

    mysqli_query($conn, $update);

    echo "<script>alert('Content Updated'); window.location='view-content.php';</script>";
}
?>

<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <h1>Update Content Section</h1>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">

        <div class="card-header">
          <h3 class="card-title">Content Details</h3>
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

              <!-- Button Text -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Button Text</label>
                  <input type="text" class="form-control" name="button_text"
                    value="<?= $button_text ?>">
                </div>
              </div>

              <!-- Description -->
              <div class="col-md-12">
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control" name="description" rows="4"><?= $description ?></textarea>
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
                  <label>Image</label>
                  <input type="file" class="form-control" name="image" onchange="previewImage(event)">

                  <?php if(!empty($image) && file_exists("Assets/upload/".$image)){ ?>
                    <p class="mt-2">Old Image:</p>
                    <img src="Assets/upload/<?= $image ?>" width="120">
                  <?php } ?>

                  <img id="preview" width="120" class="mt-2">
                </div>
              </div>

            </div>
          </div>

          <div class="card-footer">
            <button type="submit" name="save_content" class="btn btn-primary">
              <i class="fas fa-save"></i> Update
            </button>
          </div>

        </form>

      </div>
    </div>
  </section>

</div>

<?php include('include/footer.php'); ?>