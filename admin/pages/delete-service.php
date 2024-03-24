<?php
session_start();
include "../config.php";
if (empty($_SESSION['id'])) {
    header('location:index.php');
}
$ser_id = $_GET['ser_id']; //To get the data of each id
$sql = "DELETE FROM `services` WHERE ser_id='$ser_id'"; //delete query for each id
$result = $conn->query($sql); //connect and execute the operation 
if ($result == TRUE) { //conditions
    ?>
    <script type="text/javascript"> alert("Data Deleted successfully");
        window.open("http://localhost/gb_realestate/admin/service-listing.php", "_self");
    </script>

    <?php
} else {
    ?>
    <script type="text/javascript"> alert("Please try again");</script>
    <?php
}
$conn->close();
?>