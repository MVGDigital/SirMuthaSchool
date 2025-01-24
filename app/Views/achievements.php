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
    </section>
    <!-- Banner Section -->

    <!-- Section Menus -->
    <section class="container-space innerMenus-sec">
        <div class="innerMenus">
            <ul class="lessMenus">
                <li><a href="#" class="active">Achievements</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Sir Mutha <span> Achievements</span></h3>
            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur</h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!--  Sports Section -->
    <section class="container-space blueBg-Sec ptb-80">
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Sports <span> Achievements</span></h3>
        </div>
        <div id="sports" class="splide paginationCenter mt-50">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid w100">
                        </div>
                        <div class="thumbContent">
                            <h6> Sarvepalli Sai Aditya</h6>
                            <p>of class XI has won a silver 4*200M freestyle Relay and two Bronze medals in 1500M freestyle and 4*100M freestyle relay, respectively, at the 39th Junior Aquatic National Championship held in August 2023, in Bhubaneshwar. At the CBSE Swimming National Tournament held in Sonipat, Haryana, in November 2023, he won a bronze medal in the 800m freestyle in the Under-17 category. </p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid w100">
                        </div>
                        <div class="thumbContent">
                            <h6>Aarushi R Chowatia</h6>
                            <p>of class 10 has won silver medals butterfly, a backstroke and freestyle and a bronze medal in breaststroke at the JITO National Games 2024. </p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid w100">
                        </div>
                        <div class="thumbContent">
                            <h6>Devan S</h6>
                            <p>Devan S of Class II bagged gold medals in the 25m freestyle, backstroke, and butterfly in the under 7 category at the SBKF 10th National Games 2024, held in May 2024 at Jammu University, Jammu & Kashmir.</p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid w100">
                        </div>
                        <div class="thumbContent">
                            <h6>The swimming team of Sir Mutha School</h6>
                            <p>The swimming team of Sir Mutha School secured the second place in the CBSE South zone-I, swimming competition 2023-24</p>
                            <p>Kyishong and Sai Aditya will receive the trophy on behalf of the team.</p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid w100">
                        </div>
                        <div class="thumbContent">
                            <h6>Mohamed Izaan</h6>
                            <p>Mohamed Izaan of Class II has won gold medals in 300m, 500m, and relay, and a silver medal in 1000m at the Asiatic Roller Sports Expert Confederacy 2023, held at ARSEC Speed Skating Rink, Bangkok, Thailand, in the under-6 speed inline category. He has also secured a gold medal and a silver medal in the 9th National Level Dance Skate Sport event championship 2024 for the events: Zig Zag Dash 100m and Mini Dash.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--  Sports Sections -->

    <!-- Inter School Section-->
    <section id="inter-school" class="wave-sec white-bgImg" id="cbsecurriculum">
        <div class="itemSpaceBetween">
            <div class="col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/facilities/spl-edication.png') ?>" class="img-fluid w100"
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
                        only hone their talents but also cultivate in them a profound sense of collaboration,
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
                <img src="<?= base_url('images/admission/terms-and-conditions.png') ?>" class="img-fluid w100"
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
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="card-content">
                                <h5>Mrs. S. Shiyamala</h5>
                                <p>Mrs.S.Shiyamala was conferred the Best Teacher Award 2019 by the West Chennai
                                    Sahodaya Cluster Schools. As a teacher at Sir Mutha School and the Learning Centre,
                                    her dedication to inclusive education, holistic development, and strong work ethics
                                    has established her as a compassionate and impactful educator.</p>
                            </div>
                            <div class="hoverImg">
                                <img src="<?= base_url('images/achievements/sample.png') ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="card-content">
                                <h5>Mrs. G. Sreenidhi</h5>
                                <p>Mrs. G. Sreenidhi was conferred the prestigious Best Teacher Award in 2020 by the
                                    West Chennai Sahodaya Cluster Schools. Renowned for her ability to demystify the
                                    complexities of Mathematics, she combines unwavering dedication with exemplary work
                                    ethics, leaving an indelible mark on her students and the field of education.</p>
                            </div>
                            <div class="hoverImg">
                                <img src="<?= base_url('images/achievements/sample.png') ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="card-content">
                                <h5>Mrs. A. Varsha</h5>
                                <p>Mrs. A. Varsha was conferred the Best Teacher Award in 2021 by the West Chennai
                                    Sahodaya Cluster Schools. As an educator spanning kindergarten to Class 5, she is
                                    cherished by her students for her rare ability to blend warmth with steadfast
                                    discipline. Her exceptional organisational acumen and compassionate yet resolute
                                    approach have cemented her reputation as an exemplary guide in the formative years
                                    of education.</p>
                            </div>
                            <div class="hoverImg">
                                <img src="<?= base_url('images/achievements/sample.png') ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="card-content">
                                <h5>Mrs. Sheeba Samson</h5>
                                <p>Mrs. Sheeba Samson was honoured with the Best Teacher Award in 2022 by the West
                                    Chennai Sahodaya Cluster Schools. As a Biology teacher, she possesses the rare
                                    ability to elucidate the complexities of her subject with clarity and precision. Her
                                    blend of kindness and firmness, coupled with her genuine compassion for all, has
                                    earned her the admiration of both students and colleagues alike</p>
                            </div>
                            <div class="hoverImg">
                                <img src="<?= base_url('images/achievements/sample.png') ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="card-content">
                                <h5>Mrs. Honey Sam</h5>
                                <p>Mrs. Honey Sam was conferred the Best Teacher Award in 2023 by the West Chennai
                                    Sahodaya Cluster Schools. With more than 20 years of experience in teaching
                                    Mathematics, she has shaped countless minds with both precision and care. Her
                                    remarkable organisational skills, paired with an enduring commitment to her
                                    students, have made her an inspiring and influential presence in the classroom,
                                    earning her the admiration of all who encounter her teaching.</p>
                            </div>
                            <div class="hoverImg">
                                <img src="<?= base_url('images/achievements/sample.png') ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="card-content">
                                <h5>Mrs. Shonali Mathai</h5>
                                <p>Mrs. Shonali Mathai was conferred the Best Teacher Award 2024 by the West Chennai
                                    Sahodaya Cluster Schools. Rising from a Grade 2 teacher to Upper Primary
                                    Coordinator, her dedication to teaching and leadership is widely respected. Known
                                    for her organisational and communication skills, she has built lasting relationships
                                    with students and colleagues. Shonali’s commitment continues to inspire and uplift
                                    the school community. </p>
                            </div>
                            <div class="hoverImg">
                                <img src="<?= base_url('images/achievements/sample.png') ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="card-content">
                                <h5>Mrs. A Vijayalakshmi</h5>
                                <p>Mrs.A Vijayalakshmi was conferred the Best Teacher Award in 2024, West Chennai
                                    Sahodaya Schools Complex. A meticulous planner and firmly believes that education is
                                    not only the transfer of knowledge but the cultivation of character. Her enduring
                                    commitment to her students and the craft of teaching has earned her profound respect
                                    and admiration across the educational community.</p>
                            </div>
                            <div class="hoverImg">
                                <img src="<?= base_url('images/achievements/sample.png') ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="card-content">
                                <h5>Mrs. Kavithamani and Mrs. Taj Banu </h5>
                                <p>The workshop, held through the collaboration between the University of Madras and the
                                    US Consulate, Chennai ,aimed at enhancing science education. Mrs. Kavithamani and
                                    Mrs. Taj Banu from Sir Mutha School participated and presented their views on
                                    integrating innovative teaching methods in science. Their presentations emphasised
                                    interactive learning and the role of technology in boosting student engagement. Both
                                    teachers shared practical examples from their own experiences, focusing on hands-on
                                    activities and collaborative learning.</p>
                            </div>
                            <div class="hoverImg">
                                <img src="<?= base_url('images/achievements/sample.png') ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="card-content">
                                <h5>Ms. S. Bhuvaneswari</h5>
                                <p>Ms. Bhuvaneswari.S, the swimming coach at Sir Mutha School recently participated in
                                    the 20th National Masters Swimming Championships held in Bhopal. She demonstrated
                                    exceptional prowess, securing a Silver medal in the 50m freestyle, a Gold in both
                                    the 50m backstroke and 50m butterfly, and a Bronze in the 100m freestyle, further
                                    solidifying her reputation as a formidable competitor.</p>
                            </div>
                            <div class="hoverImg">
                                <img src="<?= base_url('images/achievements/sample.png') ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--  Teachers Sections -->