<?php
include "../header.php";
include_once '../config.php';
$ex_id = $_REQUEST['ex_id'];
?>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Update Our Guide</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <?php
                $sql = "SELECT * FROM `our_expertise` where ex_id='$ex_id'";
                // echo "SELECT * FROM `who-we-are` where ex_id='$ex_id'"; exit;
                $result = mysqli_query($conn, $sql);
                // echo $result;exit;
                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result)
                        ?>
                    <form class="who-we-are_form" action="action_ourexpertise.php" method="POST" enctype="multipart/form-data"
                        autocomplete="off">
                        <div class="form-group">
                            <label>Title:</label><br>
                            <input type="text" id="ex_title" name="ex_title" style="border:1px solid black;"
                                value="<?php echo $row['ex_title'] ?>"><br>
                        </div>
                        <div class="form-group">
                            <label>Content:</label><br>
                            <textarea id="ex_cont" name="ex_cont"><?php echo $row['ex_cont'] ?></textarea>
                        </div>

                        <input type="submit" name="submit" class="btn btn-primary" value="updateexpertise" />
                        <input type="hidden" name="ex_id" class="btn btn-primary" value="<?php echo $row['ex_id']; ?>" />
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