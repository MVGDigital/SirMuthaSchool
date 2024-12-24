<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Edit Event')) ?>
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
            <!-- <div class="row">
                    <div class="col-12">
                        <a href="javascript:history.back()" class="btn btn-light mb-3">Back</a>
                    </div>
                </div> -->

            <div class="container-xxl">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded bg-light">
                            <div class="w-sm-100 mr-auto">
                                <h4 class="mb-0">Edit Event</h4>
                            </div>
                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <!-- Breadcrumb if needed -->
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Edit Event Form -->
                <div class="row">
                    <div class="col-12 col-lg-10 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('adm1n/events/update/' . $event['id']); ?>" method="post"
                                    enctype="multipart/form-data">
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
                                    <div class="form-group mb-3" style="max-width:500px">
                                        <label for="event_name">Event Title</label>
                                        <input type="text" class="form-control" id="event_name" name="event_name"
                                            value="<?= esc($event['event_name']); ?>" required>
                                    </div>
                                    <div class="form-group mb-3" style="max-width:500px">
                                        <label for="event_date">Event Date</label>
                                        <input type="date" class="form-control" id="event_date" name="event_date"
                                            value="<?= esc($event['event_date']); ?>" required>
                                    </div>
                                    <div class="form-group mb-3" style="max-width:500px">
                                        <label for="start_time">Start Time</label>
                                        <input type="time" class="form-control" id="start_time" name="start_time"
                                            value="<?= esc($event['start_time']); ?>" required>
                                    </div>
                                    <div class="form-group mb-3" style="max-width:500px">
                                        <label for="end_time">End Time</label>
                                        <input type="time" class="form-control" id="end_time" name="end_time"
                                            value="<?= esc($event['end_time']); ?>" required>
                                    </div>
                                    <div class="form-group mb-3" style="max-width:500px">
                                        <label for="event_location">Event Location</label>
                                        <input type="text" class="form-control" id="event_location"
                                            name="event_location" value="<?= esc($event['event_location']); ?>"
                                            required>
                                    </div>
                                    <div class="form-group mb-3" style="max-width:500px">
                                        <label for="event_description">Event Description</label>
                                        <textarea class="form-control" id="event_description" name="event_description"
                                            rows="4" required><?= esc($event['event_description']); ?></textarea>
                                    </div>
                                    <div class="form-group mb-3" style="max-width:500px">
                                        <label for="registration_required">Registration Required</label>
                                        <select class="form-control" id="registration_required"
                                            name="registration_required">
                                            <option value="yes"
                                                <?= $event['registration_required'] === 'yes' ? 'selected' : ''; ?>>Yes
                                            </option>
                                            <option value="no"
                                                <?= $event['registration_required'] === 'no' ? 'selected' : ''; ?>>No
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3" style="max-width:500px">
                                        <label for="desktop_image">Desktop Image</label>
                                        <input type="file" class="form-control" id="desktop_image" name="desktop_image">
                                        <small>Current: <?= esc($event['desktop_image']); ?></small>
                                    </div>
                                    <div class="form-group mb-3" style="max-width:500px">
                                        <label for="mobile_image">Mobile Image</label>
                                        <input type="file" class="form-control" id="mobile_image" name="mobile_image">
                                        <small>Current: <?= esc($event['mobile_image']); ?></small>
                                    </div>
                                    <div class="form-group mb-3" style="max-width:500px">
                                        <label for="is_published">Publish</label>
                                        <select class="form-control" id="is_published" name="is_published">
                                            <option value="1" <?= $event['is_published'] ? 'selected' : ''; ?>>Yes
                                            </option>
                                            <option value="0" <?= !$event['is_published'] ? 'selected' : ''; ?>>No
                                            </option>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group" style="max-width:500px">
                                        <label for="created_at">Created At</label>
                                        <input type="text" class="form-control" id="created_at" name="created_at" value="<?= esc($event['created_at']); ?>" readonly>
                                    </div>
                                    <div class="form-group" style="max-width:500px">
                                        <label for="updated_at">Updated At</label>
                                        <input type="text" class="form-control" id="updated_at" name="updated_at" value="<?= esc($event['updated_at']); ?>" readonly>
                                    </div> -->
                                    <button type="submit" class="btn bg-colour mt-2 mx-2">Update Event</button>
                                    <a href="<?= base_url('adm1n/event-list'); ?>"
                                        class="btn btn-secondary mt-2">Cancel</a>
                                </form>
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