<?php
include "config.php";


/* =========================
   INSERT / UPDATE
========================= */
if(isset($_POST['save'])){

    $id = $_POST['id'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $button = $_POST['button'];
    $link = $_POST['button_link'];

    if($_FILES['image']['name']!=""){
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "Assets/image/".$image);
    }

    if($id==""){
        // INSERT
        mysqli_query($conn,"INSERT INTO banaer_slider(title,subtitle,button_text,button_link,image)
        VALUES('$title','$subtitle','$button','$link','$image')");
    } else {
        // UPDATE
        mysqli_query($conn,"UPDATE banaer_slider SET 
            title='$title',
            subtitle='$subtitle',
            button_text='$button',
            button_link='$link'
            WHERE id=$id");

        if(isset($image)){
            mysqli_query($conn,"UPDATE banaer_slider SET image='$image' WHERE id=$id");
        }
    }
}

/* =========================
   DELETE
========================= */
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn,"DELETE FROM banaer_slider WHERE id=$id");
}

/* =========================
   STATUS TOGGLE
========================= */
// STATUS TOGGLE (COMMON FOR BOTH TABLES)
if(isset($_GET['toggle']) && isset($_GET['type'])){
    $id = $_GET['toggle'];
    $status = $_GET['status'];
    $type = $_GET['type'];

    if($type == 'slider'){
        mysqli_query($conn,"UPDATE banaer_slider SET status=$status WHERE id=$id");
    }

    if($type == 'inquiry'){
        mysqli_query($conn,"UPDATE inquiries SET status=$status WHERE id=$id");
    }

    // prevent repeat on refresh
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

/* =========================
   EDIT FETCH
========================= */
$editData = null;
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $editData = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM banaer_slider WHERE id=$id"));
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Slider Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <div class="container">

        <h2>Slider CMS</h2>

        <!-- ================= FORM ================= -->
        <form method="POST" enctype="multipart/form-data" class="mb-4">

            <input type="hidden" name="id" value="<?php echo $editData['id'] ?? ''; ?>">

            <div class="row">
                <div class="col">
                    <input class="form-control" name="title" placeholder="Title"
                        value="<?php echo $editData['title'] ?? ''; ?>">
                </div>

                <div class="col">
                    <input class="form-control" name="subtitle" placeholder="Subtitle"
                        value="<?php echo $editData['subtitle'] ?? ''; ?>">
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col">
                    <input class="form-control" name="button" placeholder="Button Text"
                        value="<?php echo $editData['button_text'] ?? ''; ?>">
                </div>

                <div class="col">
                    <input class="form-control" name="button_link" placeholder="Button Link"
                        value="<?php echo $editData['button_link'] ?? ''; ?>">
                </div>
            </div>

            <br>

            <input type="file" name="image" class="form-control">

            <?php if(!empty($editData['image'])){ ?>
            <img src="uploads/<?php echo $editData['image']; ?>" width="120" class="mt-2">
            <?php } ?>

            <br><br>

            <button class="btn btn-primary" name="save">
                <?php echo $editData ? 'Update Slider' : 'Add Slider'; ?>
            </button>

        </form>

        <!-- ================= TABLE ================= -->

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>

            <?php
                $res = mysqli_query($conn,"SELECT * FROM banaer_slider ORDER BY id DESC");

                while($row = mysqli_fetch_assoc($res)){
                ?>

            <tr>
                <td>
                    <?php echo $row['id']; ?>
                </td>

                <td>
                    <img src="uploads/<?php echo $row['image']; ?>" width="80">
                </td>

                <td>
                    <?php echo $row['title']; ?>
                </td>

                <td>
                    <?php if($row['status']==1){ ?>
                    <a class="btn btn-success btn-sm"
                        href="?toggle=<?php echo $row['id']; ?>&status=0&type=slider">ON</a>
                    <?php } else { ?>
                    <a class="btn btn-secondary btn-sm"
                        href="?toggle=<?php echo $row['id']; ?>&status=1&type=slider">OFF</a>
                    <?php } ?>
                </td>

                <td>
                    <a class="btn btn-warning btn-sm" href="?edit=<?php echo $row['id']; ?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="?delete=<?php echo $row['id']; ?>"
                        onclick="return confirm('Delete?')">Delete</a>
                </td>
            </tr>

            <?php } ?>

        </table>

    </div>



    <div class="container">
        <h2>All Inquiries</h2>

        <table border="1" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>subject</th>
                <th>Message</th>
                <th>Status</th>
            </tr>

            <?php
                $res = mysqli_query($conn,"SELECT * FROM inquiries ORDER BY id DESC");

                while($row = mysqli_fetch_assoc($res)){
                ?>

            <tr>
                <td>
                    <?php echo $row['id']; ?>
                </td>
                <td>
                    <?php echo $row['name']; ?>
                </td>
                <td>
                    <?php echo $row['email']; ?>
                </td>
                <td>
                    <?php echo $row['phone']; ?>
                </td>
                <td>
                    <?php echo $row['subject']; ?>
                </td>
                <td>
                    <?php echo $row['message']; ?>
                </td>

                <td>
                    <?php if($row['status']==0){ ?>
                    <a href="?toggle=<?php echo $row['id']; ?>&status=1&type=inquiry"
                        onclick="return confirm('Mark as Contacted?')"
                        style="color:red; text-decoration:none; font-weight:bold;">
                        🔴 New
                    </a>
                    <?php } else { ?>
                    <a href="?toggle=<?php echo $row['id']; ?>&status=0&type=inquiry"
                        onclick="return confirm('Mark as New again?')"
                        style="color:green; text-decoration:none; font-weight:bold;">
                        🟢 Contacted
                    </a>
                    <?php } ?>
                </td>
            </tr>

            <?php } ?>
        </table>
    </div>


</body>

</html>