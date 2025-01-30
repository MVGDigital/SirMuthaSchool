<?= $this->include('partials/html') ?>

<head>
    <?= view("partials/title-meta", ['title' => 'View Event']) ?>
    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <!-- Top Bar Start -->
    <?= $this->include('partials/topbar') ?>
    <!-- Top Bar End -->

    <!-- Left Bar Menu -->
    <?= $this->include('partials/startbar') ?>
    <!-- End Left Bar Menu -->

    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="page-content">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-12">
                        <a href="<?= base_url('adm1n/event-list') ?>" class="btn bg-colour mb-3">Back</a>
                        <!-- <a href="<?= base_url('adm1n/event-list'); ?>"
                                        class="btn btn-secondary mt-2">Cancel</a> -->
                    </div>
                    <div class="col-12 align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded bg-light">
                            <h4 class="mb-0">Event Details</h4>
                        </div>
                    </div>
                </div>

                <!-- Event Details -->
                <div class="row">
                    <div class="col-12 col-lg-10 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><strong>Event Name:</strong> <?= esc($event['event_name']) ?>
                                </h5>
                                <p><strong>Date:</strong> <?= esc($event['event_date']) ?></p>
                                <p><strong>Time:</strong> <?= esc($event['start_time']) ?> -
                                    <?= esc($event['end_time']) ?></p>
                                <p><strong>Location:</strong> <?= esc($event['event_location']) ?></p>
                                <p><strong>Description:</strong> <?= esc($event['event_description']) ?></p>
                                <p><strong>Registration Required:</strong>
                                    <?= $event['registration_required'] ? 'Yes' : 'No' ?></p>
                                <p><strong>Published:</strong> <?= $event['is_published'] ? 'Yes' : 'No' ?></p>

                                <div class="mb-3">
                                    <strong>Desktop Image:</strong>
                                    <img src="<?= base_url('/uploads/desktop_images/') ?><?= esc($event['desktop_image']) ?>"
                                        alt="Desktop Image" width="150">
                                </div>
                                <div class="mb-3">
                                    <strong>Mobile Image:</strong>
                                    <img src="<?= base_url('/uploads/mobile_images/') ?><?= esc($event['mobile_image']) ?>"
                                        alt="Mobile Image" width="150">
                                </div>

                                <a href="<?= base_url('adm1n/events/edit/' . $event['id']); ?>"
                                    class="btn bg-colour">Edit Event</a>
                                <!-- <a href="<?= base_url('adm1n/events'); ?>" class="btn btn-secondary">Back to Events</a> -->
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- container -->

            <!-- Start Footer -->
            <?= $this->include('partials/footer') ?>
            <!-- End Footer -->
        </div>
        <!-- End page content -->
    </div>
    <!-- End page-wrapper -->

    <!-- Javascript -->
    <?= $this->include('partials/vendorjs') ?>
    <script src="<?= base_url('/js/app.js') ?>"></script>
</body>

</html>