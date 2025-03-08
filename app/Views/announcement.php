<main>
    <!-- Banner Section -->
    <section class="banner-section">
        <!-- <div class="bannerImg-OverlayContainer"></div> -->
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
    <section class="container-space innerMenus-sec" id="abouctbse">
        <div class="innerMenus">
            <ul>
                <li><a href="<?= base_url('announcements#announcements') ?>" class="active">Sir Mutha Announcements</a>
                </li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <!-- <div class="sectionTitle-white col-lg-10 m-auto ">

            <h3>Sir Mutha <span> Announcements</span></h3>
            <h6>The Central Board of Secondary Education (CBSE) envisions a robust, vibrant, and holistic school education system that nurtures excellence in every sphere of human endeavour. 
            The Board is dedicated to providing quality education that encourages intellectual, social, and cultural vitality among its learners. 
            It strives to create a learning process and environment that empowers future citizens to emerge as global leaders in the evolving knowledge society. 
            The Board advocates Continuous and Comprehensive Evaluation, emphasising the holistic development of learners. 
            It is committed to offering a stress-free learning environment that cultivates competent, confident, and enterprising individuals who promote harmony and peace.
            </h6>
        </div> -->
    </section>
    <!-- Section Menus -->


    <section class="container-space blueBg-Sec ptb-80" id="announcements">
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Announcements</h3>
        </div>

        <!-- Tab View Sections -->
        <div id="announcements" class="container-space mt-50">
            <div class="Panel">
                <nav>
                    <ul class="Tabs">
                        <li class="Tabs__tab active Tab" data-tab="1"><span>School Updates</span></li>
                        <li class="Tabs__tab Tab" data-tab="2"><span>CBSE Curriculum</span></li>
                        <li class="Tabs__presentation-slider" role="presentation"></li>
                    </ul>
                </nav>

                <div class="Panel-body">
                    <!-- School Updates Tab -->
                    <div class="tab-content" id="tab-1">
                        <?php foreach ($school_updates as $announcement): ?>
                        <div class="annoucementCards">
                            <div class="dateOf-annoucement">
                                <h5 class="year"><?= date('Y', strtotime($announcement['created_at'])) ?></h5>
                                <div class="date-badge">
                                    <div class="day"><?= date('d', strtotime($announcement['created_at'])) ?></div>
                                    <div class="month"><?= date('M', strtotime($announcement['created_at'])) ?></div>
                                </div>
                            </div>
                            <div class="desc-annoucement">
                                <p><?= esc($announcement['description']) ?></p>
                            </div>
                            <div class="viewPdf-annoucement">
                                <a href="<?= base_url('uploads/announcements/' . esc($announcement['pdf_file'])) ?>"
                                    target="_blank">
                                    <div class="viewPdf">
                                        <span>View PDF</span>
                                        <img src="<?= base_url('images/announcements/eyeIcon.svg') ?>" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- CBSE Curriculum Tab -->
                    <div class="tab-content" id="tab-2" style="display: none;">
                        <?php foreach ($cbse_curriculum as $announcement): ?>
                        <div class="annoucementCards">
                            <div class="dateOf-annoucement">
                                <h5 class="year"><?= date('Y', strtotime($announcement['created_at'])) ?></h5>
                                <div class="date-badge">
                                    <div class="day"><?= date('d', strtotime($announcement['created_at'])) ?></div>
                                    <div class="month"><?= date('M', strtotime($announcement['created_at'])) ?></div>
                                </div>
                            </div>
                            <div class="desc-annoucement">
                                <p><?= esc($announcement['description']) ?></p>
                            </div>
                            <div class="viewPdf-annoucement">
                                <a href="<?= base_url('uploads/announcements/' . esc($announcement['pdf_file'])) ?>"
                                    target="_blank">
                                    <div class="viewPdf">
                                        <span>View PDF</span>
                                        <img src="<?= base_url('images/announcements/eyeIcon.svg') ?>" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
        <!-- Tab View Sections -->

    </section>