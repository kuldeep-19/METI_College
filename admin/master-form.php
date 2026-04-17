<?php
include('include/config.php');
include('include/crud-config.php');
include('include/crud-helper.php');

$section_key = $_GET['section'] ?? '';
if (!isset($crud_sections[$section_key])) {
    die("Invalid Section");
}

$config = $crud_sections[$section_key];
$id = $_GET['id'] ?? null;
$table = $config['table'];

$row = null;
if ($id) {
    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM $table WHERE id='$id'"));
} elseif(isset($config['single_record']) && $config['single_record']) {
    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM $table WHERE id=1"));
}

// Handle Save
if (isset($_POST['save_data'])) {
    if (performUpsert($conn, $config, $_POST, $_FILES, $id)) {
        echo "<script>alert('Data Saved Successfully'); window.location='" . $config['view_link'] . "';</script>";
    } else {
        echo "<script>alert('Error Saving Data: " . mysqli_error($conn) . "');</script>";
    }
}

include('include/header.php');
include('include/navbar.php');
include('include/sidebar.php');
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1><?= ($id || ($row && isset($config['single_record']))) ? 'Edit' : 'Add' ?> <?= $config['title'] ?></h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <form method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($config['fields'] as $name => $meta): ?>
                                <div class="<?= ($meta['type'] == 'textarea') ? 'col-md-12' : 'col-md-6' ?> mt-3">
                                    <label><?= $meta['label'] ?></label>
                                    
                                    <?php if ($meta['type'] == 'textarea'): ?>
                                        <textarea name="<?= $name ?>" class="form-control" rows="4" <?= ($meta['required'] ?? false) ? 'required' : '' ?>><?= $row[$name] ?? '' ?></textarea>
                                    
                                    <?php elseif ($meta['type'] == 'file'): ?>
                                        <input type="file" name="<?= $name ?>" class="form-control">
                                        <?php if (!empty($row[$name])): ?>
                                            <p class="mt-2">Current Image: <img src="<?= ($config['upload_path'] ?? 'uploads/') . $row[$name] ?>" width="100"></p>
                                        <?php endif; ?>
                                    
                                    <?php elseif ($meta['type'] == 'status'): ?>
                                        <select name="<?= $name ?>" class="form-control">
                                            <option value="1" <?= (isset($row[$name]) && $row[$name] == 1) ? 'selected' : '' ?>>Active</option>
                                            <option value="0" <?= (isset($row[$name]) && $row[$name] == 0) ? 'selected' : '' ?>>Inactive</option>
                                        </select>

                                    <?php else: ?>
                                        <input type="<?= $meta['type'] ?>" name="<?= $name ?>" class="form-control" 
                                               value="<?= $row[$name] ?? '' ?>" 
                                               <?= ($meta['required'] ?? false) ? 'required' : '' ?>
                                               <?= isset($meta['min']) ? 'min="'.$meta['min'].'"' : '' ?>
                                               <?= isset($meta['max']) ? 'max="'.$meta['max'].'"' : '' ?>>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>


                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="save_data" class="btn btn-primary">
                            <i class="fas fa-save"></i> Save Changes
                        </button>
                        <a href="<?= $config['view_link'] ?>" class="btn btn-default">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php include('include/footer.php'); ?>
