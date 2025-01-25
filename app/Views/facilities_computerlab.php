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
    <section class="container-space innerMenus-sec" id="academicfacility">
        <div class="innerMenus">
            <ul>
                <li><a href="<?= base_url('facilities#academicfacility') ?>" class="active">Academic Facility</a></li>
                <li><a href="<?= base_url('facilities#extra-curricular') ?>">Extra Curricular</a></li>
                <li><a href="<?= base_url('facilities#co-curricular') ?>">Co-Curricular</a></li>
                <li><a href="<?= base_url('facilities#specialeducation') ?>">Specila Education</a></li>
                <li><a href="<?= base_url('facilities#greencampus') ?>">Green Campus</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Computer <span>Lab</span></h3>
            <h6>Step into our state-of-the-art computer labs, where innovation and creativity come alive. Explore a gallery showcasing students immersed in hands-on learning, collaborative projects, and cutting-edge technology that empowers them to shape the future.</h6>
            
        </div>
    </section>
    <!-- Section Menus -->

    <section id="campusVideo" class="admsn-PageVideo pb-60">
        <div class="col-lg-12 m-auto">
            <?php if (!empty($video)) : ?>
            <video id="sir-mutha-campus" controls playsinline>
                <source src="<?= base_url('uploads/videos/' . $video['video_file']); ?>" type="video/mp4">
            </video>
            <?php endif; ?>

            <!--<div id="playOverlay" class="playOverlay">
                <img src="<?= base_url('images/play.png') ?>" alt="Play Icon" class="playIcon img-fluid">
                <span class="playText">Play</span>
            </div>-->
        </div>
    </section>

   

    <!-- Co-Curricular -->
    <section class="wave-sec ligh-yellowBG" id="co-curricular">
        <div class="itemSpaceBetween">
        <div class="col-12 col-md-12 col-lg-7 col-xl-7 mobContTop-p-tb50 plr-80">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Computer Lab<span> Facility</span></h3>
                    <!--<div id="curve-slider" class="splide paginationCenter toRight-pagination">-->
                    <!--    <div class="splide__track">-->
                    <!--        <ul class="splide__list">-->
                    <!--            <li class="splide__slide">-->
                                    <p class="facilitycontent">In the modern educational landscape, our computer labs emerge as dynamic hubs of digital discovery. To keep pace with this evolution, ongoing research in both technology and pedagogy is essential. They are thoughtfully designed to equip students not only with technical skills but also with the confidence and creativity needed to navigate an increasingly complex world. By engaging with cutting-edge technologies, such as artificial intelligence, students develop into adept problem solvers.</p>
                    <!--            </li>-->
                    <!--        </ul>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/facilities/facilities_overview.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
        </div>
    </section>
    <!-- Co-Curricular -->
    <section class="container-space ptb-80">
        <div class="Panel">
            <div class="Panel-body">
                <div class="tab-content" id="tab-1">
                    <div class="sectionTitle-blue col-lg-10 m-auto">
                        <h3>Lab <span> Gallery</span></h3>
                        <h6 style="color:black;">"Where innovation meets inspiration—our computer labs empower minds to shape the future."</h6>
                    </div>
                    
                    <div class="row w100 m-0">
                        <div class="col-12 col-md-12 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/g1.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <div class="gallery-imgItem1">
                                    <img src="<?= base_url('images/gallery/gallery.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                                <div class="gallery-imgItem2">
                                    <img src="<?= base_url('images/gallery/gall 2.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/ga 3.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        p.facilitycontent
        {
            font-size: 22px;
            line-height: 35px;
            margin-top: 0px;
            margin-bottom: 20px;
            color: var(--color-inActive);
        }
    </style>

    