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
    <title>Terms &amp; Conditions</title>
    <meta name="description" content="Read the Terms &amp; Conditions of 1 Lottery Game. Learn about user responsibilities, account rules, gameplay policies, and safe online lottery practices." />
   
    <link rel="canonical" href="https://1lotteryy.io/terms-conditions/" />
    <meta name="author" content="1Lottery Team" />
    <meta name="publisher" content="1 Lottery Game" />
    <link rel="alternate" hreflang="en-US" href="https://1lotteryy.io/terms-conditions/" />
    <meta property="og:title" content="Terms &amp; Conditions" />
    <meta property="og:description" content="Read the Terms &amp; Conditions of 1 Lottery Game. Learn about user responsibilities, account rules, gameplay policies, and safe online lottery practices." />
    <meta property="og:url" content="https://1lotteryy.io/terms-conditions/" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="1 Lottery Game" />
    <meta property="og:image" content="https://1lotteryy.io/assets/image/1-Lottery-feature-images.webp" />
    <meta property="og:image:alt" content="1 Lottery Login" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Terms &amp; Conditions" />
    <meta name="twitter:description" content="Read the Terms &amp; Conditions of 1 Lottery Game. Learn about user responsibilities, account rules, gameplay policies, and safe online lottery practices." />
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
          "@id": "https://1lotteryy.io/terms-conditions/#webpage",
          "url": "https://1lotteryy.io/terms-conditions/",
          "name": "Terms & Conditions",
          "description": "Read the Terms & Conditions of 1 Lottery Game. Learn about user responsibilities, account rules, gameplay policies, and safe online lottery practices.",
          "isPartOf": {
            "@id": "https://1lotteryy.io/#website"
          },
          "publisher": {
            "@id": "https://1lotteryy.io/#organization"
          },
          "breadcrumb": {
            "@id": "https://1lotteryy.io/terms-conditions/#breadcrumb"
          },
          "inLanguage": "en-US"
        },
        {
          "@type": "BreadcrumbList",
          "@id": "https://1lotteryy.io/terms-conditions/#breadcrumb",
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
              "name": "Terms & Conditions",
              "item": "https://1lotteryy.io/terms-conditions/"
            }
          ]
        }
      ]
    }
    </script>

</head>


<body>
    <?php include('../header.php'); ?>
    <section class="termsc-section">
        <div class="container">
            <div class="h1head">
                
          <div class="heading-surface h1-surface">
            <h1>Terms & Conditions</h1>
          </div>
        
            </div>
