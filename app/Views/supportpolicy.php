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
                    <h3>Child Safety Policy</h3>
                    <h4>Protection of Children from Sexual Offences (POCSO)</h4>
                    <p>As part of our commitment to maintaining a secure and supportive educational environment, we have organised a comprehensive workshop for teachers focused on the Protection of Children from Sexual Offences (POCSO) Act. This initiative is essential to ensuring that our staff is well-informed and equipped to uphold institutional integrity and comply with national regulations. Additionally, a committee has been established to oversee the continuous monitoring and enforcement of these standards. The committee will ensure the effective implementation of policies and address any concerns related to the safety and well-being of our students. Through this proactive approach, we reaffirm our unwavering commitment to protecting the rights, safety, and dignity of all students.
                    </p>
                    
                    
                </div>
            </div>
        </div>
    </section>