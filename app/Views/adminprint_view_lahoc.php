<!DOCTYPE html>
<html>

<head>
    <title>Application Details</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('images/favicon.png') ?>">
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
    }

    /* th { background-color: #f2f2f2; } */
    .btn {
        padding: 10px 20px;
        background-color: #2A3F92;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn:hover {
        background-color: #1f2c6d;
    }

    /* Print-specific styles */
    @media print {
        .note {
            display: block;
            margin-top: 20px;
            font-size: 14px;
            /* font-weight: bold; */
            color: #000;
            text-align: left;
        }

        .btn {
            display: none;
        }

        header,
        footer,
        .navbar,
        .headerContact-info,
        .quickLinks {
            display: none;
            /* Hide header, footer, and menu bar in print view */
        }

        #navbarSupportedContent,
        #BannerSection {
            display: none !important;
        }

        .container {
            margin-top: 20px;
        }

        /* Hide button in print view */
    }

    .note {
        /* display: none; */
        /* Hide by default, only visible during print */
    }
    </style>
</head>

<body>
    <!-- Banner Section -->
    <!-- <section class="banner-section" id="BannerSection">
        <?php if (!empty($banners)): ?>
        <?php foreach ($banners as $banner): ?>
        <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid deskTopImg"
            alt="<?= esc($banner['title']); ?>">
        <img src="<?= base_url('uploads/banner_images/' . $banner['mobile_image']); ?>" class="img-fluid mobImg w100"
            alt="Banner image">
        <div class="bannerTitle">
            <h1>Sir Mutha School</h1>
            <p>A unit of the madras seva sadan</p>
        </div>
        <div class="banner-subTitle">
            <h2><?= esc($banner['title']); ?></h2>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </section> -->
    <!-- Banner Section -->
    <div class="container mt-5">
    <div style="display: flex; align-items: center; justify-content: center; gap: 10px;">
    <img src="<?= base_url('images/favicon.png') ?>" alt="School Logo" style="max-width: 80px; height: auto;">
    <h1>Sir Mutha School</h1>
    </div>
        <h3>ONLINE ADMISSION ENQUIRY FORM 2025-26</h3>
        <?php if (isset($admissions)): ?>
        <table>
            <tr>
                <th>Application Number</th>
                <td><?php echo $admissions['registration_number']; ?>/2526</td>
            </tr>
            <tr>
                <th>Name of Student</th>
                <td><?php echo $admissions['student_name']; ?></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td><?php echo $admissions['dob']; ?></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><?php echo $admissions['gender']; ?></td>
            </tr>
            <tr>
                <th>Nationality</th>
                <td><?php echo $admissions['nationality']; ?></td>
            </tr>
            <tr>
                <th>State</th>
                <td><?php echo $admissions['state']; ?></td>
            </tr>
            <tr>
                <th>Religion</th>
                <td><?php echo $admissions['religion']; ?></td>
            </tr>
            <tr>
                <th>Community</th>
                <td><?php echo $admissions['community']; ?></td>
            </tr>
            <tr>
                <th>Mother Tongue</th>
                <td><?php echo $admissions['mother_language']; ?></td>
            </tr>
            <tr>
                <th>Caste</th>
                <td><?php echo $admissions['caste']; ?></td>
            </tr>
            <tr>
            <tr>
                <th>Residential Address</th>
                <td><?php echo $admissions['residential_address']; ?></td>
            </tr>
            <tr>
                <th>Father's Name</th>
                <td><?php echo $admissions['father_name']; ?></td>
            </tr>
            <tr>
                <th>Father's Religion</th>
                <td><?php echo $admissions['father_religion']; ?></td>
            </tr>
            <tr>
                <th>Father's Language</th>
                <td><?php echo $admissions['father_language']; ?></td>
            </tr>
            <tr>
                <th>Father's Qualification</th>
                <td><?php echo $admissions['father_qualification']; ?></td>
            </tr>
            <tr>
                <th>Father's Occupation</th>
                <td><?php echo $admissions['father_occupation']; ?></td>
            </tr>

            <tr>
                <th>Father's Office Address</th>
                <td><?php echo $admissions['father_office_address']; ?></td>
            </tr>

            <tr>
                <th>Father's Mobile</th>
                <td><?php echo $admissions['father_mobile']; ?></td>
            </tr>
            <tr>
                <th>Father's Email</th>
                <td><?php echo $admissions['father_email']; ?></td>
            </tr>
            <tr>
                <th>Mother's Name</th>
                <td><?php echo $admissions['mother_name']; ?></td>
            </tr>
            <tr>
                <th>Mother's Religion</th>
                <td><?php echo $admissions['mother_religion']; ?></td>
            </tr>
            <tr>
                <th>Mother's Language</th>
                <td><?php echo $admissions['mother_language']; ?></td>
            </tr>
            <tr>
                <th>Mother's Qualification</th>
                <td><?php echo $admissions['mother_qualification']; ?></td>
            </tr>
            <tr>
                <th>Mother's Occupation</th>
                <td><?php echo $admissions['mother_occupation']; ?></td>
            </tr>
            <tr>
                <th>Mother's Mobile</th>
                <td><?php echo $admissions['mother_mobile']; ?></td>
            </tr>
            <tr>
                <th>Mother's Email</th>
                <td><?php echo $admissions['mother_email']; ?></td>
            </tr>
            <tr>
                <th>Guardian's Name</th>
                <td><?php echo $admissions['guardian_name']; ?></td>
            </tr>
            <tr>
                <th>Guardian's Relation</th>
                <td><?php echo $admissions['guardian_relation']; ?></td>
            </tr>
            <tr>
                <th>Guardian's Occupation</th>
                <td><?php echo $admissions['guardian_occupation']; ?></td>
            </tr>
            <tr>
                <th>Guardian's Mobile</th>
                <td><?php echo $admissions['guardian_mobile']; ?></td>
            </tr>
            <tr>
                <th>Guardian's Email</th>
                <td><?php echo $admissions['guardian_email']; ?></td>
            </tr>
            <tr>
                <th>Guardian's Address</th>
                <td><?php echo $admissions['guardian_address']; ?></td>
            </tr>
            <tr>
                <th>Sibling's Name</th>
                <td><?php echo $admissions['sibling_name']; ?></td>
            </tr>
            <tr>
                <th>Other Information</th>
                <td><?php echo $admissions['other_info']; ?></td>
            </tr>
            <tr>
                <th>Family Photo</th>
                <td>
                    <?php if (!empty($admissions['family_photo'])): ?>
                    <img src="<?= base_url('uploads/student_family_images/' . $admissions['family_photo']); ?>"
                        alt="Family Photo" style="max-width: 200px;">
                    <?php else: ?>
                    No photo uploaded.
                    <?php endif; ?>
                </td>
            </tr>
        </table>
        <div class="note">
            Note: A copy of this completed Registration Form with Signature must be submitted to Mrs. Swarnalatha, +91
            73586 00554, at the time of the Interview.
        </div>
        <a href="javascript:window.print()" class="btn m-5">Save as PDF</a>

        <?php else: ?>
        <p>No details found for this application.</p>
        <?php endif; ?>
    </div>
</body>

</html>