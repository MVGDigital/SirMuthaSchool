<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Alumni Events')) ?>
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
                                        <h4><?= isset($event) ? 'Edit Event' : 'Add Event' ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form
                                    action="<?= isset($event) ? base_url('adm1n/alumni-events/update/' . $event['event_id']) : base_url('adm1n/alumni-events/store') ?>"
                                    method="post" enctype="multipart/form-data">
                                    <?= csrf_field() ?>
                                    <div class="row">
                                        <div class="col-6">
                                            <!-- Display Success Message -->
                                            <?php if (session()->getFlashdata('success')): ?>
                                            <div class="alert alert-success">
                                                <?= session()->getFlashdata('success') ?>
                                            </div>
                                            <?php endif; ?>

                                            <!-- Display General Error Message -->
                                            <?php if (session()->getFlashdata('error')): ?>
                                            <div class="alert alert-danger">
                                                <?= session()->getFlashdata('error') ?>
                                            </div>
                                            <?php endif; ?>

                                            <div class="mb-3">
                                                <label for="year">Year</label>
                                                <select name="year" id="year" class="form-control" required>
                                                    <option value="">Select Year</option>
                                                    <?php for ($i = date('Y'); $i >= date('Y') - 5; $i--): ?>
                                                    <option value="<?= $i ?>"
                                                        <?= isset($event) && $event['year'] == $i ? 'selected' : '' ?>>
                                                        <?= $i ?>
                                                    </option>
                                                    <?php endfor; ?>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="month">Month</label>
                                                <select name="month" id="month" class="form-control" required>
                                                    <option value="">Select Month</option>
                                                    <?php foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month): ?>
                                                    <option value="<?= $month ?>"
                                                        <?= isset($event) && $event['month'] == $month ? 'selected' : '' ?>>
                                                        <?= $month ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" id="title" class="form-control"
                                                    value="<?= isset($event) ? esc($event['title']) : '' ?>" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="description" class="form-control"
                                                    rows="4"
                                                    required><?= isset($event) ? esc($event['description']) : '' ?></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="images">Upload Images</label>
                                                <input type="file" name="images[]" id="images" class="form-control"
                                                    multiple>
                                                <?php if (isset($event['images'])): ?>
                                                <p>Current Images:</p>
                                                <ul>
                                                    <?php foreach (json_decode($event['images']) as $image): ?>
                                                    <li><?= esc($image) ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <?php endif; ?>
                                            </div>


                                            <button type="submit"
                                                class="btn bg-colour"><?= isset($event) ? 'Update' : 'Submit' ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <?= $this->include('partials/footer') ?>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
            <!--end page-content-->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->
        <?= $this->include('partials/vendorjs') ?>
        <script src="<?= base_url('/libs/apexcharts/apexcharts.min.js') ?>"></script>
        <script src="<?= base_url('/libs/jsvectormap/jsvectormap.min.js') ?>"></script>
        <script src="<?= base_url('/libs/jsvectormap/maps/world.js') ?>"></script>
        <script src="<?= base_url('/js/pages/index.init.js') ?>"></script>
        <script src="<?= base_url('/js/app.js') ?>"></script>
</body>
<!--end body-->

</html>