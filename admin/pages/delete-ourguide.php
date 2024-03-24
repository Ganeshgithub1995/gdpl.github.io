<?php
session_start();
include "../config.php";
if (empty($_SESSION['id'])) {
    header('location:index.php');
}
$gu_id = $_GET['gu_id']; //To get the data of each id
$sql = "DELETE FROM `our_guiding` WHERE gu_id='$gu_id'"; //delete query for each id
$result = $conn->query($sql); //connect and execute the operation 
if ($result == TRUE) { //conditions
    ?>
    <script type="text/javascript"> alert("Data Deleted successfully");
        window.open("http://localhost/gb_realestate/admin/our_guiding.php", "_self");
    </script>

    <?php
} else {
    ?>
    <script type="text/javascript"> alert("Please try again");</script>
    <?php
}
$conn->close();
?>