<footer class="container-space blueBg-Sec ptb-80">
    <div class="col-12 col-lg-6 col-lg-3 col-xl-3 m-auto ">
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
            <a href="https://www.instagram.com/sir_mutha_school?igsh=MXZzMHVjajRqd3V2bw=="><img
                    src="<?= base_url('images/instagram.svg') ?>" alt="Instagram icon"></a>
            <a href="https://www.facebook.com/Sirmuthaschool/"><img src="<?= base_url('images/fb.svg') ?>"
                    alt="facebook icon"></a>
            <a href="#"><img src="<?= base_url('images/x.svg') ?>" alt="x icon"></a>
        </div>
    </div>
    <div class="col-12 col-md-8 col-lg-12 col-xl-12 m-auto footer-menus">
        <div class="itemSpaceBetween">
            <a href="<?= base_url('index') ?>">Home</a>
            <a href="<?= base_url('about') ?>">About Us</a>
            <a href="<?= base_url('academics') ?>">Academics</a>
            <a href="<?= base_url('facilities') ?>">Facilities</a>
            <a href="<?= base_url('inclusive-education') ?>">Inclusive Education</a>
            <a href="<?= base_url('beyond-curriculum') ?>">Beyond Curriculum</a>
            <a href="<?= base_url('events') ?>">Events</a>
            <a href="<?= base_url('statutory') ?>">Statutory</a>
            <a href="<?= base_url('achievements') ?>">Achievements</a>
            <a href="<?= base_url('announcements') ?>">Announcements</a>
            <a href="<?= base_url('in-the-outdoors') ?>">In The Outdoors</a>
            <a href="<?= base_url('gallery') ?>">Gallery</a>
            <a href="<?= base_url('parents') ?>">Parents</a>
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
                <a href="<?= base_url('disclaimerdocument/Disclaimer.pdf') ?>" target="_blank">Disclaimer</a>
            </div>
        </div>
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
            <div class="copyRights-txt">
                <a>© <script>
                    document.write(new Date().getFullYear())
                    </script> SIR MUTHA SCHOOL</a>
                <hr>
                <a href="https://mvgdigital.com/" target="_blank"> Designed & Developed By MVG Digital </a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

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



<?php endif; ?>

<?php if ($page_code === 'inclusive-education'): ?>

