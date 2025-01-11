<!DOCTYPE html>
<html lang="en">

<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Events')) ?>
    <?= $this->include('partials/head-css') ?>
    <link rel="stylesheet" href="<?= base_url('/libs/jsvectormap/jsvectormap.min.css') ?>">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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
                                        <h4 class="card-title">Event Listings</h4>
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

                                    <div class="d-flex flex-wrap exportCsv mb-3 gap-2 mt-2">
                                        <a href="<?= base_url('adm1n/event/add') ?>" class="btn btn-sm bg-colour">Add
                                            Event</a>
                                        <a href="<?= base_url('adm1n/event/exportExcel') ?>"
                                            class="btn btn-sm bg-colour exportCsv">Export CSV</a>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="eventsTable" class="table table-striped table-hover">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Event Title</th>
                                                    <th>Event Date</th>
                                                    <th>Event Time</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (empty($events)): ?>
                                                <tr>
                                                    <td colspan="5" class="text-center">No Record Found...</td>
                                                </tr>
                                                <?php else: ?>
                                                <?php foreach ($events as $key => $event): ?>
                                                <tr>
                                                    <td><?= $key + 1; ?></td>
                                                    <td><?= esc($event['event_name']); ?></td>
                                                    <td><?= esc($event['event_date']); ?></td>
                                                    <td><?= esc($event['start_time']); ?></td>
                                                    <td>
                                                        <span class="d-flex align-items-center">
                                                            <span class="ms-2">
                                                                <a href="<?= base_url('adm1n/events/edit/' . $event['id']); ?>"
                                                                    class="text-primary" title="Edit">
                                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                                </a>
                                                            </span>
                                                            <span class="ms-2">
                                                                <a href="<?= base_url('adm1n/events/view/' . $event['id']); ?>"
                                                                    class="text-info" title="View">
                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                </a>
                                                            </span>
                                                            <span class="ms-2">
                                                                <form
                                                                    action="<?= base_url('adm1n/events/delete/' . $event['id']); ?>"
                                                                    method="POST" style="display:inline;">
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    <button type="submit" class="text-danger"
                                                                        title="Delete"
                                                                        onclick="return confirm('Are you sure you want to delete this event?');">
                                                                        <i class="las la-trash-alt"></i>
                                                                    </button>
                                                                </form>
                                                            </span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- container -->

            <!-- Start Footer -->
            <?= $this->include('partials/footer') ?>
            <!-- End Footer -->
        </div>
        <!-- End page content -->
    </div>
    <!-- End page-wrapper -->

    <!-- Javascript -->
    <?= $this->include('partials/vendorjs') ?>

    <!-- DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>


    <script>
    $(document).ready(function() {
        $('#eventsTable').DataTable();
    });
    </script>

    </script>

</body>

</html>