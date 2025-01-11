<footer class="container-space blueBg-Sec ptb-80">
    <div class="col-lg-3 m-auto ">
        <a class="footer-logo" href="<?= base_url('index') ?>">
            <img src="<?= base_url('images/sir-mutha-logo.svg') ?>" class="img-fluid" alt="Sir Mutha School Logo">
            <p>Sir mutha school</p>
        </a>
        <div class="contact-details">
            <p>Shenstone Park, No.7,Harrington Road, Chennai-600 031.</p>
            <p><a href="mailto:info@sirmuthaschool.edu.in">info@sirmuthaschool.edu.in</a></p>
            <p><a href="tel:+91 73586 99957">+91 73586 99957</a></p>
        </div>
        <div class="social-media">
            <a href="#"><img src="<?= base_url('images/instagram.svg') ?>" alt="Instagram icon"></a>
            <a href="#"><img src="<?= base_url('images/fb.svg') ?>" alt="facebook icon"></a>
            <a href="#"><img src="<?= base_url('images/x.svg') ?>" alt="x icon"></a>
        </div>
    </div>
    <div class="col-lg-8 m-auto footer-menus">
        <div class="itemSpaceBetween">
            <a href="<?= base_url('index') ?>">Home</a>
            <a href="<?= base_url('about') ?>">About Us</a>
            <a href="<?= base_url('academics') ?>">Academics</a>
            <a href="<?= base_url('facilities') ?>">Facilities</a>
            <a href="<?= base_url('statutory') ?>">Statutory</a>
            <a href="<?= base_url('gallery') ?>">Gallery</a>
            <a href="<?= base_url('parents') ?>">Parents</a>
            <a href="<?= base_url('beyond-curriculum') ?>">Beyond Curriculum</a>
            <a href="<?= base_url('admission') ?>">Admission</a>
            <a href="<?= base_url('career') ?>">Career</a>
            <a href="<?= base_url('contact') ?>">Contact</a>

        </div>
    </div>
    <div class="pageTitleLine">
        <hr>
    </div>
    <div class="copy-rights">
        <div class="col-12 col-md-4 col-lg-4 col-xl-6">
            <div class="policy-txt">
                <a href="#">Cookie Policy</a>
                <hr>
                <a href="#">Privacy Policy</a>
            </div>
        </div>
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
            <div class="copyRights-txt">
                <a href="#">© Copyrights sIR MUTHA SCHOOL</a>
                <hr>
                <a href="#"> Designed By MVG Digital </a>
            </div>
        </div>
    </div>
</footer>

</main>


<!-- Js Script Links -->
<script src="<?= base_url('js/jquery-3.7.1.min.js') ?>"></script>
<script src="<?= base_url('bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('js/splide.min.js') ?>"></script>
<script src="<?= base_url('js/slick.min.js') ?>"></script>
<script src="<?= base_url('js/jquery.validate.min.js') ?>"></script>
<script src="<?= base_url('js/juery.validate.additional-methods.js') ?>"></script>
<script src="<?= base_url('js/slimselect.min.js') ?>"></script>
<script src="<?= base_url('js/custom.js') ?>"></script>

<script>
<?php if ($page_code === 'index'): ?>
var splide = new Splide('#homeSlider', {
    type: 'loop',
    autoplay: true,
    padding: '10rem',
    arrows: false,
    pagination: false,
    breakpoints: {
        767: {
            perPage: 1,
            padding: '2rem',
        },
    },
});
splide.mount();
<?php endif; ?>

<?php if ($page_code === 'about'): ?>
// Function for counting up
const countUp = (el, target) => {
    let start = 0;
    const duration = 2000; // Total animation duration
    const stepTime = Math.abs(Math.floor(duration / target));

    const timer = setInterval(() => {
        start += 1;
        el.innerText = start;
        if (start >= target) {
            clearInterval(timer);
        }
    }, stepTime);
};

// Observer callback
const counterObserver = new IntersectionObserver(
    (entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute("data-count"), 10);
                countUp(counter, target);
                observer.unobserve(counter); // Stop observing once done
            }
        });
    }, {
        threshold: 0.5
    } // Trigger when 50% of the element is visible
);

// Target all counter elements
const counters = document.querySelectorAll(".counter-number");
counters.forEach((counter) => counterObserver.observe(counter));

