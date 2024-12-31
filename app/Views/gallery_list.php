<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Gallery')) ?>
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
                                        <h4 class="card-title">Gallery List</h4>
                                    </div>
                                    <div class="col text-end">
                                        <a href="<?= base_url('adm1n/gallery/create') ?>" class="btn bg-colour">
                                            <i class="fa fa-plus"></i> Add New
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
                                        <table id="gallery" class="table table-striped mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Sort Order</th>
                                                    <th>Status</th>
                                                    <th class="text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($gallery as $item): ?>
                                                <tr>
                                                    <td>
                                                        <img src="<?= base_url('/uploads/gallery_files/') ?><?= esc($item['file_path']) ?>"
                                                            alt="Gallery Image" width="100">
                                                    </td>
                                                    <td><?= esc($item['sort_order']) ?></td>
                                                    <td>
                                                        <?= $item['is_published'] ? 'Published' : 'Unpublished' ?>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="<?= base_url('/adm1n/gallery/edit/') ?><?= esc($item['id']) ?>"
                                                            class=" btn-sm btn-warning mx-2">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?= base_url('/adm1n/gallery/delete/') ?><?= esc($item['id']) ?>"
                                                            class=" btn-sm btn-danger text-danger"
                                                            onclick="return confirm('Are you sure you want to delete this item?')">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
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
                $('#gallery').DataTable();
            });

            function toggleStatus(itemId) {
                const url = "<?= base_url('/adm1n/gallery/toggle-status/') ?>" + itemId;

                fetch(url, {
                        method: 'GET',
                        headers: {
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Failed to update status');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.status === 'success') {
                            alert(data.message);
                            location.reload();
                        } else {
                            alert(data.message);
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                    });
            }
            </script>
</body>
<!--end body-->

</html>