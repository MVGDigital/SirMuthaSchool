<!-- Annual Events -->
<section id="annual-events" class="container-space annual-event-waveBg blueBg-Sec ptb-80">
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Annual <span>Events</span></h3>
        </div>

        <!-- Thumbnail Slider -->
        <div id="thumbnail-slider" class="splide col-lg-8 m-auto">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($events_by_year as $year => $events): ?>
                    <li class="splide__slide"><span><?= $year ?></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- Main Slider -->
        <div id="annual-event" class="splide splideMain paginationCenter col-12 col-md-12 col-lg-12 col-xl-10 m-auto">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($events_by_year as $year => $events): ?>
                    <li class="splide__slide">
                        <div class="splide annual-event-imgs">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php foreach ($events as $event): ?>
                                    <li class="splide__slide">
                                        <div class="annualEventImg">
                                            <img src="<?= base_url('uploads/annual_events/' . $event['images']) ?>">
                                        </div>
                                        <div class="thumbContent">
                                            <h6><?= date('d M Y', strtotime($event['event_date'])) ?></h6>
                                            <p><?= $event['description'] ?></p>
                                            <div class="whiteBtn-medium">
                                                <!-- <a href="#">View Gallery</a> -->
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>
    <!-- Annual Events -->