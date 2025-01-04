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

    <!--  Upcoming Events -->
    <section class="container-space lightColor-bg pt-60 pb-100">
        <div class="sectionTitle-blue col-lg-10 m-auto">
            <h3>Upcoming<span> Events</span></h3>
        </div>
        <div id="upcoming-events" class="splide paginationCenter cardSlider mt-50">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($upcoming_events as $event): ?>
                    <li class="splide__slide">
                        <div class="slider-card">
                            <div class="card-content">
                                <div class="eventFullDate">
                                    <h5><?= date('d', strtotime($event['event_date'])) ?></h5>
                                    <div class="eventDate">
                                        <p><?= date('l', strtotime($event['event_date'])) ?></p>
                                        <span><?= date('F, Y', strtotime($event['event_date'])) ?></span>
                                    </div>
                                </div>
                                <div class="upcomingEvent-info">
                                    <div class="eventTitle">
                                        <h6><?= esc($event['event_name']) ?></h6>
                                        <p>Starts at <?= esc($event['start_time']) ?></p>
                                    </div>
                                    <div class="eventRegCount">
                                        <span>+66</span>
                                    </div>
                                </div>
                                <form action="<?= base_url('events/set-event-details') ?>" method="POST"
                                    style="display: inline;">
                                    <input type="hidden" name="event_id" value="<?= $event['id'] ?>">
                                    <input type="hidden" name="event_type" value="upcoming">
                                    <button type="submit" class="upcomEvent-link">View Details</button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- Past Events -->
    <section class="container-space ptb-80">
        <div class="sectionTitle-blue col-lg-10 m-auto">
            <h3>Past<span> Events</span></h3>
        </div>

        <?php foreach ($past_events as $event): ?>
        <div class="pastEvent-container row w100">
            <div class="col-12 col-md-12 col-lg-5 col-xl-4">
                <img src="<?= base_url('images/events/past-event-1.jpg') ?>" class="img-fluid w100" alt="<?= esc($event['event_name']) ?>">
            </div>
            <div class="col-12 col-md-12 col-lg-7 col-xl-8 mobContTop-p50">
                <h6><?= esc($event['event_name']) ?> - <?= date('Y', strtotime($event['event_date'])) ?></h6>
                <div class="event-date">
                    <img src="<?= base_url('images/calendar.svg') ?>" class="img-fluid" alt="Event date Icon">
                    <span><?= date('d F Y', strtotime($event['event_date'])) ?></span>
                </div>
                <p><?= esc($event['event_description']) ?></p>
                <form action="<?= base_url('events/set-event-details') ?>" method="POST" style="display: inline;">
                    <input type="hidden" name="event_id" value="<?= $event['id'] ?>">
                    <input type="hidden" name="event_type" value="past">
                    <button type="submit" class="upcomEvent-link">View Details</button>
                </form>
            </div>
        </div>
        <?php endforeach; ?>
    </section>
    <!-- Past Events -->