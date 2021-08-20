



   <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Page Title Area
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="page-title-area bg-image bg-parallax2"
            style="background-image:url('Publics/images/header/header1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content text-center">
                            <div class="page-header-caption">
                                <h2 class="page-title">Checkout</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Checkout</li>
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
            Start Shopping Checkout Section
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
         <style>
                       .checkout-cart-total {
                                        margin-bottom: 40px;
                                        padding: 45px;
                                        background-color: #f2f2f2;
                                    }

                                    .checkout-cart-total h4 {
                                        font-weight: 700;
                                        line-height: 23px;
                                        -webkit-flex-basis: 18px;
                                        -ms-flex-preferred-size: 18px;
                                        flex-basis: 18px;
                                    }

                                    .checkout-cart-total h4:first-child {
                                        margin-top: 0;
                                        margin-bottom: 25px;
                                    }

                                    .checkout-cart-total h4:last-child {
                                        margin-top: 15px;
                                        margin-bottom: 0;
                                    }

                                    .checkout-cart-total h4 span {
                                        display: block;
                                        float: right;
                                    }

                                    .checkout-cart-total ul {
                                        border-bottom: 1px solid #999;
                                    }

                                    .checkout-cart-total ul li {
                                        font-size: 14px;
                                        font-weight: 500;
                                        line-height: 23px;
                                        display: block;
                                        margin-bottom: 16px;
                                        color: #707070;
                                    }

                                    .checkout-cart-total ul li span {
                                        float: right;
                                        color: #292929;
                                    }

                                    .checkout-cart-total p {
                                        font-size: 14px;
                                        font-weight: 700;
                                        line-height: 30px;
                                        margin: 0;
                                        padding: 10px 0;
                                        color: #505050;
                                        border-bottom: 1px solid #999;
                                    }

                                    .checkout-cart-total p span {
                                        float: right;
                                    }
                                    .checkout-title {
                                    font-size: 20px;
                                    font-weight: 700;
                                    line-height: 23px;
                                    margin-bottom: 30px;
                                    text-decoration: underline;
                                    text-transform: capitalize;
                                    
                                    }
                                    .checkout-cart-total ul li {
                                        font-size: 14px;
                                        font-weight: 500;
                                        line-height: 23px;
                                        display: block;
                                        margin-bottom: 16px;
                                        color: #707070;
                                    }

                                    .checkout-cart-total ul li span {
                                        float: right;
                                        color: #292929;
                                    }
                                    .cart-summary .cart-summary-button button .checkout-btn {
                                    font-weight: 400;
                                    text-transform: uppercase;
                                    color: #fff;
                                    border-color: #292929;
                                    background-color: #292929;
                                    

                                    }

                                        .cart-summary .cart-summary-button button.checkout-btn:hover {
                                            border-color: #e33;
                                            background-color: #e33;
                                        }
                                        .cart-summary {
                                        float: right;
                                        width: 100%;
                                        max-width: 410px;
                                        margin-left: 90%;
                                         }
                    </style>
        <div class="shopping-checkout-section ptb-100">
            <div class="container ml-t-5">



            <div class="col-12">

                <h4 class="checkout-title">Hóa Đơn Tổng</h4>
                   
                    <form action="/project/insertorder" method="post">

                        <div class="checkout-cart-total" style="padding-bottom: 100px;">
                            <?php
                            $tongtien2=0;
                            if (isset($_SESSION['cart'])){
                                $ship = '30000';
                            }
                            else{
                                $ship = '0';
                            }
                            ?>
                            <h4>Sản Phẩm <span>Tổng Cộng</span></h4>
                            <ul>
                                <?php
                                if (isset($_SESSION['cart'])):
                                    foreach ($_SESSION['cart'] as $key => $gid):
                                        $getcart = MenuModel::find($gid['id']);
                                        $slItem = $gid['sl'];
                                        $AllpriceSl=($getcart->price)*$slItem;
                                        $tongtien2 +=$AllpriceSl;
                                        ?>
                                        <input type="hidden" name="name_pr" value="<?= $getcart->name; ?>">
                                        <li><?= $getcart->name; ?> x <?= $slItem; ?> <span><?= number_format($AllpriceSl); ?> VNĐ</span></li>
                                    <?php
                                    endforeach;
                                endif;
                                ?>
                            </ul>


                            

                         <input type="hidden" name="name" value="<?= $_SESSION['name']  ?>">
                            <input type="hidden" name="email" value="<?= $_SESSION['email']  ?>">
                            <input type="hidden" name="address" class="form-controllar" value="<?=$_SESSION['address']?>,<?=$_SESSION['phuong']?>,<?=$_SESSION['huyen']?>,<?=$_SESSION['tinh']?> "  >
                            <input type="hidden" name="phone" class="form-controllar"  value="<?=$_SESSION['phone']?>"  >
                            <input type="hidden" name="totalprice" class="form-controllar" value="<?=$_SESSION['totalprice']?>"   >
                            <input type="hidden" name="status"   value="Đặt Hàng Thành Công"  >
                            <input type="hidden" name="note" class="form-controllar" value="<?=$_SESSION['note']?>"  >
                            <input type="hidden" name="payment" class="form-controllar" value="<?=$_SESSION['payment']?>"  >





                            <p>Phí vận chuyển <span><?= number_format($ship); ?> VNĐ</span></p>
                            <p>Phương thức thanh toán
                                <span>Trực tiếp</span>
                            </p>
                            <h4 style="margin-top: 10px;" >Tổng số tiền phải thanh toán
                                <span><?= number_format($tongtien2+$ship) ?> VNĐ</span>
                            </h4>
                            <div class="cart-summary" style="margin-top: 20px;">
                                <div class="cart-summary-button">
                                    <button style="margin-left: 300px;" type="submit" class="checkout-btn"> Thanh toán </button>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>

            </div>
        </div>
        <!--~./ end shopping checkout section ~-->



</form>