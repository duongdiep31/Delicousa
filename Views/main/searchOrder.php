

<div class="page-title-area bg-image bg-parallax2"
            style="background-image:url('Publics/images/header/header1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content text-center">
                            <div class="page-header-caption">
                                <h2 class="page-title">Thông Tin Đơn Hàng</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/project">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Thông Tin Đơn Hàng </li>
                                </ol>
                            </div>
                            <!--~~./ breadcrumb-area ~~-->
                        </div>
                        <!--~~./ page-header-content ~~-->
                    </div>
                </div>
            </div>
            <!--~~./ end container ~~-->
        </div>
<style>

                            /* CSS SET UP */
                        .font{
                            text-align: center;
                            margin-top: 20px;
                        }
                        body{
                        background: #ffffff;
                        }
                        .box{
                        margin: 100px 200px;
                        margin-left: 350px;
                        width: 500px;
                        height: 50px;
                        }

                    

                        /* Search 4 - appear looking glass */
                        .container-4{
                        overflow: hidden;
                        width: 800px;
                        vertical-align: middle;
                        white-space: nowrap;
                        /* position: relative; */
                        }
                        .container-4 input#search{
                        width: 800px;
                        height: 50px;
                        background: #4f5b66;
                        border: none;
                        font-size: 10pt;
                        float: left;
                        color: black;
                        padding-left: 15px;
                        -webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        border-radius: 5px;
                        
                        -webkit-transition: all .55s ease;
                        -moz-transition: all .55s ease;
                        -ms-transition: all .55s ease;
                        -o-transition: all .55s ease;
                        transition: all .55s ease;
                        }

                        .container-4 input#search::-webkit-input-placeholder {
                        color: white;
                        }
                        .container-4 input#search:-moz-placeholder { /* Firefox 18- */
                        color: white;  
                        }
                        .container-4 input#search::-moz-placeholder {  /* Firefox 19+ */
                        color: white;  
                        }
                        .container-4 input#search:-ms-input-placeholder {  
                        color: white;  
                        }

                        .container-4 button.icon{
                        -webkit-border-top-right-radius: 5px;
                        -webkit-border-bottom-right-radius: 5px;
                        -moz-border-radius-topright: 5px;
                        -moz-border-radius-bottomright: 5px;
                        border-top-right-radius: 5px;
                        border-bottom-right-radius: 5px;
                        border: none;
                        background: #232833;
                        height: 50px;
                        width: 50px;
                        color: #4f5b66;
                        opacity: 0;
                        font-size: 10pt;
                        -webkit-transition: all .55s ease;
                        -moz-transition: all .55s ease;
                        -ms-transition: all .55s ease;
                        -o-transition: all .55s ease;
                        transition: all .55s ease;
                        }

                        /* ANIMATION EFFECT */
                        .container-4:hover button.icon, .container-4:active button.icon, .container-4:focus button.icon{
                            outline:none;
                            opacity: 1;
                            margin-left: -50px;
                            cursor: pointer;
                        }
</style>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


                            <h1 class="font">Nhập Mã Đơn Hàng</h1>

<form action="/project/infomation" method="get" ">


            <div class="box">
            <div class="container-4">
                <input type="search" name="id" id="search" placeholder="Nhập Mã Đơn Hàng" />
                <button type="submit" class="icon"><i class="fa fa-search"></i></button>
            </div>
            </div>
</form>
