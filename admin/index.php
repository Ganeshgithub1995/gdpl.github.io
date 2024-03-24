<?php session_start();
include('config.php');
if (isset($_POST['Signin'])) {
    $adminname = $_POST['adminname'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM `admin_login` WHERE `adminname`='$adminname' AND `password`='$password'";
    $result = $conn->query($sql);
    while($row = $result->fetch_object()){
    if ($result->num_rows > 0) {
        $_SESSION['id'] = $row->id;
        // $_SESSION['ram'] = session_id();
        $_SESSION['name']=$row->adminname;
        header('location:Dashboard.php');
    } else {
        echo '<script>alert("Login Failed")</script>';
        header('location:index.php');
    }
    }
    // while ($val = $result->fetch_object()) {
    //     $_SESSION['AdminLoginId'] = $_POST['adminname'];
    //     $_SESSION['id'] = $val->id;
    //     header('Location: Dashboard.php');
    // }


    ?>
    <?php

    echo "<script>alert('Login Failed..')</script>";

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        <?php include 'css/admin.css'; ?>
        <?php include 'css/media.css'; ?>
    </style>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://use.fontawesome.com/e017101791.js"></script>


    <!-- BOOTSTRAP LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <!-- ICON LINKS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css” />
    <!-- for all menu and arrow icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- for quote left and right icon -->


    <!-- GOOGLE-FONT API -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>

    <!-- SLIDER LINKS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- AOS ANIMATION INITIALISE -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <!-- Magnific popup -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- SWEET ALERT -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



</head>

<body style="background:url(images/csbg3.webp); background-position: center; background-repeat: no-repeat;
background-size: cover;">

    <section>
        <div class="container" style="Margin-top:80px;">
            <div class="row">
                <div class="col-lg-4 col-md-4"></div>
                <div class="col-lg-4 col-md-4 login-box">
                    <div class="col-lg-12 login-key">
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </div>
                    <div class="col-lg-12 login-title">
                        ADMIN PANEL
                    </div>

                    <div class="col-lg-12 login-form">
                        <div class="col-lg-12 login-form">
                            <form class="loginform" method="POST">

                                <div class="form-group">
                                    <label class="form-control-label">Admin Name</label>
                                    <input type="text" name="adminname" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <input type="password" name="password" class="form-control" autocomplete="off">
                                </div>

                                <div class="col-lg-12 loginbttm">
                                    <div class="col-lg-6 login-btm login-text">
                                        <!-- Error Message -->
                                    </div>
                                    <div class="col-lg-6 login-btm login-button">
                                        <button type="submit" name="Signin" class="btn btn-outline-primary"
                                            style="font-weight:550;">Sign In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2"></div>
                </div>
            </div>
    </section>


</body>

</html>