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
            <h3>Academic <span>Facilities</span></h3>

            <h6>"Experience excellence with top-notch academic facilities, including advanced classrooms, cutting-edge laboratories, and a comprehensive, resourceful library. Our state-of-the-art infrastructure is designed to foster a dynamic, engaging learning environment, inspiring academic growth and holistic development for every student." </h6>
            
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Academic Facilities -->
    <section class="blueBg-Sec blue-wave">
        <div id="facilities" class="splide paginationCenter overlayPagination cardSlider">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="wave-slider-img">
                            <img src="<?= base_url('images/facilities/faclites_home.png') ?>" class="img-fluid deskTopImg w100"
                                alt="Academic Facilities Images">
                            <img src="<?= base_url('images/facilities/faclites_homeMob.png') ?>" class="img-fluid mobImg w100"
                                alt="Academic Facilities Images">
                        </div>
                        <div class="sliderItem-end-content">
                            <h4>Networked Classrooms</h4>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('facilities/networkedclassrooms') ?>">Know More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="wave-slider-img">
                            <img src="<?= base_url('images/facilities/Arts.png') ?>" class="img-fluid deskTopImg w100"
                                alt="Academic Facilities Images">
                            <img src="<?= base_url('images/facilities/ArtsMob.png') ?>" class="img-fluid mobImg w100"
                                alt="Academic Facilities Images">
                        </div>
                        <div class="sliderItem-end-content">
                            <h4>Music & Arts Room</h4>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('facilities/musicandartroom') ?>">Know More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="wave-slider-img">
                            <img src="<?= base_url('images/facilities/library.png') ?>" class="img-fluid deskTopImg w100"
                                alt="Academic Facilities Images">
                            <img src="<?= base_url('images/facilities/libraryMob.png') ?>" class="img-fluid mobImg w100"
                                alt="Academic Facilities Images">
                        </div>
                        <div class="sliderItem-end-content">
                            <h4>Library</h4>
                            <div class="blueBtn-medium">
                                <!-- <a href="<?= base_url('facilities#greencampus') ?>">Know More</a> -->
                                <a href="<?= base_url('facilities/library') ?>">Know More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="wave-slider-img">
                            <img src="<?= base_url('images/facilities/facilities.jpg') ?>" class="img-fluid deskTopImg w100"
                                alt="Academic Facilities Images">
                            <img src="<?= base_url('images/facilities/facilitiesMob.png') ?>" class="img-fluid mobImg w100"
                                alt="Academic Facilities Images">
                        </div>
                        <div class="sliderItem-end-content">
                            <h4>Computer Lab</h4>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('facilities/computerlab') ?>">Know More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="wave-slider-img">
                            <img src="<?= base_url('images/facilities/Biology_lab.png') ?>" class="img-fluid deskTopImg w100"
                                alt="Academic Facilities Imsages">
                            <img src="<?= base_url('images/facilities/biology_labMob.png') ?>" class="img-fluid mobImg w100"
                                alt="Academic Facilities Images">
                        </div>
                        <div class="sliderItem-end-content">
                            <h4>Biology Lab</h4>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('facilities/biologylab') ?>">Know More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="wave-slider-img">
                            <img src="<?= base_url('images/facilities/Chemistry_lab.png') ?>" class="img-fluid deskTopImg w100"
                                alt="Academic Facilities Images">
                            <img src="<?= base_url('images/facilities/chemistry_labMob.png') ?>" class="img-fluid mobImg w100"
                                alt="Academic Facilities Images">
                        </div>
                        <div class="sliderItem-end-content">
                            <h4>Chemistry Lab</h4>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('facilities/chemistrylab') ?>">Know More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="wave-slider-img">
                            <img src="<?= base_url('images/facilities/physics_lab.png') ?>" class="img-fluid deskTopImg w100"
                                alt="Academic Facilities Images">
                            <img src="<?= base_url('images/facilities/physics_labMob.png') ?>" class="img-fluid mobImg w100"
                                alt="Academic Facilities Images">
                        </div>
                        <div class="sliderItem-end-content">
                            <h4>Physics Lab</h4>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('facilities/physicslab') ?>">Know More</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Academic Facilities -->

    <!-- Extra Curricular -->
    <section class="container-space cardWith-overlay-Btn white-bgImg ptb-80" id="extra-curricular">
        <div class="sectionTitle-blue col-lg-10 m-auto">
            <h3>Extra <span>Curricular</span></h3>
            <div class="row m-0 w100 mt-50">
                <div class="col-lg-6 p-0">
                    <div class="cardWith-Btn">
                        <img src="<?= base_url('images/facilities/swimmingpool_mainimage.png') ?>"
                            class="img-fluid w100" alt="Sir Mutha Logo">
                        <div class="blueBtn-medium">
                            <a href="<?= base_url('facilities/swimmingpool') ?>">Swimming Pool</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="cardWith-Btn">
                        <img src="<?= base_url('images/facilities/mainpage_concerthall.png') ?>" class="img-fluid w100"
                            alt="Sir Mutha Logo">
                        <div class="blueBtn-medium">

                            <a href="<?= base_url('facilities/concerthall') ?>">Concert Hall</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-0">
                    <div class="cardWith-Btn">
                        <img src="<?= base_url('images/facilities/cricket_mainpage.png') ?>" class="img-fluid w100"
                            alt="Sir Mutha Logo">
                        <div class="blueBtn-medium">
                            <a href="<?= base_url('facilities/cricketnets') ?>">Cricket Nets</a>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <!-- Extra Curricular -->

    <!-- Co-Curricular -->
    <section class="wave-sec ligh-yellowBG" id="co-curricular">
        <div class="lft-rgt-content">
            <div id="curve-slider" class="splide paginationCenter">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="row w100 m-0 itemSpaceBetween">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-7 mobContTop-p-tb50 plr-80">
                                    <div class="sectionTitle-blue">
                                        <h3>Co- <span> Curricular</span></h3>
                                        <p>Arts</p>
                                        <p>The art room stands as a sanctuary of creativity, designed to inspire and
                                            encourage artistic expression.
                                            Here, students are free to experiment with various mediums, cultivating
                                            their imagination. By integrating arts education into our academic
                                            framework,
                                            we foster well-rounded individuals who think creatively. This vital aspect
                                            of our vision empowers students to explore their full potential.
                                            Ultimately, creativity becomes a lens through which they engage with the
                                            world.
                                        </p>
                                        <p>Craft</p>
                                        <p>Craft serves as a vital medium for students to explore their creativity and
                                            develop skills such as patience, precision, and critical thinking.
                                            Through activities like Madhubani painting, clay modelling,and jewellery
                                            making, students are encouraged to express themselves and engage with
                                            meaningful forms of art.
                                            These practices not only refine their motor skills but also provide a
                                            platform for innovative thinking.
                                            Sir Mutha School integrates such experiences to inspire well-rounded
                                            development, blending creativity with thoughtful learning.</p>
                                        <div class="blueBtn-medium">
                                            <a href="<?= base_url('facilities/artandcraft') ?>">Know More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 p-0">
                                    <img src="<?= base_url('images/facilities/art_craft.png') ?>"
                                        class="img-fluid w100" alt="Lady Andal">
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="row w100 m-0 itemSpaceBetween">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-7 mobContTop-p-tb50 plr-80">
                                    <div class="sectionTitle-blue">
                                        <h3>Co- <span> Curricular</span></h3>
                                        <p>Technology</p>
                                        <h4>Networked classrooms and smart boards</h4>
                                        <p>Our networked classrooms are designed to revolutionize learning by seamlessly integrating technology into education. These classrooms are equipped with advanced digital tools, enabling real-time collaboration, interactive lessons, and dynamic teaching methods. With high-speed connectivity and cutting-edge devices, students gain access to a world of resources, enhancing their understanding and creativity in every subject.
                                        </p>
                                        <p>By fostering an interactive and connected learning environment, our networked classrooms bridge the gap between traditional teaching and modern innovation. Teachers can deliver personalized lessons, and students can engage in collaborative projects, preparing them for a future shaped by technology and global connectivity.</p>
                                        <div class="blueBtn-medium">
                                            <a href="<?= base_url('facilities/networkedclassrooms') ?>">Know More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 p-0">
                                    <img src="<?= base_url('images/facilities/network_classrooms.png') ?>"
                                        class="img-fluid w100" alt="Lady Andal">
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="row w100 m-0 itemSpaceBetween">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-7 mobContTop-p-tb50 plr-80">
                                    <div class="sectionTitle-blue">
                                        <h3>Co- <span> Curricular</span></h3>
                                        <h4>Health Centre</h4>
                                        <p>At Sir Mutha School, we are proud to collaborate with the Apollo Shine
                                            Foundation to champion the health and well-being of both students and staff.
                                            Apollo Shine establishes SHINE Health Rooms within our school, staffed by
                                            experienced medical professionals who provide regular check-ups,
                                            vaccinations, and tailored health education programmes.
                                            These initiatives cultivate a culture of health awareness and proactive
                                            care, ensuring that everyone in our community is well-equipped to lead
                                            healthy lives.</p>
                                        <h4>Safety</h4>
                                        <p>A child’s sense of security is the cornerstone of their growth and success,
                                            and ensuring this is a paramount responsibility.At Sir Mutha School, we
                                            recognise that a child’s ability to thrive is deeply connected to their
                                            sense of security and well-being. To this end, we have prioritised safety
                                            with stringent fire protocols and regular water audits, ensuring a
                                            consistently high standard of care. The physical and mental health of every
                                            child is equally safeguarded, with an infirmary accessible at all times for
                                            immediate support. These measures reflect our dedication to creating an
                                            environment where every child feels secure, valued, and empowered to
                                            succeed.</p>
                                        <div class="blueBtn-medium">
                                            <a href="<?=base_url('facilities/healthandsaftey') ?>">Know More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 p-0">
                                    <img src="<?= base_url('images/facilities/health.png') ?>"
                                        class="img-fluid w100" alt="Lady Andal">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Co-Curricular -->

    <!-- Special Education -->
    <section class="wave-sec blueBg-Sec" id="specialeducation">
        <div class="lft-rgt-content">
            <div id="spl-education-slider" class="splide paginationCenter">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="row w100 m-0 itemSpaceBetween">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 p-0">
                                    <img src="<?= base_url('images/facilities/spl-edication.png') ?>"
                                        class="img-fluid deskTopImg-forTab w100" alt="Lady Andal">
                                    <img src="<?= base_url('images/facilities/spl-edicationMob.png') ?>"
                                        class="img-fluid tabImg w100" alt="Lady Andal">
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-7 mobContTop-p-tb50 plr-80">
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
                                <div class="col-12 col-sm-12 col-md-12 col-lg-5 p-0">
                                    <img src="<?= base_url('images/facilities/spl-edication.png') ?>"
                                        class="img-fluid deskTopImg-forTab w100" alt="Lady Andal">
                                    <img src="<?= base_url('images/facilities/spl-edicationMob.png') ?>"
                                        class="img-fluid tabImg w100" alt="Lady Andal">
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-7 mobContTop-p-tb50 plr-80">
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
    </section>
    <!-- Special Education -->

    <!-- Green Campus -->
    <section class="container-space videosec" id="greencampus">
        <div class="ptb-80">
            <div id="campusVideo" class="pb-60">
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
            </div>
            <div class="sectionTitle-blue col-lg-12 col-xl-10 m-auto">
                <h3>Green <span>Campus</span></h3>

                <p class="light-blue">
                    Outbound trips and educational tours, both within the country and beyond our borders, offer a wealth
                    of benefits, broadening students' horizons by immersing them in diverse cultures and environments.
                    These adventures provide practical learning experiences that extend well beyond the classroom,
                    enhancing problem-solving skills and adaptability.
                    As students navigate new and unfamiliar territories, they cultivate independence and self-confidence
                    while forging lasting memories and connections that foster a sense of global citizenship.
                    From camping and rock climbing to parasailing and microlight flying, these meticulously planned
                    expeditions instil resilience and teamwork alongside a profound respect for nature.</p>
            </div>
        </div>
    </section>
    <!-- Green Campus -->

    <!-- Scouts & Guides -->
    <section class="green-campus-sec" id="greencampus">
        <div id="greenCampus-slider" class="splide paginationCenter fullWidthImg img-overwite-wave">   
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="<?= base_url('images/facilities/greencampus_desk1.png') ?>" class="img-fluid deskTopImg" alt="">
                        <img src="<?= base_url('images/facilities/greencampus_Mob1.png') ?>" class="img-fluid mobImg w100" alt="">     
                    </li>
                    <li class="splide__slide">
                        <img src="<?= base_url('images/facilities/greencampus_desk2.png') ?>" class="img-fluid deskTopImg" alt="">
                        <img src="<?= base_url('images/facilities/greencampus_Mob2.png') ?>" class="img-fluid mobImg w100" alt="">     
                    </li>
                   
                </ul>
            </div>
        </div>

        <div class="container-space wave-yellow-overwireBg ptb-80">
            <div class="sectionTitle-blue col-lg-12 col-xl-10 m-auto">
        
                <h3>NCC &<span> Guides</span></h3>

                <p class="light-blue">
                    Outbound trips and educational tours, both within the country and beyond our borders, offer a wealth
                    of benefits, broadening students' horizons by immersing them in diverse cultures and environments.
                    These adventures provide practical learning experiences that extend well beyond the classroom,
                    enhancing problem-solving skills and adaptability.
                    As students navigate new and unfamiliar territories, they cultivate independence and self-confidence
                    while forging lasting memories and connections that foster a sense of global citizenship.
                    From camping and rock climbing to parasailing and microlight flying, these meticulously planned
                    expeditions instil resilience and teamwork alongside a profound respect for nature.</p>

                <h3>Scouts & <span>Guides</span></h3>

                <p class="light-blue">
                    Our school proudly offers a vibrant Scouts and Guides programme, fostering essential life skills and
                    values in our students. Through a diverse range of activities ranging from outdoor adventures to
                    community service participants develop leadership, teamwork, and resilience. By fostering a spirit
                    of camaraderie and ethical engagement, we prepare our students to navigate the complexities of life
                    with confidence and integrity.</p>
            </div>
        </div>
    </section>
    <!-- Scouts & Guides -->