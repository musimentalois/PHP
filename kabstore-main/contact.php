<!DOCTYPE html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Contact Us</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="manifest" href="" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
    <!-- Place favicon.png in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/ui-range-slider.css" />
    <link rel="stylesheet" href="assets/css/meanmenu.css" />
    <link rel="stylesheet" href="assets/css/swipper.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <?php require("templates/header.php"); ?>
    <main>
        <!-- prealoder area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="logo-loader"><img src="assets/img/logo/logo-design.PNG" alt="" width="200"></div>
                    <!-- <div class="object" id="first_object"></div>
                    <div class="object" id="second_object"></div>
                    <div class="object" id="third_object"></div> -->
                </div>
            </div>
        </div>
        <!-- prealoder area end -->
        <!-- breadcrumb area start -->
        <div class="epix-breadcrumb-area mb-100">
            <div class="container">
                <h4 class="epix-breadcrumb-title">CONTACT PAGE</h4>
                <div class="epix-breadcrumb">
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li><span>Contact Page</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->
        <!-- contact area start -->
        <section class="contact__area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact__info">
                            <h3>Find us here.</h3>
                            <ul class="mb-55">
                                <li class="d-flex mb-35">
                                    <div class="contact__info-icon mr-20">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="contact__info-content">
                                        <h6>Address:</h6>
                                        <span>Makuza Peace Plaza, KN 48 St, Kigali, Rwanda</span>
                                    </div>
                                </li>
                                <li class="d-flex mb-35">
                                    <div class="contact__info-icon mr-20">
                                        <i class="fal fa-envelope-open-text"></i>
                                    </div>
                                    <div class="contact__info-content">
                                        <h6>Email:</h6>
                                        <span><a href="mailto:info@example.com" class="__cf_email__" data-cfemail="a7e4c8c9d3c6c4d3e7c2d5c2c9d3cfc2cac289c4c8ca">sales@kabstores.com</a></span>
                                    </div>
                                </li>
                                <li class="d-flex mb-35">
                                    <div class="contact__info-icon mr-20">
                                        <i class="fal fa-phone-alt"></i>
                                    </div>
                                    <div class="contact__info-content">
                                        <h6>Number Phone:</h6>
                                        <span>(250) 788 458 897</span>
                                    </div>
                                </li>
                            </ul>
                            <!-- <p>Outstock is a premium Templates theme with advanced admin module. It’s extremely customizable,
                                easy to use and fully responsive and retina ready. Vel illum dolore eu feugiat nulla facilisis
                                at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                                augue duis dolore te feugait nulla facilisi.</p> -->

                            <div class="contact__social">
                                <ul>
                                    <!-- <li><a href="https://www.instagram.com/kabstore_rw/"><i class="fab fa-instagram" style="font-size:20px"></i></i></a></li> -->
                                    <!-- <li><a href="#"><i class="fab fa-twitter" style="font-size:20px"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact__form">
                            <h3>Contact Us.</h3>
                            <form action="https://www.devsnews.com/template/KABSTORE/KABSTORE/assets/mail.php" id="contact-form">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact__input">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact__input">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact__input">
                                            <label>Subject <span class="required">*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact__input">
                                            <label>Message</label>
                                            <textarea cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact__submit">
                                            <button type="submit" class="os-btn os-btn-black">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="ajax-response"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end -->
    </main>

    <?php require("templates/footer.php"); ?>

    <!-- JS here -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/swipper-bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/jquery.elevatezoom.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/jquery-ui-slider-range.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/mouse-wheel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>