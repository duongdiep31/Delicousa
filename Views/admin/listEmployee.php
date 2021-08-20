<div class="content-body">
            <div class="container-fluid">
				<!-- Add Order -->
				
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Danh Mục</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Danh Sách</a></li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">   
					<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Danh Mục</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                               
                                                <th><strong>#</strong></th>
                                                <th><strong>Ảnh</strong></th>
                                                <th><strong>Họ và Tên</strong></th>
                                                
                                                <th><strong>Chức Vụ </strong></th>
                                                <th><strong>Ngày Tạo </strong></th>

                                                <th><strong>Chức Năng  </strong></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                $stt = 1;
                                                foreach($employee as $item):
                                            ?>
                                            <tr>
                                              
                                                <td><strong><?=$stt++;?></strong></td>

                                                <td><div class="d-flex align-items-center"><img src="<?= getStorageLink($item->image)?>" class="rounded-lg mr-2" width="80" alt=""/> </div></td>
                                                <td><?=$item->fullname?>	</td>
                                                  <td><?= $item->position?></td>  
                                                  <td><?=$item->created_at?></td>
                                                <td>
                                                
													<div class="d-flex">
														<a href="/project/editEmployee&id=<?=$item->id?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="/project/deleteEmployee&id=<?=$item->id?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>