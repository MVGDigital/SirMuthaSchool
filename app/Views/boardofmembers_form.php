<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Add Board of Members Information')) ?>
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
                                        <h4 class="card-title">Add Board of Members Information</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <form
                                    action="<?= isset($boardofmembers['bom_id']) ? base_url('adm1n/boardofmember/update/' . $boardofmembers['bom_id']) : base_url('adm1n/boardofmembers/submit') ?>"
                                    method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="formFields row w100 m-0">
                                                <!-- Display Success Message -->
                                                <?php if (session()->getFlashdata('success')): ?>
                                                <div id="success-alert" class="alert alert-success">
                                                    <?= esc(session()->getFlashdata('success')) ?>
                                                </div>
                                                <?php endif; ?>

                                                <!-- Display Error Message -->
                                                <?php if (session()->getFlashdata('error')): ?>
                                                <div id="error-alert" class="alert alert-danger">
                                                    <?= esc(session()->getFlashdata('error')) ?>
                                                </div>
                                                <?php endif; ?>

                                                <!-- Display Validation Errors -->
                                                <?php if ($validationErrors = session()->getFlashdata('validation')): ?>
                                                <div class="alert alert-danger py-0">
                                                    <ul>
                                                        <?php foreach ($validationErrors as $error): ?>
                                                        <li><?= esc($error) ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                                <?php endif; ?>

                                                <!-- Board of Member Photo -->
                                                <div class="mb-3 row">
                                                    <label for="boardofmembers-photo"
                                                        class="col-sm-4 col-form-label">Photo</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="file"
                                                            id="boardofmembers-photo" name="boardofmembers_photo"
                                                            accept="image/*">
                                                        <?php if (!empty($boardofmembers['photo'])): ?>
                                                        <p>Current File: <?= esc($boardofmembers['photo']) ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <!-- Board of Member Name -->
                                                <div class="mb-3 row">
                                                    <label for="boardofmembers-name"
                                                        class="col-sm-4 col-form-label">Name</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="boardofmembers-name"
                                                            name="name"
                                                            value="<?= esc($boardofmembers['name'] ?? '') ?>">
                                                    </div>
                                                </div>

                                                <!-- Designation -->
                                                <div class="mb-3 row">
                                                    <label for="boardofmembers-designation"
                                                        class="col-sm-4 col-form-label">Designation</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text"
                                                            id="boardofmembers-designation" name="designation"
                                                            value="<?= esc($boardofmembers['designation'] ?? '') ?>">
                                                    </div>
                                                </div>

                                                <!-- Content -->
                                                <div class="mb-3 row">
                                                    <label for="boardofmembers-content"
                                                        class="col-sm-4 col-form-label">Content</label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" name="content"
                                                            id="content"><?= esc($boardofmembers['content'] ?? '') ?></textarea>
                                                    </div>
                                                </div>

                                                <!-- Sort Order -->
                                                <div class="mb-3 row">
                                                    <label for="sort-order" class="col-sm-4 col-form-label">Sort
                                                        Order</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="number" id="sort-order"
                                                            name="sort_order"
                                                            value="<?= esc($boardofmembers['sort_order'] ?? '') ?>">
                                                        <small
                                                            class="text-danger"><?= session('errors.sort_order') ?></small>
                                                    </div>
                                                </div>

                                                <!-- Publish -->
                                                <div class="mb-3 row">
                                                    <label class="col-sm-4 col-form-label">Publish</label>
                                                    <div class="col-sm-8">
                                                        <div class="form-check form-switch form-switch-success">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="publish-banner" name="is_published" value="1"
                                                                <?= isset($boardofmembers['is_published']) && $boardofmembers['is_published'] ? 'checked' : '' ?>>
                                                            <label class="form-check-label"
                                                                for="publish-banner">Publish</label>
                                                            <small
                                                                class="text-danger"><?= session('errors.is_published') ?></small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="mb-3 row">
                                                    <div class="col-sm-8 offset-sm-4">
                                                        <button type="submit" class="btn bg-colour">
                                                            <?= !empty($boardofmembers) ? 'Update' : 'Submit' ?>
                                                        </button>
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