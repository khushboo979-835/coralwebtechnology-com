<?php
http_response_code(404);
include_once __DIR__ . '/common/config.php';

$page_title = '404 - Page Not Found | Coral Web Technology';
$page_description = 'Sorry, the page you are looking for cannot be found. Explore Coral Web Technology software development, mobile apps, web design services, and courses.';
$page_keywords = '404, page not found, Coral Web Technology';
$page_canonical = $base_url . '404.php';

include_once __DIR__ . '/common/head.php';
include_once __DIR__ . '/common/plugins.php';
include_once __DIR__ . '/common/header.php';
?>

<style>
.error-hero-section {
    padding: 120px 0 80px;
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    color: #ffffff;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.error-hero-section::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(234, 95, 35, 0.12) 0%, transparent 60%);
    pointer-events: none;
}
.error-badge-404 {
    display: inline-block;
    font-size: clamp(5rem, 15vw, 9rem);
    font-weight: 900;
    line-height: 1;
    background: linear-gradient(135deg, #ff6b3d, #ea5f23, #2760ca);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 10px;
    letter-spacing: -2px;
}
.error-title {
    font-size: clamp(1.8rem, 4vw, 2.5rem);
    font-weight: 800;
    margin-bottom: 15px;
    color: #ffffff;
}
.error-desc {
    font-size: 1.1rem;
    color: #cbd5e1;
    max-width: 650px;
    margin: 0 auto 30px;
    line-height: 1.6;
}
.error-actions {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 40px;
}
.btn-error-primary {
    background: linear-gradient(135deg, #ea5f23, #d94e12);
    color: #ffffff !important;
    padding: 14px 32px;
    border-radius: 50px;
    font-weight: 700;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 8px 25px rgba(234, 95, 35, 0.35);
}
.btn-error-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 30px rgba(234, 95, 35, 0.5);
}
.btn-error-outline {
    background: rgba(255, 255, 255, 0.08);
    color: #ffffff !important;
    border: 2px solid rgba(255, 255, 255, 0.2);
    padding: 14px 30px;
    border-radius: 50px;
    font-weight: 700;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
    backdrop-filter: blur(5px);
}
.btn-error-outline:hover {
    background: #25d366;
    border-color: #25d366;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(37, 211, 102, 0.3);
}

.popular-links-section {
    padding: 60px 0 80px;
    background: #f8fafc;
}
.popular-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 24px;
    border: 1px solid #e2e8f0;
    height: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    text-decoration: none;
    display: flex;
    flex-direction: column;
}
.popular-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
    border-color: #ea5f23;
}
.popular-card-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    background: rgba(234, 95, 35, 0.1);
    color: #ea5f23;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 16px;
}
.popular-card h5 {
    font-size: 1.15rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 8px;
}
.popular-card p {
    font-size: 0.9rem;
    color: #64748b;
    margin-bottom: 12px;
    flex-grow: 1;
}
.popular-card-link {
    font-size: 0.85rem;
    font-weight: 700;
    color: #ea5f23;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}
</style>

<main>
    <section class="error-hero-section">
        <div class="container position-relative">
            <div class="error-badge-404">404</div>
            <h1 class="error-title">Oops! Page Not Found</h1>
            <p class="error-desc">
                The URL you requested may have been updated, moved, or is no longer available. 
                Don't worry, all our services, solutions, and courses are fully available below!
            </p>
            <div class="error-actions">
                <a href="<?= $base_url ?>" class="btn-error-primary">
                    <i class="bi bi-house-door-fill"></i> Back to Homepage
                </a>
                <a href="https://wa.me/919117741984?text=Hi%20Coral%20Web%20Technology,%20I%20need%20help%20finding%20a%20page%20on%20your%20website" class="btn-error-outline" target="_blank">
                    <i class="bi bi-whatsapp"></i> Chat on WhatsApp (+91 91177 41984)
                </a>
                <a href="<?= $base_url ?>contact-us.php" class="btn-error-outline">
                    <i class="bi bi-envelope-fill"></i> Contact Support
                </a>
            </div>
        </div>
    </section>

    <section class="popular-links-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill fw-bold text-uppercase mb-2" style="background: rgba(234, 95, 35, 0.1); color: #ea5f23;">Explore Popular Solutions</span>
                <h2 class="fw-bold text-dark">Looking for one of these services?</h2>
                <p class="text-muted">Choose your desired solution to jump right into the right page.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <a href="<?= $base_url ?>website-design-company-in-india/" class="popular-card">
                        <div class="popular-card-icon"><i class="bi bi-laptop"></i></div>
                        <h5>Website Design & Development</h5>
                        <p>Modern, responsive, high-converting websites tailored to drive business leads and conversions.</p>
                        <span class="popular-card-link">Explore Web Design <i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="<?= $base_url ?>mobile-app-development-company-in-india/" class="popular-card">
                        <div class="popular-card-icon"><i class="bi bi-phone"></i></div>
                        <h5>Mobile App Development</h5>
                        <p>High-performance Android, iOS, and Flutter apps built for scalability and user delight.</p>
                        <span class="popular-card-link">Explore Mobile Apps <i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="<?= $base_url ?>software-development-company-in-india/" class="popular-card">
                        <div class="popular-card-icon"><i class="bi bi-code-slash"></i></div>
                        <h5>Custom Software & ERP</h5>
                        <p>Enterprise ERPs, CRM systems, automated billing software, and custom business dashboards.</p>
                        <span class="popular-card-link">Explore Software <i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="<?= $base_url ?>services/digital-marketing/" class="popular-card">
                        <div class="popular-card-icon"><i class="bi bi-graph-up-arrow"></i></div>
                        <h5>Digital Marketing Services</h5>
                        <p>Full-funnel ROI marketing: SEO, Google Ads, Meta Ads, and social media lead generation.</p>
                        <span class="popular-card-link">Explore Marketing <i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="<?= $base_url ?>services/seo-service/" class="popular-card">
                        <div class="popular-card-icon"><i class="bi bi-search"></i></div>
                        <h5>Search Engine Optimization (SEO)</h5>
                        <p>Dominate search engine rankings organically with on-page, off-page, and technical SEO.</p>
                        <span class="popular-card-link">Explore SEO <i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="<?= $base_url ?>#courses" class="popular-card">
                        <div class="popular-card-icon"><i class="bi bi-mortarboard-fill"></i></div>
                        <h5>Professional IT Courses</h5>
                        <p>Industry-oriented training in Data Analytics, Full Stack Web Dev, Digital Marketing & AI.</p>
                        <span class="popular-card-link">View All Courses <i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include_once __DIR__ . '/common/footer.php'; ?>