//Founders Slider
var splide = new Splide('#founders-slider', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    pagination: true,
    speed: 1000,
    rewindSpeed: 1000,
    height: 'auto',
    perPage: 1,
    arrows: true,
    breakpoints: {
        767: {
            perPage: 1,
            pagination: true,
        },
    },
});
splide.mount();

//Board members Slider
var splide = new Splide('#board-member-slider', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    pagination: true,
    speed: 1000,
    rewindSpeed: 1000,
    height: 'auto',
    perPage: 3,
    arrows: true,
    breakpoints: {
        767: {
            perPage: 1,
            pagination: true,
        },
    },
});
splide.mount();


<?php endif; ?>

<?php if ($page_code === 'academics'): ?>

//teacher-enrichment Slider
var splide = new Splide('#teacher-enrichment', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    pagination: true,
    speed: 1000,
    rewindSpeed: 1000,
    height: 'auto',
    perPage: 3,
    arrows: true,
    breakpoints: {
        912: {
            perPage: 2,
            pagination: true,
        },
        767: {
            perPage: 1,
            pagination: true,
        },
    },
});
splide.mount();

<?php endif; ?>

<?php if ($page_code === 'intheoutdoor'): ?>

    //Board members Slider
    var splide = new Splide('#founders-slider', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    pagination: true,
    speed: 1000,
    rewindSpeed: 1000,
    height: 'auto',
    perPage: 1,
    arrows: true,
    breakpoints: {
        767: {
            perPage: 1,
            pagination: true,
        },
    },
});
splide.mount();

<?php endif; ?>

<?php if ($page_code === 'facilities'): ?>

//Board members Slider
var splide = new Splide('#facilities', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    pagination: true,
    speed: 1000,
    rewindSpeed: 1000,
    height: 'auto',
    perPage: 1,
    arrows: true,
    breakpoints: {
        767: {
            perPage: 1,
            pagination: true,
        },
    },
});
splide.mount();

//curve Slider
var splide = new Splide('#curve-slider', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    pagination: true,
    speed: 1000,
    rewindSpeed: 1000,
    height: 'auto',
    perPage: 1,
    arrows: true,
    breakpoints: {
        767: {
            perPage: 1,
            pagination: true,
        },
    },
});
splide.mount();

//Special Education 
var splide = new Splide('#spl-education-slider', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    pagination: true,
    speed: 1000,
    rewindSpeed: 1000,
    height: 'auto',
    perPage: 1,
    arrows: true,
    breakpoints: {
        767: {
            perPage: 1,
            pagination: true,
        },
    },
});
splide.mount();

<?php endif; ?>

<?php if ($page_code === 'beyond-curriculum'): ?>

//Clubs Slider
var splide = new Splide('#clubs', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    pagination: true,
    speed: 1000,
    rewindSpeed: 1000,
    height: 'auto',
    perPage: 1,
    arrows: true,
    breakpoints: {
        767: {
            perPage: 1,
            pagination: true,
        },
    },
});
splide.mount();

/* Student Newsletter */

$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    vertical: true,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    verticalSwiping: true,
    responsive: [{
            breakpoint: 992,
            settings: {
                vertical: false,
            }
        },
        {
            breakpoint: 768,
            settings: {
                vertical: false,
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 580,
            settings: {
                vertical: false,
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 380,
            settings: {
                vertical: false,
                slidesToShow: 2,
            }
        }
    ]
});
/* Student Newsletter */

/* Annual Events */
var main = new Splide('#annual-event', {
    type: 'slide',
    heightRatio: 0.5,
    pagination: false,
    arrows: false,
    cover: true,
});

var thumbnails = new Splide('#thumbnail-slider', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    rewind: false,
    perPage: 6,
    isNavigation: true,
    pagination: false,
    cover: true,
    dragMinThreshold: {
        mouse: 4,
        touch: 10,
    },
    breakpoints: {
        640: {
            perPage: 3,
        },
    },
});

main.sync(thumbnails);
main.mount();
thumbnails.mount();


var splide = new Splide('.annual-event-imgs', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    pagination: true,
    speed: 1000,
    rewindSpeed: 1000,
    height: 'auto',
    perPage: 1,
    arrows: false,
});
splide.mount();
/* Annual Events */

<?php endif; ?>

<?php if ($page_code === 'events'): ?>

