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
            <h3>Biology <span> Lab</span></h3>
            <h6><i>Our well-equipped biology lab offers a dynamic learning environment with tools and specimens. Students engage in hands-on experiments, deepening their understanding of biological concepts. The lab fosters curiosity, scientific inquiry, and practical knowledge, providing the perfect setting for exploration and discovery in the world of life sciences.</i></h6>
            
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
                    <h3>Biology Lab <span>Overview</span></h3>
                    <p>The biology lab at Sir Mutha School is a vibrant hub of discovery and learning, designed to inspire curiosity in the natural world. Equipped with modern facilities and a wealth of resources, students engage in hands-on experiments that deepen their understanding of biological concepts. Guided by experienced teachers, learners explore everything from cellular structures to ecological systems, promoting a sense of wonder and inquiry. The lab not only supports the curriculum but also encourages critical thinking and collaboration, preparing students for future scientific endeavours. Through these enriching experiences, the biology lab plays a crucial role in shaping informed, environmentally conscious individuals.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                <img src="<?= base_url('images/facilities/bio_overview.png') ?>" class="img-fluid w100"
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
                        <h3>Biology Lab <span> Gallery</span></h3>
                        <h6 style="color:black;">"Exploring the wonders of life sciences through hands-on experiments in our biology lab."</h6>
                    </div>
                    
                    <div class="row w100 m-0">
                        <div class="col-12 col-md-12 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/bio_gallery.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <div class="gallery-imgItem1">
                                    <img src="<?= base_url('images/gallery/bio_1.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                                <div class="gallery-imgItem2">
                                    <img src="<?= base_url('images/gallery/bio_gallery_2.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/bio_lab_gallary.png') ?>" class="img-fluid w100"
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

        