<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Board of Members Profiles')) ?>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Board of Members Profiles</h4>
                                    </div>
                                    <div class="col text-end">
                                        <a href="<?= base_url('adm1n/boardofmember/add') ?>" class="btn bg-colour">Add
                                            Board of Member</a>
                                    </div>
                                </div>
                            </div>

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
                                        <table id="documentsTable" class="table table-bordered table-striped">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>Designation</th>
                                                    <th>Content</th>
                                                    <th>Photo</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (isset($board_of_members) && !empty($board_of_members)): ?>
                                                <?php $serial = 1; ?>
                                                <?php foreach ($board_of_members as $member): ?>
                                                <tr>
                                                    <td><?= $serial++ ?></td>
                                                    <td><?= esc($member['name']) ?></td>
                                                    <td><?= esc($member['designation']) ?></td>
                                                    <td><?= esc($member['content']) ?></td>
                                                    <td>
                                                        <img src="<?= base_url('uploads/boardofmember_photos/' . esc($member['photo'])) ?>"
                                                            alt="Board of Member Photo" width="100" height="100">
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="<?= base_url('adm1n/boardofmember/edit/' . esc($member['bom_id'])) ?>"
                                                            class="text-secondary px-2" title="Edit">
                                                            <i class="las la-pen font-16"></i>
                                                        </a>
                                                        <a href="<?= base_url('adm1n/boardofmember/delete/' . esc($member['bom_id'])) ?>"
                                                            class="text-danger" title="Delete"
                                                            onclick="return confirm('Are you sure you want to delete this board of member?');">
                                                            <i class="las la-trash-alt font-16"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php else: ?>
                                                <tr>
                                                    <td colspan="6" class="text-center">No board of members found</td>
                                                </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Datatables JS (CDN) -->
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('/libs/jsvectormap/maps/world.js') ?>"></script>
        <script src="<?= base_url('/js/pages/index.init.js') ?>"></script>
        <script src="<?= base_url('/js/app.js') ?>"></script>
        <script>
        $(document).ready(function() {
            $('#documentsTable').DataTable();
        });
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