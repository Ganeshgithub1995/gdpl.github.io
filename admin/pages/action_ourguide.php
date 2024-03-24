<?php
session_start();
require_once '../config.php';
$action = $_REQUEST['submit'];
switch ($action) {
    case 'addguide':
        $gu_subtitle = mysqli_real_escape_string($conn, $_POST['gu_subtitle']);
        $gu_cont = mysqli_real_escape_string($conn, $_POST['gu_cont']);
        // echo("INSERT INTO `our_guiding`(`gu_id`, `gu_title`, `gu_subtitle`, `gu_cont`) VALUES  (NULL, '$gu_title','$gu_subtitle', '$gu_cont')");exit;
        $conn->query("INSERT INTO `our_guiding`(`gu_id`, `gu_subtitle`, `gu_cont`) VALUES  (NULL,'$gu_subtitle', '$gu_cont')");
        $_SESSION['errormsg'] = 'Data inserted';
        $_SESSION['errorValue'] = 'success';
        header("Location:../our_guiding.php");
        break;
    case 'updateguide':
        $gu_id = $_POST['gu_id'];
        $gu_subtitle = mysqli_real_escape_string($conn, $_POST['gu_subtitle']);
        $gu_cont = mysqli_real_escape_string($conn, $_POST['gu_cont']);
        // echo "UPDATE `our_guiding` SET `gu_title`= '$gu_title',`gu_subtitle`= '$gu_subtitle' WHERE `gu_id`='$gu_id'"; exit;
        $conn->query("UPDATE `our_guiding` SET `gu_subtitle`= '$gu_subtitle',`gu_cont`= '$gu_cont' WHERE `gu_id`='$gu_id'");
        header("Location:../our_guiding.php");
        break;

    case 'deleteourguide':
        $gu_id = $_REQUEST['gu_id'];
        $conn->query("DELETE from `our_guiding` where gu_id='$gu_id'");
        $_SESSION['errormsg'] = 'Image deleted';
        $_SESSION['errorValue'] = 'success';
        header("Location:../our_guiding.php");
        break;
    default:
        $_SESSION['errormsg'] = 'Invalid page access.';
        $_SESSION['errorValue'] = 'warning';
}