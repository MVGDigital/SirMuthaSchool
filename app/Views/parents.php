<main>
    <!-- Banner Section -->
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
    <!-- Banner Section -->

    <!-- Section Menus -->
    <section class="container-space innerMenus-sec">
        <div class="innerMenus">
            <ul>
                <li><a href="parents#parentsportal" class="active">Parent Portal</a></li>
                <li><a href="parents#association">Parent Association</a></li>
                <li><a href="parents#resources">Resources</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Welcome To <span> Sir Mutha School !</span></h3>
            <h6>"At Sir Mutha School, our Parent Page offers essential tools for active involvement in your child's education. From the Parent Portal for real-time updates to the Parent Association for community engagement and a comprehensive Resources section, we ensure parents have the support and information needed for a seamless school experience."</h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Parent Portal -->
    <section id="parentsportal" class="wave-sec wave-yellowWith-bottom-img container-space ptb-80">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-5 col-xl-6">
                <img src="<?= base_url('images/parents/parents_portal.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-5 mobContTop-p-tb50">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Parent <span> Portal</span></h3>
                    <p>The Parent Portal at Lady Andal IB School is designed to streamline communication and provide quick access to essential resources for parents. 
                    Stay informed with academic calendars, fee payment systems, and classroom schedules at your fingertips
                    </p>
                    <p>The portal also offers real-time updates on school events, exam schedules, and important notices, ensuring you are always connected to your child’s educational journey.
                    With its intuitive interface, the Parent Portal empowers parents to actively engage with the school community and support their child’s learning experience.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Parent Portal -->

    <!-- Parent Association -->
    <section id="association" class="wave-sec white-bgImg">
        <div class="itemSpaceBetween">
            <div class="col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/parents/parents_association.png') ?>" class="img-fluid" alt="Lady Andal">
            </div>
            <div class="col-md-12 col-lg-7 col-xl-7 mobContTop-p-tb50 plr-80">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>Parent <span> Association</span></h3>
                    <p>At Lady Andal IB School, the Parent Association plays a crucial role in fostering a strong partnership between families and the school.
                    This vibrant group provides parents with opportunities to contribute through volunteering, event coordination, and fundraising activities. 
                    </p>
                    <p>Whether organizing cultural events, supporting academic initiatives, or assisting with charity drives, the Parent Association is central to building a collaborative and enriching environment. 
                    this group not only allows parents to make a meaningful impact but also helps create lifelong connections within the school community.
                    </p>
                    <!--<div class="blueBtn-medium">-->
                    <!--    <a href="#">Know More</a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>
    <!-- Parent Association -->

    <!-- Resource -->
    <section id="resources" class="wave-sec blueBg-Sec lightYellow-wave-bottom-img">
        <div class="itemSpaceBetween">
            <div class="col-12 col-md-12 col-lg-7 col-xl-7 mobContTop-p-tb50 plr-80">
                <div class="sectionTitle-white lft-rgt-content">
                    <h3><span>Resources</span></h3>
                    <p>The Resources section is your one-stop hub for practical tools and information. From student handbooks that outline policies and expectations to updated lunch menus and uniform guidelines, this section ensures that parents have easy access to essential documents. Designed for convenience, it keeps parents informed and prepared, helping them navigate the school year with ease. At Lady Andal IB School, we believe in providing resources that make school life more organized and enjoyable for both parents and students.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/parents/parent_resources.png') ?>" class="img-fluid w100"
                    alt="Lady Andal">
            </div>
        </div>
    </section>
    <!-- Resource -->