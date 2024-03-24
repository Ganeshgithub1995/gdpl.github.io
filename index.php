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

    <?php include 'header.php' ?>

    <!-- Carousel Section -->
    <section id="hero-slider-two" data-scroll-index="0">
        <div class="owl-carousel owl-theme">
            <?php
            $slresults = $conn->query("SELECT * FROM slider WHERE sl_status='1' ORDER BY sl_id DESC");
            if ($slresults->num_rows > 0) {
                while ($slrow = $slresults->fetch_object()) {
                    if (!empty($slrow->sl_image)) {
                        if (file_exists('admin/upload/' . $slrow->sl_image)) {
                            ?>
                            <div class="item">
                                <div class="slide slide-1 col-xs-7"
                                    style="background-image: url(<?php echo 'admin/upload/' . $slrow->sl_image; ?>);">
                                    <div class="slide-content  hero-inner h-100">
                                        <h1 class="hero-title">
                                            We do our job safely and <br>carefully
                                        </h1>
                                        <p class="hero-subtitle">
                                            Building Road
                                        </p>
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev">
                                        <span aria-label="Prev" style="display: none;"></span>
                                    </button>
                                    <button type="button" role="presentation" class="owl-next">
                                        <span aria-label="Next" style="display: none;"></span>
                                    </button>
                                </div>
                            </div>
                            <?php
                        }
                    }
                }
            }
            ?>
        </div>
    </section>
    <!-- Carousel Section -->




    <!-- Who we are section -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6" data-aos="fade-right" data-aos-delay="500" data-aos-duration="3000">
                    <div class="about-img-wrap">


                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $whsl; ?>"
                                    class="active"></li>
                            </ol>
                            <div class="carousel-inner">
                                <?php
                                $whslresults = $conn->query("SELECT * FROM  who_we_are_slider WHERE whsl_status='1' ORDER BY whsl_id DESC");
                                if ($whslresults->num_rows > 0) {
                                    $whsl = 0;
                                    while ($whslrow = $whslresults->fetch_object()) {
                                        $whsl++;
                                        if (!empty($whslrow->whsl_image)) {
                                            if (file_exists('admin/upload/' . $whslrow->whsl_image)) {
                                                ?>
                                                <div class="carousel-item <?php if ($whsl == '1') {
                                                    echo 'active';
                                                } ?>">
                                                    <img class="d-block w-100"
                                                        src="<?php echo 'admin/upload/' . $whslrow->whsl_image; ?>" alt="First slide">
                                                </div>
                                                <?php
                                            }
                                        }
                                    }
                                }
                                ?>
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>

                        </div>
                    </div>
                </div>

                <?php
                $whresults = $conn->query("SELECT * FROM `who_we_are` WHERE wh_status='1' ORDER BY wh_id ASC");
                if ($whresults->num_rows > 0) {
                    $whrow = $whresults->fetch_array();
                }
                ?>
                <div class="col-lg-6 about-inner" data-aos="fade-left" data-aos-delay="500" data-aos-duration="3000">
                    <div class="about-text">
                        <h6>
                            <?php echo !empty($whrow["wh_title"]) ? $whrow["wh_title"] : ''; ?>
                        </h6>
                        <h4 class="buildwhytext">
                            <?php echo !empty($whrow["wh_subtitle"]) ? $whrow["wh_subtitle"] : ''; ?>
                        </h4>
                        <p>
                            <?php echo !empty($whrow["wh_content"]) ? $whrow["wh_content"] : ''; ?>
                        </p>
                    </div>
                    <ul>
                        <li>
                            <i class="fas fa-industry"></i>
                            <div class="text">
                                <h6 class="homedownheading">Our Vision</h6>
                                <p class="umvtext">
                                    <?php echo !empty($whrow["wh_ourmission"]) ? $whrow["wh_ourmission"] : ''; ?>
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-business-time"></i>
                            <div class="text">
                                <h6 class="homedownheading">Our Mission</h6>
                                <p class="umvtext">
                                    <?php echo !empty($whrow["wh_ourvision"]) ? $whrow["wh_ourvision"] : ''; ?>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </section>
    <!-- Who we are section -->


    <!-- Our guiding -->
    <section>
        <div class="container mt">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="umstextmv">Our Guiding Principle</h1>
                    <div class="wrapper">
                        <div class="center-line">
                            <!-- <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a> -->
                        </div>
                        <?php
                        $guresults = $conn->query("SELECT * FROM `our_guiding`");
                        $count = 0;
                        if ($guresults->num_rows > 0) {
                            while ($gurow = $guresults->fetch_array()) {
                                $count++;
                                ?>
                                <div class="row row-<?php echo ($count % 2 == 0) ? '2' : '1'; ?>"
                                    data-aos="fade-<?php echo ($count % 2 == 0) ? 'left' : 'right'; ?>" data-aos-delay="100"
                                    data-aos-duration="3000" style="animation-name: none;">
                                    <section>
                                        <i class="icon fas fa-hand-rock"></i>
                                        <div class="details toltxip">
                                            <span class="title moderndtext">
                                                <?php echo !empty($gurow["gu_subtitle"]) ? $gurow["gu_subtitle"] : ''; ?>
                                            </span>
                                            <p class="toptiptxtds">
                                                <?php echo !empty($gurow["gu_cont"]) ? $gurow["gu_cont"] : ''; ?>
                                            </p>
                                        </div>
                                    </section>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our guiding -->





    <!-- Our expertise -->

    <section class="section pb-minus-70 bg-primary-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2 class="section-title">Our<span>Expertise</span></h2>
                    </div>
                </div>
            </div>
            <?php
            $exresults = $conn->query("SELECT * FROM `our_expertise`");
            $expert = 0;
            if ($exresults->num_rows > 0) {
                ?>

                <div class="row">
                    <?php
                    while ($exrow = $exresults->fetch_array()) {
                        $expert++;
                        ?>
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500" data-aos-duration="3000">


                            <div class="services-item">
                                <div class="icon">
                                    <span>
                                        <i class="fas fa-road serviceicondexign"></i>
                                    </span>
                                </div>
                                <div class="body">
                                    <h6>
                                        <?php echo !empty($exrow["ex_title"]) ? $exrow["ex_title"] : ''; ?>
                                    </h6>
                                    <p class="exoiptext">
                                        <?php echo !empty($exrow["ex_cont"]) ? $exrow["ex_cont"] : ''; ?>
                                    </p>
                                    <a href="#">Click For More <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
    </section>



    <!-- Our Works -->
    <section class="section pb-minus-70" id="galleryWrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                    <div class="section-heading">
                        <h2 class="section-title">Our<span>Works</span></h2>
                    </div>
                    <div class="gallery-filter text-center">
                        <a style="text-decoration: none;cursor:pointer;" class="road"
                            data-gallery-filter=".Roadways">Roadways</a>
                        <a style="text-decoration: none;cursor:pointer;" class="bridge"
                            data-gallery-filter=".Bridges">Bridges</a>
                        <a style="text-decoration: none;cursor:pointer;" class="build"
                            data-gallery-filter=".Building">Building</a>
                        <a style="text-decoration: none;cursor:pointer;" class="irri"
                            data-gallery-filter=".Building">Irrigation</a>
                        <a style="text-decoration: none;cursor:pointer;" class="water"
                            data-gallery-filter=".WaterTreatmentPlant">Water Treatment Plant</a>
                        <a style="text-decoration: none;cursor:pointer;" class="rail"
                            data-gallery-filter=".Railways">Railways</a>
                    </div>
                </div>
            </div>

            <div class="row" id="galleryGrid">

                <div class="col-md-3 col-xs-12  gallery-item building Roadways" id="grid1">
                    <!-- style="position: absolute; left: 0%; top: 0px;" -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Roadways"
                                href="https://www.umsl.in/public/website/images/gallery/1652895564.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1652895564.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Sinapalli</h5>
                                <span class="homegalerydestext">Sinapali Ghatipada Road</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Roadways" id="grid2">
                    <!-- style="position: absolute; left: 25%; top: 0px;" -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Roadways"
                                href="https://www.umsl.in/public/website/images/gallery/1652895588.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1652895588.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Pendurabadi</h5>
                                <span class="homegalerydestext">Pendurabadi to Bomakai via Damodarpur and Raiguda</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Bridges" id="grid3">
                    <!-- style="position: absolute; left: 50%; top: 0px; " -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Bridges"
                                href="https://www.umsl.in/public/website/images/gallery/1651228660.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1651228660.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Nandini Nalla</h5>
                                <span class="homegalerydestext">Nandini Nalla in the district of Ganjam under NABARD
                                    Assistance.</span>
                            </div>
                            <!-- <a href="#" class="detail-link">Nandini Nalla in the district of Ganjam under NABARD Assistance.</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Railways" id="grid4">
                    <!-- style="position: absolute; left: 75%; top: 0px; "  -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Railways"
                                href="https://www.umsl.in/public/website/images/gallery/1651228590.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1651228590.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Rourkela Railway</h5>
                                <span class="homegalerydestext">Third Line Work between Rourkela and Jharsuguda
                                    Stations</span>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Railways" id="grid5">
                    <!-- style="position: absolute; left: 0%; top: 285px; " -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Railways"
                                href="https://www.umsl.in/public/website/images/gallery/1651228598.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1651228598.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">IRCON</h5>
                                <span class="homegalerydestext">Construction of civil works up to formation Section from
                                    Ch. 112+000 (IR 79.300) to Ch. 125+000 (IR 92.300) packages SS1 B- II</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building WaterTreatmentPlant" id="grid6">
                    <!-- style="position: absolute; left: 25%; top: 285px; " -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building WaterTreatmentPlant"
                                href="https://www.umsl.in/public/website/images/gallery/1651228748.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1651228748.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Litiguda Nuapada Pipeline</h5>
                                <span class="homegalerydestext">Water Supply Projects to Litiguda and Adj.
                                    villages</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building WaterTreatmentPlant" id="grid7">
                    <!-- style="position: absolute; left: 50%; top: 285px; " -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building WaterTreatmentPlant"
                                href="https://www.umsl.in/public/website/images/gallery/1651228762.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1651228762.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Bargaon Nuapada Pipeline</h5>
                                <span class="homegalerydestext">Water Supply Projects to Bargaon and Adj.
                                    villages</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building WaterTreatmentPlant" id="grid8">
                    <!-- style="position: absolute; left: 75%; top: 285px; " -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building WaterTreatmentPlant"
                                href="https://www.umsl.in/public/website/images/gallery/1651228774.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1651228774.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Khallana Nuapada Pipeline</h5>
                                <span class="homegalerydestext">Water Supply Projects to Khallana and Adj.
                                    villages</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Roadways" id="grid9">
                    <!-- style="position: absolute; left: 50%; top: 0px;" -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Roadways"
                                href="https://www.umsl.in/public/website/images/gallery/1652895839.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1652895839.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Sinapalli</h5>
                                <span class="homegalerydestext">Sinapali Ghatipada Road</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Roadways" id="grid10">
                    <!-- style="position: absolute; left: 75%; top: 0px;" -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Roadways"
                                href="https://www.umsl.in/public/website/images/gallery/1652895715.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1652895715.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Ampani</h5>
                                <span class="homegalerydestext">Dharamgarh Biju Expressway</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Roadways" id="grid11">
                    <!-- style="position: absolute; left: 0%; top: 285px;" -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Roadways"
                                href="https://www.umsl.in/public/website/images/gallery/1652895939.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1652895939.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Sinapalli</h5>
                                <span class="homegalerydestext">Sinapali Ghatipada Road</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Roadways" id="grid12">
                    <!-- style="position: absolute; left: 25%; top: 285px;" -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Roadways"
                                href="https://www.umsl.in/public/website/images/gallery/1652895953.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1652895953.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Sinapalli</h5>
                                <span class="homegalerydestext">Sinapali Ghatipada Road</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Building" id="grid13">
                    <!-- style="position: absolute; left: 0%; top: 855px;"  -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Building"
                                href="https://www.umsl.in/public/website/images/gallery/1652896548.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1652896548.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">NSIC- Mancheswar</h5>
                                <span class="homegalerydestext"></span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Building" id="grid14">
                    <!-- style="position: absolute; left: 25%; top: 855px; " -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Building"
                                href="https://www.umsl.in/public/website/images/gallery/1652896605.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1652896605.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Ransingpur</h5>
                                <span class="homegalerydestext"></span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Irrigation" id="grid15">
                    <!-- style="position: absolute; left: 50%; top: 855px;"  -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Irrigation"
                                href="https://www.umsl.in/public/website/images/gallery/1653978582.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1653978582.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Darpani</h5>
                                <span class="homegalerydestext">Excavation of Darpani Branch Canal from (2kms)</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Roadways" id="grid16">
                    <!-- style="position: absolute; left: 50%; top: 285px;"  -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Roadways"
                                href="https://www.umsl.in/public/website/images/gallery/1653978299.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1653978299.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Jaleshwar</h5>
                                <span class="homegalerydestext">Jaleswar-Batagram-Chandaneswar Road</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Roadways" id="grid17">
                    <!-- style="position: absolute; left: 75%; top: 285px;" -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Roadways"
                                href="https://www.umsl.in/public/website/images/gallery/1653978375.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1653978375.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Mahasamund</h5>
                                <span class="homegalerydestext">Two lane paved shoulder road to 4-lane</span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Building" id="grid18">
                    <!-- style="position: absolute; left: 25%; top: 1140px; " -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Building"
                                href="https://www.umsl.in/public/website/images/gallery/1655380084.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1655380084.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Bhawanipatna Court</h5>
                                <span class="homegalerydestext"></span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building WaterTreatmentPlant"
                    id="grid19">
                    <!-- style="position: absolute; left: 50%; top: 1140px; " -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building WaterTreatmentPlant"
                                href="https://www.umsl.in/public/website/images/gallery/1655398798.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1655398798.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">MLD Water Treatment</h5>
                                <span class="homegalerydestext"></span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Railways" id="grid20">
                    <!-- style="position: absolute; left: 75%; top: 1140px; " -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Railways"
                                href="https://www.umsl.in/public/website/images/gallery/1655398992.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1655398992.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">IRCON</h5>
                                <span class="homegalerydestext"></span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Railways" id="grid21">
                    <!-- style="position: absolute; left: 0%; top: 1425px;"  -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Railways"
                                href="https://www.umsl.in/public/website/images/gallery/1655399081.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1655399081.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Rourkela Railway</h5>
                                <span class="homegalerydestext"></span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3col-xs-12 col-sm-12  col-lg-3 gallery-item building Building" id="grid22">
                    <!-- style="position: absolute; left: 25%; top: 1425px; " -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Building"
                                href="https://www.umsl.in/public/website/images/gallery/1655399419.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1655399419.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Adani Port</h5>
                                <span class="homegalerydestext"></span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Irrigation" id="grid23">
                    <!-- style="position: absolute; left: 50%; top: 1425px;" -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Irrigation"
                                href="https://www.umsl.in/public/website/images/gallery/1655399774.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1655399774.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Darpani</h5>
                                <span class="homegalerydestext"></span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-12 col-lg-3 gallery-item building Irrigation" id="grid24">
                    <!-- style="position: absolute; left: 75%; top: 1425px;"  -->
                    <div class="gallery-item-inner">
                        <div class="gallery-item-img">
                            <a data-fancybox="grid-gallery building Irrigation"
                                href="https://www.umsl.in/public/website/images/gallery/1655399794.jpg">
                                <img src="https://www.umsl.in/public/website/images/gallery/1655399794.jpg"
                                    alt="Portfolio image" class="img-fluid">
                            </a>
                        </div>
                        <div class="gallery-details">
                            <div class="detail-text">
                                <h5 class="mdrngalrynmetext">Darpani</h5>
                                <span class="homegalerydestext"></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our works -->


    <!-- Why us -->
    <section class="section" id="whyChooseUs">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 why-choose-us-img" data-aos="fade-right" data-aos-delay="700"
                    data-aos-duration="3000">
                    <img src="images/demo1.jpg" alt="Why Choose image" class="img-fluid">
                </div>

                <div class="col-lg-6 why-choose-us-col" data-aos="fade-left" data-aos-delay="700"
                    data-aos-duration="3000">
                    <div class="why-choose-us-inner">
                        <div class="inner-text">
                            <h6>Why Us</h6>
                            <h4 class="buildwhytext">Driving growth in the domains of Infra &amp; logistics over the
                                last two and half decades</h4>
                            <p>
                                We have a very good team working with years of experience. There may be a special offer
                                for you in some of our crane services and services.
                            </p>
                        </div>
                        <ul>
                            <li>
                                <i class="fas fa-life-ring"></i>
                                <div class="text">
                                    <h6 class="txt-inherit">A company with experience in varied construction verticals
                                    </h6>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-life-ring"></i>
                                <div class="text">
                                    <h6 class="txt-inherit">Experience of handling EPC road projects/world bank/ADB
                                        projects.</h6>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-life-ring"></i>
                                <div class="text">
                                    <h6 class="txt-inherit">Financially sound.</h6>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-life-ring"></i>
                                <div class="text">
                                    <h6 class="txt-inherit">Strong senior management and well experienced team of
                                        engineers.</h6>
                                </div>
                            </li>
                        </ul>
                        <a href="whyus.php" class="primary-button">Read More<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Why Us -->


    <!-- Pdf section -->
    <section class="section bg-dark-blue pb-minus-70" id="workProcess">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="work-process-inner">
                        <div class="work-process-text">
                            <h4>We attach great importance to safety in our work.</h4>
                            <p class="safteylisttext1">
                                GDPL is committed to its health and safety responsibilities and we are committed to the
                                continuous improvement of health and safety standards at all our project sites.
                            </p>
                        </div>
                        <ul>
                            <li>
                                <span>01</span>
                                <div class="text">
                                    <!-- <h6>Excavation</h6> -->
                                    <p class="safteylisttext">
                                        There is visible leadership commitment to safety at every level of the
                                        organization.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span>02</span>
                                <div class="text">
                                    <!-- <h6>Construction</h6> -->
                                    <p class="safteylisttext">
                                        All the workforce throughout the organization exhibit a basic working knowledge
                                        of safety and are risk aware.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span>03</span>
                                <div class="text">
                                    <!-- <h6>Construction</h6> -->
                                    <p class="safteylisttext">
                                        There is visible evidence of a financial investment in safety that is viewed and
                                        perceived as an investment, not a cost.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span>04</span>
                                <div class="text">
                                    <!-- <h6>Construction</h6> -->
                                    <p class="safteylisttext">
                                        Opportunities for improvement in safety are dealt with in a timely and efficient
                                        manner before issues or problems escalate which may cause accidents or incidents
                                        if ignored.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span>05</span>
                                <div class="text">
                                    <!-- <h6>Construction</h6> -->
                                    <p class="safteylisttext">
                                        Workforce communication on safety is clear, regular and transparent so the
                                        transfer of safety knowledge is successful.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span>06</span>
                                <div class="text">
                                    <!-- <h6>Construction</h6> -->
                                    <p class="safteylisttext">
                                        All levels of the workforce from top to bottom of the organization demonstrate
                                        meaningful involvement in safety.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 counters">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href="https://www.umsl.in/public/website/images/counter/1200909983.pdf" target="_blank">
                                <div class="counter-item newpdfarea">
                                    <img src="https://www.umsl.in/public/website/images/counter/1651224152.jpg"
                                        alt="Counter image" class="img-fluid">
                                    <div class="counter-text">
                                        <i class="fas fa-file-pdf fntpdficon"></i>
                                    </div>
                                </div>
                                <div class="policyumbtnareas10">
                                    <button class="primary-buttons10" fdprocessedid="vidfsa">CORPORATE HSE
                                        POLICY</button>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href="https://www.umsl.in/public/website/images/counter/1651223244.pdf" target="_blank">
                                <div class="counter-item newpdfarea">
                                    <img src="https://www.umsl.in/public/website/images/counter/1651224318.jpg"
                                        alt="Counter image" class="img-fluid">
                                    <div class="counter-text">
                                        <i class="fas fa-file-pdf fntpdficon"></i>
                                    </div>
                                </div>
                                <div class="policyumbtnareas11">
                                    <button class="primary-buttons10" fdprocessedid="bpe33i">DRUG &amp; ALCOHOL
                                        POLICY</button>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href="https://www.umsl.in/public/website/images/counter/1651223260.pdf" target="_blank">
                                <div class="counter-item newpdfarea">
                                    <img src="https://www.umsl.in/public/website/images/counter/1651224343.jpg"
                                        alt="Counter image" class="img-fluid">
                                    <div class="counter-text">
                                        <i class="fas fa-file-pdf fntpdficon"></i>
                                    </div>
                                </div>
                                <div class="policyumbtnareas12">
                                    <button class="primary-buttons10" fdprocessedid="jm6c3p">SMOKE FREE POLICY</button>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a href="https://www.umsl.in/public/website/images/counter/1651223276.pdf" target="_blank">
                                <div class="counter-item newpdfarea">
                                    <img src="https://www.umsl.in/public/website/images/counter/1651224351.jpg"
                                        alt="Counter image" class="img-fluid">
                                    <div class="counter-text">
                                        <i class="fas fa-file-pdf fntpdficon"></i>
                                    </div>
                                </div>
                                <div class="policyumbtnareas13">
                                    <button class="primary-buttons10" fdprocessedid="glt5wx">SUSTAINABILITY
                                        POLICY</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pdf section -->


    <?php include 'blog.php' ?>
    <?php include 'footer.php' ?>