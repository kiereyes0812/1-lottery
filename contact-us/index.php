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
    <title>Contact Us</title>
    <meta name="description" content="Get in touch with 1 Lottery Game. Our support team is ready to help with account issues, gameplay questions, and more. Reach out anytime." />
   
    <link rel="canonical" href="https://1lotteryy.io/contact-us/" />
    <meta name="author" content="1Lottery Team" />
    <meta name="publisher" content="1 Lottery Game" />
    <link rel="alternate" hreflang="en-US" href="https://1lotteryy.io/contact-us/" />
    <meta property="og:title" content="Contact Us" />
    <meta property="og:description" content="Get in touch with 1 Lottery Game. Our support team is ready to help with account issues, gameplay questions, and more. Reach out anytime." />
    <meta property="og:url" content="https://1lotteryy.io/contact-us/" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="1 Lottery Game" />
    <meta property="og:image" content="https://1lotteryy.io/assets/image/1-Lottery-feature-images.webp" />
    <meta property="og:image:alt" content="1 Lottery Login" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Contact Us" />
    <meta name="twitter:description" content="Get in touch with 1 Lottery Game. Our support team is ready to help with account issues, gameplay questions, and more. Reach out anytime." />
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
          "@id": "https://1lotteryy.io/contact-us/#webpage",
          "url": "https://1lotteryy.io/contact-us/",
          "name": "Contact Us",
          "description": "Get in touch with 1 Lottery Game. Our support team is ready to help with account issues, gameplay questions, and more. Reach out anytime.",
          "isPartOf": {
            "@id": "https://1lotteryy.io/#website"
          },
          "publisher": {
            "@id": "https://1lotteryy.io/#organization"
          },
          "breadcrumb": {
            "@id": "https://1lotteryy.io/contact-us/#breadcrumb"
          },
          "inLanguage": "en-US"
        },
        {
          "@type": "BreadcrumbList",
          "@id": "https://1lotteryy.io/contact-us/#breadcrumb",
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
              "name": "Contact Us",
              "item": "https://1lotteryy.io/contact-us/"
            }
          ]
        }
      ]
    }
    </script>

</head>

<body>

  <?php include('../header.php'); ?>
  <section class="contact-section">
    <div class="container">
      <div class="h1head">
        
          <div class="heading-surface h1-surface">
            <h1>Contact Us</h1>
          </div>
        
      </div>
<div class="section inner-section">
       
        <p>At <a href="https://1lotteryy.io/">1 Lottery Game</a>, we believe every player’s voice matters. Whether you have a question, a problem,
          or just want to share your feedback, we are here to listen. Your messages help us improve and make
          the game more enjoyable for everyone.</p>
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
        <h2>How You Can Reach Us</h2>
        <p> You can easily connect with us through the Customer Service section on our platform or via our email– info@1lotteryy.io. To help us solve your
          issue quickly, please share details like your name, account ID, the issue you faced, and the time it
          happened. Adding a screenshot, if possible, makes it even easier for us to understand.</p>
      </div>

      <div class="section inner-section">
        <h2>Information to Share for Faster Help</h2>
        <p>When contacting us, it is helpful if you provide:</p>
        <ul>
          <li>Your registered name or account ID.</li>
          <li>The contact details linked to your account.</li>
          <li>A short description of your concern.</li>
          <li>The date and time it occurred.</li>
          <li>Any proof, such as screenshots.</li>
        </ul>
      </div>

      <div class="section inner-section">
        <h2>Support We Provide</h2>
        <p>Our support team is ready to help you with:</p>
        <ul>
          <li>Login and account-related issues.</li>
          <li>Fixing bugs or technical problems.</li>
          <li>Clearing doubts about gameplay.</li>
          <li>Listening to your ideas and feedback.</li>
        </ul>
      </div>

      <div class="section inner-section">
        <h2>How We Handle Your Messages</h2>
        <p>Every message is checked by our team with care. We reply in simple words so that everything is easy
          to understand. If more information is needed, we will politely ask before solving the issue.</p>
      </div>

      <div class="section inner-section">
        <h2>Our Promise to Players</h2>
        <ul>
          <li>Respectful and patient communication.</li>
          <li>Honest and clear responses.</li>
          <li>Protection of your personal information.</li>
          <li>No message is ever ignored.</li>
        </ul>
      </div>

      <div class="section inner-section">
        <h2>Response Time</h2>
        <p>We usually reply within 24 hours. On weekends or busy days, it might take a little longer, but we
          never miss your message.</p>
      </div>

      <div class="section inner-section">
        <h2>Your Privacy Matters</h2>
        <p>All details you share with us remain private. We do not share your information with anyone.
          Protecting your data is part of our promise. For more information, please check our <a href="https://1lotteryy.io/privacy-policy/">Privacy Policy</a> page.
</p>
      </div>

      <div class="section inner-section">
        <h2>If You Are Not Satisfied</h2>
        <p>If you feel your issue has not been fully solved, you can always contact us again. You also have the
          option to request help from a senior support team member.</p>
      </div>

      <div class="section inner-section">
        <h2>Support is Always Free</h2>
        <p>Getting help from our team is always free. If someone asks you for money in the name of support, it
          is not us, and you should report it immediately.</p>
      </div>

      <div class="section inner-section">
        <h2>Message to New Players</h2>
        <p>If you are new, remember there is no such thing as a silly question. We will guide you step by step
          and make sure your journey with 1 Lottery Game is smooth and simple.</p>
      </div>

      <div class="section inner-section">
        <h2>Final Words</h2>
        <p>We are always here when you need us. Communication helps us stay connected with you, and your trust
          is our top priority.</p>
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