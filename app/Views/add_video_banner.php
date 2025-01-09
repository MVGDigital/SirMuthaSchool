<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", ['title' => isset($banner) ? 'Edit Video Banner' : 'Add New Video Banner']) ?>
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
                                        <h4 class="card-title"><?= isset($banner) ? 'Edit' : 'Add' ?> Video Banner</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <form
                                    action="<?= isset($banner) ? base_url("adm1n/videobanner/update/{$banner['id']}") : base_url("adm1n/save-banner") ?>"
                                    method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="formFields row w100 m-0">
                                                <!-- Display Success Message -->
                                                <?php if (session()->has('success')): ?>
                                                <div class="alert alert-success">
                                                    <?= session()->getFlashdata('success') ?>
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
                                                <div class="mb-3 row">
                                                    <label for="video-title"
                                                        class="col-sm-3 col-form-label text-lg-end">Video Title</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="video-title"
                                                            name="video_title" placeholder="Enter video title"
                                                            value="<?= isset($banner) ? esc($banner['video_title']) : '' ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="video-link"
                                                        class="col-sm-3 col-form-label text-lg-end">Video Link</label>
                                                    <div class="col-sm-9">
                                                        <input type="url" class="form-control" id="video-link"
                                                            name="video_link" placeholder="Enter video link"
                                                            value="<?= isset($banner) ? esc($banner['video_link']) : '' ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="page"
                                                        class="col-sm-3 col-form-label text-lg-end">Page</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-select" id="page" name="page">
                                                            <option value="" disabled selected>Select a
                                                                Page
                                                            </option>
                                                            <option value="admission"
                                                                <?= isset($banner) && $banner['page'] == 'admission' ? 'selected' : '' ?>>
                                                                Admission</option>
                                                            <option value="parentLanding"
                                                                <?= isset($banner) && $banner['page'] == 'parentLanding' ? 'selected' : '' ?>>
                                                                Parent Landing</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="video-thumbnail"
                                                        class="col-sm-3 col-form-label text-lg-end">Video
                                                        Thumbnail</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" id="video-thumbnail"
                                                            name="video_thumbnail" accept="image/*" hidden>
                                                        <label class="btn bg-colour col-4" for="video-thumbnail">Upload
                                                            Video Thumbnail</label>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="video-poster"
                                                        class="col-sm-3 col-form-label text-lg-end">Video Poster</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" id="video-poster"
                                                            name="video_poster" accept="image/*" hidden>
                                                        <label class="btn bg-colour col-4" for="video-poster">Upload
                                                            Video Poster</label>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="video-file"
                                                        class="col-sm-3 col-form-label text-lg-end">Video File</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" id="video-file"
                                                            name="video_file" accept="video/*" hidden>
                                                        <label class="btn bg-colour col-4" for="video-file">Upload
                                                            Video</label>
                                                        <?php if (isset($banner) && !empty($banner['video_file'])): ?>
                                                        <small>Current video:
                                                            <a href="<?= base_url('uploads/videos/' . esc($banner['video_file'])) ?>"
                                                                target="_blank">
                                                                <?= esc($banner['video_file']) ?>
                                                            </a>
                                                        </small>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="sort-order"
                                                        class="col-sm-3 col-form-label text-lg-end">Sort
                                                        Order</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" id="sort-order"
                                                            name="sort_order" placeholder="Enter sort order"
                                                            value="<?= isset($banner) ? esc($banner['sort_order']) : '' ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-sm-3 col-form-label text-lg-end">Publish</label>
                                                    <div class="col-sm-9">
                                                        <div class="form-check form-switch form-switch-success">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="publish-banner" name="is_published" value="1"
                                                                <?= isset($banner) && $banner['is_published'] ? 'checked' : '' ?>>
                                                            <label class="form-check-label" for="publish-banner">
                                                                Publish Banner
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="row">
                                                        <div class="col-sm-9 ms-auto">
                                                            <button type="submit"
                                                                class="btn bg-colour"><?= isset($banner) ? 'Update' : 'Save' ?></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </div>
            <!--end page-content-->
            <?= $this->include('partials/footer') ?>
        </div>
        <!-- end page-wrapper -->
    </div>

    <!-- Javascript  -->
    <?= $this->include('partials/vendorjs') ?>
    <script src="<?= base_url('/libs/apexcharts/apexcharts.min.js') ?>"></script>
    <script src="<?= base_url('/libs/jsvectormap/jsvectormap.min.js') ?>"></script>
    <script src="<?= base_url('/libs/jsvectormap/maps/world.js') ?>"></script>
    <script src="<?= base_url('/js/pages/index.init.js') ?>"></script>
    <script src="<?= base_url('/js/app.js') ?>"></script>
</body>

</html>