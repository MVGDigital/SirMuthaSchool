<main class="home-Sec">

    <!-- Banner Section -->
    <section class=" banner-section">
    <div class="bannerTitle">
            <h1>Sir Mutha School</h1>
            <p>A unit of the madras seva sadan</p>
        </div>
    </section>
    <div id="homeSlider" class="splide homeBanner">
        <div class="splide__track">
            <ul class="splide__list">
                <?php foreach ($banners as $banner): ?>
                <li class="splide__slide">
                    <div class="sliderContainer">
                        <a href="<?= esc($banner['hyperlink']) ?>">
                            <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid deskTopImg" alt="<?= esc($banner['title']); ?>">
                            <img src="<?= base_url('uploads/banner_images/' . $banner['mobile_image']); ?>" class="img-fluid mobImg w100" alt="Banner image">
                            <h4><?= esc($banner['title']) ?></h4>
                        </a>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!-- Banner Section -->

    <!-- Adminssion Oepn Form popup-->
    
<section id="admissionPopUp" >
    <div class="Popup-form-container">
        <div class="col-12 col-md-10 col-lg-6 PopupGridContainer">
            <div class="popup-container">
                <div class="popup-close-icon">
                    <img src="<?= base_url('images/pop-img/popCloseIcon.svg') ?>" id="pop_close"
                        alt="Sir Mutha Admission Popup Close icon">
                </div>
                <div class="popup-logo">
                    <img src="<?= base_url('images/pop-img/sir-mutha-logo.svg') ?>" class="img-fluid whiteLogo"
                        alt="Sir Mutha ib logo">
                    <p>Sir Mutha School</p>
                </div>
                <h1>ADMISSION OPEN FOR 2025-2026</h1>

                <div class="row m-0 w100 p-12">
                    <div class="col-md-5 col-lg-4 p-0">
                        <img src="<?= base_url('images/pop-img/kindergarten.jpg') ?>" class="img-fluid deskTopImg w100" alt="">
                        <img src="<?= base_url('images/pop-img/kindergartenMob.jpg') ?>" class="img-fluid mobileImg-1 w100"
                            alt="">
                    </div>
                    <div class="col-md-7 col-lg-8 itemCenter popup-cardBg p-0">
                        <div class="popup-content">
                            <h2>Applications Now Open for Kindergarten to Grade 10</h2>
                            <a href="<?= base_url('admission/form') ?>" class="form-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="row m-0 w100 p-12">
                    <div class="col-md-5 col-lg-4 p-0">
                        <img src="<?= base_url('images/pop-img/pre-kg.jpg') ?>" class="img-fluid deskTopImg w100" alt="">
                        <img src="<?= base_url('images/pop-img/pre-kgMob.jpg') ?>" class="img-fluid mobileImg-2 w100" alt="">
                    </div>
                    <div class="col-md-7 col-lg-8 itemCenter popup-cardBg p-0">
                        <div class="popup-content">
                            <h2>Apply for LAHOC Activity Center / Pre-KG</h2>
                            <a href="<?= base_url('admission/lahoc') ?>" class="form-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
<!-- Adminssion Oepn Form --> 