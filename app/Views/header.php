<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($page_title ?? 'Sir Mutha') ?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('images/favicon.png') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/splide.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/slick.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/slimselect.css') ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('css/splide-core.min.css') ?>"> -->
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/response.css') ?>">
</head>

<body>
    <div class="mainContainer">
    <!-- Header Section -->
    <nav class="navbar navbar-light">
        <div class="container-fluid itemSpaceBetween p-0">
            <a class="navbar-brand logo" href="<?= base_url('index') ?>">
                <img src="<?= base_url('images/sir-mutha-logo.svg') ?>" class="img-fluid" alt="Sir Mutha School Logo">
                <p>Sir mutha school</p>
            </a>
            <div class="headerInfo">
                <a class="contactBtn" href="https://themadrassevasadan.org/be_a_part" target="_blank">Donate</a>
                <a class="contactBtn contactMenuBtn" href="<?= base_url('contact') ?>">contact Us</a>
                <!-- Search Code -->
                <!-- <button class="search">
                    <img src="<?= base_url('images/search.svg') ?>" alt="">
                </button> -->
                <!-- Search Code -->
                <!-- Menu Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <img src="<?= base_url('images/menu-icon.svg') ?>" class="openIcon" alt="menu icon">
                    <img src="<?= base_url('images/closeIcon.svg') ?>" class="closeIcon" alt="menu icon">
                </button>
                <!-- Menu Button -->

            </div>
        </div>
    </nav>

    <!-- Menus -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="menusContainer col-12 col-lg-11 col-xl-11">
            <div class="mainMenus col-12 col-md-5 col-lg-5 col-xl-3">
                <ul class="navbar-nav">
                    <li id="aboutMenu" class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About Us</a>
                        <span class="dropdown-arrow">
                            <img src="<?= base_url('images/menuDownArrow.svg') ?>" class="img-fluid" alt="menu arrow">
                        </span>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('about#ourhistory') ?>">Our History</a></li>
                            <li><a href="<?= base_url('about#aboutmss') ?>">About MSS</a></li>
                            <li><a href="<?= base_url('about#ourfounders') ?>">Our Founders</a></li>
                            <li><a href="<?= base_url('about#visionmission') ?>">Vision & Mission</a></li>
                            <li><a href="<?= base_url('about#boardmember') ?>">Board Members</a></li>
                            <li><a target="_blank" href="https://themadrassevasadan.org/Be_A_Part">Be a Part</a></li>
                        </ul>
                    </li>
                    <li id="academicsMenu" class="nav-item">
                        <a class="nav-link" href="<?= base_url('academics') ?>">Academics</a>
                        <span class="dropdown-arrow"><img src="<?= base_url('images/menuDownArrow.svg') ?>" class="img-fluid"
                        alt="menu arrow"></span>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('academics#aboutcbse') ?>" class="active">About CBSE</a></li>
                            <li><a href="<?= base_url('academics#cbsecurriculum') ?>">CBSE Curriculum</a></li>
                            <li><a href="<?= base_url('academics#teacherenrichment') ?>">Teacher Enrichment</a></li>
                            <li><a href="<?= base_url('academics#annual-pedagogical') ?>">Annula Pedegogical Policy</a></li>
                        </ul>
                    </li>
                    <li id="facilitiesMenu" class="nav-item">
                        <a class="nav-link" href="<?= base_url('facilities') ?>">Facilities</a>
                        <span class="dropdown-arrow"><img src="<?= base_url('images/menuDownArrow.svg') ?>" class="img-fluid"
                        alt="menu arrow"></span>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('facilities#academicfacility') ?>" class="active">Academic Facility</a></li>
                            <li><a href="<?= base_url('facilities#extra-curricular') ?>">Extra Curricular</a></li>
                            <li><a href="<?= base_url('facilities#co-curricular') ?>">Co-Curricular</a></li>
                            <li><a href="<?= base_url('facilities#specialeducation') ?>">Specila Education</a></li>
                            <li><a href="<?= base_url('facilities#greencampus') ?>">Green Campus</a></li>
                        </ul>
                    </li>
                    <!-- <li id="admissionMenu" class="nav-item">
                        <a class="nav-link" href="<?= base_url('admission') ?>">Admissions</a>
                        <span class="dropdown-arrow"><img src="<?= base_url('images/menuDownArrow.svg') ?>" class="img-fluid"
                        alt="menu arrow"></span>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('admission#application_process') ?>" class="active">Application Process</a></li>
                            <li><a href="<?= base_url('admission#terms_conditions') ?>">Terms & Conditions</a></li>
                            <li><a href="<?= base_url('admission#fee_structure') ?>">Free Structure</a></li>
                            <li><a href="<?= base_url('admission#registration_process') ?>">Registration Process</a></li>
                        </ul>
                    </li> -->
                    <li id="inclusiveMenu" class="nav-item">
                        <a class="nav-link" href="<?= base_url('inclusive-education') ?>">Inclusive Educations</a>
                        <span class="dropdown-arrow"><img src="<?= base_url('images/menuDownArrow.svg') ?>" class="img-fluid"
                        alt="menu arrow"></span>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('inclusive-education#learing_center') ?>" class="active">Learning Centers</a></li>
                            <li><a href="<?= base_url('inclusive-education#Occupational') ?>">Occupational Theraphy</a></li>
                        </ul>
                    </li>
                    <li id="curriculumMenu" class="nav-item">
                        <a class="nav-link" href="<?= base_url('beyond-curriculum') ?>">Beyond Curriculum</a>
                        <span class="dropdown-arrow"><img src="<?= base_url('images/menuDownArrow.svg') ?>" class="img-fluid"
                        alt="menu arrow"></span>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('beyond-curriculum#sirMutha-clubs') ?>" class="active">Clubs</a></li>
                            <li><a href="<?= base_url('beyond-curriculum#news-letter') ?>">Student Newsletters</a></li>
                            <li><a href="<?= base_url('beyond-curriculum#annual-events') ?>">Annual Events</a></li>
                        </ul>
                    </li>
                    <li id="eventsMenu" class="nav-item">
                        <a class="nav-link" href="<?= base_url('events') ?>">Events</a>
                        <span class="dropdown-arrow"><img src="<?= base_url('images/menuDownArrow.svg') ?>" class="img-fluid"
                        alt="menu arrow"></span>
                        <ul class="dropdown-menu">
                        <li><a href="<?= base_url('events/#upcomingEvents') ?>">Upcoming Events</a></li>
                        <li><a href="<?= base_url('events/#pastEvents') ?>">Past Events</a></li>
                        </ul>
                    </li>
                    <li id="statutoryMenu" class="nav-item">
                        <a class="nav-link" href="<?= base_url('statutory') ?>">Statutory</a>
                    </li>
                    <li id="announcementsMenu" class="nav-item">
                        <a class="nav-link" href="<?= base_url('announcements') ?>">Announcements</a>
                    </li>
                    <li id="achievementsMenu" class="nav-item">
                        <a class="nav-link" href="<?= base_url('achievements') ?>">Achievements</a>
                    </li>
                    <!-- <li id="intheoutdoorsMenu" class="nav-item">
                        <a class="nav-link" href="<?= base_url('in-the-outdoors') ?>">In the outdoors</a>
                    </li> -->
                    <li id="galleryMenu" class="nav-item">
                        <a class="nav-link" href="<?= base_url('gallery') ?>">Gallery</a>
                    </li>
                    <li id="parentsMenu" class="nav-item">
                        <a class="nav-link" href="<?= base_url('parents') ?>">Parents</a>
                    </li>
                </ul>
            </div>
            <div class="itemCenter mobMenuLine col-12 col-md-2 col-lg-2 col-xl-1">
                <hr class="whiteLine">
            </div>
            <div class="subMenus col-12 col-md-5 col-lg-5 col-xl-4">
                <div id="aboutSubMenu" class="subMenuItems">
                    <ul>
                        <li><a href="<?= base_url('about#ourhistory') ?>">Our History</a></li>
                        <li><a href="<?= base_url('about#aboutmss') ?>">About MSS</a></li>
                        <li><a href="<?= base_url('about#ourfounders') ?>">Our Founders</a></li>
                        <li><a href="<?= base_url('about#visionmission') ?>">Vision & Mission</a></li>
                        <li><a href="<?= base_url('about#boardmember') ?>">Board Members</a></li>
                        <li><a target="_blank" href="https://themadrassevasadan.org/Be_A_Part">Be a Part</a></li>
                    </ul>
                </div>
                <div id="academicsSubMenu" class="subMenuItems">
                    <ul>
                        <li><a href="<?= base_url('academics#aboutcbse') ?>">About CBSE</a></li>
                        <li><a href="<?= base_url('academics#cbsecurriculum') ?>">CBSE Curriculum</a></li>
                        <li><a href="<?= base_url('academics#teacherenrichment') ?>">Teacher Enrichment</a></li>
                        <li><a href="<?= base_url('academics#annual-pedagogical') ?>">Annula Pedegogical Policy</a></li>
                    </ul>
                </div>
                <div id="facilitiesSubMenu" class="subMenuItems">
                    <ul>
                        <li><a href="<?= base_url('facilities#academicfacility') ?>">Academic Facility</a></li>
                        <li><a href="<?= base_url('facilities#extra-curricular') ?>">Extra Curricular</a></li>
                        <li><a href="<?= base_url('facilities#co-curricular') ?>">Co-Curricular</a></li>
                        <li><a href="<?= base_url('facilities#specialeducation') ?>">Specila Education</a></li>
                        <li><a href="<?= base_url('facilities#greencampus') ?>">Green Campus</a></li>
                    </ul>
                </div>
                <div id="admissionSubMenu" class="subMenuItems">
                    <ul>
                        <li><a href="<?= base_url('admission#application_process') ?>">Application Process</a></li>
                        <li><a href="<?= base_url('admission#terms_conditions') ?>">Terms & Conditions</a></li>
                        <li><a href="<?= base_url('admission#fee_structure') ?>">Free Structure</a></li>
                        <li><a href="<?= base_url('admission#registration_process') ?>">Registration Process</a></li>
                    </ul>
                </div>
                <div id="statutorySubMenu" class="subMenuItems">
                    <ul>
                        <li><a href="<?= base_url('statutory#aboutcbse') ?>">Compliance Details</a></li>
                        <li><a href="<?= base_url('statutory#guidelines') ?>">Guidelines for parents</a></li>
                        <li><a href="<?= base_url('statutory#guidelines') ?>">Attendence & Leave Policy</a></li>
                        <li><a href="<?= base_url('statutory#aboutcbse') ?>">Code of Conduct</a></li>
                        <li><a href="<?= base_url('statutory#aboutcbse') ?>">Rules & Regulations</a></li>
                        <li><a href="<?= base_url('statutory#aboutcbse') ?>">Child Support Policy</a></li>
                    </ul>
                </div>
                <div id="inclusiveSubMenu" class="subMenuItems">
                    <ul>
                        <li><a href="<?= base_url('inclusive-education#learing_center') ?>">Learning Centers</a></li>
                        <li><a href="<?= base_url('inclusive-education#Occupational') ?>">Occupational Theraphy</a></li>
                    </ul>
                </div>
                <div id="curriculumSubMenu" class="subMenuItems">
                    <ul>
                        <li><a href="<?= base_url('beyond-curriculum#sirMutha-clubs') ?>">Clubs</a></li>
                        <li><a href="<?= base_url('beyond-curriculum#news-letter') ?>">Student Newsletters</a></li>
                        <li><a href="<?= base_url('beyond-curriculum#annual-events') ?>">Annual Events</a></li>
                    </ul>
                </div>
                <div id="eventsSubMenu" class="subMenuItems">
                    <ul>
                        <li><a href="<?= base_url('events/#upcomingEvents') ?>">Upcoming Events</a></li>
                        <li><a href="<?= base_url('events/#pastEvents') ?>">Past Events</a></li>
                    </ul>
                </div>
                 
            </div>
            <div class="col-12 col-md-12 col-lg-12 col-xl-4 itemCenter mobContactBtn">
                <div class="headerContact-info">
                    <h5>Quick Links</h5>

                    <div class="mobQuickLinks">
                        <!-- <div class="quickLinks">
                            <img src="<?= base_url('images/menu-enquire.svg') ?>" alt="">
                            <span>Inquire</span>
                        </div>
                        <hr class="horizontal-whiteLine"> -->
                        <div class="quickLinks">
                            <a href="<?= base_url('announcements') ?>">
                                <img src="<?= base_url('images/menu-schoolNews.svg') ?>" alt="">
                                <span>School News</span>
                            </a>
                        </div>
                        <hr class="horizontal-whiteLine">
                        <div class="quickLinks">
                            <a href="<?= base_url('admission') ?>">
                                <img src="<?= base_url('images/menu-admission.svg') ?>" alt="">
                                <span>Admissions</span>
                            </a>
                        </div>
                        <hr class="horizontal-whiteLine">
                        <div class="quickLinks">
                            <a href="<?= base_url('career') ?>">
                                <img src="<?= base_url('images/menu-career.svg') ?>" alt="">
                                <span>Career</span>
                            </a>
                        </div>
                    </div>

                    <div class="socialMedial-links">
                        <div class="socialIcons">
                            <a href="https://www.instagram.com/sir_mutha_school?igsh=MXZzMHVjajRqd3V2bw=="><img src="<?= base_url('images/menu-instaIcon.svg') ?>" alt="">
                            <span>Instagram</span></a>
                        </div>
                        <div class="socialIcons">
                            <a href="https://www.facebook.com/Sirmuthaschool/"><img src="<?= base_url('images/menu-facebookIcon.svg') ?>" alt="">
                            <span>Facebook</span></a>
                        </div>
                        <div class="socialIcons">
                            <a href="#"><img src="<?= base_url('images/menu-xIcon.svg') ?>" alt="">
                            <span>Twitter</span></a>
                        </div>
                    </div>

                    <div class="mobBtns">
                        <a class="contactBtn" href="https://themadrassevasadan.org/be_a_part" traget="_blank">Donate</a>
                        <a class="contactBtn" href="<?= base_url('contact') ?>">contact Us</a>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Menus -->

    <!-- Header Section -->