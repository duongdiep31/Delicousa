        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
			
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Blog</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">    Thêm Bài Viết</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thêm Bài Viết</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="/project/insertblog" enctype="multipart/form-data" method="post">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="title">Tiêu Đề
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="name" name="title" placeholder="Tiêu Đề..">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="content">Nội Dung <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <textarea class="form-control" id="content" name="content" rows="5" placeholder="Mời Nhập Nội Dung...."></textarea>                                                    </div>
                                                </div>
                                         
                                               
                                              




                                                <div class="form-group row" >
                                                        <label name = "image" style="margin-top:20px;" class="col-lg-4 col-form-label" for="val-suggestions">Ảnh<span
                                                                class="text-danger">*</span>
                                                        </label>
                                                        <div class="custom-file col-lg-6">
                                                    <input style="margin-top:20px;" type="file" name="image" id="image" class="custom-file-input">
                                                        <label style="margin-top: 20px;margin-left:15px;width:470px" class="custom-file-label fig-width" for="image">
                                                            Choose file
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button style="margin-top:20px;" type="submit" class="btn btn-primary">Thêm</button>
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
