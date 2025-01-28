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
                <li><a href="<?= base_url('in-the-outdoors#adventure-camps') ?>" class="active">Adventure Camps</a></li>
                <li><a href="<?= base_url('in-the-outdoors#excursions') ?>">Educational Tours</a></li>
                <li><a href="<?= base_url('in-the-outdoors#educational-tour') ?>">Excursions</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>In the <span>outdoors</span></h3>
            
            <h6>The Central Board of Secondary Education (CBSE) envisions a robust, vibrant, and holistic school education system that nurtures excellence in every sphere of human endeavour. 
            The Board is dedicated to providing quality education that encourages intellectual, social, and cultural vitality among its learners. 
            It strives to create a learning process and environment that empowers future citizens to emerge as global leaders in the evolving knowledge society. 
            The Board advocates Continuous and Comprehensive Evaluation, emphasising the holistic development of learners. 
            It is committed to offering a stress-free learning environment that cultivates competent, confident, and enterprising individuals who promote harmony and peace.
            </h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Adventure Camps Section-->
    <section class="wave-sec wave-yellowWith-bottom-img container-space ptb-80" id="learing_center">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/intheoutdoors/adventure_camp_outdoors.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p-tb50">
                <div class="sectionTitle-blue lft-rgt-content changeTitleColor">
                    <h3>Adventure <span> Camps</span></h3>
                    <p>Adventure camps offer immersive experiences that extend beyond the classroom, broadening students' horizons and enhancing practical skills. These thoughtfully designed expeditions build self-confidence, resilience, and teamwork. Activities such as camping, and trekking encourage a deeper connection with nature and nurture essential life skills. Each adventure creates lasting memories and connections, equipping students to face life's challenges with determination.
                    </p>
                   
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor-->
                    <!--    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis-->
                    <!--    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat-->
                    <!--</p>-->
                </div>
            </div>
        </div>
    </section>
    <!-- Adventure Camps Section-->

    <!-- Excursions Section -->
    <section id="excursions" class="container-space blueBg-Sec ptb-80" id="visionmission">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p50">
                <div class="sectionTitle-white lft-rgt-content">
                    <h3><span>Excursions</span></h3>

                    <p>Excursions offer students a delightful break from routine, combining fun with learning. For students these trips provide opportunities to explore new environments, bond with peers, and experience hands-on learning. Each outing is carefully planned to balance education and enjoyment, making every trip memorable.</p>
                    <!-- <div class="blueBtn-medium">
                        <a href="<?= base_url('visionandmission') ?>">Know More</a>
                    </div> -->
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/intheoutdoors/excursions.png') ?>" class="img-fluid w100"
                    alt="Sir Mutha Vision and Mission">
            </div>
        </div>
    </section>
    <!-- Excursions Section -->

    <!-- Educational Tours Section-->
    <section id="educational-tour">
        <img src="<?= base_url('images/intheoutdoors/educationtours.png') ?>" class="img-fluid" alt="" id="Occupational">
        <div class="container-space ptb-80">
            <div class="sectionTitle-blue col-lg-10 m-auto">
                <h3>Educational <span>Tours</span></h3>
                <h6 class="light-blue">At Sir Mutha School, educational tours are an integral part of holistic learning, offering students opportunities to explore diverse cultures, historical landmarks, and innovative advancements.</h6>
                <p class="light-blue">These experiences broaden their perspectives, enhance critical thinking, and strengthen their understanding of the world beyond the classroom. The recent tour to Japan provided insights into the country’s rich heritage, technological innovations, and cultural ethos, leaving an indelible impact on the students' minds.</p>
                <p class="light-blue">Participation in Model United Nations (MUN) conferences, including the prestigious Oxford MUN, empowers our students to enhance their diplomacy, public speaking, and problem-solving skills. By engaging in meaningful debates on global issues, they learn the value of collaboration, leadership, and informed decision-making, enriching their academic and personal development.</p>
                <!--<div class="blueBtn-medium text-center">-->
                <!--    <a href="#">Know More</a>-->
                <!--</div>-->
            </div>
        </div>
    </section>
    <!-- Educational Tours Section-->