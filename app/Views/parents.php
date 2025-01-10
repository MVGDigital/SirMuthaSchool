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
    <section class="container-space innerMenus-sec">
        <div class="innerMenus">
            <ul>
                <li><a href="#" class="active">Application Process</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Free Structure</a></li>
                <li><a href="#">Registration Process</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Welcome To Sir Mutha School !</h3>
            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Video Section -->
    <section id="campusVideo" class="admsn-PageVideo pb-60">
        <div class="col-lg-10 m-auto">
            <?php if (!empty($video)) : ?>
            <video id="sir-mutha-campus" controls playsinline>
                <source src="<?= base_url('uploads/videos/' . $video['video_file']); ?>" type="video/mp4">
            </video>
            <?php endif; ?>

            <!-- Play icon and text overlay -->
            <div id="playOverlay" class="playOverlay">
                <img src="<?= base_url('images/play.png') ?>" alt="Play Icon" class="playIcon img-fluid">
                <span class="playText">Play</span>
            </div>
        </div>
    </section>
    <!-- Video Section -->

    <!-- Parent Portal -->
    <section class="wave-sec wave-yellowWith-bottom-img container-space ptb-80">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/admission/terms-and-conditions.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p-tb50">
                <div class="sectionTitle-blue lft-rgt-content changeTitleColor">
                    <h3>Parent <span> Portal</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Parent Portal -->

    <!-- Parent Association -->
    <section class="wave-sec white-bgImg">
        <div class="itemSpaceBetween">
            <div class="col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/academics/curriculum.svg') ?>" class="img-fluid" alt="Lady Andal">
            </div>
            <div class="col-md-12 col-lg-7 col-xl-7 mobContTop-p-tb50 plr-80">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Parent <span> Association</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                    <div class="blueBtn-medium">
                        <a href="#">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Parent Association -->

    <!-- Resource -->
    <section class="wave-sec blueBg-Sec lightYellow-wave-bottom-img">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-7 col-xl-7 mobContTop-p-tb50 plr-80">
                <div class="sectionTitle-white lft-rgt-content">
                    <h3>Resources</span></h3>
                    <p>The Resources section is your one-stop hub for practical tools and information. From student
                        handbooks that outline policies and expectations to updated lunch menus and uniform guidelines,
                        this section ensures that parents have easy access to essential documents. Designed for
                        convenience, it keeps parents informed and prepared, helping them navigate the school year with
                        ease. At Lady Andal IB School, we believe in providing resources that make school life more
                        organized and enjoyable for both parents and students.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/facilities/co-curricular.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
        </div>
    </section>
    <!-- Resource -->