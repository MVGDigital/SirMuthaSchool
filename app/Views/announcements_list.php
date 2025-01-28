<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Announcements')) ?>
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
                                        <h4>Announcements</h4>
                                    </div>
                                    <div class="col text-end">
                                        <a href="<?= base_url('adm1n/announcements/create') ?>" class="btn bg-colour"><i
                                                class="fa fa-plus"></i>Add Announcement</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php if (session()->getFlashdata('success')): ?>
                                <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                                <?php endif; ?>
                                <div class="table-responsive">
                                    <table id="announcements" class="table table-striped mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>S.No</th>
                                                <th>Title</th>
                                                <th>PDF</th>
                                                <th>Published</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $serial = 1; ?>
                                            <?php foreach ($announcements as $announcement): ?>
                                            <tr>
                                                <td><?= $serial++ ?></td>
                                                <td><?= esc($announcement['title']) ?></td>
                                                <td><a href="<?= base_url('uploads/announcements/' . $announcement['pdf_file']) ?>"
                                                        target="_blank" class="mx-2">
                                                        <i class="fa fa-eye"></i> View
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch form-switch-success">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customSwitch<?= esc($announcement['announcement_id']) ?>"
                                                            onchange="toggleStatus(<?= esc($announcement['announcement_id']) ?>, this.checked)"
                                                            <?= $announcement['published'] ? 'checked' : '' ?>>
                                                        <label class="form-check-label"
                                                            for="customSwitch<?= esc($announcement['announcement_id']) ?>">
                                                            <?= $announcement['published'] ? 'Active' : 'Inactive' ?>
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>

                                                    <a href="<?= base_url('adm1n/announcements/edit/' . $announcement['announcement_id']) ?>"
                                                        class="mx-2">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= base_url('adm1n/announcements/delete/' . $announcement['announcement_id']) ?>"
                                                        class="text-danger"
                                                        onclick="return confirm('Are you sure you want to delete this item?')">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?= $this->include('partials/footer') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript  -->
    <?= $this->include('partials/vendorjs') ?>
    <script src="<?= base_url('/libs/apexcharts/apexcharts.min.js') ?>"></script>
    <script src="<?= base_url('/libs/jsvectormap/jsvectormap.min.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#announcements').DataTable();
    });

    function toggleStatus(announcementId, isChecked) {
        const url = "<?= base_url('adm1n/announcements/toggle-published/') ?>" + announcementId;

        fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    published: isChecked
                })
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