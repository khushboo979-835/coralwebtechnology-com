<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 800
    });
</script>
<!-- Bootstrap 5.3.3 JS Bundle (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<!-- JS Scripts -->

<!-- ============================================================================================ -->
<?php if (isset($service_key) && function_exists('renderServiceLocationsSection')): ?>
    <?php renderServiceLocationsSection($service_key, $base_url); ?>
<?php endif; ?>
<style>
    .footer-social a {
        font-size: 18px;
        transition: all 0.3s ease-in-out;
        color: var(--primary-color);
    }

    .footer-main a {
        color: var(--tertiary-color);
        text-decoration: none;
        font-weight: 500;
    }

    .footer-main h5 {
        font-weight: 600;
        margin-bottom: 15px;
    }

    .footer-main ul li {
        margin-bottom: 8px;
    }

    .footer-main ul li a {
        text-decoration: none;
    }

    .footer-main ul li a:hover {
        color: var(--tertiary-color);
    }


    .footer-main {
        background-color: var(--primary-color);
        color: var(--tertiary-color);
    }

    .footer-bottom {
        background-color: var(--primary-color);
        color: var(--tertiary-color);
    }

    .social-icon-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.25s ease, filter 0.25s ease;
        border-radius: 50%;
        text-decoration: none;
    }

    .social-icon-btn:hover {
        transform: translateY(-3px) scale(1.1);
        filter: drop-shadow(0 4px 10px rgba(0,0,0,0.35));
    }
