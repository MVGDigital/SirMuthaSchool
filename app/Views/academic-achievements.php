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
                            <div class="academic-thumbContent">
                                <h6>CHERUKURI MAHATI</h6>
                                <p>Mark <span> - 489/500</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>DIYA BALANI</h6>
                                <p>Mark <span> - 483/500</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>M. VIR NAVIN MUKHI</h6>
                                <p>Mark <span> - 475/500</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>KRISHA ARUN KINGER</h6>
                                <p>English <span> - 98 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>N NAUFFIAH HUSN</h6>
                                <p>Tamil <span> - 95 Marks</span></p>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/boy_vector.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="academic-thumbContent">
                                <h6>SARVEPALLI SAI ADITYA</h6>
                                <p>Sanskrit <span> - 98 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>KRISHA ARUN KINGER</h6>
                                <p>Sanskrit <span> - 98 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>CHERUKURI MAHATI</h6>
                                <p>Sanskrit <span> - 98 Marks</span></p>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/boy_vector.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="academic-thumbContent">
                                <h6>S. AYUSH</h6>
                                <p>Hindi <span> - 97 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>M. VIR NAVIN MUKHI</h6>
                                <p>Hindi <span> - 97 Marks</span></p>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/boy_vector.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="academic-thumbContent">
                                <h6>RAJVEER AGRAWAL</h6>
                                <p>Mathematics <span> - 99 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>CHERUKURI MAHATI</h6>
                                <p>Mathematics <span> - 99 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>CHERUKURI MAHATI</h6>
                                <p>Science <span> - 97 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>DIYA BALANI</h6>
                                <p>Social Science <span> - 99 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>TANYA MUKHI</h6>
                                <p>Computer Application <span> - 97 Marks</span></p>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/Xth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/girl_vector.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="academic-thumbContent">
                                <h6>DIYA SITARA RAMAN</h6>
                                <p>Painting <span> - 99 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Atira Mardia</h6>
                                <p>Mark <span> - 483/500</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Saloni Bisani</h6>
                                <p>Mark <span> - 483/500</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>A.S Imran</h6>
                                <p>Mark <span> - 478/500</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Shloka Mehta</h6>
                                <p>Mark <span> - 475/500</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>D. Grethi</h6>
                                <p>Mark <span> - 470/500</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>A.S. Imran</h6>
                                <p>English <span> - 99 Marks</span></p>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/girl_vector.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="academic-thumbContent">
                                <h6>Isha Hegde</h6>
                                <p>English <span> - 99 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Rashida.A.Madraswala</h6>
                                <p>English <span> - 99 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Atira Mardia</h6>
                                <p>Mathematics <span> - 97 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Saloni Bisani</h6>
                                <p>Physics <span> - 95 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Shloka Mehta</h6>
                                <p>Physics <span> - 95 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Saloni Bisani</h6>
                                <p>Chemistry <span> - 99 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Viraj Girish Ramdas</h6>
                                <p>Computer Science <span> - 95 Marks</span></p>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/girl_vector.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="academic-thumbContent">
                                <h6>Isha Hegde</h6>
                                <p>Computer Science <span> - 95 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Nadine Faith Balaji</h6>
                                <p>Computer Science <span> - 95 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Samiksha Rao</h6>
                                <p>Computer Science <span> - 95 Marks</span></p>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/boy_vector.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="academic-thumbContent">
                                <h6>Aditya</h6>
                                <p>Computer Science <span> - 95 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Sohaliya Syed</h6>
                                <p>Biology <span> - 98 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Dhruv Chowdhary</h6>
                                <p>Economics <span> - 97 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Atira Mardia</h6>
                                <p>Economics <span> - 97 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Shri Syleshwar</h6>
                                <p>Salesmanship <span> - 100 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Shri Syleshwar</h6>
                                <p>Marketing <span> - 84 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Shri Syleshwar</h6>
                                <p>Mass Media <span> - 79 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>A.S Imran</h6>
                                <p>Accountancy <span> - 97 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>A.S Imran</h6>
                                <p>Applied Mathematics <span> - 95 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>D.Grethi</h6>
                                <p>Psychology <span> - 99 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Mehar Dinesh Balani</h6>
                                <p>History <span> - 95 Marks</span></p>
                            </div>
                            <div class="blueBtn-medium">
                                <a href="<?= base_url('uploads/achievements/XIIth_result_analysis_(2023- 2024).pdf') ?>" target="_blank">Know
                                    More</a>
                            </div>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="cardWith-under-info">
                            <img src="<?= base_url('images/achievements/boy_vector.png') ?>" class="img-fluid"
                                alt="Sir Mutha Logo">
                            <div class="academic-thumbContent">
                                <h6>R Rohin Kidambi</h6>
                                <p>Political Science <span> - 98 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Purab R Jain</h6>
                                <p>Office Procedure and Practices <span> - 88 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Purab R Jain</h6>
                                <p>Front Office <span> - 88 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Purab R Jain</h6>
                                <p>Painting <span> - 88 Marks</span></p>
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
                            <div class="academic-thumbContent">
                                <h6>Chaturbhujan Subramanian A</h6>
                                <p>Business Studies <span> - 98 Marks</span></p>
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