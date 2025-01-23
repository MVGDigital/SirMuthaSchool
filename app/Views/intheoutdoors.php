<main>
    <!-- Banner Section -->
    <section class="banner-section">
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
        </div>
    </section>
    <!-- Banner Section -->

    <!-- Section Menus -->
    <section class="container-space innerMenus-sec" id="abouctbse">
        <div class="innerMenus">
            <ul>
                <li><a href="<?= base_url('academics#aboutcbse') ?>" class="active">Adventure Camps</a></li>
                <li><a href="<?= base_url('academics#cbsecurriculum') ?>">Educational Tours</a></li>
                <li><a href="<?= base_url('academics#teacherenrichment') ?>">Excursions</a></li>
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

    <!-- CBSE Curriculum Section-->
    <section class="wave-sec white-bgImg" id="cbsecurriculum">
        <div class="itemSpaceBetween">
            <div class="col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/academics/curriculum.svg') ?>" class="img-fluid" alt="Lady Andal">
            </div>
            <div class="col-md-12 col-lg-7 col-xl-7 mobContTop-p-tb50 plr-80">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Adventure <span> Camps</span></h3>
                    
                    <p>Adventure camps offer immersive experiences that extend beyond the classroom, broadening students' horizons and enhancing practical skills. These thoughtfully designed expeditions build self-confidence, resilience, and teamwork. Activities such as camping, and trekking encourage a deeper connection with nature and nurture essential life skills. Each adventure creates lasting memories and connections, equipping students to face life's challenges with determination.</p>
                    <!--<p>https://cbseacademic.nic.in/curriculum_2025.html</p>-->
                    
                </div>
            </div>
        </div>
    </section>
    <!-- CBSE Curriculum Section-->

    <!-- Excursions Section -->
    <section class="container-space blueBg-Sec ptb-80" id="visionmission">
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
                <img src="<?= base_url('images/about/vision-mission.png') ?>" class="img-fluid w100"
                    alt="Sir Mutha Vision and Mission">
            </div>
        </div>
    </section>
    <!-- Excursions Section -->

    <!-- Educational Tours Section-->
    <section class="">
        <img src="<?= base_url('images/inclusive-education/ot.png') ?>" class="img-fluid" alt="" id="Occupational">

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