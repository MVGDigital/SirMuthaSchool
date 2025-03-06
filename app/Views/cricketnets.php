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
            <h3>Cricket <span> Nets</span></h3>
            <h6>Our school features a dedicated cricket net facility, designed to hone students'
batting and bowling skills. With high-quality equipment and a safe, spacious
environment, it provides aspiring cricketers the opportunity to practice, improve
technique, and prepare for competitive matches, encouraging teamwork and
sportsmanship.</h6>
            
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
    <section class="wave-sec ligh-yellowWithGg-img ptb-80" id="terms_conditions">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p-tb50 plr-80">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Cricket Nets <span>Overview</span></h3>
                    <p>The academy's world-class infrastructure, complemented by top-tier equipment and exceptional coaching, has swiftly propelled our teams to victory in various inter-school and inter-state events. Most recently, the school team clinched the Under-14 inter-school cricket championships, highlighting the profound influence of the Cricket Academy. Central to this success are our BCCI-accredited coaches, who expertly guide aspiring cricketers. This, alongside internationally-standardised facilities and premier cricketing gear, allows students to simulate actual match scenarios before competing in larger sporting arenas. Consequently, not only have we secured team championships, but we have also nurtured talent, with several cricketers advancing to state-level division and league matches across various age categories.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                <img src="<?= base_url('images/facilities/cricket_overview.png') ?>" class="img-fluid w100"
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
                        <h3>Cricket Net <span> Gallery</span></h3>
                        <h6 style="color:black;">"Perfecting cricket skills with practice sessions in our well-equipped cricket net facility."</h6>
                    </div>
                    
                    <div class="row w100 m-0">
                        <div class="col-12 col-md-6 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/cricket_gallery_3.png') ?>" class="img-fluid w100"
                                    alt="Sir Gallery Images">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <div class="gallery-imgItem1">
                                    <img src="<?= base_url('images/gallery/cricket_gallery_1.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                                <div class="gallery-imgItem2">
                                    <img src="<?= base_url('images/gallery/cricket_gallery_2.png') ?>" class="img-fluid w100"
                                        alt="Sir Gallery Images">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-4 p-0">
                            <div class="gallery-imgs">
                                <img src="<?= base_url('images/gallery/cricket_gallery_4.png') ?>" class="img-fluid w100"
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

    