<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Alumni Events')) ?>
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
                                        <h4>Alumni Events</h4>
                                    </div>
                                    <div class="col text-end">
                                        <a href="<?= base_url('adm1n/alumni-events/create') ?>" class="btn bg-colour"><i
                                                class="fa fa-plus"></i>Add
                                            Event</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php if (session()->getFlashdata('success')): ?>
                                <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                                <?php endif; ?>
                                <div class="table-responsive">
                                    <table id="alumni-events" class="table table-striped mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>S.No</th>
                                                <th>Title</th>
                                                <th>Year</th>
                                                <th>Month</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $serial = 1; ?>
                                            <?php foreach ($events as $event): ?>
                                            <tr>
                                                <td><?= $serial++ ?></td>
                                                <td><?= esc($event['title']) ?></td>
                                                <td><?= esc($event['year']) ?></td>
                                                <td><?= esc($event['month']) ?></td>
                                                <td>
                                                    <a href="<?= base_url('adm1n/alumni-events/edit/' . $event['event_id']) ?>"
                                                        class="mx-2">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= base_url('adm1n/alumni-events/delete/' . $event['event_id']) ?>"
                                                        class=" text-danger"
                                                        onclick="return confirm('Are you sure you want to delete this item?')">
                                                        <i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!--end col-->
                        </div>
                        <!--end row-->,
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
                    $('#alumni-events').DataTable();
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