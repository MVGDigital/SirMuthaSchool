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
    <section class="container-space innerMenus-sec" id="achievements">
        <div class="innerMenus">
            <ul class="lessMenus">
                <li><a href="<?= base_url('achievements#achievements') ?>" class="active">Achievements</a></li>
                <li><a href="<?= base_url('achievements#learing_center') ?>">Academic Achievements</a></li>
                <li><a href="<?= base_url('achievements#sports') ?>">Sports Achievements</a></li>
                <li><a href="<?= base_url('achievements#teachers') ?>">Teachers Achievements</a></li>
                
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Sir Mutha <span> Achievements</span></h3>
            <h6>Sir Mutha School is proud of its exceptional achievements, from academic excellence to extracurricular
                accomplishments. Our students consistently excel in sports, arts, and community service, earning
                recognition at local, national, and international levels. These achievements reflect our commitment to
                nurturing well-rounded individuals, preparing them for success in every field.</h6>
                
        </div>
    </section>
    <!-- Section Menus -->

      <!-- Adventure Camps Section-->
      <section class="wave-sec wave-yellowWith-bottom-img container-space ptb-80" id="learing_center">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/achievements/academic_facilities_overview.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p-tb50">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Academic <span> Achievements</span></h3>
                    <p>Our students of Grades X, XI, and XII have showcased exceptional academic excellence with outstanding results. Their dedication, perseverance, and hard work have led to remarkable achievements, securing top scores across subjects. Their success reflects the school’s commitment to academic excellence, inspiring future batches to strive for greater heights.
                    </p>
                    <div class="blueBtn-medium">
                                        <a href="<?= base_url('achievements/academic-achievements') ?>">Know More</a>
                                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Adventure Camps Section-->

    <!--  Sports Section -->
    <section class="container-space blueBg-Sec ptb-80">
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Sports <span> Achievements</span></h3>
        </div>
        <div id="sports" class="splide paginationCenter mt-50">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($sportsAchievements as $achievement): ?>
                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('uploads/achievements/' . esc($achievement['image_file'])) ?>"
                                class="img-fluid w100">
                        </div>
                        <div class="thumbContent">
                            <h6><?= esc($achievement['title']) ?></h6>
                            <p><?= esc($achievement['description']) ?></p>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
    <!--  Sports Sections -->

    <!-- Inter School Section-->
    <section id="inter-school" class="wave-sec white-bgImg" id="cbsecurriculum">
        <div class="itemSpaceBetween">
            <div class="col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/achievements/inter_school.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
            <div class="col-md-12 col-lg-7 col-xl-7 mobContTop-p-tb50 plr-80 ptb-80">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Inter <span> School</span></h3>

                    <p>Sir Mutha School steadfastly upholds the belief that inter-school events serve as a crucible for
                        intellectual, cultural, and athletic growth. By encouraging participation in such endeavours,
                        whether through the Model United Nations, the West Chennai Sahodaya Cluster Schools’ events, or
                        dynamic sporting events such as the Padma Bhushan Lady Andal Memorial Inter-School Tournament
                        and Swimming Meet, or vibrant cultural festivals organised by other schools. These platforms not
                        only have their talents but also cultivate in them a profound sense of collaboration,
                        resilience, and global perspective, preparing them to excel in an interconnected world.</p>

                </div>
            </div>
        </div>
    </section>
    <!-- Inter School Section-->

    <!-- Literary & Arts -->
    <section class="wave-sec ligh-yellowWithGg-img ptb-80" id="terms_conditions">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p-tb50 plr-80">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Literary &<span> Arts</span></h3>
                    <p>Sir Mutha School has always valued the importance of literary and artistic expression in the
                        holistic development of students. Our founder's vision underscores the significance of such
                        activities in nurturing creativity and critical thinking. Through various inter-school
                        competitions and events, students are provided with platforms to showcase their talents, whether
                        in literature, drama, or the visual arts. Participation in these events not only enhances their
                        skills but also encourages a deeper appreciation for culture and creativity. These experiences
                        enrich their academic and personal growth, reinforcing the importance of creativity in
                        education.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                <img src="<?= base_url('images/achievements/literary_arts.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
        </div>
    </section>
    <!-- Literary & Arts -->

    <!--  Teachers Section -->
    <section class="container-space blueBg-Sec ptb-80">
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Teachers <span> Achievements</span></h3>
        </div>
        <div id="teachers" class="splide paginationCenter img-hoverEffect cardSlider mt-50">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($teachersAchievements as $achievement): ?>
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="card-content">
                                <h5><?= esc($achievement['title']) ?></h5>
                                <p><?= esc($achievement['description']) ?></p>
                            </div>
                            <div class="hoverImg">
                                <img src="<?= base_url('uploads/achievements/' . esc($achievement['image_file'])) ?>"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
    <!--  Teachers Sections -->