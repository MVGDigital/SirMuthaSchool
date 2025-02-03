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
            <h3>Swimming <span> Pool</span></h3>
            <h6>"Our school features a well-maintained swimming pool that promotes physical fitness and water safety. Students enjoy structured lessons, free swim time, and water-based activities, enhancing their coordination and stamina. This facility offers a refreshing, fun environment for learning swimming skills and encourages overall well-being and team spirit."</h6>
            
        </div>
    </section>
    <!-- Section Menus -->

    <!-- <section id="campusVideo" class="admsn-PageVideo pb-60">
        <div class="col-lg-12 m-auto">
            <?php if (!empty($video)) : ?>
            <video id="sir-mutha-campus" controls playsinline>
                <source src="<?= base_url('uploads/videos/' . $video['video_file']); ?>" type="video/mp4">
            </video>
            <?php endif; ?>

            <div id="playOverlay" class="playOverlay">
                <img src="<?= base_url('images/play.png') ?>" alt="Play Icon" class="playIcon img-fluid">
                <span class="playText">Play</span>
            </div>
        </div>
    </section> -->

   

    <!-- Co-Curricular -->
    <section class="wave-sec ligh-yellowWithGg-img ptb-80 container-space" id="terms_conditions">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p-tb50 ">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Swimming Pool <span> Overview</span></h3>
                    <p>Our school proudly boasts an exclusive 25-metre, six-lane swimming pool, which is integral to our curriculum. We host competitions at District, State, and International levels, with coaches who are experienced trainers and have previously managed National teams. The annual ORCA Inter-School Swimming Meet is a highly anticipated highlight of our calendar. From dawn until dusk, the pool is alive with vibrant activity, epitomising the dedication of our swimmers. Expert instruction is delivered by NIS-certified coaches associated with The Madras Seva Sadan.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                <img src="<?= base_url('images/facilities/swimming_pool_overview.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
        </div>
    </section>
    <!-- Co-Curricular -->

    <!-- Video Section -->
    <section id="campusVideo" class="admsn-PageVideo pb-60">
        <div class="col-lg-10 m-auto">
            <?php if (!empty($video)) : ?>
            <video id="sir-mutha-campus" playsinline>
                <source src="<?= base_url('uploads/videos/' . $video['video_file']); ?>" type="video/mp4">
            </video>
            <?php endif; ?>

            <!-- Play icon and text overlay -->
            <div id="playOverlayBtn" class="playOverlay">
                <img src="<?= base_url('images/play.png') ?>" alt="Play Icon" class="playIcon img-fluid">
                <span class="playText">Play</span>
            </div>
        </div>
    </section>
    <!-- Video Section -->
     
    <section class="container-space ptb-80">
        <div class="Panel">
            <div class="Panel-body">
                <div class="tab-content" id="tab-1">
                    <div class="sectionTitle-blue col-lg-10 m-auto">
                        <h3>Swimming Pool <span> Gallery</span></h3>
                        <h6 style="color:black;">"Fostering fitness and fun with our well-maintained swimming pool for students of all levels."</h6>
                    </div>
                    
                    <div class="row w100 m-0">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/swimming_pool_gallery_4.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <div class="gallery-imgItem1">
                                    <img src="<?= base_url('images/gallery/swimming_pool_gallery_2.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                                <div class="gallery-imgItem2">
                                    <img src="<?= base_url('images/gallery/swimming_pool_gallery1.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/swimming_pool_ gallery_3.jpg') ?>" class="img-fluid w100"
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

    