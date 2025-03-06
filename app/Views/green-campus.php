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
                <li><a href="<?= base_url('facilities#academicfacility') ?>" class="active">Academic Facilities</a></li>
                <li><a href="<?= base_url('facilities#extra-curricular') ?>">Extracurricular</a></li>
                <li><a href="<?= base_url('facilities#co-curricular') ?>">Co-Curricular</a></li>
                <li><a href="<?= base_url('facilities#greencampus') ?>">Green Campus</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Green <span> Campus</span></h3>
            <h6>We prioritize sustainability through responsible waste management, solar energy adoption, and a plastic-free approach. Our commitment to inclusivity and diversity ensures a community that values environmental responsibility and social well-being.</h6>

        </div>
    </section>
    <!-- Section Menus -->

    <!-- Overview section -->
    <section class="wave-sec ligh-yellowWithGg-img ptb-80 container-space" id="terms_conditions">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p-tb50 ">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Green Campus <span>Overview</span></h3>
                        <p>Aligned with the SDGs, we embrace sustainability through efficient waste disposal, renewable energy, and plastic-free solutions. Our initiatives promote environmental care while valuing inclusivity and diversity. By integrating these principles, we create a responsible community that upholds social and environmental commitments for a better and more sustainable future.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                <img src="<?= base_url('images/facilities/green_campus_overview.png') ?>" class="img-fluid w100"
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
                        <h3>Green Campus <span> Gallery</span></h3>
                        <h6 style="color:black;">"Green today, brighter tomorrow – sustainability begins with us!"</h6>
                    </div>

                    <div class="row w100 m-0">
                        <div class="col-12 col-md-12 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/green_campus_gallery_03.png') ?>"
                                    class="img-fluid w100" alt="Sir Gallery Images">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <div class="gallery-imgItem1">
                                    <img src="<?= base_url('images/gallery/green_campus_gallery_02.png') ?>"
                                        class="img-fluid w100" alt="Sir Gallery Images">
                                </div>
                                <div class="gallery-imgItem2">
                                    <img src="<?= base_url('images/gallery/green_campus_gallery_01.png') ?>"
                                        class="img-fluid w100" alt="Sir Gallery Images">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/green_campus_gallery_04.png') ?>"
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