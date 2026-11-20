<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ================================================ -->
   <section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="head-title text-center mb-4">
                <span class="badge bg-primary-soft text-primary px-3 py-2 rounded-pill fw-bold text-uppercase mb-2">Service Prospectus • 05</span>
                <h1 class="h2 fw-bold">Social Media Marketing (Organic & Reels Growth)</h1>
                <p class="text-muted lead mx-auto" style="max-width: 800px;">Maintain a consistent social media presence through planned content, reels, and short-form video editing.</p>
            </div>

            <div class="col-md-12">
                <!-- Deliverables Card -->
                <div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-white">
                    <h4 class="fw-bold mb-3 text-dark"><i class="bi bi-check2-circle text-success me-2"></i>Scope of Services & Deliverables</h4>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-start border-0 ps-0"><i class="bi bi-patch-check-fill text-primary me-2 mt-1"></i><span><strong>10 creative graphic posts per month</strong> tailored to your branding</span></li>
                                <li class="list-group-item d-flex align-items-start border-0 ps-0"><i class="bi bi-patch-check-fill text-primary me-2 mt-1"></i><span><strong>4 reels per month</strong> — source videos provided by the client; professional editing by our team</span></li>
                                <li class="list-group-item d-flex align-items-start border-0 ps-0"><i class="bi bi-patch-check-fill text-primary me-2 mt-1"></i><span><strong>2 additional AI-created reels per month</strong> crafted by Coral Web Technology</span></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-start border-0 ps-0"><i class="bi bi-patch-check-fill text-primary me-2 mt-1"></i><span><strong>Content planning, engaging captions & viral hashtag research</strong></span></li>
                                <li class="list-group-item d-flex align-items-start border-0 ps-0"><i class="bi bi-patch-check-fill text-primary me-2 mt-1"></i><span><strong>Post scheduling, publishing, and full account handling</strong></span></li>
                                <li class="list-group-item d-flex align-items-start border-0 ps-0"><i class="bi bi-patch-check-fill text-primary me-2 mt-1"></i><span><strong>Audience engagement, comment management & monthly reach analytics</strong></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Pricing Box -->
                <div class="py-4 bg-light rounded-4 px-3 px-md-4 border shadow-sm mt-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="text-danger fw-bold mb-0"><i class="bi bi-tags-fill me-2"></i>Pricing & Management Fees</h3>
                        <span class="badge bg-dark">Transparent Fee</span>
                    </div>
                    <div class="row g-3">
                        <!-- Monthly Plan -->
                        <div class="col-md-6">
                            <div class="p-4 bg-white rounded-4 border shadow-sm h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="text-muted small fw-bold text-uppercase mb-1">Monthly Service Fee</div>
                                    <div class="h2 fw-bold text-danger mb-2">₹10,000 <span class="fs-6 text-muted fw-normal">/ month</span></div>
                                    <p class="text-muted small mb-3">Month-to-month engagement. Includes 10 posts, 4 edited reels, 2 AI reels, copy, hashtags, scheduling, and community management.</p>
                                </div>
                                <a href="https://wa.me/919117741984?text=Hi%2C%20I%20am%20interested%20in%20Social%20Media%20Marketing%20Monthly%20Plan%20(Rs%2010%2C000)" class="btn btn-outline-danger w-100 rounded-pill fw-bold">
                                    <i class="bi bi-whatsapp me-1"></i> Enquire Monthly Plan
                                </a>
                            </div>
                        </div>
                        <!-- 3 Months Package -->
                        <div class="col-md-6">
                            <div class="p-4 bg-white rounded-4 border border-primary shadow-sm h-100 d-flex flex-column justify-content-between position-relative">
                                <span class="position-absolute top-0 end-0 badge bg-primary text-white rounded-pill m-3">Best Growth</span>
                                <div>
                                    <div class="text-primary small fw-bold text-uppercase mb-1">Package Offer (3 Months)</div>
                                    <div class="h2 fw-bold text-primary mb-2">₹25,000 <span class="fs-6 text-muted fw-normal">/ 3 Months</span></div>
                                    <p class="text-muted small mb-3">3-month package with one-time payment. Save ₹5,000 with steady brand building, trending content, and sustained engagement growth.</p>
                                </div>
                                <a href="https://wa.me/919117741984?text=Hi%2C%20I%20am%20interested%20in%20Social%20Media%20Marketing%203-Month%20Package%20(Rs%2025%2C000)" class="btn btn-primary w-100 rounded-pill fw-bold">
                                    <i class="bi bi-whatsapp me-1"></i> Book 3-Month Package
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</section>

    <!-- ============================================================== -->
    <!-- Dynamic We Serve Across India Section -->
    <?php $service_key = 'social-media-marketing'; if (function_exists('renderServiceLocationsSection')) { renderServiceLocationsSection($service_key, $base_url); } ?>
    <?php include 'common/footer.php'; ?>
</body>

</html>
