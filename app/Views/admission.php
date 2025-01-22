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
                <li><a href="<?= base_url('admission#application_process') ?>" class="active">Application Process</a></li>
                <li><a href="<?= base_url('admission#terms_conditions') ?>">Terms & Conditions</a></li>
                <li><a href="<?= base_url('admission#fee_structure') ?>">Free Structure</a></li>
                <li><a href="<?= base_url('admission#registration_process') ?>">Registration Process</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Welcome To Sir Mutha School !</h3>
            <h6>A Home away from Home – a place where diversity thrives, minds are nurtured, and students are prepared for the future.
            At Sir Mutha School, we are driven by a passion for innovation offering a holistic education that supports every learner's growth. 
            The school seamlessly blends tradition with progress, 
            creating an environment where excellence flourishes and new opportunities are embraced.</h6>
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

    <!-- Start Your Journey -->
    <section class="container-space wave-with-bgImg ptb-80">
        <div class="sectionTitle-blue mb-80">
            <h3>Start your <span> Journey</span></h3>
        </div>
        <div class="row m-0 w100">
            <div class="col-lg-6 p-0">
                <div class="cardWith-Btn">
                    <div class="cardTitle">
                        <h4>Pre KG</h4>
                    </div>
                    <img src="<?= base_url('images/admission/pre-kg.png') ?>" class="img-fluid w100"
                        alt="Sir Mutha Logo">
                    <div class="blueBtn-medium">
                        <a href="<?= base_url('admission/lahoc') ?>">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="cardWith-Btn">
                    <div class="cardTitle">
                        <h4>KG- 1 Std</h4>
                    </div>
                    <img src="<?= base_url('images/admission/kg-1std.png') ?>" class="img-fluid w100"
                        alt="Sir Mutha Logo">
                    <div class="blueBtn-medium">
                        <a href="<?= base_url('admission/form') ?>">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Your Journey -->

    <!-- Application Process -->
    <section class="container-space bgImg-with-center-content application-process-img ptb-80"  id="application_process">
        <div class="sectionTitle-white">
            <h3>Appication Process <span></h3>
            <!--<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et-->
            <!--    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
            <!--    ex ea commodo consequat.</h6>-->
        </div>
        <div class="col-lg-9 m-auto">
            <div class="center-card">
                <div class="sectionTitle-blue">
                    <h3>Step to <span>follow</span></h3>
                    <p>1. Online enquiry form </p>
                    <p>The school's admission enquiry form will be available on the website from January onwards.</p>
                    <p>2. Submission of Online Enquiry Form</p>
                    <p>Parents/guardians submit the online enquiry form available on the school website. Specific instructions are provided for completing the form.</p>
                    <p>3. Interview and Entrance test </p>
                    <p>Subject to the availability of seats, shortlisted applicants may be invited for an interview involving the applicant and their parents or guardians. Applicants for grade 5 upwards may also be required to sit an entrance test to assess their proficiency in key subjects.</p>
                    
                    <div class="blueBtn-medium">
                        <a href="#">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Application Process-->

    <!-- Fee Structure -->
    <section class="wave-sec wave-bottom-img"  id="fee_structure">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-7 col-xl-7 mobContTop-p-tb50 plr-80">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Fee <span> Structure</span></h3>
                    <p>Fees once paid will not be refunded.</p>
                    <p>The fees may be paid through the online portal. Dates will be intimated through circulars. Fees should be paid within the stipulated period.</p>
                    <p>A one-time payment of annual fees is preferred.</p>
                    <p>Students leaving the school in the middle of the Academic Year will have to pay the fees for the whole Academic Year.</p>
                    
                    <!--<div class="blueBtn-medium">-->
                    <!--    <a href="#">Know More</a>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/facilities/co-curricular.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
        </div>
    </section>
    <!-- Fee Structure -->

    <!-- Registration Process -->
    <section class="blueBg-Sec pt-60"  id="registration_process">
        <div class="container-space">
            <div class="sectionTitle-white">
                <h3>Registration <span>Process</span></h3>
                <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</h6>
            </div>
        </div>
        <div class="fullWidth-Imgwith-center-btn">
            <img src="<?= base_url('images/admission/registration-process.png') ?>" class="img-fluid" alt="">
            <div class="lightYellowBtn">
                <a href="#">Continue To Register</a>
            </div>
        </div>
    </section>
    <!-- Registration Process -->

    <!-- Terms & Conditions -->
    <section class="wave-sec ligh-yellowWithGg-img ptb-80"  id="terms_conditions">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                <img src="<?= base_url('images/admission/terms-and-conditions.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p-tb50 plr-80">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Terms & <span> Conditions</span></h3>
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
    <!-- Terms & Conditions -->