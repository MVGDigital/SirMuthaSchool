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
                                        <h4 class="card-title">Admissions LAHOC List</h4>
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
                                                <td><?php echo $admission['student_name']; ?></td>
                                                <td><?php echo $admission['dob']; ?></td>
                                                <td><?php echo $admission['gender']; ?></td>
                                                <td><?php echo $admission['nationality']; ?></td>
                                                <td><?php echo $admission['state']; ?></td>

                                                <td>
                                                    <a target="_blank"
                                                        href="<?php echo base_url('admissionformlahoc/adminprintView_lahoc/' . $admission['registration_number']); ?>">View</a>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('adm1n/admission/delete/' . $admission['id']); ?>"
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
                dom: '<"row"<"col-sm-12 mb-2 text-md-right"B>>' + // Buttons (Export) on the right
                    '<"row"<"col-sm-6"l><"col-sm-6"f>>' + // Length on the left, Search on the right
                    '<"row"<"col-sm-12"tr>>' + // Table
                    '<"row"<"col-sm-12"i><"col-sm-12"p>>', // Layout structure
                buttons: [{
                    extend: 'excelHtml5',
                    text: 'Export to Excel',
                    className: 'btn btn-success',
                    exportOptions: {
                        columns: ':visible', // Export all visible columns
                    },
                    action: function(e, dt, node, config) {
                        // Get all rows data
                        var data = dt.rows({
                            search: 'applied'
                        }).data().toArray();

                        // Create a new workbook
                        var wb = XLSX.utils.book_new();
                        var ws_data = [];

                        // Add headers
                        ws_data.push(['S.No', 'Registration Number', 'Student Name',
                            'Date of Birth', 'Gender',
                            'Nationality', 'State', 'Religion', 'Caste',
                            'Community',
                            'Residential Address', 'Father Name', 'Father Religion',
                            'Father Language', 'Father Qualification',
                            'Father Occupation',
                            'Father Mobile', 'Father Email', 'Mother Name',
                            'Mother Religion',
                            'Mother Language', 'Mother Qualification',
                            'Mother Occupation',
                            'Mother Mobile', 'Mother Email', 'Guardian Name',
                            'Guardian Relation', 'Guardian Occupation',
                            'Guardian Mobile',
                            'Guardian Email', 'Guardian Address', 'Sibling Name',
                            'Other Info'
                        ]);

                        // Add data rows for all admissions
                        <?php $serial = 1; ?>
                        <?php foreach ($admissions as $admission): ?>
                        ws_data.push([
                            <?php echo $serial++; ?>, // S.No
                            '<?php echo esc($admission['registration_number']); ?>', // Registration Number
                            '<?php echo esc($admission['student_name']); ?>', // Student Name
                            '<?php echo esc(date('d-M-Y', strtotime($admission['dob']))); ?>', // Date of Birth
                            '<?php echo esc($admission['gender']); ?>', // Gender
                            '<?php echo esc($admission['nationality']); ?>', // Nationality
                            '<?php echo esc($admission['state']); ?>', // State
                            '<?php echo esc($admission['religion']); ?>', // Religion
                            '<?php echo esc($admission['caste']); ?>', // Caste
                            '<?php echo esc($admission['community']); ?>', // Community
                            '<?php echo esc($admission['residential_address']); ?>', // Residential Address
                            '<?php echo esc($admission['father_name']); ?>', // Father Name
                            '<?php echo esc($admission['father_religion']); ?>', // Father Religion
                            '<?php echo esc($admission['father_language']); ?>', // Father Language
                            '<?php echo esc($admission['father_qualification']); ?>', // Father Qualification
                            '<?php echo esc($admission['father_occupation']); ?>', // Father Occupation
                            '<?php echo esc($admission['father_mobile']); ?>', // Father Mobile
                            '<?php echo esc($admission['father_email']); ?>', // Father Email
                            '<?php echo esc($admission['mother_name']); ?>', // Mother Name
                            '<?php echo esc($admission['mother_religion']); ?>', // Mother Religion
                            '<?php echo esc($admission['mother_language']); ?>', // Mother Language
                            '<?php echo esc($admission['mother_qualification']); ?>', // Mother Qualification
                            '<?php echo esc($admission['mother_occupation']); ?>', // Mother Occupation
                            '<?php echo esc($admission['mother_mobile']); ?>', // Mother Mobile
                            '<?php echo esc($admission['mother_email']); ?>', // Mother Email
                            '<?php echo esc($admission ['guardian_name']); ?>', // Guardian Name
                            '<?php echo esc($admission['guardian_relation']); ?>', // Guardian Relation
                            '<?php echo esc($admission['guardian_occupation']); ?>', // Guardian Occupation
                            '<?php echo esc($admission['guardian_mobile']); ?>', // Guardian Mobile
                            '<?php echo esc($admission['guardian_email']); ?>', // Guardian Email
                            '<?php echo esc($admission['guardian_address']); ?>', // Guardian Address
                            '<?php echo esc($admission['sibling_name']); ?>', // Sibling Name
                            '<?php echo esc($admission['other_info']); ?>' // Other Info
                        ]);
                        <?php endforeach; ?>

                        // Create worksheet and add data
                        var ws = XLSX.utils.aoa_to_sheet(ws_data);
                        XLSX.utils.book_append_sheet(wb, ws, "Admissions");

                        // Export the workbook
                        XLSX.writeFile(wb, "admissions-lahoc-list.xlsx");
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