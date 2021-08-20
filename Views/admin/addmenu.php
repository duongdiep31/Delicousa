        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
			
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Thực đơn</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Thêm Món</a></li>
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
                                    <form class="form-valide" action="/project/insertmenu" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="name">Tên Món Ăn
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Tên Món Ăn..">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="Ingredients">Thành Phần <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-email" name="Ingredients" placeholder="Thành Phần">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Danh Mục
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control default-select  " id="val-skill"  name="cate_id">
                                                            <?php foreach($cate as $item): ?>
                                                            <option value="<?= $item->id;?>"><?= $item->name?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Ảnh<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="custom-file col-lg-6">
                                                <input type="file" name="image" id="image" class="custom-file-input">
                                                <label class="custom-file-label fig-width" style="width:220px;margin-left:15px" for="image">
                                                    Choose file
                                                </label>
                                            </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                              
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="price">Giá
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control"  name="price" placeholder="Giá..">
                                                    </div>
                                                </div>  <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="discount"> Giảm Giá
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control"  name="discount" placeholder="Discount..">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="description">Mô Tả <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="Enter text product here"></textarea>                                                    </div>
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
