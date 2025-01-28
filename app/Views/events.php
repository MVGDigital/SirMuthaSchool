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
        <div class="innerMenus">
            <ul>
                <li><a href="<?= base_url('events/#upcomingEvents') ?>" class="active">Upcoming Events</a></li>
                <li><a href="<?= base_url('events/#pastEvents') ?>">Past Events</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Events From <span>Sir Mutha</span></h3>
            <h6>Explore a dynamic timeline of past and upcoming events, reflecting the school’s vibrant culture. From academic achievements to cultural celebrations, discover moments that unite our community and showcase the talents and accomplishments of our students and staff. Stay informed and connected through this engaging platform.</h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!--  Upcoming Events -->
    <section id="upcomingEvents" class="container-space lightColor-bg pt-60 pb-100">
        <div class="sectionTitle-blue m-auto">
            <h3>Upcoming<span> Events</span></h3>

            <form id="sort-by-key" class="eventsSearch" action="<?= base_url('career/searchJobs') ?>" method="get">
                <div class="shortBySearch">
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback">
                            <img src="<?= base_url('images/searchIcon.svg') ?>" alt="Search icon">
                        </span>
                        <input type="text" class="searchInput form-control" name="keyword"
                            placeholder="Search Events">
                    </div>
                    <select class="selectDropdown" id="jobCategory" name="selectDropdown">
                        <option value="" selected="selected">Select Month</option>
                    </select>
                </div>
            </form>
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
                                    <!-- <div class="eventRegCount">
                                        <span>+66</span>
                                    </div> -->
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
    <section id="pastEvents" class="container-space ptb-80">
        <div class="sectionTitle-blue col-lg-10 m-auto">
            <h3>Past<span> Events</span></h3>
        </div>

        <?php foreach ($past_events as $event): ?>
        <div class="pastEvent-container pastEvent-items row w100">
            <div class="col-12 col-md-12 col-lg-5 col-xl-4">
                <img src="<?= base_url('images/events/past-event-1.jpg') ?>" class="img-fluid w100"
                    alt="<?= esc($event['event_name']) ?>">
            </div>
            <div class="col-12 col-md-12 col-lg-7 col-xl-8 mobContTop-p50 ">
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

        <!-- Past Event Grid Cards-->
        <div class="text-center m-3">
            <div id="loader">
                <div id="loader" class="spinner"></div>
            </div>
        </div>
        </section>
        <!-- Past Events -->