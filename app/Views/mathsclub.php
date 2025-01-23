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
                <h3>Maths <span>club</span></h3>
                
                <h6 class="light-blue">
                The ‘Maths Club’ facilitates students’ exploration of mathematics beyond the confines of textbooks, encouraging them to think creatively and develop a genuine interest in the subject. Through a variety of stimulating activities, the club sharpens learning and enhances problem-solving skills applicable to everyday life.
                Students enjoy engaging in mathematical games, puzzles, and artistic exercises that reinforce essential concepts, transforming the study of mathematics into an enjoyable pursuit. By participating in the Maths Club activities, students not only deepen their understanding of mathematical principles but also cultivate a lasting appreciation for the subject, equipping them with skills that extend far beyond the classroom.
                </h6>
                
            </div>
        </div>
    </section>
    <!-- Green Campus -->