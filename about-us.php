<!DOCTYPE html>
<html class="no-js" lang="en">
<!-- Mirrored from www.themeim.com/demo/kidzcare/kids/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jun 2021 12:18:02 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Puspita-About US</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />

    <!-- === webfont=== -->
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet" />
    <!--Font awesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!--Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!--UI css-->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="css/venobox.css" />
    <!--Owl Carousel css-->
    <link href="css/owl.carousel.css" rel="stylesheet" />
    <link href="css/owl.theme.css" rel="stylesheet" />
    <!--Animate css-->
    <link href="css/animate.css" rel="stylesheet" />
    <!--Main Stylesheet -->
    <link href="style.css" rel="stylesheet" />
    <!--Responsive Stylesheet -->
    <link href="css/responsive.css" rel="stylesheet" />

    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style>
        hr {
            width: 70px;
            height: 3px;
            border-radius: 10px;
            background-color: #f57e5a;
        }

        .ts-map .mapouter .gmap_canvas {
            position: relative;
            height: 550px;
            width: 550px;
            overflow: hidden;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -ms-border-radius: 50%;
            border: none;
        }

        .ts-map .mapouter .gmap_canvas iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
            filter: grayscale(0%);
            border: none;
        }

        .area-heading {
            font-size: 35px;
            color: #43a7bf;
            font-family: "Fredoka One", cursive;
            text-align: center;
            margin-bottom: 55px;
        }

        .paragraph {
            font-size: 18px;
            text-align: justify;
        }

        /* tmimeline css */
        .main-timeline {
            overflow: hidden;
            position: relative;
        }

        .main-timeline .timeline {
            position: relative;
            margin-top: -79px;
        }

        .main-timeline .timeline:first-child {
            margin-top: 0;
        }

        .main-timeline .timeline:before,
        .main-timeline .timeline:after {
            content: "";
            display: block;
            width: 100%;
            clear: both;
        }

        .main-timeline .timeline:before {
            content: "";
            width: 100%;
            height: 100%;
            box-shadow: -8px 0 5px -5px rgba(0, 0, 0, 0.5) inset;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
        }

        .main-timeline .timeline-icon {
            width: 210px;
            height: 210px;
            border-radius: 50%;
            border: 25px solid transparent;
            border-top-color: #f44556;
            border-right-color: #f44556;
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 1;
            transform: rotate(45deg);
        }

        .main-timeline .year {
            display: block;
            width: 110px;
            height: 110px;
            line-height: 110px;
            border-radius: 50%;
            background: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            margin: auto;
            font-size: 30px;
            font-weight: bold;
            color: #f44556;
            text-align: center;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            transform: rotate(-45deg);
        }

        .main-timeline .timeline-content {
            width: 35%;
            float: right;
            background: #f44556;
            padding: 30px 20px;
            margin: 50px 0;
            z-index: 1;
            position: relative;
        }

        .main-timeline .timeline-content:before {
            content: "";
            width: 20%;
            height: 15px;
            background: #f44556;
            position: absolute;
            top: 50%;
            left: -20%;
            z-index: -1;
            transform: translateY(-50%);
        }

        .main-timeline .title {
            font-size: 20px;
            font-weight: bold;
            color: #fff;
            margin: 0 0 10px 0;
        }

        .main-timeline .description {
            font-size: 16px;
            color: #fff;
            line-height: 24px;
            margin: 0;
        }

        .main-timeline .timeline:nth-child(2n):before {
            box-shadow: 8px 0 5px -5px rgba(0, 0, 0, 0.5) inset;
        }

        .main-timeline .timeline:nth-child(2n) .timeline-icon {
            transform: rotate(-135deg);
        }

        .main-timeline .timeline:nth-child(2n) .year {
            transform: rotate(135deg);
        }

        .main-timeline .timeline:nth-child(2n) .timeline-content {
            float: left;
        }

        .main-timeline .timeline:nth-child(2n) .timeline-content:before {
            left: auto;
            right: -20%;
        }

        .main-timeline .timeline:nth-child(2n) .timeline-icon {
            border-top-color: #e97e2e;
            border-right-color: #e97e2e;
        }

        .main-timeline .timeline:nth-child(2n) .year {
            color: #e97e2e;
        }

        .main-timeline .timeline:nth-child(2n) .timeline-content,
        .main-timeline .timeline:nth-child(2n) .timeline-content:before {
            background: #e97e2e;
        }

        .main-timeline .timeline:nth-child(3n) .timeline-icon {
            border-top-color: #13afae;
            border-right-color: #13afae;
        }

        .main-timeline .timeline:nth-child(3n) .year {
            color: #13afae;
        }

        .main-timeline .timeline:nth-child(3n) .timeline-content,
        .main-timeline .timeline:nth-child(3n) .timeline-content:before {
            background: #13afae;
        }

        .main-timeline .timeline:nth-child(4n) .timeline-icon {
            border-top-color: #105572;
            border-right-color: #105572;
        }

        .main-timeline .timeline:nth-child(4n) .year {
            color: #105572;
        }

        .main-timeline .timeline:nth-child(4n) .timeline-content,
        .main-timeline .timeline:nth-child(4n) .timeline-content:before {
            background: #105572;
        }

        .service-three {
            padding: 70px 0px;
            background-repeat: repeat;
            background-position: center;
            background-size: auto;
            background-image: url(img/bg/play.jpg);
            background-attachment: fixed;
        }

        .expect-area {
            background-image: url(img/bg/facilities-bg.png);
            background-repeat: no-repeat;
            height: 637px;
            padding: 156px 0px;
            background-size: cover;
        }

        /* media query for timeline */
        @media only screen and (max-width: 1199px) {
            .main-timeline .timeline {
                margin-top: -103px;
            }

            .main-timeline .timeline-content:before {
                left: -18%;
            }

            .main-timeline .timeline:nth-child(2n) .timeline-content:before {
                right: -18%;
            }
        }

        @media only screen and (max-width: 990px) {
            .main-timeline .timeline {
                margin-top: -127px;
            }

            .main-timeline .timeline-content:before {
                left: -2%;
            }

            .main-timeline .timeline:nth-child(2n) .timeline-content:before {
                right: -2%;
            }
        }

        @media only screen and (max-width: 767px) {
            .main-timeline .timeline {
                margin-top: 0;
                overflow: hidden;
            }

            .main-timeline .timeline:before,
            .main-timeline .timeline:nth-child(2n):before {
                box-shadow: none;
            }

            .main-timeline .timeline-icon,
            .main-timeline .timeline:nth-child(2n) .timeline-icon {
                margin-top: -30px;
                margin-bottom: 20px;
                position: relative;
                transform: rotate(135deg);
            }

            .main-timeline .year,
            .main-timeline .timeline:nth-child(2n) .year {
                transform: rotate(-135deg);
            }

            .main-timeline .timeline-content,
            .main-timeline .timeline:nth-child(2n) .timeline-content {
                width: 100%;
                float: none;
                border-radius: 0 0 20px 20px;
                text-align: center;
                padding: 25px 20px;
                margin: 0 auto;
            }

            .main-timeline .timeline-content:before,
            .main-timeline .timeline:nth-child(2n) .timeline-content:before {
                width: 15px;
                height: 25px;
                position: absolute;
                top: -22px;
                left: 50%;
                z-index: -1;
                transform: translate(-50%, 0);
            }
        }

        @media (max-width: 767px) {
            .ts-map .mapouter .gmap_canvas {
                width: 100%;
                height: 300px;
                border-radius: 0;
            }
        }

        @media (max-width: 991px) {
            .ts-map .mapouter .gmap_canvas {
                margin: auto;
            }
        }

        @media (max-width: 1200px) {
            .ts-map .mapouter .gmap_canvas {
                width: 400px;
                height: 400px;
            }
        }
    </style>
