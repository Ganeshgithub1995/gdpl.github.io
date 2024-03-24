<?php
session_start();
include('config.php');
if (empty($_SESSION['id'])) {
    header("location:index.php");
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

<body>

    <div id="logo">
        <span class="big-logo"><a href="Dashboard.php"><img src="images/logo2.png" class="img-fluid"
                    style="max-width:170px"></img></a></span>
        <span class="small-logo"><a href="Dashboard.php"><img src="images/logo2.png" class="img-fluid"
                    style="max-width:60px"></img></a></span>
    </div>
    <div id="left-menu">
        <ul style="height:800px!important;">

            <li class="active"><a href="Dashboard.php">
                    <i class="fa-solid fa-user"></i>
                    <span>Dashboard</span>
                </a></li>

            <li class="has-sub">
                <a href="#">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span>Home</span>
                </a>
                <ul>
                    <li><a href="slider.php">slider</a></li>
                    <li><a href="who_we_are.php">Who We Are</a></li>
                    <li><a href="who_we_are_slider.php">Who We Are Slider</a></li>
                    <li><a href="our_guiding.php">Our Guiding Principles</a></li>
                    <li><a href="our_expertise.php">Our Expertise</a></li>
                    <li><a href="pdf.php">PDF Attachments</a></li>
                </ul>
            </li>

            <li><a href="service-listing.php">
                    <i class="fa-brands fa-usps"></i>
                    <span>Services</span>
                </a>
            </li>
<!-- 
            <li class="has-sub"><a href="#">
                    <i class="fa-brands fa-usps"></i>
                    <span>Why Us</span>
                </a>
                <ul>
                    <li><a href="slider.php">slider</a></li>
                    <li><a href="#"> Item 2</a></li>
                    <li><a href="#"> Item 3</a></li>
                </ul>

            </li>

            <li class="has-sub">
                <a href="#">
                    <i class="fa-regular fa-user"></i>
                    <span>What we do</span>
                </a>
                <ul>
                    <li><a href="#"> Item 1</a></li>
                    <li><a href="#"> Item 2</a></li>
                    <li><a href="#"> Item 3</a></li>
                </ul>
            </li>

            </li>
            <li class="has-sub"><a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <span>Our Clients</span>
                </a>
                <ul>
                    <li><a href="#"> Item 1</a></li>
                    <li><a href="#"> Item 2</a></li>
                    <li><a href="#"> Item 3</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="#">
                    <i class="fa-solid fa-photo-film"></i>
                    <span>News Room</span>
                </a>
                <ul>
                    <li><a href="#"> Item 1</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="#">
                    <i class="fa-solid fa-photo-film"></i>
                    <span>Invester Center</span>
                </a>
                <ul>
                    <li><a href="#"> Item 1</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="#">
                    <i class="fa-solid fa-photo-film"></i>
                    <span>Carrers</span>
                </a>
                <ul>
                    <li><a href="#"> Item 1</a></li>
                </ul>
            </li>

            <li class="has-sub">
                <a href="#">
                    <i class="fa-solid fa-photo-film"></i>
                    <span>Contact Us</span>
                </a>
                <ul>
                    <li><a href="#"> Item 1</a></li>
                </ul>
            </li> -->

        </ul>
    </div>



    <div id="main-content">

        <div id="header">

            <div class="header-left float-left">

                <i id="toggle-left-menu" class="fa-solid fa-bars" style="color:white;"></i>
                <h3 style="color:white; font-weight:550;">Welcome-
                    <?php
                     echo $_SESSION['name'];
                    ?>
                </h3>

                <a href="logout.php">Sign Out<i class="fa fa-sign-out signout" aria-hidden="true"></i></a>

            </div>

        </div>
        <div id="page-container">