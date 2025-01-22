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
                <li><a href="<?= base_url('statutory#guidelines') ?>" class="active">Guidelines for parents</a></li>
                <li><a href="<?= base_url('statutory#guidelines') ?>">Attendance & Leave Policy</a></li>
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
                    <h3>Guidelines For Parents</h3>
                    <p>Provide a conducive environment for studies at home. </p>                                                                  
                    <p>Assist & guide your ward in doing his/her home - work.</p>
                    <p>Please check your ward's school calendar regularly and ensure that the assigned home - work is done on time and countersign the remarks made in it.</p>
                    <p>You are always welcome to the school to follow up on the progress of your ward. You are requested not to disturb the class during school hours. However you may contact the Class teacher or subject teacher personally on Friday after school hours with prior appointment.</p>
                    <p>Please fill in the Leave Form in the calendar prior to the absence of your ward / or on returning to school in the event of sudden illness, duly attested by you. No leave letters please.</p>
                    <p>Please don't send your ward to school when he / she is suffering from any infectious disease.</p>
                    <p>Please ensure that your ward comes to school regularly in neat, clean and tidy school uniform and ID card.</p>
                    <p>It is compulsory to attend the Parent - Teacher meetings held in the school for regular updates.</p>
                    <p>Please ensure that your ward participates actively in games / sports, activities and other co - curricular activities held in school.</p>
                    <p>Students are prohibited from bringing cell phones, discs, walkmans, ipods or CDs to school. Confiscated items will not be returned. On the occasion that it may be essential to bring a mobile phone to school, it must be handed over at the school office at the beginning of the day.</p>
                    <p>The Department of Education has strictly prohibited students from riding/driving any motorized vehicle.</p>
                    <p>Any communication (request / complaint / excuse) made by parents should be addressed to the principal and not to the class teacher.</p>
                </div>
            </div>
        </div>
    </section>