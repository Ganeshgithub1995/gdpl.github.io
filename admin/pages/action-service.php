<?php
session_start();
require_once '../config.php';
$action = $_REQUEST['submit'];
switch ($action) {
    case 'addservice':
        $ser_name = mysqli_real_escape_string($conn, $_POST['ser_name']);
        $ser_title = mysqli_real_escape_string($conn, $_POST['ser_title']);
        $ser_cont = mysqli_real_escape_string($conn, $_POST['ser_cont']);
        //  echo "INSERT INTO `services`(`ser_id`, `ser_title`, `ser_cont`, `ser_image`, `ser_status`) VALUES  (NULL, '$ser_title', '$ser_cont', '', '1')" ;
        // exit;
        $conn->query("INSERT INTO `services`(`ser_id`, `ser_name`,`ser_title`, `ser_cont`, `ser_image`, `ser_status`) VALUES  (NULL, '$ser_name', '$ser_title', '$ser_cont', '', '1')");
        $lid = $conn->insert_id;
        if (isset($_FILES['image'])) {
            $errors = array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
            $extensions = array("jpeg", "jpg", "png");
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../upload/" . $file_name);
                $conn->query("UPDATE services SET `ser_image`= '$file_name' WHERE ser_id='$lid'");
                header("Location:../service-listing.php");
            }
        }
        // $_SESSION['errormsg'] = 'Data inserted';
        // $_SESSION['errorValue'] = 'success';
        // header("Location:../service-listing.php");
        break;
    case 'updateservice':
        $ser_id = $_POST['ser_id'];
        $ser_name = mysqli_real_escape_string($conn, $_POST['ser_name']);
        $ser_title = mysqli_real_escape_string($conn, $_POST['ser_title']);
        $ser_cont = mysqli_real_escape_string($conn, $_POST['ser_cont']);
        // echo "UPDATE `services` SET `ser_name` = '$ser_name', `ser_title`= '$ser_title',`ser_cont`= '$ser_cont' WHERE `ser_id`='$ser_id'"; exit;
        $conn->query("UPDATE `services` SET `ser_name` = '$ser_name', `ser_title`= '$ser_title',`ser_cont`= '$ser_cont' WHERE `ser_id`='$ser_id'");
        if (isset($_FILES['image'])) {
            $errors = array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
            $extensions = array("jpeg", "jpg", "png");
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../upload/" . $file_name);
                //    echo "UPDATE slider SET `ser_image`= '$file_name'";
                //    exit;
                // echo "UPDATE slider SET `ser_image`= '$file_name' WHERE ser_id='$ser_id'"; exit;
                $conn->query("UPDATE services SET `ser_name` = '$ser_name', `ser_title`= '$ser_title',`ser_cont`= '$ser_cont', `ser_image`= '$file_name' WHERE ser_id='$ser_id'");
            }
        }
       
        header("Location:../service-listing.php");
        break;

    case 'Disable':
        $ser_id = $_REQUEST['ser_id'];
        $conn->query("UPDATE `services` SET ser_status='0' WHERE ser_id='$ser_id'");
        $_SESSION['errormsg'] = 'Disabled Sucessfully.';
        $_SESSION['errorValue'] = 'success';
        header("Location:../service-listing.php");
        break;
    case 'Enable':
        $ser_id = $_REQUEST['ser_id'];
        $conn->query("UPDATE `services` SET ser_status='1' WHERE ser_id='$ser_id'");
        $_SESSION['errormsg'] = 'Enabled sucessfully.';
        $_SESSION['errorValue'] = 'success';
        header("Location:../service-listing.php");
        break;
    case 'deleteservice':
        $ser_id = $_REQUEST['ser_id'];
        $conn->query("DELETE from `services` where ser_id='$ser_id'");
        $_SESSION['errormsg'] = 'Image deleted';
        $_SESSION['errorValue'] = 'success';
        header("Location:add-service?msg=" . md5('5') . "");
        break;
    default:
        $_SESSION['errormsg'] = 'Invalid page access.';
        $_SESSION['errorValue'] = 'warning';
}