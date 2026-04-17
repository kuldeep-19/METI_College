<?php
include('include/config.php');
include('include/crud-config.php');
include('include/crud-helper.php');

$section_key = $_GET['section'] ?? '';
if (!isset($crud_sections[$section_key])) {
    die("Invalid Section");
}

$config = $crud_sections[$section_key];
$table = $config['table'];

// Handle Delete
if (isset($_GET['delete_id'])) {
    $del_id = mysqli_real_escape_string($conn, $_GET['delete_id']);
    // Handle image deletion if exists
    $existing = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM $table WHERE id='$del_id'"));
    foreach($config['fields'] as $name => $meta) {
        if($meta['type'] == 'file' && !empty($existing[$name])) {
            $path = ($config['upload_path'] ?? 'uploads/') . $existing[$name];
            if(file_exists($path)) unlink($path);
        }
    }
    mysqli_query($conn, "DELETE FROM $table WHERE id='$del_id'");
    header("Location: " . $config['view_link']);
    exit();
}

// Handle Status Toggle
if (isset($_GET['toggle_id']) && isset($_GET['status'])) {
    $tid = mysqli_real_escape_string($conn, $_GET['toggle_id']);
    $stat = mysqli_real_escape_string($conn, $_GET['status']);
    mysqli_query($conn, "UPDATE $table SET status='$stat' WHERE id='$tid'");
    header("Location: " . $config['view_link']);
    exit();
}

include('include/header.php');
include('include/navbar.php');
include('include/sidebar.php');

$query = "SELECT * FROM $table ORDER BY id DESC";
if(isset($config['single_record']) && $config['single_record']) {
    $query = "SELECT * FROM $table WHERE id=1";
}
$result = mysqli_query($conn, $query);
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage <?= $config['title'] ?></h1>
                </div>
                <div class="col-sm-6">
                    <?php if(!isset($config['single_record']) || mysqli_num_rows($result) == 0): ?>
                    <a href="<?= $config['form_link'] ?>" class="btn btn-primary float-sm-right">
                        <i class="fas fa-plus"></i> Add New
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <?php foreach($config['fields'] as $name => $meta): ?>
                                    <th><?= $meta['label'] ?></th>
                                <?php endforeach; ?>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <?php foreach($config['fields'] as $name => $meta): ?>
                                    <td>
                                        <?php if($meta['type'] == 'file'): ?>
                                            <?php if(!empty($row[$name])): ?>
                                                <img src="<?= ($config['upload_path'] ?? 'uploads/') . $row[$name] ?>" width="80">
                                            <?php else: ?>
                                                No Image
                                            <?php endif; ?>
                                        <?php elseif($meta['type'] == 'textarea'): ?>
                                            <?= substr(strip_tags($row[$name]), 0, 100) ?>...
                                        <?php else: ?>
                                            <?= $row[$name] ?>
                                        <?php endif; ?>
                                    </td>
                                <?php endforeach; ?>
                                <td>
                                    <?php if(isset($row['status'])): ?>
                                        <?php if($row['status'] == 1): ?>
                                            <span class="badge badge-success">Active</span>
                                            <a href="<?= $config['view_link'] ?>&toggle_id=<?= $row['id'] ?>&status=0" class="btn btn-xs btn-outline-danger ml-1"><i class="fas fa-toggle-on"></i></a>
                                        <?php else: ?>
                                            <span class="badge badge-danger">Inactive</span>
                                            <a href="<?= $config['view_link'] ?>&toggle_id=<?= $row['id'] ?>&status=1" class="btn btn-xs btn-outline-success ml-1"><i class="fas fa-toggle-off"></i></a>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        N/A
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="<?= $config['form_link'] ?>&id=<?= $row['id'] ?>" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                                    <?php if(!isset($config['single_record'])): ?>
                                    <a href="<?= $config['view_link'] ?>&delete_id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                            <?php if(mysqli_num_rows($result) == 0): ?>
                            <tr><td colspan="100" class="text-center">No Records Found</td></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include('include/footer.php'); ?>
