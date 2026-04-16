<?php
include('include/config.php');
include('include/header.php');
include('include/navbar.php');
include('include/sidebar.php');

// ✅ FETCH SINGLE DATA
$query = "SELECT * FROM content_section WHERE id=1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<div class="content-wrapper">

  <!-- Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Content Section</h1>
        </div>
        <div class="col-sm-6">
          <a href="edit_content.php" class="btn btn-primary float-sm-right">
            <i class="fas fa-edit"></i> Update Content
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">

        <div class="card-header">
          <h3 class="card-title">Content Details</h3>
        </div>

        <div class="card-body">

          <?php if($row){ ?>

          <table class="table table-bordered table-striped">

            <tr>
              <th width="200">Title</th>
              <td><?= htmlspecialchars($row['title']); ?></td>
            </tr>

            <tr>
              <th>Description</th>
              <td><?= nl2br(htmlspecialchars($row['description'])); ?></td>
            </tr>

            <tr>
              <th>Button Text</th>
              <td><?= htmlspecialchars($row['button_text']); ?></td>
            </tr>

            <tr>
              <th>Button Link</th>
              <td>
                <a href="<?= htmlspecialchars($row['button_link']); ?>" target="_blank">
                  <?= htmlspecialchars($row['button_link']); ?>
                </a>
              </td>
            </tr>

            <tr>
              <th>Image</th>
              <td>
                <?php if(!empty($row['image'])){ ?>
                  <img src="Assets/upload/<?= $row['image']; ?>" width="120">
                <?php } else { ?>
                  No Image
                <?php } ?>
              </td>
            </tr>

            <tr>
              <th>Last Updated</th>
              <td><?= date('d M Y', strtotime($row['updated_at'] ?? date('Y-m-d'))); ?></td>
            </tr>

          </table>

          <?php } else { ?>

            <p class="text-center">No Content Found</p>

          <?php } ?>

        </div>

      </div>
    </div>
  </section>

</div>

<?php include('include/footer.php'); ?>