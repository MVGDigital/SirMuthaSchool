<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Career Page')) ?>
    <link rel="stylesheet" href="<?= base_url('/libs/jsvectormap/jsvectormap.min.css') ?>">
    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <!-- Top Bar Start -->
    <?= $this->include('partials/topbar') ?>
    <!-- Top Bar End -->

    <!-- leftbar-tab-menu -->
    <?= $this->include('partials/startbar') ?>
    <!-- end leftbar-tab-menu -->

    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-xxl">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Add Job</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <form action="<?= base_url('adm1n/career/submit') ?>" method="post"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="formFields row w100 m-0">
                                                <!-- Display Success Message -->
                                                <?php if (session()->getFlashdata('success')): ?>
                                                <div id="success-alert" class="alert alert-success">
                                                    <?= session()->getFlashdata('success') ?>
                                                </div>
                                                <?php endif; ?>

                                                <!-- Display Error Message -->
                                                <?php if (session()->getFlashdata('error')): ?>
                                                <div id="danger-alert" class="alert alert-danger">
                                                    <?= session()->getFlashdata('error') ?>
                                                </div>
                                                <?php endif; ?>

                                                <!-- Display Validation Errors -->
                                                <?php if (session()->getFlashdata('errors')): ?>
                                                <div id="danger-alert" class="alert alert-danger">
                                                    <ul>
                                                        <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                                        <li><?= esc($error) ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                                <?php endif; ?>

                                                <div class="mb-3 row">
                                                    <label for="job-title" class="col-sm-4 col-form-label">Job
                                                        Title</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="job-title"
                                                            name="job_title"
                                                            value="<?= isset($career) ? htmlspecialchars($career['job_title']) : '' ?>">
                                                        <?php if (isset($validation) && $validation->getError('job_title')): ?>
                                                        <div class="text-danger">
                                                            <?= $validation->getError('job_title') ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="employment-type"
                                                        class="col-sm-4 col-form-label">Employment
                                                        Type</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-select" id="employment-type"
                                                            name="employment_type">
                                                            <option value="" disabled
                                                                <?= empty($career['employment_type']) ? 'selected' : '' ?>>
                                                                Select Employment Type</option>
                                                            <option value="Full-time"
                                                                <?= isset($career) && $career['employment_type'] === 'Full-time' ? 'selected' : '' ?>>
                                                                Full-time</option>
                                                            <option value="Part-time"
                                                                <?= isset($career) && $career['employment_type'] === 'Part-time' ? 'selected' : '' ?>>
                                                                Part-time</option>
                                                            <option value="Contract"
                                                                <?= isset($career) && $career['employment_type'] === 'Contract' ? 'selected' : '' ?>>
                                                                Contract</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="posted-on" class="col-sm-4 col-form-label">Posted
                                                        On</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="date" id="posted-on"
                                                            name="posted_on"
                                                            value="<?= isset($career) ? $career['posted_on'] : '' ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="location"
                                                        class="col-sm-4 col-form-label">Location</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="location"
                                                            name="location"
                                                            value="<?= isset($career) ? htmlspecialchars($career['location']) : '' ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="job-overview" class="col-sm-4 col-form-label">Job
                                                        Overview</label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" id="job-overview"
                                                            name="job_overview"
                                                            rows="4"><?= isset($career) ? htmlspecialchars($career['job_overview']) : '' ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="qualifications"
                                                        class="col-sm-4 col-form-label">Qualifications</label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" id="qualifications"
                                                            name="qualifications"
                                                            rows="3"><?= isset($career) ? htmlspecialchars($career['qualifications']) : '' ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="experience"
                                                        class="col-sm-4 col-form-label">Experience</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="number" id="experience"
                                                            name="experience" placeholder="Years of Experience"
                                                            value="<?= isset($career) ? htmlspecialchars($career['experience']) : '' ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="who-are-we-looking-for"
                                                        class="col-sm-4 col-form-label">Who
                                                        Are We Looking For</label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" id="who-are-we-looking-for"
                                                            name="who_are_we_looking_for"
                                                            rows="3"><?= isset($career) ? htmlspecialchars($career['who_are_we_looking_for']) : '' ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="key-responsibilities"
                                                        class="col-sm-4 col-form-label">Key
                                                        Responsibilities</label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" id="key-responsibilities"
                                                            name="key_responsibilities"
                                                            rows="3"><?= isset($career) ? htmlspecialchars($career['key_responsibilities']) : '' ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="must-have" class="col-sm-4 col-form-label">Must
                                                        Have</label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" id="must-have" name="must_have"
                                                            rows="3"><?= isset($career) ? htmlspecialchars($career['must_have']) : '' ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="nice-to-have" class="col-sm-4 col-form-label">Nice to
                                                        Have</label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" id="nice-to-have"
                                                            name="nice_to_have"
                                                            rows="3"><?= isset($career) ? htmlspecialchars($career['nice_to_have']) : '' ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="last-applied-date" class="col-sm-4 col-form-label">Last
                                                        Applied Date</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="date" id="last-applied-date"
                                                            name="last_applied_date"
                                                            value="<?= isset($career) ? $career['last_applied_date'] : '' ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="publish" class="col-sm-4 col-form-label">Publish</label>
                                                    <div class="col-sm-8">
                                                        <input type="hidden" name="publish" value="0">
                                                        <input type="checkbox" id="publish" name="publish" value="1"
                                                            <?= isset($career) && $career['publish'] ? 'checked' : '' ?>>
                                                        <label for="publish" class="form-check-label">Publish this
                                                            job</label>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <div class="col-sm-8 offset-sm-4">
                                                        <button type="submit" class="btn bg-colour">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->include('partials/footer') ?>
        </div>
    </div>

    <!-- Javascript  -->
    <?= $this->include('partials/vendorjs') ?>
    <script src="<?= base_url('/libs/apexcharts/apexcharts.min.js') ?>"></script>
    <script src="<?= base_url('/libs/jsvectormap/jsvectormap.min.js') ?>"></script>
    <script src="<?= base_url('/libs/jsvectormap/maps/world.js') ?>"></script>
    <script src="<?= base_url('/js/pages/index.init.js') ?>"></script>
    <script src="<?= base_url('/js/app.js') ?>"></script>
    <script>
    setTimeout(function() {
        var successAlert = document.getElementById('success-alert');
        var errorAlert = document.getElementById('error-alert');

        if (successAlert) {
            successAlert.style.display = 'none';
        }

        if (errorAlert) {
            errorAlert.style.display = 'none';
        }
    }, 5000);
    </script>
</body>

</html>