</head>

<body>
    <div class="preloader"></div>

    <?php include("nav.php"); ?>

    <!--Breadcrumb area Start-->

    <div class="image-breadcrumb"></div>
    <!--Breadcrumb area end-->
    <!--Text breadcrumb area start-->
    <div class="text-bread-crumb d-flex align-items-center bgc-orange">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="bread-crumb-line">
                        <span><a href="#">Home /</a></span>About us
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Text breadcrumb area start-->

    <!--Wellcome video area start-->
    <section class="wellcome-video-area" style="background-image: url(img/bg/teachers-area-bg.jpg)">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-xl-1 col-md-7 col-lg-6 col-xl-6">
                    <div class="wellcome-content style-two">
                        <h2 class="area-heading">WELCOME TO THE PUSPITA!</h2>
                        <p class="paragraph" style="font-weight: 600; font-size:24px;">
                            “Children are an incarnation of lord himself.”
                        </p>
                        <p class="paragraph" style="font-weight: 600">
                            “Children are an incarnation of lord himself.”
                            We not only reiterate this notion everyday but also keep living and expressing the same through our institution and the essence it comes along with. Based in the cultural capital of the state of Orissa, i.e., Cuttack, we have our focus entailed towards symbolic languages like painting, sculpture, and drama along with signifying importance of play, cooperation, and respect for others. Our philosophy is built around play integrated with the teachings in order to make it convenient as well as interesting for children to grasp. Our campus and classrooms are stocked with materials like blocks, paint, clay, paper, wood, sand, and water to promote creativity and cooperation among children.

                        </p>
                        <p class="paragraph" style="font-weight: 700">

                        </p>
                    </div>
                </div>
                <div class="col-xl-5 col-md-5 col-lg-6">
                    <div class="video_content text-center d-flex align-items-center" style="margin-top:30px">
                        <!-- <a
                                class="about_video"
                                data-autoplay="true"
                                data-vbtype="video"
                                href="https://youtu.be/EinsF7JvHzw"
                                ><img src="img/icon/youtube-play.png" alt=""
                            /></a> -->
                        <img src="img/facilities-1.png" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <!--Wellcome video area end-->
    <!--Service three area start-->
    <div>
        <h2 class="area-heading " style="color:#f57e5a">What We Offer
            <hr>
        </h2>

    </div>
    <br>
    <br>
    <section class="service-three">



        <!--Features area start-->
        <section class="feature-area-wrapper style-two">

            <div class="container-fluid">
                <div class="row no-gutters justify-content-center">



                    <div class="row">
                        <!--Single Features-->

                        <div class="col-sm-6 col-xl-3 col-md-4">
                            <div class="single-features bg-orange wow fadeInUp" data-wow-delay=".4s">
                                <div class="fet-icon">
                                    <img src="img/icon/feature-icon-1.png" alt="">
                                </div>
                                <h3>Day Care</h3>
                                <p style="padding-bottom:10px">In our day care course, we take utmost care of each infant with all the love and warmth keeping in mind all the necessary cushioning environment to be curated and looked after by our specialized teachers and staff personnel. We instil the right beliefs and values along with nurturing their creativity and throttling their imaginations beyond space.
                                </p>
                            </div>
                        </div>
                        <!--Single Features-->
                        <div class="col-sm-6 col-xl-3 col-md-4">
                            <div class="single-features bg-per wow fadeInUp" data-wow-delay=".6s">
                                <div class="fet-icon">
                                    <img src="img/icon/feature-icon-2.png" alt="">
                                </div>

                                <h3>Online</h3>
                                <p style="padding-bottom:10px">
                                    We at Puspita Play School deliver exhilarating efforts in order make our students shine like diamonds through the polish and nourishment being provided by us. We stay adhered to the desired responsibilities we have towards students with an eye towards building the foundational steps of understanding in the students.
                                </p>

                            </div>
                        </div>
                        <!--Single Features-->
                        <div class="col-sm-6 col-xl-3 col-md-4">
                            <div class="single-features  bg-sky wow fadeInUp" data-wow-delay=".8s">
                                <div class="fet-icon">
                                    <img src="img/icon/feature-icon-3.png" alt="">
                                </div>

                                <h3>Offline</h3>
                                <p style="padding-bottom:10px">We at Puspita Play School deliver exhilarating efforts in order make our students shine like diamonds through the polish and nourishment being provided by us. We stay adhered to the desired responsibilities we have towards students with an eye towards building the foundational steps of understanding in the students.
                                </p>

                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 col-md-4">
                            <div class="single-features bg-green wow fadeInUp" data-wow-delay=".6s">
                                <div class="fet-icon">
                                    <img src="img/icon/feature-icon-4.png" alt="">
                                </div>

                                <h3>Summer Camp</h3>
                                <p  style="padding-bottom:10px">We delve deep into the combination of fun and
                                    learning which not only enhances the intellect but
                                    also keep the student rooted to their respective
                                    uniqueness. In order to extract the existing
                                    chirpiness of students out, we organize summer camps for them on a regular basis during vacations to keep their zeal on tip of the hill.


                                </p>

                            </div>
                        </div>

                    </div>

                </div>

        </section>
        <!--Features area end-->

        </div>
    </section>
    <!-- welcome end -->
    <!--Our Accreditations-->
    <section class="kids-care-event-area">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="area-heading st-two" style="color: #43a7bf">Our Accreditations</h2>
                    <p class="area-subline paragraph" style="text-align: center; font-weight: 700">
                        We constantly strive to achieve the best learning environment for our children through
                        innovative teaching methods and an engaging thematic curriculum. Our efforts and commitment have
                        been recognised by various quality compliance bodies, organisations and initiatives.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="sin-upc-event-two">
                        <img src="img/facilities/ue-1.jpg" alt="" />

                        <div class="sin-up-content">
                            <h6>Our Accreditations</h6>

                            <p>
                                Class aptent taciti sociosqu adtora torq uent per cbia mauris eros ntra.Class aptent
                                taciti sociosqu citi sociosqu adtora.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="sin-upc-event-two">
                        <img src="img/facilities/ue-2.jpg" alt="" />

                        <div class="sin-up-content">
                            <h6>Our Accreditations</h6>

                            <p>
                                Class aptent taciti sociosqu adtora torq uent per cbia mauris eros ntra.Class aptent
                                taciti sociosqu citi sociosqu adtora.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="sin-upc-event-two">
                        <img src="img/facilities/ue-3.jpg" alt="" />

                        <div class="sin-up-content">
                            <h6>Our Accreditations</h6>

                            <p>
                                Class aptent taciti sociosqu adtora torq uent per cbia mauris eros ntra.Class aptent
                                taciti sociosqu citi sociosqu adtora.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="sin-upc-event-two">
                        <img src="img/facilities/ue-4.jpg" alt="" />

                        <div class="sin-up-content">
                            <h6>Our Accreditations</h6>

                            <p>
                                Class aptent taciti sociosqu adtora torq uent per cbia mauris eros ntra.Class aptent
                                taciti sociosqu citi sociosqu adtora.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Our Accreditations-->
    <!--mission and vision-->
    <section class="kids-care-to-do">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="area-heading" style="color: #43a7bf">
                        MISSION AND VISION<img src="img/icon/pen-orange.png" alt="" />
                    </h2>
                </div>
            </div>
            <div class="inner-container">
                <div class="row no-gutters">
                    <div class="col-xl-8 offset-xl-2 offset-lg-0">
                        <div class="single-to-do row">
                            <div class="col-sm-12 col-md-5 no-padding-right">
                                <div class="to-do-img">
                                    <img src="img/to-do-img-1.png" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-12 no-padding-left col-md-7">
                                <div class="to-do-content">
                                    <h3 class="" style="color: #f57e5a; font-size: 30px">OUR MISSION</h3>
                                    <p class="paragraph" style="font-weight: 700; font-size: 18px">
                                        We, at Puspita Play school, have our eyes focussed on the holistic development of children be it emotionally, physically, intellectually and sociologically centred in order to provide the right direction to the young and beautiful minds out there.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="single-to-do row">
                            <div class="col-sm-12 col-md-5 no-padding-right">
                                <div class="to-do-img">
                                    <img src="img/group9.png" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-12 no-padding-left col-md-7">
                                <div class="to-do-content">
                                    <h3 class="" style="color: #f57e5a; font-size: 30px">OUR VISION</h3>
                                    <p class="paragraph" style="font-weight: 700; font-size: 18px">
                                        We envision a city, a state and thereby a nation filled with talented and playful young individuals to be the designers of the nation tomorrow possessing both the ethical and cognitive skills to strengthen the world
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--mission vision end-->
    <!--our goals area-->
    <section class="expect-area bg-white">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="area-heading font-w st-two">OUR GOALS</h2>
                    <p class="area-subline font-w">
                        Lorem ipsum dolor sit amet, consectetur Excepteur sint occaecat cupidatat non proident, sunt in
                        cuculpa qui officiacuculpa qui officiacuculpa qui officiaLorem ipsum dolor sit amet,cuculpa qui
                        officiacuculpa.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="sin-expect wow fadeInUp" data-wow-delay=".6s">
                        <div class="ex-icon">
                            <img src="img/icon/ser-1.png" alt="" />
                        </div>
                        <div class="ex-detail">
                            <h5>Experience Teachers</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur Excepteur sint occaecat cupidatat non proident,
                                sunt in
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="sin-expect wow fadeInUp" data-wow-delay=".6s">
                        <div class="ex-icon">
                            <img src="img/icon/ser-3.png" alt="" />
                        </div>
                        <div class="ex-detail">
                            <h5>Love With Care</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur Excepteur sint occaecat cupidatat non proident,
                                sunt in
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="sin-expect wow fadeInUp" data-wow-delay=".6s">
                        <div class="ex-icon">
                            <img src="img/icon/ser-4.png" alt="" />
                        </div>
                        <div class="ex-detail">
                            <h5>Physical Activity</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur Excepteur sint occaecat cupidatat non proident,
                                sunt in
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="sin-expect wow fadeInUp" data-wow-delay=".6s">
                        <div class="ex-icon">
                            <img src="img/icon/ser-2.png" alt="" />
                        </div>
                        <div class="ex-detail">
                            <h5>many Sports</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur Excepteur sint occaecat cupidatat non proident,
                                sunt in
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br />
    <!--our goals-->
    <!-- timeline area -->
    <!-- <section style="padding-bottom: 20px">
            <div class="container" style="background-image: url(img/bg/todo-area-bg.jpg); background-position: center">
                <div class="row">
                    <div class="col-lg-12" style="padding-top: 20px">
                        <h2 class="area-heading">
                            Timeline 
                            PUSPITA
                        </h2>
                    </div>
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <div class="timeline">
                                <div class="timeline-icon"><span class="year">2021</span></div>
                                <div class="timeline-content">
                                    <h3 class="title">Web Desginer</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices,
                                        luctus nunc ut, commodo enim. Vivamus sem erat.
                                    </p>
                                </div>
                            </div>
                            <div class="timeline">
                                <div class="timeline-icon"><span class="year">2020</span></div>
                                <div class="timeline-content">
                                    <h3 class="title">Web Developer</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices,
                                        luctus nunc ut, commodo enim. Vivamus sem erat.
                                    </p>
                                </div>
                            </div>
                            <div class="timeline">
                                <div class="timeline-icon"><span class="year">2019</span></div>
                                <div class="timeline-content">
                                    <h3 class="title">Web Developer</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices,
                                        luctus nunc ut, commodo enim. Vivamus sem erat.
                                    </p>
                                </div>
                            </div>
                            <div class="timeline">
                                <div class="timeline-icon"><span class="year">2018</span></div>
                                <div class="timeline-content">
                                    <h3 class="title">Web Developer</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices,
                                        luctus nunc ut, commodo enim. Vivamus sem erat.
                                    </p>
                                </div>
                            </div>
                            <div class="timeline">
                                <div class="timeline-icon"><span class="year">2017</span></div>
                                <div class="timeline-content">
                                    <h3 class="title">Web Developer</h3>
                                    <p class="description">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacinia mi ultrices,
                                        luctus nunc ut, commodo enim. Vivamus sem erat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- contact information -->
    <br />
    <section style="background-image: url(img/bg/todo-area-bg.jpg); background-position: center">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 offset-lg-1">
                    <div class="con-page-info">
                        <h3 style="color: #43a7bf">Contact Information</h3>
                        <div class="con-page-right">
                            <div class="sin-line">
                                <div class="sin-line-left">
                                    <h6>ADDRESS</h6>
                                </div>
                                <div class="sin-line-right">
                                    <p>
                                        <i class="fa fa-map-marker"></i>Plot No.-F/321, CDA-7, Near Margat Nagar Thana, Cuttack- 753014
                                    </p>
                                </div>
                            </div>
                            <div class="sin-line">
                                <div class="sin-line-left">
                                    <h6>24/7 SUPPORT</h6>
                                </div>
                                <div class="sin-line-right">
                                    <p><i class="fa fa-map-marker"></i>4(01) 789 - 658 - 4589</p>
                                    <p><i class="fa fa-phone"></i>infoyour@exempl.com</p>
                                </div>
                            </div>
                            <div class="sin-line">
                                <div class="sin-line-left">
                                    <h6>OPENING HOURS</h6>
                                </div>
                                <div class="sin-line-right">
                                    <p>
                                        <i class="fa fa-map-marker"></i> Monday – Friday 7.00 am – 9.00 pm (Closed on
                                        Weekends)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- map -->
                <div class="col-lg-6 offset-lg-0">
                    <div class="ts-map">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.478344612111!2d77.07619251440232!3d28.434993399746265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5960c864d3cf%3A0x60d14f9b615e2b87!2sSpade%20Event%20Management%20Services!5e0!3m2!1sen!2sin!4v1621509236965!5m2!1sen!2sin" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- map end -->
            </div>
        </div>
    </section>

    <!-- contact information end -->
    <?php include("footer.php"); ?>
    <!--Footer area end-->

    <!-- === jqyery === -->
    <script src="js/jquery.min.js"></script>
    <!-- === bootsrap-min === -->
    <script src="js/bootstrap.min.js"></script>
    <!-- === Scroll up min js === -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- === Price slider js === -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- === Counter up js === -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- === Waypoint js === -->
    <script src="js/jquery.waypoints.js"></script>
    <!-- === Lightbox js === -->
    <script src="js/venobox.min.js"></script>
    <!-- === ZOOM  js === -->
    <script src="js/jquery.elevatezoom.js"></script>
    <!-- === filterizr filter  js === -->
    <script src="js/jquery.filterizr.min.js"></script>
    <!-- === Owl Carousel js === -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- === WOW js === -->
    <script src="js/wow.js"></script>
    <!-- === Coundown js === -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- === Image loaded js === -->
    <script src="js/imageloaded.pkgd.min.js"></script>
    <!-- === Mailchimp integration js === -->
    <script src="js/mailchimp.js"></script>
    <!-- === Mobile menu  js === -->
    <script src="js/mobile-menu.js"></script>
    <!-- === Main  js === -->
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from www.themeim.com/demo/kidzcare/kids/about-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Jun 2021 12:18:09 GMT -->

</html>