//Special Education 
var splide = new Splide('#occupational-slider', {
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

var splide = new Splide('#greenCampus-slider', {
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

        // Reinitialize pagination for the selected tab
        reinitializePagination(selectedTabContent);
    }
});

<?php endif; ?>


<?php if ($page_code === 'computerlab'): ?>


var splide = new Splide('#curve-slider', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    pagination: false,
    speed: 1000,
    rewindSpeed: 1000,
    height: 'auto',
    perPage: 1,
    arrows: false,
    breakpoints: {
        767: {
            perPage: 1,
            pagination: false,
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

// Initialize Main Slider
var main = new Splide('#annual-event', {
    type: 'slide',
    heightRatio: 0.5,
    pagination: false,
    arrows: true,
    cover: true,
});

// Initialize Thumbnail Slider
var thumbnails = new Splide('#thumbnail-slider', {
    type: 'slide',
    arrows: true,
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

// Sync Sliders
main.sync(thumbnails);
main.mount();
thumbnails.mount();


$(document).ready(function() {
    var fullText = $('.newsText').text(); // Get the full text
    var words = fullText.split(' '); // Split the text into words
    var limit = 25; // Word limit
    var truncatedText = words.slice(0, limit).join(' ') + '...'; // Create truncated text

    // Initially display the truncated text
    $('.newsText').text(truncatedText);

    var thumbFullText = $('.newsThumbText').text(); // Get the full text
    var thumbWords = thumbFullText.split(' '); // Split the text into words
    var thumbLimit = 10; // Word limit
    var thumbTruncatedText = thumbWords.slice(0, thumbLimit).join(' ') + '...'; // Create truncated text

    // Initially display the truncated text
    $('.newsThumbText').text(thumbTruncatedText);
});

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

new SlimSelect({
    select: '#jobCategory',
});

$(document).ready(function() {

    // Lazy load implementation
    $("#loader").hide();
    $(".pastEvent-items").hide();
    $(".pastEvent-items").slice(0, 4).show();

    let isLoading = false;

    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 500 && !isLoading) {
            isLoading = true;
            $("#loader").show();

            setTimeout(function() {
                $(".pastEvent-items:hidden").slice(0, 4).slideDown();
                $("#loader").hide();
                isLoading = false;

                if ($(".pastEvent-items:hidden").length === 0) {
                    $(window).off("scroll");
                }
            }, 3000);
        }
    });
});



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
            
            form.submit();
            
            setTimeout(() => {
                $(form)[0].reset();
            }, 1000);
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
const base_url = '<?= base_url() ?>';
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

    /*  $(".apply-link").on("click", function(event) {
         event.stopPropagation(); // Prevent the event from reaching the accordion logic
         console.log("Apply link clicked");
         // Add your desired functionality here
     }); */

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

    // Prevent accordion toggle when "Apply Here" is clicked
    $(".apply-link").on("click", function(event) {
        const activeAccordion = document.querySelector(".menu-button.open");
        activeAccordion.nextElementSibling.style.height = 0;

    });

    $(document).ready(function() {

        // Lazy load implementation
        $("#loader").hide();
        $(".jobItems").hide();
        $(".jobItems").slice(0, 5).show();

        let isLoading = false;

        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 500 && !
                isLoading) {
                isLoading = true;
                $("#loader").show();

                setTimeout(function() {
                    $(".jobItems:hidden").slice(0, 5).slideDown();
                    $("#loader").hide();
                    isLoading = false;

                    if ($(".jobItems:hidden").length === 0) {
                        $(window).off("scroll");
                    }
                }, 3000);
            }
        });
    });

    // Helper function to format date
    function formatDate(dateStr) {
        const options = {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        return new Date(dateStr).toLocaleDateString('en-US', options);
    }

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
                const today = new Date();
                today.setHours(0, 0, 0, 0); // Normalize to midnight
                container.innerHTML = '';

                const validJobs = data.filter((job) => {
                    const lastDate = new Date(job.last_applied_date);
                    return lastDate >= today; // Include today and future dates
                });

                totalJobsElement.textContent = `(${validJobs.length})`;

                if (validJobs.length === 0) {
                    container.innerHTML = '<p>No jobs found.</p>';
                    return;
                }

                validJobs.forEach((job) => {
                    const jobHtml = `
                    <div class="accordion">
                        <button class="menu-button">
                            <div class="jobInfo">
                                <h5>${job.job_title}</h5>
                                <h6>${job.employment_type} - ${job.location}</h6>
                                <div class="job-location-details">
                                    <div class="job-locDetails">
                                        <img src="<?= base_url('images/joblocationIcon.svg') ?>" alt="Job Location">
                                        <p><span>${job.location}</span></p>
                                    </div>
                                    <div class="job-locDetails">
                                        <img src="<?= base_url('images/jobIcon.svg') ?>" alt="Employment Type">
                                        <p><span>${job.employment_type}</span></p>
                                    </div>
                                    <div class="job-locDetails">
                                        <img src="<?= base_url('images/posted-dateIcon.svg') ?>" alt="Posted Date">
                                        <p>Posted on - <span>${formatDate(job.posted_on)}</span></p>
                                    </div>
                                    <div class="job-locDetails">
                                        <img src="<?= base_url('images/last-dateIcon.svg') ?>" alt="Last Date">
                                        <p>Last date to apply - <span>${formatDate(job.last_applied_date)}</span></p>
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
                            <p>${formatDate(job.last_applied_date)}</p>
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
                $("#fileError").html(error);
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
            var formData = new FormData(form);

            $.ajax({
                type: "POST",
                url: $(form).attr('action'),
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $("#response-message").html('<div class="alert alert-success">' + response.message + '</div>');
                    form.reset();
                },
                error: function(xhr) {
                    $("#response-message").html('<div class="alert alert-danger">' + xhr.responseJSON.message + '</div>');
                }
            });
        }
    });

});

<?php endif; ?>

<?php if ($page_code === 'contact'): ?>

$(document).ready(function() {

    // Input validation for first name and last name
    $("#first-name, #last-name").on("input", function() {
        const value = $(this).val();
        // Allow only letters and spaces
        $(this).val(value.replace(/[^a-zA-Z\s]/g, ""));
    });

    // Email input handling (convert to lowercase)
    $("#email").on("input", function(e) {
        var value = e.target.value; // Get the current value
        e.target.value = value.toLowerCase(); // Convert it to lowercase and set it back
    });

    // Custom email validation
    $.validator.addMethod("customEmail", function(value, element) {
        return this.optional(element) || /^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,6}$/.test(value);
    }, "Please enter a valid email address");

    // Restrict input to only valid numeric characters and first character rules for the phone number field
    $("#mobile-number").on("input", function() {
        let value = $(this).val();

        // Restrict the first character to +, 9, 6, 7, or 8
        if (!value.startsWith("9") && !value.startsWith("6") && !value.startsWith("7") && !value
            .startsWith("8")) {
            value = value.substring(1); // Remove the invalid first character
        }

        // Remove any non-numeric characters, but allow '+' as the first character
        value = value.replace(/(?!^\+)[^\d]/g, "");

        $(this).val(value); // Update the input value
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
                maxlength: 13
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
                maxlength: "Phone number cannot exceed 13 digits"
            },
            "msg": {
                required: "Please enter your message",
                minlength: "Message must be at least 10 characters long"
            }
        },
        submitHandler: function(form) {
            $.ajax({
                type: "POST",
                url: "<?= base_url('contact/submitContactForm') ?>",
                data: $(form).serialize(),
                success: function(response) {
                    $('#responseMessage').html(
                        '<p class="success-message text-center" style="color: #00ff3a;">Your message has been sent successfully!</p>'
                    );
                    $(form)[0].reset();

                    setTimeout(function() {
                        $('#responseMessage').html('');
                    }, 3000);
                },
                error: function(xhr, status, error) {
                    $('#responseMessage').html(
                        '<p class="error-message text-center" style="color: #ff1b1b;">There was an error while submitting your message. Please try again later.</p>'
                    );

                    setTimeout(function() {
                        $('#responseMessage').html('');
                    }, 3000);
                }
            });
        }
    });
});


<?php endif; ?>

<?php if ($page_code === 'admission'): ?>


$(document).ready(function() {
    var video = $('#sir-mutha-campus').get(0); // Get the video element
    var playOverlay = $('#playOverlayBtn'); // Play overlay button
    var isUserPaused = false; // Track if the user explicitly paused the video

    // Ensure the video is muted for autoplay
    video.muted = true;

    // Use IntersectionObserver to detect visibility
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                console.log('Video is in view');
                if (!isUserPaused) {
                    video.play().catch(function(error) {
                        console.error('Autoplay prevented:', error);
                    });
                }
            } else {
                console.log('Video is out of view');
                video.pause();
            }
        });
    }, {
        threshold: 0.5
    });

    observer.observe(document.querySelector('#campusVideo'));

    // Hide overlay when the video starts playing
    video.addEventListener('play', function() {
        playOverlay.addClass('hidden');
        console.log('Video started playing');
    });

    // Show overlay when the video is paused or ended
    video.addEventListener('pause', function() {
        playOverlay.removeClass('hidden');
        console.log('Video paused');
    });

    video.addEventListener('ended', function() {
        playOverlay.removeClass('hidden');
        console.log('Video ended');
    });

    // Play or pause the video when overlay is clicked
    playOverlay.click(function() {
        console.log('Play overlay clicked');
        if (video.paused) {
            video.play();
            playOverlay.addClass('hidden');
            isUserPaused = false; // Reset flag when user resumes playing
        } else {
            video.pause();
            playOverlay.removeClass('hidden');
            isUserPaused = true; // Set flag when user pauses
        }
    });

    // Auto-play when clicking the video itself
    $('#sir-mutha-campus').click(function() {
        console.log('Video clicked');
        if (video.paused) {
            video.play();
            isUserPaused = false; // Reset flag when user resumes playing
        } else {
            video.pause();
            isUserPaused = true; // Set flag when user pauses
        }
    });
});



<?php endif; ?>

<?php if ($page_code === 'achievements'): ?>

var splide = new Splide('#teachers', {
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
        1024: {
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

var splide = new Splide('#sports', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    pagination: true,
    speed: 1000,
    rewindSpeed: 1000,
    height: 'auto',
    perPage: 1,
    arrows: true,
});
splide.mount();

<?php endif; ?>

<?php if ($page_code === 'announcement'): ?>

document.addEventListener("DOMContentLoaded", function() {
    // Fetch announcements from PHP
    var pdfFiles = <?= json_encode($announcements) ?>;

    // Load PDF.js
    var pdfjsLib = window['pdfjs-dist/build/pdf'];
    pdfjsLib.GlobalWorkerOptions.workerSrc =
        'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';

    // Iterate over the announcements and render PDFs
    pdfFiles.forEach(function(announcement, index) {
        if (announcement.pdf_file) {
            // Create a container for each PDF and its title
            var container = document.createElement("div");
            container.className = "pdf-container";
            container.style.marginBottom = "20px";
            document.getElementById("pdf-render-area").appendChild(container);

            // Add the title
            var title = document.createElement("h3");
            title.style.textAlign = "center";
            title.textContent = announcement.title;
            container.appendChild(title);

            // Create the canvas
            var canvas = document.createElement("canvas");
            container.appendChild(canvas);

            // Load the PDF and render it
            var loadingTask = pdfjsLib.getDocument("<?= base_url('uploads/announcements') ?>/" +
                announcement.pdf_file);
            loadingTask.promise.then(function(pdf) {
                pdf.getPage(1).then(function(page) {
                    var scale = 1.5;
                    var viewport = page.getViewport({
                        scale: scale
                    });

                    var context = canvas.getContext("2d");
                    canvas.width = viewport.width;
                    canvas.height = viewport.height;

                    var renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    };
                    page.render(renderContext);
                });
            }).catch(function(error) {
                console.error("Error loading PDF:", error);
            });
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

        // Reinitialize pagination for the selected tab
        reinitializePagination(selectedTabContent);
    }
});

<?php endif; ?>

<?php if ($page_code === 'parents'): ?>


<?php endif; ?>
</script>
</div>
</body>

</html>