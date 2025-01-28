<?= $this->include('partials/html') ?>

<head>
    <?php echo view("partials/title-meta", array('title' => 'Video Banners')) ?>
    <link rel="stylesheet" href="<?= base_url('/libs/jsvectormap/jsvectormap.min.css') ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?= $this->include('partials/head-css') ?>
</head>

<body>
    <!-- Top Bar Start -->
    <?= $this->include('partials/topbar') ?>
    <!-- Top Bar End -->

    <!-- leftbar-tab-menu -->
    <?= $this->include('partials/startbar') ?>
    <!-- end leftbar-tab-menu -->

    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-xxl">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Video Banners</h4>
                                    </div>
                                    <div class="col text-end">
                                        <a href="<?= base_url('adm1n/videobanner/create') ?>" class="btn bg-colour">Add
                                            Video</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
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

                                    <div class="table-responsive">
                                        <table id="videoBannersTable" class="table table-bordered table-striped">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Video Title</th>
                                                    <th>Video Link</th>
                                                    <th>Page</th>
                                                    <th>Video File</th>
                                                    <th>Sort Order</th>
                                                    <th>Is Published</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($videoBanners)): ?>
                                                <?php $serial = 1; ?>
                                                <?php foreach ($videoBanners as $banner): ?>
                                                <tr>
                                                    <td><?= $serial++ ?></td>
                                                    <td><?= esc($banner['video_title']) ?></td>
                                                    <td><?= esc($banner['video_link']) ?></td>
                                                    <td><?= esc($banner['page']) ?></td>
                                                    <td><a href="<?= base_url('uploads/videos/' . esc($banner['video_file'])) ?>"
                                                            target="_blank">View Video</a></td>
                                                    <td><?= esc($banner['sort_order']) ?></td>
                                                    <td>
                                                        <div class="form-check form-switch form-switch-success">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="publishSwitch<?= esc($banner['id']) ?>"
                                                                onchange="togglePublish(<?= esc($banner['id']) ?>, this.checked)"
                                                                <?= $banner['is_published'] ? 'checked' : '' ?>>
                                                            <label class="form-check-label"
                                                                for="publishSwitch<?= esc($banner['id']) ?>"><?= $banner['is_published'] ? 'Active' : 'Inactive' ?></label>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="<?= base_url('adm1n/videobanner/edit/' . $banner['id']) ?>"
                                                            class="text-secondary" title="Edit">
                                                            <i class="las la-pen font-16"></i>
                                                        </a>
                                                        <a href="<?= base_url('adm1n/videobanner/delete/' . $banner['id']) ?>"
                                                            class="text-danger" title="Delete"
                                                            onclick="return confirm('Are you sure you want to delete this video banner?');">
                                                            <i class="las la-trash-alt font-16"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                        <!-- Video Modal -->
                                        <div id="videoModal" class="modal" style="display:none;">
                                            <div class="modal-content">
                                                <span class="close" onclick="closeVideoModal()">&times;</span>
                                                <video id="videoPlayer" controls>
                                                    <source id="videoSource" src="" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->include('partials/footer') ?>
        </div>
    </div>

    <!-- Javascript  -->
    <?= $this->include('partials/vendorjs') ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#videoBannersTable').DataTable();
    });

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

    function togglePublish(bannerId, isPublished) {
        $.ajax({
            url: "<?= base_url('video-banner/toggle-publish') ?>",
            type: "POST",
            data: {
                id: bannerId,
                is_published: isPublished ? 1 : 0
            },
            success: function(response) {
                alert("Publish status updated successfully.");
            },
            error: function() {
                alert("Failed to update publish status.");
            }
        });
    }

    function openVideoModal(videoUrl) {
        console.log(videoUrl); // Debugging line to check if the URL is correct
        document.getElementById('videoSource').src = videoUrl;
        document.getElementById('videoPlayer').load(); // Reload the video element to apply the new source
        document.getElementById('videoModal').style.display = "block"; // Show the modal
    }

    // Function to close the video modal
    function closeVideoModal() {
        document.getElementById('videoModal').style.display = "none"; // Hide the modal
    }
    </script>
</body>

</html>