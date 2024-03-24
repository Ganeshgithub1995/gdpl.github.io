<?php
include "config.php";

if (isset($_REQUEST['submit'])) {
    // delete data and images
    if ($_REQUEST['submit'] == "delete") {
        $sql = "SELECT * FROM `slider` WHERE `id` = " . $_REQUEST['id'];
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $sql = "DELETE FROM `slider` WHERE `id` = " . $_REQUEST['id'];
        mysqli_query($conn, $sql);
        unlink("upload/" . $row['image']);
        header("Location: slider.php");
    }
    // insert data and images
    else {
        $status = $_POST['status'];
        $sl_title = $_POST['sl_title'];
        $sl_content = $_POST['sl_content'];
        if ($_FILES['image']['size'] > 0) {
            $image = time() . "_" . $_FILES['image']['name'];
            $file_ext = explode(".", $image)[1]; // abc.png => [0]= 'abc' ,[1]='png'
            $extension = array("jpg", "jpeg", "png");
            if (in_array($file_ext, $extension) === false) {
                $error = "it is not in jpeg file";
            }
            if (empty($error) == true) {
                move_uploaded_file($_FILES['image']['tmp_name'], "upload/" . $image);
            } else {
                print_r($error);
                die();
            }

            $sql = "INSERT INTO `slider` (`sl_title`, `sl_content`, `status`,`image`) VALUES ('$sl_title', '$sl_content', '$status','$image')";
            if (mysqli_query($conn, $sql)) {
                header("Location:slider.php");
            } else {
                echo "it can not be passed";
            }
        }
    }
}


?>