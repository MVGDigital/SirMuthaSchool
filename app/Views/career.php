<main>
    <!-- Banner Section -->
    <section class="banner-section">
        <img src="<?= base_url('images/about/about-banner.jpg') ?>" class="img-fluid"
            alt="Sir mutha about banner image">
        <div class="bannerTitle">
            <h1>Sir Mutha School</h1>
            <p>A unit of the madras seva sadan</p>
        </div>
        <div class="banner-subTitle">
            <h2>Careers</h2>
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
            <h3>Current <span> Vacancies</span></h3>
            <h6>The Madras Seva Sadan was founded in 1928 by Sir & Lady M. Venkatasubba Rao with their personal initial
                contribution of Rs. 10,000/- and further contributions on a continuous basis. Sir M. Venkatasubba Rao
                was the Founder-President and Lady M. Venkatasubba Rao was the Founder Honorary General Secretary and
                Treasurer.</h6>
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
                <button class="menu-button">
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
                        <a href="#">Apply Here</a>
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

    </section>