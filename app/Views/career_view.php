<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", ['title' => 'Career']) ?>
    <link href="<?= base_url('/libs/simple-datatables/style.css') ?>" rel="stylesheet" type="text/css" />
    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <!-- Top Bar Start -->
    <?= $this->include('partials/topbar') ?>
    <!-- Top Bar End -->
    <!-- leftbar-tab-menu -->
    <?= $this->include('partials/startbar') ?>
    <!-- end leftbar-tab-menu-->

    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-xxl">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-10">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h1 class=" mb-0">Career Details</h1>
                                <a href="<?= base_url('adm1n/career') ?>" class="btn bg-colour">
                                    <i class="icofont-arrow-left"></i> Back to Careers
                                </a>
                            </div>
                            <!--end card-header-->
                            <div class="card-body pt-0">
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
                                    <!-- Career Table -->
                                    <!-- career_view.php -->
                                    <div class="container">

                                        <h2><?= esc($career['job_title']) ?></h2>

                                        <p><strong>Job Type:</strong> <?= esc($career['job_type']) ?></p>
                                        <p><strong>Employment Type:</strong> <?= esc($career['employment_type']) ?></p>
                                        <p><strong>Location:</strong> <?= esc($career['location']) ?></p>
                                        <p><strong>Posted On:</strong> <?= esc($career['posted_on']) ?></p>
                                        <p><strong>Last Applied Date:</strong> <?= esc($career['last_applied_date']) ?>
                                        </p>
                                        <p><strong>Job Overview:</strong> <?= esc($career['job_overview']) ?></p>
                                        <p><strong>Qualifications:</strong> <?= esc($career['qualifications']) ?></p>
                                        <p><strong>Experience:</strong> <?= esc($career['experience']) ?> years</p>
                                        <p><strong>Key Responsibilities:</strong>
                                            <?= esc($career['key_responsibilities']) ?></p>
                                        <p><strong>Must Have:</strong> <?= esc($career['must_have']) ?></p>
                                        <p><strong>Nice to Have:</strong> <?= esc($career['nice_to_have']) ?></p>
                                    </div>
                                    <!--end /tableresponsive-->
                                    <a href="<?= base_url('adm1n/career/edit/' . $career['career_id']) ?>">
                                        <button class="btn btn-sm bg-colour">Edit</button>
                                    </a>
                                    <!--end /tableresponsive-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <?= $this->include('partials/footer') ?>
                    <!--end footer-->
                </div>
                <!-- end page content -->
            </div>
            <!-- end page-wrapper -->

            <!-- Javascript  -->
            <?= $this->include('partials/vendorjs') ?>
            <script src="<?= base_url('/libs/simple-datatables/umd/simple-datatables.js') ?>"></script>
            <script src="<?= base_url('/js/pages/datatable.init.js') ?>"></script>
            <script src="<?= base_url('/js/app.js') ?>"></script>
</body>
<!--end body-->

</html>