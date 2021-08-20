   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<!-- Add Order -->
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Thực đơn</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Danh sách</a></li>
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
                                                <th><strong>Tên Món Ăn</strong></th>
                                                <th><strong>Thành Phần </strong></th>
                                                <th><strong>Giá</strong></th>
                                                <th><strong>Giảm Giá</strong></th>
                                                <th><strong>Danh Mục</strong></th>

                                                
                                                <th><strong>Ảnh</strong></th>
                                                <th>Tính năng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $stt = 1;
                                                foreach($menu as $item):
                                            ?>
                                          
                                            <tr>
                                                <td><strong><?=$stt++?></strong></td>
                                                <td><?=$item->name?></td>
                                                <td><?=$item->Ingredients?></td>
                                                <td><?=$item->price;?></td>
                                                <td><?=$item->discount?></td>
                                                <td><?=$item->categoryName()?></td>

                                             
                                                <td><img style="height:150px;" src="<?=getStorageLink($item->image)?>" alt=""></td>
                                                <td>
													<div class="d-flex">
														<a href="/project/editmenu&id=<?=$item->id?>" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="/project/deletemenu&id=<?=$item->id?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <?php endforeach;?>
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