//Upcoming Events Slider
var splide = new Splide('#upcoming-events', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    pagination: true,
    speed: 1000,
    rewindSpeed: 1000,
    height: 'auto',
    perPage: 4,
    arrows: true,
    breakpoints: {
        1024: {
            perPage: 3,
            pagination: true,
        },
        768: {
            perPage: 2,
            pagination: true,
        },
        600: {
            perPage: 1,
            pagination: true,
        },
    },
});
splide.mount();

<?php endif; ?>

<?php if ($page_code === 'events-details'): ?>

$(document).ready(function() {

    $("#first-name, #last-name").on("input", function() {
        const value = $(this).val();
        // Allow only letters and spaces
        $(this).val(value.replace(/[^a-zA-Z\s]/g, ""));
    });

    $("#email").on("input", function(e) {
        var value = e.target.value; // Get the current value
        e.target.value = value.toLowerCase(); // Convert it to lowercase and set it back
    });

    $.validator.addMethod("customEmail", function(value, element) {
        return this.optional(element) || /^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,6}$/.test(value);
    }, "Please enter a valid email address");

    // Restrict input to only numeric characters in the phone number field
    $("#mobile-number, #guests").on("input", function(e) {
        const value = $(this).val();
        $(this).val(value.replace(/[^0-9]/g, "")); // Remove non-numeric characters
    });

    $("#event-form").validate({
        rules: {
            "first-name": {
                required: true,
                minlength: 2
            },
            "last-name": {
                required: true,
                minlength: 2
            },
            "email": {
                required: true,
                customEmail: true
            },
            "mobile-number": {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 15
            },
            gender: {
                required: true,
            },
            guests: {
                required: true,
            },
            "residential_address": {
                required: true,
            }
        },
        messages: {
            "first-name": {
                required: "Please enter your first name",
                minlength: "First name must be at least 2 characters long"
            },
            "last-name": {
                required: "Please enter your last name",
                minlength: "Last name must be at least 2 characters long"
            },
            "email": {
                required: "Please enter your email address",
                customEmail: "Please enter a valid email address"
            },
            "mobile-number": {
                required: "Please enter your phone number",
                digits: "Please enter only numbers",
                minlength: "Phone number must be at least 10 digits",
                maxlength: "Phone number cannot exceed 15 digits"
            },
            gender: {
                required: "Please select gender",
            },
            guests: {
                required: true,
                required: "Please enter number of guests",
            },
            "residential_address": {
                required: true,
                required: "Please enter residential address",
            }
        },
        submitHandler: function(form) {
            alert("Form submitted successfully!");
            form.submit();
        }
    });
});


<?php endif; ?>

<?php if ($page_code === 'career'): ?>

