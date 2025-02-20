<main>
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="bannerImg-OverlayContainer"></div>
        <?php if (!empty($banner)): ?>
            <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid deskTopImg"
                alt="<?= esc($banner['title']); ?>">
            <img src="<?= base_url('uploads/banner_images/' . $banner['mobile_image']); ?>" class="img-fluid mobImg w100"
                alt="Banner image">
            <!-- <div class="bannerTitle">
                <h1>Sir Mutha School</h1>
                <p>A unit of the madras seva sadan</p>
            </div> -->
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
            <h3>Sir Mutha School <span> Gallery</span></h3>
            <h6><i>Discover the essence of Sir Mutha School through our gallery. It captures moments from academic events, sports, cultural activities, and student milestones, offering a visual celebration of our school's dynamic atmosphere, growth, and the achievements that define our vibrant community.</i></h6>
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
                    <li class="Tabs__tab Tab" data-tab="4"><span>Apollo Shine</span></li>
                    <li class="Tabs__presentation-slider" role="presentation"></li>
                </ul>
            </nav>
            <div class="Panel-body">
                <div class="tab-content" id="tab-1">
                    <div class="row w100 m-0">

                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/rsp_1.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <div class="gallery-imgItem1">
                                    <img src="<?= base_url('images/gallery/rsp_3.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                                <div class="gallery-imgItem2">
                                    <img src="<?= base_url('images/gallery/rsp_4.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/rsp_2.png') ?>" class="img-fluid w100"
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
                                <img src="<?= base_url('images/gallery/yoga3.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <div class="gallery-imgItem1">
                                    <img src="<?= base_url('images/gallery/yoga1.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                                <div class="gallery-imgItem2">
                                    <img src="<?= base_url('images/gallery/yoga2.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/yoga4.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="tab-3" style="display: none;">
                    <div class="row w100 m-0">

                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/health&wellness_left.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <div class="gallery-imgItem1">
                                    <img src="<?= base_url('images/gallery/health&wellness_top.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                                <div class="gallery-imgItem2">
                                    <img src="<?= base_url('images/gallery/health&wellness_bottom.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/health&wellness_right.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="tab-4" style="display: none;">
                    <div class="row w100 m-0">

                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/apollo_shine_01.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <div class="gallery-imgItem1">
                                    <img src="<?= base_url('images/gallery/apollo_shine_02.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                                <div class="gallery-imgItem2">
                                    <img src="<?= base_url('images/gallery/apollo_shine_03.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/apollo_shine_04.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tab View Sections -->