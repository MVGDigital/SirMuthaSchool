<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f9;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 30px;
        }

        .form-title {
            margin-bottom: 30px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            color: #0056b3;
        }

        .form-subtitle {
            text-align: center;
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .form-group label {
            font-weight: bold;
        }

        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 class="form-subtitle">Join Sir Mutha School</h2>
        <h1 class="form-title">Apply for LKG to Grade IX (2025-2026)</h1>

        <?php if (isset($validation)) : ?>
            <div class="error-message">
                <?php foreach ($validation as $error) : ?>
                    <p><?php echo $error; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form id="studentForm" method="post" action="/admission/submit">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name of the Student*</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth*</label>
                        <input type="date" id="dob" name="dob" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nationality">Nationality*</label>
                        <input type="text" id="nationality" name="nationality" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="religion">Religion*</label>
                        <input type="text" id="religion" name="religion" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="community">Community*</label>
                        <input type="text" id="community" name="community" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="mother_tongue">Mother Tongue*</label>
                        <input type="text" id="mother_tongue" name="mother_tongue" class="form-control" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender">Gender*</label>
                        <select id="gender" name="gender" class="form-control" >
                            <option value="">Select</option>
                            <option value="male" <?php echo isset($oldInput['gender']) && $oldInput['gender'] === 'male' ? 'selected' : ''; ?>>Male</option>
                            <option value="female" <?php echo isset($oldInput['gender']) && $oldInput['gender'] === 'female' ? 'selected' : ''; ?>>Female</option>
                            <option value="other" <?php echo isset($oldInput['gender']) && $oldInput['gender'] === 'other' ? 'selected' : ''; ?>>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="state">State*</label>
                        <input id="state" type="text" name="state" class="form-control" value="<?php echo isset($oldInput['state']) ? $oldInput['state'] : ''; ?>" >
                    </div>

                    <div class="form-group">
                        <label for="caste">Caste*</label>
                        <input id="caste" type="text" name="caste" class="form-control" value="<?php echo isset($oldInput['caste']) ? $oldInput['caste'] : ''; ?>" >
                    </div>

                    <div class="form-group">
                        <label for="class_last_studied">Class Last Studied*</label>
                        <input id="class_last_studied" type="text" name="class_last_studied" class="form-control" value="<?php echo isset($oldInput['class_last_studied']) ? $oldInput['class_last_studied'] : ''; ?>" >
                    </div>

                    <div class="form-group">
                        <label for="school_last_attended">School Last Attended*</label>
                        <input id="school_last_attended" type="text" name="school_last_attended" class="form-control" value="<?php echo isset($oldInput['school_last_attended']) ? $oldInput['school_last_attended'] : ''; ?>" >
                    </div>

                    <div class="form-group">
                        <label for="class_admission_sought">Class Admission Sought For*</label>
                        <select id="class_admission_sought" name="class_admission_sought" class="form-control" >
                            <option value="">Select</option>
                            <option value="EYP I (LKG)" <?php echo isset($oldInput['class_admission_sought']) && $oldInput['class_admission_sought'] === 'EYP I (LKG)' ? 'selected' : ''; ?>>EYP I (LKG)</option>
                            <option value="EYP II (UKG)" <?php echo isset($oldInput['class_admission_sought']) && $oldInput['class_admission_sought'] === 'EYP II (UKG)' ? 'selected' : ''; ?>>EYP II (UKG)</option>
                            <option value="PYP I (Class 1)" <?php echo isset($oldInput['class_admission_sought']) && $oldInput['class_admission_sought'] === 'PYP I (Class 1)' ? 'selected' : ''; ?>>PYP I (Class 1)</option>
                            <option value="PYP II (Class 2)" <?php echo isset($oldInput['class_admission_sought']) && $oldInput['class_admission_sought'] === 'PYP II (Class 2)' ? 'selected' : ''; ?>>PYP II (Class 2)</option>
                            <option value="PYP III (Class 3)" <?php echo isset($oldInput['class_admission_sought']) && $oldInput['class_admission_sought'] === 'PYP III (Class 3)' ? 'selected' : ''; ?>>PYP III (Class 3)</option>
                            <option value="PYP IV (Class 4)" <?php echo isset($oldInput['class_admission_sought']) && $oldInput['class_admission_sought'] === 'PYP IV (Class 4)' ? 'selected' : ''; ?>>PYP IV (Class 4)</option>
                            <option value="PYP V (Class 5)" <?php echo isset($oldInput['class_admission_sought']) && $oldInput['class_admission_sought'] === 'PYP V (Class 5)' ? 'selected' : ''; ?>>PYP V (Class 5)</option>
                            <option value="MYP I (Class 6)" <?php echo isset($oldInput['class_admission_sought']) && $oldInput['class_admission_sought'] === 'MYP I (Class 6)' ? 'selected' : ''; ?>>MYP I (Class 6)</option>
                            <option value="MYP II (Class 7)" <?php echo isset($oldInput['class_admission_sought']) && $oldInput['class_admission_sought'] === 'MYP II (Class 7)' ? 'selected' : ''; ?>>MYP II (Class 7)</option>
                            <option value="MYP III (Class 8)" <?php echo isset($oldInput['class_admission_sought']) && $oldInput['class_admission_sought'] === 'MYP III (Class 8)' ? 'selected' : ''; ?>>MYP III (Class 8)</option>
                            <option value="MYP IV (Class 9)" <?php echo isset($oldInput['class_admission_sought']) && $oldInput['class_admission_sought'] === 'MYP IV (Class 9)' ? 'selected' : ''; ?>>MYP IV (Class 9)</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="residential_address">Residential Address*</label>
                        <input type="text" id="residential_address" name="residential_address" class="form-control" value="<?php echo isset($oldInput['residential_address']) ? $oldInput['residential_address'] : ''; ?>" >
                    </div>

                    <div class="form-group">
                        <label for="father_name">Father's Name*</label>
                        <input type="text" id="father_name" name="father_name" class="form-control" value="<?php echo isset($oldInput['father_name']) ? $oldInput['father_name'] : ''; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="father_religion">Religion*</label>
                        <input type="text" id="father_religion" name="father_religion" class="form-control" value="<?php echo isset($oldInput['father_religion']) ? $oldInput['father_religion'] : ''; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="father_language">Language*</label>
                        <input type="text" id="father_language" name="father_language" class="form-control" value="<?php echo isset($oldInput['father_language']) ? $oldInput['father_language'] : ''; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="father_qualification">Qualification*</label>
                        <input type="text" id="father_qualification" name="father_qualification" class="form-control" value="<?php echo isset($oldInput['father_qualification']) ? $oldInput['father_qualification'] : ''; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="father_occupation">Occupation*</label>
                        <input type="text" id="father_occupation" name="father_occupation" class="form-control" value="<?php echo isset($oldInput['father_occupation']) ? $oldInput['father_occupation'] : ''; ?>" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="father_mobile">Mobile Number*</label>
                        <input type="tel" id="father_mobile" name="father_mobile" class="form-control" value="<?php echo isset($oldInput['father_mobile']) ? $oldInput['father_mobile'] : ''; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="father_email">Email ID*</label>
                        <input type="email" id="father_email" name="father_email" class="form-control" value="<?php echo isset($oldInput['father_email']) ? $oldInput['father_email'] : ''; ?>" >
                    </div>

                    <div class="form-group">
                        <label for="mother_name">Mother's Name*</label>
                        <input type="text" id="mother_name" name="mother_name" class="form-control" value="<?php echo isset($oldInput['mother_name']) ? $oldInput['mother_name'] : ''; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="mother_religion">Religion*</label>
                        <input type="text" id="mother_religion" name="mother_religion" class="form-control" value="<?php echo isset($oldInput['mother_religion']) ? $oldInput['mother_religion'] : ''; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="mother_language">Language*</label>
                        <input type="text" id="mother_language" name="mother_language" class="form-control" value="<?php echo isset($oldInput['mother_language']) ? $oldInput['mother_language'] : ''; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="mother_qualification">Qualification*</label>
                        <input type="text" id="mother_qualification" name="mother_qualification" class="form-control" value="<?php echo isset($oldInput['mother_qualification']) ? $oldInput['mother_qualification'] : ''; ?>" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mother_occupation">Occupation*</label>
                        <input type="text" id="mother_occupation" name="mother_occupation" class="form-control" value="<?php echo isset($oldInput['mother_occupation']) ? $oldInput['mother_occupation'] : ''; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="mother_mobile">Mobile Number*</label>
                        <input type="tel" id="mother_mobile" name="mother_mobile" class="form-control" value="<?php echo isset($oldInput['mother_mobile']) ? $oldInput['mother_mobile'] : ''; ?>" >
                    </div>

                    <div class="form-group">
                        <label for="mother_email">Email ID*</label>
                        <input type="email" id="mother_email" name="mother_email" class="form-control" value="<?php echo isset($oldInput['mother_email']) ? $oldInput['mother_email'] : ''; ?>" >
                    </div>

                    <div class="form-group">
                        <label for="guardian_name">Legal Guardian's Name*</label>
                        <input type="text" id="guardian_name" name="guardian_name" class="form-control" value="<?php echo isset($oldInput['guardian_name']) ? $oldInput['guardian_name'] : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label for="guardian_relation">Relationship to the student*</label>
                        <input type="text" id="guardian_relation" name="guardian_relation" class="form-control" value="<?php echo isset($oldInput['guardian_relation']) ? $oldInput['guardian_relation'] : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label for="guardian_occupation">Occupation*</label>
                        <input type="text" id="guardian_occupation" name="guardian_occupation" class="form-control" value="<?php echo isset($oldInput['guardian_occupation']) ? $oldInput['guardian_occupation'] : ''; ?>">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="guardian_address">Residential Address*</label>
                        <input type="text" id="guardian_address" name="guardian_address" class="form-control" value="<?php echo isset($oldInput['guardian_address']) ? $oldInput['guardian_address'] : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label for="guardian_mobile">Mobile Number*</label>
                        <input type="tel" id="guardian_mobile" name="guardian_mobile" class="form-control" value="<?php echo isset($oldInput['guardian_mobile']) ? $oldInput['guardian_mobile'] : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label for="guardian_email">Email ID*</label>
                        <input type="email" id="guardian_email" name="guardian_email" class="form-control" value="<?php echo isset($oldInput['guardian_email']) ? $oldInput['guardian_email'] : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label for="sibling_name">Sibling Name & Class</label>
                        <input type="text" id="sibling_name" name="sibling_name" class="form-control" value="<?php echo isset($oldInput['sibling_name']) ? $oldInput['sibling_name'] : ''; ?>">
                    </div>

                    <div class="form-group">
                        <label for="other_info">Any other information</label>
                        <textarea id="other_info" name="other_info" class="form-control"><?php echo isset($oldInput['other_info']) ? $oldInput['other_info'] : ''; ?></textarea>
                    </div>
                </div>

                <input type="hidden" name="registration_number" value="<?php echo isset($registration_number) ? $registration_number : ''; ?>">

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </div>
        </form>
    </div>


    <!-- Add Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>