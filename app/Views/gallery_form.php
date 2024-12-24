<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Rizz')) ?>
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
                                        <h4 class="card-title"><?= isset($item) ? 'Edit' : 'Add' ?> Gallery Item</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <form
                                    action="<?= isset($item) ? base_url("adm1n/gallery/update/{$item['id']}") : base_url('adm1n/gallery/upload') ?>"
                                    method="post" enctype="multipart/form-data">
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

                                            <!-- File Upload Field -->
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label text-lg-end">File Upload</label>
                                                <div class="col-sm-10">
                                                    <input type="file" id="gallery-file" name="file"
                                                        accept="image/*,video/*" hidden />
                                                    <label class="btn bg-colour col-4" for="gallery-file">Upload
                                                        File</label>
                                                    <?php if (isset($item['file_path'])): ?>
                                                    <p>Current File: <?= esc($item['file_path']) ?></p>
                                                    <?php endif; ?>
                                                    <!-- Display file validation error -->
                                                    <?php if (session()->getFlashdata('errors')): ?>
                                                    <?php $errors = session()->getFlashdata('errors'); ?>
                                                    <?php if (isset($errors['file'])): ?>
                                                    <small class="text-danger"><?= esc($errors['file']) ?></small>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <!-- Sort Order Field -->
                                            <div class="mb-3 row">
                                                <label for="sort-order" class="col-sm-2 col-form-label text-lg-end">Sort
                                                    Order</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="number" id="sort-order"
                                                        name="sort_order" placeholder="Enter sort order"
                                                        value="<?= old('sort_order', isset($item) ? esc($item['sort_order']) : '') ?>">
                                                    <!-- Display sort_order validation error -->
                                                    <?php if (session()->getFlashdata('errors')): ?>
                                                    <?php $errors = session()->getFlashdata('errors'); ?>
                                                    <?php if (isset($errors['sort_order'])): ?>
                                                    <small class="text-danger"><?= esc($errors['sort_order']) ?></small>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <!-- Publish Field -->
                                            <div class="mb-3 row">
                                                <label class="col-sm-2 col-form-label text-lg-end">Publish</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check form-switch form-switch-success">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="publish-file" name="is_published" value="1"
                                                            <?= old('is_published', isset($item) && $item['is_published'] ? 'checked' : '') ?>>
                                                        <label class="form-check-label"
                                                            for="publish-file">Publish</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Submit Button -->
                                            <div class="col-auto">
                                                <div class="row">
                                                    <div class="col-sm-10 ms-auto">
                                                        <button type="submit"
                                                            class="btn bg-colour"><?= isset($item) ? 'Update' : 'Submit' ?></button>
                                                    </div>
                                                </div>
                                            </div>
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