<?php
session_start();
include "../config.php";
if (empty($_SESSION['id'])) {
    header('location:index.php');
}
$whsl_id = $_GET['whsl_id']; //To get the data of each id
$sql = "DELETE FROM `who_we_are_slider` WHERE whsl_id='$whsl_id'"; //delete query for each id
$result = $conn->query($sql); //connect and execute the operation 
if ($result == TRUE) { //conditions
    ?>
    <script type="text/javascript"> alert("Data Deleted successfully");
        window.open("http://localhost/gb_realestate/admin/who_we_are.php", "_self");
    </script>

    <?php
} else {
    ?>
    <script type="text/javascript"> alert("Please try again");</script>
    <?php
}
$conn->close();
?>