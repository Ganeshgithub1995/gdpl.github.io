<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>GB Realestate Designs Pvt Ltd.</title>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"> -->
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://use.fontawesome.com/e017101791.js"></script> -->

<!-- Style Sheet -->
<!-- <link rel="stylesheet" href="css/style.css"> -->
<!-- <link rel="stylesheet" href="css/media.css"> -->
<style>
    <?php include 'css/style.css'; ?>
</style>
<style>
    <?php include 'css/media.css'; ?>
</style>
<link rel="stylesheet" href="css/jquery.fancybox.min.css">
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

<style>
    .drop-content {
        width: 230px;
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .drop-content a {
        display: block;
        padding: 8px;
        text-decoration: none;
        color: #333;
    }

    .drop-content a:hover {
        background-color: #f58c23;
    }
</style>
</head>

<body id="myPage" style="overflow-x: hidden;" data-aos-easing="ease-in-out" data-aos-duration="1000">

    <header class="header" id="header">

        <div id="navbar-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 nav-info-wrap">
                        <div class="nav-info-box">
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:information@GDPL.in">
                                <span>information@gdpl.in</span>
                            </a>
                        </div>
                        <div class="nav-info-box">
                            <i class="fa fa-map-marker"></i>
                            <span>VSS Nagar, Mancheswar, Rasulgarh, Bhubaneswar,Odisha - 751007, India</span>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 nav-social-links">
                        <a href="userlogin.php" target="_blank">Sign In&nbsp;<i class="fa fa-sign-in"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container navy">
            <div class="row">

                <div class="col-xs-2 col-sm-12 col-md-2 col-lg-2 ">
                    <a href="index"><img class="logo img-fluid" src="images/logo.png">
                    </a>
                </div>
                <div class="col-xs-10 col-sm-12 col-md-10 col-lg-10">
                    <nav id="navbar" class="navbar navbar-expand-sm">

                        <div class="container-fluid">
                            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">

                                <ul class="navbar-nav" id="navy">
                                    <li class="nav-item"><a class="nav-link" href="index">
                                            Home</a>
                                    </li>

                                    <li class="nav-item"><a class="nav-link" href="about">About Us</a>

                                    </li>

                                    <li class="nav-item"><a class="nav-link" href="whyus"> Why Us</a>
                                    </li>
                                  
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Services<i class="fas fa-angle-down hm"></i></a>
                                        <?php
                                        $seresults = $conn->query("SELECT * FROM `services` WHERE ser_status='1' ORDER BY ser_id ASC");
                                        $service = 0;
                                        if ($seresults->num_rows > 0) {
                                            ?>
                                            <div class="drop-content">
                                                <?php
                                                while ($srrow = $seresults->fetch_array()) {
                                                    $service++;
                                                    ?>
                                                    <a href="services?ser_id#section1">
                                                        <?php echo !empty($srrow["ser_name"]) ? $srrow["ser_name"] : ''; ?>
                                                    </a>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </li>

                                    <li class="nav-item"><a class="nav-link" href="contact"> Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <button class="navbar-toggler" id="go" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">

                        <i class="bi bi-list"
                            style="margin: 0px 0px 0px 0px; color: #f58c23;; padding: 10px 10px 10px 10px; font-size: 40px;">
                        </i>

                    </button>
                </div>
            </div>
        </div>

    </header>