<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Rizz Admin Dashboard')) ?>
    <link rel="stylesheet" href="/libs/jsvectormap/jsvectormap.min.css">
    <?= $this->include('partials/head-css') ?>
    <style>
    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: transparent;
    }

    .card-body {
        background-color: #fff;
        padding: 20px;
        border-radius: 7px;
    }

    .icon-banner {
        color: #007bff;
    }

    .icon-career {
        color: #28a745;
    }

    .icon-event {
        color: #ffc107;
    }

    .icon-admission {
        color: #dc3545;
    }

    .icon-about {
        color: #6f42c1;
    }

    .icon-contact {
        color: #17a2b8;
    }

    .icon-academic {
        color: #fd7e14;
    }

    .icon-broucher {
        color: #007bff;
    }
    </style>
</head>

<body>
    <!-- Top Bar Start -->
    <?= $this->include('partials/topbar') ?>
    <!-- Top Bar End -->

    <!-- Left Bar -->
    <?= $this->include('partials/startbar') ?>
    <!-- End Left Bar -->

    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="page-content">
            <div class="container-xxl">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title text-center">Admin Dashboard</h2>
                            </div>
                            <!-- Card Header End -->

                            <div class="card-body">
                                <div class="row">
                                    <!-- Banners Section -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <img src="https://img.icons8.com/?size=1000&id=yF8LPIFelJU7&format=png&color=007bff"
                                                    alt="Banners Icon" class="display-4"
                                                    style="width: 60px; height: 60px;">
                                                <h5 class="card-title">Banners</h5>
                                                <p class="card-text">Manage website banners.</p>
                                                <a href="<?= base_url('adm1n/banner'); ?>" class="btn bg-colour">Manage
                                                    Banners</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Careers Section -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <i class="icofont-search-job display-4 icon-career"></i>
                                                <h5 class="card-title">Careers</h5>
                                                <p class="card-text">View job postings and applications.</p>
                                                <a href="<?= base_url('adm1n/career'); ?>" class="btn bg-colour">Manage
                                                    Careers</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Events Section -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <i class="fa-solid fa-calendar-days display-4 icon-event"></i>
                                                <h5 class="card-title">Events</h5>
                                                <p class="card-text">Manage events and registrations.</p>
                                                <a href="<?= base_url('adm1n/event-list'); ?>"
                                                    class="btn bg-colour">View Events</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Admissions Section -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <i class="fa-solid fa-school display-4 icon-admission"></i>
                                                <h5 class="card-title">Admissions</h5>
                                                <p class="card-text">View and manage admission and FAQ.</p>
                                                <a href="<?= base_url('adm1n/kindergarten'); ?>"
                                                    class="btn bg-colour">Manage Admissions</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- About Us Section -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <i class="icofont-users-alt-3 display-4 icon-about"></i>
                                                <h5 class="card-title">About Us</h5>
                                                <p class="card-text">Manage information about the teachers.</p>
                                                <a href="<?= base_url('adm1n/teacher'); ?>" class="btn bg-colour">View
                                                    Teachers</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Contact Us Section -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <i class="fa-solid fa-square-phone display-4 icon-contact"></i>
                                                <h5 class="card-title">Contact Us</h5>
                                                <p class="card-text">View and manage contact inquiries.</p>
                                                <a href="<?= base_url('adm1n/contact'); ?>" class="btn bg-colour">Manage
                                                    Contacts</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Academic Section -->
                                    <div class="col-md-4 mb-3">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <i class="fa-solid fa-graduation-cap display-4 icon-academic"></i>
                                                <h5 class="card-title">Academic</h5>
                                                <p class="card-text">Upload and manage academic documents.</p>
                                                <a href="<?= base_url('adm1n/document'); ?>"
                                                    class="btn bg-colour">Manage Documents</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <i class="iconoir-quote-solid display-4 icon-broucher"></i>
                                                <h5 class="card-title">Broucher & Policies</h5>
                                                <p class="card-text">Manage Broucher & Policies</p>
                                                <a href="<?= base_url('adm1n/brochure_policies'); ?>" class="btn bg-colour">Broucher & Policies</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card Body End -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Column -->
                </div>
                <!-- End Row -->
                <?= $this->include('partials/footer') ?>
            </div>
            <!-- End Container -->
        </div>
        <!-- End Page Content -->
    </div>
    <!-- End Page Wrapper -->

    <!-- JavaScript -->
    <?= $this->include('partials/vendorjs') ?>
    <script src="/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/libs/jsvectormap/jsvectormap.min.js"></script>
    <script src="/libs/jsvectormap/maps/world.js"></script>
    <script src="/js/pages/index.init.js"></script>
    <script src="/js/app.js"></script>

</body>
<!-- End Body -->

</html>