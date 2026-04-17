<?php

/**
 * Handle image upload
 */
function handleFileUpload($file, $upload_path, $old_image = "") {
    if (!empty($file['name'])) {
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0755, true);
        }

        $filename = time() . "_" . preg_replace("/[^a-zA-Z0-9.]/", "_", $file['name']);
        $target = $upload_path . $filename;

        if (move_uploaded_file($file['tmp_name'], $target)) {
            // Delete old file if exists
            if (!empty($old_image) && file_exists($upload_path . $old_image)) {
                unlink($upload_path . $old_image);
            }
            return $filename;
        }
    }
    return $old_image;
}

/**
 * Escape inputs
 */
function escapeInputs($conn, $data) {
    $escaped = [];
    foreach ($data as $key => $value) {
        $escaped[$key] = mysqli_real_escape_string($conn, $value);
    }
    return $escaped;
}

/**
 * Perform Upsert (Insert or Update)
 */
function performUpsert($conn, $config, $data, $files, $id = null) {
    $table = $config['table'];
    $fields = $config['fields'];
    $upload_path = $config['upload_path'] ?? 'uploads/';
    
    // Handle image upload first
    $image_field = null;
    foreach($fields as $name => $meta) {
        if($meta['type'] == 'file') {
            $image_field = $name;
            break;
        }
    }

    $old_image = "";
    if($id) {
        $existing = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM $table WHERE id='$id'"));
        if($existing && $image_field) {
            $old_image = $existing[$image_field];
        }
    }

    $image_name = $old_image;
    if($image_field && isset($files[$image_field])) {
        $image_name = handleFileUpload($files[$image_field], $upload_path, $old_image);
    }

    // Escape all text data
    $escaped_data = escapeInputs($conn, $data);
    
    // 1. Check if record exists first
    $check = false;
    if($id) {
        $check_res = mysqli_query($conn, "SELECT id FROM $table WHERE id='$id'");
        $check = mysqli_num_rows($check_res) > 0;
    } elseif(isset($config['single_record']) && $config['single_record']) {
        $check_res = mysqli_query($conn, "SELECT id FROM $table WHERE id=1");
        $check = mysqli_num_rows($check_res) > 0;
        $id = 1;
    }

    // 2. Build SQL arrays
    $cols = []; $vals = []; $updates = [];

    foreach($fields as $name => $meta) {
        if($meta['type'] == 'file') {
            $val = $image_name;
        } else {
            $val = $escaped_data[$name] ?? "";
        }
        
        $cols[] = "`$name`";
        $vals[] = "'$val'";
        $updates[] = "`$name`='$val'";
    }

    // 3. AUTO-HANDLE image_path IF COLUMN EXISTS
    $cols_check = mysqli_query($conn, "SHOW COLUMNS FROM $table LIKE 'image_path'");
    if(mysqli_num_rows($cols_check) > 0 && $image_field && !empty($image_name)) {
        $full_path = $upload_path . $image_name;
        if($check) {
            $updates[] = "`image_path`='$full_path'";
        } else {
            $cols[] = "`image_path`";
            $vals[] = "'$full_path'";
        }
    }

    // 4. AUTO-HANDLE updated_at IF COLUMN EXISTS
    $cols_check = mysqli_query($conn, "SHOW COLUMNS FROM $table LIKE 'updated_at'");
    if(mysqli_num_rows($cols_check) > 0 && $check) {
        $updates[] = "`updated_at`=NOW()";
    }

    // 5. Build Final SQL
    if($check) {
        $sql = "UPDATE $table SET " . implode(", ", $updates) . " WHERE id='$id'";
    } else {
        if(isset($config['single_record']) && $config['single_record']) {
            $sql = "INSERT INTO $table (id, " . implode(", ", $cols) . ") VALUES (1, " . implode(", ", $vals) . ")";
        } else {
            $sql = "INSERT INTO $table (" . implode(", ", $cols) . ") VALUES (" . implode(", ", $vals) . ")";
        }
    }

    return mysqli_query($conn, $sql);
}
?>
