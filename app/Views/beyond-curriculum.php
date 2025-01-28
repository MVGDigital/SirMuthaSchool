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
                            <h6>Sports Day, Nov 2022</h6>
                            <p>Sir Mutha School, Chennai, and Kalasalingam Academy of Research and
                                Education (KARE), Srivilliputhur, bagged the overall championship
                                trophies in school and
                                college category in the KESPA - HITS TN State level Swimming meet 2024
                                organised by the
                                Kerala Sportspersons Association (KESPA) Chennai in association with the
                                Dolphin
                                Swimming
                                Academy, Mogappair.</p>
                        </div>
                    </li>



                </ul>
            </div>
        </div>
    </section>
    <!-- Annual Events -->