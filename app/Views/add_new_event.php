<?= $this->include('partials/html') ?>

<head>
    <?= view("partials/title-meta", array('title' => 'Add New Event')) ?>
    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <!-- Top Bar Start -->
    <?= $this->include('partials/topbar') ?>
    <!-- Top Bar End -->

    <!-- Left Sidebar Start -->
    <?= $this->include('partials/startbar') ?>
    <!-- Left Sidebar End -->

    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-12 align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto">
                                <h4 class="mb-0">Add New Event</h4>
                            </div>
                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <!-- Breadcrumb navigation can be added here -->
                            </ol>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?= base_url('adm1n/event/save') ?>" method="POST"
                                    enctype="multipart/form-data">

                                    <div class="formFields row w100 m-0">
                                        <!-- Display Success Message -->
                                        <?php if (session()->getFlashdata('success')): ?>
                                        <div class="alert alert-success">
                                            <?= session()->getFlashdata('success') ?>
                                        </div>
                                        <?php endif; ?>

                                        <!-- Display Error Message -->
                                        <?php if (session()->getFlashdata('error')): ?>
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashdata('error') ?>
                                        </div>
                                        <?php endif; ?>

                                        <!-- Display Validation Errors -->
                                        <?php if (session()->getFlashdata('errors')): ?>
                                        <div class="alert alert-danger">
                                            <ul>
                                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                                <li><?= esc($error) ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <?php endif; ?>
                                        <div class="mb-3 row">
                                            <label for="event-name" class="col-sm-2 col-form-label">Event Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="event-name"
                                                    name="event_name" >
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="event-banner" class="col-sm-4 offset-sm-2"><b>Event
                                                Banner</b></label>
                                            <!-- <div class="col-sm-4">
                                            <input type="file" class="form-control" id="event-banner" name="event_banner" accept="image/*" >
                                        </div> -->
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="desktop-image" class="col-sm-2 col-form-label">Desktop
                                                Image</label>
                                            <div class="col-sm-4">
                                                <input type="file" class="form-control" id="desktop-image"
                                                    name="desktop_image" accept="image/*" >
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="mobile-image" class="col-sm-2 col-form-label">Mobile
                                                Image</label>
                                            <div class="col-sm-4">
                                                <input type="file" class="form-control" id="mobile-image"
                                                    name="mobile_image" accept="image/*" >
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="event-date" class="col-sm-2 col-form-label">Event Date</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" id="event-date"
                                                    name="event_date" >
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="start-time" class="col-sm-2 col-form-label">Event Start
                                                Time</label>
                                            <div class="col-sm-4">
                                                <input type="time" class="form-control" id="start-time"
                                                    name="start_time" >
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="end-time" class="col-sm-2 col-form-label">Event End Time</label>
                                            <div class="col-sm-4">
                                                <input type="time" class="form-control" id="end-time" name="end_time"
                                                    >
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="location" class="col-sm-2 col-form-label">Event Location</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="location"
                                                    name="event_location" >
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="description" class="col-sm-2 col-form-label">Event
                                                Description</label>
                                            <div class="col-sm-4">
                                                <textarea class="form-control" id="description" name="event_description"
                                                    rows="4" ></textarea>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="registration-"
                                                class="col-sm-2 col-form-label">Registration </label>
                                            <div class="col-sm-4">
                                                <select class="form-control" id="registration-"
                                                    name="registration_" >
                                                    <option value="" disabled selected>Please select your option
                                                    </option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <div class="col-sm-4 offset-sm-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="publish-banner"
                                                        name="is_published" value="1">
                                                    <label class="form-check-label" for="publish-banner">
                                                        Publish Event
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <div class="col-sm-4 offset-sm-2">
                                                <button type="submit" class="btn btn-primary">Save</button>
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

    <?= $this->include('partials/vendorjs') ?>
</body>

</html>