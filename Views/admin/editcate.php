        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
			
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Danh Mục</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Sửa </a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sửa Danh Mục</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="/project/changecate" enctype="multipart/form-data" method="post">

                                    <input type="hidden" name="id" value="<?= $item->id ?>">


                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="name">Tên Danh Mục
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" value="<?= $item->name?>" class="form-control" id="name" name="name" placeholder="Tên Món Ăn..">
                                                    </div>
                                                </div>
                                               
                                              
                                                <div class="form-group row" >
                                                        <label  style="margin-top:20px;" name="image" class="col-lg-4 col-form-label" for="val-suggestions">Ảnh<span
                                                                class="text-danger">*</span>
                                                        </label>
                                                        <div class="custom-file col-lg-6">
                                                        <input style="margin-top:20px;" value="<?=$item->image?>" type="file" name="image" id="image" class="custom-file-input">
                                                        <input type="hidden" name="image_existed" value="<?php echo $item->image; ?>">

                                                        <label style="margin-top: 20px;margin-left:15px;"  class="custom-file-label fig-width" for="image">
                                                            Choose file
                                                        </label>
                                                    </div>
                                                    <?php
                                                    if (empty($item->image) === false) {
                                                        ?>
                                                        <div class="form-group">
                                                            <img style="margin-left:351px;margin-top:20px;" src="<?php echo getStorageLink($item->image); ?>" width="150" class="img-detail-update">
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button style="margin-top:20px;" type="submit" class="btn btn-primary">Sửa</button>
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
