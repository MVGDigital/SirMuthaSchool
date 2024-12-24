<!-- Banner Section -->
<section class=" banner-section">
    <div class="bannerTitle">
        <h1>Sir Mutha School</h1>
        <p>A unit of the madras seva sadan</p>
    </div>

    <div id="homeSlider" class="splide homeBanner">
        <div class="splide__track">
            <ul class="splide__list">
                <?php foreach ($banners as $banner): ?>
                <li class="splide__slide">
                    <div class="sliderContainer">
                        <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid"
                            alt="<?= esc($banner['title']) ?>">
                        <h4><?= esc($banner['title']) ?></h4>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</section>
<!-- Banner Section -->