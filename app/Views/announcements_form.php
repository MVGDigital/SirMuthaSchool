<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Annual Events')) ?>
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
                                        <h4><?= isset($announcement) ? 'Edit Announcement' : 'Add Announcement' ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form
                                    action="<?= isset($announcement) ? base_url('adm1n/announcements/update/' . $announcement['announcement_id']) : base_url('adm1n/announcements/store') ?>"
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

                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label" for="title">Title</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="title" id="title" class="form-control"
                                                        value="<?= isset($announcement) ? esc($announcement['title']) : '' ?>" >
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label" for="description">Description</label>
                                                <div class="col-sm-8">
                                                    <textarea name="description" id="description" class="form-control"
                                                        rows="4" ><?= old('description', isset($announcement) ? esc($announcement['description']) : '') ?></textarea>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label" for="pdf_file">Upload PDF</label>
                                                <div class="col-sm-8">
                                                    <input type="file" name="pdf_file" id="pdf_file" class="form-control"
                                                        accept=".pdf" >
                                                        <p class="m-2 text-danger"><span> *Accept only PDF format*</span></p>
                                                    <?php if (isset($announcement['pdf_file'])): ?>
                                                    <p>Current PDF: <a
                                                            href="<?= base_url('uploads/announcements/' . esc($announcement['pdf_file'])) ?>"
                                                            target="_blank"><?= esc($announcement['pdf_file']) ?></a></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label" for="published">Published</label>
                                                <div class="col-sm-8">
                                                    <input type="checkbox" name="published" id="published"
                                                        <?= isset($announcement) && $announcement['published'] ? 'checked' : '' ?>>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="col-sm-8 offset-sm-4">
                                                    <button type="submit"
                                                        class="btn bg-colour"><?= isset($announcement) ? 'Update' : 'Submit' ?></button>
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
</html>