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
                    <h3>RULES OF THE SCHOOL</h3>
                    <h3>FOR PARENTS</h3>
                    <p>Provide a conducive environment for studies at home.</p>
                    <p> Assist & guide your ward in doing his/her home - work.</p>
                    <p>Please check your ward's school calendar regularly and ensure that the assigned home - work is done on time and countersign the remarks made in it.</p>
                    <p>You are always welcome to the school to follow up on the progress of your ward. You are requested not to disturb the class during school hours. However you may contact the Class teacher or subject teacher personally on Friday after school hours with prior appointment.</p>
                    <p>Please fill in the Leave Form in the calendar prior to the absence of your ward / or on returning to school in the event of sudden illness, duly attested by you. No leave letters please.</p>
                    <p>Please don't send your ward to school when he / she is suffering from any infectious disease.</p>
                    <p>Please ensure that your ward comes to school regularly in neat, clean and tidy school uniform and ID card.</p>
                    <p>It is compulsory to attend the Parent - Teacher meetings held in the school for regular updates.</p>
                    <p>Please ensure that your ward participates actively in games / sports, activities and other co - curricular activities held in school.</p>
                    <p>Students are prohibited from bringing cell phones, discmans, walkmans, ipods or CDs to school. Confiscated items will not be returned. On the occasion that it may be essential to bring a mobile phone to school, it must be handed over at the school office at the beginning of the day.</p>
                    <p>The Department of Education has strictly prohibited students from riding/driving any motorized vehicle.</p>
                    <p>Any communication (request / complaint / excuse) made by parents should be addressed to the principal and not to the class teacher.</p>
                    <h3>FOR STUDENTS</h3>
                    <p>Pupils should be polite and courteous to everyone and show due respect to the teachers, other authorities and all elders, in general. They should address the teacher politely using the appropriate terms of courtesy. They must stand when addressed by and when addressing all elders.</p>
                    <p>Pupils should see that the classrooms and school premises are always kept clean.</p>
                    <p>Pupils should be in school on time. The school gate will be closed at 7.40 a.m.</p>
                    <p>Any damage done to school property will have to be made good. The disciplinary action taken by the management in this regard is final.</p>
                    <p>Pupils are responsible for the safe custody of their books and belongings.</p>
                    <p>No books, newspapers or periodicals other than those prescribed should be brought to the school.</p>
                    <p>Pupils are expected to take part in extra-curricular activities of the school as part of their civic training.</p>
                    <p>Boys are not permitted to wear any jewellery.</p>
                    <p>Girls are not permitted to wear extra jewellery other than a pair of ear studs / rings. Tattoos are not permitted.</p>
                    <p>Pupils are not permitted to colour their hair or have fancy haircuts.</p>
                    <p>All pupils are required to sing bhajans at the Friday Assembly.</p>
                    <p>Pupils cannot bring any digital / Electronic devices to school (Mobile Phones, Laptops, Smart watches etc).</p>
                    <h3>TRANSFER CERTIFICATE</h3>
                    <p>Request for issue of Transfer Certificate must be given in writing by the parent / guardian of the pupil, addressed to the Principal on or before 30th March of the Scholastic year, if the student is not pursuing education in this school for the next academic year.</p>
                    <p>Transfer Certificate will be issued only to those who have fully settled all their dues and returned all borrowed articles including library books.</p>
                    <h3>LEAVE RULES</h3>
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