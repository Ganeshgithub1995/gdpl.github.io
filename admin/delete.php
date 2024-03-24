<?php
session_start();
include "config.php";
if(empty($_SESSION['id'])){
    header('location:index.php');
}
$sl_id = $_GET['sl_id'];//To get the data of each id

$sql = "DELETE FROM `slider` WHERE sl_id='$sl_id'";//delete query for each id

$result = $conn->query($sql);//connect and execute the operation 

if ($result == TRUE) {//conditions
?>
<script type="text/javascript"> alert("Data Deleted successfully");
    window.open("http://localhost/gb_realestate/admin/slider.php", "_self");
</script>

<?php
} else {
    ?>
<script type="text/javascript"> alert("Please try again");</script>
<?php
}
$conn->close();
    ?>