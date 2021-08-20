<!doctype html>
<html lang="en">


<!-- Mirrored from miraclestudio.design/html/deliciousa-html/index05.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Jun 2021 11:14:08 GMT -->

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Unlimited Foods & Restaurants HTML5 Template">
    <meta name="keywords" content="HTML5, Template, Design, asian food, bakery, burger, cafe, chocolate, coffee, delivery, dessert, donuts, drinks, farm, fast food, food, organic, restaurant " />
    <meta name="author" content="creative-wp">

    <!-- Titles
    ================================================== -->
    <title>Deliciousa | Pizza ngon chỗ ngồi đẹp</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="Publics/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="72x72" href="Publics/images/android-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="Publics/images/apple-icon-144x144.png">

    <!-- Custom Font
    ================================================== -->
    <link href="https://fonts.googleapis.com/css2?family=Herr+Von+Muellerhoff&amp;family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&amp;family=Aguafina+Script&amp;family=Poppins:wght@300;400;500;600;700&amp;family=Oswald:wght@300;400;700&amp;display=swap" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="Publics/css/bootstrap.min.css">
    <link rel="stylesheet" href="Publics/css/magnific-popup.css">
    <link rel="stylesheet" href="Publics/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Publics/css/swiper.min.css">
    <link rel="stylesheet" href="Publics/css/pagepilling.min.css">
    <link rel="stylesheet" href="Publics/css/magnific-popup.css">
    <link rel="stylesheet" href="Publics/css/simple-scrollbar.css">
    <link rel="stylesheet" href="Publics/css/datepicker.min.css">
    <link rel="stylesheet" href="Publics/css/fontawesome.all.min.css">
    <link rel="stylesheet" href="Publics/css/icomoon.css">
    <link rel="stylesheet" href="Publics/css/style.css">
    <link rel="stylesheet" href="Publics/css/color/color-five.css">

    <script src="Publics/js/modernizr.min.js"></script>
</head>

