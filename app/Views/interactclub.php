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
        
    </section>
    <!-- Section Menus -->

    <!-- Literary & Arts -->
    <section class="wave-sec ligh-yellowWithGg-img ptb-80" id="terms_conditions">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-6 col-xl-6 mobContTop-p-tb50 plr-80">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Interact <span> club</span></h3>
                    <p>The Interact Club serves as the youth wing of the Rotary Club in Chennai, embodying the noble ethos of Service Above Self.  Members of Sir Mutha School are dedicated to uplifting the less fortunate through a variety of meaningful initiatives. They actively engage in conducting paper drives, raising funds for children's homes, and distributing essential grains to those in need, reflecting our commitment to helping others through the Fistful of Grains initiative.</p>
                    <p>Additionally, the club collaborates with Soroptimist International Chennai, a global voice for women, through awareness, advocacy, and action. Members participate in significant events such as the CANSTOP WALK, aimed at raising cancer awareness, and other initiatives that sensitise the public to the challenges faced by the visually impaired. Through these endeavours, our students not only contribute to their community but also cultivate a profound sense of social responsibility and compassion.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-5">
                <img src="<?= base_url('images/beyond-curriculum/interact_curve.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
        </div>
    </section>
    <!-- Literary & Arts -->