<main>
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="bannerImg-OverlayContainer"></div>
        <?php if (!empty($banner)): ?>
            <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid deskTopImg"
                alt="<?= esc($banner['title']); ?>">
            <img src="<?= base_url('uploads/banner_images/' . $banner['mobile_image']); ?>" class="img-fluid mobImg w100"
                alt="Banner image">

            <div class="banner-subTitle">
                <h2><?= esc($banner['title']); ?></h2>
            </div>
        <?php endif; ?>
    </section>
    <!-- Banner Section -->

    <!-- Section Menus -->
    <section class="container-space innerMenus-sec">
        <div class="innerMenus">
            <ul>
            <li><a href="<?= base_url('achievements/academic-achievements#clubs') ?>" class="active">Class X Toppers</a></li>
                <li><a href="<?= base_url('achievements/academic-achievements#topper') ?>">Class XII Toppers</a></li>
                
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>

    </section>
    <!-- Section Menus -->

    <!-- Clubs -->
    <section id="sirMutha-clubs" class="container-space clubsSec blueBg-Sec blue-wave pb-100">
        <div id="clubs" class="splide paginationCenter overlayPagination cardSlider">
            <div class="splide__track">
                <div class="sectionTitle-white col-lg-10 m-auto">
                    <h3>Class X <span> Toppers</span></h3>
                </div>
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/cherukuri_mahati.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/diya_balani.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/vir_naving_mukhi.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/krisha_arun_kinger.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/n_nauffiah_husn.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/sarvelpalli_sai_aditya.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/krisha_arun_kinger.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/cherukuri_mahati.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/vir_naving_mukhi.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/cherukuri_mahati.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/cherukuri_mahati.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/diya_balani.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/tanya_mukhi.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/diya_sitara_raman.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <!-- Clubs -->

    <!-- Clubs -->
    <section id="sirMutha-clubs" class="container-space clubsSec blueBg-Sec blue-wave pb-100">
        <div id="topper" class="splide paginationCenter overlayPagination cardSlider">
            <div class="splide__track">
                <div class="sectionTitle-white col-lg-10 m-auto">
                    <h3>Class XII <span> Toppers</span></h3>
                </div>
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/atira.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/saloni_bisani.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/imran.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/shloka.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/grethi.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/imran.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/rashida.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/atira.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/saloni_bisani.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/shloka.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/saloni_bisani.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/viraj_girish_ramdas.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/nadine_faith_balaji.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/samiksha_rao.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/sohalaya_syed.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/dhruv_choudry.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/atira.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/shre_syleshwar.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/shre_syleshwar.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/shre_syleshwar.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/imran.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/imran.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/grethi.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/mehar.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/purab_r_jain.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/purab_r_jain.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/purab_r_jain.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/chaturbujan.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="sectionSubTitle-white">
                                <h4>Heritage <span>Club</span></h4>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>



                </ul>
            </div>
        </div>
    </section>
    <!-- Clubs -->