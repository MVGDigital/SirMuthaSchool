<main>
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
                    <h3>Attendance  & Leave Policy</h3>
                    <p>Pupils should not stay away from school except for special reasons, for which prior leave of absence is to be obtained in writing.</p>
                    <p>Leave of absence must be sent in the prescribed form given in the calendar duly signed by the parent / guardian.</p>
                    <p>A pupil who is absent for 3 days or more on account of illness must produce a medical certificate for the period of absence.</p>
                    <p>A pupil should have at least 75% attendance out of the total number of working days to be eligible for promotion at the end of the year.</p>
                    <p>Attendance on the first and last working day is compulsory.</p>
                    <p>The school will not function on any day(s) declared as Holiday(s) by the State Government*. (Please refrain from any enquiries on this subject)</p>
                </div>
            </div>
        </div>
    </section>