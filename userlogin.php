<?php
require_once 'admin/config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GB Realestate Designs Pvt Ltd.</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php
    session_start();
    // require_once 'stadmin/config.php';
    include 'header.php';
    ?>

    <section style="padding:50px 0px 50px 0px;">
        <div class="container" style="Margin-top:80px;">
            <div class="row">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-4 col-md-4 login-box" style="box-shadow: 2px 2px 2px 2px grey;
    height: 350px;">
                    <div class="col-lg-12 login-key" style="font-size:30px; text-align:center;">
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </div>
                    <div class="col-lg-12 login-title text-center" style="color: #22bda0;
    font-weight: 600;
    font-size: 28px;">
                        USER LOGIN
                    </div>

                    <div class="col-lg-12 login-form">
                        <div class="col-lg-12 login-form">
                            <form class="loginform" name="login_frm" action="pages/action-stlogin.php" method="post">
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" name="stemail" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <input type="password" name="stpassword" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="vercode" class="form-control"
                                        placeholder="Verfication Code" autocomplete="off" required>
                                </div>
                                <div class="form-group small clearfix">
                                    <label class="checkbox-inline">Verification Code</label>
                                    &nbsp;&nbsp;<img src="captcha.php">
                                </div>
                                <div class="col-lg-12 loginbttm mt-3">
                                    <div class="col-lg-6 login-btm login-text">
                                    </div>
                                    <div class="col-lg-6 login-btm login-button">
                                        <button type="submit" name="Signin" class="btn btn-outline-primary"
                                            style="font-weight:550;">SIGN IN</button>
                                        <input type="hidden" name="submit" value="stLogin" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2"></div>
                </div>
            </div>
    </section>

    <?php include 'footer.php' ?>