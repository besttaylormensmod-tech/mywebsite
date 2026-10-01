<?php
$page_slug        = 'Contact';
$page_title       = "Best Men's Mod | Men's Tailor in Vazirabad, Nanded";
$page_description = '';
include __DIR__ . '/includes/header.php';
?>
<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider position-relative hero-overly slider-height2  d-flex align-items-center" data-background="assets/img/hero/h1_hero.png">
                <div class="container">
                 <div class="row">
                     <div class="col-xl-6 col-lg-6">
                        <div class="hero-caption hero-caption2">
                            <img src="assets/img/hero/hero-icon.png" alt="" data-animation="zoomIn" data-delay="1s">
                            <h2 data-animation="fadeInLeft" data-delay=".4s">contact</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left img -->
            <div class="hero-img hero-img2">
                <img src="assets/img/hero/h2_hero2.png" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!--?  Contact Area start  -->
<section class="contact-section">
    <div class="container">

  <div class="d-none d-sm-block mb-5 pb-4">
            <div id="map" style="height: 480px; position: relative; overflow: hidden;">
                <iframe
                    title="New Best Men's Mod Tailors, Nanded on Google Maps"
                    src="https://maps.google.com/maps?q=New+Best+Men%27s+Mod+Tailors,+Nanded&amp;ll=19.1522848,77.3118092&amp;z=17&amp;output=embed"
                    width="100%" height="480" style="border:0;" allowfullscreen loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
       

        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">Get in Touch</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3><?= e($site['name']) ?></h3>
                        <p><?= e($site['address']) ?></p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3><a href="tel:<?= e($site['phone']) ?>"><?= e($site['phone']) ?></a></h3>
                        <p>Mon to Sat 9 am to 8 pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><?= e($site['address']) ?></h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End -->
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>