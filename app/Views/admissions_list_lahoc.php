<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Admissions List')) ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <?= $this->include('partials/head-css') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
    <!-- Include xlsx library -->

    <style>
    /* Custom styles for the export button */
    .btn-success {
        background-color: #102753 !important;
        /* Background color */
        color: white !important;
        /* Text color */
    }

    .btn-success:hover {
        background-color: #0a1d4b !important;
        /* Darker shade on hover */
        color: white !important;
        /* Keep text color white on hover */
    }
    </style>
</head>

<body>
    <!-- Top Bar Start -->
    <?= $this->include('partials/topbar') ?>
    <!-- Top Bar End -->

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
                                        <h4 class="card-title">Admissions List</h4>
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

                                    <table id="admissionsTable" class="display nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Registration Number</th>
                                                <th>Name</th>
                                                <th>Date of Birth</th>
                                                <th>Gender</th>
                                                <th>Nationality</th>
                                                <th>State</th>
                                                <th>Print Application</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $serial = 1; ?>
                                            <?php foreach ($admissions as $admission): ?>
                                            <tr>
                                                <td><?php echo $serial++; ?></td>
                                                <td><?php echo $admission['registration_number']; ?></td>
                                                <td><?php echo $admission['name']; ?></td>
                                                <td><?php echo $admission['dob']; ?></td>
                                                <td><?php echo $admission['gender']; ?></td>
                                                <td><?php echo $admission['nationality']; ?></td>
                                                <td><?php echo $admission['state']; ?></td>

                                                <td>
                                                    <a target="_blank"
                                                        href="<?php echo base_url('admission/printView/' . $admission['registration_number']); ?>">View</a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('admission/delete/' . $admission['id']); ?>"
                                                        onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
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
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#admissionsTable').DataTable({
                dom: '<"row"<"col-md-4"l><"col-md-4 text-center"B><"col-md-4"f>>' +
                    '<"row"<"col-12"tr>>' +
                    '<"row"<"col-md-6"i><"col-md-6"p>>', // Layout structure
                buttons: [{
                    extend: 'excelHtml5',
                    text: 'Export to Excel',
                    className: 'btn btn-success',
                    action: function(e, dt, node, config) {
                        // Get all rows data
                        var data = dt.rows({
                            search: 'applied'
                        }).data().toArray();

                        // Manually include hidden data
                        var extendedData = data.map(function(row) {
                            row.push(row.registration_number); // Add hidden field
                            row.push(row.dob); // Add another hidden field
                            return row;
                        });

                        // Export the data
                        var excelData = new Blob([JSON.stringify(extendedData)], {
                            type: "application/vnd.ms-excel"
                        });
                        var link = document.createElement('a');
                        link.href = URL.createObjectURL(excelData);
                        link.download = "admissionslist.xlsx";
                        link.click();
                    }
                }],
                responsive: true,
                pageLength: 10,
                language: {
                    searchPlaceholder: "Search admissions...",
                    search: "", // Custom search placeholder
                    lengthMenu: "Show _MENU_ entries", // Text for "Show entries" dropdown
                    info: "Showing _START_ to _END_ of _TOTAL_ entries", // Info text at bottom-left
                    paginate: {
                        previous: "Previous", // Custom text for "Previous"
                        next: "Next" // Custom text for "Next"
                    }
                }
            });
        });
        </script>

</body>

</html>