<?php
session_start();
require_once '../config.php';
$action = $_REQUEST['submit'];
switch ($action) {
    case 'addwhoweare':
        $wh_title = mysqli_real_escape_string($conn, $_POST['wh_title']);
        $wh_subtitle = mysqli_real_escape_string($conn, $_POST['wh_subtitle']);
        $wh_content = mysqli_real_escape_string($conn, $_POST['wh_content']);
        $wh_ourmission = mysqli_real_escape_string($conn, $_POST['wh_ourmission']);
        $wh_ourvision = mysqli_real_escape_string($conn, $_POST['wh_ourvision']);
        // echo "INSERT INTO `who_we_are`(`wh_id`, `wh_title`, `wh_subtitle`, `wh_content`,`wh_ourmission`,`wh_ourvision`,`wh_status`) VALUES  (NULL, '$wh_title','$wh_subtitle', '$wh_content','$wh_ourmission','$wh_ourvision', '1')";exit;
        $conn->query("INSERT INTO `who_we_are`(`wh_id`, `wh_title`, `wh_subtitle`, `wh_content`,`wh_ourmission`,`wh_ourvision`,`wh_status`) VALUES  (NULL, '$wh_title','$wh_subtitle', '$wh_content','$wh_ourmission','$wh_ourvision', '1')");
        $_SESSION['errormsg'] = 'Data inserted';
        $_SESSION['errorValue'] = 'success';
        header("Location:../who_we_are.php");
        break;
    case 'Update':
        $wh_id = $_POST['wh_id'];
        $wh_title = mysqli_real_escape_string($conn, $_POST['wh_title']);
        $wh_subtitle = mysqli_real_escape_string($conn, $_POST['wh_subtitle']);
        $wh_content = mysqli_real_escape_string($conn, $_POST['wh_content']);
        $wh_ourmission = mysqli_real_escape_string($conn, $_POST['wh_ourmission']);
        $wh_ourvision = mysqli_real_escape_string($conn, $_POST['wh_ourvision']);
        // echo "UPDATE `who_we_are` SET `wh_title`= '$wh_title',`wh_subtitle`= '$wh_subtitle' WHERE `wh_id`='$wh_id'"; exit;
        $conn->query("UPDATE `who_we_are` SET `wh_title`= '$wh_title',`wh_subtitle`= '$wh_subtitle',`wh_content`= '$wh_content',`wh_ourmission`= '$wh_ourmission',`wh_ourvision`= '$wh_ourvision' WHERE `wh_id`='$wh_id'");
        header("Location:../who_we_are.php");
        break;

    case 'deletewhoweare':
        $wh_id = $_REQUEST['wh_id'];
        $conn->query("DELETE from `who_we_are` where wh_id='$wh_id'");
        $_SESSION['errormsg'] = 'Image deleted';
        $_SESSION['errorValue'] = 'success';
        header("Location:../who_we_are.php");
        break;
    default:
        $_SESSION['errormsg'] = 'Invalid page access.';
        $_SESSION['errorValue'] = 'warning';
}