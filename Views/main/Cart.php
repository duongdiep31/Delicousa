<?php
    $total = 0;
    if (isset($_SESSION['cart'])) {
        $ship = 30000;
    }else{
        $ship = 0;
    }

?>

<div class="page-title-area bg-image bg-parallax2"
            style="background-image:url('Publics/images/header/header1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content text-center">
                            <div class="page-header-caption">
                                <h2 class="page-title">Giỏ hàng</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Giỏ hàng</li>
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
            Start Shopping Cart Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="shopping-cart-block ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="shop-table table">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số lượng</th>
                                        <th class="product-total">Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>

                                            <?php
                                                        if(isset($_SESSION['cart'])){
                                                            foreach($_SESSION['cart'] as $key => $item): // chuyen mang thanh key
                                                            $getId = MenuModel::find($item['id']); // get sp theo id
                                                            $slProduct=$item['sl']; // chuyen session $item['sl] => bien $slProduct
                                                            $totalPricePro = ($getId->price) * $slProduct; // bien gia nhan so luong
                                                            $total += $totalPricePro; // tong tien cua tat ca
                                                        
                                            ?>
                                                <tr class="shoping-cart-item">
                                                    <td class="product-thumbnail">
                                                        <a href="/project/detailsfood&id=<?=$getId->id?>"><img src="<?= getStorageLink($getId->image)?>"
                                                                alt="Adventure"></a>
                                                    </td>
                                                    <td class="product-info">
                                                        <h2><a href="/project/detailsfood&id=<?=$getId->id?>"><?=$getId->name?></a></h2>
                                                        <ul class="list choosen-list">
                                                            <!-- <li><span>Add: </span>Cheese Sauce</li>
                                                            <li><span>Size: </span>Small</li> -->
                                                        </ul>
                                                        <ul class="list tools">
                                                            <li><a href="/project/removecart&id=<?=$getId->id?>"><span class="icon-cross"></span> Xoá</a></li>
                                                        </ul>
                                                    </td>
                                                    <td class="product-price">
                                                        <span class="amount"><?=  number_format($getId->price)  ?></span>
                                                    </td>
                                                    <td class="product-quantity">
                                                        <div class="quantity">
                                                            <div class="input-spinner product-no">
                                                                <a href="javascript:void(0)" class="minus">-</a>
                                                                <input type="text" value="<?=$slProduct?>">
                                                                <a href="javascript:void(0)" class="plus">+</a>
                                                            </div>
                                                            <!--/.input-spinner-->
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <span class="amount-total"><?= number_format($totalPricePro) ?></span>
                                                    </td>
                                                </tr>
                                                <!--~./ shoping-cart-item ~-->


                                            <?php endforeach;}?>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            
                            <!-- <div class="col-lg-7">
                                <div class="refresh-shoping text-right">
                                    <button type="button" class="btn btn-default btn-primary">UPDATE</button>
                                    <button type="button" class="btn btn-default">PROCCED TO CHECKOUT</button>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="row pd-t-0">
                    <div class="col-lg-8">
                        
                    </div>

                    <div class="col-lg-4">
                        <div class="cart-total-area">
                            <div class="cart-total-info">
                                <ul class="list">
                                    <li class="cart-subtotal"><span>Tổng</span> <strong><?=number_format($total)?>VND</strong></li>


                                 
                                    <li class="order-shipping"><span>Phí giao  hàng </span> <strong><?= number_format($ship) ;?> VND</strong>
                                    </li>
                                </ul>
                                <h3 class="cart-total-amount"><span>Tổng thanh toán</span> <span
                                        class="amount"><?=number_format($total + $ship)?></span></h3>
                            </div>
                            <?php if(isset($_SESSION['cart'])):?>
                            <form action="/project/checkout" method="post">
                                <input type="hidden" name="total" value="<?=$total?>" >
                                <input type="hidden" name="ship" value="<?=$ship?>" >
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default">Thanh toán</button>
                                </div>
                            </form>
                            <?php  endif;?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>