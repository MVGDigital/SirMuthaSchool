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
            <h3>Welcome to sir mutha <span>clubs</span></h3>
            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco
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
                                    <img src="<?= base_url('images/facilities/Heritage club.png') ?>" class="img-fluid"
                                        alt="Sir Mutha Logo">
                                    <div class="sectionSubTitle-white">
                                        <h4>Heritage <span>Club</span></h4>
                                    </div>
                                    <div class="blueBtn-medium">
                                        <a href="<?= base_url('/beyond-curriculum/heritageclub') ?>">Know More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-6 p-0">
                                <div class="cardWith-under-info">
                                    <img src="<?= base_url('images/facilities/Maths club.png') ?>" class="img-fluid"
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
                                        <a href="<?= base_url('/beyond-curriculum/ecoclub') ?>">Know More</a>
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
    <section id="news-letter" class="container-space cardWith-overlay-Btn white-bgImg ptb-80">
        <div class="sectionTitle-blue col-lg-10 m-auto">
            <h3>Students <span>Newsletter</span></h3>
            <h6 class="light-blue">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
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
                                <p><b>CHENNAI :</b> Sir Mutha School, Chennai, and Kalasalingam Academy of Research and
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
                                <p><b>Sir Mutha School :</b> Over the last few days, Harrington Road is not as congested
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
                                <p><b>CHENNAI :</b> Sir Mutha School, Chennai, and Kalasalingam Academy of Research and
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
                                <p><b>Sir Mutha School :</b> Over the last few days, Harrington Road is not as congested
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
                        <!--<div class="slick-slider-banner-image">-->
                        <!--    <img src="<?= base_url('images/beyond-curriculum/thumb-banner-1.jpg') ?>" class="img-fluid"-->
                        <!--        alt="Sir Mutha Newsletter Image">-->
                        <!--    <div class="thumbContent">-->
                        <!--        <h6>Sir Mutha School, KARE secure top honours</h6>-->
                        <!--        <span>Dec, 2024</span>-->
                        <!--        <p><b>CHENNAI :</b> Sir Mutha School, Chennai, and Kalasalingam Academy of Research and-->
                        <!--            Education (KARE), Srivilliputhur, bagged the overall championship trophies in school-->
                        <!--            and college category in the KESPA - HITS TN State level Swimming meet 2024 organised-->
                        <!--            by the Kerala Sportspersons Association (KESPA) Chennai in association with the-->
                        <!--            Dolphin Swimming Academy, Mogappair.</p>-->
                        <!--        <div class="whiteBtn-medium">-->
                        <!--            <a-->
                        <!--                href="https://www.newindianexpress.com/cities/chennai/2024/Feb/21/sir-mutha-school-kare-secure-top-honours">Know-->
                        <!--                More</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="slick-slider-banner-image">-->
                        <!--    <img src="<?= base_url('images/beyond-curriculum/thumb-banner-1.jpg') ?>" class="img-fluid"-->
                        <!--        alt="Sir Mutha Newsletter Image">-->
                        <!--    <div class="thumbContent">-->
                        <!--        <h6>School unravels traffic knots</h6>-->
                        <!--        <span>August, 2017</span>-->
                        <!--        <p><b>Sir Mutha School :</b> Over the last few days, Harrington Road is not as congested-->
                        <!--            as before, during rush hour. On the heels of Chennai Traffic Police (CTP) restoring-->
                        <!--            two-way traffic on EVR Salai-Chetpet-Gengu Reddy Subway, Sir Mutha School (CBSE),-->
                        <!--            Harrington Road, took measures to prevent traffic snarls on the stretch.</p>-->
                        <!--        <div class="whiteBtn-medium">-->
                        <!--            <a-->
                        <!--                href="https://www.thehindu.com/news/cities/chennai/school-unravels-traffic-knots/article19518142.ece">Know-->
                        <!--                More</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                    </div>
                    <div class="slider slider-nav thumb-image">
                        <div class="thumbnail-image">
                            <div class="thumbImg">
                                <img src="<?= base_url('images/beyond-curriculum/nav-news-1.png') ?>"
                                    alt="Sir Mutha Newsletter Image">
                            </div>
                            <div class="thumbContent">
                                <h6>KARE secure top honours</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor....
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
                                <p>Sir Mutha School has introduced a new traffic arrangement to ease traffic....</p>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor....
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
                                <p>Sir Mutha School has introduced a new traffic arrangement to ease traffic....</p>
                                <span>August, 2017</span>
                                <div class="whiteBtn-medium">
                                    <a href="https://sirmuthaschool.mvgdigital.com/public/images/news-letter1.pdf">Know
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <!--<div class="thumbnail-image">-->
                        <!--    <div class="thumbImg">-->
                        <!--        <img src="<?= base_url('images/beyond-curriculum/nav-news-1.png') ?>"-->
                        <!--            alt="Sir Mutha Newsletter Image">-->
                        <!--    </div>-->
                        <!--    <div class="thumbContent">-->
                        <!--        <h6>KARE secure top honours</h6>-->
                        <!--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor....-->
                        <!--        </p>-->
                        <!--        <span>Dec, 2024</span>-->
                        <!--        <div class="whiteBtn-medium">-->
                        <!--            <a href="#">Know More</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<div class="thumbnail-image">-->
                        <!--    <div class="thumbImg">-->
                        <!--        <img src="<?= base_url('images/beyond-curriculum/nav-news-2.png') ?>"-->
                        <!--            alt="Sir Mutha Newsletter Image">-->
                        <!--    </div>-->
                        <!--    <div class="thumbContent">-->
                        <!--        <h6>School unravels traffic knots</h6>-->
                        <!--        <p>Sir Mutha School has introduced a new traffic arrangement to ease traffic....</p>-->
                        <!--        <span>August, 2017</span>-->
                        <!--        <div class="whiteBtn-medium">-->
                        <!--            <a href="#">Know More</a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

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

        <!-- Thumbnail Slider -->
        <div id="thumbnail-slider" class="splide col-lg-8 m-auto">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide"><span>Dec 2024</span></li>
                    <li class="splide__slide"><span>Nov 2024</span></li>
                    <li class="splide__slide"><span>Oct 2024</span></li>
                    <li class="splide__slide"><span>Sept 2024</span></li>
                    <li class="splide__slide"><span>Aug 2024</span></li>
                    <li class="splide__slide"><span>Jul 2024</span></li>
                    <li class="splide__slide"><span>Jun 2024</span></li>
                    <li class="splide__slide"><span>Arpil 2024</span></li>

                </ul>
            </div>
        </div>

        <!-- Main Slider -->
        <div id="annual-event" class="splide splideMain col-12 col-md-12 col-lg-12 col-xl-10 m-auto">
            <div class="splide__track">
                <ul class="splide__list">



                    <li class="splide__slide">
                        <!-- Events for Dec 2024 -->
                        <div class="splide annual-event-imgs">
                            <div class="splide__track">
                                <ul class="splide__list">

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>5th Dec 2024</h6>
                                            <p>The Maths Club was inaugurated during the school assembly, attended by
                                                students from Classes VI to VIII. With the theme, Mathematics is a Way
                                                of Life, the event sought to kindle a deeper appreciation for the
                                                subject by exploring its indispensability. Presentations vividly
                                                illustrated how mathematics shapes our daily lives, leaving students
                                                intrigued and inspired to delve into its wonders.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>6th Dec 2024</h6>
                                            <p>The Maths Club organised The Maths Matrix, an engaging series of
                                                activities for students across all classes, blending creativity with
                                                logical thinking. For Classes XI and XII, a thrilling treasure hunt
                                                incorporated the analytical challenge of Sudoku. For other classes,
                                                activities included crafting jewellery inspired by mathematical
                                                patterns, exploring symmetry through Mandala Art, and solving intricate
                                                puzzles. The event celebrated the fun and beauty of mathematics for
                                                everyone involved. </p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>7th Dec 2024</h6>
                                            <p>The ‘Open House’ for Kindergarten to Class XI was held on Saturday, 7th
                                                December 2024, offering parents valuable insights into their children’s
                                                progress. The event coincided with the Christmas Fair 2024, which
                                                transformed the campus into a vibrant carnival. Featuring a variety of
                                                stalls, games, and activities, the fair created a festive and lively
                                                atmosphere. Students, parents, and staff enthusiastically participated
                                                in the celebrations, making it a day to cherish. </p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>10th Dec 2024</h6>
                                            <p>The Investiture Ceremony for the new office bearers of 2025-26 was in the
                                                presence of the Chief Guest, Ms. Dia Rekhi, an alumna of Lady Andal
                                                Venkatasubba Rao School. In a moment of solemnity, the new office
                                                bearers took their oath, vowing to uphold their duties with steadfast
                                                integrity and commitment. The occasion also featured a heartfelt prayer
                                                service for the students of Classes X and XII, as they stand on the cusp
                                                of their public examinations. The event was a beautiful convergence of
                                                leadership, faith, and encouragement, reaffirming the values of
                                                responsibility and resilience. </p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </li>


                    <li class="splide__slide">
                        <!-- Events for Nov 2024 -->
                        <div class="splide annual-event-imgs">
                            <div class="splide__track">
                                <ul class="splide__list">

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>14th Nov 2024</h6>
                                            <p>On the occasion of Children’s Day on Thursday, 14th November 2024,
                                                students celebrated the day in their classes with cheerful class
                                                parties. They brought their favourite snacks and board games, creating a
                                                lively and enjoyable atmosphere. The celebrations were marked by
                                                laughter, camaraderie, and shared moments of joy, making the day truly
                                                memorable.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>22nd Nov 2024</h6>
                                            <p>Founder’s Day at Sir Mutha School was celebrated with grandeur at the Sir
                                                Mutha Venkatasubba Rao concert hall, a venue befitting the occasion. The
                                                event featured captivating dramas such as, The Enchantment of the Rose
                                                and My Fair Lady, performed by the students. The day became a vibrant
                                                celebration, leaving a lasting impression on the audience.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>


                    <li class="splide__slide">
                        <!-- Events for Oct 2024 -->
                        <div class="splide annual-event-imgs">
                            <div class="splide__track">
                                <ul class="splide__list">

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>25th Oct 2024</h6>
                                            <p>The inauguration of the Language Club was held in the school’s library
                                                for Classes VII to X, showcasing an array of cultural expressions. The
                                                programme featured vibrant dance performances, compelling speeches, and
                                                captivating dramas in Tamil, Hindi, and Sanskrit. It was truly an event
                                                that honoured and celebrated Indian languages. </p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>25th Oct 2024</h6>
                                            <p>A Road Safety Training Session was conducted for children who were part
                                                of the RSP unit of Sir Mutha School, from Classes VII to X, by Mr.
                                                Vivek. The session focused on essential traffic rules and hand signals,
                                                with students actively practising and demonstrating these skills. Mr
                                                Vivek’s engaging presentation highlighted the importance of responsible
                                                road behaviour. The session was well-received, leaving a lasting impact
                                                on the young participants.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>27th Oct 2024</h6>
                                            <p>The CanStop Awareness Annual Walkathon unfolded against the picturesque
                                                backdrop of Island Grounds Park, drawing spirited participation from
                                                students and teachers of Classes XI and XII. This poignant and
                                                purposeful initiative underscored the enduring significance of
                                                collective action in the fight against cancer, exemplifying solidarity
                                                and heartfelt commitment for the cause.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>27th Oct 2024</h6>
                                            <p>The Language Club recently hosted an engaging activity for students,
                                                offering an immersive exploration of a few Indian languages through
                                                interactive games and activities. The activities not only enhanced
                                                linguistic skills but also aimed to spark curiosity about diverse
                                                cultures, encouraging students to expand their cultural and linguistic
                                                horizons. </p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>


                    <li class="splide__slide">
                        <!-- Events for Sept 2024 -->
                        <div class="splide annual-event-imgs">
                            <div class="splide__track">
                                <ul class="splide__list">

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>5th Sept 2024</h6>
                                            <p>Sir Mutha School celebrated Teachers’ Day on Thursday, 5th September
                                                2024, to honour the unwavering dedication and commitment of its
                                                educators in shaping the lives of students. The event was a vibrant
                                                celebration, highlighting the invaluable contributions of teachers while
                                                offering a day filled with joy and camaraderie for all participants. A
                                                carnival, featuring food and game stalls, was organised for the
                                                students, with all proceeds directed towards the initiatives of the
                                                Interact and Juvenoptimist club. </p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>6th Sept 2024</h6>
                                            <p>The Heritage Club of our school organised a series of activities to
                                                commemorate Madras Day, engaging students from LKG to Class XII.
                                                Students of LKG and UKG participated by dressing in traditional attire,
                                                adding a festive touch to the celebration. For other classes, activities
                                                included doodle art, a puppet show, coconut décor, fireless cooking, and
                                                a session highlighting key milestones in the rich history of Madras.
                                                These activities offered students an opportunity to delve into the
                                                city’s rich history, understand its evolution into modern-day Chennai,
                                                and celebrate its vibrant cultural heritage. </p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>10th Sept 2024</h6>
                                            <p>Sir Mutha School, had the distinct honour of hosting the prestigious West
                                                Chennai Sahodaya Cluster Schools Teachers’ Awards Function 2024 at the
                                                Sir Mutha Venkatasubba Rao concert hall, a celebration of pedagogical
                                                excellence. Mrs. Shonali Matthai from Sir Mutha School was one of the
                                                recipients. The ceremony was presided over by Dr. S. Santhosh Baboo,
                                                Principal of D.G. Vaishnav College. The awardees were duly felicitated
                                                with commemorative mementoes, symbolising their dedication and service
                                                to the noble vocation of teaching. </p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>24th Sept 2024</h6>
                                            <p>A session on mental and physical health for teachers was conducted in the
                                                AV room, led by the school counsellor, Mrs. Shanti Rao. The session
                                                focused on strategies for maintaining well-being, managing stress, and
                                                staying physically active. Teachers were given valuable insights into
                                                balancing their professional and personal lives, with practical tips for
                                                enhancing overall health and well-being.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <!-- Events for August 2024 -->
                        <div class="splide annual-event-imgs">
                            <div class="splide__track">
                                <ul class="splide__list">

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>1st Aug 2024</h6>
                                            <p>The Annual Sports Meet was held on 1st August 2024, with Mr. Gautham
                                                Gopal gracing the event as the Chief Guest. Various track and field
                                                events showcased the students’ sportsmanship, and Turquoise House
                                                emerged victorious, securing the championship. The event was a grand
                                                celebration of athletic prowess and teamwork. </p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>15th Aug 2024</h6>
                                            <p>The seventy-eighth Independence Day was celebrated with spirited fervour,
                                                highlighted by a resplendent march-past, and stirring songs and dances
                                                reflecting the essence of freedom, performed by the students of Sir
                                                Mutha School, Lady Andal School and the Madras Seva Sadan School. Mr
                                                Aditya Varma, the Head of Human Resources, graced the occasion as the
                                                Chief Guest. </p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>21st Aug to 23rd Aug 2024</h6>
                                            <p>The 21st edition of the Padma Bhushan Lady Andal Memorial Inter-School
                                                Sports Tournament and Swimming Meet showcased the sporting prowess of
                                                the students. Events included basketball, football, volleyball, kho-kho,
                                                and swimming. P. R. Neeharika, an athlete and alumna of Lady Andal
                                                Venkatasubba Rao School, was the Chief Guest for the valedictory
                                                function and presented certificates and medals to the winners.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>29th Aug to 31st Aug 2024</h6>
                                            <p>The Scholastic Book Fair was a celebrated event, offering an extensive
                                                collection of books designed to ignite the imaginations of students and
                                                nurture their enthusiasm for reading. The fair presented a diverse
                                                selection across various genres, appealing to a wide range of interests
                                                and age groups. Students perused the books with keen interest, eager to
                                                discover their next literary adventure.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>29th Aug to 31st Aug 2024</h6>
                                            <p>The Scholastic Book Fair was a celebrated event, offering an extensive
                                                collection of books designed to ignite the imaginations of students and
                                                nurture their enthusiasm for reading. The fair presented a diverse
                                                selection across various genres, appealing to a wide range of interests
                                                and age groups. Students perused the books with keen interest, eager to
                                                discover their next literary adventure.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>31st Aug 2024 Open House </h6>
                                            <p>A Parent-Teacher Meeting was convened to review students’ progress and
                                                address any concerns. Parents and teachers engaged in meaningful
                                                discussions, exchanging feedback and insights to support the holistic
                                                development of each child. It served to reinforce the vital partnership
                                                between home and school, aimed at ensuring the continued success of
                                                every student.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>31st Aug 2024</h6>
                                            <p>The students of the Interact and Juvenoptimist club of Sir Mutha School,
                                                in association with Image Minds, organised a silent auction and
                                                fundraiser to showcase the art created by students during the Image
                                                Minds creative workshops. In an endeavour to nurture and celebrate the
                                                potential of our students, parents were invited to place bids, as the
                                                proceeds of the auction were directed towards supporting the initiatives
                                                of the Interact and Juvenoptimist club. </p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>



                    <li class="splide__slide">
                        <!-- Events for July 2024 -->
                        <div class="splide annual-event-imgs">
                            <div class="splide__track">
                                <ul class="splide__list">

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>1st July 2024</h6>
                                            <p>A Dramact theatre workshop was conducted in the library for students aged
                                                8 and above. The session was led by Mr N. Nilakantan, a seasoned
                                                Voice-Over Professional, Emcee, Public Speaker, Corporate Trainer, and
                                                Theatre Actor and Director with over 30 years of experience. The
                                                workshop focused on enhancing students’ acting skills and building their
                                                confidence through interactive theatre techniques. Mr. Nilakantan's
                                                expertise and dynamic teaching style made it a memorable and enriching
                                                experience for all participants.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>5th July 2024</h6>
                                            <p>The Eco Club organised a campus-wide activity to promote environmental
                                                awareness. Students designed working models for a sustainable future and
                                                participated in discussions on nuclear and geothermal energy. They also
                                                offered simple explanations of various objects and their impact on human
                                                well-being. The activity saw enthusiastic participation, providing
                                                students with valuable insights into protecting the environment and
                                                contributing to a greener future.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>8th July 2024</h6>
                                            <p>A Road Safety Patrol (RSP) awareness programme was conducted for students
                                                of Classes IX and above. The session featured Senior Traffic Warden,
                                                Mr.Vivek Dhaanada and Traffic Warden, Mr. Navjout Siddu, who shared
                                                valuable insights into road safety measures and responsible road
                                                behaviour. The programme aimed to deepen students' understanding of
                                                traffic rules and emphasised the critical importance of road safety.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>11th July 2024</h6>
                                            <p>The Annual Prize Distribution Ceremony was held at the Sir Mutha
                                                Venkatasubba Rao Concert Hall. The event celebrated academic excellence,
                                                recognising students for their achievements in the last academic year.
                                                Ms. Oviya Reddy, an alumna of Lady Andal Venkatasubba Rao School, was
                                                the Chief Guest and presented certificates of merit to the students.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>18th July 2024</h6>
                                            <p>The Interact Club, the youth wing of the Rotary Club, Chennai, actively
                                                engages young members of Sir Mutha School in community service.
                                                Activities include fundraising initiatives, distributing grains to those
                                                in need, and participating in the CANSTOP Walk for cancer awareness. The
                                                installation of the club’s office bearers took place at Prem Vihar,
                                                graced by the President of the Rotary Club of Chennai Mid City, other
                                                Rotarians, and members of Soroptimist International.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>From 22nd July to 26th July 2024</h6>
                                            <p>Shiksha Saptah, celebrated from 22–26 July 2024, marked the fourth
                                                anniversary of the National Education Policy 2020. Students from Classes
                                                I to III participated in activities such as storytelling, identifying
                                                vegetables through flashcards, and learning about Indian culture,
                                                values, and monuments. The aim of this CBSE initiative was to promote
                                                experiential learning and encourage an appreciation for India's rich
                                                heritage.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>27th July 2024</h6>
                                            <p>The Eco Club organised a sapling planting activity for students of
                                                Classes XI and XII to encourage environmental responsibility and
                                                emphasise the value of green spaces. The activity aimed to deepen
                                                students’ connection with nature and highlight the vital role of trees
                                                in sustaining the ecosystem. Students participated with palpable
                                                enthusiasm, revelling in the fulfilment of contributing to the vision of
                                                a sustainable and verdant future. </p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>30th July 2024</h6>
                                            <p>Class III students enjoyed a fun-filled Bagless Day with a variety of
                                                activities. They wrote recipes, made nutrition checklists, and tried
                                                their hand at fireless cooking. The students participated eagerly,
                                                making it a memorable day for all.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </li>



                    <li class="splide__slide">
                        <!-- Events for June 2024 -->
                        <div class="splide annual-event-imgs">
                            <div class="splide__track">
                                <ul class="splide__list">

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>5th June 2024</h6>
                                            <p>The Correspondents, Mrs. Krithika Kumar Quintal and Mrs. Tamara Ann
                                                Coelho, inaugurated the newly renovated staff rooms in a formal
                                                ceremony. This renovation reflects a commitment to creating a
                                                comfortable and productive environment for the teaching staff.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>5th June 2024 in the AV room</h6>
                                            <p>A Science, Technology, Engineering, and Mathematics (STEM) orientation
                                                for Science and Maths teachers was held in the AV room, showcasing
                                                innovative teaching techniques and resources. The session aimed to equip
                                                educators with the latest strategies to enhance student engagement in
                                                these critical subjects. This orientation marked a significant step
                                                towards creating a modern and dynamic learning environment in science
                                                and mathematics.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>6th June 2024 in the AV room</h6>
                                            <p>A short reading workshop for students of Classes I to III, led by Mrs.
                                                Nikita Dutta Gupta, was conducted in the AV room. The workshop aimed to
                                                instil a love of reading among young learners through engaging
                                                activities and storytelling sessions. Mrs Gupta's dynamic approach
                                                captivated the students, making the reading experience both enjoyable
                                                and educational.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>12th June 2024</h6>
                                            <p>An orientation for the newly admitted students and teachers was held at
                                                the Sir Mutha Venkatasubba Rao Concert Hall. The session, featuring a
                                                speech by the Correspondent Mrs. Krithika Kumar Quintal, detailed the
                                                history of the Madras Seva Sadan and its rich legacy. Mrs Quintal’s
                                                speech highlighted the institution's commitment to education,
                                                excellence, and community service.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>18th June 2024</h6>
                                            <p>The Eco Club was inaugurated on 18th June 2024, with Principal Mrs.
                                                Samira Tandon presiding over the event. Badges of distinction were
                                                presented to the newly appointed office bearers. The club is dedicated
                                                to promoting environmental awareness, sustainable practices, and
                                                ecological responsibility among students. Members pledged to maintain a
                                                litter-free campus, conserve water, and actively encourage plant growth
                                                to enhance the ecosystem.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>21st June 2024</h6>
                                            <p>International Yoga Day was observed during the school assembly. Students
                                                demonstrated various yoga asanas, showcasing their flexibility and
                                                discipline. The event emphasised the importance of yoga in promoting
                                                physical and mental well-being, creating a reflective and enlightening
                                                experience for all the participants.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>From 26th April 2024 to 27th April 2024</h6>
                                            <p>The sixth edition of the Sir Mutha School Model United Nations, held on
                                                26th and 27th June 2024, was no exception to the tradition of
                                                excellence. With the theme, Crafting Concerted Harmony, the event
                                                focused on raising awareness of pressing global issues, advancing the
                                                art of diplomacy and teamwork, and encouraging delegates to collaborate
                                                on innovative solutions. The valedictory function, held at the Sir Mutha
                                                Venkatasubba Rao Concert Hall, was graced by Mr. Aravindhan, IPS, as the
                                                Chief Guest. He presented certificates in several categories to the
                                                winning delegates, acknowledging their exemplary diplomacy and
                                                collaborative efforts.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>19th June 2024</h6>
                                            <p>A storytelling session was conducted by Mrs. Shalini for students of LKG,
                                                UKG, and Classes I to III, featuring the story Superheroes Are
                                                Everywhere by Kamala Harris. Mrs. Shalini’s lively narration captivated
                                                the children, making it a delightful and engaging experience for all the
                                                young participants.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>




                    <li class="splide__slide">
                        <!-- Events for April 2024 -->
                        <div class="splide annual-event-imgs">
                            <div class="splide__track">
                                <ul class="splide__list">


                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>From 4th April 2024 to 5th April 2024</h6>
                                            <p>The documentary Palette of Emotions, featuring Rupak Munje and his
                                                mother, Rajendra Munje, was screened for students from Classes VII to
                                                XII in their classrooms. A discussion on autism was held, the following
                                                day, highlighting how Rupak channelled his emotions through art. The
                                                event concluded with an engaging panel discussion at the Sir Mutha
                                                Venkatasubba Rao concert hall.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>23rd April 2024</h6>
                                            <p>The Literary Club was inaugurated with great fervour, heralding the
                                                commencement of a new journey for the incumbent office bearers. The
                                                Literary Club of Sir Mutha School was officially inaugurated on 23 April
                                                2024, by distinguished guests Mrs Varsha, Mrs Shonali Matthai, and Mrs
                                                Sheeba Samson. This significant occasion marked the advent of a new
                                                chapter in the school’s endeavour to instil a profound appreciation for
                                                literature and language.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('images/beyond-curriculum/annual-event-1.png') ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6>24th April 2024</h6>
                                            <p>The Literary Club’s activity for the year revolved around the theme The
                                                Caricature Convention. This vibrant event brought together students from
                                                Classes UKG to X and Class XII, offering them a unique platform to
                                                showcase their creativity and artistic expression. Activities included a
                                                puppet show, story writing, and dressing up as beloved comic characters.
                                                The event was a delightful blend of fun and learning, leaving
                                                participants enriched and inspired.</p>
                                            <div class="whiteBtn-medium">
                                                <a href="#">View Gallery</a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>






                </ul>
            </div>
        </div>
    </section>

    <!-- Annual Events -->