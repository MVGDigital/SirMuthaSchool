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
        
    </section>
    <!-- Section Menus -->

    <!-- Green Campus -->
    <section class="green-campus-sec" id="greencampus">

        <div class="container-space wave-yellow-overwireBg ptb-80">
            <div class="sectionTitle-blue col-lg-12 col-xl-10 m-auto">
                <h3>Eco <span>club</span></h3>
                
                <h6 class="light-blue">
                The Eco-Club of our school plays a vital role in establishing a central hub for all environmental and sustainability initiatives. It serves as a catalyst for cultivating a sustainable campus, in alignment with the principles of ecological stewardship. Through a range of engaging programmes and activities, the club aims to raise awareness among students about the importance of environmental conservation.
                Members participate in projects that promote biodiversity, reduce waste, and encourage sustainable practices within the school community. By fostering a sense of responsibility and connection to the environment, the Eco-Club not only empowers students to act but also instils a lasting commitment to safeguarding our planet for future generations.
                </h6>
                
            </div>
        </div>
    </section>
    <!-- Green Campus -->