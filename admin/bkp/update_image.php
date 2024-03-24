<?php
include "config.php";
if (isset($_REQUEST['submit'])) {
    // Update data & images
    if ($_REQUEST['submit'] == "Update") {
        $oldimage = $_POST['oldimage'];
        $status = $_POST['status'];
        $new_image = $_FILES['image']['name'];
        $old_image = $_POST['image_old'];

        if ($new_image != '') {
            $update_filename = $_FILES['image']['name'];
        } else {
            $update_filename = $old_image;
        }
    }

    if (file_exists("upload/" . $_FILES['image']['name'])) {
        $filename = $_FILES['image']['name'];
        $_SESSION['status'] = 'Image Already exists' . $filename;
        header('location:update.php');
    } else {
        $sql = "UPDATE `slider` SET `status`='$status',`image`='$update_filename' WHERE id = '$oldimage'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            if ($_FILES['image']['name'] != '') {
                move_uploaded_file($_FILES['image']['tmp_name'], "upload/" . $_FILES['image']['name']);
                unlink("upload/" . $old_image);
            }
            $_SESSION['status'] = 'Data Updated successfully.......';
            header('location:slider.php');
        } else {
            $_SESSION['status'] = 'Data Not updated........';
            header('location:slider.php');
        }
    }
}
?>