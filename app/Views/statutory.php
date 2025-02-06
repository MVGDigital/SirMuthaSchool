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
                <li><a href="<?= base_url('statutory#Statutory-Compliances') ?>" class="active">Statutory
                        Compliances</a></li>
            </ul>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Policys -->
    <section class="container-space white-bgImg ptb-80" id="Statutory-Compliances">
        <div class="sectionTitle-blue">
            <h3>Statutory <span>Compliances</span></h3>
        </div>
        <div class="row m-0 w100 mt-50">
            <?php foreach ($documents as $document): ?>
            <div class="col-12 col-md-6 col-lg-4 col-xl-4 p-0">
                <div class="center-card">
                    <div class="card-content">
                        <img src="<?= base_url('images/pdf-icon.svg') ?>" class="pdfIcon" alt="">
                        <h5><?= esc($document['title']) ?></h5>
                    </div>
                    <div class="blueBtn-medium">
                        <a href="<?= base_url('uploads/statutory/' . $document['pdf_file']) ?>" target="_blank">Know
                            More</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Policys -->

    <!-- <section class="container-space linenWhite-bgImg ptb-80" id="">
        <div class="mt-50">
            <div class="row m-0 w100">
                <div class="col-12 col-md-6 col-lg-4 col-xl-4 p-0">
                    <div class="cardWith-under-info-center">
                        <img src="<?= base_url('images/statutory/code-of-conduct.png') ?>" class="img-fluid w100"
                            alt="Sir Mutha Logo">
                        <div class="sectionSubTitle-blue">
                            <h4>code of <span>Conduct</span></h4>
                        </div>
                        <div class="card-under-line">
                            <hr>
                        </div>
                        <div class="blueBtn-medium">
                        <a href="<?= base_url('statutory/code-of-contact') ?>">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-4 p-0">
                    <div class="cardWith-under-info-center">
                        <img src="<?= base_url('images/statutory/rules-and-regulations.png') ?>" class="img-fluid w100"
                            alt="Sir Mutha Logo">
                        <div class="sectionSubTitle-blue">
                            <h4>Rules & <span>Regulations</span></h4>
                        </div>
                        <div class="card-under-line">
                            <hr>
                        </div>
                        <div class="blueBtn-medium">
                             <a href="<?= base_url('statutory/rules-and-regulation') ?>">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-4 p-0">
                    <div class="cardWith-under-info-center">
                        <img src="<?= base_url('images/statutory/child-support-policy.png') ?>" class="img-fluid w100"
                            alt="Sir Mutha Logo">
                        <div class="sectionSubTitle-blue">
                            <h4>Child <span>Support Policy</span></h4>
                        </div>
                        <div class="card-under-line">
                            <hr>
                        </div>
                        <div class="blueBtn-medium">
                        <a href="<?= base_url('statutory/child-support-policy') ?>">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->