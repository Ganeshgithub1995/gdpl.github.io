<?php
include "../header.php";
include_once '../config.php';
$ser_id = $_REQUEST['ser_id'];
?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Update Service</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form for show edit-->

                <?php
                $sql = "SELECT * FROM `services` where ser_id='$ser_id'";
                // echo "SELECT * FROM `slider` where ser_id='$ser_id'"; exit;
                $result = mysqli_query($conn, $sql);
                // echo $result;exit;
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result)
                        ?>
                    <form class="slider_form" action="action-service.php" method="POST" enctype="multipart/form-data"
                        autocomplete="off">

                        <div class="form-group">
                            <label>Service name:</label><br>
                            <input type="text" id="ser_name" name="ser_name" style="border:1px solid black;"
                                value="<?php echo $row['ser_name'] ?>"><br>
                        </div>
                        
                        <div class="form-group">
                            <label>Service Title:</label><br>
                            <input type="text" id="ser_title" name="ser_title" style="border:1px solid black;"
                                value="<?php echo $row['ser_title'] ?>"><br>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Post image</label>
                            <input type="file" name="image">
                            <img src="../upload/<?php echo $row['ser_image'] ?>" height="100px">
                            <!-- <input type="hidden" name="image_old" value="<?php echo $row['ser_image'] ?>"> -->
                        </div>
                        <div class="form-group">
                            <label>Service Content:</label><br>
                            <textarea id="ser_content" name="ser_cont"><?php echo $row['ser_cont'] ?></textarea>
                        </div>
                        
                        <input type="submit" name="submit" class="btn btn-primary" value="updateservice"/>
                        <input type="hidden" name="ser_id" class="btn btn-primary" value="<?php echo $row['ser_id']; ?>" />
                    </form>
                    <!-- Form End -->
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include '../footer.php'; ?>