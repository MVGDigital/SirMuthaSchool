<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Event Users')) ?>
    <link rel="stylesheet" href="<?= base_url('/libs/jsvectormap/jsvectormap.min.css') ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <?= $this->include('partials/topbar') ?>
    <?= $this->include('partials/startbar') ?>

    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-xxl">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Event Registred Users</h4>
                                    </div>
                                    <div class="col text-end">
                                        <a href="<?= base_url('adm1n/event-user/exportCsv') ?>" class="btn bg-colour "
                                            title="Export">Export
                                            <i class="las la-file-csv"></i>
                                        </a>
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
                                    <table id="eventUsersTable" class="table table-bordered table-striped">
                                        <thead class="table-light">
                                            <tr>
                                                <th>S.No</th>
                                                <th>Event ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Residential Address</th>
                                                <th>Guests</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $serial = 1; ?>
                                            <?php foreach ($event_users as $user): ?>
                                            <tr>
                                                <td><?= $serial++ ?></td>
                                                <td><?= esc($user['event_id']) ?></td>
                                                <td><?= esc($user['user_name']) ?></td>
                                                <td><?= esc($user['email']) ?></td>
                                                <td><?= esc($user['mobile_number']) ?></td>
                                                <td><?= esc($user['residential_address']) ?></td>
                                                <td><?= esc($user['guests']) ?></td>
                                                <td class="text-center">
                                                    <a href="<?= base_url('adm1n/event-users/edit/' . $user['id']) ?>">
                                                        <i class="las la-pen text-secondary px-1 font-16"></i>
                                                    </a>
                                                    <a href="<?= base_url('adm1n/event-users/delete/' . $user['id']) ?>"
                                                        onclick="return confirm('Are you sure you want to delete this user?');">
                                                        <i class="las la-trash-alt text-danger font-16"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $this->include('partials/footer') ?>
            </div>
        </div>

        <?= $this->include('partials/vendorjs') ?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('/js/app.js') ?>"></script>
        <script>
        $(document).ready(function() {
            $('#eventUsersTable').DataTable();
        });
        </script>
</body>

</html>