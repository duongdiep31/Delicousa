       <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start SITE FOOTER
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <footer class="site-footer footer-style-two ptb-100 bg-image"
            style="background-image:url('Publics/images/bg/footer-bg2.jpg')">
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                Start Footer Widget Area
            ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <div class="footer-widget-area">
                <div class="container ml-b-60">
                    <div class="row mx-md-n5">
                        <!--~~~~~ Start Widget About Footer ~~~~~-->
                        <div class="col-lg-4 px-md-5">
                            <aside class="widget bt-about-footer-widget style-two">
                                <div class="widget-content">
                                    <div class="about-logo">
                                        <a href="index.html"><img src="Publics/images/logo/footer-logo4.png"
                                                alt="Logo"></a>
                                    </div>
                                    <div class="about-info">
                                        <div class="social-status">
                                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                                            <a href="#"><span class="fab fa-twitter"></span></a>
                                            <a href="#"><span class="fab fa-behance"></span></a>
                                            <a href="#"><span class="fab fa-tripadvisor"></span></a>
                                            <a href="#"><span class="fab fa-instagram"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <!--~./ end about footer widget ~-->

                        <div class="col-lg-4 px-md-5">
                            <!--~~~~~ Start Post List Widget~~~~~-->
                            <aside class="widget widget-post-list style-two">
                                <h4 class="widget-title">
                                TIN T???C PH??? BI???N
                                </h4><!-- /.widget-title -->

                                <div class="widget-content">
                                    <?php foreach($blog as $item): ?>
                                    <article class="post">
                                        <div class="post-thumbnail">
                                            <img src="<?= getStorageLink($item->image) ?>" alt="Thumb">
                                        </div>
                                        <div class="post-details">
                                            <h3 class="entry-title">
                                                <a href=" /project/blog&id= <?=$item->id?>"><?=$item->title?></a>
                                            </h3>
                                            <!--./ entry-title -->
                                            <div class="entry-meta-content">
                                                <div class="entry-date"><?=$item->created_at?></div>
                                                <!--./ entry-like -->
                                            </div>
                                            <!--./ entry-meta-content -->
                                        </div>
                                    </article>
                                        <?php endforeach;  ?>
                                </div>
                                <div class="view-all-btn">
                                    <a href="/project/blog">Xem t???t c??? <span class="fa fa-angle-right"></span></a>
                                </div>
                            </aside>
                            <!--~./ end post list widget ~-->
                        </div>

                        <!--~~~~~ Start Widget Instafeed ~~~~~-->
                        <!-- <div class="col-lg-4 px-md-5">
                            <aside class="widget bt-instafeed-widget">
                                <h2 class="widget-title">Th?? vi???n Instagram</h2>
                               
                                <div class="view-all-btn">
                                    <a href="https://www.instagram.com/duongdieppp/" link = "" >Gh?? th??m instagram c???a ch??ng t??i <span class="fa fa-angle-right"></span></a>
                                </div>
                            </aside>
                        </div> -->
                        <!--~./ end instafeed widget ~-->
                    </div>
                </div>
            </div>
            <!--~./ end footer widgets area ~-->

            <div class="footer-bottom-area pd-t-75">
                <div class="container ml-b-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="footer-menu-area">
                                <ul class="footer-menu">
                                   
                                    <li><a href="#0">LI??N H??? V???I CH??NG T??I</a></li>
                                    <li><a href="#0">CH??NH S??CH B???O M???T</a></li>
                                    <li><a href="#0">??I???U KHO???N S??? D???NG</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright-text text-right">
                                <p>?? 2021 - Deliciosa Pizza  <a href="#0"></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--~./ end site footer ~-->

    </div>