function setJobAndRedirect(jobId) {
    fetch('<?= base_url('career/setJobSession') ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                jobId: jobId
            })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                window.location.href = data.redirect_url;
            } else {
                alert(data.message);
            }
        })
        .catch(error => console.error('Error:', error));
}
$(document).ready(function() {
    /* Initialize SlimSelect for the job category dropdown */
    new SlimSelect({
        select: '.job-category',
    });
    $(document).on('click', '.apply-link', function(event) {
        event.preventDefault();
        const jobId = $(this).data('job-id');
        setJobAndRedirect(jobId);
    });

    function attachAccordionListeners() {
        const menuBtns = document.querySelectorAll(".menu-button");

        menuBtns.forEach((menuBtn) => {
            menuBtn.addEventListener("click", function() {
                const activeAccordion = document.querySelector(".menu-button.open");
                if (activeAccordion && activeAccordion !== this) {
                    activeAccordion.nextElementSibling.style.height = 0;
                    activeAccordion.classList.remove("open");
                    activeAccordion.querySelector(".icon").textContent = "+";
                }

                this.classList.toggle("open");
                const content = this.nextElementSibling;
                const icon = this.querySelector(".icon");

                if (this.classList.contains("open")) {
                    content.style.height = content.scrollHeight + "px";
                    icon.textContent = "−";
                } else {
                    content.style.height = 0;
                    icon.textContent = "+";
                }
            });
        });
    }
    attachAccordionListeners();

    // Form Submission for Sorting and Filtering Jobs
    document.getElementById('sort-by-key').addEventListener('submit', function(event) {
        event.preventDefault();

        const keyword = document.querySelector('.searchInput').value.trim();
        const category = document.getElementById('jobCategory').value;

        const url = new URL('<?= base_url("career/searchJobs") ?>');
        if (keyword) url.searchParams.append('keyword', keyword);
        if (category) url.searchParams.append('category', category);

        const container = document.querySelector('.accordion-container');
        const totalJobsElement = document.getElementById('totalJobs');
        const jobCounts = document.querySelector('.jobCounts');
        container.innerHTML = '<p>Loading...</p>';

        fetch(url, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json'
                },
            })
            .then((response) => response.json())
            .then((data) => {
                container.innerHTML = '';

                totalJobsElement.textContent = `(${data.length})`;

                if (data.length === 0) {
                    container.innerHTML = '<p>No jobs found.</p>';
                    return;
                }

                data.forEach((job) => {
                    const jobHtml = `
                <div class="accordion">
                    <button class="menu-button">
                        <div class="jobInfo">
                            <h5>${job.job_title}</h5>
                            <h6>${job.employment_type} - ${job.location}</h6>
                            <div class="job-location-details">
                                <div class="job-locDetails">
                                    <p>Posted on - <span>${job.posted_on}</span></p>
                                </div>
                                <div class="job-locDetails">
                                    <p>Last date to apply - <span>${job.last_applied_date}</span></p>
                                </div>
                            </div>
                            <p><b>Job Overview:</b> <span>${job.job_overview}</span></p>
                        </div>
                        <div class="jobHyp-link">
                            <a href="<?= base_url('career/form') ?>" class="apply-link" data-job-id="${job.career_id}">Apply Here</a>
                            <span class="icon">&plus;</span>
                        </div>
                    </button>
                    <div class="content">
                        <h6>Key Responsibilities :</h6>
                        <ul><li>${job.key_responsibilities}</li></ul>
                        <h6>Qualifications :</h6>
                        <ul><li>${job.qualifications}</li></ul>
                        <h6>Experience Required :</h6>
                        <ul><li>${job.experience}</li></ul>
                        <h6>Who We Are Looking For :</h6>
                        <ul><li>${job.who_are_we_looking_for}</li></ul>
                        <h6>Must Have :</h6>
                        <ul><li>${job.must_have}</li></ul>
                        <h6>Nice to Have :</h6>
                        <ul><li>${job.nice_to_have}</li></ul>
                        <h6>Last Date to Apply :</h6>
                        <p>${job.last_applied_date}</p>
                    </div>
                </div>`;
                    container.innerHTML += jobHtml;
                });
                attachAccordionListeners();
            })
            .catch((error) => {
                console.error('Error fetching jobs:', error);
                container.innerHTML = '<p>Error loading jobs. Please try again.</p>';
            });
    });
});

<?php endif; ?>

<?php if ($page_code === 'career-form'): ?>

