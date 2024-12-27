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
</head>

<body>

    <!-- Header Section -->
    <nav class="navbar navbar-light">
        <div class="container-fluid itemSpaceBetween">
            <a class="navbar-brand logo" href="<?= base_url('index') ?>">
                <img src="<?= base_url('images/sir-mutha-logo.svg') ?>" class="img-fluid" alt="Sir Mutha School Logo">
                <p>Sir mutha school</p>
            </a>
            <div class="headerInfo">
                <a class="contactBtn" href="<?= base_url('#') ?>">Donate</a>
                <a class="contactBtn" href="<?= base_url('contact') ?>">contact Us</a>
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
        <div class="menusContainer col-lg-11">
          <div class="mainMenus col-lg-3">
            <ul class="navbar-nav">
                <li id="aboutMenu" class="nav-item">
                    <a class="nav-link active" href="#">About Us</a>
                </li>
                <li id="academicsMenu" class="nav-item">
                    <a class="nav-link" href="#">Academics</a>
                </li>
                <li id="facilitiesMenu" class="nav-item">
                    <a class="nav-link" href="#">Facilities</a>
                </li>
                <li id="admissionMenu" class="nav-item">
                    <a class="nav-link" href="#">Admissions</a>
                </li>
                <li id="statutoryMenu" class="nav-item">
                    <a class="nav-link" href="#">Statutory</a>
                </li>
                <li id="inclusiveMenu" class="nav-item">
                    <a class="nav-link" href="#">Inclusive Educations</a>
                </li>
                <li id="curriculumMenu" class="nav-item">
                    <a class="nav-link" href="#">Beyond Curriculum</a>
                </li>
                <li id="galleryMenu" class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li id="eventsMenu" class="nav-item">
                    <a class="nav-link" href="#">Events</a>
                </li>
                <li id="careersMenu" class="nav-item">
                    <a class="nav-link" href="#">Careers</a>
                </li>
                <li id="parentsMenu" class="nav-item">
                    <a class="nav-link" href="#">Parents Landing Page</a>
                </li>
            </ul>
          </div>
            <hr class="whiteLine">
            <div class="subMenus col-lg-4">
            <div id="aboutSubMenu" class="subMenuItems">
                <ul>
                    <li><a href="#">About - Submenu Item 1</a></li>
                    <li><a href="#">About - Submenu Item 2</a></li>
                </ul>
            </div>
            <div id="academicsSubMenu" class="subMenuItems">
                <ul>
                    <li><a href="#">Academics - Submenu Item 1</a></li>
                    <li><a href="#">Academics - Submenu Item 2</a></li>
                </ul>
            </div>
            <div id="facilitiesSubMenu" class="subMenuItems">
                <ul>
                    <li><a href="#">Facilities - Submenu Item 1</a></li>
                    <li><a href="#">Facilities - Submenu Item 2</a></li>
                </ul>
            </div>
            <div id="admissionSubMenu" class="subMenuItems">
                <ul>
                    <li><a href="#">Admissions - Submenu Item 1</a></li>
                    <li><a href="#">Admissions - Submenu Item 2</a></li>
                </ul>
            </div>
            <div id="statutorySubMenu" class="subMenuItems">
                <ul>
                    <li><a href="#">Statutory - Submenu Item 1</a></li>
                    <li><a href="#">Statutory - Submenu Item 2</a></li>
                </ul>
            </div>
            <div id="inclusiveSubMenu" class="subMenuItems">
                <ul>
                    <li><a href="#">Inclusive - Submenu Item 1</a></li>
                    <li><a href="#">Inclusive - Submenu Item 2</a></li>
                </ul>
            </div>
            <div id="curriculumSubMenu" class="subMenuItems">
                <ul>
                    <li><a href="#">Curriculum - Submenu Item 1</a></li>
                    <li><a href="#">Curriculum - Submenu Item 2</a></li>
                </ul>
            </div>
            <div id="gallerySubMenu" class="subMenuItems">
                <ul>
                    <li><a href="#">Gallery - Submenu Item 1</a></li>
                    <li><a href="#">Gallery - Submenu Item 2</a></li>
                </ul>
            </div>
            <div id="eventsSubMenu" class="subMenuItems">
                <ul>
                    <li><a href="#">Events - Submenu Item 1</a></li>
                    <li><a href="#">Events - Submenu Item 2</a></li>
                </ul>
            </div>
            <div id="careersSubMenu" class="subMenuItems">
                <ul>
                    <li><a href="#">Careers - Submenu Item 1</a></li>
                    <li><a href="#">Careers - Submenu Item 2</a></li>
                </ul>
            </div>
            <div id="parentsSubMenu" class="subMenuItems">
                <ul>
                    <li><a href="#">Parents - Submenu Item 1</a></li>
                    <li><a href="#">Parents - Submenu Item 2</a></li>
                </ul>
            </div>
        </div>
            <div class="col-lg-4">
              <div class="headerContact-info">
                <h5>Quick Links</h5>

                <div class="quickLinks">
                  <img src="<?= base_url('images/menu-enquire.svg') ?>" alt="">
                  <span>Inquire</span>                  
                </div>
                <hr class="horizontal-whiteLine">
                <div class="quickLinks">
                  <img src="<?= base_url('images/menu-schoolNews.svg') ?>" alt="">
                  <span>School News</span>                  
                </div>
                <hr class="horizontal-whiteLine">
                <div class="quickLinks">
                  <img src="<?= base_url('images/menu-admission.svg') ?>" alt="">
                  <span>Admissions</span>                  
                </div>
                <hr class="horizontal-whiteLine">
                <div class="quickLinks">
                  <img src="<?= base_url('images/menu-career.svg') ?>" alt="">
                  <span>Career</span>                  
                </div>
                <hr class="horizontal-whiteLine">

                <div class="socialMedial-links">
                  <div class="socialIcons">
                    <img src="<?= base_url('images/menu-instaIcon.svg') ?>" alt="">
                    <span>Instagram</span>
                  </div>
                  <div class="socialIcons">
                    <img src="<?= base_url('images/menu-facebookIcon.svg') ?>" alt="">
                    <span>Facebook</span>
                  </div>
                  <div class="socialIcons">
                    <img src="<?= base_url('images/menu-xIcon.svg') ?>" alt="">
                    <span>Twitter</span>
                  </div>
                </div>

              </div>
            </div>
        </div>

    </div>
    <!-- Menus -->

    <!-- Header Section -->