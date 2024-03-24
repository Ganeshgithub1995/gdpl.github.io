<?php
session_start();
require_once '../config.php';
$action = $_REQUEST['submit'];
switch ($action) {
    case 'addexpertise':
        $ex_title = mysqli_real_escape_string($conn, $_POST['ex_title']);
        $ex_cont = mysqli_real_escape_string($conn, $_POST['ex_cont']);
        // echo("INSERT INTO `our_expertise`(`ex_id`, `gu_title`, `ex_title`, `ex_cont`) VALUES  (NULL, '$gu_title','$ex_title', '$ex_cont')");exit;
        $conn->query("INSERT INTO `our_expertise`(`ex_id`, `ex_title`, `ex_cont`) VALUES  (NULL,'$ex_title', '$ex_cont')");
        $_SESSION['errormsg'] = 'Data inserted';
        $_SESSION['errorValue'] = 'success';
        header("Location:../our_expertise.php");
        break;
    case 'updateexpertise':
        $ex_id = $_POST['ex_id'];
        $ex_title = mysqli_real_escape_string($conn, $_POST['ex_title']);
        $ex_cont = mysqli_real_escape_string($conn, $_POST['ex_cont']);
        // echo "UPDATE `our_expertise` SET `gu_title`= '$gu_title',`ex_title`= '$ex_title' WHERE `ex_id`='$ex_id'"; exit;
        $conn->query("UPDATE `our_expertise` SET `ex_title`= '$ex_title',`ex_cont`= '$ex_cont' WHERE `ex_id`='$ex_id'");
        header("Location:../our_expertise.php");
        break;

    case 'deleteourexpertise':
        $ex_id = $_REQUEST['ex_id'];
        $conn->query("DELETE from `our_expertise` where ex_id='$ex_id'");
        $_SESSION['errormsg'] = 'Image deleted';
        $_SESSION['errorValue'] = 'success';
        header("Location:../our_expertise.php");
        break;
    default:
        $_SESSION['errormsg'] = 'Invalid page access.';
        $_SESSION['errorValue'] = 'warning';
}