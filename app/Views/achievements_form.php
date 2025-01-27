<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Achievements')) ?>
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
                                        <h4><?= isset($achievement) ? 'Edit Achievement' : 'Add Achievement' ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form
                                    action="<?= isset($achievement) ? base_url('adm1n/achievements/update/' . $achievement['achievement_id']) : base_url('adm1n/achievements/store') ?>"
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
                                                <label class="col-sm-4 col-form-label" for="category">Category</label>
                                                <div class="col-sm-8">
                                                    <select name="category" id="category" class="form-control">
                                                        <option value="" disabled selected>Select Category</option>
                                                        <option value="Sports Achievements"
                                                            <?= (isset($achievement) && $achievement['category'] == 'Sports Achievements') ? 'selected' : '' ?>>
                                                            Sports Achievements</option>
                                                        <option value="Teachers Achievements"
                                                            <?= (isset($achievement) && $achievement['category'] == 'Teachers Achievements') ? 'selected' : '' ?>>
                                                            Teachers Achievements</option>
                                                    </select>
                                                    <!-- Display validation error for category -->
                                                    <?php if (session()->getFlashdata('validation')): ?>
                                                    <?php if (isset(session()->getFlashdata('validation')['category'])): ?>
                                                    <div class="text-danger">
                                                        <?= esc(session()->getFlashdata('validation')['category']) ?>
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label" for="title">Title</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="title" id="title" class="form-control"
                                                        value="<?= isset($achievement) ? esc($achievement['title']) : '' ?>">
                                                    <!-- Display validation error for title -->
                                                    <?php if (session()->getFlashdata('validation')): ?>
                                                    <?php if (isset(session()->getFlashdata('validation')['title'])): ?>
                                                    <div class="text-danger">
                                                        <?= esc(session()->getFlashdata('validation')['title']) ?></div>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label"
                                                    for="description">Description</label>
                                                <div class="col-sm-8">
                                                    <textarea name="description" id="description" class="form-control"
                                                        rows="4"><?= old('description', isset($achievement) ? esc($achievement['description']) : '') ?></textarea>
                                                    <!-- Display validation error for description -->
                                                    <?php if (session()->getFlashdata('validation')): ?>
                                                    <?php if (isset(session()->getFlashdata('validation')['description'])): ?>
                                                    <div class="text-danger">
                                                        <?= esc(session()->getFlashdata('validation')['description']) ?>
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label" for="image_file">Upload
                                                    Image</label>
                                                <div class="col-sm-8">
                                                    <input type="file" name="image_file" id="image_file"
                                                        class="form-control" accept="image/*">
                                                    <p class="m-2 text-danger"><span> *Accept only image formats (jpg,
                                                            jpeg, png, gif)*</span></p>
                                                    <?php if (isset($achievement['image_file'])): ?>
                                                    <p>Current Image: <a
                                                            href="<?= base_url('uploads/achievements/' . esc($achievement['image_file'])) ?>"
                                                            target="_blank"><?= esc($achievement['image_file']) ?></a>
                                                    </p>
                                                    <?php endif; ?>
                                                    <!-- Display validation error for image_file -->
                                                    <?php if (session()->getFlashdata('validation')): ?>
                                                    <?php if (isset(session()->getFlashdata('validation')['image_file'])): ?>
                                                    <div class="text-danger">
                                                        <?= esc(session()->getFlashdata('validation')['image_file']) ?>
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label" for="published">Published</label>
                                                <div class="col-sm-8">
                                                    <input type="checkbox" name="published" id="published"
                                                        <?= isset($achievement) && $achievement['published'] ? 'checked' : '' ?>>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="col-sm-8 offset-sm-4">
                                                    <button type="submit"
                                                        class="btn bg-colour"><?= isset($achievement) ? 'Update' : 'Submit' ?></button>
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