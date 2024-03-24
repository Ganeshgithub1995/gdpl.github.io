<?php
session_start();
require_once 'config.php';
$action = $_REQUEST['submit'];
switch ($action) {
    case 'addslider':
        // $br_name = mysqli_real_escape_string( $db, $_POST[ 'br_name' ] );
        $sl_title = mysqli_real_escape_string($conn, $_POST['sl_title']);
        $sl_content = mysqli_real_escape_string($conn, $_POST['sl_content']);
        // echo "INSERT INTO `slider`(`sl_id`, `sl_title`, `sl_content`, `sl_image`, `sl_status`) VALUES  (NULL, '$sl_title', '$sl_content', '', '1')" ;
        // exit;
        $conn->query("INSERT INTO `slider`(`sl_id`, `sl_title`, `sl_content`, `sl_image`, `sl_status`) VALUES  (NULL, '$sl_title', '$sl_content', '', '1')");
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
                move_uploaded_file($file_tmp, "upload/" . $file_name);
                //    echo "UPDATE slider SET `sl_image`= '$file_name'";
                //    exit;
                $conn->query("UPDATE slider SET `sl_image`= '$file_name' WHERE sl_id='$lid'");
                header("Location:add-slider.php");
            }
        }
        break;
    case 'updateslider':
        $sl_id = $_POST['sl_id'];
        $sl_title = mysqli_real_escape_string($conn, $_POST['sl_title']);
        $sl_content = mysqli_real_escape_string($conn, $_POST['sl_content']);
        // echo "UPDATE `slider` SET `sl_title`= '$sl_title',`sl_content`= '$sl_content' WHERE `sl_id`='$sl_id'"; exit;
        $conn->query("UPDATE `slider` SET `sl_title`= '$sl_title',`sl_content`= '$sl_content' WHERE `sl_id`='$sl_id'");
        if (isset($_FILES['image'])) {
            $errors = array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
            $extensions = array("jpeg", "jpg", "png");
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "upload/" . $file_name);
                //    echo "UPDATE slider SET `sl_image`= '$file_name'";
                //    exit;
                // echo "UPDATE slider SET `sl_image`= '$file_name' WHERE sl_id='$sl_id'"; exit;
                $conn->query("UPDATE slider SET `sl_image`= '$file_name' WHERE sl_id='$sl_id'");
            }
        }
        // $conn->query("UPDATE `slider` SET sl_image='$sl_image' WHERE sl_id = '$sl_id'");
        // $_SESSION['errormsg'] = 'Image ' . $sl_image . ' updated successfully.';
        // $_SESSION['errorValue'] = 'success';
        header("Location:slider.php");
        break;

    case 'Disable':
        $sl_id = $_REQUEST['sl_id'];
        $conn->query("UPDATE `slider` SET sl_status='0' WHERE sl_id='$sl_id'");
        $_SESSION['errormsg'] = 'Disabled Sucessfully.';
        $_SESSION['errorValue'] = 'success';
        header("Location: slider.php");
        break;
    case 'Enable':
        $sl_id = $_REQUEST['sl_id'];
        $conn->query("UPDATE `slider` SET sl_status='1' WHERE sl_id='$sl_id'");
        $_SESSION['errormsg'] = 'Enabled sucessfully.';
        $_SESSION['errorValue'] = 'success';
        header("Location:slider.php");
        break;
    case 'deleteslider':
        $sl_id = $_REQUEST['sl_id'];
        $conn->query("DELETE from `slider` where sl_id='$sl_id'");
        $_SESSION['errormsg'] = 'Image deleted';
        $_SESSION['errorValue'] = 'success';
        header("Location:add-slider?msg=" . md5('5') . "");
        break;
    default:
        $_SESSION['errormsg'] = 'Invalid page access.';
        $_SESSION['errorValue'] = 'warning';
}