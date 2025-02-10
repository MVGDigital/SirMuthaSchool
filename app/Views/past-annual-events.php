<main>
    <!-- Banner Section (Unchanged) -->
    <section class="banner-section">
        <div class="bannerImg-OverlayContainer"></div>
        <?php if (!empty($banner)): ?>
        <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid deskTopImg"
            alt="<?= esc($banner['title']); ?>">
        <img src="<?= base_url('uploads/banner_images/' . $banner['mobile_image']); ?>" class="img-fluid mobImg w100"
            alt="Banner image">
        
        <div class="banner-subTitle">
            <h2><?= esc($banner['title']); ?></h2>
        </div>
        <?php endif; ?>
    </section>

    <!-- Past Annual Events Section -->
    <section class="past-annual-events">
        <div class="container">
            <h3 class="text-center mb-5">Past Annual Events</h3>
            <div class="row mt-5">
                <!-- Left Side: Year Dropdown -->
                <div class="col-md-3">
                    <h5>Select Year</h5>
                    <select class="form-control">
                        <option selected disabled>Choose Year</option>
                        <option>2023</option>
                        <option>2022</option>
                        <option>2021</option>
                        <option>2020</option>
                        <option>2019</option>
                    </select>
                </div>

                <div class="col-md-6">

                </div>

                <!-- Right Side: Month Dropdown -->
                <div class="col-md-3">
                    <div class="select-month">
                    <h5 class="text-start">Select Month</h5>
                    <select class="form-control">
                        <option selected disabled>Choose Month</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                    </div>
                </div>

                <!-- Events Display Section -->
                <div class="col-md-12 text-center mt-5">
                    <!-- <h3>Past Annual Events</h3> -->
                    <p>No past annual events.</p>
                </div>
            </div>
        </div>
    </section>

<!-- Optional CSS -->
<style>
    .past-annual-events { padding: 50px 0; height:60vh}
    .form-control { width: 100%; padding: 8px; font-size: 16px; }
    /* .select-month{display: flex;
        flex-direction: column;
        align-items: flex-end;} */
</style>
