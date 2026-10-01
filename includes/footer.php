<?php require_once __DIR__ . '/config.php'; ?>
<footer class="site-footer">
    <div class="footer-wrapper section-bg2" data-background="assets/img/gallery/footer-bg.png">
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="footer-grid">
                    <div class="footer-col footer-col--about">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo mb-35">
                                <a href="index.php"><img src="assets/img/logo/logo2.png" width="136PX" alt="<?= e($site['name']) ?>"></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <h2 style="color: #ffffff;">Address</h2>
                                    <p><?= e($site['address']) ?></p>
                                </div>
                                <ul class="mb-40">
                                    <h2 style="color: #ffffff;">Contact us</h2>
                                    <li class="number"><a href="tel:<?= e($site['phone']) ?>"><?= e($site['phone']) ?></a></li>
                                </ul>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <h2 style="color: #ffffff;">Follow Us</h2>
                                <?php foreach ($site['social'] as $s): ?>
                                    <a href="<?= e($s['url']) ?>" target="_blank"><i class="<?= e($s['icon']) ?>"></i></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="footer-col footer-col--links">
                        <div class="footer-tittle">
                            <h4>Our solutions</h4>
                            <ul>
                                <?php foreach ($menu as $item): ?>
                                    <li><a href="<?= e($item['url']) ?>"><?= e($item['label']) ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- Map -->
                    <div class="footer-col footer-col--map">
                        <div class="footer-tittle">
                            <h4>Find Us</h4>
                            <div class="map-area">
                                <iframe
                                    title="<?= e($site['name']) ?> location on Google Maps"
                                    src="https://maps.google.com/maps?q=New+Best+Men%27s+Mod+Tailors,+Nanded&amp;ll=19.1522848,77.3118092&amp;z=17&amp;output=embed"
                                    allowfullscreen loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="footer-copy-right">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<?= date('Y') ?> All rights reserved | <?= e($site['name']) ?>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </div>
</footer>
<style>
    /* ---- Self-contained responsive footer layout ---- */
    /* Neutralise any legacy absolute/float positioning the theme's own
       CSS may put on these classes, so our layout always wins. */
    .site-footer .footer-wrapper { position: relative; padding-left: 0 !important; overflow: hidden; }
    .site-footer .map-area,
    .site-footer .footer-grid,
    .site-footer .footer-col { position: static !important; float: none !important; width: auto; height: auto !important; }

    .site-footer .footer-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 2.5rem 3rem;
        margin-bottom: 2.5rem;
    }
    .site-footer .footer-col--about { flex: 2 1 320px; }
    .site-footer .footer-col--links { flex: 1 1 180px; }
    .site-footer .footer-col--map   { flex: 2 1 320px; }

    /* Map: same 877x490 aspect ratio, but sized to fit inside its column */
    .site-footer .map-area {
        width: 100%;
        max-width: 420px;
        aspect-ratio: 540 / 490;
        border-radius: 6px;
        overflow: hidden;
    }
    .site-footer .map-area iframe {
        width: 100%;
        height: 100%;
        border: 0;
        display: block;
    }
    @supports not (aspect-ratio: 1 / 1) {
        .site-footer .map-area {
            position: relative !important;
            padding-bottom: 55.87%; /* 490 / 877 */
            height: 0 !important;
        }
        .site-footer .map-area iframe {
            position: absolute;
            top: 0;
            left: 0;
        }
    }

    /* Footer bottom bar */
    .site-footer .footer-copy-right { text-align: center; }

    /* Tablets and phones: stack columns, map fills the width */
    @media (max-width: 767.98px) {
        .site-footer .footer-grid { flex-direction: column; gap: 1.75rem; }
        .site-footer .footer-col--about,
        .site-footer .footer-col--links,
        .site-footer .footer-col--map { flex-basis: auto; }
        .site-footer .map-area { max-width: 100%; }
    }
</style>
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="./assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./assets/js/jquery.counterup.min.js"></script>
<script src="./assets/js/waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

<?php if (!empty($extra_scripts)) echo $extra_scripts; ?>
</body>
</html>
