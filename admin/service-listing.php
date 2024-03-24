<?php include('header.php');
if (empty($_SESSION['id'])) {
    header('location:index.php');
}
?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">Service List Details</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-service.php">Add Service Names</a>
            </div>
        </div>
    </div>
</div>


<table class="table content-table" style="text-align:center; border: 1px black; overflow-x:auto;">
    <thead style="border: 1px black">
        <th>Sl. No.</th>
        <th>Service Names</th>
        <th>Service Title</th>
        <th>service Image</th>
        <th>service Cont</th>
        <th>service Status</th>
        <th colspan="2">Action</th>
    </thead>

    <?php
    include 'config.php';
    $sql = "SELECT * FROM `services` ORDER BY ser_id ASC";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        ?>
        <tbody>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $i++;
                ?>
                <tr style="border: 1px black;">
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <?php echo !empty($row["ser_name"])?$row["ser_name"]:''; ?>
                    </td>
                    <td>
                        <?php echo !empty($row["ser_title"])?$row["ser_title"]:''; ?>
                    </td>
                    <td>
                        <?php echo !empty($row["ser_image"])?$row["ser_image"]:''; ?>
                    </td>
                    <td>
                        <?php echo !empty($row["ser_cont"])?$row["ser_cont"]:''; ?>
                    </td>
                    <td>
                        <?php
                        if ($row["ser_status"] == '1') {
                            ?>
                            Active&nbsp;<a href="pages/action-service.php?ser_id=<?php echo $row['ser_id'];?>&submit=Disable" onClick="return confirm('Are You Sure want to Disable??')" class="btn btn-warning btn-xs" name="Click to Disable">&nbsp;<span class="glyphicon glyphicon-refresh"></span></a>
                            <?php
                        } else {
                            ?>
                            Disabled&nbsp;<a href="pages/action-service.php?ser_id=<?php echo $row['ser_id'];?>&submit=Enable" onClick="return confirm('Are You Sure want to Enable??')" class="btn btn-primary btn-xs" name="Click to Enable">&nbsp;<span class="glyphicon glyphicon-refresh"></span></a>
                            <?php
                        }
                        ?>
                    </td>
                    <td>
                        <a href="pages/update-services.php?ser_id=<?= $row['ser_id'] ?>"><i class="fa fa-edit"
                                style="color:green;"></i>Update</a>
                        <a href="pages/delete-service.php?ser_id=<?= $row['ser_id'] ?>"><i class="fa fa-trash" style="color:red;"></i>Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
<?php } ?>

</div>
</div>
</div>



<?php include('footer.php') ?>