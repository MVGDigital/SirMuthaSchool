<head>
    <style>
        .fields {
            display: flex;
            padding: 0 30px;
            margin: 15px 0;
            text-align: start;
            line-height: 2.5;
            flex-direction: column;
        }

        .fields label {
            font-size: 16px;
            color: #474747;
            font-family: 'Open Sans';
        }

        .fields label span {
            color: red;
        }

        #contact-form input {
            margin-bottom: 0;
        }

        .fields input {
            margin: 15px 0;
            padding: 10px;
            border: 1px solid #B2B9C8;
        }

        .fullWithBtn {
            margin: 20px 0;
            width: 100%;
        }

        .form-btn-sec {
            padding: 0 10px;
        }

        input:focus-visible {
            outline: none !important;
        }

        input::placeholder {
            font-size: 14px;
            line-height: 25px;
            font-family: 'Open Sans Light';
            color: #72716D !important;
        }

        select {
            font-size: 14px;
            line-height: 25px;
            font-family: 'Open Sans Light';
            color: #4d4d4d !important;
        }

        option[value=""][disabled] {
            color: #72716D !important;
        }

        label.error {
            margin: 10px 0;
            color: #ff1400;
        }

        .captcha-error {
            margin: 10px 0;
            color: #ff1400 !important;
            font-size: 14px;
            font-family: 'Open Sans';
        }

        .formFields {
            display: flex;
        }

        .fields textarea {
            margin: 15px 0;
            padding: 10px;
            height: 46px;
            border: 1px solid #B2B9C8;
        }

        .fields select {
            margin: 15px 0;
            padding: 10px;
            border: 1px solid #B2B9C8;
        }

        .fields select:focus-visible {
            outline: none;
        }

        .fields textarea:focus-visible {
            outline: none;
        }

        .form-btn-sec {
            text-align: center;
        }

        #admission-form .sectionTitle {
            color: #102753;
            margin: 50px 0;
        }

        #admission-form .sectionTitle h3 {
            color: #102753;
            margin: 0 0 30px 0;
        }

        #admission-form .sectionTitle p {
            color: #6D7A84 !important;
            /* margin: 0 0 30px 0; */
        }

        .form-btn {
            padding: 20px 50px !important;
            margin-top: 30px;
            width: 40%;
            border-radius: 5px;
        }
    </style>
</head>

