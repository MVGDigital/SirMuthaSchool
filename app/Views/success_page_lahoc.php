<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php if (isset($message) && $message !== ""): ?>
    <p class="text-success" role="alert"><?php echo $message; ?></p>
<?php endif; ?>

<?php if (isset($registration_number)): ?>
    <h3 style="text-align:center;">Lady Andal House Of Children Activity Centre / Pre-KG : 2025- 2026</h3> 
    <h4 style="text-align:center;margin-top:30px;">
        Your Application has been successfully registered. 
        <br>Please note this Application Number for your future reference
        <br><br>
        <b>Application Number : <?php echo $registration_number; ?>/2526</b>
        <br><br>
        Please <a target="_blank" style="color:#2A3F92;" href="<?php echo base_url('admissionformlahoc/printView/' . $registration_number); ?>">click here</a> to print the application.
    </h4>
<?php else: ?>
    <p class="text-danger" style="text-align:center;">Invalid application number. Please try again.</p>
<?php endif; ?>

<!-- Add Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>