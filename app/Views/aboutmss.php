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

    <!-- Section Menus -->
    <section class="container-space innerMenus-sec" id="ourhistory">
        <div class="innerMenus">
            <ul>
                <li><a href="<?= base_url('about#ourhistory') ?>" >Our History</a></li>
                <li><a href="<?= base_url('about#aboutmss') ?>" class="active">About MSS</a></li>
                <li><a href="<?= base_url('about#ourfounders') ?>">Our Founders</a></li>
                <li><a href="<?= base_url('about#visionmission') ?>">Vision & Mission</a></li>
                <li><a href="<?= base_url('about#boardmember') ?>">School Committee</a></li>
                <li><a href="https://themadrassevasadan.org/Be_A_Part">Be a Part</a></li>
            </ul>
        </div>
        <div class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
       
    </section>
    <!-- Section Menus -->
   

    

    <!-- Application Process -->
    <section class="container-space bgImg-with-center-content application-process-img ptb-80">
        <!-- <div class="sectionTitle-white">
          
        </div> -->
        <div class="col-lg-9 m-auto">
            <div class="center-card">
                <div class="sectionTitle-blue detailpagecontent">
                    <h3>About MSS</h3>
                    <p>The Madras Seva Sadan was founded in 1928 by Sir & Lady M. Venkatasubba Rao. It was founded as a Home for grown-up girls and young women "who were poor and destitute", such as deserted wives, helpless widows, and orphans. With a view to impart to them such education and training as would make them fit, in course of time, to look after themselves, and be thoroughly self-supporting and self-reliant.</p>
                    <p>At The Madras Seva Sadan, women who thought they had nothing to live for found new purpose and meaning in life. They were fed and clothed, given work and taught skills. Here they learnt to be happy and independent members of society. As the organization grew, the numbers also grew from 8 to 3,000 in just 30 years.</p>
                    <p>Though it continues to provide for the disadvantaged section of the society, it now encompasses some of the most prominent educational institutions that have produced some very noteworthy personalities. 
        </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Application Process-->



    