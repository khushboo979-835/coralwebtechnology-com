<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
    <link rel="preload" as="image" href="<?= $base_url ?>assets/images/banner/banner.jpg">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<meta name="google-site-verification" content="IIOU8rPCF02uyHIWxr4lMdeULGDEvB_xIxEZbJWyVnw" />
    
    
</head>

<body>
    <main>
        <h1 class="visually-hidden">Best Web Development & SEO Services - Coral Web Technology</h1>
        <?php include 'common/header.php'; ?>
        <!-- ========================================= -->
       <section class="hero py-0">
    <div class="container-fluid px-0">
        <img src="<?= $base_url ?>assets/images/banner/banner.jpg" class="hero-img" alt="Hero Banner" width="1280" height="853" fetchpriority="high" loading="eager">
    </div>
</section>



        <!-- ========================================================================================= -->
        
        <section class="py-5 projects bg-light overflow-hidden">
    <div class="container-fluid px-0">
        <div class="head-title mb-5 text-center">
            <h2>Meet the <span>Client</span> Who Love Our Work</h2>
            <p>We are a team of passionate professionals dedicated to delivering exceptional results.</p>
        </div>
        
        <?php
        $client_logos = [
            ['url' => 'https://gensafe.in/', 'img' => 'gensafe.avif'],
            ['url' => 'https://theskincentre.in/', 'img' => 'skincentre.avif'],
            ['url' => '', 'img' => '2.avif'],
            ['url' => 'https://bsleyecare.com', 'img' => '3.avif'],
            ['url' => '', 'img' => '4.avif'],
            ['url' => 'https://jansamajsevasansthan.in/', 'img' => '5.avif'],
            ['url' => '', 'img' => '6.avif'],
            ['url' => 'https://hansrajenterprises.com/', 'img' => '7.avif'],
            ['url' => 'https://samajkalyanfoundation.life/', 'img' => '8.avif'],
            ['url' => 'https://patnanashamuktikendra.co.in/', 'img' => '9.avif'],
            ['url' => '', 'img' => '10.avif'],
            ['url' => '', 'img' => '11.avif'],
            ['url' => 'https://muskannashamuktikendra.life/', 'img' => '12.avif'],
            ['url' => 'https://patliputranashamuktikendra.com/', 'img' => '13.avif'],
            ['url' => 'https://netravedam.com/', 'img' => '14.avif'],
            ['url' => 'http://ehsaasnashamuktikendra.com/', 'img' => '15.avif'],
            ['url' => 'https://bhagyatech.com/', 'img' => '16.avif'],
            ['url' => 'https://rarefrigeration.in/', 'img' => '17.avif'],
            ['url' => 'https://www.annapurnahometuition.in/', 'img' => '18.avif'],
            ['url' => 'http://digitalwebseoadsagency.online/', 'img' => '19.avif'],
            ['url' => 'https://sudhaarnashamuktikendra.in/', 'img' => '20.avif'],
            ['url' => 'https://www.shreejigemsvastuvigyan.in/', 'img' => '21.png'],
            ['url' => 'https://ioclks.com/', 'img' => '22.jpg'],
            ['url' => 'https://mysterymassage.in/', 'img' => '23.png'],
            ['url' => 'https://laserhairremoval.skinhealer.in/', 'img' => '24.png'],
            ['url' => 'https://swetanknashamuktikendrafoundation.in/', 'img' => '25.jpg'],
            ['url' => 'https://deepnashamuktikendra.in/', 'img' => '26.jpg'],
            ['url' => 'http://zfdreams.in/', 'img' => '27.jpg'],
            ['url' => 'https://interiordesignerhansraj.info/', 'img' => '28.png'],
            ['url' => 'https://washmartkankarbagh.in/', 'img' => 'logo.jpg']
            
        ];
        
        $row1 = array_slice($client_logos, 0, 15);
        $row2 = array_slice($client_logos, 15);
        ?>
        
        <div class="marquee-wrapper">
            <div class="marquee-track marquee-left">
                <?php for($i=0; $i<2; $i++): ?>
                    <?php foreach($row1 as $client): ?>
                        <div class="client-logo-item">
                            <a href="<?= !empty($client['url']) ? $client['url'] : 'javascript:void(0)' ?>" target="<?= !empty($client['url']) ? '_blank' : '_self' ?>">
                                <div class="client-logo-box">
                                    <img src="<?= $base_url ?>assets/images/client/<?= $client['img'] ?>" alt="Client Logo" class="img-fluid" width="160" height="80" loading="lazy" decoding="async">
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endfor; ?>
            </div>
        </div>
        
        <div class="marquee-wrapper mt-4">
            <div class="marquee-track marquee-right">
                <?php for($i=0; $i<2; $i++): ?>
                    <?php foreach($row2 as $client): ?>
                        <div class="client-logo-item">
                            <a href="<?= !empty($client['url']) ? $client['url'] : 'javascript:void(0)' ?>" target="<?= !empty($client['url']) ? '_blank' : '_self' ?>">
                                <div class="client-logo-box">
                                    <img src="<?= $base_url ?>assets/images/client/<?= $client['img'] ?>" alt="Client Logo" class="img-fluid" width="160" height="80" loading="lazy" decoding="async">
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
<style>
.marquee-wrapper {
    width: 100%;
    overflow: hidden;
    position: relative;
    display: flex;
}
.marquee-wrapper::before,
.marquee-wrapper::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    width: 100px;
    z-index: 2;
    pointer-events: none;
}
.marquee-wrapper::before {
    left: 0;
    background: linear-gradient(to right, #f8f9fa, transparent);
}
.marquee-wrapper::after {
    right: 0;
    background: linear-gradient(to left, #f8f9fa, transparent);
}
.marquee-track {
    display: flex;
    gap: 30px;
    padding: 10px 0;
    width: max-content;
}
.marquee-left {
    animation: scrollLeft 40s linear infinite;
}
.marquee-right {
    animation: scrollRight 35s linear infinite;
}
.marquee-wrapper:hover .marquee-track {
    animation-play-state: paused;
}
.client-logo-item {
    flex-shrink: 0;
}
.client-logo-box {
    width: 200px;
    height: 110px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    transition: all 0.3s ease;
    border: 1px solid #eee;
}
.client-logo-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    border-color: #ddd;
}
.client-logo-box img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    transition: 0.3s ease;
}
@keyframes scrollLeft {
    from { transform: translateX(0); }
    to { transform: translateX(-50%); }
}
@keyframes scrollRight {
    from { transform: translateX(-50%); }
    to { transform: translateX(0); }
}
@media (max-width: 768px) {
    .client-logo-box {
        width: 150px;
        height: 90px;
    }
    .marquee-wrapper::before,
    .marquee-wrapper::after {
        width: 50px;
    }
    .marquee-track {
        gap: 15px;
    }
}
</style>
<!--==============================================================================================-->

        <?php include 'common/portfolio_showcase.php'; ?>

    <div class="mobile-call-box">
        <a href="tel:+919142569346" style="text-decoration: none; color: inherit;">
            <div class="call-content">
                <div class="call-text"><i class="bi bi-telephone-fill me-1"></i> Speak with Our Expert</div>
                <h2><span id="animatedNumber"></span></h2>
            </div>
        </a>
    </div>

<!--==============================================================================================-->
        <section class="py-5 bg-light overflow-hidden">
    <div class="container-fluid px-0">
        <div class="py-3 head-title text-center">
            <h2>Client <span>Feedback</span></h2>
            <p>See what our happy clients have to say about our services.</p>
        </div>
        <div class="marquee-wrapper mt-4">
            <div class="marquee-track marquee-left" style="animation-duration: 25s;">
                <?php 
                $feedback_imgs = ['img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg'];
                for($i=0; $i<4; $i++): 
                    foreach($feedback_imgs as $index => $img): 
                ?>
                    <div class="feedback-item">
                        <a href="assets/img/<?= $img ?>" data-fancybox="feedback" data-caption="Client Feedback <?= $index+1 ?>">
                            <img src="assets/img/<?= $img ?>" alt="Client Feedback" class="img-fluid feedback-img" width="250" height="558" loading="lazy" decoding="async">
                        </a>
                    </div>
                <?php 
                    endforeach;
                endfor; 
                ?>
            </div>
        </div>
    </div>
