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
    <section class="container-space innerMenus-sec" id="abouctbse">
        <div class="innerMenus">
            <ul>
                <li><a href="<?= base_url('academics#aboutcbse') ?>" class="active">About CBSE</a></li>
                <li><a href="<?= base_url('academics#cbsecurriculum') ?>">CBSE Curriculum</a></li>
                <li><a href="<?= base_url('academics#teacherenrichment') ?>">Teacher Enrichment</a></li>
                <li><a href="<?= base_url('academics#annulapolicy') ?>">Annula Pedegogical Policy</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>About <span>CBSE</span></h3>

            <h6>The Central Board of Secondary Education (CBSE) envisions a robust, vibrant, and holistic school
                education system that nurtures excellence in every sphere of human endeavour.
                The Board is dedicated to providing quality education that encourages intellectual, social, and cultural
                vitality among its learners.
                It strives to create a learning process and environment that empowers future citizens to emerge as
                global leaders in the evolving knowledge society.
                The Board advocates Continuous and Comprehensive Evaluation, emphasising the holistic development of
                learners.
                It is committed to offering a stress-free learning environment that cultivates competent, confident, and
                enterprising individuals who promote harmony and peace.
            </h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Overview section -->
    <section class="wave-sec ligh-yellowWithGg-img ptb-80 container-space" id="terms_conditions">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p-tb50 ">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Teacher <span>Enrichment</span></h3>
                    <p>Audio – Visual senses of students are targeted, and it helps the students store the information
                        fast
                        and more effectively.</p>
                    <p>Uses interactive modules like videos and presentations. These visually attractive methods of
                        teaching
                        help students learn a concept that is difficult to understand through traditional methods. </p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                <img src="<?= base_url('images/facilities/networkclassroom_overview.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
        </div>
    </section>
    <!-- Overview section -->

    <!-- Teacher Enrichment Gallery -->
        <section class="container-space ptb-80">
            <div class="Panel">
                <div class="Panel-body">
                    <div class="tab-content" id="tab-1">
                        <div class="sectionTitle-blue col-lg-10 m-auto">
                            <h3>Teacher Enrichment <span> Gallery</span></h3>
                            <h6 style="color:black;">"Enhancing education through interactive smart boards and connected,
                                modern classrooms."
                            </h6>
                        </div>

                        <div class="row w100 m-0">
                            <div class="col-12 col-md-12 col-lg-6 col-xl-4 p-0">
                                <div class="gallery-imgs">
                                    <img src="<?= base_url('images/gallery/networkclassroom_rightside.png') ?>"
                                        class="img-fluid w100" alt="Sir Gallery Images">
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-4 p-0">
                                <div class="gallery-imgs">
                                    <div class="gallery-imgItem1">
                                        <img src="<?= base_url('images/gallery/networkclassroom_top.png') ?>"
                                            class="img-fluid w100" alt="Sir Gallery Images">
                                    </div>
                                    <div class="gallery-imgItem2">
                                        <img src="<?= base_url('images/gallery/networkclassroom_bottom.png') ?>"
                                            class="img-fluid w100" alt="Sir Gallery Images">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-6 col-xl-4 p-0">
                                <div class="gallery-imgs">
                                    <img src="<?= base_url('images/gallery/networkclassroom_leftside.png') ?>"
                                        class="img-fluid w100" alt="Sir Gallery Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Teacher Enrichment Gallery -->