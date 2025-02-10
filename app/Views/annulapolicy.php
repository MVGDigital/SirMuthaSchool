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
        
    </section>

    

    <!-- Application Process -->
    <section class="container-space bgImg-with-center-content application-process-img ptb-80">
        <!-- <div class="sectionTitle-white">
          
        </div> -->
        <div class="col-lg-9 m-auto">
            <div class="center-card">
                <div class="sectionTitle-blue detailpagecontent">
                    <h3>Annula <span> Pedegogical Policy</span></h3>
                    <p>Sir Mutha School stands firmly by its core values of Commitment, Acceptance, Respect, Excellence, and Strength (CARES), each of which serves as a cornerstone in shaping the character and aspirations of our students. At the heart of our approach lies the creation of a vibrant, joyful learning environment where students are encouraged to express themselves freely, embrace their creative potential, and nurture the multifaceted dimensions of their personalities.

                    Equally central to our philosophy is the emphasis on a dynamic teaching approach, one that goes beyond conventional instruction. Our educators, with their profound expertise and dedication, engage in continuous professional development, ensuring their methods remain both innovative and attuned to the diverse needs of our students. 

                    To ensure students are engaged and involved in their learning, we personalise learning in the following ways:
                    Carefully planned curriculum based on each individual child’s needs which includes:
                    Emphasis on prior knowledge
                    Stress on individual interests
                    Focus on individual learning styles
                    Identifying the abilities and skills of students helps them identify their future learning goals
                    Students and teachers construct learning pathways together based on two‐way feedback conversations.
                    Experiential learning as a way of life is not environment- or- curriculum specific
                    Teachers and students hold feedback conversations to discuss data and developmental needs and together they set goals. They discuss ways to reach those goals and the types of evidence that the students will need to produce.
                    Scope and sequence need to be flexible
                    Parents can track the progress of their wards via the Parents’ Portals.
                    Students’ need to be able to articulate their learning in conferences including video conferences.
                    Teachers get to know students as “people” not just “students” and what their interests are.
                    Children have a choice in terms of regulating behaviour, what/how to learn and how to present their learning.

                     </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Application Process-->



    