</section>
<style>
.feedback-item {
    flex-shrink: 0;
    width: 250px;
}
.feedback-img {
    cursor: zoom-in;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    border: 4px solid #fff;
    border-radius: 16px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
    width: 100%;
    height: auto;
    display: block;
}
.feedback-img:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}
.performance-scroll {
    overflow-x: auto;
    overflow-y: hidden;
    margin: 0 -0.75rem;
    padding: 1rem 0;
    scroll-snap-type: x proximity;
    -webkit-overflow-scrolling: touch;
}
.performance-scroll::-webkit-scrollbar {
    height: 8px;
}
.performance-scroll::-webkit-scrollbar-thumb {
    background: rgba(0, 0, 0, 0.18);
    border-radius: 999px;
}
.performance-track {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
}
.performance-item {
    scroll-snap-align: start;
    flex: 0 0 auto;
    width: min(520px, 90vw);
    max-width: 580px;
}
.performance-item a {
    display: block;
}
.performance-img {
    border-radius: 20px;
    box-shadow: 0 12px 24px rgba(0,0,0,0.08);
    border: 1px solid rgba(0,0,0,0.05);
    width: 100%;
    height: auto;
    display: block;
}
@media (max-width: 991px) {
    .performance-item {
        width: min(80vw, 520px);
    }
}
@media (max-width: 576px) {
    .performance-item {
        width: 100%;
    }
}
@media (max-width: 768px) {
    .feedback-item {
        width: 180px;
    }
}
</style>
<!--==============================================================================================-->

<section class="py-5 bg-white">
            <div class="container">
                <div class="row">
                    <div class="py-3 head-title text-center">
                        <h2>Our <span>Google Ads</span> Performance and Growth</h2>
                    </div>
                </div>
                <div class="performance-scroll marquee-wrapper">
                    <div class="performance-track marquee-track">
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/google-ads.png" data-fancybox="performance"
                                data-caption="Google Ads performance - Campaign overview">
                                <img src="assets/images/performance/google-ads.png" alt="Google Ads performance"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/google-ads-2.png" data-fancybox="performance"
                                data-caption="Google Ads performance - Leads and conversions">
                                <img src="assets/images/performance/google-ads-2.png" alt="Google Ads performance"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================================================================-->
            <section class="py-5 bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="py-3 head-title text-center">
                        <h2>Our <span>Meta Ads</span> Performance and Growth</h2>
                    </div>
                </div>
                <div class="performance-scroll marquee-wrapper">
                    <div class="performance-track marquee-track">
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/meta-ads-performance-1.jfif" data-fancybox="performance"
                                data-caption="Meta Ads performance ">
                                <img src="assets/images/performance/meta-ads-performance-1.jfif" alt="Meta Ads performance"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/meta-ads-performance-2.jfif" data-fancybox="performance"
                                data-caption="Meta Ads performance">
                                <img src="assets/images/performance/meta-ads-performance-2.jfif" alt="Meta Ads performance"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/meta-ads-performance-3.jfif" data-fancybox="performance"
                                data-caption="Meta Ads performance">
                                <img src="assets/images/performance/meta-ads-performance-3.jfif" alt="Meta Ads performance"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/meta-ads-performance-4.jfif" data-fancybox="performance"
                                data-caption="Meta Ads performance">
                                <img src="assets/images/performance/meta-ads-performance-4.jfif" alt="Meta Ads performance"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/meta-ads-performance-5.jfif" data-fancybox="performance"
                                data-caption="Meta Ads performance">
                                <img src="assets/images/performance/meta-ads-performance-5.jfif" alt="Meta Ads performance"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/meta-ads-performance-6.jfif" data-fancybox="performance"
                                data-caption="Meta Ads performance">
                                <img src="assets/images/performance/meta-ads-performance-6.jfif" alt="Meta Ads performance"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/meta-ads-performance-7.jfif" data-fancybox="performance"
                                data-caption="Meta Ads performance">
                                <img src="assets/images/performance/meta-ads-performance-7.jfif" alt="Meta Ads performance"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================================================================ -->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="py-3 head-title text-center">
                        <h2>Our <span>Local Seo</span> Six Months Performance </h2>
                    </div>
                </div>
                <div class="performance-scroll marquee-wrapper">
                    <div class="performance-track marquee-track">
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/local-seo-1.png" data-fancybox="performance"
                                data-caption="Local SEO - 6 months performance (graph 1)">
                                <img src="assets/images/performance/local-seo-1.png" alt="Local SEO performance"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/local-seo-2.png" data-fancybox="performance"
                                data-caption="Local SEO - 6 months performance (graph 2)">
                                <img src="assets/images/performance/local-seo-2.png" alt="Local SEO performance"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/local-seo-3.png" data-fancybox="performance"
                                data-caption="Local SEO - 6 months performance (graph 3)">
                                <img src="assets/images/performance/local-seo-3.png" alt="Local SEO performance"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================================================================== -->
        <section class="py-5 bg-white">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="py-3 head-title text-center">
                        <h2>Our <span>Monthly Local Seo</span> Performance </h2>
                    </div>
                </div>
                <div class="performance-scroll marquee-wrapper">
                    <div class="performance-track marquee-track">
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/monthly-local-seo-1.png" data-fancybox="performance"
                                data-caption="Monthly Local SEO - Performance report 1">
                                <img src="assets/images/performance/monthly-local-seo-1.png" alt="Monthly Local SEO"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/monthly-local-seo-2.png" data-fancybox="performance"
                                data-caption="Monthly Local SEO - Performance report 2">
                                <img src="assets/images/performance/monthly-local-seo-2.png" alt="Monthly Local SEO"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/monthly-local-seo-3.png" data-fancybox="performance"
                                data-caption="Monthly Local SEO - Performance report 3">
                                <img src="assets/images/performance/monthly-local-seo-3.png" alt="Monthly Local SEO"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/monthly-local-seo-oct-1.png" data-fancybox="performance"
                                data-caption="Monthly Local SEO - October report 1">
                                <img src="assets/images/performance/monthly-local-seo-oct-1.png" alt="Monthly Local SEO"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/monthly-local-seo-oct-2.png" data-fancybox="performance"
                                data-caption="Monthly Local SEO - October report 2">
                                <img src="assets/images/performance/monthly-local-seo-oct-2.png" alt="Monthly Local SEO"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/monthly-local-seo-oct-3.png" data-fancybox="performance"
                                data-caption="Monthly Local SEO - October report 3">
                                <img src="assets/images/performance/monthly-local-seo-oct-3.png" alt="Monthly Local SEO"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================================================================-->
        <section class="py-5 bg-white">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="py-3 head-title text-center">
                        <h2>Our <span>Website Seo</span> Report </h2>
                    </div>
                </div>
                <div class="performance-scroll marquee-wrapper">
                    <div class="performance-track marquee-track">
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/website-seo-report-1.jpeg" data-fancybox="performance"
                                data-caption="Monthly Website Seo Report">
                                <img src="assets/images/performance/website-seo-report-1.jpeg" alt="Monthly Local SEO"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/website-seo-report-2.jpeg" data-fancybox="performance"
                                data-caption="Monthly Website Seo Report">
                                <img src="assets/images/performance/website-seo-report-2.jpeg" alt="Monthly Local SEO"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                        <div class="performance-item mb-3">
                            <a href="assets/images/performance/website-seo-report-3.jpeg" data-fancybox="performance"
                                data-caption="Monthly Website Seo Report">
                                <img src="assets/images/performance/website-seo-report-3.jpeg" alt="Monthly Local SEO"
                                    width="520" height="250" loading="lazy" decoding="async" class="img-fluid performance-img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--=============================================================================================-->
