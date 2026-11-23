<!-- ✅ Critical Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<!-- ✅ AOS Animation CSS (Non-blocking) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" media="print" onload="this.media='all'">

<!-- ✅ Bootstrap Icons (Non-blocking) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" media="print" onload="this.media='all'">

<noscript>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</noscript>

<!-- ✅ Your Custom CSS (load last so overrides work properly - versioned for caching) -->
<link rel="stylesheet" href="<?= $base_url ?>assets/css/style.css?v=<?= APP_VERSION ?>">
