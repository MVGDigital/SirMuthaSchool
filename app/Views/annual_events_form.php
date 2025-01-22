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
                                        <h4><?= isset($event) ? 'Edit Event' : 'Add Event' ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form
                                    action="<?= isset($event) ? base_url('adm1n/annual-events/update/' . $event['event_id']) : base_url('adm1n/annual-events/store') ?>"
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
                                                <label class="col-sm-4 col-form-label " for="year">Year</label>
                                                <div class="col-sm-8">
                                                    <select name="year" id="year" class="form-control">
                                                        <option value="">Select Year</option>
                                                        <?php for ($i = date('Y'); $i >= date('Y') - 5; $i--): ?>
                                                        <option value="<?= $i ?>"
                                                            <?= isset($event) && $event['year'] == $i ? 'selected' : '' ?>>
                                                            <?= $i ?>
                                                        </option>
                                                        <?php endfor; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label " for="month">Month</label>
                                                <div class="col-sm-8">
                                                    <select name="month" id="month" class="form-control">
                                                        <option value="">Select Month</option>
                                                        <?php foreach (['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] as $month): ?>
                                                        <option value="<?= $month ?>"
                                                            <?= isset($event) && $event['month'] == $month ? 'selected' : '' ?>>
                                                            <?= $month ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label " for="title">Title</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="title" id="title" class="form-control"
                                                        value="<?= isset($event) ? esc($event['title']) : '' ?>">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label "
                                                    for="description">Description</label>
                                                <div class="col-sm-8">
                                                    <textarea name="description" id="description" class="form-control"
                                                        rows="4"><?= isset($event) ? esc($event['description']) : '' ?></textarea>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label" for="images">Upload
                                                    Images</label>
                                                <div class="col-sm-8">
                                                    <input type="file" name="images[]" id="images" class="form-control"
                                                        multiple onchange="previewImages()">
                                                    <div id="preview"></div>
                                                    <?php if (isset($event['images'])): ?>
                                                    <p>Current Images:</p>
                                                    <ul id="current-images">
                                                        <?php foreach (json_decode($event['images']) as $image): ?>
                                                        <li>
                                                            <?= esc($image) ?>
                                                            <button type="button"
                                                                onclick="removeImage('<?= esc($image) ?>')">×</button>
                                                        </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label "
                                                    for="published">Published</label>
                                                <div class="col-sm-8">
                                                    <input type="checkbox" name="published" id="published"
                                                        <?= isset($event) && $event['published'] ? 'checked' : '' ?>>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="col-sm-8 offset-sm-4">
                                                    <button type="submit"
                                                        class="btn bg-colour"><?= isset($event) ? 'Update' : 'Submit' ?></button>
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
        <script>
        function previewImages() {
            const preview = document.getElementById('preview');
            const files = document.getElementById('images').files;
            preview.innerHTML = ''; // Clear existing preview

            Array.from(files).forEach((file) => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '100px';
                    img.style.margin = '10px';

                    const closeBtn = document.createElement('button');
                    closeBtn.innerText = '×';
                    closeBtn.style.marginLeft = '-20px';
                    closeBtn.onclick = function() {
                        img.remove();
                        closeBtn.remove();
                    };

                    preview.appendChild(img);
                    preview.appendChild(closeBtn);
                };
                reader.readAsDataURL(file);
            });
        }

        function removeImage(imageName) {
            const currentImages = document.getElementById('current-images');
            const images = Array.from(currentImages.getElementsByTagName('li'));
            images.forEach((li) => {
                if (li.textContent.includes(imageName)) {
                    li.remove();
                }
            });
        }
        </script>
</body>
<!--end body-->

</html>