$(document).ready(function() {
    const fileUploadContainer = $(".file-upload-label");
    const fileInput = $("#fileUpload");
    const submitButton = $("#submitBtn");
    const fileError = $("#fileError");
    const uploadText = $(".file-upload-text");

    // Disable submit button initially
    $("#submitBtn").prop("disabled", true);

    // Drag and Drop Events
    fileUploadContainer.on("dragover", function(e) {
        e.preventDefault(); // Prevent default behavior
        fileUploadContainer.addClass("drag-over");
    });

    fileUploadContainer.on("dragleave", function() {
        fileUploadContainer.removeClass("drag-over");
    });

    fileUploadContainer.on("drop", function(e) {
        e.preventDefault(); // Prevent default behavior
        fileUploadContainer.removeClass("drag-over");

        const files = e.originalEvent.dataTransfer.files;
        if (files.length) {
            fileInput.prop("files", files); // Set the file to the input
            validateFile(files[0]);
        }
    });

    // File Input Change Event
    fileInput.on("change", function() {
        const file = this.files[0];
        validateFile(file);
    });

    // Validate File on Change
    function validateFile(file) {
        fileError.text("");
        uploadText.html('Drag & Drop your file(s) here to upload <br>or <span>Select File</span>');
        fileError.removeClass("file-error");

        if (file) {
            const isValidType = /(\.pdf|\.doc|\.docx)$/i.test(file.name);
            const maxSize = 2 * 1024 * 1024; // 2 MB limit

            if (!isValidType) {
                fileError.text("Invalid file type. Only PDF, DOC, DOCX files are allowed.");
                fileError.addClass("file-error");
                submitButton.prop("disabled", true);
                fileInput.val(""); // Clear the input
            } else if (file.size > maxSize) {
                fileError.text("File size exceeds the 2 MB limit.");
                fileError.addClass("file-error");
                submitButton.prop("disabled", true);
                fileInput.val(""); // Clear the input
            } else {
                uploadText.html(file.name); // Update with the selected file name
                fileError.text("Maximum Limit: 2Mb");
                fileError.removeClass("file-error");
                toggleSubmitButton(); // Re-evaluate button state
            }
        } else {
            // Reset the text if no file is chosen
            fileError.text("Please upload a file.");
            fileError.addClass("file-error");
            submitButton.prop("disabled", true);
        }
    }

    // Toggle Submit Button Based on Form Validity
    function toggleSubmitButton() {
        if ($("#career-form").valid() && fileInput.val() !== "") {
            submitButton.prop("disabled", false);
        } else {
            submitButton.prop("disabled", true);
        }
    }

    $("#first-name, #last-name").on("input", function() {
        const value = $(this).val();
        // Allow only letters and spaces
        $(this).val(value.replace(/[^a-zA-Z\s]/g, ""));
    });

    $("#email").on("input", function(e) {
        var value = e.target.value; // Get the current value
        e.target.value = value.toLowerCase(); // Convert it to lowercase and set it back
    });

    $.validator.addMethod("customEmail", function(value, element) {
        return this.optional(element) || /^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,6}$/.test(value);
    }, "Please enter a valid email address");

    // Restrict input to only numeric characters in the phone number field
    $("#mobile-number").on("input", function(e) {
        const value = $(this).val();
        $(this).val(value.replace(/[^0-9]/g, "")); // Remove non-numeric characters
    });


    // jQuery Validation
    $("#career-form").validate({
        rules: {
            "first-name": {
                required: true,
                minlength: 2
            },
            "last-name": {
                required: true,
                minlength: 2
            },
            "email": {
                required: true,
                customEmail: true
            },
            "mobile-number": {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 15
            },
            "fileUpload": {
                required: true,
                accept: "application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
            }
        },
        messages: {
            "first-name": {
                required: "Please enter your first name",
                minlength: "First name must be at least 2 characters long"
            },
            "last-name": {
                required: "Please enter your last name",
                minlength: "Last name must be at least 2 characters long"
            },
            "email": {
                required: "Please enter your email address",
                customEmail: "Please enter a valid email address"
            },
            "mobile-number": {
                required: "Please enter your phone number",
                digits: "Please enter only numbers",
                minlength: "Phone number must be at least 10 digits",
                maxlength: "Phone number cannot exceed 15 digits"
            },
            "fileUpload": {
                required: "Please upload your resume",
                accept: "Only PDF, DOC, or DOCX files are allowed"
            }
        },
        errorPlacement: function(error, element) {
            if (element.attr("id") === "fileUpload") {
                fileError.html(error);
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
            alert("Form submitted successfully!");
            form.submit();

            setTimeout(() => {
                form.reset();
            }, 2000);
        }
    });

});

<?php endif; ?>

<?php if ($page_code === 'contact'): ?>

$(document).ready(function() {


    $("#first-name, #last-name").on("input", function() {
        const value = $(this).val();
        // Allow only letters and spaces
        $(this).val(value.replace(/[^a-zA-Z\s]/g, ""));
    });

    $("#email").on("input", function(e) {
        var value = e.target.value; // Get the current value
        e.target.value = value.toLowerCase(); // Convert it to lowercase and set it back
    });

    $.validator.addMethod("customEmail", function(value, element) {
        return this.optional(element) || /^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,6}$/.test(value);
    }, "Please enter a valid email address");

    // Restrict input to only numeric characters in the phone number field
    $("#mobile-number").on("input", function(e) {
        const value = $(this).val();
        $(this).val(value.replace(/[^0-9]/g, "")); // Remove non-numeric characters
    });


    $("#contact-form").validate({
        rules: {
            "first-name": {
                required: true,
                minlength: 2
            },
            "last-name": {
                required: true,
                minlength: 2
            },
            "email": {
                required: true,
                customEmail: true
            },
            "mobile-number": {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 15
            },
            "msg": {
                required: true,
                minlength: 10
            }
        },
        messages: {
            "first-name": {
                required: "Please enter your first name",
                minlength: "First name must be at least 2 characters long"
            },
            "last-name": {
                required: "Please enter your last name",
                minlength: "Last name must be at least 2 characters long"
            },
            "email": {
                required: "Please enter your email address",
                customEmail: "Please enter a valid email address"
            },
            "mobile-number": {
                required: "Please enter your phone number",
                digits: "Please enter only numbers",
                minlength: "Phone number must be at least 10 digits",
                maxlength: "Phone number cannot exceed 15 digits"
            },
            "msg": {
                required: "Please enter your message",
                minlength: "Message must be at least 10 characters long"
            }
        },
        submitHandler: function(form) {
            alert("Form submitted successfully!");
            form.submit();
        }
    });
});

