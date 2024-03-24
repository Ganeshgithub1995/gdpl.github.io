<?php include('header.php');
if (empty($_SESSION['id'])) {
    header('location:index.php');
}
?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4">
                <!-- Form -->
                <?php
                if (!empty($_GET['whsl_id'])) {
                    $whsl_id = $_GET['whsl_id'];
                } else {
                    $whsl_id = '';
                }
                $results = $conn->query("SELECT * FROM who_we_are_slider WHERE whsl_id = '$whsl_id'");
                $row = $results->fetch_object();
                ?>
                <form class="slider_form" action="pages/action-whslider.php" method="POST"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Post Slider image</label>
                        <input name="whsl_image" type="file" required>
                    </div>
                    <div class="form-group">
                        <label> Status</label>
                        <select class="pops" name="whsl_status">
                            <option value="0">Active</option>
                            <option value="1">Inactive</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Add Whslider" required />
                    <?php if (!empty($_GET['whsl_id'])) { ?>
                        <input type="hidden" name="submit" value="updatewhslider" />
                        <input type="hidden" name="whsl_id" value="<?= $row->whsl_id; ?>" />
                    <?php } else { ?>
                        <input type="hidden" name="submit" value="addwhslider" />
                    <?php } ?>
                </form>
            </div>
            <div class="col-md-8 col-lg-8">
                <table class="table content-table" style="text-align:center; border: 1px black; overflow-x:auto;">
                    <thead style="border: 1px black">
                        <th>Sl. No.</th>
                        <th>Slider Image</th>
                        <th>Slider Status</th>
                        <th colspan="2">Action</th>
                    </thead>

                    <?php
                    include 'config.php';
                    $sql = "SELECT * FROM `who_we_are_slider`";
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
                                        <?php echo (!empty($row["whsl_image"]) && (file_exists("upload/" . $row["whsl_image"]))) ? '<img src="upload/' . $row["whsl_image"] . '" style="width:100px; height:100px;object-fit:contain;" />' : ''; ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($row["whsl_status"] == '1') {
                                            ?>
                                            Active&nbsp;<a
                                                href="pages/action-who-we-are.php?whsl_id=<?php echo $row['whsl_id']; ?>&submit=Disable"
                                                onClick="return confirm('Are You Sure want to Disable??')"
                                                class="btn btn-warning btn-xs" title="Click to Disable">&nbsp;<span
                                                    class="glyphicon glyphicon-refresh"></span></a>
                                            <?php
                                        } else {
                                            ?>
                                            Disabled&nbsp;<a
                                                href="pages/action-who-we-are.php?whsl_id=<?php echo $row['whsl_id']; ?>&submit=Enable"
                                                onClick="return confirm('Are You Sure want to Enable??')"
                                                class="btn btn-primary btn-xs" title="Click to Enable">&nbsp;<span
                                                    class="glyphicon glyphicon-refresh"></span></a>
                                            <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="?whsl_id=<?= $row['whsl_id']; ?>"><i class="fa fa-edit"
                                                style="color:green;"></i>Update</a>
                                        <a href="pages/delete-whoweareslider.php?whsl_id=<?= $row['whsl_id'] ?>"><i
                                                class="fa fa-trash" style="color:red;"></i>Delete</a>
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
</div>
</div>




<?php include('footer.php') ?>