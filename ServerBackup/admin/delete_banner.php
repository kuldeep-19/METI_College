<?php
include('include/config.php');


if(isset($_GET['id']) && $_GET['id'] != ""){

    $id = $_GET['id'];

  
    $query = "SELECT image FROM banaer_slider WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if($row){
        $image = $row['image'];

       
        if(!empty($image) && file_exists("uploads/banners/".$image)){
            unlink("uploads/banners/".$image);
        }

       
        $delete = "DELETE FROM banaer_slider WHERE id='$id'";
        mysqli_query($conn, $delete);

        echo "<script>alert('Banner Deleted Successfully'); window.location='viewbanner.php';</script>";
    } else {
        echo "<script>alert('Record Not Found'); window.location='viewbanner.php';</script>";
    }

} else {
    echo "<script>alert('Invalid Request'); window.location='viewbanner.php';</script>";
}
?>