        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
			
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Thực đơn</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Sửa</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thêm Món Ăn</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="/project/change" enctype="multipart/form-data" method="post">
                                        <input type="hidden" name="id" value="<?= $item->id ?>">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="name">Tên Món Ăn
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" value="<?=$item->name?>" id="name" name="name" placeholder="Tên Món Ăn..">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="Ingredients">Thành Phần <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" value="<?=$item->Ingredients?>" id="val-email" name="Ingredients" placeholder="Thành Phần">
                                                    </div>
                                                </div>
                                              
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Ảnh<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="custom-file col-lg-6">
                                                        <input type="file" name="image" id="image" value="<?=$item->image;?>" class="custom-file-input">
                                                        <input type="hidden" name="image_existed" value="<?php echo $item->image; ?>">
                                                        

                                                        <label class="custom-file-label fig-width" for="image">
                                                            Choose file
                                                        </label>
                                                    </div>
                                                    <?php
                                                    if (empty($item->image) === false) {
                                                        ?>
                                                        <div class="form-group">
                                                            <img style="margin-left:193px;margin-top:20px;" src="<?php echo getStorageLink($item->image); ?>" width="150" class="img-detail-update">
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="cate_id">Danh Mục
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    
                                                    <div class="col-lg-6">
                                                        <select class="form-control default-select" id="val-skill" name="cate_id">
                                                            <?php foreach($cate as $cates): ?>
                                                            <option value="<?=$cates->id?>"><?=$cates->name?>
                                                          
                                                        </option>
                                                                <?php endforeach;  ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="price">Giá
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" value="<?=$item->price;?>"  name="price" placeholder="Giá..">
                                                    </div>
                                                </div>  <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="discount"> Giảm Giá
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" value="<?=$item->discount?>" name="discount" placeholder="Discount..">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="description">Mô Tả <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="Enter text product here"><?=$item->description?></textarea>                                                    </div>
                                                </div>
                                         
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
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
        <!--**********************************
            Content body end
        ***********************************-->
