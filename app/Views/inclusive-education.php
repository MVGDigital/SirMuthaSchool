<main>
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="bannerImg-OverlayContainer"></div>
        <?php if (!empty($banner)): ?>
        <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid"
            alt="<?= esc($banner['title']); ?>">
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
    <section class="container-space innerMenus-sec">
        <div class="innerMenus">
            <ul class="lessMenus">
                <li><a href="<?= base_url('inclusive-education#learing_center') ?>" class="active">Learning Centers</a>
                </li>
                <li><a href="<?= base_url('inclusive-education#Occupational') ?>">Occupational Theraphy</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
       
        <div class="sectionTitle-white col-lg-10 m-auto">
           <h3>Special <span> Education</span></h3>
           <h6>"At Sir Mutha School, our Special Education program supports children with unique learning needs through dedicated learning centers and occupational therapy. With comprehensive training for caregivers and tailored therapy sessions, we focus on fostering development, enhancing skills, and helping each child achieve their full potential, promoting inclusivity and growth."</h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Learning Centers -->
    <section class="wave-sec wave-yellowWith-bottom-img container-space ptb-80" id="learing_center">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/inclusive-education/learningcenter1.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p-tb50">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Learning <span> Centers</span></h3>
                    <p>In keeping with the vision of Sir Mutha School, the Learning Centre was established in 2012 to
                        cater to the needs of children with special needs,
                        while simultaneously fostering awareness among teachers, parents, and the community at large.
                    </p>
                    <p>Caregivers are equipped through comprehensive training programmes, enabling them to assist these
                        children in mainstream classrooms.
                        The Learning Centre has garnered accolades from the Madras Dyslexia Association, being hailed as
                        one of the best in its field.
                        Ultimately, this initiative reinforces the school’s commitment to helping every child achieve
                        their unique potential.
                    </p>
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor-->
                    <!--    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis-->
                    <!--    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat-->
                    <!--</p>-->
                </div>
            </div>
        </div>
    </section>
    <!-- Learning Centers -->


    <!-- OT -->
    <section>
        <div id="occupational-slider" class="splide paginationCenter fullWidthImg">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="<?= base_url('images/inclusive-education/ot.png') ?>" class="img-fluid" alt="" id="Occupational">
                    </li>
                    <li class="splide__slide">
                        <img src="<?= base_url('images/inclusive-education/ocupational_therapy2.png') ?>" class="img-fluid" alt="" id="Occupational">
                    </li>
                    <li class="splide__slide">
                        <img src="<?= base_url('images/inclusive-education/ocupational_therapy3.png') ?>" class="img-fluid" alt="" id="Occupational">
                    </li>
                </ul>
            </div>
        </div>

        <div class="container-space ptb-80">
            <div class="sectionTitle-blue col-lg-10 m-auto">
                <h3>Occupational <span>Theraphy</span></h3>
                <h6 class="light-blue">An Occupational Therapy Centre thrives within the school, dedicated to the
                    essential role of the Occupational Therapist in paediatrics.
                </h6>
                <p class="light-blue"> The primary mission is to help children play, grow, and develop the skills vital
                    for a fulfilling adult life. When a child struggles with writing, displays poor motor control, or
                    suffers from a fleeting attention span, the Occupational Therapist conducts a thorough assessment
                    and may recommend tailored therapy sessions.</p>
                <p class="light-blue">Utilising Sensory Integration and a Biomechanical framework, we observe
                    significant improvements in both gross and fine motor coordination. This ripple effect strengthens
                    handwriting, attention span, memory, and self-esteem, resulting in remarkable progress for the
                    children in our care.</p>
                <!--<div class="blueBtn-medium text-center">-->
                <!--    <a href="#">Know More</a>-->
                <!--</div>-->
            </div>
        </div>
    </section>
    <!-- OT -->

    <!-- Special Education -->
    <!-- <section class="wave-sec blueBg-Sec" id="specialeducation">
        <div class="lft-rgt-content">
            <div id="spl-education-slider" class="splide paginationCenter">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="row w100 m-0 itemSpaceBetween">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                    <img src="<?= base_url('images/facilities/spl-edication.png') ?>"
                                        class="img-fluid deskTopImg-forTab w100" alt="Lady Andal">
                                    <img src="<?= base_url('images/facilities/spl-edicationMob.png') ?>"
                                        class="img-fluid tabImg w100" alt="Lady Andal">
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-7 mobContTop-p-tb50">
                                    <div class="sectionTitle-white">
                                        <h3>Special <span> Education</span></h3>
                                        <h4 class="text-white">Learning Centre</h4>
                                        <p>
                                            In keeping with the vision of Sir Mutha School, the Learning Centre was
                                            established in 2012 to cater to the needs of children with special needs,
                                            while simultaneously fostering awareness among teachers, parents, and the
                                            community at large.
                                            Caregivers are equipped through comprehensive training programmes, enabling
                                            them
                                            to assist these children in mainstream classrooms.
                                            The Learning Centre has garnered accolades from the Madras Dyslexia
                                            Association,
                                            being hailed as one of the best in its field. Ultimately,
                                            this initiative reinforces the school’s commitment to helping every child
                                            achieve their unique potential.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="row w100 m-0 itemSpaceBetween">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                                    <img src="<?= base_url('images/facilities/spl-edication.png') ?>"
                                        class="img-fluid deskTopImg-forTab w100" alt="Lady Andal">
                                    <img src="<?= base_url('images/facilities/spl-edicationMob.png') ?>"
                                        class="img-fluid tabImg w100" alt="Lady Andal">
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-7  mobContTop-p-tb50">
                                    <div class="sectionTitle-white">
                                        <h3>Special <span> Education</span></h3>
                                        <h4 class="text-white">Occupational Therapy Centre</h4>
                                        <p>
                                            An Occupational Therapy Centre thrives within the school, dedicated to the
                                            essential role of the Occupational Therapist in paediatrics.
                                            The primary mission is to help children play, grow, and develop the skills
                                            vital
                                            for a fulfilling adult life. When a child struggles with writing, displays
                                            poor
                                            motor control, or suffers from a fleeting attention span,
                                            the Occupational Therapist conducts a thorough assessment and may recommend
                                            tailored therapy sessions. Utilising Sensory Integration and a Biomechanical
                                            framework, we observe significant improvements in both gross and fine motor
                                            coordination.
                                            This ripple effect strengthens handwriting, attention span, memory, and
                                            self-esteem, resulting in remarkable progress for the children in our care.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Special Education -->