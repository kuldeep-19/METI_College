<?php
include "config.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    $query = "INSERT INTO inquiries(name,email,phone,subject,message)
              VALUES('$name','$email','$phone','$subject','$message')";

    if(mysqli_query($conn,$query)){
        echo "success";
    } else {
        echo "error";
    }
}
?>