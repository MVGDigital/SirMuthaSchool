<main>
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="bannerImg-OverlayContainer"></div>
        <?php if (!empty($banner)): ?>
        <img src="<?= base_url('uploads/banner_images/' . $banner['desktop_image']); ?>" class="img-fluid deskTopImg"
            alt="<?= esc($banner['title']); ?>">
        <img src="<?= base_url('uploads/banner_images/' . $banner['mobile_image']); ?>" class="img-fluid mobImg w100"
            alt="Banner image">
        <div class="bannerTitle">
            <h1>Sir Mutha School</h1>
            <p>A unit of the madras seva sadan</p>
        </div>
        <div class="banner-subTitle">
            <h2><?= esc($banner['title']); ?></h2>
        </div>
        <?php endif; ?>
    </section>
    <!-- Banner Section -->

    <!-- Section Menus -->
    <section class="container-space innerMenus-sec" id="abouctbse">
        <div class="innerMenus">
            <ul>
                <li><a href="<?= base_url('academics#aboutcbse') ?>" class="active">About CBSE</a></li>
                <li><a href="<?= base_url('academics#cbsecurriculum') ?>">CBSE Curriculum</a></li>
                <li><a href="<?= base_url('academics#teacherenrichment') ?>">Teacher Enrichment</a></li>
                <li><a href="<?= base_url('academics#annulapolicy') ?>">Annula Pedegogical Policy</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>About <span>CBSE</span></h3>

            <h6>The Central Board of Secondary Education (CBSE) envisions a robust, vibrant, and holistic school
                education system that nurtures excellence in every sphere of human endeavour.
                The Board is dedicated to providing quality education that encourages intellectual, social, and cultural
                vitality among its learners.
                It strives to create a learning process and environment that empowers future citizens to emerge as
                global leaders in the evolving knowledge society.
                The Board advocates Continuous and Comprehensive Evaluation, emphasising the holistic development of
                learners.
                It is committed to offering a stress-free learning environment that cultivates competent, confident, and
                enterprising individuals who promote harmony and peace.
            </h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- CBSE Curriculum -->
    <section class="wave-sec white-bgImg" id="cbsecurriculum">
        <div class="itemSpaceBetween">
            <div class="col-md-12 col-lg-5 col-xl-5">
                <img src="<?= base_url('images/academics/curriculum.svg') ?>" class="img-fluid" alt="Lady Andal">
            </div>
            <div class="col-md-12 col-lg-7 col-xl-7 mobContTop-p-tb50 plr-80">
                <div class="sectionTitle-blue lft-rgt-content">
                    <h3>CBSE <span> Curriculam</span></h3>

                    <p>The curriculum aims to cultivate the holistic development of students, enhancing not only their
                        physical and intellectual abilities but also their social competencies. It incorporates
                        values-based learning activities that instil a strong ethical foundation. Furthermore, the
                        curriculum seamlessly integrates environmental education across various subjects and
                        disciplines, while also promoting critical and creative thinking. Emphasis is placed on
                        application-based learning to prepare students for real-world challenges. The adoption of the
                        National Curriculum Framework for School Education – 2023, as stipulated by the Central Board of
                        Secondary Education (CBSE), mandates that institutions that come under the board adhere to these
                        comprehensive educational guidelines. The CBSE Curriculum for Classes IX-XII (2024-25) is
                        accessible via link given below:
                    </p>
                    <div class="blueBtn-medium">
                        <a href="https://cbseacademic.nic.in/curriculum_2025.html" target="_blank">Know More</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- CBSE Curriculum -->

    <!--  Teacher Enrichment -->
    <section class="container-space bgImg-with-center-content teacher-enrichment-img ptb-80">
        <div class="col-lg-9 m-auto">
            <div class="center-card">
                <div class="sectionTitle-blue detailpagecontent">
                    <h3>Teacher<span> Enrichment</span></h3>
                    <p>The school conducts teacher enrichment programmes and workshops focusing on mental health,
                        classroom management strategies, and overall health and well-being. These programmes address
                        academic, co-curricular, and life-skill domains, ensuring a dynamic learning environment. In
                        line with the National Education Policy 2020, the CBSE provides continuous opportunities for
                        teachers to enhance their skills and stay abreast of advancements in their profession. These
                        opportunities include local, regional, national, international, and online modules. Teachers are
                        expected to complete at least 50 hours of Continuing Professional Development (CPD) annually,
                        focusing on areas such as foundational literacy, competency-based learning, and experiential
                        teaching methods.
                    </p>
                    <div class="blueBtn-medium">
                        <a href="<?= base_url('events'); ?>">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Teacher Enrichment -->

    <!--  Annual Pedagogical Policy -->
    <section id="annual-pedagogical">
        <img src="<?= base_url('images/inclusive-education/ot.png') ?>" class="img-fluid" alt="" id="Occupational">

        <div class="container-space ptb-80">
            <div class="sectionTitle-blue col-lg-10 m-auto">
                <h3>Annual <span> Pedagogical Plan</span></h3>
                <!-- <h6 class="light-blue">An Occupational Therapy Centre thrives within the school, dedicated to the
                    essential role of the Occupational Therapist in paediatrics.
                </h6> -->
                <p class="light-blue">Sir Mutha School stands firmly by its core values of Commitment, Acceptance,
                    Respect, Excellence, and Strength (CARES), each of which serves as a cornerstone in shaping the
                    character and aspirations of our students. At the heart of our approach lies the creation of a
                    vibrant, joyful learning environment where students are encouraged to express themselves freely,
                    embrace their creative potential, and nurture the multifaceted dimensions of their personalities.
                </p>
                <p class="light-blue">Equally central to our philosophy is the emphasis on a dynamic teaching approach,
                    one that goes beyond conventional instruction. Our educators, with their profound expertise and
                    dedication, engage in continuous professional development, ensuring their methods remain both
                    innovative and attuned to the diverse needs of our students.</p>
                <h6 class="light-blue"><b>To ensure students are engaged and involved in their learning, we personalise
                        learning in the following ways:</b></h6>
                <ul class="content-lists">
                    <li>Carefully planned curriculum based on each individual child’s needs which includes:</li>
                    <li>Emphasis on prior knowledge</li>
                    <li>Stress on individual interests</li>
                    <li>Focus on individual learning styles</li>
                    <li>Identifying the abilities and skills of students helps them identify their future learning goals
                    </li>
                    <li>Students and teachers construct learning pathways together based on two‐way feedback
                        conversations.</li>
                    <li>Experiential learning as a way of life is not environment- or- curriculum specific</li>
                    <li>Teachers and students hold feedback conversations to discuss data and developmental needs and
                        together they set goals. They discuss ways to reach those goals and the types of evidence that
                        the students will need to produce.</li>
                    <li>Scope and sequence need to be flexible</li>
                    <li>Parents can track the progress of their wards via the Parents’ Portals.</li>
                    <li>Students’ need to be able to articulate their learning in conferences including video
                        conferences.</li>
                    <li>Teachers get to know students as “people” not just “students” and what their interests are.</li>
                    <li>Children have a choice in terms of regulating behaviour, what/how to learn and how to present
                        their learning.</li>
                </ul>
            </div>
        </div>
    </section>
    <!--  Annual Pedagogical Policy -->