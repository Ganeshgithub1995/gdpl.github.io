<?php
session_start();
include "admin/config.php";


if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact`(`name`,`email`, `number`, `subject`,`message`) VALUES ('$name','$email','$number','$subject','$message')";


    $result = $conn->query($sql);


    $_SESSION['id'] = $conn->insert_id;
    // echo $_SESSION['id'];
    header("Location: " . $_SERVER["HTTP_REFERER"]);

    $conn->close();

}
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



    <!-- 1st about section -->
    <section class="breadcrumb-section section" data-scroll-index="0"
        style="background-image: url(images/contact.jpg);">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 1st about section -->


    <!-- Map / mail / contact section -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 newsmaparea">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="fstareamap_section1">
                                <div class="col-lg-12">
                                    <h1 class="umstextmv">Office Addresses</h1>
                                </div>
                                <div class="col-lg-12 fstareamap_section"
                                    style="background-image: url(images/india.png);">
                                    <div class="pin toltxip1" style="background-image: url(images/pin.png);">
                                        <div class="toptiptxtds1">
                                            <h2 class="areanametext">Choudwar Office</h2>
                                            <p class="areadescriptiontext">
                                                Kalinga Bazar, Kapaleswar, Choudwar Cuttack - 754071, Odisha, India
                                                Tel/Fax - 0671 2494918 <br>Email: information@umsl.in
                                            </p>
                                            <a href="https://goo.gl/maps/AvdGVpQj3WgkFpGaA" target="_blank"
                                                class="mapviewarea">
                                                View Map
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pin1 toltxip2" style="background-image: url(images/pin.png);">
                                        <div class="toptiptxtds2">
                                            <h2 class="areanametext">IMFA Building, Bomikhal</h2>
                                            <p class="areadescriptiontext">
                                                IMFA Building, Bomikhal, Rasulgarh, Bhubaneswar, Odisha - 751010<br>
                                                Tel: +91 674 3051141 +91 674 2580021<br> Email: information@umsl.in
                                            </p>
                                            <a href="https://goo.gl/maps/TbYESZdQfu4Xjaen9" target="_blank"
                                                class="mapviewarea">
                                                View Map
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pin2 toltxip3" style="background-image: url(images/pin.png);">
                                        <div class="toptiptxtds3">
                                            <h2 class="areanametext">Maharashtra</h2>
                                            <p class="areadescriptiontext">
                                                Ferro Tech India Pvt. Ltd.<br> 605, ‘A’ Wing, Marathon Futurex, Mafatlal
                                                Mills Compound, N. M. Joshi Marg, Lower Parel (E), Mumbai - 400013,
                                                Maharashtra, India.<br> Email : info@ferrotech.org
                                            </p>
                                            <a href="https://goo.gl/maps/nWj1DRyCE1p4srkD8" target="_blank"
                                                class="mapviewarea">
                                                View Map
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="fstareamap_section1">

                                <div class="col-lg-12">
                                    <h1 class="umstextmv">Dubai Office Address</h1>
                                </div>
                                <div class="col-lg-12 fstareamap_section2"
                                    style="background-image:url(images/dubai.jpg);">

                                    <div class="pin3 toltxip4" style="background-image: url(images/pin.png);">
                                        <div class="toptiptxtds4">
                                            <h2 class="areanametext">Dubai, UAE:</h2>
                                            <p class="areadescriptiontext">
                                                TERAS Technology and Products <br>DMCC Reef Tower, Cluster 'O', Offc
                                                101-01-D13, Jumeirah Lake Towers Dubai, United Arab Emirates <br> Tel:
                                                +971-44487324<br> Email: enquiry@theteras.com
                                            </p>
                                            <a href="https://goo.gl/maps/t4fLAWENLA2S4ACc9" target="_blank"
                                                class="mapviewarea">
                                                View Map
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pin4 toltxip5" style="background-image: url(images/pin.png);">
                                        <div class="toptiptxtds5">
                                            <h2 class="areanametext">Abu Dhabi, UAE:</h2>
                                            <p class="areadescriptiontext">
                                                Teras Piping Solutions L.L.C. <br>Lulu Exchange <br>1020 Zayed The First
                                                St - Zone 1 - E11 - Abu Dhabi. <br>Tel: 02 677 1130 <br>Email:
                                                info@teraspiping.com
                                            </p>
                                            <a href="https://g.co/kgs/VM6zsF" target="_blank" class="mapviewarea">
                                                View Map
                                                <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container formumslsection">
            <div class="col-lg-12 col-md-12 contact-form-wrap">
                <div class="contact-form">
                    <form id="contactForm" method="POST" action="contact.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="contact-form-control" name="name"
                                        placeholder="Your Name *" autocomplete="off" required>
                                    <i class="fa fa-user" aria-hidden="false"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="contact-form-control" name="email"
                                        placeholder="Your E-Mail *" autocomplete="off" required>
                                    <i class="fa fa-envelope" aria-hidden="false"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="string" maxlength="10" class="contact-form-control" name="number"
                                        placeholder="Your Phone *" autocomplete="off" required>
                                    <i class="fa fa-phone" aria-hidden="false"></i>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="contact-form-control" name="subject"
                                        placeholder="Subject *" autocomplete="off" required>
                                    <i class="far fa-bookmark" aria-hidden="false"></i>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="contact-form-control" name="message" type="text" cols="30" rows="9"
                                        placeholder="Your Message *" autocomplete="off" required></textarea>
                                    <i class="fa fa-envelope-open enve" aria-hidden="false"></i>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" name="submit" value="Send Message" id="submit-button"
                                    class="primary-button border-none contact-submit">Send
                                    Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Map / mail / contact section -->

 

    <?php include 'blog.php' ?>
    
    <?php
        if (!empty($_SESSION['id'])) {
            ?>
            <script>
                swal({
                    title: "Success!",
                    text: "Message Send Successfully",
                    icon: "success",
                    button: "Ok",
                });
            </script>
            <?php
            session_unset();
        }
        ?>

    <?php include 'footer.php' ?>




   




