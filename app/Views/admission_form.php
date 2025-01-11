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
        .was-validated .form-control:invalid {
            border-color: #dc3545;
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
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter student's full name" vlaue="<?php echo isset($oldInput['name']) ? $oldInput['name'] : ''; ?> " required>
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth*</label>
                        <input type="date" id="dob" name="dob" min="2001-04-01" max="2021-04-01" class="form-control" value="<?php echo isset($oldInput['dob']) ? $oldInput['dob'] : ''; ?> " required>
                        <large>(The child should complete 4 yrs of age as on 1st April 2025 for LKG)</large>
                    </div>

                    <div class="form-group">
                        <label for="nationality">Nationality*</label>
                        <input type="text" id="nationality" name="nationality" class="form-control" placeholder="Enter nationality" value="<?php echo isset($oldInput['nationality']) ? $oldInput['religion'] : ''; ?> " required>
                    </div>

                    <div class="form-group">
                        <label for="religion">Religion*</label>
                        <input type="text" id="religion" name="religion" class="form-control" placeholder="Enter religion" value="<?php echo isset($oldInput['religion']) ? $oldInput['religion'] : ''; ?> " required>
                    </div>

                    <div class="form-group">
                        <label for="community">Community*</label>
                        <input type="text" id="community" name="community" class="form-control" placeholder="Enter community" value="<?php echo isset($oldInput['community']) ? $oldInput['community'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="mother_tongue">Mother Tongue*</label>
                        <input type="text" id="mother_tongue" name="mother_tongue" class="form-control" placeholder="Enter mother tongue" value="<?php echo isset($oldInput['mother_tongue']) ? $oldInput['mother_tongue'] : ''; ?>" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender">Gender*</label>
                        <select id="gender" name="gender" class="form-control" placeholder="Select gender" required>
                            <option value="">Select</option>
                            <option value="male" <?php echo isset($oldInput['gender']) && $oldInput['gender'] === 'male' ? 'selected' : ''; ?>>Male</option>
                            <option value="female" <?php echo isset($oldInput['gender']) && $oldInput['gender'] === 'female' ? 'selected' : ''; ?>>Female</option>
                            <option value="other" <?php echo isset($oldInput['gender']) && $oldInput['gender'] === 'other' ? 'selected' : ''; ?>>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="state">State*</label>
                        <input id="state" type="text" name="state" class="form-control" placeholder="Enter state of residence" value="<?php echo isset($oldInput['state']) ? $oldInput['state'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="caste">Caste*</label>
                        <input id="caste" type="text" name="caste" class="form-control" placeholder="Enter caste" value="<?php echo isset($oldInput['caste']) ? $oldInput['caste'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="class_last_studied">Class Last Studied*</label>
                        <input id="class_last_studied" type="text" name="class_last_studied" class="form-control" placeholder="Enter last studied class" value="<?php echo isset($oldInput['class_last_studied']) ? $oldInput['class_last_studied'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="school_last_attended">School Last Attended*</label>
                        <input id="school_last_attended" type="text" name="school_last_attended" class="form-control" placeholder="Enter last attended school" value="<?php echo isset($oldInput['school_last_attended']) ? $oldInput['school_last_attended'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="class_admission_sought">Class Admission Sought For*</label>
                        <select id="class_admission_sought" name="class_admission_sought" class="form-control" required>
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
                        <input type="text" id="residential_address" name="residential_address" class="form-control" placeholder="Enter your residential address" value="<?php echo isset($oldInput['residential_address']) ? $oldInput['residential_address'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="father_name">Father's Name*</label>
                        <input type="text" id="father_name" name="father_name" class="form-control" placeholder="Enter father's full name" value="<?php echo isset($oldInput['father_name']) ? $oldInput['father_name'] : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="father_religion">Religion*</label>
                        <input type="text" id="father_religion" name="father_religion" class="form-control" placeholder="Enter father's religion" value="<?php echo isset($oldInput['father_religion']) ? $oldInput['father_religion'] : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="father_language">Language*</label>
                        <input type="text" id="father_language" name="father_language" class="form-control" placeholder="Enter father's language" value="<?php echo isset($oldInput['father_language']) ? $oldInput['father_language'] : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="father_qualification">Qualification*</label>
                        <input type="text" id="father_qualification" name="father_qualification" class="form-control" placeholder="Enter father's qualification" value="<?php echo isset($oldInput['father_qualification']) ? $oldInput['father_qualification'] : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="father_occupation">Occupation*</label>
                        <input type="text" id="father_occupation" name="father_occupation" class="form-control" placeholder="Enter father's occupation" value="<?php echo isset($oldInput['father_occupation']) ? $oldInput['father_occupation'] : ''; ?>" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="father_mobile">Mobile Number*</label>
                        <input type="tel" id="father_mobile" name="father_mobile" class="form-control" placeholder="Enter father's mobile number" value="<?php echo isset($oldInput['father_mobile']) ? $oldInput['father_mobile'] : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="father_email">Email ID*</label>
                        <input type="email" id="father_email" name="father_email" class="form-control" placeholder="Enter father's email ID" value="<?php echo isset($oldInput['father_email']) ? $oldInput['father_email'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="mother_name">Mother's Name*</label>
                        <input type="text" id="mother_name" name="mother_name" class="form-control" placeholder="Enter mother's full name" value="<?php echo isset($oldInput['mother_name']) ? $oldInput['mother_name'] : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="mother_religion">Religion*</label>
                        <input type="text" id="mother_religion" name="mother_religion" class="form-control" placeholder="Enter mother's religion" value="<?php echo isset($oldInput['mother_religion']) ? $oldInput['mother_religion'] : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="mother_language">Language*</label>
                        <input type="text" id="mother_language" name="mother_language" class="form-control" placeholder="Enter mother's language" value="<?php echo isset($oldInput['mother_language']) ? $oldInput['mother_language'] : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="mother_qualification">Qualification*</label>
                        <input type="text" id="mother_qualification" name="mother_qualification" class="form-control" placeholder="Enter mother's qualification" value="<?php echo isset($oldInput['mother_qualification']) ? $oldInput['mother_qualification'] : ''; ?>" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mother_occupation">Occupation*</label>
                        <input type="text" id="mother_occupation" name="mother_occupation" class="form-control" placeholder="Enter mother's occupation" value="<?php echo isset($oldInput['mother_occupation']) ? $oldInput['mother_occupation'] : ''; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="mother_mobile">Mobile Number*</label>
                        <input type="tel" id="mother_mobile" name="mother_mobile" class="form-control" placeholder="Enter mother's mobile number" value="<?php echo isset($oldInput['mother_mobile']) ? $oldInput['mother_mobile'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="mother_email">Email ID*</label>
                        <input type="email" id="mother_email" name="mother_email" class="form-control" placeholder="Enter mother's email ID" value="<?php echo isset($oldInput['mother_email']) ? $oldInput['mother_email'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="guardian_name">Legal Guardian's Name*</label>
                        <input type="text" id="guardian_name" name="guardian_name" class="form-control" placeholder="Enter guardian's full name" value="<?php echo isset($oldInput['guardian_name']) ? $oldInput['guardian_name'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="guardian_relation">Relationship to the student*</label>
                        <input type="text" id="guardian_relation" name="guardian_relation" class="form-control" placeholder="Enter relationship to the student" value="<?php echo isset($oldInput['guardian_relation']) ? $oldInput['guardian_relation'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="guardian_occupation">Occupation*</label>
                        <input type="text" id="guardian_occupation" name="guardian_occupation" class="form-control" placeholder="Enter guardian's occupation" value="<?php echo isset($oldInput['guardian_occupation']) ? $oldInput['guardian_occupation'] : ''; ?>" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="guardian_address">Residential Address*</label>
                        <input type="text" id="guardian_address" name="guardian_address" class="form-control" placeholder="Enter guardian's residential address" value="<?php echo isset($oldInput['guardian_address']) ? $oldInput['guardian_address'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="guardian_mobile">Mobile Number*</label>
                        <input type="tel" id="guardian_mobile" name="guardian_mobile" class="form-control" placeholder="Enter guardian's mobile number" value="<?php echo isset($oldInput['guardian_mobile']) ? $oldInput['guardian_mobile'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="guardian_email">Email ID*</label>
                        <input type="email" id="guardian_email" name="guardian_email" class="form-control" placeholder="Enter guardian's email ID" value="<?php echo isset($oldInput['guardian_email']) ? $oldInput['guardian_email'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="sibling_name">Sibling Name & Class</label>
                        <input type="text" id="sibling_name" name="sibling_name" class="form-control" placeholder="Enter sibling's name and class" value="<?php echo isset($oldInput['sibling_name']) ? $oldInput['sibling_name'] : ''; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="other_info">Any other information</label>
                        <textarea id="other_info" name="other_info" class="form-control" placeholder="Provide any additional information here"><?php echo isset($oldInput['other_info']) ? $oldInput['other_info'] : ''; ?></textarea>
                    </div>
                </div>
                <input type="hidden" name="registration_number" value="<?php echo isset($registration_number) ? $registration_number : ''; ?>">

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>

                <div class="form-group text-center mt-4">
                    <p>
                        <strong>Note:</strong> A copy of this completed Registration Form with Signature must be submitted to
                        <strong>Mrs. Swarnalatha</strong>, <span class="blue-text">+91 73586 00554</span>, at the time of the Interview.
                    </p>
                </div>


            </div>
        </form>
    </div>
    <script>
        $(document).ready(function() {
    // Custom method for phone number validation
    $.validator.addMethod("phoneIN", function(phone_number, element) {
        return this.optional(element) || phone_number.match(/^[6-9]\d{9}$/);
    }, "Please enter a valid 10-digit mobile number");

    $('#studentForm').validate({
        errorElement: 'span',
        errorClass: 'error',
        validClass: 'valid',
        highlight: function(element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
            $(element).closest('.form-control').addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
            $(element).closest('.form-control').removeClass('is-invalid');
        },
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
                rules: {
                    name: {
                        required: true
                    },
                    dob: {
                        required: true
                    },
                    nationality: {
                        required: true
                    },
                    religion: {
                        required: true
                    },
                    community: {
                        required: true
                    },
                    mother_tongue: {
                        required: true
                    },
                    gender: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    caste: {
                        required: true
                    },
                    class_last_studied: {
                        required: true
                    },
                    school_last_attended: {
                        required: true
                    },
                    class_admission_sought: {
                        required: true
                    },
                    residential_address: {
                        required: true
                    },
                    father_name: {
                        required: true
                    },
                    father_religion: {
                        required: true
                    },
                    father_language: {
                        required: true
                    },
                    father_qualification: {
                        required: true
                    },
                    father_occupation: {
                        required: true
                    },
                    father_mobile: {
                        required: true
                    },
                    father_email: {
                        required: true
                    },
                    mother_name: {
                        required: true
                    },
                    mother_religion: {
                        required: true
                    },
                    mother_language: {
                        required: true
                    },
                    mother_qualification: {
                        required: true
                    },
                    mother_occupation: {
                        required: true
                    },
                    mother_mobile: {
                        required: true
                    },
                    mother_email: {
                        required: true
                    },
                    guardian_name: {
                        required: true
                    },
                    guardian_relation: {
                        required: true
                    },
                    guardian_occupation: {
                        required: true
                    },
                    guardian_mobile: {
                        required: true
                    },
                    guardian_email: {
                        required: true
                    },
                    guardian_address: {
                        required: true
                    },
                    sibling_name: {
                        required: true
                    }


                },
                messages: {
                    name: {
                        required: "Name is required"
                    },
                    dob: {
                        required: "Date of Birth is required"
                    },
                    nationality: {
                        required: "Nationality is required"
                    },
                    religion: {
                        required: "Religion is required"
                    },
                    community: {
                        required: "Community is required"
                    },
                    mother_tongue: {
                        required: "Mother Tongue is required"
                    },
                    gender: {
                        required: "Gender is required"
                    },
                    state: {
                        required: "State is required"
                    },
                    caste: {
                        required: "Caste is required"
                    },
                    class_last_studied: {
                        required: "Class Last Studied is required"
                    },
                    school_last_attended: {
                        required: "School Last Attended is required"
                    },
                    class_admission_sought: {
                        required: "Class Admission Sought is required"
                    },
                    residential_address: {
                        required: "Residential Address is required"
                    },
                    father_name: {
                        required: "Father's Name is required"
                    },
                    father_religion: {
                        required: "Father's Religion is required"
                    },
                    father_language: {
                        required: "Father's Language is required"
                    },
                    father_qualification: {
                        required: "Father's Qualification is required"
                    },
                    father_occupation: {
                        required: "Father's Occupation is required"
                    },
                    father_mobile: {
                        required: "Father's Mobile Number is required"
                    },
                    father_email: {
                        required: "Father's Email ID is required"
                    },
                    mother_name: {
                        required: "Mother's Name is required"
                    },
                    mother_religion: {
                        required: "Mother's Religion is required"
                    },

                    mother_language: {
                        required: "Mother's Language is required"
                    },
                    mother_qualification: {
                        required: "Mother's Qualification is required"
                    },
                    mother_occupation: {
                        required: "Mother's Occupation is required"
                    },
                    mother_mobile: {
                        required: "Mother's Mobile Number is required"
                    },
                    mother_email: {
                        required: "Mother's Email ID is required"
                    },
                    guardian_name: {
                        required: "Guardian's Name is required"
                    },
                    guardian_relation: {
                        required: "Relationship to the student is required"
                    },
                    guardian_occupation: {
                        required: "Guardian's Occupation is required"
                    },
                    guardian_mobile: {
                        required: "Guardian's Mobile Number is required"
                    },
                    guardian_email: {
                        required: "Guardian's Email ID is required"
                    },
                    guardian_address: {
                        required: "Guardian's Residential Address is required"
                    },
                    sibling_name: {
                        required: "Sibling Name & Class is required"
                    }
                },
                submitHandler: function(form) {
            form.submit();
        }
    });

       // Prevent form submission if validation fails
    $('#studentForm').on('submit', function(e) {
        if (!$(this).valid()) {
            e.preventDefault();
            // Scroll to the first error
            var firstError = $(this).find('.error').first();
            if (firstError.length > 0) {
                $('html, body').animate({
                    scrollTop: firstError.offset().top - 100
                }, 500);
            }
        }
    });

    });
    </script>

   <!-- jQuery first, then jQuery Validate, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>