<div class="startbar d-print-none">
    <!--start brand-->
    <div class="brand">
        <a href="index" class="logo">
            <!-- <span> -->
            <img src="/images/mss-logo.svg" alt="logo" class="logo-sm">
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
                            <span>Dashboards</span>
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
                                    <a class="nav-link" href="<?= base_url('adm1n/kindergarten'); ?>">Kindergarten Grade
                                        IX</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/students'); ?>">Activity
                                        Centre/Pre-KG</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/faq'); ?>">FAQ</a>
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
                        <a class="nav-link" href="#sidebarAcademic" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAcademic">
                            <i class="fa-solid fa-graduation-cap menu-icon"></i>
                            <span>Academic</span>
                        </a>
                        <div class="collapse " id="sidebarAcademic">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/document'); ?>">Upload Documents</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarDashboards-->
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarTestimonial" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarTestimonial">
                            <i class="fa-solid fa-star menu-icon"></i>
                            <span>Testimonial</span>
                        </a>
                        <div class="collapse" id="sidebarTestimonial">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/testimonial'); ?>">Testimonials</a>
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
                            <span>Blogs</span>
                        </a>
                        <div class="collapse" id="sidebarBlogs">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('adm1n/blog'); ?>">Blogs</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarDashboards-->
                    </li>
                    <!--end nav-item-->

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


                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarApplications" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarApplications">
                            <i class="iconoir-view-grid menu-icon"></i>
                            <span>Applications</span>
                        </a>
                        <div class="collapse " id="sidebarApplications">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarAnalytics">
                                        <span>Analytics</span>
                                    </a>
                                    <div class="collapse " id="sidebarAnalytics">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="analytics-customers" class="nav-link ">Customers</a>
                                            </li>
                                            <!--end nav-item-->
                                            <li class="nav-item">
                                                <a href="analytics-reports" class="nav-link ">Reports</a>
                                            </li>
                                            <!--end nav-item-->
                                        </ul>
                                        <!--end nav-->
                                    </div>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarProjects">
                                        <span>Projects</span>
                                    </a>
                                    <div class="collapse " id="sidebarProjects">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-clients">Clients</a>
                                            </li>
                                            <!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-team">Team</a>
                                            </li>
                                            <!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-project">Project</a>
                                            </li>
                                            <!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-task">Task</a>
                                            </li>
                                            <!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-kanban-board">Kanban Board</a>
                                            </li>
                                            <!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-users">Users</a>
                                            </li>
                                            <!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="projects-create">Project Create</a>
                                            </li>
                                            <!--end nav-item-->
                                        </ul>
                                        <!--end nav-->
                                    </div>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="#sidebarEcommerce" data-bs-toggle="collapse" role="button"
                                        aria-expanded="false" aria-controls="sidebarEcommerce">
                                        <span>Ecommerce</span>
                                    </a>
                                    <div class="collapse " id="sidebarEcommerce">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-products">Products</a>
                                            </li>
                                            <!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-customers">Customers</a>
                                            </li>
                                            <!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-customer-details">Customer
                                                    Details</a>
                                            </li>
                                            <!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-orders">Orders</a>
                                            </li>
                                            <!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-order-details">Order Details</a>
                                            </li>
                                            <!--end nav-item-->
                                            <li class="nav-item">
                                                <a class="nav-link" href="ecommerce-refunds">Refunds</a>
                                            </li>
                                            <!--end nav-item-->
                                        </ul>
                                        <!--end nav-->
                                    </div>
                                </li>
                                <!--end nav-item-->

                                <li class="nav-item">
                                    <a class="nav-link" href="apps-chat">Chat</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="apps-contact-list">Contact List</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="apps-calendar">Calendar</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="apps-invoice">Invoice</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarApplications-->
                    </li>
                    <!--end nav-item-->
                    <li class="menu-label mt-2">
                        <small class="label-border">
                            <div class="border_left hidden-xs"></div>
                            <div class="border_right"></div>
                        </small>
                        <span>Components</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarElements">
                            <i class="iconoir-compact-disc menu-icon"></i>
                            <span>UI Elements</span>
                        </a>
                        <div class="collapse " id="sidebarElements">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-alerts">Alerts</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-avatar">Avatar</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-buttons">Buttons</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-badges">Badges</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-cards">Cards</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-carousels">Carousels</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-dropdowns">Dropdowns</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-grids">Grids</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-images">Images</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-list">List</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-modals">Modals</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-navs">Navs</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-navbar">Navbar</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-paginations">Paginations</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-popover-tooltips">Popover & Tooltips</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-progress">Progress</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-spinners">Spinners</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-tabs-accordions">Tabs & Accordions</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-typography">Typography</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="ui-videos">Videos</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarElements-->
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarAdvancedUI" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAdvancedUI">
                            <i class="iconoir-peace-hand menu-icon"></i>
                            <span>Advanced UI</span><span
                                class="badge rounded text-success bg-success-subtle ms-1">New</span>
                        </a>
                        <div class="collapse " id="sidebarAdvancedUI">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="advanced-animation">Animation</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="advanced-clipboard">Clip Board</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="advanced-dragula">Dragula</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="advanced-files">File Manager</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="advanced-highlight">Highlight</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="advanced-rangeslider">Range Slider</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="advanced-ratings">Ratings</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="advanced-ribbons">Ribbons</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="advanced-sweetalerts">Sweet Alerts</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="advanced-toasts">Toasts</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarAdvancedUI-->
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarForms">
                            <i class="iconoir-journal-page menu-icon"></i>
                            <span>Forms</span>
                        </a>
                        <div class="collapse " id="sidebarForms">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="forms-elements">Basic Elements</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="forms-advanced">Advance Elements</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="forms-validation">Validation</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="forms-wizard">Wizard</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="forms-editors">Editors</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="forms-uploads">File Upload</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="forms-img-crop">Image Crop</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarForms-->
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCharts">
                            <i class="iconoir-candlestick-chart menu-icon"></i>
                            <span>Charts</span>
                        </a>
                        <div class="collapse " id="sidebarCharts">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="charts-apex">Apex</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="charts-justgage">JustGage</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="charts-chartjs">Chartjs</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="charts-toast-ui">Toast</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarCharts-->
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarTables">
                            <i class="iconoir-table-rows menu-icon"></i>
                            <span>Tables</span>
                        </a>
                        <div class="collapse " id="sidebarTables">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="tables-basic">Basic</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="tables-datatable">Datatables</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="tables-editable">Editable</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarTables-->
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarIcons">
                            <i class="iconoir-trophy menu-icon"></i>
                            <span>Icons</span>
                        </a>
                        <div class="collapse " id="sidebarIcons">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="icons-fontawesome">Font Awesome</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="icons-lineawesome">Line Awesome</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="icons-icofont">Icofont</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="icons-iconoir">Iconoir</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarIcons-->
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarMaps">
                            <i class="iconoir-navigator-alt menu-icon"></i>
                            <span>Maps</span>
                        </a>
                        <div class="collapse " id="sidebarMaps">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="maps-google">Google Maps</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="maps-leaflet">Leaflet Maps</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="maps-vector">Vector Maps</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarMaps-->
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarEmailTemplates" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarEmailTemplates">
                            <i class="iconoir-send-mail menu-icon"></i>
                            <span>Email Templates</span>
                        </a>
                        <div class="collapse " id="sidebarEmailTemplates">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="email-templates-basic">Basic Action Email</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="email-templates-alert">Alert Email</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="email-templates-billing">Billing Email</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarEmailTemplates-->
                    </li>
                    <!--end nav-item-->
                    <li class="menu-label mt-2">
                        <small class="label-border">
                            <div class="border_left hidden-xs"></div>
                            <div class="border_right"></div>
                        </small>
                        <span>Crafted</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarPages">
                            <i class="iconoir-page-star menu-icon"></i>
                            <span>Pages</span>
                        </a>
                        <div class="collapse " id="sidebarPages">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-profile">Profile</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-notifications">Notifications</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-timeline">Timeline</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-treeview">Treeview</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-starter">Starter Page</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-pricing">Pricing</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-blogs">Blogs</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-faq">FAQs</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="pages-gallery">Gallery</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarPages-->
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAuthentication">
                            <i class="iconoir-fingerprint-lock-circle menu-icon"></i>
                            <span>Authentication</span>
                        </a>
                        <div class="collapse " id="sidebarAuthentication">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-login">Log in</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-register">Register</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-recover-pw">Re-Password</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-lock-screen">Lock Screen</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-maintenance">Maintenance</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-404">Error 404</a>
                                </li>
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="auth-500">Error 500</a>
                                </li>
                                <!--end nav-item-->
                            </ul>
                            <!--end nav-->
                        </div>
                        <!--end startbarAuthentication-->
                    </li>
                    <!--end nav-item-->
                </ul>
                <!--end navbar-nav--->
                <!-- <div class="update-msg text-center"> 
                    <div class="d-flex justify-content-center align-items-center thumb-lg update-icon-box  rounded-circle mx-auto">
                        <i class="iconoir-peace-hand h3 align-self-center mb-0 text-primary"></i>
                    </div>                   
                    <h5 class="mt-3">Mannat Themes</h5>
                    <p class="mb-3 text-muted">Rizz is a high quality web applications.</p>
                    <a href="javascript: void(0);" class="btn text-primary shadow-sm rounded-pill">Upgrade your plan</a>
                </div> -->
            </div>
        </div>
        <!--end startbar-collapse-->
    </div>
    <!--end startbar-menu-->
</div>
<!--end startbar-->
<div class="startbar-overlay d-print-none"></div>