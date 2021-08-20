<?php echo $title = 'Profile' ?>
<div class="content-body" style="min-height: 798px;">
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="modal fade" id="addOrderModalside">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Project</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="text-black font-w500">Project Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Deadline</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Client Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">CREATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $title; ?></a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)"><?= $array->fullname; ?></a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-8 pt-8 pb-8">
                    <div class="profile-personal-info">
                        <h4 class="text-primary mb-4">Thông tin cá nhân</h4>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">ID system<span class="pull-right d-none d-sm-block">:</span>
                                </h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array->fullname; ?> - <?= $array->position; ?></span>
                            </div>
                        </div>
                  
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Họ và Tên : <span class="pull-right d-none d-sm-block">:</span>
                                </h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array->fullname; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Email : <span class="pull-right d-none d-sm-block">:</span>
                                </h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array->email; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Số Điện Thoại : <span class="pull-right d-none d-sm-block">:</span>
                                </h5>
                            </div>
                            <div class="col-sm-9"><span>+84<?= $array->phone; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Giờ Làm Việc : <span class="pull-right d-none d-sm-block">:</span></h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array->workingtime; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Ngày Sinh : <span class="pull-right d-none d-sm-block">:</span>
                                </h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array->age; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Quê Quán <span class="pull-right d-none d-sm-block">:</span></h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array->home; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Kinh Nghiệm <span class="pull-right d-none d-sm-block">:</span></h5>
                            </div>
                            <div class="col-sm-9"><span><?= $array->experience; ?></span>
                            </div>
                        </div>
                        <div class="row mb-4 mb-sm-2">
                            <div class="col-sm-3">
                                <h5 class="f-w-500">Ảnh<span class="pull-right d-none d-sm-block">:</span>
                                </h5>
                            </div>
                            <div class="col-sm-9">
                                <img class="image-cover" src="<?= getStorageLink($array->image); ?>" width = 150 />
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="/project/editEmployee&id=   <?= $array->id; ?>" class="btn btn-primary mb-1">Sửa Thông Tin</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>