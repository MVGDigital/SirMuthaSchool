<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Rizz')) ?>

    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <div class="container-xxl">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 bg-black auth-header-box rounded-top">
                                    <div class="text-center p-3">
                                        <a href="index" class="logo logo-admin">
                                            <img src="/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white fs-18">Sorry! Unexpected Server Error</h4>
                                        <p class="text-muted fw-medium mb-0">Back to dashboard of Rizz</p>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="ex-page-content text-center">
                                        <img src="/images/extra/error.svg" alt="0" class="" height="170">
                                        <h1 class="my-2">500!</h1>
                                        <h5 class="fs-16 text-muted mb-3">Internal Server Error</h5>
                                    </div>
                                    <a class="btn btn-primary w-100" href="index">Back to Dashboard <i class="fas fa-redo ms-1"></i></a>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end card-body-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!-- container -->
</body>
<!--end body-->

</html>