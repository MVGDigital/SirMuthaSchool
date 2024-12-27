<main>
    <!-- Banner Section -->
    <section class="banner-section">
        <?php if (!empty($banner)): ?>
        <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid"
            alt="<?= esc($banner['title']); ?>">
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
                <li><a href="#" class="active">Upcoming Events</a></li>
                <li><a href="#">Past Events</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Events From <span>Sir Mutha</span></h3>
            <h6>The Madras Seva Sadan was founded in 1928 by Sir & Lady M. Venkatasubba Rao with their personal initial
                contribution of Rs. 10,000/- and further contributions on a continuous basis. Sir M. Venkatasubba Rao
                was the Founder-President and Lady M. Venkatasubba Rao was the Founder Honorary General Secretary and
                Treasurer.</h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Event Details -->
    <section class="event-details-sec">
        <div class="img-overwite-wave">
            <img src="<?= base_url('images/facilities/green-capus.jpg') ?>" class="img-fluid" alt="">
        </div>

        <div class="container-space wave-yellow-overwireLightBg ptb-80-30">
            <div class="col-lg-10 m-auto">
                <h5>Sir Mutha Festival - 2024</h5>
                <div class="event-location">
                    <div class="eveDates">
                        <img src="<?= base_url('images/eventDate-Icon.svg') ?>" alt="">
                        <span>17 October 2024</span>
                    </div>
                    <div class="eveDates">
                        <img src="<?= base_url('images/eventClock-Icon.svg') ?>" alt="">
                        <span>09:00 AM to 12:30 PM</span>
                    </div>
                    <div class="eveDates">
                        <img src="<?= base_url('images/eventLoc-Icon.svg') ?>" alt="">
                        <span>Lady Andal School</span>
                    </div>
                </div>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                
            </div>
        </div>
     </section>
    <!-- Event Details -->

    <!-- Contact Form -->
    <section class="container-space lightColor-bg eventRegBg">
        <div class="contact-container">
            <div class="col-lg-6 contact-details-container m-auto">
                <div class="regForm">
                    <div class="sectionTitle-white">
                        <h3>Register for this event</h3>
                    </div>
                    <form id="event-form" class="mt-50" action="POST">
                        <div class="formFields row w100 m-0">
                            <div class="col-12 col-md-6 col-lg-6 fields m-0">
                                <label for="first-name">First Name</label>
                                <input type="text" name="first-name" id="first-name">
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 fields m-0">
                                <label for="last-name">Last Name</label>
                                <input type="text" name="last-name" id="last-name">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 fields">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 fields">
                            <label for="mobile-number">Phone Number</label>
                            <input type="tel" name="mobile-number" id="mobile-number">
                        </div>
                        <div class="formBtn-fullWidth">
                            <button>Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form -->

    