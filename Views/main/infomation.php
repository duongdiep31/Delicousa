

<div class="page-title-area bg-image bg-parallax2"
            style="background-image:url('Publics/images/header/header1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content text-center">
                            <div class="page-header-caption">
                                <h2 class="page-title">Thông Tin Đơn Hàng</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/project">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Thông Tin Đơn Hàng </li>
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
<div class="page-content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!--=======  page wrapper  =======-->
                <div class="page-wrapper">
                    <div class="page-content-wrapper">
                        <!-- Checkout Form s-->
                        <form action="#" method="post" class="checkout-form">
                            <div class="row row-40">

                                <div class="col-lg-12">
                                    <style>
                                        #billing-form{
                                            margin-top: 40px;
                                            margin-bottom: 40px;

                                        }
                                        .checkout-title{
                                            text-align: center;
                                            font-size: 40px;

                                        }
                                        .col-11{
                                            margin: auto;
                                            margin-left: 100%;
                                            /* border: solid black 5px; */
                                            border-radius: 10px;
                                            padding-bottom: 20px;
                                            background-color: #DCCCCC;
                                        }
                                       
                                    </style>
                                    <!-- Billing Address -->
                                    <div id="billing-form">

                                        <h4 class="checkout-title"  >Thông tin đặt hàng</h4>
                                            <?php if (isset($orders) ):?>
                                            <div class="row">
                                                
                                                <div class="col-xl-4 col-md-5 col-sm-12">
                                                    <div class="row">
                                                        
                                                        <div class="col-11">
                                                            <div>
                                                                <p><h5> Tên Sản Phẩm  : <?= $orders->name; ?></h5></p>
                                                                <p> Số điện thoại :  <?= $orders->phone; ?></p>
                                                                <p> Địa chỉ :  <?= $orders->address; ?></p>
                                                                <p> <h5>Số tiền phải thanh toán </h5> <span class="text-danger"><?= number_format($orders->totalprice); ?> VNĐ</span></p>
                                                                <p><h5>Phương thức thanh toán </h5><span class="text-danger"><?= $orders->payment; ?></span></p>
                                                                <p><h5>Trạng Thái </h5><span class="text-danger"><?= $orders->status; ?></span></p>
                                                                <p><h5>Mã Đơn Hàng</h5><span class="text-danger">   <?= $orders->id_customer; ?></span></p>
                                                                <p><h5>Lưu ý:</h5>Quý Khách vui lòng lưu lại mã đơn hàng để tiện cho việc theo dõi.Xin Cảm Ơn!</p>

                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <?php endif; ?>
                                            <?php if (!isset($orders)): 
                                             ?>

                                                <p>Đơn hàng của bạn khong tôn tại</p>

                                             <?php endif; ?>
                                      
                                    </div>


                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <!--=======  End of page wrapper  =======-->
            </div>
        </div>
    </div>
</div>
