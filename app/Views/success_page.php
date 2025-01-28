<main>
    <?php if (isset($registration_number)): ?>
    <!-- Banner Section -->
    <section class="banner-section">
        <?php if (!empty($banners)): ?>
        <?php foreach ($banners as $banner): ?>
        <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid deskTopImg"
            alt="<?= esc($banner['title']); ?>">
        <img src="<?= base_url('uploads/banner_images/' . $banner['mobile_image']); ?>" class="img-fluid mobImg w100"
            alt="Banner image">
        <div class="bannerTitle">
            <h1>Sir Mutha School</h1>
            <p>A unit of the madras seva sadan</p>
        </div>
        <div class="banner-subTitle">
            <h2><?= esc($banner['title']); ?></h2>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </section>
    <!-- Banner Section -->
    <h3 style="text-align:center;" class="mt-5">Applied for kindergarten to grade X : 2025-2026</h3>
    <h4 style="text-align:center;margin-top:30px;" class="m-5">
        Your Application has been successfully registered.
        <br>Please note this Application Number for your future reference
        <br><br>
        <b>Application Number : <?php echo $registration_number; ?>/2526</b>
        <br><br>
        Please <a target="_blank" style="color:#2A3F92!important;"
            href="<?php echo base_url('admission/printView/' . $registration_number); ?>">click here</a> to print the
        application.
    </h4>
    <?php else: ?>
    <p class="text-danger" style="text-align:center;">Invalid application number. Please try again.</p>
    <?php endif; ?>