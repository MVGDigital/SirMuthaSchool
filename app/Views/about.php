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

    <!-- Section Menus -->
    <section class="container-space innerMenus-sec" id="ourhistory">
        <div class="innerMenus">
            <ul>
                <li><a href="<?= base_url('about#ourhistory') ?>" class="active">Our History</a></li>
                <li><a href="https://themadrassevasadan.org/about" target="_blank">About MSS</a></li>
                <li><a href="<?= base_url('about#ourfounders') ?>">Our Founders</a></li>
                <li><a href="<?= base_url('about#visionmission') ?>">Vision & Mission</a></li>
                <li><a href="<?= base_url('about#boardmember') ?>">Board Members</a></li>
                <li><a href="https://themadrassevasadan.org/Be_A_Part" target="_blank">Be a Part</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Our <span>History</span></h3>
            <h6>Nestled in a lush, verdant campus, Sir Mutha School is a child’s ideal home away from home.
                Established on the 18th of July 2012 and affiliated with the Central Board of Secondary Education,
                the school embodies a harmonious blend of legacy and innovation. Inspired by the visionary ideals of the
                late Chief Justice Sir Mutha Venkatasubba Rao,
                it is deeply committed to nurturing the spirit of inquiry and the pursuit of knowledge in every child.
                The school stands as a beacon of our dedication to fostering intellectual curiosity, inclusivity, and a
                spirit of excellence.
                Here, learning is not merely an academic endeavour but a journey of self-discovery.
            </h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Counter Section -->
    <section class="container-space counter-sec">
        <div class="row counter col-lg-10 m-auto">
            <div class="col-lg-3 counterItem">
                <h6 class="counter-number" data-count="176">0</h6>
                <p>Kindergarten Students</p>
            </div>
            <div class="col-lg-3 counterItem">
                <h6 class="counter-number" data-count="66">0</h6>
                <p>Faculty Members</p>
            </div>
            <div class="col-lg-3 counterItem">
                <h6 class="counter-number" data-count="1341">0</h6>
                <p>I To XII Students</p>
            </div>
        </div>
    </section>
    <!--  Counter Section -->

    <!-- Founder bg Section -->
    <section class="founders-sec" id="aboutmss">
        <img src="<?= base_url('images/about/founder-bg.jpg') ?>" class="img-fluid deskTopImg w100"
            alt="Sir Mutha and Lady Andal">
        <img src="<?= base_url('images/about/founder-MobBg.png') ?>" class="img-fluid mobImg w100"
            alt="Sir Mutha and Lady Andal">

        <div class="bgWith-bottom-content container-space">
            <div class="col-lg-10 m-auto">
                <!--<h6>A 90 year old legacy, founded by Sir Mutha & Lady Andal Venkatasubba Rao dedicated to Social Causes,-->
                <!--    Education, Arts & Sports.</h6>-->
                <h6>The Madras Seva Sadan was founded in 1928 by Sir & Lady M. Venkatasubba Rao.
                    It was founded as a Home for grown-up girls and young women "who were poor and destitute", such as
                    deserted wives, helpless widows, and orphans.
                    With a view to impart to them such education and training as would make them fit, in course of time,
                    to look after themselves, and be thoroughly self-supporting and self-reliant.
                </h6>
                <a href="https://themadrassevasadan.org/about" target="_blank" class="blueBtn">Know More</a>
            </div>
        </div>
    </section>
    <!-- Founder bg Section -->

    <!-- Founder Slider Section -->
    <section class="founder-sec" id="ourfounders">
        <div class="container-space ptb-80">
            <div class="sectionTitle-blue lft-rgt-content">
                <h3>Our <span>Founders</span></h3>
                <div id="founders-slider" class="splide paginationCenter">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="row w100 m-0">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 p-0">
                                        <h4>Sir Mutha Venkatasubba Rao</h4>
                                        <p>Sir Mutha Venkatasubba Rao was born on July 18, 1878, and had an illustrious academic career, graduating from Madras Christian College. After earning his B.L. degree, he apprenticed under Sir C.V. Kumaraswamy Sastri and began his legal career in 1903. In 1904, he partnered with his collegemate Mr. Radhakrishnaya, establishing the firm Venkatasubba Rao and Radhakrishnaya. Within a few years, he became a prominent leader at the Bar, specializing in the Original Side of law.</p>
                                    <p>In 1921, he was appointed as a Judge of the Madras High Court, becoming both the first practitioner from the Original Side and the youngest person to sit on its bench. He served for 17 years and retired in 1939 as the acting Chief Justice. His tenure was marked by unwavering dedication to justice, independence, and integrity. In 1939, he was appointed as the Agent for Berar of the Nizam of Hyderabad, where he set the foundation for this prestigious office.</p>
                                    <p>Beyond his legal career, Sir Mutha was deeply committed to social welfare. After marrying Andalamma in 1922, they co-founded The Madras Seva Sadan, a pioneering institution for social reform. A perfectionist in both personal and public life, he valued discipline, cleanliness, and ethical conduct. Known for his kindness and philanthropy, he contributed significantly to social causes, particularly The Madras Seva Sadan. His legacy remains as one of the greatest judges in Madras High Court history and a visionary social reformer dedicated to justice and welfare.</p>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 p-0">
                                        <img src="<?= base_url('images/about/founder_sir_mutha.png') ?>"
                                            class="img-fluid w100" alt="Lady Andal">
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="row w100 m-0">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 p-0">
                                        <h4>Lady Andal Venkatasubba Rao</h4>
                                        <p>Lady Andal Venkatasubba Rao, born in 1894, emerged as a transformative figure
                                            in a Madras marked by social injustices,
                                            particularly against women. Educated at St. Thomas Convent and Presidency
                                            High School, she developed a strong social awareness that would define her
                                            life’s work.
                                            Together with her husband, Justice M. Venkatasubba Rao, she founded The
                                            Madras Seva Sadan in 1928, a pioneering institution dedicated to uplifting
                                            destitute women and children.
                                            Under her compassionate leadership, the Sadan grew from eight beneficiaries
                                            to over 3,000, providing education, shelter, and vocational training.
                                            Honoured with prestigious awards such as the Padma Bhushan, the
                                            Kaiser-i-Hind Medal, and the King George VI Medal, she remained humble and
                                            devoted to her community.
                                            Lady Andal broke down societal barriers, promoting inclusivity and kindness
                                            in her efforts.
                                            Following her husband’s passing in 1960, she bore her loss with grace,
                                            continuing her work until her own death in 1969. Her legacy endures through
                                            the school named in her honour, embodying her ideals of service, compassion,
                                            and unwavering positivity.
                                            At the heart of her life’s work was a simple yet profound motto: to brighten
                                            the way for others, always with a smile.
                                        </p>

                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 p-0">
                                        <img src="<?= base_url('images/about/founder_lady1.png') ?>"
                                            class="img-fluid w100" alt="Lady Andal">
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="row w100 m-0">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 p-0">
                                        <h4>Mrs. C. Prema Kumar</h4>
                                        <p>Mrs. C. Prema Kumar, the grandniece of Sir Mutha Venkatasubba Rao and Lady
                                            Andal Venkatasubba Rao and long-time Correspondent of the Lady Andal
                                            Venkatasubba Rao School in Chetpet,
                                            commanded respect wherever she went. Known for her sharp business acumen,
                                            probably a result of her B. Com degree, she earned her Diploma in Montessori
                                            Teachers Training and dreamed of setting up a school that was child-centric
                                            over being academics-centric.
                                            Culminating in the formation of Lady Andal Venkatasubba Rao School. Mrs. C.
                                            Prema Kumar was a great leader. She was the pillar of The Madras Seva Sadan,
                                            a visionary, a wonderful mentor, and a perfectionist in all aspects of life.
                                            Mrs. Prema Kumar was the pioneer of inclusive education in India. She worked
                                            tirelessly to mainstream children with physical and learning disabilities,
                                            and other special needs.
                                            To facilitate this, she started an Occupational Therapy Centre and a
                                            Learning Centre to cater to the needs of the special children. She aspired
                                            to provide children with a positive environment and atmosphere that nurtured
                                            all-round development, enabling them to look forward to school.
                                            She was never inclined towards forcing children into a mould; instead, she
                                            believed in allowing them to flourish and discover their true potential. On
                                            19th May 2017, Mrs.C.Prema Kumar was reunited with her beloved Sir Mutha and
                                            Lady Andal in their Heavenly Abode. Although her earthly journey came to an
                                            end, her ideals and legacy continue to thrive.
                                        </p>

                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 p-0">
                                        <img src="<?= base_url('images/about/founder_prema.png') ?>"
                                            class="img-fluid w100" alt="Lady Andal">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Founder Slider Section -->

    <!-- Vision & Mission Section -->
    <section class="container-space blueBg-Sec ptb-80" id="visionmission">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/about/vision-mission.png') ?>" class="img-fluid w100"
                    alt="Sir Mutha Vision and Mission">
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p50">
                <div class="sectionTitle-white lft-rgt-content">
                    <h3>Vision <span class="and">&</span> <span> Mission</span></h3>

                    <p>To provide top-notch scholastic education, with a broad, participative and balanced curriculum.
                    </p>
                    <p>To facilitate a nurturing and safe environment that encourages lifelong learning and personal growth.</p>
                    <p>To enable students to discover their talents & capabilities and achieve their true potential, so that they may reach the highest possible standard in everything they undertake.</p>
                    <p>To encourage citizenship and responsibility and teach generosity of spirit, so that students become self-disciplined and learn to respect themselves, each other, and the world in general.
                    </p>
                    <!-- <div class="blueBtn-medium">
                        <a href="<?= base_url('visionandmission') ?>">Know More</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Vision & Mission Section -->

    <!-- Our Board Member -->
    <section class="container-space ptb-80" id="boardmember">
        <div class="sectionTitle-blue col-lg-10 m-auto">
            <h3>Our Board<span> Members</span></h3>
        </div>
        <div class="col-12 col-md-12 col-lg-12 col-xl-9 m-auto">
            <div id="board-member-slider" class="splide paginationCenter mt-50">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php if (!empty($boardMembers)) : ?>
                        <?php foreach ($boardMembers as $member) : ?>
                        <li class="splide__slide">
                            <div class="boardMenberItem">
                                <img src="<?= base_url('uploads/boardofmember_photos/' . $member['photo']) ?>"
                                    class="img-fluid" alt="<?= esc($member['name']) ?>">
                                <div class="boardMenberInfo">
                                    <h5><?= esc($member['designation']) ?></h5>
                                    <h6><?= esc($member['name']) ?></h6>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                        <?php else : ?>
                        <li class="splide__slide">
                            <p>No board members found.</p>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Board Member -->

    <!-- Join With Us Section -->
    <section class="container-space bgImg-with-center-content join-with-us ptb-80 mt-80">
        <div class="join-with-us-container">
            <div class="sectionTitle-white-italic col-lg-10">
                <h4>Donate, Partner & Volunteer <br> With Us</h4>
                <div class="lightYellowBtn">
                    <a href="https://themadrassevasadan.org/be_a_part" target="_blank">Begin your Chapter</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Join With Us Section -->