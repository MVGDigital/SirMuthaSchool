<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => isset($faq) ? 'Edit FAQ' : 'Add FAQ')) ?>
    <link rel="stylesheet" href="<?= base_url('/libs/jsvectormap/jsvectormap.min.css') ?>">
    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <?= $this->include('partials/topbar') ?>
    <?= $this->include('partials/startbar') ?>

    <div class="page-wrapper">
        <div class="page-content">
            <div class="container-xxl">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                    <h4 class="card-title"><?= isset($eventUser) ? 'Add Event Registered User' : 'Edit Event Registered User Details' ?></h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <form action="<?= base_url('adm1n/event-users/update/' . $user['id']) ?>" method="post">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="formFields row w100 m-0">
                                                <!-- Display Success Message -->
                                                <?php if (session()->getFlashdata('success')): ?>
                                                <div id="success-alert" class="alert alert-success">
                                                    <?= session()->getFlashdata('success') ?>
                                                </div>
                                                <?php endif; ?>

                                                <!-- Display Error Message -->
                                                <?php if (session()->getFlashdata('error')): ?>
                                                <div id="danger-alert" class="alert alert-danger">
                                                    <?= session()->getFlashdata('error') ?>
                                                </div>
                                                <?php endif; ?>

                                                <!-- Display Validation Errors -->
                                                <?php if (session()->getFlashdata('errors')): ?>
                                                <div id="danger-alert" class="alert alert-danger">
                                                    <ul>
                                                        <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                                        <li><?= esc($error) ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                                <?php endif; ?>

                                                <div class="mb-3 row">
                                                    <label for="user_name" class="col-sm-4 col-form-label">Name</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="user_name"
                                                            name="user_name" value="<?= esc($user['user_name']) ?>"
                                                            required>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                                                    <div class="col-sm-8">
                                                        <input type="email" class="form-control" id="email" name="email"
                                                            value="<?= esc($user['email']) ?>" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="mobile_number"
                                                        class="col-sm-4 col-form-label">Phone</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" id="mobile_number"
                                                            name="mobile_number"
                                                            value="<?= esc($user['mobile_number']) ?>" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="guests" class="col-sm-4 col-form-label">Number of
                                                        Guests</label>
                                                    <div class="col-sm-8">
                                                        <input type="number" class="form-control" id="guests"
                                                            name="guests" value="<?= esc($user['guests']) ?>" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="residential_address"
                                                        class="col-sm-4 col-form-label">Residential Address</label>
                                                    <div class="col-sm-8">
                                                        <textarea class="form-control" id="residential_address"
                                                            name="residential_address" rows="3"
                                                            required><?= esc($user['residential_address']) ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <div class="col-sm-8 offset-sm-4">
                                                        <button type="submit" class="btn bg-colour">Update</button>
                                                        <a href="<?= base_url('adm1n/event_users') ?>"
                                                            class="btn btn-secondary">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->include('partials/footer') ?>
        </div>
    </div>

    <?= $this->include('partials/vendorjs') ?>
    <script src="<?= base_url('/js/app.js') ?>"></script>
    <script>
    setTimeout(function() {
        var successAlert = document.getElementById('success-alert');
        var errorAlert = document.getElementById('error-alert');

        if (successAlert) {
            successAlert.style.display = 'none';
        }

        if (errorAlert) {
            errorAlert.style.display = 'none';
        }
    }, 5000);
    </script>
</body>

</html>