<?php
session_start();
include "config.php";
if (empty($_SESSION['id'])) {
    header('location:index.php');
}
?>
<!-- latest blog section -->
<section class="section" id="latestBlog">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2 class="section-title">Latest<span>Blog</span></h2>
                </div>
            </div>
        </div>


        <div class="owl-theme owlslider3 owl-carousel owl-loaded owl-drag" id="owlslider3">

            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(-1900px, 0px, 0px); transition: all 1s ease 0s; width: 3800px;">
                    <div class="owl-item">
                        <div class="item" style="width: 350px; margin-right: 30px;">
                            <div class="blog-item">
                                <div class="img">
                                    <a href="#">
                                        <img src="https://www.umsl.in/public/website/images/blog/1650868976.jpg"
                                            alt="Blog image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="meta">
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i>
                                            <span>22 April 2022</span>
                                        </a>

                                    </div>
                                    <h6>
                                        <a href="#">Architectural sketches and construction stages</a>
                                    </h6>
                                    <p>
                                        It is a long established fact that a reader will be distracted by...
                                    </p>
                                    <a href="#" class="blog-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="item" style="width: 350px; margin-right: 30px;">
                            <div class="blog-item">
                                <div class="img">
                                    <a href="#">
                                        <img src="https://www.umsl.in/public/website/images/blog/1650869055.jpg"
                                            alt="Blog image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="meta">
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i>
                                            <span>24 April 2022</span>
                                        </a>

                                    </div>
                                    <h6>
                                        <a href="#">Everything about excavation work</a>
                                    </h6>
                                    <p>
                                        It is a long established fact that a reader will be distracted by...
                                    </p>
                                    <a href="#" class="blog-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="item" style="width: 350px; margin-right: 30px;">
                            <div class="blog-item">
                                <div class="img">
                                    <a href="#">
                                        <img src="https://www.umsl.in/public/website/images/blog/1650869099.jpg"
                                            alt="Blog image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="meta">
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i>
                                            <span>27 April 2022</span>
                                        </a>

                                    </div>
                                    <h6>
                                        <a href="#">Advantages in crane lifting services</a>
                                    </h6>
                                    <p>
                                        It is a long established fact that a reader will be distracted by...
                                    </p>
                                    <a href="#" class="blog-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="item" style="width: 350px; margin-right: 30px;">
                            <div class="blog-item">
                                <div class="img">
                                    <a href="#">
                                        <img src="https://www.umsl.in/public/website/images/blog/1650868910.jpg"
                                            alt="Blog image" class="img-fluid">
                                    </a>
                                </div>
                                <div class="body">
                                    <div class="meta">
                                        <a href="#">
                                            <i class="far fa-calendar-alt"></i>
                                            <span>20 April 2022</span>
                                        </a>

                                    </div>
                                    <h6>
                                        <a href="#">The most useful reinforced concrete for construction</a>
                                    </h6>
                                    <p>
                                        It is a long established fact that a reader will be distracted by...
                                    </p>
                                    <a href="#" class="blog-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                        aria-label="Previous">‹</span></button><button type="button" role="presentation"
                    class="owl-next"><span aria-label="Next">›</span></button></div>
            <div class="owl-dots disabled">
                <button role="button" class="owl-dot active" fdprocessedid="c4v3cp"><span></span></button>
                <button role="button" class="owl-dot" fdprocessedid="rch0p"><span></span></button>
            </div>
        </div>
    </div>
</section>
<!-- latest blog section -->