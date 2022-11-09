<?php 
require("configs/connection.php");
?>
<!DOCTYPE html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Shop</title>
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
        <div class="epix-breadcrumb-area mb-40">
            <div class="container">
                <h4 class="epix-breadcrumb-title">SHOP PAGE</h4>
                <div class="epix-breadcrumb">
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li><span>Shop Page</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->
        <!-- shop product area start -->
        <div class="shop-product-area pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-3 col-lg-4">
                        <div class="epix-sidebar-area">
                            <div class="epix-sidebar-widget mb-40">
                                <h4 class="epix-s-widget-title">SHOP BY CATEGORIES</h4>
                                <div class="epix-taglist">
                                    <ul>
                                        <li><a href="shop">Accessories</a></li>
                                        <li><a href="shop">Cameras</a></li>
                                        <li><a href="shop">Computer & Laptop</a></li>
                                        <li><a href="shop">Tablet</a></li>
                                        <li><a href="shop">Games & Accessories</a></li>
                                        <li><a href="shop">Smartphone</a></li>
                                        <li><a href="shop">Television</a></li>
                                        <li><a href="shop">Uncategorized</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="epix-sidebar-widget">
                                <h4 class="epix-s-widget-title">PRICE</h4>
                                <div class="slider-range mb-40">
                                    <div id="slider-range"></div>
                                    <p>
                                        <label for="amount">Price :</label>
                                        <input type="text" id="amount" readonly>
                                    </p>
                                </div>
                            </div>
                            <!-- <div class="epix-sidebar-widget mb-40">
                                <h4 class="epix-s-widget-title">COLORS</h4>
                                <div class="epix-color-scheme">
                                    <ul>
                                        <li>
                                            <a href="#" class="active" data-bg-color="#D1D1D1"></a>
                                            <a href="#" data-bg-color="#FC7C8D"></a>
                                            <a href="#" data-bg-color="#FEE496"></a>
                                            <a href="#" data-bg-color="#161616"></a>
                                            <a href="#" data-bg-color="#00A651)"></a>
                                            <a href="#" data-bg-color="#F50000"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="epix-sidebar-widget mb-40">
                                <h4 class="epix-s-widget-title">TAGS</h4>
                                <div class="tagcloud">
                                    <a href="shop">Ryzen</a>
                                    <a href="shop">Xeon</a>
                                    <a href="shop">Athlon</a>
                                    <a href="shop">Core i5</a>
                                    <a href="shop">Core i7</a>
                                    <a href="shop">Core i9</a>
                                    <a href="shop">Celeron</a>
                                </div>
                            </div>
                            <!-- <div class="epix-sidebar-widget mb-40">
                                <h4 class="epix-s-widget-title">RECENT PRODUCTS</h4>
                                <div class="epix-product-list mb-20">
                                    <div class="thumb">
                                        <a href="product"><img src="assets/img/product/side-sm-img-2.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="epix-list-product-sm-title"><a href="product">Loose Oversized</a></h4>
                                        <div class="price-box">
                                            <span class="price">$125.99</span>
                                            <a href="product">+ Select Option</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="epix-product-list mb-20">
                                    <div class="thumb">
                                        <a href="product"><img src="assets/img/product/side-sm-img-3.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="epix-list-product-sm-title"><a href="product">Loose Oversized</a></h4>
                                        <div class="price-box">
                                            <span class="price">$125.99</span>
                                            <a href="product">+ Select Option</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="epix-product-list mb-20">
                                    <div class="thumb">
                                        <a href="product"><img src="assets/img/product/side-sm-img-4.jpg" alt=""></a>
                                    </div>
                                    <div class="content">
                                        <h4 class="epix-list-product-sm-title"><a href="product">Loose Oversized</a></h4>
                                        <div class="price-box">
                                            <span class="price">$125.99</span>
                                            <a href="product">+ Select Option</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- /. sidebar area -->
                    </div>
                    <div class="col-xxl-9 col-lg-8 epix-shop-order">
                        <div class="epix-shop-products-display">
                            <div class="epix-shop-product-topbar">
                                <div class="epix-content-header mb-55">
                                    <div class="epix-ch-left">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#grid-view" type="button"><i class="fas fa-th"></i></button>
                                                <button class="" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#list-view" type="button"><i class="fas fa-list-ul"></i></button>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="epix-ch-right">
                                        <div class="show-text">
                                            <span>Showing 1–12 of 20 results</span>
                                        </div>
                                        <div class="sort-wrapper">
                                            <select name="select" id="select">
                                                <option value="1">Sort By New</option>
                                                <option value="2">Sort By New</option>
                                                <option value="3">Sort By New</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="epix-shop-product-main">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="grid-view">
                                            <div class="row">
                                                <?php
                                                $query = mysqli_query($connection, "SELECT * FROM products, categories, products_categories WHERE products_categories.product_id = products.product_id AND products_categories.category_id = categories.category_id ORDER BY rand() LIMIT 20") or die(mysqli_error($connection));
                                                while ($product = mysqli_fetch_assoc($query)) {

                                                ?>

                                                    <div class="col-xxl-3 col-sm-6 col-md-4">
                                                        <div class="epix-single-product-3 mb-40 style-2 text-center swiper-slide">
                                                            <div class="epix-product-thumb-3">
                                                                <div class="epix-action">
                                                                <a href="product?details=<?php print $product["product_id"]; ?>" class="p-cart product-popup-toggle">
                                                                <i class="fal fa-eye"></i>
                                                                <i class="fal fa-eye"></i>
                                                            </a>
                                                            <a href="https://wa.me/250788458897?text=Hello, i'm interested to buy this product, http://kabstore.devslab.io/product?details=<?php print $product["product_id"]; ?>" class="p-cart">
                                                                <i class="fab fa-whatsapp"></i>
                                                                <i class="fab fa-whatsapp"></i>
                                                            </a>
                                                                </div>
                                                                <span class="sale">sale</span>
                                                                <a href="product"><img src="<?php print $product["product_image"]; ?>" alt=""></a>
                                                            </div>
                                                            <div class="price-box price-box-3">
                                                                <span class="price">RWF <?php print number_format($product["product_price"]); ?></span>
                                                                
                                                            </div>
                                                            <h5 class="epix-p-title epix-p-title-3"><a href="product"><?php print $product["product_name"]; ?></a></h5>
                                                        </div>
                                                    </div>
                                                <?php } ?>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-xxl-end">
                    <div class="col-xxl-9">
                        <div class="epix-pagination pagination-area mt-40 mb-70">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center justify-xl-content-left">
                                    <li class="page-item disabled">
                                        <a class="page-link prev" href="shop" tabindex="-1"><i class="fal fa-angle-left"></i> Prev</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="shop">1</a></li>
                                    <li class="page-item"><a class="page-link" href="shop">2</a></li>
                                    <li class="page-item"><a class="page-link" href="shop">3</a></li>
                                    <li class="page-item"><a class="page-link" href="shop">4</a></li>
                                    <li class="page-item">
                                        <a class="page-link next" href="shop">Next <i class="fal fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop product area end -->
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
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/jquery-ui-slider-range.js"></script>
    <script src="assets/js/jquery.elevatezoom.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/mouse-wheel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>