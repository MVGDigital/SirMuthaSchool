<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Rizz')) ?>
    <link rel="stylesheet" href="<?= base_url('/libs/jsvectormap/jsvectormap.min.css') ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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
                    <div class="col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Banners</h4>
                                    </div>
                                    <div class="col text-end">
                                        <a href="<?= base_url('adm1n/banner/create') ?>" class="btn bg-colour">
                                            <i class="fa fa-plus"></i> Add Banner
                                        </a>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-header-->
                            <div class="card-body pt-0">
                                <div class="formFields row w100 m-0">
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
                                    <?php if (session()->getFlashdata('errors')): ?>
                                    <div id="danger-alert" class="alert alert-danger">
                                        <ul>
                                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                            <li><?= esc($error) ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <?php endif; ?>
                                    <div class="table-responsive">
                                        <table id="banner" class="table table-striped">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Page</th>
                                                    <th>Title</th>
                                                    <th>Desktop Image</th>
                                                    <th>Mobile Image</th>
                                                    <th>Sort Order</th>
                                                    <th>Is_published</th>
                                                    <th class="text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($banners as $banner): ?>
                                                <tr>
                                                    <td><?= esc($banner['page']) ?></td>
                                                    <td><?= esc($banner['title']) ?></td>
                                                    <td><img src="<?= base_url('/uploads/banner_images/') ?><?= esc($banner['desktop_image']) ?>"
                                                            alt="Desktop Image" width="50"></td>
                                                    <td><img src="<?= base_url('/uploads/banner_images/') ?><?= esc($banner['mobile_image']) ?>"
                                                            alt="Mobile Image" width="50"></td>
                                                    <td><?= esc($banner['sort_order']) ?></td>
                                                    <td>
                                                        <div class="form-check form-switch form-switch-success">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="customSwitch<?= esc($banner['banner_id']) ?>"
                                                                onchange="toggleStatus(<?= esc($banner['banner_id']) ?>, this.checked)"
                                                                <?= $banner['is_published'] ? 'checked' : '' ?>>
                                                            <label class="form-check-label"
                                                                for="customSwitch<?= esc($banner['banner_id']) ?>">
                                                                <?= $banner['is_published'] ? 'Active' : 'Inactive' ?>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a
                                                            href="<?= base_url('/adm1n/banner/edit/') ?><?= esc($banner['banner_id']) ?>"><i
                                                                class="las la-pen text-secondary font-16"></i></a>
                                                        <a href="<?= base_url('/adm1n/banner/delete/') ?><?= esc($banner['banner_id']) ?>"
                                                            onclick="return confirm('Are you sure you want to delete this banner?')">
                                                            <i class="las la-trash-alt text-secondary font-16"></i>
                                                        </a>
                                                        <!-- <a
                                                        href="/adm1n/banner/toggle-status/<?= esc($banner['banner_id']) ?>">
                                                        <?= $banner['is_published'] ? 'Deactivate' : 'Activate' ?>
                                                    </a> -->
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <!--end /table-->
                                    </div>
                                    <!--end /tableresponsive-->
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <?= $this->include('partials/footer') ?>
                </div>
                <!--end page-content-->
            </div>
            <!-- end page-wrapper -->

            <!-- Javascript  -->
            <?= $this->include('partials/vendorjs') ?>
            <script src="<?= base_url('/libs/apexcharts/apexcharts.min.js') ?>"></script>
            <script src="<?= base_url('/libs/jsvectormap/jsvectormap.min.js') ?>"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
            <script src="<?= base_url('/libs/jsvectormap/maps/world.js') ?>"></script>
            <script src="<?= base_url('/js/pages/index.init.js') ?>"></script>
            <script src="<?= base_url('/js/app.js') ?>"></script>
            <script>
                $(document).ready(function() {
            $('#banner').DataTable();
        });
            function toggleStatus(bannerId, isActive) {
                const url = "<?= base_url('adm1n/banner/toggle-status/') ?>" + bannerId;

                fetch(url, {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.status === 'success') {
                            console.log(`Banner ${bannerId} is now ${data.is_published ? 'Active' : 'Inactive'}.`);
                            const label = document.querySelector(`label[for="customSwitch${bannerId}"]`);
                            label.innerText = data.is_published ? 'Active' : 'Inactive';
                        } else {
                            console.error(data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            }
            </script>
            
</body>
<!--end body-->

</html>