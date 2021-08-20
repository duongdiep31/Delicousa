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
                                <h2 class="page-title">Thanh toán</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Thanh toán</li>
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
        <div class="shopping-checkout-section ptb-100">
            <div class="container ml-t-5">
                <form action="/project/comfirm" method="post" >

                <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout-form-row">
                                <h3 class="heading-medium">Chi tiết thanh toán</h3>
                                <div class="form-group">
                                    <input type="text" name="name"  class="form-controllar" placeholder="Họ và tên">
                                </div>
                            
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-controllar" placeholder="Số điện thoại">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-controllar" placeholder="E-mail ">
                                </div>
                            
                                <div class="form-group">
                                    <textarea class="form-controllar" name="address" placeholder="Địa chỉ"></textarea>
                                </div>
                            </div>
                        </div>
                        <!--~~./ end checkout form row ~~-->

                        <div class="col-lg-4 col-md-6">
                            <div class="checkout-form-row">
                                <h3 class="heading-medium">Giao hàng</h3>
                                <div class="form-group">
                                    <input type="text" class="form-controllar" name="phuong" placeholder="Phường/Xã">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-controllar" name="huyen" placeholder="Quận/Huyện">
                                </div>
                            
                                <div class="form-group">
                                <input type="tex" class="form-controllar" name="tinh" placeholder="Tỉnh,TP">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-controllar" name="note" placeholder="Order Note"></textarea>
                                </div>
                            </div>
                        </div>
                        <!--~~./ end checkout form row ~~-->

                        <div class="col-lg-4">
                            <div class="checkout-form-row">
                                <h3 class="heading-medium">Thanh toán</h3>
                                <div class="cart-total-area">
                                    <div class="cart-total-info">
                                        <ul class="list">
                                            <li class="cart-subtotal"><span>Tổng đơn hàng</span> <strong><?= number_format($_SESSION['total'])  ?></strong></li>
                                            <li class="order-shipping"><span>Phí giao hàng </span>
                                                <strong><?= number_format($_SESSION['ship'])  ?></strong></li>
                                        </ul>
                                        <?php $totalprice = $_SESSION['total'] + $_SESSION['ship'] ;
                                         ?>
                                        <h3 class="cart-total-amount"><span>Tổng</span> <span
                                                class="amount"><?= number_format($totalprice) ?></span></h3>
                                    </div>
                                        <input type="hidden" value="<?=$totalprice?>" name="totalprice" >
                                    <div class="payment-method">
                                        <div class="form-group">
                                            <input checked="" name="payment" type="radio">
                                            <label class="payment-radio" for="payment">Thanh Toán Trực Tiếp</label>
                                        </div>
                                        
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-default">Đặt hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--~~./ end checkout form row ~~-->
                </div>
                            </form>

            </div>
        </div>
        <!--~./ end shopping checkout section ~-->
