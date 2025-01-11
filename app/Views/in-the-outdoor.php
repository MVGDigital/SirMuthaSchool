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
                <li><a href="#" class="active">In the outdoors</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Sir Mutha <span> In the outdoors</span></h3>
            <h6>At Sir Mutha School, outdoor programs combine adventure, education, and exploration to nurture life
                skills and broaden horizons. From thrilling adventure camps to culturally enriching tours and fun-filled
                excursions, these experiences empower students to learn, bond, and grow beyond the classroom.</h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Founder Slider Section -->
    <section class="founder-sec">
        <div class="container-space">
            <div class="row w100 m-0 ptb-80">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 alignItemCenter">
                    <div class="lft-rgt-content">
                        <div id="founders-slider" class="splide paginationCenter toRight-pagination">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img src="<?= base_url('images/about/founder-ladyandal.png') ?>" class="img-fluid w100"
                                        alt="Lady Andal">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="<?= base_url('images/about/founder-ladyandal.png') ?>" class="img-fluid w100"
                                        alt="Lady Andal">
                                    </li>
                                    <li class="splide__slide">
                                        <img src="<?= base_url('images/about/founder-ladyandal.png') ?>" class="img-fluid w100"
                                        alt="Lady Andal">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="sectionTitle-blue">
                        <h3>Adventure <span>Camps</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                        </p>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Founder Slider Section -->