<body>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->

    <div class="site-content sidebar-menu-active">
        <?php
        require BASE_MAIN . '/Views/main/header.php';
        echo $contents;
        require BASE_MAIN . '/Views/main/footer.php';
        ?>
        <div>
        <div class="site-content">
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Site Header
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <header class="site-header header-style-thirteen intro-element header-absolute">
                <div class="navigation-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="site-navigation">
                                    <div class="site-branding">
                                        <a href="/project/">
                                            <img src="Publics/assets/images/logo/footer-logo4.png" alt="Site Logo" />
                                        </a>
                                    </div><!-- /.site-branding -->
                                    <div class="header-right-area">
                                        <nav class="navigation">
                                            <div class="menu-wrapper">
                                                <div class="menu-content">
                                                    <ul class="mainmenu">
                                                        <li class="megamenu">
                                                            <a class="active" href="/project/">Trang chủ</a>
                                                        </li>
                                                      
                                                        <li class="megamenu">
                                                            <a class="active" href="/project/menulist">Thực đơn</a>
                                                        </li>
                                                        <li class="megamenu">
                                                            <a class="active" href="/project/blog">Tin tức</a>
                                                        </li>
                                                        <!-- <li class="megamenu">
                                                            <a class="active" href="/project/about">Giới thiệu</a>
                                                        </li> -->
                                                        <li class="megamenu">
                                                            <a class="active" href="/project/contact">Liên hệ</a>
                                                        </li>
                                                        <li class="megamenu">
                                                            <a class="active" href="/project/searchOrder">Theo dõi đơn hàng</a>
                                                        </li>



                                                    </ul> <!-- /.menu-list -->
                                                </div> <!-- /.hours-content-->
                                            </div><!-- /.menu-wrapper -->
                                        </nav>
                                        <div class="intro-socail-share">
                                            <div class="socail-share">
                                                <a href="https://www.facebook.com/skyzenky/"><span class="fab fa-facebook-f"></span></a>
                                                <a href="https://www.instagram.com/duongdieppp/"><span class="fab fa-instagram"></span></a>
                                                <a href="#"><span class="fab fa-tripadvisor"></span></a>
                                            </div>
                                        </div><!-- /.intro-socail-share -->
                                        <div class="header-card-area">
                                            <div class="col-6">
                                                <div class="header-right-area">
                                                    <div class="header-card-area">
                                                        <a href="#">
                                                            <span class="icon-paper-bag"></span>
                                                            <sup>

                                                                <?php echo empty($_SESSION['cart']) ? 0  : count($_SESSION['cart']) ?>
                                                            </sup>
                                                        </a>

                                                        <div class="cart-list">
                                                            <?php
                                                            $total=0;
                                                            if (isset($_SESSION['cart'])) {
                                                                foreach ($_SESSION['cart'] as $item) :
                                                                    $getpr = MenuModel::find($item['id']);
                                                                    $slItem = $item['sl'];
                                                                    $AllpriceSl = ($getpr->price) * $slItem;
                                                                    $total += $AllpriceSl;
                                                            ?>
                                                                    <div class="cart-item">

                                                                        <div class="product-thumb">
                                                                            <img alt="Single product" src="<?= getStorageLink($getpr->image) ?>">
                                                                        </div>
                                                                        <!--~./ product-thumb ~-->
                                                                        <div class="product-info">
                                                                            <h4 class="title"><?= $getpr->name ?></h4>
                                                                            <div class="price"><?= $getpr->price; ?></div>
                                                                            <div class="icon-closed">
                                                                                <a href="/project/removecart&id=<?= $getpr->id ?>"><i class="fas fa-times"></i></a>
                                                                            </div>
                                                                        </div>
                                                                        <!--~./ product-info ~-->
                                                                    </div>


                                                            <?php
                                                                endforeach;
                                                            } else {
                                                                echo 'Trống';
                                                            }

                                                            ?>
                                                            <!--~./ cart-item ~-->

                                                            <div class="order-total">
                                                                <h4 class="order">Tổng<span class="amount"><?= $total; ?></sup></span>
                                                                </h4>
                                                            </div>

                                                            <div class="cart-btn-group">
                                                                <a href="/project/cart" class="btn btn-default btn-primary">Xem giỏ hàng</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--~./ header card area ~-->
                                                    <div class="hamburger-menus">
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div><!-- /.site-navigation -->
                                        </div><!-- /.col-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div><!-- /.navigation-area -->

                            <div class="mobile-sidebar-menu sidebar-menu">
                                <div class="overlaybg"></div>
                            </div>
            </header>
            <!--~~./ end site header ~~-->
            <!--~~~ Sticky Header ~~~-->
            <div id="sticky-header"></div>
            </div>
            <!--~./ end sticky header ~-->

            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Frontpage Banner Section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
          
            <!--~./ end frontpage banner Section ~-->


            <!-- <div class="sidebar-menu-area style-two">
        <div class="site-navigation sidebar-menu">
            <div class="activeScrollBar tse-scrollable">
                <div class="tse-content">
                    <nav class="navigation">
                        <div class="menu-content">
                            <ul class="mainmenu">
                                <li>
                                    <a class="" href="/project/">Trang chủ</a>
                                  
                                </li>
                                <li>
                                    <a href="/project/searchOrder">Tìm Kiếm Đơn Hàng...</a>
                                   
                                </li>
                                <li>
                                    <a href="/project/menulist">Menu</a>
                                  
                                </li>
                              
                         
                                <li>
                                    <a href="/project/blog">Tin tức</a>
                                 
                                </li>
                                <li>
                                    <a class="" href="/project/about">Giới thiệu</a>
        
                                </li>
                                <li><a href="/project/contact">Liên hệ</a></li>
                            </ul> 
                        </div> 
                    </nav>
                </div>
            </div>
        </div> -->
            <!--~~./ end sidebar menu area ~~-->

            <!-- All The JS Files
    ================================================== -->
            <script src="Publics/js/jquery.js"></script>
            <script src="Publics/js/popper.min.js"></script>
            <script src="Publics/js/bootstrap.min.js"></script>
            <script src="Publics/js/imagesloaded.pkgd.min.js"></script>
            <script src="Publics/js/jquery.validate.min.js"></script>
            <script src="Publics/js/theia-sticky-sidebar.min.js"></script>
            <script src="Publics/js/ResizeSensor.min.js"></script>
            <script src="Publics/js/owl.carousel.min.js"></script>
            <script src="Publics/js/swiper.min.js"></script>
            <script src="Publics/js/pagepilling.min.js"></script>
            <script src="Publics/js/jarallax.min.js"></script>
            <script src="Publics/js/masonry.pkgd.min.js"></script>
            <script src="Publics/js/jquery.fitvids.js"></script>
            <script src="Publics/js/jquery.magnific-popup.min.js"></script>
            <script src="Publics/js/simple-scrollbar.min.js"></script>
            <script src="Publics/js/scrolla.jquery.min.js"></script>
            <script src="Publics/js/wan-spinner.js"></script>
            <script src="Publics/js/jquery.nice-select.min.js"></script>
            <script src="Publics/js/kinetic.js"></script>
            <script src="Publics/js/jquery.final-countdown.min.js"></script>
            <script src="Publics/js/datepicker.min.js"></script>
            <script src="Publics/js/main.js"></script><!-- main-js -->
</body>


<!-- Mirrored from miraclestudio.design/html/deliciousa-html/index05.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Jun 2021 11:14:35 GMT -->

</html>