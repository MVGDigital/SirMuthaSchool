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
    <section class="container-space innerMenus-sec">
        <div class="innerMenus">
            <ul>
                <li><a href="<?= base_url('beyond-curriculum#sirMutha-clubs') ?>" class="active">Clubs</a></li>
                <li><a href="<?= base_url('beyond-curriculum#munSec') ?>">MUN</a></li>
                <li><a href="<?= base_url('beyond-curriculum#news-letter') ?>">Students' Newsletter</a></li>
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
            <h6><i>At Sir Mutha School, our diverse clubs—including Heritage, Maths, Eco, and Interact—provide students with opportunities to learn, innovate, and give back to the community. Through interactive activities and service-oriented initiatives, students develop critical thinking, creativity, and social awareness, shaping them into well-rounded individuals ready to make a meaningful impact.</i>
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
                                    <img src="<?= base_url('images/facilities/Eco club.png') ?>" class="img-fluid" alt="Sir Mutha Logo">
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
                                    <img src="<?= base_url('images/facilities/Interact club.png') ?>" class="img-fluid" alt="Sir Mutha Logo">
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

                    <li class="splide__slide">
                        <div class="row m-0 w100">
                            <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-0">
                                <div class="cardWith-under-info">
                                    <img src="<?= base_url('images/facilities/literary_main_img_1.png') ?>" class="img-fluid" alt="Sir Mutha Logo">
                                    <div class="sectionSubTitle-white">
                                        <h4>Literary <span>Club </span></h4>
                                    </div>
                                    <div class="blueBtn-medium">
                                        <a href="<?= base_url('/beyond-curriculum/literary-club') ?>">Know More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-0">
                                <div class="cardWith-under-info">
                                    <img src="<?= base_url('images/facilities/Interact club.png') ?>" class="img-fluid" alt="Sir Mutha Logo">
                                    <div class="sectionSubTitle-white">
                                        <h4>Interact <span>Club </span></h4>
                                    </div>
                                    <div class="blueBtn-medium">
                                        <a href="<?= base_url('/beyond-curriculum/interactclub') ?>">Know More</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!-- Clubs -->

    <!-- MUN -->
    <section id="munSec" class="blueBg-Sec blue-wave">
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3> Model United Nations <span> (MUN)</span></h3>
        </div>
        <div id="mun" class="splide paginationCenter overlayPagination cardSlider mt-50">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="wave-slider-img">
                            <img src="<?= base_url('images/beyond-curriculum/mun_01_desk.png') ?>" class="img-fluid deskTopImg w100"
                                alt="Academic Facilities Images">
                            <img src="<?= base_url('images/beyond-curriculum/mun_01_mob.png') ?>" class="img-fluid mobImg w100"
                                alt="Academic Facilities Images">
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="wave-slider-img">
                            <img src="<?= base_url('images/beyond-curriculum/mun_02_desk.png') ?>" class="img-fluid deskTopImg w100"
                                alt="Academic Facilities Images">
                            <img src="<?= base_url('images/beyond-curriculum/mun_02_mob.png') ?>" class="img-fluid mobImg w100"
                                alt="Academic Facilities Images">
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="wave-slider-img">
                            <img src="<?= base_url('images/beyond-curriculum/mun_03_desk.png') ?>" class="img-fluid deskTopImg w100"
                                alt="Academic Facilities Images">
                            <img src="<?= base_url('images/beyond-curriculum/mun_03_mob.png') ?>" class="img-fluid mobImg w100"
                                alt="Academic Facilities Images">
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="wave-slider-img">
                            <img src="<?= base_url('images/beyond-curriculum/mun_04_desktop.png') ?>" class="img-fluid deskTopImg w100"
                                alt="Academic Facilities Images">
                            <img src="<?= base_url('images/beyond-curriculum/mun_04_mobi.png') ?>" class="img-fluid mobImg w100"
                                alt="Academic Facilities Images">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- MUN -->

    <!-- News Letters -->
    <section id="news-letter" class="container-space wave-with-bgImg ptb-80">
        <div class="sectionTitle-blue col-lg-10 m-auto">
            <h3>Students' <span>Newsletter</span></h3>
            <h6 class="light-blue">"Shenstone Mail, features the latest school news, events, achievements, and creative contributions from students. It serves as a platform for them to express their ideas and stay informed."
            </h6>
        </div>

        <div class="thumbnail-section mt-50">
            <div class="vehicle-detail-banner banner-content clearfix">
                <div class="slick-banner-slider">
                    <div class="slider slider-for">
                    <div class="slick-slider-banner-image">
                            <img src="<?= base_url('images/beyond-curriculum/newsletter-banner-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                            <div class="thumbContent">
                                <h6>SHENSTONE MAIL NEWSLETTER</h6>
                                <span>Aug 2022</span>
                                <p class="newsText">Introducing to you the first edition of our school newsletter - August 2022</p>
                                <div class="whiteBtn-medium">
                                <a href="<?= base_url('images/beyond-curriculum/news-letter-1.pdf') ?>" target="_blank">Know More</a>
                                More</a>
                                </div>
                            </div>
                        </div>

                        <div class="slick-slider-banner-image">
                        <img src="<?= base_url('images/beyond-curriculum/newsletter-banner-2.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">

                            <div class="thumbContent">
                            <h6>SHENSTONE MAIL NEWSLETTER</h6>
                                <span>Oct 2022</span>
                                <p class="newsText">The second edition of our school newsletter - October 2022</p>
                                <div class="whiteBtn-medium">
                                <a href="<?= base_url('images/beyond-curriculum/news-letter-2.pdf') ?>" target="_blank">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slider-banner-image">
                            <img src="<?= base_url('images/beyond-curriculum/news-main-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                            <div class="thumbContent">
                                <h6>Sir Mutha School, KARE secure top honours</h6>
                                <span>Feb 21 2024</span>
                                <p class="newsText"><b>CHENNAI :</b> Sir Mutha School, Chennai, and Kalasalingam Academy of Research and Education (KARE), Srivilliputhur, bagged the overall championship trophies in school and college category in the KESPA - HITS TN State level Swimming meet 2024 organised by the Kerala Sportspersons Association (KESPA) Chennai in association with the Dolphin Swimming Academy, Mogappair.</p>
                                <div class="whiteBtn-medium">
                                    <a href="https://www.newindianexpress.com/cities/chennai/2024/Feb/21/sir-mutha-school-kare-secure-top-honours" target="_blank">Know
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slider-banner-image">
                            <img src="<?= base_url('images/beyond-curriculum/news-main-2.png') ?>"
                                class="img-fluid" alt="Sir Mutha Newsletter Image">
                            <div class="thumbContent">
                                <h6>Models of the diplomatic order</h6>
                                <span>Nov 7th 2022</span>
                                <p class="newsText"><b>Chennai :</b> With 33 students of Sir Mutha School, Chetpet, chosen to attend the Oxford Model United Nations Conference (OXMUN), from November 11 to 13 at Oxford University, the school organised an interactive MUN session on Friday. Oxford will be hosting its seventh MUN a programme designed exclusively for school and college students who wish to learn the art of diplomacy and its first in-person conference since 2019. This is Sir Mutha School’s second time at the conference, after 2017.</p>
                                <div class="whiteBtn-medium">
                                    <a href="https://www.newindianexpress.com/cities/chennai/2022/Nov/06/models-of-thediplomatic-order-2515591.html" target="_blank">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slider-banner-image">
                            <img src="<?= base_url('images/beyond-curriculum/news-main-3.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                            <div class="thumbContent">
                                <h6>Sir Mutha bags overall title</h6>
                                <span>Oct 1st 2024</span>
                                <p class="newsText"><b>CHENNAI :</b>The Sir Mutha School team bagged the overall championship in the boys (165 points) and the girls (111 points ) categories at the 30th age-group swimming competition organized by The Madras District Aquatic Association at Orca pool.</p>
                                <div class="whiteBtn-medium">
                                    <a href="https://www.newindianexpress.com/sport/cricket/2024/Oct/01/sir-mutha-bags-overall-title" target="_blank">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="slick-slider-banner-image">
                            <img src="<?= base_url('images/beyond-curriculum/news-main-4.png') ?>"
                                class="img-fluid" alt="Sir Mutha Newsletter Image">
                            <div class="thumbContent">
                                <h6>Sir Mutha Ne Overall Title Jeeta – Swimming News</h6>
                                <span>Oct 7th 2014</span>
                                <p class="newsText"><b> Chennai:</b> Madras District Aquatic Association dwara Orca pool me organized 30th age-group swimming competition me Sir Mutha School ki team ne boys (165 points) and girls (165 points) ki category me overall championship jeeti.</p>
                                <div class="whiteBtn-medium">
                                <a href="https://swimswam.com/sir-mutha-ne-overall-title-jeeta-swimming-news/" target="_blank">Know More</a>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <div class="slider slider-nav thumb-image">
                    <div class="thumbnail-image">
                            <div class="thumbImg">
                                <img src="<?= base_url('images/beyond-curriculum/newsletter-thumb-1.png') ?>"
                                    alt="Sir Mutha Newsletter Image">
                            </div>
                            <div class="thumbContent">
                                <h6>SHENSTONE MAIL NEWSLETTER</h6>
                                <p class="newsThumbText">Introducing to you the first edition of our school newsletter - August 2022</p>
                                <span>Aug 2022</span>
                                <div class="whiteBtn-medium">
                                <a href="<?= base_url('images/beyond-curriculum/news-letter-1.pdf') ?>" target="_blank">Know More</a>
                                </div>
                            </div>
                        </div>

                        
                        <div class="thumbnail-image">
                            <div class="thumbImg">
                                <img src="<?= base_url('images/beyond-curriculum/newsletter-thumb-2.png') ?>"
                                    alt="Sir Mutha Newsletter Image">
                            </div>
                            <div class="thumbContent">
                                <h6>SHENSTONE MAIL NEWSLETTER</h6>
                                <p class="newsThumbText">The second edition of our school newsletter - October 2022</p>
                                <span>Oct 2022</span>
                                <div class="whiteBtn-medium">
                                <a href="<?= base_url('images/beyond-curriculum/news-letter-2.pdf') ?>" target="_blank">Know More</a>

                                </div>
                            </div>

                        </div>
                        <div class="thumbnail-image">
                            <div class="thumbImg">
                                <img src="<?= base_url('images/beyond-curriculum/thumb-1.png') ?>"
                                    alt="Sir Mutha Newsletter Image">
                            </div>
                            <div class="thumbContent">
                                <h6>KARE secure top honours</h6>
                                <p class="newsThumbText">Sir Mutha School, Chennai, and Kalasalingam Academy of Research and Education (KARE), Srivilliputhur, bagged the overall championship trophies in school and college category in the KESPA - HITS TN State level Swimming meet 2024 organised by the Kerala Sportspersons Association (KESPA) Chennai in association with the Dolphin Swimming Academy, Mogappair.</p>
                                <span>Feb 21 2024</span>
                                <div class="whiteBtn-medium">
                                    <a href="https://www.newindianexpress.com/cities/chennai/2024/Feb/21/sir-mutha-school-kare-secure-top-honours" target="_blank">Know
                                    More</a>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail-image">
                            <div class="thumbImg">
                                <img src="<?= base_url('images/beyond-curriculum/thumb-2.png') ?>"
                                    alt="Sir Mutha Newsletter Image">
                            </div>
                            <div class="thumbContent">
                                <h6>Models of the diplomatic order</h6>
                                <p class="newsThumbText">With 33 students of Sir Mutha School, Chetpet, chosen to attend the Oxford Model United Nations Conference (OXMUN), from November 11 to 13 at Oxford University, the school organised an interactive MUN session on Friday. Oxford will be hosting its seventh MUN a programme designed exclusively for school and college students who wish to learn the art of diplomacy and its first in-person conference since 2019. This is Sir Mutha School’s second time at the conference, after 2017.</p>
                                <span>Nov 7th 2022</span>
                                <div class="whiteBtn-medium">
                                    <a href="https://www.newindianexpress.com/cities/chennai/2022/Nov/06/models-of-thediplomatic-order-2515591.html" target="_blank">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail-image">
                            <div class="thumbImg">
                                <img src="<?= base_url('images/beyond-curriculum/thumb-3.png') ?>"
                                    alt="Sir Mutha Newsletter Image">
                            </div>
                            <div class="thumbContent">
                                <h6>Sir Mutha bags overall title</h6>
                                <p class="newsThumbText">The Sir Mutha School team bagged the overall championship in the boys (165 points) and the girls (111 points ) categories at the 30th age-group swimming competition organized by The Madras District Aquatic Association at Orca pool.</p>
                                <span>Oct 1st 2024</span>
                                <div class="whiteBtn-medium">
                                    <a href="https://www.newindianexpress.com/sport/cricket/2024/Oct/01/sir-mutha-bags-overall-title" target="_blank">Know More</a>
                                </div>
                            </div>
                        </div>
                        <div class="thumbnail-image">
                            <div class="thumbImg">
                                <img src="<?= base_url('images/beyond-curriculum/thumb-4.png') ?>"
                                    alt="Sir Mutha Newsletter Image">
                            </div>
                            <div class="thumbContent">
                                <h6>Jeeta – Swimming News</h6>
                                <p class="newsThumbText">Madras District Aquatic Association dwara Orca pool me organized 30th age-group swimming competition me Sir Mutha School ki team ne boys (165 points) and girls (165 points) ki category me overall championship jeeti.</p>
                                <span>Oct 7th 2014</span>
                                <div class="whiteBtn-medium">
                                    <a href="https://swimswam.com/sir-mutha-ne-overall-title-jeeta-swimming-news/" target="_blank">Know More</a>
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
                            <img src="<?= base_url('images/beyond-curriculum/april/annual-april-04-04-2024-01.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>04<sup>th</sup> April</h6>
                            <p>The documentary Palette of Emotions, featuring Rupak Munje and his mother, Rajendra Munje, was screened for students from Classes VII to XII in their classrooms. A discussion on autism was held, the following day, highlighting how Rupak channelled his emotions through art. The event concluded with an engaging panel discussion at the Sir Mutha Venkatasubba Rao concert hall.
                            </p>
                        </div>
                    </li>

                                        <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/april/annual-april-23-04-2024-02.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>23<sup>rd</sup> April</h6>
                            <p>The Literary Club was inaugurated with great fervour, heralding the commencement of a new journey for the incumbent office bearers. The Literary Club of Sir Mutha School was officially inaugurated on 23 April 2024, by distinguished guests Mrs Varsha, Mrs Shonali Matthai, and Mrs Sheeba Samson. This significant occasion marked the advent of a new chapter in the school’s endeavour to instil a profound appreciation for literature and language.
                            </p>
                        </div>
                    </li>

                   <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/april/annual-april-24-04-2024-03.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>24<sup>th</sup> April</h6>
                            <p>The Literary Club was inaugurated with great fervour, heralding the commencement of a new journey for the incumbent office bearers. The Literary Club of Sir Mutha School was officially inaugurated on 23 April 2024, by distinguished guests Mrs Varsha, Mrs Shonali Matthai, and Mrs Sheeba Samson. This significant occasion marked the advent of a new chapter in the school’s endeavour to instil a profound appreciation for literature and language.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/june/annual-june-05-06-2014-1.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>05<sup>th</sup> June</h6>
                            <p>The Correspondents, Mrs. Krithika Kumar Quintal and Mrs. Tamara Ann Coelho, inaugurated the newly renovated staff rooms in a formal ceremony. This renovation reflects a commitment to creating a comfortable and productive environment for the teaching staff.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/june/annual-june-05-06-2014.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>05<sup>th</sup> June</h6>
                            <p>A Science, Technology, Engineering, and Mathematics (STEM) orientation for Science and Maths teachers was held in the AV room, showcasing innovative teaching techniques and resources. The session aimed to equip educators with the latest strategies to enhance student engagement in these critical subjects. This orientation marked a significant step towards creating a modern and dynamic learning environment in science and mathematics.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/june/sixth_june_annualevents.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>06<sup>th</sup> June</h6>
                            <p>A short reading workshop for students of Classes I to III, led by Mrs. Nikita Dutta Gupta, was conducted in the AV room. The workshop aimed to instil a love of reading among young learners through engaging activities and storytelling sessions. Mrs Gupta's dynamic approach captivated the students, making the reading experience both enjoyable and educational.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/june/annual-june-12-06-2024.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>12<sup>th</sup> June</h6>
                            <p>An orientation for the newly admitted students and teachers was held at the Sir Mutha Venkatasubba Rao Concert Hall. The session, featuring a speech by the Correspondent Mrs. Krithika Kumar Quintal, detailed the history of the Madras Seva Sadan and its rich legacy. Mrs Quintal’s speech highlighted the institution's commitment to education, excellence, and community service.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/june/annual-june-18-06-2024.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>18<sup>th</sup> June</h6>
                            <p>The Eco Club was inaugurated on 18th June 2024, with Principal Mrs. Samira Tandon presiding over the event. Badges of distinction were presented to the newly appointed office bearers. The club is dedicated to promoting environmental awareness, sustainable practices, and ecological responsibility among students. Members pledged to maintain a litter-free campus, conserve water, and actively encourage plant growth to enhance the ecosystem.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/june/annualevents-21st-june.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>21<sup>st</sup> June</h6>
                            <p>International Yoga Day was observed during the school assembly. Students demonstrated various yoga asanas, showcasing their flexibility and discipline. The event emphasised the importance of yoga in promoting physical and mental well-being, creating a reflective and enlightening experience for all the participants.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/june/annualevents-26th-june.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>26<sup>th</sup> June</h6>
                            <p>The sixth edition of the Sir Mutha School Model United Nations, held on 26th and 27th June 2024, was no exception to the tradition of excellence. With the theme, Crafting Concerted Harmony, the event focused on raising awareness of pressing global issues, advancing the art of diplomacy and teamwork, and encouraging delegates to collaborate on innovative solutions. The valedictory function, held at the Sir Mutha Venkatasubba Rao Concert Hall, was graced by Mr. Aravindhan, IPS, as the Chief Guest. He presented certificates in several categories to the winning delegates, acknowledging their exemplary diplomacy and collaborative efforts.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/june/annual-june-19-06-2024.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>19<sup>th</sup> June</h6>
                            <p>A storytelling session was conducted by Mrs. Shalini for students of LKG, UKG, and Classes I to III, featuring the story Superheroes Are Everywhere by Kamala Harris. Mrs. Shalini’s lively narration captivated the children, making it a delightful and engaging experience for all the young participants.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/events_annual_na.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>01<sup>st</sup> July</h6>
                            <p>A Dramatic theatre workshop was conducted in the library for students aged 8 and above. The session was led by Mr N. Nilakantan, a seasoned Voice-Over Professional, Emcee, Public Speaker, Corporate Trainer, and Theatre Actor and Director with over 30 years of experience. The workshop focused on enhancing students’ acting skills and building their confidence through interactive theatre techniques. Mr. Nilakantan's expertise and dynamic teaching style made it a memorable and enriching experience for all participants.
                            </p>
                        </div>
                    </li>


                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/july/annual-july-27-07-2024.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>05<sup>th</sup> July</h6>
                            <p>The Eco Club organised a campus-wide activity to promote environmental awareness. Students designed working models for a sustainable future and participated in discussions on nuclear and geothermal energy. They also offered simple explanations of various objects and their impact on human well-being. The activity saw enthusiastic participation, providing students with valuable insights into protecting the environment and contributing to a greener future.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/july/annual-july-08-07-2024.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>08<sup>th</sup> July</h6>
                            <p>A Road Safety Patrol (RSP) awareness programme was conducted for students of Classes IX and above. The session featured Senior Traffic Warden, Mr.Vivek Dhaanada and Traffic Warden, Mr. Navjout Siddu, who shared valuable insights into road safety measures and responsible road behaviour. The programme aimed to deepen students' understanding of traffic rules and emphasised the critical importance of road safety.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg mx-auto">
                            <img src="<?= base_url('images/beyond-curriculum/july/annual-july-11-07-2024.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>11<sup>th</sup> July</h6>
                            <p>The Annual Prize Distribution Ceremony was held at the Sir Mutha Venkatasubba Rao Concert Hall. The event celebrated academic excellence, recognising students for their achievements in the last academic year. Ms. Oviya Reddy, an alumna of Lady Andal Venkatasubba Rao School, was the Chief Guest and presented certificates of merit to the students.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/july/annual-july-18-07-2024.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>18<sup>th</sup> July</h6>
                            <p>The Interact Club, the youth wing of the Rotary Club, Chennai, actively engages young members of Sir Mutha School in community service. Activities include fundraising initiatives, distributing grains to those in need, and participating in the CANSTOP Walk for cancer awareness. The installation of the club’s office bearers took place at Prem Vihar, graced by the President of the Rotary Club of Chennai Mid City, other Rotarians, and members of Soroptimist International.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/july/annualevents-22nd-july.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>22<sup>nd</sup> July</h6>
                            <p>Shiksha Saptah, celebrated from 22–26 July 2024, marked the fourth anniversary of the National Education Policy 2020. Students from Classes I to III participated in activities such as storytelling, identifying vegetables through flashcards, and learning about Indian culture, values, and monuments. The aim of this CBSE initiative was to promote experiential learning and encourage an appreciation for India's rich heritage.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/july/annual-july-27-07-2024.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>27<sup>th</sup> July</h6>
                            <p>The Eco Club organised a sapling planting activity for students of Classes XI and XII to encourage environmental responsibility and emphasise the value of green spaces. The activity aimed to deepen students’ connection with nature and highlight the vital role of trees in sustaining the ecosystem. Students participated with palpable enthusiasm, revelling in the fulfilment of contributing to the vision of a sustainable and verdant future. 
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/july/annualevents-30th-july.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>30<sup>th</sup> July</h6>
                            <p>Class III students enjoyed a fun-filled Bagless Day with a variety of activities. They wrote recipes, made nutrition checklists, and tried their hand at fireless cooking. The students participated eagerly, making it a memorable day for all.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/aug/august_ 01_08_24.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>01<sup>st</sup> August</h6>
                            <p>The Annual Sports Meet was held on 1st August 2024, with Mr. Gautham Gopal gracing the event as the Chief Guest. Various track and field events showcased the students’ sportsmanship, and Turquoise House emerged victorious, securing the championship. The event was a grand celebration of athletic prowess and teamwork. 
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/aug/august_ 15_08_24.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>15<sup>th</sup> August</h6>
                            <p>The seventy-eighth Independence Day was celebrated with spirited fervour, highlighted by a resplendent march-past, and stirring songs and dances reflecting the essence of freedom, performed by the students of Sir Mutha School, Lady Andal School and the Madras Seva Sadan School. Mr Aditya Varma, the Head of Human Resources, graced the occasion as the Chief Guest. 
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/aug/august_ 21_08_24_to_23_08_24.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>21<sup>st</sup> August</h6>
                            <p>The 21st edition of the Padma Bhushan Lady Andal Memorial Inter-School Sports Tournament and Swimming Meet showcased the sporting prowess of the students. Events included basketball, football, volleyball, kho-kho, and swimming. P. R. Neeharika, an athlete and alumna of Lady Andal Venkatasubba Rao School, was the Chief Guest for the valedictory function and presented certificates and medals to the winners.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/aug/august_ 29_08_24_to_31_08_24.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>29<sup>th</sup> August</h6>
                            <p>The Scholastic Book Fair was a celebrated event, offering an extensive collection of books designed to ignite the imaginations of students and nurture their enthusiasm for reading. The fair presented a diverse selection across various genres, appealing to a wide range of interests and age groups. Students perused the books with keen interest, eager to discover their next literary adventure.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/aug/august_ 31_08_24_open_house.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>31<sup>st</sup> August</h6>
                            <p>Open House: A Parent-Teacher Meeting was convened to review students’ progress and address any concerns. Parents and teachers engaged in meaningful discussions, exchanging feedback and insights to support the holistic development of each child. It served to reinforce the vital partnership between home and school, aimed at ensuring the continued success of every student.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/aug/august_ 31_08_24.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>31<sup>st</sup> August</h6>
                            <p>The students of the Interact and Juvenoptimist club of Sir Mutha School, in association with Image Minds, organised a silent auction and fundraiser to showcase the art created by students during the Image Minds creative workshops. In an endeavour to nurture and celebrate the potential of our students, parents were invited to place bids, as the proceeds of the auction were directed towards supporting the initiatives of the Interact and Juvenoptimist club. 
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/sept/annual-september-05-09-2024.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>05<sup>th</sup> September</h6>
                            <p>Sir Mutha School celebrated Teachers’ Day on Thursday, 5th September 2024, to honour the unwavering dedication and commitment of its educators in shaping the lives of students. The event was a vibrant celebration, highlighting the invaluable contributions of teachers while offering a day filled with joy and camaraderie for all participants. A carnival, featuring food and game stalls, was organised for the students, with all proceeds directed towards the initiatives of the Interact and Juvenoptimist club. 
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/sept/annual-september-06-09-2024.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>06<sup>th</sup> September</h6>
                            <p>The Heritage Club of our school organised a series of activities to commemorate Madras Day, engaging students from LKG to Class XII. Students of LKG and UKG participated by dressing in traditional attire, adding a festive touch to the celebration. For other classes, activities included doodle art, a puppet show, coconut décor, fireless cooking, and a session highlighting key milestones in the rich history of Madras. These activities offered students an opportunity to delve into the city’s rich history, understand its evolution into modern-day Chennai, and celebrate its vibrant cultural heritage.</p>
                        </div>
                    </li>


                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/sept/annualevents-10th-sept.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>10<sup>th</sup> September</h6>
                            <p>Sir Mutha School, had the distinct honour of hosting the prestigious West Chennai Sahodaya Cluster Schools Teachers’ Awards Function 2024 at the Sir Mutha Venkatasubba Rao concert hall, a celebration of pedagogical excellence. Mrs. Shonali Matthai from Sir Mutha School was one of the recipients. The ceremony was presided over by Dr. S. Santhosh Baboo, Principal of D.G. Vaishnav College. The awardees were duly felicitated with commemorative mementoes, symbolising their dedication and service to the noble vocation of teaching.
                            </p>
                        </div>
                    </li>


                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/sept/annualevents-24th-sept.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>24<sup>th</sup> September</h6>
                            <p>A session on mental and physical health for teachers was conducted in the AV room, led by the school counsellor, Mrs. Shanti Rao. The session focused on strategies for maintaining well-being, managing stress, and staying physically active. Teachers were given valuable insights into balancing their professional and personal lives, with practical tips for enhancing overall health and well-being.
                            </p>
                        </div>
                    </li>


                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/oct/annual-october-25-10-2024.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>25<sup>th</sup> October</h6>
                            <p>The inauguration of the Language Club was held in the school’s library for Classes VII to X, showcasing an array of cultural expressions. The programme featured vibrant dance performances, compelling speeches, and captivating dramas in Tamil, Hindi, and Sanskrit. It was truly an event that honoured and celebrated Indian languages. 
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/oct/annualevents-25th-oct.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>25<sup>th</sup> October</h6>
                            <p>A Road Safety Training Session was conducted for children who were part of the RSP unit of Sir Mutha School, from Classes VII to X, by Mr. Vivek. The session focused on essential traffic rules and hand signals, with students actively practising and demonstrating these skills. Mr Vivek’s engaging presentation highlighted the importance of responsible road behaviour. The session was well-received, leaving a lasting impact on the young participants.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/oct/annualevents-27th-oct.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>27<sup>th</sup> October</h6>
                            <p>The CanStop Awareness Annual Walkathon unfolded against the picturesque backdrop of Island Grounds Park, drawing spirited participation from students and teachers of Classes XI and XII. This poignant and purposeful initiative underscored the enduring significance of collective action in the fight against cancer, exemplifying solidarity and heartfelt commitment for the cause.
                            </p>
                        </div>
                    </li>

                    <!-- <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/oct/annual-october-25-10-2024.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>29<sup>th</sup> October</h6>
                            <p>The Language Club recently hosted an engaging activity for students, offering an immersive exploration of a few Indian languages through interactive games and activities. The activities not only enhanced linguistic skills but also aimed to spark curiosity about diverse cultures, encouraging students to expand their cultural and linguistic horizons. 
                            </p>
                        </div>
                    </li> -->

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/nov/november_fourteen_annualevents.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>14<sup>th</sup> November</h6>
                            <p>On the occasion of Children’s Day on Thursday, 14th November 2024, students celebrated the day in their classes with cheerful class parties. They brought their favourite snacks and board games, creating a lively and enjoyable atmosphere. The celebrations were marked by laughter, camaraderie, and shared moments of joy, making the day truly memorable
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/nov/november_ 22_11_24.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>22<sup>nd</sup> November</h6>
                            <p>Founder’s Day at Sir Mutha School was celebrated with grandeur at the Sir Mutha Venkatasubba Rao concert hall, a venue befitting the occasion. The event featured captivating dramas such as, The Enchantment of the Rose and My Fair Lady, performed by the students. The day became a vibrant celebration, leaving a lasting impression on the audience.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg m">
                            <img src="<?= base_url('images/beyond-curriculum/dec/december_ 06_12_24.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>05<sup>th</sup> December</h6>
                            <p>The Maths Club was inaugurated during the school assembly, attended by students from Classes VI to VIII. With the theme, Mathematics is a Way of Life, the event sought to kindle a deeper appreciation for the subject by exploring its indispensability. Presentations vividly illustrated how mathematics shapes our daily lives, leaving students intrigued and inspired to delve into its wonders.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/dec/december_ 06_12_2024.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>06<sup>th</sup> December</h6>
                            <p>The Maths Club organised The Maths Matrix, an engaging series of activities for students across all classes, blending creativity with logical thinking. For Classes XI and XII, a thrilling treasure hunt incorporated the analytical challenge of Sudoku. For other classes, activities included crafting jewellery inspired by mathematical patterns, exploring symmetry through Mandala Art, and solving intricate puzzles. The event celebrated the fun and beauty of mathematics for everyone involved. 
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/dec/annaualevents-7th-dec.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>07<sup>th</sup> December</h6>
                            <p>The ‘Open House’ for Kindergarten to Class XI was held on Saturday, 7th December 2024, offering parents valuable insights into their children’s progress. The event coincided with the Christmas Fair 2024, which transformed the campus into a vibrant carnival. Featuring a variety of stalls, games, and activities, the fair created a festive and lively atmosphere. Students, parents, and staff enthusiastically participated in the celebrations, making it a day to cherish.
                            </p>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="annualEventImg">
                            <img src="<?= base_url('images/beyond-curriculum/dec/december_ 10_12_24.png') ?>" class="img-fluid"
                                alt="Sir Mutha Newsletter Image">
                        </div>
                        <div class="thumbContent">
                            <h6>10<sup>th</sup> December</h6>
                            <p>The Investiture Ceremony for the new office bearers of 2025-26 was in the presence of the Chief Guest, Ms. Dia Rekhi, an alumna of Lady Andal Venkatasubba Rao School. In a moment of solemnity, the new office bearers took their oath, vowing to uphold their duties with steadfast integrity and commitment. The occasion also featured a heartfelt prayer service for the students of Classes X and XII, as they stand on the cusp of their public examinations. The event was a beautiful convergence of leadership, faith, and encouragement, reaffirming the values of responsibility and resilience.
                            </p>
                        </div>
                    </li>




                </ul>
            </div>
        </div>
        <div class="blueBtn-medium text-center">
            <a href="<?= base_url('beyond-curriculum/past-annual-events'); ?>">Past Annual Events</a>
        </div>
    </section>
    <!-- Annual Events -->