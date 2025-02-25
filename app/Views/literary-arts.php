<main>
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="bannerImg-OverlayContainer"></div>
        <?php if (!empty($banner)): ?>
        <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid deskTopImg"
            alt="<?= esc($banner['title']); ?>">
        <img src="<?= base_url('uploads/banner_images/' . $banner['mobile_image']); ?>" class="img-fluid mobImg w100"
            alt="Banner image">
        
        <div class="banner-subTitle">
            <h2><?= esc($banner['title']); ?></h2>
        </div>
        <?php endif; ?>
    </section>
    <!-- Banner Section -->

    <!-- Section Menus -->
    <section class="container-space innerMenus-sec" id="academicfacility">
        <div class="innerMenus">
            <ul>
            <li><a href="<?= base_url('achievements#achievements') ?>" class="active">Achievements</a></li>
                <li><a href="<?= base_url('achievements#learing_center') ?>">Academic Achievements</a></li>
                <li><a href="<?= base_url('achievements#sports') ?>">Sports Achievements</a></li>
                <li><a href="<?= base_url('achievements#inter-school') ?>">Inter School</a></li>
                <li><a href="<?= base_url('achievements#teachers') ?>">Teachers Achievements</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Literary <span> and Arts</span></h3>
            <h6><i>Sir Mutha School values literary and artistic expression for holistic development. Inter-school competitions provide students platforms to showcase talents in literature, drama, and visual arts, fostering creativity and critical thinking.</i></h6>

        </div>
    </section>
    <!-- Section Menus -->

    <!-- Overview section -->
    <section class="wave-sec ligh-yellowWithGg-img ptb-80 container-space" id="terms_conditions">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p-tb50 ">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Literary & Arts <span>Overview</span></h3>
                        <p>Participation in these events enhances students' skills and deepens their appreciation for culture and creativity. These experiences contribute to academic and personal growth, emphasizing the role of creativity in education. Through literature, drama, and visual arts, students develop confidence, expression, and a lifelong passion for artistic and intellectual pursuits.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                <img src="<?= base_url('images/facilities/literary_arts_overview.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
        </div>
    </section>
     <!-- Overview section -->
      
    <!-- Co-Curricular -->
    <section class="container-space ptb-80">
        <div class="Panel">
            <div class="Panel-body">
                <div class="tab-content" id="tab-1">
                    <div class="sectionTitle-blue col-lg-10 m-auto">
                        <h3>Literary & Arts <span> Gallery</span></h3>
                        <h6 style="color:black;">"Literary arts inspire creativity, critical thinking, and cultural appreciation."</h6>
                    </div>

                    <div class="row w100 m-0">
                        <div class="col-12 col-md-12 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/literary_arts_gallery_03.png') ?>"
                                    class="img-fluid w100" alt="Sir Gallery Images">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <div class="gallery-imgItem1">
                                    <img src="<?= base_url('images/gallery/literary_arts_gallery_02.png') ?>"
                                        class="img-fluid w100" alt="Sir Gallery Images">
                                </div>
                                <div class="gallery-imgItem2">
                                    <img src="<?= base_url('images/gallery/literary_arts_gallery_01.png') ?>"
                                        class="img-fluid w100" alt="Sir Gallery Images">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/literary_arts_gallery_04.png') ?>"
                                    class="img-fluid w100" alt="Sir Gallery Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
    p.facilitycontent {
        font-size: 22px;
        line-height: 35px;
        margin-top: 0px;
        margin-bottom: 20px;
        color: var(--color-inActive);
    }
    </style>