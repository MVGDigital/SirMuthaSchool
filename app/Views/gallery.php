<main>
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="bannerImg-OverlayContainer"></div>
        <?php if (!empty($banner)): ?>
        <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid deskTopImg"
            alt="<?= esc($banner['title']); ?>">
        <img src="<?= base_url('uploads/banner_images/' . $banner['mobile_image']); ?>" class="img-fluid mobImg w100"
            alt="Banner image">
        <div class="bannerTitle">
            <h1>Sir Mutha School</h1>
            <p>A unit of the madras seva sadan</p>
        </div>
        <div class="banner-subTitle">
            <h2><?= esc($banner['title']); ?></h2>
        </div>
        <?php endif; ?>
    </section>
    <!-- Banner Section -->

    <!-- Section Menus -->
    <section class="container-space innerMenus-sec">
        <div class="innerMenus">
            <ul class="lessMenus">
                <li><a href="<?= base_url('gallery#galleryTabs') ?>" class="active">Gallery</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Sir Mutha <span> Gallery</span></h3>
            <h6>"Discover the essence of Sir Mutha School through our gallery. It captures moments from academic events, sports, cultural activities, and student milestones, offering a visual celebration of our school's dynamic atmosphere, growth, and the achievements that define our vibrant community."</h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Tab View Sections -->
    <section id="galleryTabs" class="container-space blueBg-Sec wave-bottom-img pb-60">
        <div class="Panel">
            <nav>
                <ul class="Tabs">
                    <li class="Tabs__tab active Tab" data-tab="1"><span>RSP</span></li>
                    <li class="Tabs__tab Tab" data-tab="2"><span>Yoga</span></li>
                    <li class="Tabs__tab Tab" data-tab="3"><span>Health & Wellness</span></li>
                    <li class="Tabs__tab Tab" data-tab="4"><span>Model IMU Nations</span></li>
                    <li class="Tabs__presentation-slider" role="presentation"></li>
                </ul>
            </nav>
            <div class="Panel-body">
                <div class="tab-content" id="tab-1">
                    <div class="row w100 m-0">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/rsp_gallery_1.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/rsp_gallery_2.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                    </div>
                    <div class="row w100 m-0">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <div class="gallery-imgItem1">
                                    <img src="<?= base_url('images/gallery/rsp_gallery_3.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                                <div class="gallery-imgItem2">
                                    <img src="<?= base_url('images/gallery/rsp_gallery_4.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/rsp_gallery_5.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/rsp_gallery_6.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="tab-2" style="display: none;">
                    <!--<div class="row w100 m-0">-->
                        <!--<div class="col-lg-6 p-0">-->
                        <!--    <div class="gallery-imgs">-->
                        <!--        <img src="<?= base_url('images/gallery/gallery-5.png') ?>" class="img-fluid w100"-->
                        <!--            alt="Sir Gallery Images">-->
                        <!--    </div>-->
                        <!--</div>-->
                    <!--    <div class="col-lg-6 p-0">-->
                    <!--        <div class="gallery-imgs">-->
                    <!--            <img src="<?= base_url('images/gallery/gallery-6.png') ?>" class="img-fluid w100"-->
                    <!--                alt="Sir Gallery Images">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="row w100 m-0">
                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <div class="gallery-imgItem1">
                                    <img src="<?= base_url('images/gallery/Yoga 1.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                                <div class="gallery-imgItem2">
                                    <img src="<?= base_url('images/gallery/Yoga 2.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/Yoga 3.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/Yoga 4.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="tab-3" style="display: none;">
                    <h1>tab 3</h1>
                </div>
                <div class="tab-content" id="tab-4" style="display: none;">
                    <h1>tab 4</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Tab View Sections -->