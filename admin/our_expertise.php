<?php include('header.php');
if (empty($_SESSION['id'])) {
    header('location:index.php');
}
?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">Our Expertise Details</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add_expertise.php">Add Details</a>
            </div>
        </div>
    </div>
</div>


<table class="table content-table" style="text-align:center; border: 1px black; overflow-x:auto;">
    <thead style="border: 1px black">
        <th>Sl. No.</th>
        <th>Title</th>
        <th>Content</th>
        <th colspan="2">Action</th>
    </thead>

    <?php
    include 'config.php';
    $sql = "SELECT * FROM `our_expertise`";
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
                        <?php echo !empty($row["ex_title"])?$row["ex_title"]:''; ?>
                    </td>
                    <td>
                        <?php echo !empty($row["ex_cont"])?$row["ex_cont"]:''; ?>
                    </td>
                    <td>
                        <a href="pages/update-ourexpertise.php?ex_id=<?= $row['ex_id'] ?>"><i class="fa fa-edit"
                                style="color:green;"></i>Update</a>
                        <a href="pages/delete-ourexpertise.php?ex_id=<?= $row['ex_id'] ?>"><i class="fa fa-trash" style="color:red;"></i>Delete</a>
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