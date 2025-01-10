<!DOCTYPE html>
<html>
<head>
    <title>Admissions List</title>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

    <!-- jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>

    <!-- Buttons HTML5 export JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Admissions List</h1>

        <?php if (session()->getFlashdata('success')): ?>
            <p style="color: green;"><?php echo session()->getFlashdata('success'); ?></p>
        <?php elseif (session()->getFlashdata('error')): ?>
            <p style="color: red;"><?php echo session()->getFlashdata('error'); ?></p>
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
                            <a target="_blank" href="<?php echo base_url('admission/printView/' . $admission['registration_number']); ?>">View</a>
                        </td>
                        <td>
                            <a href="<?php echo base_url('admission/deleteAdmission/' . $admission['id']); ?>" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
    $(document).ready(function () {
        $('#admissionsTable').DataTable({
            dom: '<"export-button-container"B>frtip', // Custom button placement
            buttons: [
                {
                    extend: 'excelHtml5',
                    text: 'Export to Excel',
                    className: 'btn btn-success',
                    exportOptions: {
                        columns: ':visible' // Export all visible columns (no exclusions)
                    }
                }
            ],
            responsive: true // Makes the table responsive
        });

        // Style the button container
        $(".export-button-container").css({
            display: "flex",
            justifyContent: "flex-start",
            marginBottom: "10px"
        });
    });
</script>

</body>
</html>
