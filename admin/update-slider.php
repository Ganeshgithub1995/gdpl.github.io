<?php
include "header.php";
include_once 'config.php';
$sl_id = $_GET['sl_id'];
?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Update Slider Images</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form for show edit-->

                <?php
                $sql = "SELECT * FROM `slider` where sl_id='$sl_id'";
                // echo "SELECT * FROM `slider` where sl_id='$sl_id'"; exit;
                $result = mysqli_query($conn, $sql);
                // echo $result;exit;
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result)
                        ?>
                    <form class="slider_form" action="action-slider.php" method="POST" enctype="multipart/form-data"
                        autocomplete="off">

                        <div class="form-group">
                            <label>Title:</label><br>
                            <input type="text" id="sl_title" name="sl_title" style="border:1px solid black;"
                                value="<?php echo $row['sl_title'] ?>"><br>
                        </div>
                        <div class="form-group">
                            <label>Content:</label><br>
                            <textarea id="sl_content" name="sl_content"><?php echo $row['sl_content'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Post image</label>
                            <input type="file" name="image">
                            <img src="upload/<?php echo $row['sl_image'] ?>" height="100px">
                            <!-- <input type="hidden" name="image_old" value="<?php echo $row['sl_image'] ?>"> -->
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary" value="updateslider"/>
                        <input type="hidden" name="sl_id" class="btn btn-primary" value="<?php echo $row['sl_id']; ?>" />
                    </form>
                    <!-- Form End -->
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>