<div class="section inner-section">
                <p>These Terms & Conditions explain the rules for using <a href="https://1lotteryy.io/">1Lottery</a>. By joining and playing, you
                    agree to follow these terms. We have kept the language simple so everyone can read and understand it
                    clearly.</p>
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
                <h2>Purpose of These Terms</h2>
                <p>The purpose of these terms is to make sure the platform is safe, fair, and enjoyable for all players.
                    They also help build trust by setting out clear and transparent rules.</p>
            </div>

            <div class="section inner-section">
                <h2>Who Can Use the Platform</h2>
                <p>To use 1 Lottery Game, you must be of legal age in your country. By signing up, you agree to follow
                    all rules. You cannot use the platform for any illegal purpose. It is your responsibility to make
                    sure you are allowed to play according to your local laws.</p>
            </div>

            <div class="section inner-section">
                <h2>Account Registration</h2>
                <p>When creating an account, you must provide accurate details. You are responsible for keeping your
                    login information safe. Accounts are personal and cannot be transferred to others. If someone else
                    misuses your account, you will be held responsible.</p>
            </div>

            <div class="section inner-section">
                <h2>Your Responsibilities as a Player</h2>
                <p>As a player, you must:</p>
                <ul>
                    <li>Follow all game rules.</li>
                    <li>Show respect to staff and other players.</li>
                    <li>Avoid cheating, hacks, or unfair methods.</li>
                    <li>Not upload harmful, offensive, or illegal content.</li>
                </ul>
                <p>Breaking these rules may result in suspension or termination of your account.</p>
            </div>

            <div class="section inner-section">
                <h2>Our Responsibilities as a Platform</h2>
                <p>We aim to provide a safe, fair, and smooth gaming experience. We work to keep the site running
                    properly and protect your data as explained in our <a href="https://1lotteryy.io/privacy-policy/">Privacy Policy</a>. However, we cannot promise that
                    the service will never face interruptions.</p>
            </div>

            <div class="section inner-section">
                <h2>Game Rules</h2>
                <p>Each game has its own rules, which you must read and follow. We reserve the right to update or change
                    the rules if needed to keep the platform fair.</p>
            </div>

            <div class="section inner-section">
                <h2>Payments and Rewards</h2>
                <p>All deposits and withdrawals must follow the given instructions. You should only use your own payment
                    methods. You are responsible for your financial decisions, and we are not liable for losses caused
                    by mistakes you make.</p>
            </div>

            <div class="section inner-section">
                <h2>Fair Play Policy</h2>
                <p>All players are given equal chances. Multiple accounts, use of bots, or third-party tools are not
                    allowed. If you break these rules, your account may be suspended or closed.</p>
            </div>

            <div class="section inner-section">
                <h2>Intellectual Property</h2>
                <p>All content on 1 Lottery Game, including text, design, logos, and images, belongs to us. You may not
                    copy, share, or use this content without our permission.</p>
            </div>

            <div class="section inner-section">
                <h2>External Links</h2>
                <p>Sometimes, the platform may show links to other websites for your convenience. We are not responsible
                    for the content or safety of those sites. Please review their terms and policies separately.</p>
            </div>

            <div class="section inner-section">
                <h2>Changes to Platform</h2>
                <p>We may add, remove, or change features and games at any time. While we may not always give prior
                    notice, changes are made to improve the platform.</p>
            </div>

            <div class="section inner-section">
                <h2>Limitation of Liability</h2>
                <p>We are not responsible for technical issues beyond our control, data loss caused by internet
                    failures, or misuse of your account by others. By using the platform, you accept that you play at
                    your own risk.</p>
            </div>

            <div class="section inner-section">
                <h2>Suspension or Termination of Account</h2>
                <p>We may suspend or close accounts if:</p>
                <ul>
                    <li>The terms are broken.</li>
                    <li>The account is used illegally.</li>
                    <li>There is an attempt to harm the platform or other players.
                    </li>
                </ul>
                <p>We also have the right to close accounts that remain inactive for a long time.</p>
            </div>

            <div class="section inner-section">
                <h2>Privacy and Data Protection</h2>
                <p>Your data is handled as explained in our Privacy Policy. By using the platform, you agree to the
                    terms of that policy.</p>
            </div>

            <div class="section inner-section">
                <h2>Dispute Resolution</h2>
                <p>If you face any issue, you should first contact our support team through email or the <a href="https://1lotteryy.io/contact-us/">Contact Us</a>
                    page. We will try to resolve matters quickly and fairly.</p>
            </div>

            <div class="section inner-section">
                <h2>Amendments to Terms</h2>
                <p>We may update or change these Terms & Conditions at any time. The latest version will always be
                    available on this page. Please check regularly to stay updated.</p>
            </div>

            <div class="section inner-section">
                <h2>Your Agreement</h2>
                <p>By using 1 Lottery Game, you agree to follow these Terms & Conditions, game rules, and any updates
                    made in the future. You also agree to use the platform responsibly and respectfully.</p>
            </div>

            <div class="section inner-section">
                <h2>Contact Us</h2>
                <p>For any questions about these terms, you can contact us through the Contact Us page or by email. We
                    are committed to explaining anything that is unclear.</p>
            </div>

            <div class="section inner-section">
                <h2>Final Words</h2>
                <p>These Terms & Conditions are designed to protect both our players and the platform. Our goal is to
                    create a secure, fair, and enjoyable gaming environment. Thank you for trusting 1 Lottery Game. To
                    know more about our values, please visit our <a href="https://1lotteryy.io/about-us/">About Us</a> page.</p>
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