<?php
$pricing_plans = [
    [
        'img' => '1.jpg',
        'title' => 'GMB SEO (Local SEO)',
        'price' => '12000',
        'price_text' => '12,000 INR<span class="fs-6">/Month</span>',
        'link' => 'gmb-seo.php'
    ],
    [
        'img' => '2.jpg',
        'title' => 'Google Ads Management',
        'price' => '15000',
        'price_text' => '15,000 INR<span class="fs-6">/Month</span>',
        'link' => 'google-ads.php'
    ],
    [
        'img' => '6.jpg',
        'title' => 'Website SEO Services',
        'price' => '15000',
        'price_text' => '15,000 INR<span class="fs-6">/Month</span>',
        'link' => 'website-seo.php'
    ],
    [
        'img' => '4.jpg',
        'title' => 'Meta Ads (Facebook & Instagram Ads)',
        'price' => '10000',
        'price_text' => '10,000 INR<span class="fs-6">/Month</span>',
        'link' => 'facebook-instagram-ads.php'
    ],
    [
        'img' => '3.jpg',
        'title' => 'Social Media Marketing',
        'price' => '10000',
        'price_text' => '10,000 INR<span class="fs-6">/Month</span>',
        'link' => 'facebook-instagram.php'
    ],
    [
        'img' => '5.jpg',
        'title' => 'YouTube Video & Channel Optimization',
        'price' => '15000',
        'price_text' => '15,000 INR',
        'link' => 'youtube.php'
    ],
    [
        'img' => '7.jpg',
        'title' => 'Amazon / Flipkart / Meesho Management',
        'price' => '4999',
        'price_text' => '4,999 INR<span class="fs-6">/Month</span>',
        'link' => 'amazon-flipkart-meesho.php'
    ],
    [
        'img' => '8.jpg',
        'title' => 'Digital Marketing All Services',
        'price' => '9999',
        'price_text' => '9,999 INR<span class="fs-6">/Month</span>',
        'link' => 'digital-marketing.php'
    ],
    [
        'img' => '9.jpg',
        'title' => 'Website Design & Development',
        'price' => '10000',
        'price_text' => 'Starting 10,000 INR',
        'link' => 'website-design-development-wordpress.php'
    ],
    [
        'img' => '10.jpg',
        'title' => 'Mobile App Development (Android / iOS)',
        'price' => '50000',
        'price_text' => 'Starting 50,000 INR',
        'link' => 'mobile-app-development.php'
    ],
    [
        'img' => '11.jpg',
        'title' => 'Custom ERP & Software Development',
        'price' => '25000',
        'price_text' => 'Project-Based Quote',
        'link' => 'software-development.php'
    ],
    [
        'img' => '12.jpg',
        'title' => 'E-Commerce Website Development (PHP)',
        'price' => '30000',
        'price_text' => 'Starting 30,000 INR',
        'link' => 'e-commerce-website-development-in-php.php'
    ]
];
?>
<section class="pricing py-5 bg-white overflow-hidden">
    <div class="container-fluid px-0">
        <div class="row align-items-center mb-5 px-3">
            <div class="col-md-6">
                <div class="head-title">
                    <h2 class="fw-bold">Our Cost Effective <br> <span>Service Pricing</span></h2>
                </div>
            </div>
            <div class="col-md-6">
                <p>
                    At Coral Web Technology, we provide affordable and reliable solutions
                    for startups, SMBs, and enterprises to help them grow online.
                    With our transparent pricing, you know exactly what you're getting
                    without hidden charges.
                </p>
            </div>
        </div>
        <div class="marquee-wrapper">
            <div class="marquee-track marquee-left" style="animation-duration: 60s;">
                <?php for($i=0; $i<2; $i++): ?>
                    <?php foreach($pricing_plans as $plan): ?>
                        <div class="pricing-card-item">
                            <div class="card text-center p-3 h-100 shadow-sm border" style="border-color: #f1f5f9 !important; border-radius: 16px;">
                                <div class="mb-3 image">
                                    <img src="assets/images/pricing/<?= $plan['img'] ?>" alt="<?= htmlspecialchars($plan['title']) ?>" class="img-fluid w-100 rounded" width="350" height="150" loading="lazy" decoding="async" style="height:150px; object-fit:cover;">
                                </div>
                                <h5 class="fw-bold title" style="font-size: 1.05rem; min-height: 50px; margin-bottom: 10px;"><?= $plan['title'] ?></h5>
                                <p class="mb-1 text-muted small">Starting From</p>
                                <h4 class="fw-bold text-danger mb-3"><?= $plan['price_text'] ?></h4>
                                <a href="<?= $base_url ?><?= $plan['link'] ?>" class="btn btn-dark btn-sm w-100 my-2 rounded-pill">Explore Services</a>
                                
                                <div class="mb-2 text-start mt-2">
                                    <label class="small text-muted d-block mb-1" style="font-size:0.75rem; font-weight: 600;">Enter Custom Amount (Optional)</label>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text bg-light border-end-0 text-secondary">₹</span>
                                        <input type="number" class="form-control bg-light border-start-0 custom-amount-input" placeholder="Custom Amount" data-pa="9142569346@ybl" data-pn="Coral Web Technology" data-base-am="<?= $plan['price'] ?>" style="font-size: 0.85rem;">
                                    </div>
                                </div>
                                <div class="d-flex gap-2 mb-2 mt-2">
                                    <a href="upi://pay?pa=9142569346@ybl&pn=Coral%20Web%20Technology&am=<?= $plan['price'] ?>&cu=INR" class="btn btn-success btn-sm w-100 fw-bold py-2 shadow-sm pay-btn rounded-pill">
                                        <i class="bi bi-shield-check me-1"></i> Pay Now (₹<?= number_format($plan['price']) ?>)
                                    </a>
                                </div>
                                <a id="whatsapp-btn-pricing-plan-<?= strtolower(str_replace(' ', '-', $plan['title'])) ?>" href="https://wa.me/919117741984?text=Hi, I want to make a manual payment for <?= urlencode($plan['title']) ?>. Please guide me." class="btn btn-light btn-sm w-100 fw-bold py-1 border shadow-sm rounded-pill" style="font-size: 0.8rem;">
                                    <i class="bi bi-whatsapp text-success me-1"></i> WhatsApp Support
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>
<style>
.pricing-card-item {
    flex-shrink: 0;
    width: 320px;
    padding: 10px;
    white-space: normal;
}
.pricing-card-item .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #ffffff;
}
.pricing-card-item .card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
}
@media (max-width: 768px) {
    .pricing-card-item {
        width: 280px;
    }
}
</style>
        <!-- ========================================================================================= -->
        <section class="counter-section py-3 border-top">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center" id="counter-area">
                    <div class="col-md-3 ">
                        <span class="counter fw-bold display-5" data-target="150">0+</span>
                        <p>Projects Completed</p>
                    </div>
                    <div class="col-md-3 ">
                        <span class="counter fw-bold display-5" data-target="100">0+</span>
                        <p>Happy Clients</p>
                    </div>
                    <div class="col-md-3 ">
                        <span class="counter fw-bold display-5" data-target="50">0+</span>
                        <p>Brands Served</p>
                    </div>
                    <div class="col-md-3 ">
                        <span class="counter fw-bold display-5" data-target="10">0+</span>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- =============================================================================================== -->

        
        <!-- ====================================================================================== -->
        <section class="our-services py-5">
            <div class="container">
                <div class=" head-title mb-5">
                    <h2 class="">Our <span class="">Services</span></h2>
                    <p class="">We offer a wide range of digital services to elevate your brand presence and
                        drive real
                        business growth.</p>
                </div>

                <!-- Digital Marketing -->
                <div class="row justify-content-center rounded align-items-center mb-5 bg-light p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">Digital Marketing</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Digital Marketing</h3>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3 border-start  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/digital-marketing.webp"
                                alt="Digital Marketing" class="img-fluid rounded shadow" width="1060" height="692" loading="lazy" decoding="async">
                        </div>

                    </div>
                    <div class="col-md-4 ">
                        <p>We provide customized digital strategies including SEO, PPC, email marketing, and lead
                            generation to ensure your business stands out and gets measurable results.</p>
                    </div>
                </div>

                <!-- SEO -->
                <div class="row justify-content-center rounded align-items-center  mb-5 bg-white p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">SEO</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Search Engine Optimization (SEO)</h3>
                        </a>
                    </div>

                    <div class="col-md-4 mb-3 ">
                        <p>Improve your website’s visibility and organic ranking on Google through our result-oriented
                            SEO practices tailored to your niche.</p>
                    </div>

                    <div class="col-md-4 border-end  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/seo.webp" alt="SEO Services"
                                class="img-fluid rounded shadow" width="1060" height="706" loading="lazy" decoding="async">
                        </div>

                    </div>
                </div>

                <!-- Paid Marketing -->
                <div class="row justify-content-center rounded align-items-center mb-5 bg-light p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">Paid Marketing</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Paid Advertising</h3>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3 border-start  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/paid-advertising.webp"
                                alt="Paid Advertising" class="img-fluid rounded shadow" width="1060" height="684" loading="lazy" decoding="async">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <p>Maximize your reach instantly with Google Ads, Facebook Ads, and targeted campaigns that are
                            ROI-driven and conversion-focused.</p>
                    </div>
                </div>

                <!-- Custom Digital Strategy -->
                <div class="row justify-content-center rounded align-items-center  mb-5 bg-white p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">Strategy</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Custom Digital Strategy</h3>
                        </a>
                    </div>

                    <div class="col-md-4 mb-3">
                        <p>We analyze your business goals to create personalized digital marketing strategies aligned
                            with your audience and brand objectives.</p>
                    </div>
                    <div class="col-md-4 border-end  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/custom-strategy.webp" alt="Custom Strategy"
                                class="img-fluid rounded shadow" width="1060" height="825" loading="lazy" decoding="async">
                        </div>

                    </div>
                </div>

                <!-- Social Media Marketing -->
                <div class="row justify-content-center rounded align-items-center mb-5 bg-light p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">SMM</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Social Media Marketing</h3>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3 border-start  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/smm.webp" alt="Social Media Marketing"
                                class="img-fluid rounded shadow" width="1060" height="706" loading="lazy" decoding="async">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <p>Boost your brand engagement and customer loyalty through targeted content and ad strategies
                            on platforms like Instagram, Facebook, LinkedIn, and more.</p>
                    </div>
                </div>

                <!-- Design & Development -->
                <div class="row justify-content-center rounded align-items-center  mb-5 bg-white p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">Web</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Design & Development</h3>
                        </a>
                    </div>

                    <div class="col-md-4 mb-3">
                        <p>From sleek business websites to dynamic eCommerce platforms, we build high-performing digital
                            solutions optimized for UX and speed.</p>
                    </div>
                    <div class="col-md-4 border-end  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/design-development.webp"
                                alt="Design & Development" class="img-fluid rounded shadow" width="1060" height="706" loading="lazy" decoding="async">
                        </div>

                    </div>
                </div>

                <!-- Content Marketing -->
                <div class="row justify-content-center rounded align-items-center mb-5 bg-light p-3">
                    <div class="col-md-4">
                        <div class="badge bg-primary text-white mb-2">Content</div>
                        <a href="<?= $base_url ?>services/digital-marketing.php" class="text-decoration-none text-dark">
                            <h3 class="fw-bold">Content Marketing</h3>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3 border-start  ">
                        <div class="service-img-wrapper">
                            <img src="<?= $base_url ?>assets/images/services/content-writing.webp"
                                alt="Content Marketing" class="img-fluid rounded shadow" width="1060" height="697" loading="lazy" decoding="async">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p>Engage and educate your audience through compelling blogs, videos, infographics, and branded
                            storytelling that boosts trust and conversions.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- =============================================================================================== -->
        <section class="py-5">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Left Image -->
                    <div class="col-md-6 text-center mb-4 mb-md-0">
                        <img src="<?= $base_url ?>assets/images/services/hospital.webp" alt="Hospital Projects"
                            class="img-fluid rounded" width="1060" height="656" loading="lazy" decoding="async">
                    </div>

                    <!-- Right Content -->
                    <div class="col-md-6">
                        <div class="head-title">
                            <h2>Our Hospital Clients</h2>
                        </div>
                        <p class="text-muted mb-4">
                            We are proud to have partnered with leading hospitals and healthcare providers,
                            delivering cutting-edge digital solutions that build trust and generate results.
                        </p>

                        <!-- Client List -->
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="client-box p-3  bg-white rounded text-center h-100">
                                    <img src="<?= $base_url ?>assets/images/services/hospital.webp"
                                        class="img-fluid mb-2" alt="Apollo Hospital" width="200" height="124" loading="lazy" decoding="async">
                                    <h6 class="fw-bold text-dark mb-0">Apollo Hospital</h6>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="client-box p-3  bg-white rounded text-center h-100">
                                    <img src="<?= $base_url ?>assets/images/services/hospital.webp"
                                        class="img-fluid mb-2" alt="Fortis Healthcare" width="200" height="124" loading="lazy" decoding="async">
                                    <h6 class="fw-bold text-dark mb-0">Fortis Healthcare</h6>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="client-box p-3  bg-white rounded text-center h-100">
                                    <img src="<?= $base_url ?>assets/images/services/hospital.webp"
                                        class="img-fluid mb-2" alt="Max Super Specialty" width="200" height="124" loading="lazy" decoding="async">
                                    <h6 class="fw-bold text-dark mb-0">Max Super Specialty</h6>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="client-box p-3  bg-white rounded text-center h-100">
                                    <img src="<?= $base_url ?>assets/images/services/hospital.webp"
                                        class="img-fluid mb-2" alt="Medanta Hospital" width="200" height="124" loading="lazy" decoding="async">
                                    <h6 class="fw-bold text-dark mb-0">Medanta Hospital</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Counter -->
                        <div class="mt-4">
                            <h4 class="fw-bold text-success">15+ Hospitals Served</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .client-box {
                transition: all 0.3s ease-in-out;
                border-radius: 10px 30px 30px 10px !important;
                box-shadow: 0 6px 0px rgba(0, 0, 0, 1);
                background-color: #fff;
            }

            .client-box:hover {
                transform: translateY(-6px);
                box-shadow: 0 6px 10px rgba(0, 0, 0, 5);
            }
        </style>


        <!-- ================================================================================================ -->
        <section class="choose-crevix py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Content -->
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="head-title mb-4">
                            <h2 class="fw-bold">
                                Why Choose <span class="">Coral Web Technology</span> for Your Business?
                            </h2>
                        </div>
                        <p class="section-desc text-muted mb-4">
                            Coral Web Technology is not just a service provider — we’re your digital growth partner.
                            We combine innovation, strategy, and technology to deliver solutions that actually make a
                            difference.
                        </p>
                        <ul class="crevix-features list-unstyled">
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Result-Driven Digital
                                Marketing</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i> SEO
                                That Actually Ranks</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Custom & Scalable Web
                                Development</li>
                            <li class="list-group-item"><i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Creative & Impactful Designs
                            </li>
                        </ul>
                    </div>

                    <!-- Right Cards -->
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="feature-card shadow-sm border-start border-4 border-primary">
                                    <h5 class="fw-semibold mb-2"><i
                                            class="bi bi-bar-chart-line-fill text-primary me-2"></i>Tailored Strategies
                                    </h5>
                                    <p class="text-muted mb-0">We understand every business is unique, so we craft
                                        personalized plans that bring results.</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="feature-card shadow-sm border-start border-4 border-primary">
                                    <h5 class="fw-semibold mb-2"><i
                                            class="bi bi-people-fill text-primary me-2"></i>Expert Team</h5>
                                    <p class="text-muted mb-0">From marketers to developers, our in-house experts ensure
                                        top-notch service at every stage.</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="feature-card shadow-sm border-start border-4 border-primary">
                                    <h5 class="fw-semibold mb-2"><i
                                            class="bi bi-clock-history text-primary me-2"></i>On-Time Delivery</h5>
                                    <p class="text-muted mb-0">We respect deadlines. Always. Your project will be
                                        delivered efficiently, without compromising quality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =================================================================================== -->
        <section class="py-5 our-performance text-white">
            <div class="container">
                <div class="head-title text-center">
                    <h2 class=" fw-bold text-dark mb-4">Our <span class="text-dark">Performance Marketing
                            Services</span>
                    </h2>
                </div>
                <div class="row g-4">

                    <!-- Service Item -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"
                                class="icon-img me-3" width="40" height="40" loading="lazy" decoding="async" />
                            <span>Facebook and Instagram Ads</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" alt="Google"
                                class="icon-img me-3" width="40" height="40" loading="lazy" decoding="async" />
                            <span>Google & YouTube Ads</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/1048/1048953.png" alt="Influencer"
                                class="icon-img me-3" width="40" height="40" loading="lazy" decoding="async" />
                            <span>Influencer Marketing</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/888/888879.png" alt="Poster"
                                class="icon-img me-3" width="40" height="40" loading="lazy" decoding="async" />
                            <span>Creative and Poster Design</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/1077/1077012.png" alt="Web Dev"
                                class="icon-img me-3" width="40" height="40" loading="lazy" decoding="async" />
                            <span>Web Development & Landing Page</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/889/889140.png" alt="Social Media"
                                class="icon-img me-3" width="40" height="40" loading="lazy" decoding="async" />
                            <span>Social Media Management</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/2965/2965567.png" alt="Press"
                                class="icon-img me-3" width="40" height="40" loading="lazy" decoding="async" />
                            <span>Press Release</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/1087/1087815.png" alt="Video Editing"
                                class="icon-img me-3" width="40" height="40" loading="lazy" decoding="async" />
                            <span>Video Editing</span>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="service-box p-3   text-white d-flex align-items-center">
                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Consultation"
                                class="icon-img me-3" width="40" height="40" loading="lazy" decoding="async" />
                            <span>Business Growth Consultation</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================================================================================== -->
        <section class="py-5 meeting text-center ">
            <div class="container">
                <div class="head-title mb-4">
                    <h2 class="text-white">Book a 1-to-1 Meeting with <span class="text-white">Our Experts</span></h2>
                    <p class="text-white mt-3 mb-4">
                        Get personalized guidance tailored to your business goals. Let’s discuss how our services can
                        bring growth to your brand.
                    </p>
                    <a href="schedule-meeting.php" class="btn btn-light px-4 py-2">
                        Book a Schedule
                    </a>
                </div>
            </div>
        </section>
        <!-- ================================================================================================ -->


        <!-- ================================================================================================  -->
        

        <!-- ================================================================================================ -->
        <?php include 'testimonial.php'; ?>
        <!-- =============================================================================================== -->
        <section class="py-5 world bg-dark">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <!-- Left Column -->
                    <div class="col-lg-6 col-md-10 mb-4 mb-lg-0">
                        <div class="head-title">
                            <h2 class="mb-3 fw-bold text-white">Satisfied <span>Clients</span> Around the World</h2>
                            <p class="lead text-white">We’ve proudly served clients in <strong>5+ countries</strong>,
                                delivering quality results across global borders with trust and transparency.</p>
                        </div>
                    </div>

                    <!-- Right Column (Blank for now) -->
                    <div class="col-lg-6 col-md-10">
                        <img src="assets/images/background/map.png" alt="Global Coverage Map" class="img-fluid" width="510" height="286" loading="lazy" decoding="async">
                    </div>

                </div>
            </div>
        </section>



        <!-- Digital Marketing Packages Section -->
        <section class="py-5 bg-light" id="marketing-packages">
            <div class="container">
                <div class="text-center mb-5">
                    <div class="hero-badge mb-2 d-inline-flex align-items-center gap-2" style="background: rgba(30, 64, 175, 0.1); color: #1e40af; padding: 8px 16px; border-radius: 50px; font-weight: 600;">
                        <i class="bi bi-briefcase-fill"></i> Corporate Professional Sales Brochure
                    </div>
                    <h2 class="fw-bold display-5">ALL Packages <span class="text-primary">Plan</span></h2>
                    <p class="lead text-muted mx-auto" style="max-width: 800px;">We help businesses grow professionally on Google, Facebook, Instagram, and other online platforms with our result-oriented digital marketing strategies.</p>
                </div>

                <!-- Main Services Grid -->
                <div class="row g-4 mb-5">
                    <!-- Meta Ads -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm hover-up" style="border-radius: 20px; transition: all 0.3s ease;">
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="icon-box mb-3 d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: rgba(13, 110, 253, 0.1); color: #0d6efd; border-radius: 15px; font-size: 1.5rem;">
                                    <i class="bi bi-meta"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Meta Ads Management</h4>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-primary me-2"></i>Facebook & Insta Setup</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-primary me-2"></i>Audience Targeting</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-primary me-2"></i>Lead Gen & Retargeting</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-primary me-2"></i>A/B Testing & Monitoring</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-primary me-2"></i>Budget Optimization</li>
                                </ul>
                                <div class="pt-3 border-top mt-auto">
                                    <span class="text-muted small">Monthly / 3-Month Package</span>
                                    <h4 class="fw-bold text-primary mb-0">₹10,000 <span class="fs-6 text-muted fw-normal">/mo</span></h4>
                                    <span class="badge bg-light text-dark border mt-1">3-Month: ₹25,000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm hover-up" style="border-radius: 20px; transition: all 0.3s ease;">
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="icon-box mb-3 d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: rgba(111, 66, 193, 0.1); color: #6f42c1; border-radius: 15px; font-size: 1.5rem;">
                                    <i class="bi bi-instagram"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Social Media Marketing</h4>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-purple me-2"></i>10 Creative Posts / mo</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-purple me-2"></i>4 Reels (Video Editing)</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-purple me-2"></i>2 AI-Created Reels / mo</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-purple me-2"></i>Captions & Hashtags</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-purple me-2"></i>Publishing & Handling</li>
                                </ul>
                                <div class="pt-3 border-top mt-auto">
                                    <span class="text-muted small">Monthly / 3-Month Package</span>
                                    <h4 class="fw-bold mb-0" style="color: #6f42c1;">₹10,000 <span class="fs-6 text-muted fw-normal">/mo</span></h4>
                                    <span class="badge bg-light text-dark border mt-1">3-Month: ₹25,000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Google Ads -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm hover-up" style="border-radius: 20px; transition: all 0.3s ease;">
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="icon-box mb-3 d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: rgba(253, 126, 20, 0.1); color: #fd7e14; border-radius: 15px; font-size: 1.5rem;">
                                    <i class="bi bi-google"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Google Ads Management</h4>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-orange me-2"></i>Search Campaign Setup</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-orange me-2"></i>Keyword & Negative Audit</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-orange me-2"></i>Audience & Location Target</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-orange me-2"></i>Conversion Tracking</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-orange me-2"></i>Bid Optimization & Reports</li>
                                </ul>
                                <div class="pt-3 border-top mt-auto">
                                    <span class="text-muted small">Monthly / 3-Month Package</span>
                                    <h4 class="fw-bold mb-0" style="color: #fd7e14;">₹15,000 <span class="fs-6 text-muted fw-normal">/mo</span></h4>
                                    <span class="badge bg-light text-dark border mt-1">3-Month: ₹40,000</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- GMB SEO -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm hover-up" style="border-radius: 20px; transition: all 0.3s ease;">
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="icon-box mb-3 d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px; background: rgba(25, 135, 84, 0.1); color: #198754; border-radius: 15px; font-size: 1.5rem;">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <h4 class="fw-bold mb-3">GMB / Local SEO</h4>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-success me-2"></i>Complete Optimization</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-success me-2"></i>4 Google Posts per Week</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-success me-2"></i>Review Management</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-success me-2"></i>Local Citations & NAP</li>
                                    <li class="mb-2 text-muted small"><i class="bi bi-check2-circle text-success me-2"></i>Monthly Performance Audit</li>
                                </ul>
                                <div class="pt-3 border-top mt-auto">
                                    <span class="text-muted small">Monthly / 3-Month Package</span>
                                    <h4 class="fw-bold text-success mb-0">₹12,000 <span class="fs-6 text-muted fw-normal">/mo</span></h4>
                                    <span class="badge bg-light text-dark border mt-1">3-Month: ₹25,000 (One-time)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Premium Bundles -->
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-5">
                        <div class="card border-0 shadow-lg position-relative overflow-hidden h-100" style="border-radius: 24px; background: linear-gradient(135deg, #1e40af 0%, #0b1120 100%); color: white;">
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="text-center mb-3">
                                    <div class="badge bg-warning text-dark mb-2">🔥 MOST POPULAR</div>
                                    <h4 class="fw-bold mb-1">Professional Growth Package</h4>
                                    <div class="h3 fw-bold mb-0">₹25,000 <span class="fs-6 opacity-75 fw-normal">/ 3 Months Offer</span></div>
                                </div>
                                
                                <p class="opacity-75 mb-3 small text-center">Complete specialized growth services at a bundled discount.</p>
                                
                                <div class="row g-2 mb-4">
                                    <div class="col-6">
                                        <ul class="list-unstyled small opacity-90 mb-0">
                                            <li class="mb-1"><i class="bi bi-check-lg me-1 text-warning"></i>Meta Ads Management</li>
                                            <li class="mb-1"><i class="bi bi-check-lg me-1 text-warning"></i>Google Ads Setup</li>
                                            <li class="mb-1"><i class="bi bi-check-lg me-1 text-warning"></i>GMB Local SEO</li>
                                        </ul>
                                    </div>
                                    <div class="col-6">
                                        <ul class="list-unstyled small opacity-90 mb-0">
                                            <li class="mb-1"><i class="bi bi-check-lg me-1 text-warning"></i>Social Media Posts</li>
                                            <li class="mb-1"><i class="bi bi-check-lg me-1 text-warning"></i>Reels Video Editing</li>
                                            <li class="mb-1"><i class="bi bi-check-lg me-1 text-warning"></i>Monthly Reporting</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="mt-auto p-3 rounded-4 border text-start" style="background: rgba(255, 255, 255, 0.1); border-color: rgba(255,255,255,0.2) !important;">
                                    <p class="small fw-bold text-uppercase opacity-75 mb-3"><i class="bi bi-wallet2 me-1"></i> Choose Payment Option</p>
                                    
                                    <div class="p-3 bg-white text-dark border rounded-3 mb-3 text-center shadow-sm">
                                        <span class="small text-muted d-block mb-1">Pay Securely via UPI</span>
                                        <div class="fw-bold p-2 bg-light rounded border border-dashed mb-3" style="letter-spacing: 1px; color: #1e40af; font-family: monospace; font-size: 0.85rem;">9142569346@ybl</div>
                                        
                                        <!-- Manual Amount Input -->
                                        <div class="mb-3">
                                            <label class="small text-muted d-block mb-1">Enter Custom Amount (Optional)</label>
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-text bg-light border-end-0">₹</span>
                                                <input type="number" class="form-control bg-light border-start-0 custom-amount-input" placeholder="e.g. 25000" data-pa="9142569346@ybl" data-pn="Coral Web Technology" data-base-am="25000">
                                            </div>
                                        </div>

                                        <a href="upi://pay?pa=9142569346@ybl&pn=Coral%20Web%20Technology&am=25000&cu=INR" class="btn btn-success w-100 fw-bold rounded-pill mb-0 py-2 shadow-sm pay-btn">
                                            <i class="bi bi-shield-check me-1"></i> PAY NOW (₹25,000)
                                        </a>
                                    </div>

                                    <a id="whatsapp-btn-growth-package" href="https://wa.me/919117741984?text=I%20want%20to%20enroll%20in%20the%20Professional%20Growth%20Package" class="btn btn-light w-100 fw-bold rounded-pill shadow-sm py-2">
                                        <i class="bi bi-whatsapp me-1 text-success"></i> Send on WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="card border-0 shadow-lg h-100" style="border-radius: 24px; background: #ffffff;">
                            <div class="card-body p-4 d-flex flex-column text-center">
                                <div class="mb-3">
                                    <div class="badge bg-primary-soft text-primary mb-2">📈 GMB 3-MONTH PLAN</div>
                                    <h4 class="fw-bold mb-1 text-dark">GMB SEO 3-Month Package</h4>
                                    <div class="h3 fw-bold text-primary mb-0">₹25,000 <span class="fs-6 text-muted fw-normal">One-time / ₹30,000 (2 Installments)</span></div>
                                </div>
                                
                                <p class="text-muted mb-4 small">Complete GMB optimization, 4 posts/week, citations & monthly reviews.</p>
                                
                                <div class="mt-auto p-3 rounded-4 border text-start" style="background: rgba(13, 110, 253, 0.03);">
                                    <p class="small fw-bold text-uppercase text-muted mb-3"><i class="bi bi-wallet2 me-1"></i> Choose Payment Option</p>
                                    
                                    <div class="p-3 bg-white border rounded-3 mb-3 text-center shadow-sm">
                                        <span class="small text-muted d-block mb-1">Pay Securely via UPI</span>
                                        <div class="fw-bold p-2 bg-light rounded border border-dashed mb-3" style="letter-spacing: 1px; color: #1e40af; font-family: monospace; font-size: 0.85rem;">9142569346@ybl</div>
                                        
                                        <!-- Manual Amount Input -->
                                        <div class="mb-3 text-start">
                                            <label class="small text-muted d-block mb-1">Enter Custom Amount (Optional)</label>
                                            <div class="input-group input-group-sm">
                                                <span class="input-group-text bg-light border-end-0">₹</span>
                                                <input type="number" class="form-control bg-light border-start-0 custom-amount-input" placeholder="e.g. 15000" data-pa="9142569346@ybl" data-pn="Coral Web Technology" data-base-am="15000">
                                            </div>
                                        </div>

                                        <a href="upi://pay?pa=9142569346@ybl&pn=Coral%20Web%20Technology&am=15000&cu=INR" class="btn btn-success w-100 fw-bold rounded-pill mb-2 py-2 shadow-sm pay-btn">
                                            <i class="bi bi-shield-check me-1"></i> PAY INSTALLMENT (₹15,000)
                                        </a>
                                        <div class="text-muted" style="font-size: 0.75rem;">Two Installments: ₹15,000 Start / ₹15,000 at month 2 (Total ₹30,000) or One-Time ₹25,000</div>
                                    </div>

                                    <a id="whatsapp-btn-3month-plan" href="https://wa.me/919117741984?text=I%20want%20to%20enroll%20in%20the%20GMB%20SEO%203%20Month%20Plan" class="btn btn-info w-100 fw-bold rounded-pill text-white shadow-sm py-2" style="background: linear-gradient(135deg, #00b4db, #0083b0); border: none;">
                                        <i class="bi bi-whatsapp me-1"></i> Send on WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dedicated Services List -->
                <style>
                    .dedicated-service-card {
                        background: #ffffff;
                        border: 1px solid #eef2f6;
                        border-radius: 16px;
                        padding: 1.5rem;
                        transition: all 0.3s ease;
                        height: 100%;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-between;
                        position: relative;
                        overflow: hidden;
                    }
                    .dedicated-service-card:hover {
                        transform: translateY(-8px);
                        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08) !important;
                        border-color: #2563eb;
                    }
                    .service-icon-pill {
                        width: 48px;
                        height: 48px;
                        border-radius: 12px;
                        background: rgba(37, 99, 235, 0.1);
                        color: #2563eb;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 1.5rem;
                        margin-bottom: 1.25rem;
                    }
                    .price-tag-premium {
                        background: #f8fafc;
                        padding: 6px 14px;
                        border-radius: 50px;
                        font-weight: 700;
                        color: #1e293b;
                        font-size: 0.9rem;
                        border: 1px solid #e2e8f0;
                    }
                    .dedicated-service-card .service-title {
                        font-size: 1.1rem;
                        font-weight: 700;
                        color: #0f172a;
                        margin-bottom: 0.5rem;
                    }
                </style>
                <div class="mt-5 pt-4">
                    <div class="row align-items-center">
                        <div class="col-lg-12 mb-5 text-center">
                            <div class="hero-badge mb-3 d-inline-flex align-items-center gap-2" style="background: rgba(253, 126, 20, 0.1); color: #fd7e14; padding: 8px 20px; border-radius: 50px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px;">
                                <i class="bi bi-gem"></i> Premium Dedicated Solutions
                            </div>
                            <h2 class="fw-bold display-6">Specialized <span class="text-primary">One-Time</span> Setups</h2>
                            <p class="text-muted mx-auto" style="max-width: 600px;">Expert technical implementation for businesses that need high-performance digital infrastructure without long-term commitments.</p>
                        </div>
                        <div class="col-lg-12">
                            <div class="row g-4">
                                <!-- GMB Service -->
                                <div class="col-md-6 col-lg-3">
                                    <div class="dedicated-service-card shadow-sm">
                                        <div>
                                            <div class="service-icon-pill">
                                                <i class="bi bi-geo-alt-fill"></i>
                                            </div>
                                            <h5 class="service-title">GMB Full Growth Service</h5>
                                            <p class="small text-muted mb-4">Complete profile optimization, ranking boost, and local visibility setup.</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                                            <span class="small text-muted fw-bold">One-time fee</span>
                                            <span class="price-tag-premium">₹10,000</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Google Ads -->
                                <div class="col-md-6 col-lg-3">
                                    <div class="dedicated-service-card shadow-sm">
                                        <div>
                                            <div class="service-icon-pill" style="background: rgba(253, 126, 20, 0.1); color: #fd7e14;">
                                                <i class="bi bi-google"></i>
                                            </div>
                                            <h5 class="service-title">Google Ads Full Setup</h5>
                                            <p class="small text-muted mb-4">Conversion tracking, keyword research, and high-ROI campaign architecture.</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                                            <span class="small text-muted fw-bold">One-time fee</span>
                                            <span class="price-tag-premium">₹11,000</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Meta Ads -->
                                <div class="col-md-6 col-lg-3">
                                    <div class="dedicated-service-card shadow-sm">
                                        <div>
                                            <div class="service-icon-pill" style="background: rgba(8, 102, 255, 0.1); color: #0866ff;">
                                                <i class="bi bi-facebook"></i>
                                            </div>
                                            <h5 class="service-title">Meta Ads Full Setup</h5>
                                            <p class="small text-muted mb-4">Pixel integration, audience building, and creative campaign deployment.</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                                            <span class="small text-muted fw-bold">One-time fee</span>
                                            <span class="price-tag-premium">₹7,000</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Social Media -->
                                <div class="col-md-6 col-lg-3">
                                    <div class="dedicated-service-card shadow-sm">
                                        <div>
                                            <div class="service-icon-pill" style="background: rgba(214, 51, 132, 0.1); color: #d63384;">
                                                <i class="bi bi-instagram"></i>
                                            </div>
                                            <h5 class="service-title">Social Media Management</h5>
                                            <p class="small text-muted mb-4">End-to-end management of platforms to maintain consistent brand presence.</p>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                                            <span class="small text-muted fw-bold">One-time fee</span>
                                            <span class="price-tag-premium">₹7,000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="mt-5 py-5 border-top">
                    <div class="row g-4 justify-content-center align-items-center">
                        <div class="col-md-8 text-center">
                            <h2 class="fw-bold mb-3">Ready to Scale Your Business?</h2>
                            <p class="text-muted mb-4 lead">Choose the plan that fits your business needs. Start today and take your business to the next level!</p>
                            <a href="https://wa.me/919117741984" class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-bold shadow-lg">
                                Claim Your Offer Now <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                            <div class="mt-4">
                                <p class="small text-muted mb-0"><i class="bi bi-geo-alt-fill me-1"></i> Patna, Bihar • <i class="bi bi-telephone-fill me-1"></i> <a href="tel:+919142569346" class="text-muted text-decoration-none">+91 9142569346</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Official Prospectus Pricing Summary & Terms Section -->
        <section class="py-5 bg-white border-top" id="pricing-summary-prospectus">
            <div class="container">
                <div class="head-title text-center mb-5">
                    <span class="badge bg-primary text-white px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">Corporate Service Prospectus</span>
                    <h2 class="display-6 fw-bold">PRICING SUMMARY & CLIENT INFORMATION</h2>
                    <p class="text-muted lead mx-auto" style="max-width: 800px;">Transparent service management fees, fixed package options, and project milestones.</p>
                </div>

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-5">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 align-middle">
                            <thead style="background: linear-gradient(135deg, #1e1b4b 0%, #4c1d95 100%); color: white;">
                                <tr>
                                    <th class="py-3 px-4 text-uppercase fw-bold" style="width: 35%;">SERVICE</th>
                                    <th class="py-3 px-4 text-uppercase fw-bold" style="width: 30%;">MONTHLY / STARTING</th>
                                    <th class="py-3 px-4 text-uppercase fw-bold" style="width: 35%;">PACKAGE / PROJECT PRICE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-3 fw-bold text-dark"><i class="bi bi-geo-alt text-primary me-2"></i>GMB / Local SEO</td>
                                    <td class="px-4 py-3 text-secondary fw-semibold">₹12,000 / month</td>
                                    <td class="px-4 py-3">
                                        <span class="badge bg-success text-white fw-bold me-1">₹25,000 one-time / 3 months</span>
                                        <span class="text-muted small d-block mt-1">₹30,000 in two installments</span>
                                    </td>
                                </tr>
                                <tr class="bg-light">
                                    <td class="px-4 py-3 fw-bold text-dark"><i class="bi bi-google text-warning me-2"></i>Google Ads Management</td>
                                    <td class="px-4 py-3 text-secondary fw-semibold">₹15,000 / month</td>
                                    <td class="px-4 py-3"><strong class="text-primary">₹40,000</strong> / 3 months</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 fw-bold text-dark"><i class="bi bi-search text-info me-2"></i>Website SEO</td>
                                    <td class="px-4 py-3 text-secondary fw-semibold">₹15,000 / month</td>
                                    <td class="px-4 py-3"><strong class="text-primary">₹80,000</strong> / 6 months</td>
                                </tr>
                                <tr class="bg-light">
                                    <td class="px-4 py-3 fw-bold text-dark"><i class="bi bi-meta text-primary me-2"></i>Meta Ads Management</td>
                                    <td class="px-4 py-3 text-secondary fw-semibold">₹10,000 / month</td>
                                    <td class="px-4 py-3"><strong class="text-primary">₹25,000</strong> / 3 months</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 fw-bold text-dark"><i class="bi bi-instagram text-danger me-2"></i>Social Media Marketing</td>
                                    <td class="px-4 py-3 text-secondary fw-semibold">₹10,000 / month</td>
                                    <td class="px-4 py-3"><strong class="text-primary">₹25,000</strong> / 3 months</td>
                                </tr>
                                <tr class="bg-light">
                                    <td class="px-4 py-3 fw-bold text-dark"><i class="bi bi-laptop text-primary me-2"></i>Website Design & Development</td>
                                    <td class="px-4 py-3 text-muted">—</td>
                                    <td class="px-4 py-3"><strong class="text-dark">Starting ₹10,000</strong></td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 fw-bold text-dark"><i class="bi bi-phone text-success me-2"></i>Mobile App Development</td>
                                    <td class="px-4 py-3 text-muted">—</td>
                                    <td class="px-4 py-3"><strong class="text-dark">Starting ₹50,000</strong></td>
                                </tr>
                                <tr class="bg-light">
                                    <td class="px-4 py-3 fw-bold text-dark"><i class="bi bi-gear-wide-connected text-secondary me-2"></i>Custom ERP / Software</td>
                                    <td class="px-4 py-3 text-muted">—</td>
                                    <td class="px-4 py-3"><span class="badge bg-secondary">Project-based quotation</span></td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 fw-bold text-dark"><i class="bi bi-cart3 text-warning me-2"></i>Amazon / Flipkart / Meesho</td>
                                    <td class="px-4 py-3 text-secondary fw-semibold">₹4,999 / month</td>
                                    <td class="px-4 py-3 text-muted small">Per marketplace; scope confirmed</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Terms & Conditions Card (From Prospectus Slide 11) -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 mb-4 bg-light">
                    <h4 class="fw-bold mb-4 text-dark"><i class="bi bi-shield-check text-primary me-2"></i>Service Terms & Conditions</h4>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-dot text-primary fs-3 lh-1 me-1"></i><span>Package fees apply to the duration and deliverables stated in this prospectus. One-time package offers are payable in advance; GMB SEO also has a two-installment option at ₹30,000 for 3 months.</span></li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-dot text-primary fs-3 lh-1 me-1"></i><span>Google Ads and Meta Ads advertising budgets are separate from management fees and are paid directly by the client.</span></li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-dot text-primary fs-3 lh-1 me-1"></i><span>The client must provide required account access, business information, images, videos, and approvals on time.</span></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-dot text-primary fs-3 lh-1 me-1"></i><span>For social media marketing, the client supplies source videos for editing 4 reels per month; 2 additional reels are created using AI by Coral Web Technology.</span></li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-dot text-primary fs-3 lh-1 me-1"></i><span>Website, app, and ERP costs depend on agreed features, integrations, content, and platform requirements. Domain, hosting, third-party tools, SMS/OTP, maps, paid plugins, and store fees are extra unless written otherwise.</span></li>
                                <li class="mb-3 d-flex align-items-start"><i class="bi bi-dot text-primary fs-3 lh-1 me-1"></i><span>Marketplace services are subject to platform rules and seller eligibility. Any additional work outside the agreed scope will be quoted separately.</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-top text-center text-md-start d-flex flex-wrap justify-content-between align-items-center">
                        <div class="text-muted small">
                            <strong>Corporate Office:</strong> Chandrakanta Apartment, 2nd Floor, Room No. 201, Opposite Harihar Chamber, Pandui Kothi, Boring Road, Patna, Bihar – 800001
                        </div>
                        <div class="mt-2 mt-md-0">
                            <a href="tel:+919142569346" class="text-dark fw-bold text-decoration-none me-3"><i class="bi bi-telephone-fill text-primary me-1"></i>+91 9142569346</a>
                            <a href="mailto:coralwebtechnology@gmail.com" class="text-dark text-decoration-none"><i class="bi bi-envelope-fill text-danger me-1"></i>coralwebtechnology@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =============================================================================== -->
        <?php include 'faq.php'; ?>
        <!-- =============================================================================== -->
        <?php include 'contact.php'; ?>
        <!-- =============================================================================== -->
        <?php include 'common/footer.php'; ?>
        <!-- ============================================================================= -->
    </main>


