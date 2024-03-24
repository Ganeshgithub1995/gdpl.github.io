<?php
session_start();
require_once '../config.php';
$action = $_REQUEST['submit'];

switch ($action) {
    case 'addwhslider':
        $conn->query("INSERT INTO `who_we_are_slider`(`whsl_id`,`whsl_image`, `whsl_status`) VALUES  (NULL, '', '1')");
        $lid = $conn->insert_id;
        if (isset($_FILES['whsl_image'])) {
            $errors = array();
            $file_name = $_FILES['whsl_image']['name'];
            $file_size = $_FILES['whsl_image']['size'];
            $file_tmp = $_FILES['whsl_image']['tmp_name'];
            $file_type = $_FILES['whsl_image']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['whsl_image']['name'])));
            $extensions = array("jpeg", "jpg", "png");
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../upload/" . $file_name);
                //    echo "UPDATE slider SET `whsl_image`= '$file_name'";
                //    exit;
                $conn->query("UPDATE who_we_are_slider SET `whsl_image`= '$file_name' WHERE whsl_id='$lid'");
                header("Location:../who_we_are_slider.php");
            }
        }
        break;
    case 'updatewhslider':
        $whsl_id = $_POST['whsl_id'];
        if (isset($_FILES['whsl_image'])) {
            $errors = array();
            $file_name = $_FILES['whsl_image']['name'];
            $file_size = $_FILES['whsl_image']['size'];
            $file_tmp = $_FILES['whsl_image']['tmp_name'];
            $file_type = $_FILES['whsl_image']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['whsl_image']['name'])));
            $extensions = array("jpeg", "jpg", "png");
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../upload/" . $file_name);
                //    echo "UPDATE slider SET `whsl_image`= '$file_name'";
                //    exit;
                $conn->query("UPDATE who_we_are_slider SET `whsl_image`= '$file_name' WHERE whsl_id='$whsl_id'");
                header("Location:../who_we_are_slider.php");
            }
        }
        // $conn->query("UPDATE `slider` SET whsl_image='$whsl_image' WHERE whsl_id = '$whsl_id'");
        // $_SESSION['errormsg'] = 'Image ' . $whsl_image . ' updated successfully.';
        // $_SESSION['errorValue'] = 'success';
        header("Location:../who_we_are_slider.php");
        break;

    case 'Disable':
        $whsl_id = $_REQUEST['whsl_id'];
        $conn->query("UPDATE `slider` SET whsl_status='0' WHERE whsl_id='$whsl_id'");
        $_SESSION['errormsg'] = 'Disabled Sucessfully.';
        $_SESSION['errorValue'] = 'success';
        header("Location: ../who_we_are_slider.php");
        break;
    case 'Enable':
        $whsl_id = $_REQUEST['whsl_id'];
        $conn->query("UPDATE `slider` SET whsl_status='1' WHERE whsl_id='$whsl_id'");
        $_SESSION['errormsg'] = 'Enabled sucessfully.';
        $_SESSION['errorValue'] = 'success';
        header("Location:../who_we_are_slider.php");
        break;
    case 'deleteslider':
        $whsl_id = $_REQUEST['whsl_id'];
        $conn->query("DELETE from `slider` where whsl_id='$whsl_id'");
        $_SESSION['errormsg'] = 'Image deleted';
        $_SESSION['errorValue'] = 'success';
        header("Location:../who_we_are_slider.php");
        break;
    default:
        $_SESSION['errormsg'] = 'Invalid page access.';
        $_SESSION['errorValue'] = 'warning';
}