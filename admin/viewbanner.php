<?php
include('include/config.php');
include('include/header.php');
include('include/navbar.php');
include('include/sidebar.php');

// ✅ FETCH DATA
$query = "SELECT * FROM banaer_slider ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<!-- Content Wrapper -->
<div class="content-wrapper">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Banner List</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Banners</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">

        <div class="card-header">
          <h3 class="card-title">All Banners</h3>
          <div class="card-tools">
            <a href="addbanner.php" class="btn btn-primary btn-sm">
              <i class="fas fa-plus"></i> Add Banner
            </a>
          </div>
        </div>

        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>Button Text</th>
                <th>Button Link</th>
                <th>Image</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>

              <?php if(mysqli_num_rows($result) > 0){ ?>
                
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                  <tr>
                    <td><?= $row['id']; ?></td>

                    <td><?= htmlspecialchars($row['title']); ?></td>
                    <td><?= htmlspecialchars($row['subtitle']); ?></td>
                    <td><?= htmlspecialchars($row['button_text']); ?></td>

                    <td>
                      <a href="<?= htmlspecialchars($row['button_link']); ?>" target="_blank">Open</a>
                    </td>

                    <td>
                      <?php if(!empty($row['image'])){ ?>
                        <img src="uploads/banners/<?= $row['image']; ?>" width="80">
                      <?php } else { ?>
                        No Image
                      <?php } ?>
                    </td>

                    <td>
                      <?php if ($row['status'] == 1) { ?>
                        <span class="badge badge-success">Active</span>
                      <?php } else { ?>
                        <span class="badge badge-danger">Inactive</span>
                      <?php } ?>
                    </td>

                    <td><?= date('d M Y', strtotime($row['created_at'])); ?></td>

                    <td>
                      <a href="edit_banner.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-primary">
                        <i class="fas fa-edit"></i>
                      </a>

                      <a href="delete_banner.php?id=<?= $row['id']; ?>"
                         class="btn btn-sm btn-danger"
                         onclick="return confirm('Are you sure?')">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>

                  </tr>
                <?php } ?>

              <?php } else { ?>
                <tr>
                  <td colspan="9" class="text-center">No Data Found</td>
                </tr>
              <?php } ?>

            </tbody>

          </table>
        </div>

      </div>
    </div>
  </section>

</div>

<?php include('include/footer.php'); ?>

<!-- ✅ DataTable Init -->
<script>
$(document).ready(function () {
  $("#example1").DataTable({
    "responsive": true,
    "autoWidth": false
  });
});
</script>