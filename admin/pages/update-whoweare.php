<?php
include "../header.php";
include_once '../config.php';
$wh_id = $_REQUEST['wh_id'];
?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Update Who we are Page</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <?php
                $sql = "SELECT * FROM `who_we_are` where wh_id='$wh_id'";
                // echo "SELECT * FROM `who-we-are` where wh_id='$wh_id'"; exit;
                $result = mysqli_query($conn, $sql);
                // echo $result;exit;
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result)
                        ?>
                    <form class="who-we-are_form" action="action-who-we-are.php" method="POST" enctype="multipart/form-data"
                        autocomplete="off">

                        <div class="form-group">
                            <label>Title:</label><br>
                            <input type="text" id="wh_title" name="wh_title" style="border:1px solid black;"
                                value="<?php echo $row['wh_title'] ?>"><br>
                        </div>
                        <div class="form-group">
                            <label>Sub Title:</label><br>
                            <input type="text" id="wh_subtitle" name="wh_subtitle" style="border:1px solid black;"
                                value="<?php echo $row['wh_subtitle'] ?>"><br>
                        </div>
                        <div class="form-group">
                            <label>Content:</label><br>
                            <textarea id="wh_content" name="wh_content"><?php echo $row['wh_content'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Our Mission:</label><br>
                            <input type="text" id="wh_ourmission" name="wh_ourmission" style="border:1px solid black;"
                                value="<?php echo $row['wh_ourmission'] ?>"><br>
                        </div>
                        <div class="form-group">
                            <label>Our Vision:</label><br>
                            <textarea id="wh_ourvision" name="wh_ourvision"><?php echo $row['wh_ourvision'] ?></textarea>
                        </div>
                       
                        <input type="submit" name="submit" class="btn btn-primary" value="Update"/>
                        <input type="hidden" name="wh_id" class="btn btn-primary" value="<?php echo $row['wh_id']; ?>" />
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