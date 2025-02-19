<main>
    <!-- Banner Section -->
    <section class="banner-section">
        <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid deskTopImg"
            alt="<?= esc($banner['title']); ?>">
        <img src="<?= base_url('uploads/banner_images/' . $banner['mobile_image']); ?>" class="img-fluid mobImg w100"
            alt="Banner image">
        
        <div class="banner-subTitle">
            <h2><?= esc($banner['title']); ?></h2>
        </div>

    </section>
    <!-- Banner Section -->

    <!-- Section Menus -->
    <section class="container-space innerMenus-sec">
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Careers at <span> Sir Mutha School</span></h3> 
            <h6>Join the esteemed faculty and staff at Sir Mutha School. Explore the available
positions and become part of a dedicated team committed to promoting excellence
in education. We are seeking passionate teachers who are eager to inspire, guide,
and contribute to shaping the future of our students. When you work with us, you
will become part of a team that is making a real difference in the community.</h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Jobs Section -->
    <section class="container-space ptb-80">
        <div class="jobTitleSec">
            <h4>Search for job Openings</h4>
        </div>
        <form id="sort-by-key" action="<?= base_url('career/searchJobs') ?>" method="get">
            <div class="shortBySearch">
                <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback">
                        <img src="<?= base_url('images/searchIcon.svg') ?>" alt="Search icon">
                    </span>
                    <input type="text" class="searchInput form-control" name="keyword"
                        placeholder="Search for job by title or keyword">
                </div>
                <select class="job-category" id="jobCategory" name="category">
                    <option value="" selected="selected">Select Category</option>
                    <?php foreach ($categories as $category): ?>
                    <option value="<?= esc($category['job_title']) ?>"><?= esc($category['job_title']) ?></option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" class="job-searchBtn form-btn">Search</button>
            </div>
        </form>
        <div class="jobCounts">
            <h5>Total jobs found <span id="totalJobs">(<?= $total_jobs ?>)</span></h5>
        </div>
        <div class="accordion-container">
            <?php foreach ($jobs as $job): ?>
            <div class="accordion">
                <button class="menu-button jobItems">
                    <div class="jobInfo">
                        <h5><?= esc($job['job_title']) ?></h5>
                        <h6><?= esc($job['employment_type']) ?> - <?= esc($job['location']) ?></h6>
                        <div class="job-location-details">
                            <div class="job-locDetails">
                                <img src="<?= base_url('images/joblocationIcon.svg') ?>" alt="Job Location">
                                <p><span><?= esc($job['location']) ?></span></p>
                            </div>
                            <div class="job-locDetails">
                                <img src="<?= base_url('images/jobIcon.svg') ?>" alt="Employment Type">
                                <p><span><?= esc($job['employment_type']) ?></span></p>
                            </div>
                            <div class="job-locDetails">
                                <img src="<?= base_url('images/posted-dateIcon.svg') ?>" alt="Posted Date">
                                <p>Posted on - <span><?= esc($job['posted_on']) ?></span></p>
                            </div>
                            <div class="job-locDetails">
                                <img src="<?= base_url('images/last-dateIcon.svg') ?>" alt="Last Date">
                                <p>Last date to apply - <span><?= esc($job['last_applied_date']) ?></span></p>
                            </div>
                        </div>
                        <p><b>Job Overview:</b> <span><?= esc($job['job_overview']) ?></span></p>
                    </div>
                    <div class="jobHyp-link">
                        <a href="<?= base_url('career/form') ?>" class="apply-link"
                            data-job-id="<?= esc($job['career_id']) ?>">Apply Here</a>
                        <span class="icon">&plus;</span>
                    </div>
                </button>
                <div class="content">
                    <h6>Key Responsibilities :</h6>
                    <ul>
                        <li><?= esc($job['key_responsibilities']) ?></li>
                    </ul>
                    <h6>Qualifications :</h6>
                    <ul>
                        <li><?= esc($job['qualifications']) ?></li>
                    </ul>
                    <h6>Experience Required :</h6>
                    <ul>
                        <li><?= esc($job['experience']) ?></li>
                    </ul>
                    <h6>Who We Are Looking For :</h6>
                    <ul>
                        <li><?= esc($job['who_are_we_looking_for']) ?></li>
                    </ul>
                    <h6>Must Have :</h6>
                    <ul>
                        <li><?= esc($job['must_have']) ?></li>
                    </ul>
                    <h6>Nice to Have :</h6>
                    <ul>
                        <li><?= esc($job['nice_to_have']) ?></li>
                    </ul>
                    <h6>Last Date to Apply :</h6>
                    <p><?= esc($job['last_applied_date']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Past Event Grid Cards-->
        <div class="text-center m-3">
            <div id="loader">
                <div id="loader" class="spinner"></div>
            </div>
        </div>

    </section>