$("#email").on("input", function(e) {
    var value = e.target.value; // Get the current value
    e.target.value = value.toLowerCase(); // Convert it to lowercase and set it back
});

$.validator.addMethod("customEmail", function(value, element) {
    return this.optional(element) || /^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,6}$/.test(value);
}, "Please enter a valid email address");

// Restrict input to only numeric characters in the phone number field
$("#mobile-number").on("input", function(e) {
    const value = $(this).val();
    $(this).val(value.replace(/[^0-9]/g, "")); // Remove non-numeric characters
});

<?php endif; ?>

<?php if ($page_code === 'admission'): ?>

var video = $('#sir-mutha-campus').get(0); // Get the video element
var playOverlay = $('#playOverlay');

// Ensure the video is muted for autoplay to work
video.muted = true;

// Use IntersectionObserver to detect when the video section is in view
var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
        if (entry.isIntersecting) {
            // If the video is in view, start playing it
            video.play().catch(function(error) {
                console.log('Autoplay prevented:', error);
            });
        } else {
            // If the video goes out of view, pause it
            video.pause();
        }
    });
}, {
    threshold: 0.5 // Video will start playing when 50% of it is visible
});

// Observe the section containing the video
observer.observe(document.querySelector('#campusVideo'));

// Hide overlay when the video starts playing
video.addEventListener('play', function() {
    playOverlay.addClass('hidden');
});

// Show overlay when the video is paused or ended
video.addEventListener('pause', function() {
    playOverlay.removeClass('hidden');
});

video.addEventListener('ended', function() {
    playOverlay.removeClass('hidden');
});

// Play or pause the video when the overlay is clicked
playOverlay.click(function() {
    if (video.paused) {
        video.play();
        playOverlay.addClass('hidden'); // Hide the overlay when playing
    } else {
        video.pause();
        playOverlay.removeClass('hidden'); // Show the overlay when paused
    }
});

// Toggle play/pause when clicking on the video itself
$('#sir-mutha-campus').click(function() {
    if (video.paused) {
        video.play();
    } else {
        video.pause();
    }
});

<?php endif; ?>

<?php if ($page_code === 'admission_form'): ?>

$(document).ready(function() {
    $("#studentForm").validate({
        rules: {
            name: true,
            dob: true,
            nationality: true,
            religion: true,
            community: true,
            mother_tongue: true,
            gender: true,
            state: true,
            caste: true,
            class_last_studied: true,
            school_last_attended: true,
            class_admission_sought: true,
            residential_address: true,
            father_name: true,
            father_religion: true,
            father_language: true,
            father_qualification: true,
            father_occupation: true,
            father_mobile: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10
            },
            father_email: {
                required: true,
                email: true
            },
            mother_name: true,
            mother_religion: true
        },
        messages: {
            name: "Please enter the student's name.",
            dob: "Please enter the date of birth.",
            nationality: "Please specify nationality.",
            religion: "Please specify religion.",
            community: "Please specify community.",
            mother_tongue: "Please specify mother tongue.",
            gender: "Please select gender.",
            state: "Please specify state.",
            caste: "Please specify caste.",
            class_last_studied: "Please enter the last class studied.",
            school_last_attended: "Please enter the last school attended.",
            class_admission_sought: "Please enter the class for admission.",
            residential_address: "Please enter the residential address.",
            father_name: "Please enter the father's name.",
            father_religion: "Please specify the father's religion.",
            father_language: "Please specify the father's language.",
            father_qualification: "Please enter the father's qualification.",
            father_occupation: "Please enter the father's occupation.",
            father_mobile: {
                required: "Please enter the father's mobile number.",
                digits: "Please enter only digits.",
                minlength: "Mobile number must be 10 digits.",
                maxlength: "Mobile number must be 10 digits."
            },
            father_email: {
                required: "Please enter the father's email.",
                email: "Please enter a valid email address."
            },
            mother_name: "Please enter the mother's name.",
            mother_religion: "Please specify the mother's religion."
        },
        submitHandler: function(form, e) {
            e.preventDefault();
            form.submit(); // Submit the form if validation passes
        }
    });
});

