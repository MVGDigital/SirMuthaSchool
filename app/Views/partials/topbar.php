<div class="topbar d-print-none">
    <div class="container-xxl">
        <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">


            <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                <li>
                    <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                        <i class="iconoir-menu-scale"></i>
                    </button>
                </li>
                <li class="mx-3 welcome-text">
                    <h3 class="mb-0 fw-bold text-truncate"></h3>
                    <a class="nav-link dropdown-toggle arrow-none nav-icon" href="<?= base_url('adm1n') ?>"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="icofont-home"></i>
                        <span class="alert-badge"></span>
                    </a>
                </li>
            </ul>
            <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">


                <li class="dropdown topbar-item">
                    <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown"
                        href="<?= base_url('#') ?>" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="icofont-bell-alt"></i>
                        <span class="alert-badge"></span>
                    </a>
                    <div class="dropdown-menu stop dropdown-menu-end dropdown-lg py-0">

                        <h5 class="dropdown-item-text m-0 py-3 d-flex justify-content-between align-items-center">
                            Notifications <a class="badge text-body-tertiary badge-pill">
                                <i class="iconoir-plus-circle fs-4"></i>
                            </a>
                        </h5>
                        <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified mb-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link mx-0 active" data-bs-toggle="tab" href="<?= base_url('#All') ?>"
                                    role="tab" aria-selected="true">
                                    All <span class="badge bg-primary-subtle text-primary badge-pill ms-1">0</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link mx-0" data-bs-toggle="tab" href="<?= base_url('#Projects') ?>"
                                    role="tab" aria-selected="false" tabindex="-1">
                                    Projects
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link mx-0" data-bs-toggle="tab" href="<?= base_url('#Teams') ?>"
                                    role="tab" aria-selected="false" tabindex="-1">
                                    Team
                                </a>
                            </li>
                        </ul>
                        <!-- All-->
                        <a href="<?= base_url('/adm1n') ?>" class="dropdown-item text-center text-dark fs-13 py-2">
                            View All <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>

                <li class="dropdown topbar-item">
                    <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown"
                        href="<?= base_url('#') ?>" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="<?= base_url('/images/ladyandal-logo.svg') ?>" alt=""
                            class="thumb-lg bg-colour rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end py-2">

                        <!-- <div class="dropdown-divider mt-0"></div> -->
                        <!-- <small class="text-muted px-2 pb-1 d-block">Account</small>
                        <a class="dropdown-item" href="<?= base_url('pages-profile') ?>"><i class="las la-user fs-18 me-1 align-text-bottom"></i> Profile</a>
                        <a class="dropdown-item" href="<?= base_url('ecommerce-orders') ?>"><i class="las la-wallet fs-18 me-1 align-text-bottom"></i> Earning</a>
                        <small class="text-muted px-2 py-1 d-block">Settings</small>                        
                        <a class="dropdown-item" href="<?= base_url('pages-profile') ?>"><i class="las la-cog fs-18 me-1 align-text-bottom"></i>Account Settings</a>
                        <a class="dropdown-item" href="<?= base_url('auth-lock-screen') ?>" target="_blank"><i class="las la-lock fs-18 me-1 align-text-bottom"></i> Lock</a>
                        <a class="dropdown-item" href="<?= base_url('pages-faq') ?>"><i class="las la-question-circle fs-18 me-1 align-text-bottom"></i> Help Center</a>                       
                        <div class="dropdown-divider mb-0"></div> -->
                        <a class="dropdown-item text-danger " href="<?= base_url('adm1n/logout') ?>"><i
                                class="las la-power-off fs-18 me-1 align-text-bottom"></i> Logout</a>
                    </div>
                </li>
            </ul>
            <!--end topbar-nav-->
        </nav>
        <!-- end navbar-->
    </div>
</div>