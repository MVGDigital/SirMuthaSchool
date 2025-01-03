<?= $this->include('partials/html') ?>

<head>
    <?= view("partials/title-meta", array('title' => 'Job Applications')) ?>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Job Applications</h4>
                                    </div>
                                    <div class="col text-end text-end">
                                        <a href="<?= base_url('adm1n/job-applications/export') ?>"
                                            class="btn btn-sm bg-colour">Export CSV</a>
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
                                    <table id="applicationsTable" class="table table-bordered table-striped">
                                        <thead class="table-light">
                                            <tr>
                                                <th>S.No</th>
                                                <th>Job ID</th>
                                                <th>Applied Date</th>
                                                <th>Applicant Name</th>
                                                <th>Job Title</th>
                                                <th>Resume</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $serial = 1; ?>
                                            <?php foreach ($applications as $app): ?>
                                            <tr>
                                                <td><?= $serial++ ?></td>
                                                <td><?= $app['career_id'] ?></td>
                                                <td><?= date('d-m-Y', strtotime($app['created_at'])) ?></td>
                                                <td><?= $app['first_name'] . ' ' . $app['last_name'] ?></td>
                                                <td><?= $app['job_title'] ?></td>
                                                <td><a href="<?= base_url('uploads/cv/' . $app['cv']) ?>"
                                                        target="_blank">View Resume</a></td>
                                                <td class="text-center">
                                                    <a href="<?= base_url('adm1n/job-application/delete/' . $app['job_id']) ?>"
                                                        onclick="return confirm('Are you sure you want to delete this application?');">
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
                    <?= $this->include('partials/footer') ?>
                </div>
            </div>
        </div>

        <?= $this->include('partials/vendorjs') ?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#applicationsTable').DataTable();
        });
        </script>
</body>

</html>