<?php endif; ?>

<?php if ($page_code === 'gallery'): ?>

document.addEventListener("DOMContentLoaded", function() {
    var tabs = document.getElementsByClassName("Tab");
    var contents = document.getElementsByClassName("tab-content");

    // Add event listeners to tabs
    Array.prototype.forEach.call(tabs, function(tab) {
        tab.addEventListener("click", setActiveClass);
    });

    function setActiveClass(evt) {
        // Remove active class from all tabs
        Array.prototype.forEach.call(tabs, function(tab) {
            tab.classList.remove("active");
        });

        // Add active class to the clicked tab
        evt.currentTarget.classList.add("active");

        // Hide all tab content
        Array.prototype.forEach.call(contents, function(content) {
            content.style.display = "none";
        });

        // Show the content that corresponds to the clicked tab
        var tabNumber = evt.currentTarget.getAttribute("data-tab");
        var selectedTabContent = document.getElementById("tab-" + tabNumber);
        selectedTabContent.style.display = "block";
    }
});

<?php endif; ?>

<?php if ($page_code === 'parents'): ?>

var video = $('#sir-mutha-campus').get(0); // Get the video element
var playOverlay = $('#playOverlay');

// Ensure the video is muted for autoplay to work
video.muted = true;

// Use IntersectionObserver to detect when the video section is in view
var observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
        if (entry.isIntersecting) {
            // If the video is in view, start playing it
            video.play().catch(function(error) {
                console.log('Autoplay prevented:', error);
            });
        } else {
            // If the video goes out of view, pause it
            video.pause();
        }
    });
}, {
    threshold: 0.5 // Video will start playing when 50% of it is visible
});

// Observe the section containing the video
observer.observe(document.querySelector('#campusVideo'));

// Hide overlay when the video starts playing
video.addEventListener('play', function() {
    playOverlay.addClass('hidden');
});

// Show overlay when the video is paused or ended
video.addEventListener('pause', function() {
    playOverlay.removeClass('hidden');
});

video.addEventListener('ended', function() {
    playOverlay.removeClass('hidden');
});

// Play or pause the video when the overlay is clicked
playOverlay.click(function() {
    if (video.paused) {
        video.play();
        playOverlay.addClass('hidden'); // Hide the overlay when playing
    } else {
        video.pause();
        playOverlay.removeClass('hidden'); // Show the overlay when paused
    }
});

// Toggle play/pause when clicking on the video itself
$('#sir-mutha-campus').click(function() {
    if (video.paused) {
        video.play();
    } else {
        video.pause();
    }
});
document.addEventListener("DOMContentLoaded", function() {
    var tabs = document.getElementsByClassName("Tab");
    var contents = document.getElementsByClassName("tab-content");

    // Add event listeners to tabs
    Array.prototype.forEach.call(tabs, function(tab) {
        tab.addEventListener("click", setActiveClass);
    });

    function setActiveClass(evt) {
        // Remove active class from all tabs
        Array.prototype.forEach.call(tabs, function(tab) {
            tab.classList.remove("active");
        });

        // Add active class to the clicked tab
        evt.currentTarget.classList.add("active");

        // Hide all tab content
        Array.prototype.forEach.call(contents, function(content) {
            content.style.display = "none";
        });

        // Show the content that corresponds to the clicked tab
        var tabNumber = evt.currentTarget.getAttribute("data-tab");
        var selectedTabContent = document.getElementById("tab-" + tabNumber);
        selectedTabContent.style.display = "block";
    }
});

<?php endif; ?>
</script>
</body>

</html>