<main>
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
    <section class="container-space innerMenus-sec" id="ourhistory">
        <div class="innerMenus">
            <ul>
                <li><a href="<?= base_url('statutory#aboutcbse') ?>">Compliance Details</a></li>
                <li><a href="<?= base_url('statutory#guidelines') ?>">Guidelines for parents</a></li>
                <li><a href="<?= base_url('statutory#guidelines') ?>" class="active">Attendance & Leave Policy</a></li>
                <li><a href="<?= base_url('statutory#aboutcbse') ?>">Code of Conduct</a></li>
                <li><a href="<?= base_url('statutory#aboutcbse') ?>">Rules & Regulations</a></li>
                <li><a href="<?= base_url('statutory#aboutcbse') ?>">Child Support Policy</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
    </section>
    <section class="container-space bgImg-with-center-content application-process-img ptb-80">
        <div class="col-lg-9 m-auto">
            <div class="center-card">
                <div class="sectionTitle-blue detailpagecontent">
                    <h3>Code of Conduct</h3>
                    <p>Pupils should be polite and courteous to everyone and show due respect to the teachers, other authorities and all elders, in general. They should address the teacher politely using the appropriate terms of courtesy. They must stand when addressed by and when addressing all elders.</p>
                    <p>Pupils should see that the classrooms and school premises are always kept clean.</p>
                    <p>Any damage done to school property will have to be made good. The disciplinary action taken by the management in this regard is final.</p>
                    <p>Pupils are responsible for the safe custody of their books and belongings.</p>
                    <p>No books, newspapers or periodicals other than those prescribed should be brought to the school.</p>
                    <p>Pupils are expected to take part in extra-curricular activities of the school as part of their civic training.</p>
                    <p>Boys are not permitted to wear any jewellery.</p>
                    <p>Girls are not permitted to wear extra jewellery other than a pair of ear studs / rings. Tattoos are not permitted.</p>
                    <p>Pupils are not permitted to colour their hair or have fancy haircuts.</p>
                    <p>All pupils are required to sing bhajans at the Friday Assembly.</p>
                    <p>Pupils cannot bring any digital / Electronic devices to school (Mobile Phones, Laptops, Smart watches etc).</p>

                </div>
            </div>
        </div>
    </section>