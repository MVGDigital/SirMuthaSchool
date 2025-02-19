<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Banner')) ?>
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
                                        <h4 class="card-title"><?= isset($banner) ? 'Edit' : 'Add' ?> Banner</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <form
                                    action="<?= isset($banner) ? base_url("adm1n/banner/update/{$banner['banner_id']}") : base_url("adm1n/banner/upload") ?>"
                                    method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="formFields row w100 m-0">
                                                <div class="mb-3 row">
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

                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="select-page"
                                                        class="col-sm-2 col-form-label text-lg-end">Select Page<span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" id="select-page" name="page">
                                                            <option <?= !isset($banner) ? 'selected' : '' ?> disabled>
                                                                Select a
                                                                Page
                                                            </option>
                                                            <option value="home"
                                                                <?= isset($banner) && $banner['page'] == 'home' ? 'selected' : '' ?>>
                                                                Home</option>
                                                            <option value="about"
                                                                <?= isset($banner) && $banner['page'] == 'about' ? 'selected' : '' ?>>
                                                                About Us</option>
                                                            <option value="career"
                                                                <?= isset($banner) && $banner['page'] == 'career' ? 'selected' : '' ?>>
                                                                Career</option>
                                                            <option value="contact"
                                                                <?= isset($banner) && $banner['page'] == 'contact' ? 'selected' : '' ?>>
                                                                Contact Us</option>
                                                            <option value="academics"
                                                                <?= isset($banner) && $banner['page'] == 'academics' ? 'selected' : '' ?>>
                                                                Academics</option>
                                                            <option value="facilities"
                                                                <?= isset($banner) && $banner['page'] == 'facilities' ? 'selected' : '' ?>>
                                                                Facilities</option>
                                                            <option value="statutory"
                                                                <?= isset($banner) && $banner['page'] == 'statutory' ? 'selected' : '' ?>>
                                                                Statutory</option>
                                                            <option value="inclusive-education"
                                                                <?= isset($banner) && $banner['page'] == 'inclusive-education' ? 'selected' : '' ?>>
                                                                Inclusive Education</option>
                                                            <option value="beyond-curriculum"
                                                                <?= isset($banner) && $banner['page'] == 'beyond-curriculum' ? 'selected' : '' ?>>
                                                                Beyond Curriculum</option>
                                                            <option value="gallery"
                                                                <?= isset($banner) && $banner['page'] == 'gallery' ? 'selected' : '' ?>>
                                                                Gallery</option>
                                                            <option value="events"
                                                                <?= isset($banner) && $banner['page'] == 'events' ? 'selected' : '' ?>>
                                                                Events</option>
                                                            <option value="admission"
                                                                <?= isset($banner) && $banner['page'] == 'admission' ? 'selected' : '' ?>>
                                                                Admissions</option>
                                                            <option value="announcement"
                                                                <?= isset($banner) && $banner['page'] == 'announcement' ? 'selected' : '' ?>>
                                                                Announcements</option>
                                                            <option value="achievement"
                                                                <?= isset($banner) && $banner['page'] == 'achievement' ? 'selected' : '' ?>>
                                                                Achievements</option>
                                                            <option value="intheoutdoor"
                                                                <?= isset($banner) && $banner['page'] == 'intheoutdoor' ? 'selected' : '' ?>>
                                                                In the outdoors</option>
                                                            <option value="parents"
                                                                <?= isset($banner) && $banner['page'] == 'parents' ? 'selected' : '' ?>>
                                                                Parents</option>
                                                            <option value="computerlab"
                                                                <?= isset($banner) && $banner['page'] == 'computerlab' ? 'selected' : '' ?>>
                                                                Computer Lab</option>
                                                            <option value="swimmingpool"
                                                                <?= isset($banner) && $banner['page'] == 'swimmingpool' ? 'selected' : '' ?>>
                                                                Swimming Pool</option>
                                                            <option value="concerthall"
                                                                <?= isset($banner) && $banner['page'] == 'concerthall' ? 'selected' : '' ?>>
                                                                Concert Hall</option>
                                                            <option value="cricketnets"
                                                                <?= isset($banner) && $banner['page'] == 'cricketnets' ? 'selected' : '' ?>>
                                                                Cricket Nets</option>
                                                            <option value="hockeyfield"
                                                                <?= isset($banner) && $banner['page'] == 'hockeyfield' ? 'selected' : '' ?>>
                                                                Hockey Field</option>
                                                            <option value="biologylab"
                                                                <?= isset($banner) && $banner['page'] == 'biologylab' ? 'selected' : '' ?>>
                                                                Biology Lab</option>
                                                            <option value="library"
                                                                <?= isset($banner) && $banner['page'] == 'library' ? 'selected' : '' ?>>
                                                                Library</option>
                                                            <option value="musicandartroom"
                                                                <?= isset($banner) && $banner['page'] == 'musicandartroom' ? 'selected' : '' ?>>
                                                                Music and Art Room</option>
                                                            <option value="networkedclassrooms"
                                                                <?= isset($banner) && $banner['page'] == 'networkedclassrooms' ? 'selected' : '' ?>>
                                                                Networked Classrooms</option>
                                                            <option value="chemistrylab"
                                                                <?= isset($banner) && $banner['page'] == 'chemistrylab' ? 'selected' : '' ?>>
                                                                Chemistry Lab</option>
                                                            <option value="physicslab"
                                                                <?= isset($banner) && $banner['page'] == 'physicslab' ? 'selected' : '' ?>>
                                                                Physics Lab</option>
                                                            <option value="artandcraft"
                                                                <?= isset($banner) && $banner['page'] == 'artandcraft' ? 'selected' : '' ?>>
                                                                Art and Craft</option>
                                                            <option value="technology"
                                                                <?= isset($banner) && $banner['page'] == 'technology' ? 'selected' : '' ?>>
                                                                Technology</option>
                                                            <option value="healthandsaftey"
                                                                <?= isset($banner) && $banner['page'] == 'healthandsaftey' ? 'selected' : '' ?>>
                                                                Health and Saftey</option>
                                                            <option value="heritageclub"
                                                                <?= isset($banner) && $banner['page'] == 'heritageclub' ? 'selected' : '' ?>>
                                                                Heritage Club</option>
                                                            <option value="mathsclub"
                                                                <?= isset($banner) && $banner['page'] == 'mathsclub' ? 'selected' : '' ?>>
                                                                Maths Club</option>
                                                            <option value="ecoclub"
                                                                <?= isset($banner) && $banner['page'] == 'ecoclub' ? 'selected' : '' ?>>
                                                                Eco Club</option>
                                                            <option value="interactclub"
                                                                <?= isset($banner) && $banner['page'] == 'interactclub' ? 'selected' : '' ?>>
                                                                Interact Club</option>
                                                            <option value="under-construction"
                                                                <?= isset($banner) && $banner['page'] == 'under-construction' ? 'selected' : '' ?>>
                                                                Under Construction</option>
                                                        </select>
                                                        <small class="text-danger">
                                                            <?= session('errors.page') ?>
                                                        </small>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="banner-title"
                                                        class="col-sm-2 col-form-label text-lg-end">Banner Title<span
                                                            class="text-danger">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" id="banner-title"
                                                            name="title" placeholder="Enter banner title"
                                                            value="<?= isset($banner) ? esc($banner['title']) : '' ?>">
                                                        <small class="text-danger">
                                                            <?= session('errors.title') ?>
                                                        </small>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="banner-caption"
                                                        class="col-sm-2 col-form-label text-lg-end">Banner
                                                        Caption</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" id="banner-caption"
                                                            name="caption" rows="3"
                                                            placeholder="Enter banner caption"><?= isset($banner) ? esc($banner['caption']) : '' ?></textarea>
                                                        <small class="text-danger">
                                                            <?= session('errors.caption') ?>
                                                        </small>
                                                    </div>
                                                </div>
                                                <!-- <label for="">:</label>
                                                <input type="text" name="hyperlink" id="hyperlink"
                                                    value="<?= old('hyperlink') ?>"> -->
                                                <div class="mb-3 row">
                                                    <label for="hyperlink"
                                                        class="col-sm-2 col-form-label text-lg-end">Hyperlink
                                                        (optional)</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" id="hyperlink" name="hyperlink"
                                                            placeholder="Enter hyperlink"
                                                            value="<?= isset($banner) ? esc($banner['hyperlink']) : '' ?>">
                                                        <small class="text-danger">
                                                            <?= session('errors.hyperlink') ?>
                                                        </small>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-sm-2 col-form-label text-lg-end">Desktop
                                                        Image<span class="text-danger">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input type="file" id="desktop-image" name="desktop_image"
                                                            accept="image/*" hidden />
                                                        <label class="btn bg-colour col-4" for="desktop-image">Upload
                                                            Image</label>
                                                        <p>*Upload image must be width 1920px height 1000px</p>
                                                        <p id="desktop-image-name" class="mt-2 text-success"></p>
                                                        <?php if (isset($banner['desktop_image'])): ?>
                                                        <p>Current Image: <?= esc($banner['desktop_image']) ?></p>
                                                        <?php endif; ?>
                                                        <small class="text-danger">
                                                            <?= session('errors.desktop_image') ?>
                                                        </small>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-sm-2 col-form-label text-lg-end">Mobile
                                                        Image<span class="text-danger">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input type="file" id="mobile-image" name="mobile_image"
                                                            accept="image/*" hidden />
                                                        <label class="btn bg-colour col-4" for="mobile-image">Upload
                                                            Image</label>
                                                        <p>*Upload image must be width 600px height 1500px</p>
                                                        <p id="mobile-image-name" class="mt-2 text-success"></p>
                                                        <?php if (isset($banner['mobile_image'])): ?>
                                                        <p>Current Image: <?= esc($banner['mobile_image']) ?></p>
                                                        <?php endif; ?>
                                                        <small class="text-danger">
                                                            <?= session('errors.mobile_image') ?>
                                                        </small>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="sort-order"
                                                        class="col-sm-2 col-form-label text-lg-end">Sort
                                                        Order<span class="text-danger">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="number" id="sort-order"
                                                            name="sort_order" placeholder="Enter sort order"
                                                            value="<?= isset($banner) ? esc($banner['sort_order']) : '' ?>">
                                                        <small class="text-danger">
                                                            <?= session('errors.sort_order') ?>
                                                        </small>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label class="col-sm-2 col-form-label text-lg-end">Publish</label>
                                                    <div class="col-sm-10">
                                                        <div class="form-check form-switch form-switch-success">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="publish-banner" name="is_published" value="1"
                                                                <?= isset($banner) && $banner['is_published'] ? 'checked' : '' ?>>
                                                            <label class="form-check-label" for="publish-banner">
                                                                Publish Banner
                                                            </label>
                                                            <small class="text-danger">
                                                                <?= session('errors.is_published') ?>
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="row">
                                                        <div class="col-sm-10 ms-auto">
                                                            <button type="submit"
                                                                class="btn bg-colour"><?= isset($banner) ? 'Update' : 'Submit' ?></button>
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
        document.getElementById('bannerForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);

            fetch(this.action, {
                    method: this.method,
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Banner uploaded successfully!');
                        this.reset();
                    } else {
                        const errorFields = data.errors || {};
                        for (const [field, message] of Object.entries(errorFields)) {
                            const errorElem = document.querySelector(`#${field}-error`);
                            if (errorElem) errorElem.innerText = message;
                        }
                    }
                })
                .catch(error => console.error('Error:', error));
        });

        function resetForm() {
            document.getElementById('bannerForm').reset();
        }
        </script>
        <script>
        setTimeout(function() {
            var successAlert = document.getElementById('alert-success');
            if (successAlert) {
                successAlert.style.display = 'none';
            }
        }, 5000);
        setTimeout(function() {
            var dangerAlert = document.getElementById('alert-danger');
            if (dangerAlert) {
                dangerAlert.style.display = 'none';
            }
        }, 5000);
        // Display selected file name for Desktop Image
        document.getElementById('desktop-image').addEventListener('change', function(event) {
            const fileName = event.target.files[0]?.name || 'No file selected';
            document.getElementById('desktop-image-name').textContent = `Selected File: ${fileName}`;
        });

        // Display selected file name for Mobile Image
        document.getElementById('mobile-image').addEventListener('change', function(event) {
            const fileName = event.target.files[0]?.name || 'No file selected';
            document.getElementById('mobile-image-name').textContent = `Selected File: ${fileName}`;
        });
        </script>
</body>
<!--end body-->

</html>