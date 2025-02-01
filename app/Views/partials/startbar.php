<div class="startbar d-print-none">
    <!--start brand-->
    <div class="brand">
        <a href="index" class="logo">
            <!-- <span> -->
            <img src="<?= base_url('/images/favicon.png'); ?>" alt="logo" class="logo-sm">
            <!-- </span> -->
            <!-- <span class="">
                <img src="/images/logo-light.png" alt="logo-large" class="logo-lg logo-light">
                <img src="/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
            </span> -->
        </a>
    </div>
    <!--end brand-->
    <!--start startbar-menu-->
    <div class="startbar-menu">
        <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
            <div class="d-flex align-items-start flex-column w-100">
                <!-- Navigation -->
                <ul class="navbar-nav mb-auto w-100">
                    <li class="menu-label pt-0 mt-0">
                        <!-- <small class="label-border">
                            <div class="border_left hidden-xs"></div>
                            <div class="border_right"></div>
                        </small> -->
                        <span>Main Menu</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarBanners" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarBanners">
                            <i class="iconoir-home-simple menu-icon"></i>
                            <span>Banner</span>
                        </a>
                        <div class="collapse " id="sidebarBanners">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/banner'); ?>">Banners</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/videobanner'); ?>">Video</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarDashboards-->
                    </li>
                    <!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarCareers" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCareers">
                            <i class="fa-solid fa-briefcase menu-icon"></i>
                            <span>Careers</span>
                        </a>
                        <div class="collapse " id="sidebarCareers">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/career'); ?>">Jobs</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="<?= base_url('adm1n/job-applications'); ?>">Applications</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarDashboards-->
                    </li>
                    <!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarEvents" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarEvents">
                            <i class="fa-solid fa-calendar-days menu-icon"></i>
                            <span>Events</span>
                        </a>
                        <div class="collapse " id="sidebarEvents">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/event-list'); ?>">Events</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/event_users'); ?>">Events Register
                                        User</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarDashboards-->
                    </li>
                    <!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarAdmission" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAdmission">
                            <i class="fa-solid fa-school menu-icon"></i>
                            <span>Admission</span>
                        </a>
                        <div class="collapse " id="sidebarAdmission">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/admission'); ?>">Kindergarten Grade
                                        X</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/students'); ?>">Activity
                                        Centre/Pre-KG</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarDashboards-->
                    </li>
                    <!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarAboutUs" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAboutUs">
                            <i class="icofont-users-alt-3 menu-icon"></i>
                            <span>About us</span>
                        </a>
                        <div class="collapse" id="sidebarAboutUs">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/boardofmember'); ?>">Board of
                                        Members</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarDashboards-->
                    </li>
                    <!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarContactUs" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarContactUs">
                            <i class="fa-solid fa-square-phone menu-icon"></i>
                            <span>Contact us</span>
                        </a>
                        <div class="collapse " id="sidebarContactUs">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/contact'); ?>">Contact us</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarDashboards-->
                    </li>
                    <!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarBlogs" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarBlogs">
                            <i class="fa-solid fa-blog menu-icon"></i>
                            <span>Beyond Curriculum</span>
                        </a>
                        <div class="collapse" id="sidebarBlogs">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/annual-events'); ?>">Annual Events</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarDashboards-->
                    </li>
                    <!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarannouncements" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarannouncements">
                            <i class="fa-solid fa-bullhorn menu-icon"></i>
                            <span>Announcements</span>
                        </a>
                        <div class="collapse" id="sidebarannouncements">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/announcements'); ?>">Announcements</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarDashboards-->
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarachievements" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarachievements">
                            <i class="fa-solid fa-trophy menu-icon"></i> <!-- Trophy icon for achievements -->
                            <span>Achievements</span>
                        </a>
                        <div class="collapse" id="sidebarachievements">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/achievements'); ?>">Achievements</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end sidebarachievements-->
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarGallery" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarGallery">
                            <i class="fa-solid fa-image menu-icon"></i>
                            <span>Gallery</span>
                        </a>
                        <div class="collapse" id="sidebarGallery">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/gallery'); ?>">Gallery</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarDashboards-->
                    </li>
                    <!--end nav-item-->
                </ul>
                <!--end navbar-nav--->
            </div>
        </div>
        <!--end startbar-collapse-->
    </div>
    <!--end startbar-menu-->
</div>
<!--end startbar-->
<div class="startbar-overlay d-print-none"></div>