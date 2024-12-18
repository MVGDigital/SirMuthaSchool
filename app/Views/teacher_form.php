<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Add Teacher Information')) ?>
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
                                        <h4 class="card-title">Add Teacher Information</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <form
                                    action="<?= isset($teacher['bom_id']) ? base_url('adm1n/teacher/update/' . $teacher['bom_id']) : base_url('adm1n/teacher/submit') ?>"
                                    method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-6">
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
                                                <?php if ($validationErrors = session()->getFlashdata('validation')): ?>
                                                <div class="alert alert-danger py-0">
                                                    <ul>
                                                        <?php foreach ($validationErrors as $error): ?>
                                                        <li><?= esc($error) ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                                <?php endif; ?>

                                                <div class="mb-3 row">
                                                    <label for="teacher-photo" class="col-sm-4 col-form-label">Teacher
                                                        Photo</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="file" id="teacher-photo"
                                                            name="teacher_photo" accept="image/*">
                                                        <?php if (!empty($teacher) && !empty($teacher['photo'])): ?>
                                                        <p>Current File: <a
                                                                href="<?= base_url('public/uploads/teacher_photos/' . htmlspecialchars($teacher['photo'])) ?>"
                                                                target="_blank">current_photo</a></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="teacher-name" class="col-sm-4 col-form-label">Teacher
                                                        Name</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="teacher-name"
                                                            name="name"
                                                            value="<?= isset($teacher['name']) ? htmlspecialchars($teacher['name']) : '' ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="teacher-designation"
                                                        class="col-sm-4 col-form-label">Teacher
                                                        Designation</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="teacher-designation"
                                                            name="designation"
                                                            value="<?= isset($teacher['designation']) ? htmlspecialchars($teacher['designation']) : '' ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="teacher-content"
                                                        class="col-sm-4 col-form-label">Content</label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" name="content"
                                                            id="content"><?= isset($teacher['content']) ? htmlspecialchars($teacher['content']) : '' ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <div class="col-sm-8 offset-sm-4">
                                                        <button type="submit"
                                                            class="btn bg-colour"><?= !empty($teacher) ? 'Update' : 'Submit' ?>
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