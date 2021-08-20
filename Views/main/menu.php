<div class="page-title-area bg-image bg-parallax2" style="background-image:url('Publics/images/header/header1.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-header-content text-center">
                    <div class="page-header-caption">
                        <h2 class="page-title">Thực đơn</h2>
                    </div>
                    <div class="breadcrumb-area">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/project">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Thực đơn</li>
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
<div class="row">
        <div class="col-12">
            <div class="filter-foodmenu-tab style-three">
                <ul class="nav nav-tabs" ">
                   

                    <li>

                        <a d href="/project/menulist" >tất cả</a>
                    </li>
                    <?php foreach($cate as $item):  ?>

                    <li>

                        <a d href="/project/menucate&id=<?=$item->id?>" ><?=$item->name?></a>
                    </li>
                    <?php endforeach; ?>
                  
                        
                </ul>
            </div>
            <!--~./ end filter foodmenu tab ~-->
        </div><!-- /.col-12 -->
    </div><
<div class="food-menu-block style-one ptb-100">
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="tab-content filter-foodmenu-tab-content">

                    <div class="tab-pane fade active show" id="foodmenu1" role="tabpanel" data-animate="hg-fadeInUp">
                                          
                        <div class="row">
                            
                            <?php foreach ($menu as $item) : ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="food-grid-item grid-style-three">
                                        <div class="food-thumb">
                                            <img src="<?= getStorageLink($item->image) ?>" alt="Food">
                                            <div class="overlay">
                                                <div class="food-cart-tools">
                                                    <a href="/project/addcart&id=<?= $item->id ?>" class="food-cart btn btn-default">Thêm vào giỏ hàng</a>
                                                    <a href="#" class="add-bookmark"><span class="icon-heart"></span></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="food-info">
                                            <h3 class="food-title"><a href="/project/detailsfood&id=<?= $item->id ?>">
                                                        <?= $item->name ?>
                                                    </a>
                                            </h3>
                                           
                                            <?php
                                                $price = $item->price;
                                                $dis = $item->discount;
                                                $priceDis = ($price*$dis)/100;
                                                $priceNew= $price-$priceDis;
                                            ?>

                                                <div class="food-price">
                                                        <?=$priceNew?> VND
                                                        <?php if($dis != 0):?>
                                                            <del><?=$price;?>VND</del>
                                                            <?php endif;?>
                                                        
                                                </div>
                                                



                                        </div>
                                        
                                        
                                    </div>
                                    
                                    <!--~./ food-menu-item ~-->
                                </div>
                            <?php endforeach ?>

                        </div><!-- /.row -->
                    </div>
                    <!--~./ end tab pane ~-->

                
               
                </div>
            </div>
           
        </div><!-- /.container -->
    </div>
</div>