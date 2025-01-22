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
                <h3>Heritage <span>club</span></h3>
                
                <h6 class="light-blue">
                India is a vibrant mosaic of cultures, religions, and languages, and at our school, we celebrate this diversity through the ‘Our Heritage Club.’ Our mission is to instil pride in our students regarding the rich and varied heritage of India, emphasising the importance of preserving our past to create a brighter future.
                Through a range of engaging activities—including heritage walks, festival celebrations, and observances of national days—we aim to deepen awareness and appreciation of our cultural legacy. By immersing students in these experiences, we encourage them to become responsible custodians of our shared history, inspiring a generation that honours its roots while looking forward with hope and determination.
                </h6>
                
            </div>
        </div>
    </section>
    <!-- Green Campus -->