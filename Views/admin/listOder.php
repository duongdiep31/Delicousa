   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<!-- Add Order -->
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Oder</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Danh Sách</a></li>
					</ol>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="width80"><strong>#</strong></th>
                                                <th><strong>Mã đặt hàng</strong></th>
                                                <th><strong>Tên Khách Hàng</strong></th>
                                                <th><strong>Sản Phẩm</strong></th>

                                                <th><strong>Giá</strong></th>
                                                <th><strong>Thanh Toán</strong></th>
                                                <th><strong>SĐT</strong></th>
                                                <th><strong>Địa Chỉ</strong></th>
                                                <th><strong>Trạng Thái </strong></th>




                                                <th><strong>Ngày Tạo</strong></th>
                                                
                                                <th><strong>Tính Năng</strong></th>
                                                

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $stt = 1;
                                                foreach($oder as $item):
                                            ?>
                                                <tr>
                                                    <td><?=$stt++?></td>
                                                    <td><?=$item->id_customer?></td>
                                                    <td><?=$item->name?></td>
                                                    <td><?=$item->name_pr?></td>

                                                    <td><?=$item ->totalprice?></td>
                                                    <td><?=$item->payment?></td>
                                                    <td><?=$item->phone?></td>
                                                    <td><?=$item->address?></td>
                                                    <td><?=$item->status?></td>
                                                    <td><?=$item->created_at?></td>
                                                    <td>
													<div class="d-flex">
														<a href="/project/updateOrder&id=<?=$item->id?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
													</div>
												</td>
                                                </tr>
                                           <?php  endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
	
                    
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->