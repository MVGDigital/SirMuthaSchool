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
            <ul class="lessMenus">
                <li><a href="contact#contactSec" class="active">Contact Us</a></li>
            </ul>
        </div>
        <div id="contactSec" class="pageTitleLine col-lg-8 m-auto">
            <hr>
            <img src="<?= base_url('images/title-logo.svg') ?>" alt="Sir Mutha Logo">
            <hr>
        </div>
        <div class="sectionTitle-white col-lg-10 m-auto">
            <h3>Stay <span> Connected</span></h3>
            <h6>Stay connected with Sir Mutha School to receive the latest updates, news, and announcements. Engage with us through our website and social media channels to stay informed about events, achievements, and important information. Together, let’s build a stronger school community and support your child’s educational journey.</h6>
        </div>
    </section>
    <!-- Section Menus -->

    <!-- Contact Form -->
    <section class="container-space blueBg-Sec contactBg ptb-80">
        <div class="contact-container">
            <div class="col-12 col-md-12 col-lg-7 col-xl-6 contact-details-container">
                <div class="regForm">
                    <div class="sectionTitle-white">
                        <h3>Drop Us a line</h3>
                        <p>We aim to create a holistic individual by providing a happy atmosphere for the child.</p>
                    </div>
                    <form id="contact-form">
                    <div id="responseMessage"></div>
                        <div class="formFields row w100 m-0">
                            <div class="col-12 col-md-6 col-lg-6 fields m-0">
                                <label for="first-name">First Name</label>
                                <input type="text" name="first-name" id="first-name">
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 fields m-0">
                                <label for="last-name">Last Name</label>
                                <input type="text" name="last-name" id="last-name">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 fields">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 fields">
                            <label for="mobile-number">Phone Number</label>
                            <input type="tel" name="mobile-number" id="mobile-number">
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 fields">
                            <label for="msg">Message</label>
                            <textarea name="msg" id="msg"></textarea>
                        </div>
                        <div class="formBtn-fullWidth">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 col-xl-5 contact-details-container addressContainer">
                <div class="contactForm">
                    <div class="contactInfo">
                        <h6>Address</h6>
                        <p>Shenstone Park, No.7,Harrington Road, Chennai-600 031.</p>
                    </div>
                    <div class="contactInfo-line">
                        <hr>
                    </div>
                    <div class="contactInfo">
                        <h6>Email</h6>
                        <p><a href="mailto:admin@sirmuthaschool.edu.in">admin@sirmuthaschool.edu.in</a></p>
                    </div>
                    <div class="contactInfo-line">
                        <hr>
                    </div>
                    <div class="contactInfo">
                        <h6>Phone Number</h6>
                        <p><a href="tel:+917358103843">+91 73581 03843</a></p>
                    </div>
                    <div class="contactInfo-line">
                        <hr>
                    </div>
                    <div class="contactInfo">
                        <h6>Social</h6>
                        <div class="contact-socialIcons">
                            <a href="https://www.instagram.com/sir_mutha_school?igsh=MXZzMHVjajRqd3V2bw==">
                                <img src="<?= base_url('images/contact/instagram-Icon.svg') ?>" alt="Instagram icon">
                                </a>
                            <a href="https://www.facebook.com/Sirmuthaschool/">
                                <img src="<?= base_url('images/contact/facebook-Icon.svg') ?>" alt="facebook icon">
                            </a>
                            <a href="#">
                                <img src="<?= base_url('images/contact/x-icon.svg') ?>" alt="x icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form -->

    <!-- Map Section -->
    <section class="map-view">
        <div style="width: 100%">
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=sir%20mutha%20school+(My%20Business%20Name)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps vehicle tracker</a>
            </iframe>
        </div>
    </section>
    <!-- Map Section -->