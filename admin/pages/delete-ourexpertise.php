<?php
session_start();
include "../config.php";
if (empty($_SESSION['id'])) {
    header('location:index.php');
}
$ex_id = $_GET['ex_id']; //To get the data of each id
$sql = "DELETE FROM `our_expertise` WHERE ex_id='$ex_id'"; //delete query for each id
$result = $conn->query($sql); //connect and execute the operation 
if ($result == TRUE) { //conditions
    ?>
    <script type="text/javascript"> alert("Data Deleted successfully");
        window.open("http://localhost/gb_realestate/admin/our_expertise.php", "_self");
    </script>

    <?php
} else {
    ?>
    <script type="text/javascript"> alert("Please try again");</script>
    <?php
}
$conn->close();
?>