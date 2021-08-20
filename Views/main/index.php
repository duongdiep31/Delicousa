<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Frontpage Banner Section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="frontpage-banner-section frontpage-banner-style-four bg-image"
            style="background-image:url('Publics/assets/images/bg/food-menu-bg8.jpg')">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-lg-8">
                        <div class="frontpage-banner-content text-center">
                            <img src="Publics/images/home/home-pizza.png" alt="Pizza Thumb">
                            <div class="frontpage-text-ovelay">
                                <div class="element-group">
                                    <div class="element one">
                                        <img src="Publics/images/element/element3.1.png" alt="Element">
                                    </div>
                                    <div class="element two">
                                        <img src="Publics/images/element/element2.3.png" alt="Element">
                                    </div>
                                </div>
                                <div class="frontpage-text-ovelay-inner">
                                    <h1 class="banner-title"><span>Đặt ngay</span> Pizza <strong>Fresh</strong></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--~./ end frontpage banner Section ~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start About Us Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="about-us-block style-three ptb-100 bg-image"
            style="background-image:url('Publics/images/bg/bg-pattent7.jpg')">
            <div class="container">
                <!-- Title Row -->
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2 class="title-main"><span></span>Pizza <span class="text-right">Ngon </span>
                            </h2><!-- /.title-main -->
                        </div>
                        <div class="about-content">
                            <p>Từ bánh mì kẹp thịt gà nướng Tandoori đến bánh mì kẹp thịt gà đơn giản với sốt mayonnaise hương thảo tỏi, hãy tạo ra một sự thay đổi mới cho món nướng cũ được yêu thích với các công thức làm bánh mì kẹp thịt gà độc đáo này. Bạn có thấy Teletubbies nào ở đây không? Bạn có thấy một thẻ nhựa mảnh mai được kẹp vào áo sơ mi của tôi với tên tôi được in trên đó bằng katchep tuyệt vời không</p>
                            <div class="btn-group-default">
                                <a href="#" class="btn btn-default">KINH NGHIỆM</a>
                                <a href="/project/menulist" class="btn btn-default btn-black">THỰC ĐƠN</a>
                            </div>
                        </div><!-- /.about-content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="mock-up-thumb md-mrt-50">
                            <img src="Publics/images/about/about6.png" alt="About Mock" />
                        </div><!-- /.mock-up-block -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <div class="featured-block style-two ptb-100">
           
            <div class="container ml-b-30">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title style-five">
                           
                            <h2 class="title-main">Danh mục</h2>
                            <div class="divider-two">
                                <span class="icon-ico"></span>
                            </div>
                        </div><!-- /.section-title -->
                    </div>
                </div>
                <div class="row">
                <?php foreach($cate as $item):  ?>
                    <div class="col-lg-3 col-md-6">
                   
                   
                   
                        <div class="featured-item">
                            <figure class="featured-thumb">
                                <img height="500px" src="<?= getStorageLink($item->image)?>" alt="Featured Thumb">
                            </figure>
                            <div class="featured-info">
                                <div class="featured-info-inner">
                                    
                                    <h3 class="featured-title"> <a  href="/project/menucate&id=<?=$item->id?>" ><?=$item->name?></a></h3>
                                </div>
                            </div>
                            
                        </div><!-- /.featured-item -->
                       
                    </div>
                    <?php endforeach; ?>
                  
                </div>
            </div><!-- /.container -->
        </div>







        <div class="food-menu-block product-block-carousel-nav ptb-100 bg-image"
            style="background-image:url('assets/images/bg/bg-pattent3.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title style-five text-center">
                            <!-- <h3 class="title-sub">Our Deliciois Foods</h3> -->
                            <h2 class="title-main">Khuyến mãi</h2>
                        </div><!-- /.section-title -->
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content filter-foodmenu-tab-content">
                            <!--~~~~~ Start Tab Pane ~~~~~-->
                            <div class="tab-pane fade active show" id="foodmenu1" role="tabpanel"
                                data-animate="hg-fadeInUp">
                                <div class="product-food-carousel2 owl-carousel">

                                    <?php foreach($menu as $item): ?>
                                        <?php
                                                $price = $item->price ;
                                                $dis = $item->discount;
                                                $priceDis = ($price*$dis)/100;
                                                $priceNew= $price-$priceDis;
                                            ?>
                                            <?php if($dis != 0):?>
                                    <div class="food-grid-item grid-style-three">

                                        <div class="food-thumb">
                                            <img src="<?=getStorageLink($item->image)?>" alt="Food">
                                            <div class="overlay">
                                                <div class="food-cart-tools">
                                                    <a href="#" class="food-cart btn btn-default">Thêm Giỏ Hàng</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="food-info">
                                            <h3 class="food-title"><a href="/project/detailsfood&id=<?=$item->id?>"><?=$item->name?></a></h3>
                                            <div class="food-price"><?= number_format($priceNew)  ?></div>
                                            <del><?= number_format($price)?></del>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <?php endforeach;?>

                                    <!--~./ food-menu-item ~-->
                               
                                    <!--~./ food-menu-item ~-->
                                   
                                    <!--~./ food-menu-item ~-->
                                </div><!-- /.product-food-carousel2 -->
                                <div class="carousel-nav-text pd-t-10 text-center">
                                    <button class="btn-links btn-prev">
                                        <span>prev</span>
                                    </button>
                                    <button class="btn-links btn-next">
                                        <span>next</span>
                                    </button>
                                </div>
                                <!--~./ end carousel nav text ~-->
                            </div>
                            <!--~./ end tab pane ~-->

                            <!--~~~~~ Start Tab Pane ~~~~~-->
                  
                            <!--~./ end tab pane ~-->

                            <!--~~~~~ Start Tab Pane ~~~~~-->
                      
                            <!--~./ end tab pane ~-->

                            <!--~~~~~ Start Tab Pane ~~~~~-->
                         
                            <!--~./ end tab pane ~-->

                            <!--~~~~~ Start Tab Pane ~~~~~-->
                           
                            <!--~./ end tab pane ~-->
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </div>
      









        <div class="promo-block style-two ptb-100 bg-image"
            style="background-image:url('Publics/images/bg/promo-bg5.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="promo-content text-center">
                            <h4 class="promo-subtitle">Mua ngay & Nhận</h4><!-- /.promo-title -->
                            <h2 class="promo-title">FREE <strong> 1 suất <span>pizza</span></strong></h2>
                            <!-- /.promo-title -->
                            <div class="btn-group-default">
                                <a class="btn btn-default" href="#0">Đặt ngay</a>
                                <a class="btn btn-default btn-black" href="#0">Xem thực đơn</a>
                            </div>
                        </div><!-- /.promo-content-->
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!--~~./ end promo block ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Choose Us Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="choose-us-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="choose-thumb">
                            <img src="Publics/images/others/choose-thumb.png" alt="Choose Mock" />
                        </div><!-- /.choose-block -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-8">
                        <div class="choose-us-content ptb-90">
                            <div class="row ml-b-50">
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-choose-item style-two">
                                        <div class="icon">
                                            <span class="icon-food3"></span>
                                        </div>
                                        <div class="info">
                                            <h3 class="heading24">Giao hàng có sẵn</h3>
                                            <p>The way they make shows is, they make one show. That show's called a
                                                pilot. Then they show that show to the people who make shows.</p>
                                        </div>
                                    </div><!-- /.single-choose-item -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-choose-item style-two">
                                        <div class="icon">
                                            <span class="icon-order-food"></span>
                                        </div>
                                        <div class="info">
                                            <h3 class="heading24">Đặt hàng online</h3>
                                            <p>The way they make shows is, they make one show. That show's called a
                                                pilot. Then they show that show to the people who make shows.</p>
                                        </div>
                                    </div><!-- /.single-choose-item -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-choose-item style-two">
                                        <div class="icon">
                                            <span class="icon-cafe"></span>
                                        </div>
                                        <div class="info">
                                            <h3 class="heading24">CỬA HÀNG CỦA CHÚNG TÔI</h3>
                                            <p>The way they make shows is, they make one show. That show's called a
                                                pilot. Then they show that show to the people who make shows.</p>
                                        </div>
                                    </div><!-- /.single-choose-item -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-choose-item style-two">
                                        <div class="icon">
                                            <span class="icon-call-center3"></span>
                                        </div>
                                        <div class="info">
                                            <h3 class="heading24">Hotline</h3>
                                            <p>The way they make shows is, they make one show. That show's called a
                                                pilot. Then they show that show to the people who make shows.</p>
                                        </div>
                                    </div><!-- /.single-choose-item -->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
       