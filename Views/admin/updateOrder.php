<?php echo $title = 'Edit Order' ?>
<div class="content-body" style="min-height: 798px;">
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Order</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)"><?php echo $title; ?></a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?php echo $title; ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="/project/changeOrder" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="hidden" name="id" value="<?= $item->id; ?>">
                                        <label name = "status" class="col-lg-4 col-form-label" for="val-skill">Status
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control " name="status">
                                            
                                            <option>
                                                Đặt hàng thành công
                                            </option>
                                            <option>
                                                Đã xác nhận thông tin thanh toán
                                            </option>
                                            <option>
                                                Chờ lấy hàng
                                            </option>
                                            <option>
                                                Đang giao hàng
                                            </option>
                                            <option>
                                                Đã hủy đơn hàng
                                            </option>
                                            <option>
                                                Đã thanh toán
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
