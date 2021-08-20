        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
			
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Menu</a></li>
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
                                    <form class="form-valide" action="/project/changeEmployee" enctype="multipart/form-data" method="post">


                                    <input type="hidden" name="id" value="<?= $item->id ?>">

                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="email">Email :
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="email" class="form-control" value="<?=$item->email?>" id="email" name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="pass">Mật Khẩu Mới <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control" id="val-email" name="pass" placeholder="PassWord">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="fullname">Họ và Tên
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control" value="<?=$item->fullname?>" id="val-email" name="fullname" placeholder="Họ và Tên">

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="phone">Số Điện Thoại
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="text" value="<?=$item->phone?>" class="form-control" id="val-email" name="phone" placeholder="Số Điện Thoại...">

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label"  for="position">Position
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control default-select" id="val-skill"  name="position">
                                                            <option>Admin</option>
                                                            <option>Employee</option>
                                                            <option>Order</option>


                                                        </select>
                                                    </div>
                                                </div>
                                         
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Ảnh<span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="custom-file col-lg-6">
                                                    <input style="margin-top:20px;" value="<?=$item->image?>" type="file" name="image" id="image" class="custom-file-input">
                                                    <input type="hidden" name="image_existed" value="<?php echo $item->image; ?>">                               
                                                    <label class="custom-file-label fig-width" style="width:220px;margin-left:15px" for="image">
                                                    Choose file
                                                    </label>
                                               </div>
                                               <?php
                                                    if (empty($item->image) === false) {
                                                        ?>
                                                        <div class="form-group">
                                                            <img style="margin-left:178px;margin-top:20px;" src="<?php echo getStorageLink($item->image); ?>" width="150" class="img-detail-update">
                                                        </div>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                              
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="age">Ngày Sinh
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="date" value="<?=$item->age?>" class="form-control"  name="age" ">
                                                    </div>
                                                </div>  <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="home"> Địa chỉ
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" value="<?=$item->home?>"  name="home" placeholder="Địa Chỉ.">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label"   for="experience">Kinh Nghiệm Làm Việc <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <textarea class="form-control"  id="description" name="experience" rows="5" placeholder="Kinh Nghiệm Làm Việc...."><?=$item->experience?></textarea>                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="workingtime">Giờ làm việc 
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control default-select" id="val-skill"  name="workingtime">
                                                            <option>Part-Time</option>
                                                            <option>Full-Time</option>

                                                        </select>
                                                    </div>
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