<main>
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="bannerImg-OverlayContainer"></div>
        <?php if (!empty($banner)): ?>
            <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid deskTopImg"
                alt="<?= esc($banner['title']); ?>">
            <img src="<?= base_url('uploads/banner_images/' . $banner['mobile_image']); ?>" class="img-fluid mobImg w100"
                alt="Banner image">
            <div class="bannerTitle">
                <h1>Sir Mutha School</h1>
                <p>A unit of the madras seva sadan</p>
            </div>
            <div class="banner-subTitle">
                <h2><?= esc($banner['title']); ?></h2>
            </div>
        <?php endif; ?>
    </section>
    <!-- Banner Section -->
    <section>
        <div class="container">
            <?php if (isset($validation)) : ?>
                <div class="error-message">
                    <?php foreach ($validation as $error) : ?>
                        <p><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form id="admission-form" method="post" action="/admissionformlahoc/submit" enctype="multipart/form-data">
                <h5 class="sectionTitle text-center mt-5">Join Sir Mutha School</h5>
                <h3 class="sectionTitle text-center ">Lady Andal House Of Children Activity Centre / Pre-KG : 2025-
                    2026
                </h3>
                <p class="text-center sectionTitle mt-0">Fill in the student details and * marked fields are mandatory
                </p>
                <div class="row">
                    <div class="formFields row w100 m-0">
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="name">Name of the Student*</label>
                            <input type="text" id="name" name="student_name" class="form-control"
                                placeholder="Enter student's full name"
                                vlaue="<?php echo isset($oldInput['name']) ? $oldInput['name'] : ''; ?> ">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="dob">Date of Birth*</label>
                            <input type="date" id="dob" name="dob" min="2021-04-01" max="2022-04-01"
                                class="form-control"
                                value="<?php echo isset($oldInput['dob']) ? $oldInput['dob'] : ''; ?>">
                            <large>(The child should have completed 3 years of age as on 31st March 2025)</large>
                        </div>
                    </div>
                    <div class="formFields row w100 m-0">

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="gender">Gender*</label>
                            <select id="gender" name="gender" class="form-control" placeholder="Select gender">
                                <option value="">Select</option>
                                <option value="male"
                                    <?php echo isset($oldInput['gender']) && $oldInput['gender'] === 'male' ? 'selected' : ''; ?>>
                                    Male</option>
                                <option value="female"
                                    <?php echo isset($oldInput['gender']) && $oldInput['gender'] === 'female' ? 'selected' : ''; ?>>
                                    Female</option>
                                <option value="other"
                                    <?php echo isset($oldInput['gender']) && $oldInput['gender'] === 'other' ? 'selected' : ''; ?>>
                                    Other</option>
                            </select>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="nationality">Nationality*</label>
                            <input type="text" id="nationality" name="nationality" class="form-control"
                                placeholder="Enter nationality"
                                value="<?php echo isset($oldInput['nationality']) ? $oldInput['religion'] : ''; ?>">
                        </div>
                    </div>
                    <div class="formFields row w100 m-0">

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="state">State*</label>
                            <input id="state" type="text" name="state" class="form-control"
                                placeholder="Enter state of residence"
                                value="<?php echo isset($oldInput['state']) ? $oldInput['state'] : ''; ?>">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="religion">Religion*</label>
                            <input type="text" id="religion" name="religion" class="form-control"
                                placeholder="Enter religion"
                                value="<?php echo isset($oldInput['religion']) ? $oldInput['religion'] : ''; ?>">
                        </div>
                    </div>

                    <div class="formFields row w100 m-0">
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="caste">Caste*</label>
                            <input id="caste" type="text" name="caste" class="form-control" placeholder="Enter caste"
                                value="<?php echo isset($oldInput['caste']) ? $oldInput['caste'] : ''; ?>">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="community">Community*</label>
                            <input type="text" id="community" name="community" class="form-control"
                                placeholder="Enter community"
                                value="<?php echo isset($oldInput['community']) ? $oldInput['community'] : ''; ?>">
                        </div>
                    </div>

                    <div class="formFields row w100 m-0">
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="mother_tongue">Mother Tongue*</label>
                            <input type="text" id="mother_tongue" name="mother_tongue" class="form-control"
                                placeholder="Enter mother tongue"
                                value="<?php echo isset($oldInput['mother_tongue']) ? $oldInput['mother_tongue'] : ''; ?>">
                        </div>


                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="residential_address">Residential Address*</label>
                            <input type="text" id="residential_address" name="residential_address" class="form-control"
                                placeholder="Enter your residential address"
                                value="<?php echo isset($oldInput['residential_address']) ? $oldInput['residential_address'] : ''; ?>">
                        </div>
                    </div>

                    <h3 class="text-center sectionTitle">Father's Details</h3>
                    <p class="text-center sectionTitle mt-0">Fill in the student details and * marked fields are
                        mandatory
                    </p>
                    <div class="formFields row w100 m-0">

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="father_name">Father's Name*</label>
                            <input type="text" id="father_name" name="father_name" class="form-control"
                                placeholder="Enter father's full name"
                                value="<?php echo isset($oldInput['father_name']) ? $oldInput['father_name'] : ''; ?>">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="father_religion">Religion*</label>
                            <input type="text" id="father_religion" name="father_religion" class="form-control"
                                placeholder="Enter father's religion"
                                value="<?php echo isset($oldInput['father_religion']) ? $oldInput['father_religion'] : ''; ?>">
                        </div>
                    </div>

                    <div class="formFields row w100 m-0">
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="father_language">Language*</label>
                            <input type="text" id="father_language" name="father_language" class="form-control"
                                placeholder="Enter father's language"
                                value="<?php echo isset($oldInput['father_language']) ? $oldInput['father_language'] : ''; ?>">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="father_qualification">Qualification*</label>
                            <input type="text" id="father_qualification" name="father_qualification"
                                class="form-control" placeholder="Enter father's qualification"
                                value="<?php echo isset($oldInput['father_qualification']) ? $oldInput['father_qualification'] : ''; ?>">
                        </div>
                    </div>
                    <div class="formFields row w100 m-0">
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="father_occupation">Occupation*</label>
                            <input type="text" id="father_occupation" name="father_occupation" class="form-control"
                                placeholder="Enter father's occupation"
                                value="<?php echo isset($oldInput['father_occupation']) ? $oldInput['father_occupation'] : ''; ?>">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="father_office_address">Father's office address*</label>
                            <input type="text" id="father_office_address" name="father_office_address"
                                class="form-control" placeholder="Enter father's office address"
                                value="<?php echo isset($oldInput['father_office_address']) ? $oldInput['father_office_address'] : ''; ?>">
                        </div>
                    </div>
                    <div class="formFields row w100 m-0">

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="father_mobile">Mobile Number*</label>
                            <input type="tel" id="father_mobile" name="father_mobile" class="form-control"
                                placeholder="Enter father's mobile number"
                                value="<?php echo isset($oldInput['father_mobile']) ? $oldInput['father_mobile'] : ''; ?>">
                        </div>



                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="father_email">Email ID*</label>
                            <input type="email" id="father_email" name="father_email" class="form-control"
                                placeholder="Enter father's email ID"
                                value="<?php echo isset($oldInput['father_email']) ? $oldInput['father_email'] : ''; ?>">
                        </div>
                    </div>
                    <h3 class="text-center sectionTitle">Mother's Details</h3>
                    <p class="text-center sectionTitle mt-0">Fill in the student details and * marked fields are
                        mandatory
                    </p>
                    <div class="formFields row w100 m-0">
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="mother_name">Mother's Name*</label>
                            <input type="text" id="mother_name" name="mother_name" class="form-control"
                                placeholder="Enter mother's full name"
                                value="<?php echo isset($oldInput['mother_name']) ? $oldInput['mother_name'] : ''; ?>">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="mother_religion">Religion*</label>
                            <input type="text" id="mother_religion" name="mother_religion" class="form-control"
                                placeholder="Enter mother's religion"
                                value="<?php echo isset($oldInput['mother_religion']) ? $oldInput['mother_religion'] : ''; ?>">
                        </div>
                    </div>
                    <div class="formFields row w100 m-0">
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="mother_language">Language*</label>
                            <input type="text" id="mother_language" name="mother_language" class="form-control"
                                placeholder="Enter mother's language"
                                value="<?php echo isset($oldInput['mother_language']) ? $oldInput['mother_language'] : ''; ?>">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="mother_qualification">Qualification*</label>
                            <input type="text" id="mother_qualification" name="mother_qualification"
                                class="form-control" placeholder="Enter mother's qualification"
                                value="<?php echo isset($oldInput['mother_qualification']) ? $oldInput['mother_qualification'] : ''; ?>">
                        </div>
                    </div>

                    <div class="formFields row w100 m-0">




                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="mother_occupation">Occupation*</label>
                            <input type="text" id="mother_occupation" name="mother_occupation" class="form-control"
                                placeholder="Enter mother's occupation"
                                value="<?php echo isset($oldInput['mother_occupation']) ? $oldInput['mother_occupation'] : ''; ?>">
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="mother_office_address">Mother's office address*</label>
                            <input type="text" id="mother_office_address" name="mother_office_address"
                                class="form-control" placeholder="Enter mother's office address"
                                value="<?php echo isset($oldInput['mother_office_address']) ? $oldInput['mother_office_address'] : ''; ?>">
                        </div>

                    </div>
                    <div class="formFields row w100 m-0">

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="mother_mobile">Mobile Number*</label>
                            <input type="tel" id="mother_mobile" name="mother_mobile" class="form-control"
                                placeholder="Enter mother's mobile number"
                                value="<?php echo isset($oldInput['mother_mobile']) ? $oldInput['mother_mobile'] : ''; ?>">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="mother_email">Email ID*</label>
                            <input type="email" id="mother_email" name="mother_email" class="form-control"
                                placeholder="Enter mother's email ID"
                                value="<?php echo isset($oldInput['mother_email']) ? $oldInput['mother_email'] : ''; ?>">
                        </div>
                    </div>
                    <div class="formFields row w100 m-0">
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="family_photo">Upload Photo (Family)</label>
                            <input type="file" id="family_photo" name="family_photo" class="form-control"
                                accept="image/*">
                        </div>
                    </div>
                    <h3 class="text-center sectionTitle">Guardian's Details</h3>
                    <div class="formFields row w100 m-0">
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="guardian_name">Guardian's Name</label>
                            <input type="text" id="guardian_name" name="guardian_name" class="form-control"
                                placeholder="Enter guardian's full name"
                                value="<?php echo isset($oldInput['guardian_name']) ? $oldInput['guardian_name'] : ''; ?>">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="guardian_relation">Relationship to the student</label>
                            <input type="text" id="guardian_relation" name="guardian_relation" class="form-control"
                                placeholder="Enter relationship to the student"
                                value="<?php echo isset($oldInput['guardian_relation']) ? $oldInput['guardian_relation'] : ''; ?>">
                        </div>
                    </div>

                    <div class="formFields row w100 m-0">
                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="guardian_occupation">Occupation</label>
                            <input type="text" id="guardian_occupation" name="guardian_occupation" class="form-control"
                                placeholder="Enter guardian's occupation"
                                value="<?php echo isset($oldInput['guardian_occupation']) ? $oldInput['guardian_occupation'] : ''; ?>">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="guardian_address">Residential Address</label>
                            <input type="text" id="guardian_address" name="guardian_address" class="form-control"
                                placeholder="Enter guardian's residential address"
                                value="<?php echo isset($oldInput['guardian_address']) ? $oldInput['guardian_address'] : ''; ?>">
                        </div>
                    </div>
                    <div class="formFields row w100 m-0">

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="guardian_mobile">Mobile Number</label>
                            <input type="tel" id="guardian_mobile" name="guardian_mobile" class="form-control"
                                placeholder="Enter guardian's mobile number"
                                value="<?php echo isset($oldInput['guardian_mobile']) ? $oldInput['guardian_mobile'] : ''; ?>">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="guardian_email">Email ID</label>
                            <input type="email" id="guardian_email" name="guardian_email" class="form-control"
                                placeholder="Enter guardian's email ID"
                                value="<?php echo isset($oldInput['guardian_email']) ? $oldInput['guardian_email'] : ''; ?>">
                        </div>
                    </div>
                    <div class="formFields row w100 m-0">

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="sibling_name">Sibling Name & Class (if any studying in Lady Andal School / Sir Mutha School / NIOS)</label>
                            <input type="text" id="sibling_name" name="sibling_name" class="form-control"
                                placeholder="Enter sibling's name and class"
                                value="<?php echo isset($oldInput['sibling_name']) ? $oldInput['sibling_name'] : ''; ?>">
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 fields">
                            <label for="other_info">Any other information</label>
                            <textarea id="other_info" name="other_info" class="form-control"
                                placeholder="Provide any additional information here"><?php echo isset($oldInput['other_info']) ? $oldInput['other_info'] : ''; ?></textarea>
                        </div>
                    </div>

                </div>
                <input type="hidden" name="registration_number"
                    value="<?php echo isset($registration_number) ? $registration_number : ''; ?>">

                <div class="col-12 fields text-center">
                    <button type="submit" class="form-btn">Submit</button>
                </div>
        </div>

        <div class="col-12 fields text-center mt-4">
            <p>
                <strong>Note:</strong> A copy of this completed Registration Form with Signature must be
                submitted to
                <strong>Mrs. Swarnalatha</strong>, <span class="blue-text">+91 73586 00554</span>, at the
                time of the Interview.
            </p>
        </div>
        </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>
        <script>
            $(document).ready(function() {
                // Custom method for email validation
                $.validator.addMethod("emailValidation", function(value, element) {
                    return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(
                        value);
                }, "Please enter a valid email address");

                // Custom method for phone number validation
                $.validator.addMethod("phoneIN", function(phone_number, element) {
                    return this.optional(element) || phone_number.match(/^[6-9]\d{9}$/);
                }, "Please enter a valid 10-digit mobile number");

                $('#admission-form').validate({
                    errorElement: 'span',
                    errorClass: 'error',
                    validClass: 'valid',
                    highlight: function(element, errorClass, validClass) {
                        $(element).addClass(errorClass).removeClass(validClass);
                        $(element).closest('.fields').addClass('is-invalid');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                        $(element).removeClass(errorClass).addClass(validClass);
                        $(element).closest('.fields').removeClass('is-invalid');
                    },
                    errorPlacement: function(error, element) {
                        error.addClass('invalid-feedback');
                        element.closest('.fields').append(error);
                    },
                    rules: {
                        student_name: {
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
                            required: true,
                            phoneIN: true // Use the phone validation method
                        },
                        father_office_address: {
                            required: true
                        },
                        father_email: {
                            required: true,
                            emailValidation: true // Use the email validation method
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
                            required: true,
                            phoneIN: true // Use the phone validation method
                        },
                        mother_office_address: {
                            required: true
                        },
                        mother_email: {
                            required: true,
                            emailValidation: true // Use the email validation method
                        },
                        guardian_mobile: {
                            phoneIN: true // Use the phone validation method
                        },
                        guardian_email: {
                            emailValidation: true // Use the email validation method
                        },
                        family_photo: {
                            required: true
                        }
                    },
                    messages: {
                        student_name: {
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
                        father_office_address: {
                            required: "Father's Office Address is required"
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
                        mother_office_address: {
                            required: "Mother's Office Address is required"
                        },
                        mother_email: {
                            required: "Mother's Email ID is required"
                        },
                        family_photo: {
                            required: "Family Photo is required"
                        }
                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });

                // Prevent form submission if validation fails
                $('#admission-form').on('submit', function(e) {
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

                // Input restrictions for all text fields
                $('#admission-form input[type="text"]').on("input", function() {
                    const value = $(this).val();
                    // Allow only letters and spaces
                    $(this).val(value.replace(/[^a-zA-Z\s]/g, ""));
                });

                // Mobile number input restriction
                // $('#father_mobile, #mother_mobile, #guardian_mobile').on("input", function() {
                //     const value = $(this).val();
                //     $(this).val(value.replace(/[^0-9]/g, "")); // Remove non-numeric characters
                // });

                // // Email input restriction
                // $('#father_email, #mother_email, #guardian_email').on("input", function() {
                //     const value = $(this).val();
                //     $(this).val(value.replace(/[^a-zA-Z0-9._-@]/g,
                //     "")); // Allow only valid email characters
                // });
            });
        </script>