</style>
<footer class="footer-section">
    <div class="footer-main py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="<?= $base_url ?>assets/images/logo/coral-logo-square.jpg" alt="Coral Web Technology Logo" class="rounded-3 shadow-sm" width="55" height="55" style="object-fit: cover;">
                        <h5 class="m-0 text-white fw-bold">About Coral Web</h5>
                    </div>
                    <p class="text-justify">
                        At Coral Web Technology, we are passionate about building digital solutions that help businesses
                        grow, scale, and succeed in the modern world. Founded with the mission to deliver high-quality
                        IT services, we specialize in web development, digital marketing, SEO, and graphic design — all
                        tailored to meet our clients’ unique goals.
                    </p>
                    <div class="footer-social d-flex flex-wrap gap-2 align-items-center mt-3">
                        <a href="https://www.facebook.com/share/14uPicDDaFo/" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Facebook Page" title="Facebook">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="16" fill="#1877F2"/>
                                <path d="M21.5 16.03h-3.66v11.97h-4.95V16.03h-2.35v-4.21h2.35V9.06c0-2.34 1.4-3.62 3.51-3.62 1.01 0 2.07.18 2.07.18v2.28h-1.17c-1.16 0-1.52.72-1.52 1.46v2.46h2.57l-.41 4.21z" fill="#ffffff"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/coralwebtechnology" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Instagram Page" title="Instagram">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <radialGradient id="ig-grad" cx="20%" cy="110%" r="130%">
                                        <stop offset="0%" stop-color="#FFDD55"/>
                                        <stop offset="15%" stop-color="#FF5D3B"/>
                                        <stop offset="50%" stop-color="#FF0069"/>
                                        <stop offset="70%" stop-color="#D300C5"/>
                                        <stop offset="100%" stop-color="#7638FA"/>
                                    </radialGradient>
                                </defs>
                                <rect width="32" height="32" rx="8" fill="url(#ig-grad)"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 10.5c-3 0-3.37.01-4.55.07-1.18.05-1.99.24-2.69.51-.73.28-1.34.66-1.95 1.28-.62.61-1 1.22-1.28 1.95-.27.7-.46 1.51-.51 2.69-.06 1.18-.07 1.55-.07 4.55s.01 3.37.07 4.55c.05 1.18.24 1.99.51 2.69.28.73.66 1.34 1.28 1.95.61.62 1.22 1 1.95 1.28.7.27 1.51.46 2.69.51 1.18.06 1.55.07 4.55.07s3.37-.01 4.55-.07c1.18-.05 1.99-.24 2.69-.51.73-.28 1.34-.66 1.95-1.28.62-.61 1-1.22 1.28-1.95.27-.7.46-1.51.51-2.69.06-1.18.07-1.55.07-4.55s-.01-3.37-.07-4.55c-.05-1.18-.24-1.99-.51-2.69-.28-.73-.66-1.34-1.28-1.95-.61-.62-1.22-1-1.95-1.28-.7-.27-1.51-.46-2.69-.51-1.18-.06-1.55-.07-4.55-.07zm0 2.25c2.95 0 3.3.01 4.46.06 1.08.05 1.66.23 2.05.38.52.2.89.44 1.28.83.39.39.63.76.83 1.28.15.39.33.97.38 2.05.05 1.16.06 1.51.06 4.46s-.01 3.3-.06 4.46c-.05 1.08-.23 1.66-.38 2.05-.2.52-.44.89-.83 1.28-.39.39-.76.63-1.28.83-.39.15-.97.33-2.05.38-1.16.05-1.51.06-4.46.06s-3.3-.01-4.46-.06c-1.08-.05-1.66-.23-2.05-.38-.52-.2-.89-.44-1.28-.83-.39-.39-.63-.76-.83-1.28-.15-.39-.33-.97-.38-2.05-.05-1.16-.06-1.51-.06-4.46s.01-3.3.06-4.46c.05-1.08.23-1.66.38-2.05.2-.52.44-.89.83-1.28.39-.39.76-.63 1.28-.83.39-.15.97-.33 2.05-.38 1.16-.05 1.51-.06 4.46-.06zm0 3.41a5.65 5.65 0 100 11.3 5.65 5.65 0 000-11.3zm0 9.31a3.66 3.66 0 110-7.32 3.66 3.66 0 010 7.32zm7.2-9.53a1.32 1.32 0 11-2.64 0 1.32 1.32 0 012.64 0z" fill="#ffffff"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/coral-web-technology/" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="LinkedIn Page" title="LinkedIn">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="6" fill="#0A66C2"/>
                                <path d="M9.66 12.33h3.5v11.34h-3.5V12.33zM11.41 6.8a2.03 2.03 0 110 4.06 2.03 2.03 0 010-4.06zM15.42 12.33h3.35v1.55h.05c.47-.88 1.61-1.81 3.32-1.81 3.55 0 4.2 2.34 4.2 5.38v6.22h-3.5v-5.51c0-1.31-.03-3-1.83-3-1.83 0-2.11 1.43-2.11 2.9v5.61h-3.48V12.33z" fill="#ffffff"/>
                            </svg>
                        </a>
                        <a href="https://youtube.com/@coralwebtechnology?si=gCkR5n1dJ4sEWZ8L" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="YouTube Channel" title="YouTube">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="32" height="32" rx="8" fill="#FF0000"/>
                                <path d="M24.8 11.2c-.22-.84-.88-1.5-1.72-1.73C21.57 9 16 9 16 9s-5.57 0-7.08.47c-.84.23-1.5.89-1.72 1.73C6.73 12.72 6.73 16 6.73 16s0 3.28.47 4.8c.22.84.88 1.5 1.72 1.73 1.51.47 7.08.47 7.08.47s5.57 0 7.08-.47c.84-.23 1.5-.89 1.72-1.73.47-1.52.47-4.8.47-4.8s0-3.28-.47-4.8zM14.09 19.36v-6.72L19.91 16l-5.82 3.36z" fill="#ffffff"/>
                            </svg>
                        </a>
                        <a href="https://pin.it/LNuLPSwjg" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Pinterest Page" title="Pinterest">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="16" fill="#E60023"/>
                                <path d="M16 6.5C10.75 6.5 6.5 10.75 6.5 16c0 4.02 2.5 7.46 6.04 8.8-.08-.75-.16-1.9.03-2.72.18-.74 1.15-4.88 1.15-4.88s-.29-.59-.29-1.46c0-1.37.79-2.39 1.78-2.39.84 0 1.25.63 1.25 1.39 0 .85-.54 2.11-.82 3.29-.23 1 .5 1.81 1.48 1.81 1.78 0 3.15-1.88 3.15-4.59 0-2.4-1.72-4.08-4.19-4.08-2.85 0-4.53 2.14-4.53 4.35 0 .86.33 1.79.75 2.29.08.1.09.19.07.29-.08.32-.25 1.02-.28 1.16-.05.18-.15.22-.35.13-1.31-.61-2.13-2.52-2.13-4.06 0-3.3 2.4-6.34 6.92-6.34 3.63 0 6.46 2.59 6.46 6.05 0 3.61-2.28 6.52-5.44 6.52-1.06 0-2.06-.55-2.4-1.2l-.65 2.49c-.24.91-.88 2.05-1.31 2.75 1 .31 2.06.48 3.16.48 5.25 0 9.5-4.25 9.5-9.5S21.25 6.5 16 6.5z" fill="#ffffff"/>
                            </svg>
                        </a>
                        <a href="https://www.quora.com/profile/Coral-Web-Technology" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Quora Profile" title="Quora">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="16" fill="#B92B27"/>
                                <path d="M19.9 20.3c.7-.8 1.2-1.9 1.4-3.1.2-1.1.2-2.4-.2-3.5-.4-1.1-1.1-2.1-2.1-2.7-1-.6-2.2-.9-3.4-.9-1.2 0-2.4.3-3.4.9-1 .6-1.7 1.6-2.1 2.7-.4 1.1-.4 2.4-.2 3.5.2 1.2.7 2.3 1.4 3.1.8.8 1.8 1.4 2.9 1.7.4.1.8.2 1.3.2.7 0 1.4-.2 2.1-.5l1.6 1.6c.3.3.7.1.7-.3v-1.8c.4-.3.7-.6 1-.9zm-5.1-.4c-1.1 0-2.1-.5-2.8-1.3-.7-.9-1-2.1-1-3.4 0-1.3.3-2.5 1-3.4.7-.8 1.7-1.3 2.8-1.3s2.1.5 2.8 1.3c.7.9 1 2.1 1 3.4 0 1.3-.3 2.5-1 3.4-.7.8-1.7 1.3-2.8 1.3z" fill="#ffffff"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-md-4  mt-4 mt-lg-0 footer-links">
                    <div class="row">
                        <div class="col-5">
                            <h5>Quick Links</h5>
                            <ul class="list-unstyled">
                                <li><a href="<?= $base_url ?>" class=""><i class="bi bi-arrow-right me-2"></i>Home</a>
                                </li>
                                <li><a href="<?= $base_url ?>about-us.php" class=""><i class="bi bi-arrow-right me-2"></i>About Us</a>
                                </li>
                                <li><a href="<?= $base_url ?>client-reviews.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Testimonials</a></li>
                                <li><a href="<?= $base_url ?>blogs/" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Blogs</a></li>
                                <li><a href="<?= $base_url ?>gallery.php" class=""><i class="bi bi-arrow-right me-2"></i>Gallery</a>
                                </li>
                                <li><a href="<?= $base_url ?>contact-us.php" class=""><i class="bi bi-arrow-right me-2"></i>Contact
                                        Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-7">
                            <h5>Services</h5>
                            <ul class="list-unstyled">
                                <li><a href="<?= $base_url ?>services/software-development.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Software Development</a></li>
                                <li><a href="<?= $base_url ?>services/mobile-app-development.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Mobile App Development</a></li>
                                <li><a href="<?= $base_url ?>services/website-development.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Website Development</a></li>
                                <li><a href="<?= $base_url ?>services/graphic-&-branding.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Graphic & Branding</a></li>
                                <li><a href="<?= $base_url ?>services/e-commerce-services.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>E Commerce Services</a></li>
                                <li><a href="<?= $base_url ?>services/mobile-ecommerce-app.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>Mobile Eccomerce Apps</a></li>
                                <li><a href="<?= $base_url ?>services/ecommerce-marketing.php" class=""><i
                                            class="bi bi-arrow-right me-2"></i>E-commerce Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" itemscope itemtype="https://schema.org/LocalBusiness">
                    <meta itemprop="name" content="Coral Web Technology" />
                    <meta itemprop="image" content="<?= $base_url ?>assets/images/logo/coral-logo-square.jpg" />
                    <h5 class="text-white fw-bold">Contact Us</h5>
                    <div class="py-1" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                        <p class=""><i class="bi bi-geo-alt me-2 text-warning"></i> <strong>Corporate Office: </strong> 
                            <span itemprop="streetAddress">Chandrakanta Appartment, Room No:- 201, Opposite Harihar Chamber, Boring Road Chauraha, Pandooi Kothi</span>, 
                            <span itemprop="addressLocality">Patna</span>, 
                            <span itemprop="addressRegion">Bihar</span> - 
                            <span itemprop="postalCode">800001</span>
                            <meta itemprop="addressCountry" content="IN" />
                        </p>
                        <p class=""><i class="bi bi-geo-alt me-2"></i><strong>1<sup>st</sup> Branch: </strong> Pusp ratan row house, Near Vishwakarma chauk Shramik nagar, carbon naka, MIDC Satpur, Nashik, Maharashtra, 422007</p>
                        <p class=""><i class="bi bi-geo-alt me-2"></i><strong>2<sup>nd</sup> Branch: </strong> 7F/7A, DDA Building, District centre Janakpuri, New Delhi, Delhi, 110058</p>
                        <p class=""><i class="bi bi-geo-alt me-2"></i><strong>3<sup>rd</sup> Branch: </strong> Above Monginis Cake Shop, Aundh-Wakad Rd, opposite Copa Cobana Restaurant, Vishal Nagar, Pune, Maharashtra, 411027</p>
                    </div>
                    <div class="py-1">
                        <p class=""><i class="bi bi-envelope me-2 text-warning"></i>Email: <a href="mailto:&#99;&#111;&#114;&#97;&#108;&#119;&#101;&#98;&#116;&#101;&#99;&#104;&#110;&#111;&#108;&#111;&#103;&#121;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;" class="text-white text-decoration-none" itemprop="email">&#99;&#111;&#114;&#97;&#108;&#119;&#101;&#98;&#116;&#101;&#99;&#104;&#110;&#111;&#108;&#111;&#103;&#121;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a></p>
                    </div>
                    <div class="py-1">
                        <p class=""><i class="bi bi-telephone me-2 text-warning"></i> 
                            <a href="tel:+919142569346" class="text-white text-decoration-none" itemprop="telephone">+91 9142569346</a>
                            <span class="d-block mt-1 small text-white-50">Support: <a href="tel:+918409501846" class="text-white text-decoration-none">+91-84095 01846</a></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom py-2 border-top  text-center ">
        <p class="mb-0 text-white">
            <script>
                document.write(new Date().getFullYear());
            </script>
            &copy; Coral Web technology. All rights reserved.
        </p>
        <div class="py-2">
            <div class="mb-0 text-white">
                <a href="<?= $base_url ?>privacy-policy.php" class="text-white text-decoration-none">Privacy Policy</a>
                |
                <a href="<?= $base_url ?>terms-conditions.php" class="text-white text-decoration-none">Terms &
                    Conditions</a>
            </div>
        </div>
   </footer>

