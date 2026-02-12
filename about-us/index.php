<?php
// Base URL setup (works on localhost subfolder and production root)
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$isLocal = ($host === 'localhost' || $host === '127.0.0.1');
$basePath = $isLocal ? '/1lotteryyio' : '';
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$BASE_URL = $protocol . '://' . $host . $basePath;
?>
<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <title>About Us</title>
    <meta name="description" content="Learn about 1 Lottery Game. Discover our mission, our values, and our commitment to providing a safe, fun, and fair online gaming experience." />
   
    <link rel="canonical" href="https://1lotteryy.io/about-us/" />
    <meta name="author" content="1Lottery Team" />
    <meta name="publisher" content="1 Lottery Game" />
    <link rel="alternate" hreflang="en-US" href="https://1lotteryy.io/about-us/" />
    <meta property="og:title" content="About Us" />
    <meta property="og:description" content="Learn about 1 Lottery Game. Discover our mission, our values, and our commitment to providing a safe, fun, and fair online gaming experience." />
    <meta property="og:url" content="https://1lotteryy.io/about-us/" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="1 Lottery Game" />
    <meta property="og:image" content="https://1lotteryy.io/assets/image/1-Lottery-feature-images.webp" />
    <meta property="og:image:alt" content="1 Lottery Login" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="About Us" />
    <meta name="twitter:description" content="Learn about 1 Lottery Game. Discover our mission, our values, and our commitment to providing a safe, fun, and fair online gaming experience." />
    <meta name="twitter:image" content="https://1lotteryy.io/assets/image/1-Lottery-feature-images.webp" />
    <meta name="twitter:image:alt" content="1 Lottery Login" />
    <link rel="icon" href="<?php echo $BASE_URL; ?>/assets/image/1lottery-favicon.webp" sizes="32x32" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo $BASE_URL; ?>/assets/image/1lottery-favicon.webp" />
    <meta name="theme-colour" content="#0d6efd" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Sitemap & Feeds -->
    <link rel="sitemap" type="application/xml" title="Sitemap" href="https://1lotteryy.io/sitemap.xml" />
    <link rel="alternate" type="application/rss+xml" title="1Lottery RSS Feed" href="https://1lotteryy.io/feed.xml" />
    <!-- CSS & Libraries -->
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

    <!-- Schema.org JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://1lotteryy.io/#organization",
          "name": "1 Lottery Game",
          "url": "https://1lotteryy.io/",
          "logo": {
            "@type": "ImageObject",
            "url": "https://1lotteryy.io/assets/image/1lottery-logo.webp"
          },
          "description": "1 Lottery is an online gaming platform offering color prediction style games and rewards."
        },
        {
          "@type": "WebSite",
          "@id": "https://1lotteryy.io/#website",
          "url": "https://1lotteryy.io/",
          "name": "1 Lottery Game",
          "publisher": {
            "@id": "https://1lotteryy.io/#organization"
          }
        },
        {
          "@type": "WebPage",
          "@id": "https://1lotteryy.io/about-us/#webpage",
          "url": "https://1lotteryy.io/about-us/",
          "name": "About Us",
          "description": "Learn about 1 Lottery Game. Discover our mission, our values, and our commitment to providing a safe, fun, and fair online gaming experience.",
          "isPartOf": {
            "@id": "https://1lotteryy.io/#website"
          },
          "publisher": {
            "@id": "https://1lotteryy.io/#organization"
          },
          "breadcrumb": {
            "@id": "https://1lotteryy.io/about-us/#breadcrumb"
          },
          "inLanguage": "en-US"
        },
        {
          "@type": "BreadcrumbList",
          "@id": "https://1lotteryy.io/about-us/#breadcrumb",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "https://1lotteryy.io/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "About Us",
              "item": "https://1lotteryy.io/about-us/"
            }
          ]
        }
      ]
    }
    </script>

</head>


