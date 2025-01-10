<!DOCTYPE html>
<html>
<head>
    <title>Application Details</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 80%; margin: 0 auto; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .btn { padding: 10px 20px; background-color: #2A3F92; color: #fff; text-decoration: none; border-radius: 5px; }
        .btn:hover { background-color: #1f2c6d; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Application Details</h1>
        <?php if (isset($admissions)): ?>
            <table>
                <tr><th>Name of Student</th><td><?php echo $admissions['name']; ?></td></tr>
                <tr><th>Date of Birth</th><td><?php echo $admissions['dob']; ?></td></tr>
                <tr><th>Gender</th><td><?php echo $admissions['gender']; ?></td></tr>
                <tr><th>Nationality</th><td><?php echo $admissions['nationality']; ?></td></tr>
                <tr><th>State</th><td><?php echo $admissions['state']; ?></td></tr>
                <tr><th>Religion</th><td><?php echo $admissions['religion']; ?></td></tr>
                <tr><th>Community</th><td><?php echo $admissions['community']; ?></td></tr>
                <tr><th>Mother Tongue</th><td><?php echo $admissions['mother_tongue']; ?></td></tr>
                <tr><th>Caste</th><td><?php echo $admissions['caste']; ?></td></tr>
                <tr><th>Class Last Studied</th><td><?php echo $admissions['class_last_studied']; ?></td></tr>
                <tr><th>School Last Attended</th><td><?php echo $admissions['school_last_attended']; ?></td></tr>
                <tr><th>Class Admission Sought</th><td><?php echo $admissions['class_admission_sought']; ?></td></tr>
                <tr><th>Residential Address</th><td><?php echo $admissions['residential_address']; ?></td></tr>  
                <tr><th>Father's Name</th><td><?php echo $admissions['father_name']; ?></td></tr>
                <tr><th>Father's Religion</th><td><?php echo $admissions['father_religion']; ?></td></tr>
                <tr><th>Father's Language</th><td><?php echo $admissions['father_language']; ?></td></tr>
                <tr><th>Father's Qualification</th><td><?php echo $admissions['father_qualification']; ?></td></tr>
                <tr><th>Father's Occupation</th><td><?php echo $admissions['father_occupation']; ?></td></tr>
                <tr><th>Father's Mobile</th><td><?php echo $admissions['father_mobile']; ?></td></tr>
                <tr><th>Father's Email</th><td><?php echo $admissions['father_email']; ?></td></tr>
                <tr><th>Mother's Name</th><td><?php echo $admissions['mother_name']; ?></td></tr>
                <tr><th>Mother's Religion</th><td><?php echo $admissions['mother_religion']; ?></td></tr>
                <tr><th>Mother's Language</th><td><?php echo $admissions['mother_language']; ?></td></tr>
                <tr><th>Mother's Qualification</th><td><?php echo $admissions['mother_qualification']; ?></td></tr>
                <tr><th>Mother's Occupation</th><td><?php echo $admissions['mother_occupation']; ?></td></tr>
                <tr><th>Mother's Mobile</th><td><?php echo $admissions['mother_mobile']; ?></td></tr>
                <tr><th>Mother's Email</th><td><?php echo $admissions['mother_email']; ?></td></tr>
                <tr><th>Guardian's Name</th><td><?php echo $admissions['guardian_name']; ?></td></tr>
                <tr><th>Guardian's Relation</th><td><?php echo $admissions['guardian_relation']; ?></td></tr>
                <tr><th>Guardian's Occupation</th><td><?php echo $admissions['guardian_occupation']; ?></td></tr>
                <tr><th>Guardian's Mobile</th><td><?php echo $admissions['guardian_mobile']; ?></td></tr>
                <tr><th>Guardian's Email</th><td><?php echo $admissions['guardian_email']; ?></td></tr>
                <tr><th>Guardian's Address</th><td><?php echo $admissions['guardian_address']; ?></td></tr>
                <tr><th>Sibling's Name</th><td><?php echo $admissions['sibling_name']; ?></td></tr>
                <tr><th>Other Information</th><td><?php echo $admissions['other_info']; ?></td></tr>
                
                <tr><th>Application Number</th><td><?php echo $admissions['registration_number']; ?>/2526</td></tr>
            </table>
            <a href="javascript:window.print()" class="btn">Save as PDF</a>
        <?php else: ?>
            <p>No details found for this application.</p>
        <?php endif; ?>
    </div>
</body>
</html>
