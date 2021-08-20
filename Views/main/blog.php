<div class="page-title-area bg-image bg-parallax2"
            style="background-image:url('Publics/images/header/header1.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content text-center">
                            <div class="page-header-caption">
                                <h2 class="page-title">Tin tức</h2>
                            </div>
                            <div class="breadcrumb-area">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
                                    <li class="breadcrumb-item active">Tin tức</li>
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
        <!--~~./ end page title area ~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Blog Page Block
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="blog-page-block ptb-100">
            <div class="container">
                <!-- Content Row -->
                <div class="row">
                    <div class="col-lg-9">
                        <!-- Blog Items -->
                        <div class="blog-latest-items">
                          
                            <article class="post">
                                <?php  foreach($blog as $item): ?>
                                <figure class="post-thumb">
                                    <a href="blog-single.html">
                                        <img src="<?=getStorageLink($item->image)?>" style="width:669px;height:440px" alt="Blog Image" />
                                    </a>
                                </figure><!--  /.post-thumb -->
                                <div class="post-details">
                                    <div class="entry-meta-content">
                                        <div class="entry-cat">
                                            <a href="/project/blog">News</a>
                                        </div>
                                        <!--./ entry-date -->
                                        <div class="entry-date">
                                            <span><?=$item->created_at?></span>
                                        </div>
                                        <!--./ entry-date -->
                                    </div>
                                    <h2 class="entry-title"><a href="blog-single.html"><?=$item->title?></a>
                                    </h2><!--  /.entry-title -->
                                    <div class="entry-content">
                                        <p><?=$item->content?></p>
                                    </div><!--  /.entry-content -->
                                </div><!--  /.post-details -->
                                <?php endforeach; ?>
                            </article><!-- /.post -->
                         
                        </div><!-- /.blog-latest-items -->

                        <!--~~~~~ Start Paging Navigation ~~~~~-->
                        <nav class="paging-navigation pagination-center pd-t-40">
                            <ul class="nav-links">
                                <li class="nav-previous">
                                    <!-- disabled class add when no pagination -->
                                    <a href="#">Previous</a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#" class="page-numbers">2</a></li>
                                <li><a href="#" class="page-numbers">3</a></li>
                                <li><a href="#" class="page-numbers">4</a></li>
                                <li class="nav-next">
                                    <a href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <!--~./ end paging navigation ~-->
                    </div><!--  /.col-lg-9 -->
                    <div class="col-lg-3">
                        <!-- Sidebar Items -->
                        <div class="sidebar-items">
                            <!--~~~~~ Start Search Widget ~~~~~-->
                            <aside class="widget widget_search">
                                <h4 class="widget-title">Tìm kiếm</h4><!-- /.widget-title -->
                                <form class="search-form" name="search">
                                    <div class="input-group">
                                        <input class="form-controller" placeholder="Nhập từ khoá" />
                                        <button class="btn-search"><i class="fa fa-search"></i></button>
                                    </div><!-- /.input-group -->
                                </form><!-- /.search-form -->
                            </aside>
                            <!--~./ end search widget ~-->

                            <!--~~~~~ Start Bt Social Widget~~~~~-->
                            <aside class="widget bt-socail-widget">
                                <div class="widget-content">
                                    <div class="bt-socail-profile">
                                        <a class="bt-twitter-icon icon" href="#" target="_blank">
                                            <span class="social-icon">
                                                <i class="fab fa-twitter"></i>
                                            </span>
                                            <span class="bt-count">120k</span>
                                            <span class="bt-media-type">Followers</span>
                                            <span class="bt-name">twitter</span>
                                        </a>
                                    </div>
                                    <!--~./ bt-socail-profile ~-->

                                    <div class="bt-socail-profile">
                                        <a class="bt-facebook-icon icon" href="#" target="_blank">
                                            <span class="social-icon">
                                                <i class="fab fa-facebook-f"></i>
                                            </span>
                                            <span class="bt-count">120k</span>
                                            <span class="bt-media-type">Likes</span>
                                            <span class="bt-name">facebook</span>
                                        </a>
                                    </div>
                                    <!--~./ bt-socail-profile ~-->

                                    <div class="bt-socail-profile">
                                        <a class="bt-google-plus-icon icon" href="#" target="_blank">
                                            <span class="social-icon">
                                                <i class="fab fa-google-plus-g"></i>
                                            </span>
                                            <span class="bt-count">120k</span>
                                            <span class="bt-media-type">Likes</span>
                                            <span class="bt-name">google+</span>
                                        </a>
                                    </div>
                                    <!--~./ bt-socail-profile ~-->

                                    <div class="bt-socail-profile">
                                        <a class="bt-vimeo-icon icon" href="#" target="_blank">
                                            <span class="social-icon">
                                                <i class="fab fa-vimeo"></i>
                                            </span>
                                            <span class="bt-count">120k</span>
                                            <span class="bt-media-type">Subscribers</span>
                                            <span class="bt-name">vimeo</span>
                                        </a>
                                    </div>
                                    <!--~./ bt-socail-profile ~-->

                                    <div class="bt-socail-profile">
                                        <a class="bt-youtube-icon icon" href="#" target="_blank">
                                            <span class="social-icon">
                                                <i class="fab fa-youtube"></i>
                                            </span>
                                            <span class="bt-count">120k</span>
                                            <span class="bt-media-type">Subscribers</span>
                                            <span class="bt-name">youtube</span>
                                        </a>
                                    </div>
                                    <!--~./ bt-socail-profile ~-->
                                </div>
                            </aside>
                            <!--~./ end bt social widget ~-->

                            <!--~~~~~ Start Categories Widget ~~~~~-->
                            <aside class="widget widget_categories">
                                <h4 class="widget-title">
                                    Danh mục
                                </h4><!-- /.widget-title -->
                                <div class="widget-content">
                                    <ul>
                                        <!-- <li><a href="#">Foods <span class="count">24</span></a></li>
                                        <li><a href="#">Reciepes <span class="count">22</span></a></li>
                                        <li><a href="#">Diet <span class="count">60</span></a></li>
                                        <li><a href="#">Health Foods <span class="count">34</span></a></li>
                                        <li><a href="#">Fast Foods <span class="count">17</span></a></li> -->
                                    </ul>
                                </div><!-- /.widget-content -->
                            </aside>
                            <!--~./ end categories widget ~-->

                            <!--~~~~~ Start Top Comments Widget~~~~~-->
                          
                           
                        </div>
                    </div>
                </div><!--  /.row -->
            </div>
        </div>
       