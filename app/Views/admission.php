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
                <li><a href="<?= base_url('admission#application_process') ?>" class="active">Application Process</a></li>
                <li><a href="<?= base_url('admission#terms_conditions') ?>">Terms & Conditions</a></li>
                <li><a href="<?= base_url('admission#fee_structure') ?>">Free Structure</a></li>
                <li><a href="<?= base_url('admission#admission_enquiry') ?>">Admission Enquiry Form</a></li>
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
    </section>
    <!-- Video Section -->

    <!-- Application Process -->
    <section class="container-space bgImg-with-center-content application-process-img ptb-80"  id="application_process">
        <div class="sectionTitle-white">
            <h3>Appication Process <span></h3>
            <!--<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et-->
            <!--    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip-->
            <!--    ex ea commodo consequat.</h6>-->
        </div>
        <div class="col-lg-9 m-auto mt-50">
            <div class="center-card card-text-start">
                <div class="sectionTitle-blue">
                    <h3>Step to <span>follow</span></h3>
                    <p><b>1. Online enquiry form</b> </p>
                    <p>The school's admission enquiry form will be available on the website from January onwards.</p>
                    <p><b>2. Submission of Online Enquiry Form</b></p>
                    <p>Parents/guardians submit the online enquiry form available on the school website. Specific instructions are provided for completing the form.</p>
                    <p><b>3. Interview and Entrance test </b></p>
                    <p>Subject to the availability of seats, shortlisted applicants may be invited for an interview involving the applicant and their parents or guardians. Applicants for grade 5 upwards may also be required to sit an entrance test to assess their proficiency in key subjects.</p>

                    <p><b>4. Document Verification</b></p>
                    <p>The school verifies the submitted documents for authenticity.</p>
                    <p><b>5. Fee Payment and Confirmation</b></p>
                    <p>Parents/guardians must pay the admission and tuition fees within the stipulated time.</p>
                    <p><b>6. Orientation</b></p>
                    <p>The school conducts an orientation session to familiarise newly admitted students and their parents/guardians with the school's environment, guidelines,and policies.</p>

                    <p>We understand how important it is to choose the right school for your child’s education, and we are pleased that you are considering Sir Mutha School. Our team of experienced admissions staff is dedicated to providing excellent service, offering guidance and information at every step of the process to support you through the admissions process.</p>
                    <p>We are able to consider your child for entry from LKG to Grade X, as well as into our Activity Centre, allowing you to choose the entry point that best suits your child. We are here to support you every step of the way.</p>
                    
                    <div class="blueBtn-medium">
                        <!-- <a href="#">Know More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Application Process-->


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

    <!-- Fee Structure -->
    <section class="wave-sec wave-lightyellow-bottom-img"  id="fee_structure">
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
            <div class="col-12 col-md-12 col-lg-5 col-xl-5 fee-structureImg">
                <img src="<?= base_url('images/facilities/co-curricular.png') ?>" class="img-fluid"
                    alt="Lady Andal">
            </div>
        </div>
    </section>
    <!-- Fee Structure -->

    <!-- Admission Enquiry Form -->
    <section class="container-space wave-with-bgImg ptb-80" id="admission_enquiry">
        <div class="sectionTitle-blue mb-80">
            <h3>Admission Enquiry <span> Form</span></h3>
        </div>
        <div class="row m-0 w100">
            <div class="col-lg-6 p-0">
                <div class="cardWith-Btn">
                    <div class="cardTitle">
                        <h4>Activity Centre/PREK-KG: 2025-26</h4>
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
                        <h4>Apply For LKG to Grade X: 2025-2026</h4>
                    </div>
                    <img src="<?= base_url('images/admission/admission_gradeX.png') ?>" class="img-fluid w100"
                        alt="Sir Mutha Logo">
                    <div class="blueBtn-medium">
                        <a href="<?= base_url('admission/form') ?>">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Admission Enquiry Form -->