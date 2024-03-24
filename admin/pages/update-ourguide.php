<?php
include "../header.php";
include_once '../config.php';
$gu_id = $_REQUEST['gu_id'];
?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Update Our Guide</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <?php
                $sql = "SELECT * FROM `our_guiding` where gu_id='$gu_id'";
                // echo "SELECT * FROM `who-we-are` where gu_id='$gu_id'"; exit;
                $result = mysqli_query($conn, $sql);
                // echo $result;exit;
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result)
                        ?>
                    <form class="who-we-are_form" action="action_ourguide.php" method="POST" enctype="multipart/form-data"
                        autocomplete="off">
                        <div class="form-group">
                            <label>Sub Title:</label><br>
                            <input type="text" id="gu_subtitle" name="gu_subtitle" style="border:1px solid black;"
                                value="<?php echo $row['gu_subtitle'] ?>"><br>
                        </div>
                        <div class="form-group">
                            <label>Content:</label><br>
                            <textarea id="gu_content" name="gu_cont"><?php echo $row['gu_cont'] ?></textarea>
                        </div>
                       
                        <input type="submit" name="submit" class="btn btn-primary" value="updateguide"/>
                        <input type="hidden" name="gu_id" class="btn btn-primary" value="<?php echo $row['gu_id']; ?>" />
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