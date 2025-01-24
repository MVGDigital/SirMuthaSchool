$(document).ready(function() {
    $('#goToTopImage').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow'); // Smooth scroll to the top
    });

    // Hide all submenus initially
    $(".subMenuItems").hide();

    // Function to show submenu for the currently hovered menu item
    function showSubMenu(menuId, subMenuId) {
        // Hide all other submenus
        $(".subMenuItems").hide();
        // Show the related submenu
        $(subMenuId).show();
    }

    // Hover event for 'About' main menu item
    $("#aboutMenu").hover(
        function () {
            showSubMenu("#aboutMenu", "#aboutSubMenu");
        }
    );

    // Hover event for 'Academics' main menu item
    $("#academicsMenu").hover(
        function () {
            showSubMenu("#academicsMenu", "#academicsSubMenu");
        }
    );

    // Hover event for 'Student Life' main menu item
    $("#facilitiesMenu").hover(
        function () {
            showSubMenu("#facilitiesMenu", "#facilitiesSubMenu");
        }
    );

    // Hover event for 'News & Events' main menu item
    $("#admissionMenu").hover(
        function () {
            showSubMenu("#admissionMenu", "#admissionSubMenu");
        }
    );

    // Hover event for 'Infrastructure' main menu item
    $("#inclusiveMenu").hover(
        function () {
            showSubMenu("#inclusiveMenu", "#inclusiveSubMenu");
        }
    );

    // Hover event for 'Document' main menu item
    $("#curriculumMenu").hover(
        function () {
            showSubMenu("#curriculumMenu", "#curriculumSubMenu");
        }
    );

    // Hover event for 'statutoryMenu' main menu item
    $("#statutoryMenu").hover(
        function () {
            $(".subMenuItems").hide();
        }
    );
    
    // Hover event for 'announcementsMenu' main menu item
    $("#announcementsMenu").hover(
        function () {
            $(".subMenuItems").hide();
        }
    );
    // Hover event for 'achievementsMenu' main menu item
    $("#achievementsMenu").hover(
        function () {
            $(".subMenuItems").hide();
        }
    );
    // Hover event for 'intheoutdoorsMenu' main menu item
    $("#intheoutdoorsMenu").hover(
        function () {
            $(".subMenuItems").hide();
        }
    );

    // Hover event for 'Admission' main menu item
    $("#galleryMenu").hover(
        function () {
            showSubMenu("#galleryMenu", "#gallerySubMenu");
        }
    );

    // Hover event for 'Career' main menu item
    $("#eventsMenu").hover(
        function () {
            showSubMenu("#eventsMenu", "#eventsSubMenu");
        }
    );

    // Hover event for 'Contact Us' main menu item
    $("#careersMenu").hover(
        function () {
            $(".subMenuItems").hide();
        }
    );
    // Hover event for 'Contact Us' main menu item
    $("#parentsMenu").hover(
        function () {
            $(".subMenuItems").hide();
        }
    );

    // Prevent submenu display when clicking menu text or links
    // $(".navbar-nav a").on("click", function (e) {
    //     e.preventDefault();
    // });


    //Menus
    $('#openMenu').click( function() {
        $('#mainHeader').hide();
        $('#mainMenusContainer').show('slow');
        $('body').addClass('no-scroll');
        if (window.innerWidth < 768) {
            /* $('.navbar-brand.logo').hide(); */
            $('.mainMenu ul').css('position','relative');
            $('.mainMenu ul').css('z-index','9999');
        }
    })
    $('#closeMenu').click( function() {
        $('#mainHeader').show();
        $('#mainMenusContainer').hide('slow');
        $('body').removeClass('no-scroll');
        if (window.innerWidth < 768) {
            /* $('.navbar-brand.logo').show(); */
            $('.mainMenu ul').css('position','relative');
            $('.mainMenu ul').css('z-index','9999');
        }
    })
    
    // Click event specifically for dropdown arrow
    $(".dropdown-arrow").on("click", function (e) {
        // Only trigger the dropdown logic for screens under 600px
        if ($(window).width() <= 600) {
            e.preventDefault();

            const currentSubmenu = $(this).siblings(".dropdown-menu");
            const currentLink = $(this).siblings(".nav-link"); 

            // Check if the clicked submenu is already open
            if (currentSubmenu.is(":visible")) {
                // Close the current submenu if it's already open
                currentSubmenu.slideUp();
                
                currentLink.removeClass("active");
            } else {
                // Otherwise, open the current submenu and close others
                $(".dropdown-menu").slideUp(); // Close all other submenus
                $(".nav-link").removeClass("active");
                currentSubmenu.slideDown(); // Open the clicked submenu

                currentLink.addClass("active");
                
            }
        }
    });



    /* Sir Mutha Code */
    $(".navbar-toggler").on("click", function () {
        var isExpanded = $(this).attr("aria-expanded") === "true"; // Check current state
    
        // Toggle icons
        if (isExpanded) {
            $(".openIcon").hide();
            $(".closeIcon").show();
            $("body").addClass("no-scroll"); // Add class to prevent scroll
            $(".navbar").css('background-color','transparent');
        } else {
            $(".openIcon").show();
            $(".closeIcon").hide();
            $("body").removeClass("no-scroll"); // Remove class to allow scroll
        }
    });

    //Scroll header
    document.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 50) {
            navbar.style.backgroundColor = "rgb(16 39 83)"; // Add background color
            navbar.style.transition = "background-color 0.3s ease"; // Smooth transition
        } else {
            navbar.style.backgroundColor = "transparent"; // Remove background color
        }
    });
    
      
});