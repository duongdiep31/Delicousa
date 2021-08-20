        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Page Title Area
       
       
            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <div class="page-title-area bg-image bg-parallax2" style="background-image:url('Publics/images/header/header1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content text-center">
                            <div class="page-header-caption">
                                <h2 class="page-title">Thực đơn chi tiết</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/project/">Trang chủ</a></li>
                                    <li class="breadcrumb-item"><a href="/project/menulist">Thực đơn</a></li>
                                    <li class="breadcrumb-item active">Thực đơn chi tiết</li>
                                </ol>
                            </div>
                            <!--~~./ breadcrumb-area ~~-->
                        </div>
                        <!--~~./ page-header-content ~~-->
                    </div>
                </div>
            </div>
            <!--~~./ end container ~~-->
        </div>
        <!--~~./ end page title area ~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Food Single Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="food-single-block style-one">
            <!--~~~~~ Start Single food Details ~~~~~-->
            <div class="single-food-details ptb-100">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-lg-5">

                            <?php
                            $price = $item->price;
                            $dis = $item->discount;
                            $priceDis = ($price * $dis) / 100;
                            $priceNew = $price - $priceDis;
                            ?>
                            <div class="single-food-header">
                                <h3 class="food-title"><?= $item->name; ?> </h3>
                                <div class="food-price">
                                    <?= $priceNew ?> VND
                                    <?php if ($dis != 0) : ?>
                                        <del><?= $price; ?></del>
                                </div>
                            <?php endif; ?>
                            </div>
                            <!-- slider -->
                            <div class="single-slider-item">
                                <ul class="food-detail-slide owl-carousel">
                                    <li class="item">
                                        <img style="padding-left: 100px;" src="<?= getStorageLink($item->image) ?>" alt="img">
                                    </li>
                                    <li class="item">
                                        <img src="Publics/images/foodmenu/single/one/food-single1.png" alt="img">
                                    </li>
                                    <li class="item">
                                        <img src="Publics/images/foodmenu/single/one/food-single1.png" alt="img">
                                    </li>
                                </ul>
                            </div>
                            <!-- slider -->
                            <div class="single-food-content-area">
                                <div class="single-food-content-inner">
                                    <ul class="thumbnails-wrapper">

                                    </ul>
                                    <div class="food-item-info">

                                        <form action="#">

                                            <div class="food-detail-bottom">
                                                <div class="input-spinner number">
                                                    <a href="javascript:void(0)" class="minus">-</a>
                                                    <input id="food-number" type="text" value="1">
                                                    <a href="javascript:void(0)" class="plus">+</a>
                                                </div>
                                                <!--/.input-spinner-->
                                                <div class="share-and-whishlist">
                                                    <a class="add-to-cart" href="/project/addcart&id=<?= $item->id ?>"><span class="fas fa-shopping-cart"></span></a>
                                                    <a class="add-to-whishlist" href="#"><span class="fas fa-heart"></span></a>
                                                    <div class="food-share">
                                                        <div class="share-link">
                                                            <a href="#"><span class="fas fa-share-alt"></span></a>
                                                            <ul class="share-list">
                                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                                                                </li>
                                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--~./ end single products details ~-->

            <div class="food-details-tab-area ptb-100 bg-white-smoke">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="filter-tab-area">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#food_description" role="tab">Thành phần</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#food_details" role="tab">Bình luận</a>
                                    </li>
                                   
                                </ul>
                            </div>
                            <!--~./ end filter tab area ~-->

                            <div class="tab-content filter-tab-content">
                                <!--~~~~~ Start Tab Pane ~~~~~-->
                                <div class="tab-pane fade show active food-description ml-b-5" id="food_description" role="tabpanel">
                                <?php ?>
                                   
                                        <p><?=$item->Ingredients; ?></p>
                                   
                                <?php  ?>
                                </div>
                                <!--~./ end tab pane ~-->

                                <!--~~~~~ Start Tab Pane ~~~~~-->
                                <div class="tab-pane fade" id="food_details" role="tabpanel">
                                <div class="tab-content filter-tab-content">
                                <!--~~~~~ Start Tab Pane ~~~~~-->
                                <?php foreach ($menu as $item) : ?>
                                    <div class="tab-pane fade show active food-description ml-b-5" id="food_description" role="tabpanel">
                                        <p><?= $item->description; ?></p>
                                    </div>
                                <?php endforeach; ?>
                              
                                        <?php foreach ($comments as $comment) : ?>


                                            <div class="food-review">


                                                <div class="rating-riview">

                                                    <div class="d-block">
                                                        <span class="review-comment"><?= $comment->content ?></span>
                                                    </div><!-- review -->
                                                </div>
                                                <div class="review-user">
                                                    <p class="review-user-name"><?= $comment->name ?></p>
                                                    <p class="review-meta"><?= $comment->created_at ?></p>
                                                </div>


                                            </div>

                                        <?php endforeach; ?>

                                        <!--food-review -->
                                        <form action="/project/insertcomment" method="post">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="name">Họ Và Tên
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="content">Nội Dung <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-6">
                                                    <textarea class="form-control" id="content" name="content" rows="5" placeholder="Mời Nhập Nội Dung...."></textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" name="product_id" value="<?= $item->id; ?>">


                                            <div class="d-block">
                                                <button type="submit" class="btn btn-default">Bình Luận</button>



                                            </div><!-- see all review end -->
                                        </form>



                                  
                                </div>
                            </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           