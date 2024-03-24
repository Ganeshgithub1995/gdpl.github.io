<?php include('header.php');
if (empty($_SESSION['id'])) {
    header('location:index.php');
}
?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">Slider Details</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-slider.php">Add Images</a>
            </div>
        </div>
    </div>
</div>


<table class="table content-table" style="text-align:center; border: 1px black; overflow-x:auto;">
    <thead style="border: 1px black">
        <th>Sl. No.</th>
        <th>Title</th>
        <th>Content</th>
        <th>Slider Image</th>
        <th>Slider Status</th>
        <th colspan="2">Action</th>
    </thead>

    <?php
    include 'config.php';
    $sql = "SELECT * FROM `slider` ORDER BY sl_id ASC";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        ?>
        <tbody>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $i++;
                ?>
                <tr style="border: 1px black">
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <?php echo !empty($row["sl_title"])?$row["sl_title"]:''; ?>
                    </td>
                    <td>
                        <?php echo !empty($row["sl_content"])?$row["sl_content"]:''; ?>
                    </td>
                    <td>
                        <?php echo (!empty($row["sl_image"]) && (file_exists("upload/" . $row["sl_image"])))?'<img src="upload/'.$row["sl_image"].'" style="width:100px; height:100px;object-fit:contain;" />':''; ?>
                    </td>
                    <td>
                        <?php
                        if ($row["sl_status"] == '1') {
                            ?>
                            Active&nbsp;<a href="action-slider.php?sl_id=<?php echo $row['sl_id'];?>&submit=Disable" onClick="return confirm('Are You Sure want to Disable??')" class="btn btn-warning btn-xs" title="Click to Disable">&nbsp;<span class="glyphicon glyphicon-refresh"></span></a>
                            <?php
                        } else {
                            ?>
                            Disabled&nbsp;<a href="action-slider.php?sl_id=<?php echo $row['sl_id'];?>&submit=Enable" onClick="return confirm('Are You Sure want to Enable??')" class="btn btn-primary btn-xs" title="Click to Enable">&nbsp;<span class="glyphicon glyphicon-refresh"></span></a>
                            <?php
                        }
                        ?>
                    </td>
                    <td>
                        <a href="update-slider.php?sl_id=<?= $row['sl_id'] ?>"><i class="fa fa-edit"
                                style="color:green;"></i>Update</a>
                        <a href="delete.php?sl_id=<?= $row['sl_id'] ?>"><i class="fa fa-trash" style="color:red;"></i>Delete</a>
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