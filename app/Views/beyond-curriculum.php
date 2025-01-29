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
    <section class="container-space innerMenus-sec">
        <div class="innerMenus">
            <ul>
                <li><a href="<?= base_url('beyond-curriculum#sirMutha-clubs') ?>" class="active">Clubs</a></li>
                <li><a href="<?= base_url('beyond-curriculum#news-letter') ?>">Student Newsletters</a></li>
                <li><a href="<?= base_url('beyond-curriculum#annual-events') ?>">Annual Events</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white sectionSubTitle col-lg-10 m-auto">
            <h3>Empowering Students for a <span>Better Tomorrow</span></h3>
            <h6>"At Sir Mutha School, our diverse clubs—Heritage, Maths, Eco, and Interact—empower students to explore,
                create, and contribute to society. Through engaging activities and community-driven initiatives, we
                foster a sense of responsibility, creativity, and social awareness, nurturing well-rounded individuals
                committed to making a positive impact on the world."
            </h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Clubs -->
    <section id="sirMutha-clubs" class="container-space clubsSec blueBg-Sec blue-wave pb-100">
        <div id="clubs" class="splide paginationCenter overlayPagination cardSlider">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="row m-0 w100">
                            <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-0">
                                <div class="cardWith-under-info">
                                    <img src="<?= base_url('images/facilities/heritage_main.png') ?>" class="img-fluid"
                                        alt="Sir Mutha Logo">
                                    <div class="sectionSubTitle-white">
                                        <h4>Heritage <span>Club</span></h4>
                                    </div>
                                    <div class="blueBtn-medium">
                                        <a href="<?= base_url('beyond-curriculum/heritageclub') ?>">Know More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-0">
                                <div class="cardWith-under-info">
                                    <img src="<?= base_url('images/facilities/maths_main.png') ?>" class="img-fluid"
                                        alt="Sir Mutha Logo">
                                    <div class="sectionSubTitle-white">
                                        <h4>Maths <span>Club</span></h4>
                                    </div>
                                    <div class="blueBtn-medium">
                                        <a href="<?= base_url('/beyond-curriculum/mathsclub') ?>">Know More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="row m-0 w100">
                            <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-0">
                                <div class="cardWith-under-info">
                                    <img src="<?= base_url('images/facilities/Eco club.png') ?>" class="img-fluid"
                                        alt="Sir Mutha Logo">
                                    <div class="sectionSubTitle-white">
                                        <h4>Eco <span>Club </span></h4>
                                    </div>
                                    <div class="blueBtn-medium">
                                        <a href="<?= base_url('/beyond-curriculum/ecoclub') ?>">Know More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-0">
                                <div class="cardWith-under-info">
                                    <img src="<?= base_url('images/facilities/Interact club.png') ?>" class="img-fluid"
                                        alt="Sir Mutha Logo">
                                    <div class="sectionSubTitle-white">
                                        <h4>Interact <span>Club </span></h4>
                                    </div>
                                    <div class="blueBtn-medium">
                                        <a href="<?= base_url('/beyond-curriculum/interactclub') ?>">Know More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!-- Clubs -->

    <!-- News Letters -->
    <section id="news-letter" class="container-space wave-with-bgImg ptb-80">
        <div class="sectionTitle-blue col-lg-10 m-auto">
            <h3>Students <span>Newsletter</span></h3>
            <h6 class="light-blue">"Our student newsletter showcases the latest school news, events, achievements, and
                creative student contributions. It provides a platform for students to express their ideas, celebrate
                success, and stay informed."
            </h6>
        </div>

        <div class="thumbnail-section mt-50">
            <div class="vehicle-detail-banner banner-content clearfix">
                <div class="slick-banner-slider">
                    <div class="slider slider-for">
                        <div class="slick-slider-banner-image">
                            <img src="<?= base_url('images/beyond-curriculum/thumb-banner-1.jpg') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                            <div class="thumbContent">
                                <h6>Sir Mutha School, KARE secure top honours</h6>
                                <span>Dec, 2024</span>
                                <p class="newsText"><b>CHENNAI :</b> Sir Mutha School, Chennai, and Kalasalingam Academy
                                    of Research and</p>
                                <div class="whiteBtn-medium">
                                    <a href="https://sirmuthaschool.mvgdigital.com/public/images/news-letter2.pdf"
                                        target="_blank">Know
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slider-banner-image">
                            <img src="<?= base_url('images/beyond-curriculum/newsletterbannerimg2.jpg') ?>"
                                class="img-fluid" alt="Sir Mutha Newsletter Image">
                            <div class="thumbContent">
                                <h6>School unravels traffic knots</h6>
                                <span>August, 2017</span>
                                <p class="newsText"><b>Sir Mutha School :</b> Over the last few days, Harrington Road is
                                    not as congested
                                    as before, during rush hour. On the heels of Chennai Traffic Police (CTP) restoring
                                    two-way traffic on EVR Salai-Chetpet-Gengu Reddy Subway, Sir Mutha School (CBSE),
                                    Harrington Road, took measures to prevent traffic snarls on the stretch.</p>
                                <div class="whiteBtn-medium">
                                    <a href="https://sirmuthaschool.mvgdigital.com/public/images/news-letter1.pdf"
                                        target="_blank">Know
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slider-banner-image">
                            <img src="<?= base_url('images/beyond-curriculum/thumb-banner-1.jpg') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                            <div class="thumbContent">
                                <h6>Sir Mutha School, KARE secure top honours</h6>
                                <span>Dec, 2024</span>
                                <p class="newsText"><b>CHENNAI :</b> Sir Mutha School, Chennai, and Kalasalingam Academy
                                    of Research and
                                    Education (KARE), Srivilliputhur, bagged the overall championship trophies in school
                                    and college category in the KESPA - HITS TN State level Swimming meet 2024 organised
                                    by the Kerala Sportspersons Association (KESPA) Chennai in association with the
                                    Dolphin Swimming Academy, Mogappair.</p>
                                <div class="whiteBtn-medium">
                                    <!-- <a
                                        href="https://www.newindianexpress.com/cities/chennai/2024/Feb/21/sir-mutha-school-kare-secure-top-honours">Know
                                        More</a> -->

                                    <a href="https://sirmuthaschool.mvgdigital.com/public/images/news-letter2.pdf"
                                        target="_blank">Know
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slider-banner-image">
                            <img src="<?= base_url('images/beyond-curriculum/newsletterbannerimg2.jpg') ?>"
                                class="img-fluid" alt="Sir Mutha Newsletter Image">
                            <div class="thumbContent">
                                <h6>School unravels traffic knots</h6>
                                <span>August, 2017</span>
                                <p class="newsText"><b>Sir Mutha School :</b> Over the last few days, Harrington Road is
                                    not as congested
                                    as before, during rush hour. On the heels of Chennai Traffic Police (CTP) restoring
                                    two-way traffic on EVR Salai-Chetpet-Gengu Reddy Subway, Sir Mutha School (CBSE),
                                    Harrington Road, took measures to prevent traffic snarls on the stretch.</p>
                                <div class="whiteBtn-medium">
                                    <a href="https://sirmuthaschool.mvgdigital.com/public/images/news-letter1.pdf"
                                        target="_blank">Know
                                        More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="slider slider-nav thumb-image">
                        <div class="thumbnail-image">
                            <div class="thumbImg">
                                <img src="<?= base_url('images/beyond-curriculum/nav-news-1.png') ?>"
                                    alt="Sir Mutha Newsletter Image">
                            </div>
                            <div class="thumbContent">
                                <h6>KARE secure top honours</h6>
                                <p class="newsThumbText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor
                                </p>
                                <span>Dec, 2024</span>
                                <div class="whiteBtn-medium">
                                    <a href="https://sirmuthaschool.mvgdigital.com/public/images/news-letter2.pdf">Know
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail-image">
                            <div class="thumbImg">
                                <img src="<?= base_url('images/beyond-curriculum/nav-news-2.png') ?>"
                                    alt="Sir Mutha Newsletter Image">
                            </div>
                            <div class="thumbContent">
                                <h6>School unravels traffic knots</h6>
                                <p class="newsThumbText">Sir Mutha School has introduced a new traffic arrangement to
                                    ease traffic</p>
                                <span>August, 2017</span>
                                <div class="whiteBtn-medium">
                                    <a href="https://sirmuthaschool.mvgdigital.com/public/images/news-letter1.pdf">Know
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail-image">
                            <div class="thumbImg">
                                <img src="<?= base_url('images/beyond-curriculum/nav-news-1.png') ?>"
                                    alt="Sir Mutha Newsletter Image">
                            </div>
                            <div class="thumbContent">
                                <h6>KARE secure top honours</h6>
                                <p class="newsThumbText">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor
                                </p>
                                <span>Dec, 2024</span>
                                <div class="whiteBtn-medium">
                                    <a href="https://sirmuthaschool.mvgdigital.com/public/images/news-letter2.pdf">Know
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail-image">
                            <div class="thumbImg">
                                <img src="<?= base_url('images/beyond-curriculum/nav-news-2.png') ?>"
                                    alt="Sir Mutha Newsletter Image">
                            </div>
                            <div class="thumbContent">
                                <h6>School unravels traffic knots</h6>
                                <p class="newsThumbText">Sir Mutha School has introduced a new traffic arrangement to
                                    ease traffic</p>
                                <span>August, 2017</span>
                                <div class="whiteBtn-medium">
                                    <a href="https://sirmuthaschool.mvgdigital.com/public/images/news-letter1.pdf">Know
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- News Letters -->

    <!-- Annual Events -->
    <section id="annual-events" class="container-space annual-event-waveBg blueBg-Sec ptb-80">
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Annual <span>Events</span></h3>
        </div>
        <div id="thumbnail-slider" class="splide col-lg-8 m-auto">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><span>2024 - 2025</span></li>
                </ul>
            </div>
        </div>
        <div id="annual-event" class="splide splideMain paginationCenter col-12 col-md-12 col-lg-12 col-xl-10 m-auto">
            <div class="splide__track">
                <ul class="splide__list">


                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>4th April</h6>
                            <p>The documentary Palette of Emotions, featuring Rupak Munje and his mother, Rajendra Munje, was screened for students from Classes VII to XII in their classrooms. A discussion on autism was held, the following day, highlighting how Rupak channelled his emotions through art. The event concluded with an engaging panel discussion at the Sir Mutha Venkatasubba Rao concert hall.
                            </p>
                        </div>
                    </li>

                                        <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>23rd April</h6>
                            <p>The Literary Club was inaugurated with great fervour, heralding the commencement of a new journey for the incumbent office bearers. The Literary Club of Sir Mutha School was officially inaugurated on 23 April 2024, by distinguished guests Mrs Varsha, Mrs Shonali Matthai, and Mrs Sheeba Samson. This significant occasion marked the advent of a new chapter in the school’s endeavour to instil a profound appreciation for literature and language.
                            </p>
                        </div>
                    </li>

                   <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>24th April</h6>
                            <p>The Literary Club was inaugurated with great fervour, heralding the commencement of a new journey for the incumbent office bearers. The Literary Club of Sir Mutha School was officially inaugurated on 23 April 2024, by distinguished guests Mrs Varsha, Mrs Shonali Matthai, and Mrs Sheeba Samson. This significant occasion marked the advent of a new chapter in the school’s endeavour to instil a profound appreciation for literature and language.
                            </p>
                        </div>
                    </l>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>5th June</h6>
                            <p>The Correspondents, Mrs. Krithika Kumar Quintal and Mrs. Tamara Ann Coelho, inaugurated the newly renovated staff rooms in a formal ceremony. This renovation reflects a commitment to creating a comfortable and productive environment for the teaching staff.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>5th June in AV room</h6>
                            <p>A Science, Technology, Engineering, and Mathematics (STEM) orientation for Science and Maths teachers was held in the AV room, showcasing innovative teaching techniques and resources. The session aimed to equip educators with the latest strategies to enhance student engagement in these critical subjects. This orientation marked a significant step towards creating a modern and dynamic learning environment in science and mathematics.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>6th June in AV room</h6>
                            <p>A short reading workshop for students of Classes I to III, led by Mrs. Nikita Dutta Gupta, was conducted in the AV room. The workshop aimed to instil a love of reading among young learners through engaging activities and storytelling sessions. Mrs Gupta's dynamic approach captivated the students, making the reading experience both enjoyable and educational.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>12 June</h6>
                            <p>An orientation for the newly admitted students and teachers was held at the Sir Mutha Venkatasubba Rao Concert Hall. The session, featuring a speech by the Correspondent Mrs. Krithika Kumar Quintal, detailed the history of the Madras Seva Sadan and its rich legacy. Mrs Quintal’s speech highlighted the institution's commitment to education, excellence, and community service.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>18th June</h6>
                            <p>The Eco Club was inaugurated on 18th June 2024, with Principal Mrs. Samira Tandon presiding over the event. Badges of distinction were presented to the newly appointed office bearers. The club is dedicated to promoting environmental awareness, sustainable practices, and ecological responsibility among students. Members pledged to maintain a litter-free campus, conserve water, and actively encourage plant growth to enhance the ecosystem.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>21st June</h6>
                            <p>International Yoga Day was observed during the school assembly. Students demonstrated various yoga asanas, showcasing their flexibility and discipline. The event emphasised the importance of yoga in promoting physical and mental well-being, creating a reflective and enlightening experience for all the participants.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>26th June</h6>
                            <p>The sixth edition of the Sir Mutha School Model United Nations, held on 26th and 27th June 2024, was no exception to the tradition of excellence. With the theme, Crafting Concerted Harmony, the event focused on raising awareness of pressing global issues, advancing the art of diplomacy and teamwork, and encouraging delegates to collaborate on innovative solutions. The valedictory function, held at the Sir Mutha Venkatasubba Rao Concert Hall, was graced by Mr. Aravindhan, IPS, as the Chief Guest. He presented certificates in several categories to the winning delegates, acknowledging their exemplary diplomacy and collaborative efforts.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>19th June</h6>
                            <p>A storytelling session was conducted by Mrs. Shalini for students of LKG, UKG, and Classes I to III, featuring the story Superheroes Are Everywhere by Kamala Harris. Mrs. Shalini’s lively narration captivated the children, making it a delightful and engaging experience for all the young participants.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>1st July</h6>
                            <p>A Dramact theatre workshop was conducted in the library for students aged 8 and above. The session was led by Mr N. Nilakantan, a seasoned Voice-Over Professional, Emcee, Public Speaker, Corporate Trainer, and Theatre Actor and Director with over 30 years of experience. The workshop focused on enhancing students’ acting skills and building their confidence through interactive theatre techniques. Mr. Nilakantan's expertise and dynamic teaching style made it a memorable and enriching experience for all participants.
                            </p>
                        </div>
                    </li>


                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>5th July</h6>
                            <p>The Eco Club organised a campus-wide activity to promote environmental awareness. Students designed working models for a sustainable future and participated in discussions on nuclear and geothermal energy. They also offered simple explanations of various objects and their impact on human well-being. The activity saw enthusiastic participation, providing students with valuable insights into protecting the environment and contributing to a greener future.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>8th July</h6>
                            <p>A Road Safety Patrol (RSP) awareness programme was conducted for students of Classes IX and above. The session featured Senior Traffic Warden, Mr.Vivek Dhaanada and Traffic Warden, Mr. Navjout Siddu, who shared valuable insights into road safety measures and responsible road behaviour. The programme aimed to deepen students' understanding of traffic rules and emphasised the critical importance of road safety.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>11th July</h6>
                            <p>The Annual Prize Distribution Ceremony was held at the Sir Mutha Venkatasubba Rao Concert Hall. The event celebrated academic excellence, recognising students for their achievements in the last academic year. Ms. Oviya Reddy, an alumna of Lady Andal Venkatasubba Rao School, was the Chief Guest and presented certificates of merit to the students.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>18th July</h6>
                            <p>The Interact Club, the youth wing of the Rotary Club, Chennai, actively engages young members of Sir Mutha School in community service. Activities include fundraising initiatives, distributing grains to those in need, and participating in the CANSTOP Walk for cancer awareness. The installation of the club’s office bearers took place at Prem Vihar, graced by the President of the Rotary Club of Chennai Mid City, other Rotarians, and members of Soroptimist International.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>22nd July</h6>
                            <p>Shiksha Saptah, celebrated from 22–26 July 2024, marked the fourth anniversary of the National Education Policy 2020. Students from Classes I to III participated in activities such as storytelling, identifying vegetables through flashcards, and learning about Indian culture, values, and monuments. The aim of this CBSE initiative was to promote experiential learning and encourage an appreciation for India's rich heritage.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>27th July</h6>
                            <p>The Eco Club organised a sapling planting activity for students of Classes XI and XII to encourage environmental responsibility and emphasise the value of green spaces. The activity aimed to deepen students’ connection with nature and highlight the vital role of trees in sustaining the ecosystem. Students participated with palpable enthusiasm, revelling in the fulfilment of contributing to the vision of a sustainable and verdant future. 
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>30th July</h6>
                            <p>Class III students enjoyed a fun-filled Bagless Day with a variety of activities. They wrote recipes, made nutrition checklists, and tried their hand at fireless cooking. The students participated eagerly, making it a memorable day for all.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6></h6>
                            <p></p>
                        </div>
                    </li>



                </ul>
            </div>
        </div>
    </section>
    <!-- Annual Events -->