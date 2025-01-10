<main>
    <!-- Banner Section -->
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

        <div class="backBtn">
            <a href="<?= base_url('career') ?>">
                <img src="<?= base_url('images/backBtnArrow.svg') ?>" alt="Back Button Arrow">
                Back</a>
        </div>

        <div class="careerForm-container">
            <div class="col-12 col-md-12 col-lg-12 col-xl-8 m-auto">
                <?php if (isset($job_details)): ?>
                <div class="selected-job-details">
                    <h3 class="text-center"><?= esc($job_details['job_title']) ?></h3>
                </div>
                <?php endif; ?>
                <h6>fill in your details</h6>
                <form id="career-form" action="<?= base_url('career/apply') ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php if (session()->getFlashdata('message')): ?>
                    <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('errors')): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                            <li><?= esc($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <input type="hidden" name="job_id" value="<?= esc($job_details['career_id']) ?>">
                    <div class="col-12 col-md-12 col-lg-12 fields">
                        <label for="first-name">First Name</label>
                        <input type="text" name="first-name" id="first-name" placeholder="Enter first name">
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 fields">
                        <label for="last-name">Last Name</label>
                        <input type="text" name="last-name" id="last-name" placeholder="Enter last name">
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 fields">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter email">
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 fields">
                        <label for="mobile-number">Phone Number</label>
                        <input type="tel" name="mobile-number" id="mobile-number" placeholder="Enter phone number">
                    </div>
                    <h6>Upload your resume</h6>

                    <div class="file-upload-container">
                        <label for="fileUpload" class="file-upload-label">
                            <div class="file-upload-icon">
                                <img src="<?= base_url('images/uploadImg-cv.svg') ?>" alt="Upload cv file image">
                            </div>
                            <span class="file-upload-text">Drag & Drop your file(s) here to upload <br>or
                                <span>Select File</span></span>
                        </label>
                        <input type="file" id="fileUpload" name="fileUpload" accept=".pdf,.doc,.docx,.txt"
                            class="file-upload-input" />
                        <div class="itemSpaceBetween upload-doc-msg">
                            <div class="file-info">
                                <img src="<?= base_url('images/file-info.svg') ?>"
                                    alt="Lady andal upload cv information icon">
                                <span>File can be any format</span>
                                <div class="hoverInfo">
                                    <p>Please upload your resume in any format (e.g., PDF, DOC, DOCX, TXT). Ensure the
                                        file size is within the allowable limit.</p>
                                </div>
                            </div>
                            <div id="fileError" class="file-info">Maximum Limit: 2Mb</div>
                        </div>
                    </div>

                    <div class="formBtn-fullWidth col-8 col-md-6 col-lg-6 col-xl-4 m-auto">
                        <button id="submitBtn" type='sumit'>Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </section>