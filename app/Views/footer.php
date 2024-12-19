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
            <a href="<?= base_url('index') ?>">About Us</a>
            <a href="<?= base_url('index') ?>">Sports</a>
            <a href="<?= base_url('index') ?>">Arts</a>
            <a href="<?= base_url('index') ?>">Gallery</a>
            <a href="<?= base_url('index') ?>">Community Learning</a>
            <a href="<?= base_url('index') ?>">Contact Us</a>
            <a href="<?= base_url('index') ?>">Career</a>
            <a href="<?= base_url('index') ?>">FAQ</a>
        </div>
    </div>
    <div class="pageTitleLine">
        <hr>
    </div>
    <div class="copy-rights">
        <div class="col-lg-6">
            <div class="policy-txt">
                <a href="#">Cookie Policy</a>
                <hr>
                <a href="#">Privacy Policy</a>
            </div>
        </div>
        <div class="col-lg-6">
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
<script src="<?= base_url('js/custom.js') ?>"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
<?php if ($page_code === 'index'): ?>
var splide = new Splide('#homeSlider', {
    type: 'loop',
    autoplay: true,
    padding: '10rem',
    arrows: false,
    pagination: false,
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

//Board members Slider
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

//Board members Slider
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
    vertical:true,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    verticalSwiping:true,
    responsive: [
    {
        breakpoint: 992,
        settings: {
          vertical: false,
        }
    },
    {
      breakpoint: 768,
      settings: {
        vertical: false,
      }
    },
    {
      breakpoint: 580,
      settings: {
        vertical: false,
        slidesToShow: 3,
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
var main = new Splide( '#annual-event', {
  type       : 'slide',
  heightRatio: 0.5,
  pagination : false,
  arrows     : false,
  cover      : true,
} );

var thumbnails = new Splide( '#thumbnail-slider', {
    type: 'slide',
    autoplay: false,
    pauseOnHover: false,
    rewind          : false,
    perPage         : 6,
    isNavigation    : true,
    pagination      : false,
    cover           : true,
    dragMinThreshold: {
        mouse: 4,
        touch: 10,
    },
    breakpoints : {
        640: {
        
        },
    },
} );

main.sync( thumbnails );
main.mount();
thumbnails.mount();
/* Annual Events */

<?php endif; ?>


<?php if ($page_code === 'admission'): ?>

var video = $('#sir-mitha-campus').get(0); // Get the video element
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
    } else {
        video.pause();
    }
});

// Toggle play/pause when clicking on the video itself
$('#sir-mitha-campus').click(function() {
    if (video.paused) {
        video.play();
    } else {
        video.pause();
    }
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
</script>
</body>

</html>