<body>

  <?php include('../header.php'); ?>
  <section class="about-section">
    <div class="container">
      <div class="h1head">
        
          <div class="heading-surface h1-surface">
            <h1>About Us</h1>
          </div>
        
      </div>
<div class="section inner-section">
        <p>The<a href="https://1lotteryy.io/"> 1 Lottery Game</a> is a place made for people who enjoy light, fun, and safe gaming. We started this
          platform with
          one simple idea – games should bring joy, not stress. Our focus has always been on giving players a
          fair,
          simple, and secure experience.</p>
      </div>

        <nav class="content-block toc-card" data-toc-static aria-label="Table of contents">
          <button class="toc-toggle" type="button" aria-expanded="false">
            <span class="toc-arrow" aria-hidden="true">▾</span>
            <span class="toc-title">Table of Contents</span>
          </button>

          <div class="toc-panel" hidden>
            <ol class="toc-list" data-toc></ol>
          </div>
        </nav>

      


      <div class="section inner-section">
        <h2>Our Mission</h2>
        <p>Our mission is to build a trusted space where everyone can play without worry. We encourage
          responsible play
          and want every player to feel welcome as part of the 1 Lottery Game community.</p>
      </div>

      <div class="section inner-section">
        <h2>Our Values</h2>
        <ul>
          <li><b>Trust</b> – Every player has the same fair chance.</li>
          <li><b>Safety</b> – Your account and details are always protected.</li>
          <li><b>Simplicity</b> – Easy rules and a clear design for smooth play.</li>
          <li><b>Care</b> – Support that goes beyond the game itself.</li>
        </ul>
      </div>

      <div class="section inner-section">
        <h2>How We Care for Our Players</h2>
        <p>We guide new players with training and simple tips. Our team is always ready to answer questions and
          help
          players learn healthy gaming habits.</p>
      </div>

      <div class="section inner-section">
        <h2>Why People Prefer 1 Lottery Game</h2>
        <p>Players choose 1 Lottery Game because it’s easy to start, simple to understand, and fair for
          everyone. Our
          support team is quick and helpful, making the whole experience smooth.</p>
      </div>

      <div class="section inner-section">
        <h2>Helping New Players</h2>
        <p>1 Lottery Game is designed for all age groups. Clear instructions and simple language make it
          beginner-friendly, so anyone can start without confusion.</p>
      </div>

      <div class="section inner-section">
        <h2>Safe and Responsible Gaming</h2>
        <p>We believe gaming should always stay balanced. That’s why we remind players to take breaks, set
          limits, and
          enjoy the game in a healthy way. Our <a href="https://1lotteryy.io/responsible-gaming/">Responsible Gaming</a> page gives more guidance for safe play.</p>
      </div>

      <div class="section inner-section">
        <h2>Respect for Every Player</h2>
        <p>Every player is important to us, whether beginner or experienced. We stand against unfair practices
          and respect
          your privacy with clear and transparent policies.</p>
      </div>

      <div class="section inner-section">
        <h2>Our Promise to You</h2>
        <p>We promise to keep 1 Lottery Game secure, fair, and easy to use. Your feedback matters, and we are
          always
          working to improve while keeping your trust first.</p>
      </div>

      <div class="section inner-section">
        <h2>Contact Us Anytime</h2>
        <p>If you need help or have suggestions, you can always reach us through our <a href="https://1lotteryy.io/contact-us/">Contact Us</a> page or by
          email. We are
          happy to hear from you.</p>
      </div>

      <div class="section inner-section">
        <h2>Looking Ahead</h2>
        <p>Our team is working on adding new features and better technology. While we grow, our focus will
          always remain
          on safety, simplicity, and care for our players.</p>
      </div>

      <div class="section inner-section">
        <h2>Final Words</h2>
        <p>At 1 Lottery Game, we believe gaming should be smart, safe, and fun. We invite you to be part of our
          growing
          community and enjoy the experience with confidence.</p>
      </div>


    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <?php include('../footer.php') ?>
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>