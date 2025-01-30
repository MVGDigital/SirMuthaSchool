<main>
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="bannerImg-OverlayContainer"></div>
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

        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <!-- <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Events From <span>Sir Mutha</span></h3>
            <h6>The Madras Seva Sadan was founded in 1928 by Sir & Lady M. Venkatasubba Rao with their personal initial
                contribution of Rs. 10,000/- and further contributions on a continuous basis. Sir M. Venkatasubba Rao
                was the Founder-President and Lady M. Venkatasubba Rao was the Founder Honorary General Secretary and
                Treasurer.</h6>
        </div> -->
    </section>
    <!-- Section Menus -->

    <!-- Event Details -->
    <section class="event-details-sec">
        <div class="img-overwite-wave">
            <img src="<?= base_url('uploads/desktop_images/'. $event['desktop_image']);?>" class="img-fluid deskTopImg w100"
                alt="<?= esc($event['event_name']) ?>">
            <img src="<?= base_url('images/facilities/green-capus.jpg') ?>" class="img-fluid mobImg w100" alt="Sir Mutha event images">
        </div>

        <div class="container-space wave-yellow-overwireLightBg ptb-80-30">
            <div class="col-lg-10 m-auto">
                <h5><?= esc($event['event_name']) ?></h5>
                <div class="event-location">
                    <div class="eveDates">
                        <img src="<?= base_url('images/eventDate-Icon.svg') ?>" alt="">
                        <span><?= date('d F Y', strtotime($event['event_date'])) ?></span>
                    </div>
                    <div class="eveDates">
                        <img src="<?= base_url('images/eventClock-Icon.svg') ?>" alt="">
                        <span><?= $event['start_time'] ?> to <?= $event['end_time'] ?></span>
                    </div>
                    <div class="eveDates">
                        <img src="<?= base_url('images/eventLoc-Icon.svg') ?>" alt="">
                        <span><?= esc($event['event_location']) ?></span>
                    </div>
                </div>

                <p><?= esc($event['event_description']) ?></p>
            </div>
        </div>
    </section>
    <!-- Event Details -->

    <script>
    console.log('Show Registration Form: <?= $show_registration_form ?>');
    </script>
    <!-- Contact Form -->
    <?php if ($show_registration_form): ?>
    <section class="container-space lightColor-bg eventRegBg">
        <div class="contact-container">
            <div class="col-12 col-md-11 col-lg-8 col-xl-6 contact-details-container m-auto">
                <div class="regForm">
                    <div class="sectionTitle-white">
                        <h3>Register for this event</h3>
                    </div>

                    <?php if (session('success')): ?>
                    <div class="flash-msg" id="flash-message">
                        <?= session('success') ?>
                    </div>
                    <script>
                    setTimeout(() => {
                        window.location.href = "<?= base_url('events') ?>";
                    }, 3000);
                    </script>
                    <?php endif; ?>

                    <?php if (session('error')): ?>
                    <div class="flash-erroeMsg">
                        <?= session('error') ?>
                    </div>
                    <script>
                    setTimeout(() => {
                        window.location.href = "<?= base_url('events') ?>";
                    }, 3000);
                    </script>
                    <?php endif; ?>

                    <form id="event-form" class="mt-50" action="<?= base_url('events/register') ?>" method="POST">
                        <div class="formFields row w100 m-0">
                            <div class="col-12 col-md-6 col-lg-6 fields m-0">
                                <label for="first-name">First Name</label>
                                <input type="text" name="first-name" id="first-name" value="<?= old('first-name') ?>">
                                <?php if (session('errors.first-name')): ?>
                                <span class="text-danger"><?= session('errors.first-name') ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 fields m-0">
                                <label for="last-name">Last Name</label>
                                <input type="text" name="last-name" id="last-name" value="<?= old('last-name') ?>">
                                <?php if (session('errors.last-name')): ?>
                                <span class="text-danger"><?= session('errors.last-name') ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 fields">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="<?= old('email') ?>">
                            <?php if (session('errors.email')): ?>
                            <span class="text-danger"><?= session('errors.email') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 fields">
                            <label for="mobile-number">Phone Number</label>
                            <input type="tel" name="mobile-number" id="mobile-number"
                                value="<?= old('mobile-number') ?>">
                            <?php if (session('errors.mobile-number')): ?>
                            <span class="text-danger"><?= session('errors.mobile-number') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 fields">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender">
                                <option value="" selected disabled>Select gender</option>
                                <option value="Male" <?= old('gender') === 'Male' ? 'selected' : '' ?>>Male</option>
                                <option value="Female" <?= old('gender') === 'Female' ? 'selected' : '' ?>>Female
                                </option>
                                <option value="Other" <?= old('gender') === 'Other' ? 'selected' : '' ?>>Other</option>
                            </select>
                            <?php if (session('errors.gender')): ?>
                            <span class="text-danger"><?= session('errors.gender') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 fields">
                            <label for="guests">How many guests are you bringing?</label>
                            <input type="text" name="guests" id="guests" value="<?= old('guests') ?>"
                                placeholder="Enter number of guests">
                            <?php if (session('errors.guests')): ?>
                            <span class="text-danger"><?= session('errors.guests') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 fields">
                            <label for="residential-address">Residential Address</label>
                            <textarea id="residential-address" name="residential_address"
                                placeholder="Enter residential address"><?= old('residential_address') ?></textarea>
                            <?php if (session('errors.residential_address')): ?>
                            <span class="text-danger"><?= session('errors.residential_address') ?></span>
                            <?php endif; ?>
                        </div>
                        <div class="formBtn-fullWidth">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- Contact Form -->