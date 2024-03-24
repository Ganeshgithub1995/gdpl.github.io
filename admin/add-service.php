<?php
include('header.php');
?>


<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add Services</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <!-- Form -->
                        <form class="slider_form" action="pages/action-service.php" method="POST"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Service Name:</label><br>
                                <input type="text" name="ser_name" style="border:1px solid black;"><br>
                            </div>
                            <div class="form-group">
                                <label>Title:</label><br>
                                <input type="text" name="ser_title" style="border:1px solid black;"><br>
                            </div>
                            <div class="form-group">
                                <label>Content:</label><br>
                                <textarea name="ser_cont"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Service image</label>
                                <input name="image" type="file" required>
                            </div>
                            <div class="form-group">
                                <label> Status</label>
                                <select class="pops" name="ser_status">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="addservice" />
                        </form>
                    </div>

                    <div class="col-md-6">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>