<!-- Custom Marquee Drag and Scroll Script -->
<style>
.marquee-wrapper {
    overflow-x: auto !important;
    overflow-y: hidden !important;
    scroll-behavior: auto !important;
    -ms-overflow-style: none !important;
    scrollbar-width: none !important;
    cursor: grab;
    -webkit-overflow-scrolling: touch;
}
.marquee-wrapper::-webkit-scrollbar {
    display: none !important;
}
.marquee-track {
    animation: none !important; 
}
.marquee-wrapper:active {
    cursor: grabbing;
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const wrappers = document.querySelectorAll('.marquee-wrapper');
    
    wrappers.forEach(wrapper => {
        const track = wrapper.querySelector('.marquee-track');
        if(!track) return;
        
        let isDown = false;
        let startX;
        let scrollLeft;
        let isHovered = false;
        
        const startDrag = (e) => {
            isDown = true;
            wrapper.classList.add('active');
            startX = (e.pageX || (e.touches && e.touches[0].pageX)) - wrapper.offsetLeft;
            scrollLeft = wrapper.scrollLeft;
        };
        
        const stopDrag = () => {
            isDown = false;
            wrapper.classList.remove('active');
        };
        
        const drag = (e) => {
            if (!isDown) return;
            if (e.type === 'touchmove') return; // Native scroll handles touch
            if (e.cancelable) { e.preventDefault(); }
            const x = e.pageX - wrapper.offsetLeft;
            const walk = (x - startX) * 1.5; 
            wrapper.scrollLeft = scrollLeft - walk;
        };
        
        wrapper.addEventListener('mousedown', startDrag);
        wrapper.addEventListener('touchstart', startDrag, {passive: true});
        wrapper.addEventListener('mouseleave', stopDrag);
        wrapper.addEventListener('mouseup', stopDrag);
        wrapper.addEventListener('touchend', stopDrag);
        wrapper.addEventListener('mousemove', drag);
        wrapper.addEventListener('touchmove', drag, {passive: false});
        
        wrapper.addEventListener('mouseenter', () => isHovered = true);
        wrapper.addEventListener('mouseleave', () => isHovered = false);
        wrapper.addEventListener('touchstart', () => isHovered = true, {passive: true});
        wrapper.addEventListener('touchend', () => { setTimeout(() => isHovered = false, 1500); });
        
        let speed = track.classList.contains('marquee-right') ? -1 : 1;
        
        // Wait for fonts/images to load so scrollWidth is correct
        window.addEventListener('load', () => {
            if (speed < 0) {
                wrapper.scrollLeft = track.scrollWidth / 2;
            }
            
            const step = () => {
                if (!isDown && !isHovered) {
                    wrapper.scrollLeft += speed;
                    
                    if (speed > 0 && wrapper.scrollLeft >= track.scrollWidth / 2) {
                        wrapper.scrollLeft = 1; // 1 to avoid jitter
                    } else if (speed < 0 && wrapper.scrollLeft <= 0) {
                        wrapper.scrollLeft = (track.scrollWidth / 2) - 1;
                    }
                }
                requestAnimationFrame(step);
            };
            requestAnimationFrame(step);
        });
    });
});
</script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Swiper Portfolio Slider with Coverflow Effect
        const swiperPortfolio = new Swiper('.swiper-portfolio', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            coverflowEffect: {
                rotate: 20,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>
<!-- Script -->
<script>
    let counterStarted = false;

    function animateCounter(counterElement) {
        const target = +counterElement.getAttribute('data-target');
        const speed = 200; // lower = faster

        const updateCount = () => {
            const current = +counterElement.innerText.replace('+', '');
            const increment = Math.ceil(target / speed);

            if (current < target) {
                counterElement.innerText = `${current + increment}+`;
                setTimeout(updateCount, 20);
            } else {
                counterElement.innerText = `${target}+`;
            }
        };
        updateCount();
    }
    function startCounters() {
        if (counterStarted) return;
        const section = document.getElementById('counter-area');
        const rect = section.getBoundingClientRect();

        if (rect.top <= window.innerHeight - 100) {
            document.querySelectorAll('.counter').forEach(counter => {
                animateCounter(counter);
            });
            counterStarted = true;
        }
    }
    window.addEventListener('scroll', startCounters);
    document.addEventListener("DOMContentLoaded", function () {
        const target = document.getElementById("animatedNumber");
        if (!target) return;

        const number = "+91 9142569346";
        let i = 0;

        function typeEffect() {
            if (!target) return;
            if (i < number.length) {
                target.innerHTML += number.charAt(i);
                i++;
                setTimeout(typeEffect, 80);
            } else {
                setTimeout(() => {
                    target.innerHTML = "";
                    i = 0;
                    typeEffect();
                }, 1500);
            }
        }

        typeEffect();
    });
</script>
<script>
    // Manual Payment Amount Logic
    document.querySelectorAll('.custom-amount-input').forEach(input => {
        input.addEventListener('input', function() {
            const card = this.closest('.card') || this.closest('.card-body') || this.closest('.p-3');
            const payBtn = card.querySelector('.pay-btn');
            const pa = this.getAttribute('data-pa');
            const pn = encodeURIComponent(this.getAttribute('data-pn'));
            const baseAm = this.getAttribute('data-base-am');
            const customAm = this.value;
            
            const finalAm = customAm && customAm > 0 ? customAm : baseAm;
            const upiUrl = `upi://pay?pa=${pa}&pn=${pn}&am=${finalAm}&cu=INR`;
            
            if (payBtn) {
                payBtn.setAttribute('href', upiUrl);
                payBtn.innerHTML = `<i class="bi bi-shield-check me-1"></i> PAY NOW (₹${new Number(finalAm).toLocaleString('en-IN')})`;
            }
        });
    });
</script>
</html>
