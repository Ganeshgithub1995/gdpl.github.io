<?php
include('header.php');
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add Details</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <form class="slider_form" action="pages/action_ourexpertise.php" method="POST"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Title:</label><br>
                                <input type="text" name="ex_title" style="border:1px solid black;"><br>
                            </div>
                            <div class="form-group">
                                <label>Content:</label><br>
                                <textarea name="ex_cont"></textarea>
                            </div>
                           
                            <input type="submit" name="submit" class="btn btn-primary" value="addexpertise" required />
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