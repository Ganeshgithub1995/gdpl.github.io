<?php
require_once 'admin/config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GB Realestate Designs Pvt Ltd. Service Page</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php include 'header.php' ?>


    <!-- 1st about section -->
    <section class="breadcrumb-section section" id="section1" data-scroll-index="0" style="background-image: url(images/aboutl.jpg);">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <?php
                        $spresults = $conn->query("SELECT * FROM `services` WHERE ser_status='1' ORDER BY ser_id ASC");
                        if ($spresults->num_rows > 0) {
                            $sprow = $spresults->fetch_array();
                        }
                        ?>
                        <h1>
                            <?php echo !empty($sprow["ser_title"]) ? $sprow["ser_title"] : ''; ?>
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 1st about section -->




    <!-- who we are section -->
    <section class="section" id="section1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6" data-aos="fade-right" data-aos-delay="500" data-aos-duration="3000">
                    <img class="d-block w-100" src="images/bgs1.jpg" alt="First slide">
                </div>
                <div class="col-lg-6 about-inner" data-aos="fade-left" data-aos-delay="500" data-aos-duration="3000">
                    <div class="about-text">
                        <h6>Service Overview</h6>
                        <h4 class="buildwhytext">Building a culture of innovation and quality in EPC space</h4>
                        <p>
                            GDPL aspires to be amongst India’s leading EPC companies, committed to creating niche in the
                            Infrastructure Sector, pursuing excellence through Empowerment, Integrity, Innovation and
                            Agility with a passion to deliver quality and timely project execution. GDPL aims to become
                            one of top 10 Infrastructure companies in India by 2025.
                        </p>
                        <p style="margin-top: 30px;">
                            GDPL will aspire to be a niche logistics company with the aim of maximizing shareholder
                            value and acting as a value enhancer to the Infrastructure Segment.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-- who we are section -->




    <?php include 'footer.php' ?>