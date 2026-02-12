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
    <title>Disclaimer</title>
    <meta name="description" content="Read the Disclaimer for 1 Lottery Game. Understand your responsibilities, platform limits, and terms of safe and fair online lottery usage." />
   
    <link rel="canonical" href="https://1lotteryy.io/disclaimer/" />
    <meta name="author" content="1Lottery Team" />
    <meta name="publisher" content="1 Lottery Game" />
    <link rel="alternate" hreflang="en-US" href="https://1lotteryy.io/disclaimer/" />
    <meta property="og:title" content="Disclaimer" />
    <meta property="og:description" content="Read the Disclaimer for 1 Lottery Game. Understand your responsibilities, platform limits, and terms of safe and fair online lottery usage." />
    <meta property="og:url" content="https://1lotteryy.io/disclaimer/" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="1 Lottery Game" />
    <meta property="og:image" content="https://1lotteryy.io/assets/image/1-Lottery-feature-images.webp" />
    <meta property="og:image:alt" content="1 Lottery Login" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Disclaimer" />
    <meta name="twitter:description" content="Read the Disclaimer for 1 Lottery Game. Understand your responsibilities, platform limits, and terms of safe and fair online lottery usage." />
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
          "@id": "https://1lotteryy.io/disclaimer/#webpage",
          "url": "https://1lotteryy.io/disclaimer/",
          "name": "Disclaimer",
          "description": "Read the Disclaimer for 1 Lottery Game. Understand your responsibilities, platform limits, and terms of safe and fair online lottery usage.",
          "isPartOf": {
            "@id": "https://1lotteryy.io/#website"
          },
          "publisher": {
            "@id": "https://1lotteryy.io/#organization"
          },
          "breadcrumb": {
            "@id": "https://1lotteryy.io/disclaimer/#breadcrumb"
          },
          "inLanguage": "en-US"
        },
        {
          "@type": "BreadcrumbList",
          "@id": "https://1lotteryy.io/disclaimer/#breadcrumb",
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
              "name": "Disclaimer",
              "item": "https://1lotteryy.io/disclaimer/"
            }
          ]
        }
      ]
    }
    </script>

</head>

<body>

    <?php include('../header.php'); ?>
    <section class="diclaimer-section">
        <div class="container">
            <div class="h1head">
                
          <div class="heading-surface h1-surface">
            <h1>Disclaimer</h1>
          </div>
        
            </div>
<div class="section inner-section">
            
                <p>This Disclaimer explains important points you need to know before using <a href="https://1lotteryy.io/">1 Lottery Login</a>. By using the
                    site or playing games, you agree to this Disclaimer. Please read it carefully before starting.</p>
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
                <h2>Purpose of This Disclaimer</h2>
                <p>The purpose of this Disclaimer is to make clear what the platform can promise and what it cannot. It
                    also explains the responsibilities of both the user and the platform, so there is full transparency.
                </p>
            </div>

            <div class="section inner-section">
                <h2>Information on the Website</h2>
                <p>We make every effort to keep information correct and updated. However, the content on this site is
                    for general use only. Some information may become outdated, contain errors, or have small omissions.
                    If you notice anything incorrect, you are welcome to inform us.</p>
            </div>

            <div class="section inner-section">
                <h2>Your Role as a Player</h2>
                <p>As a player, you are fully responsible for your own actions. You must:</p>
                <ul>
                    <li>Accept and follow the <a href="https://1lotteryy.io/terms-conditions/">Terms & Conditions</a>.</li>
                    <li>Play safely and responsibly.</li>
                    <li>Keep your account information private.</li>
                    <li>Follow the laws of your own country or state.</li>
                </ul>
                <p>If you break local laws, the platform will not be responsible.</p>
            </div>

            <div class="section inner-section">
                <h2>Our Role as the Service Provider</h2>
                <p>We aim to provide a safe and fair environment for all players. However, we are not responsible for:
                </p>
                <ul>
                    <li>Internet or connectivity issues.</li>
                    <li>Mistakes made by players during registration or payments.</li>
                    <li>Misuse of your account by others.</li>
                    <li>Technical failures outside of our control.</li>
                </ul>
            </div>

            <div class="section inner-section">
                <h2>External Links</h2>
                <p>Our site may contain links to other websites. These are added for your convenience. We are not
                    responsible for the content, safety, or policies of third-party sites. You should review their terms
                    separately.</p>
            </div>

            <div class="section inner-section">
                <h2>Changes in the Game or Website</h2>
                <p>We may update, change, or remove features at any time. Updates will be shown on the platform, and it
                    is your responsibility to stay informed.</p>
            </div>

            <div class="section inner-section">
                <h2>No Assurance of Permanent Availability</h2>
                <p>We work hard to keep the site online and smooth. Still, there may be downtime because of maintenance
                    or technical issues. We cannot guarantee that the platform will always be available without
                    interruption.</p>
            </div>

            <div class="section inner-section">
                <h2>Financial Accountability</h2>
                <p>You are responsible for your own funds, deposits, and payments. The platform is not liable for any
                    losses caused by poor judgment, misuse of accounts, or technical problems beyond our control. Always
                    play sensibly.</p>
            </div>

            <div class="section inner-section">
                <h2>Legal Compliance</h2>
                <p>It is your duty to follow the gaming laws of your country or state. The platform is not responsible
                    if you break local gaming laws.</p>
            </div>

            <div class="section inner-section">
                <h2>Personal Advice and Information</h2>
                <p>All content on the site is meant as general guidance. It is not personal or professional advice. You
                    should use your own judgment before acting on any information.</p>
            </div>

            <div class="section inner-section">
                <h2>User Content</h2>
                <p>If you share any content such as comments or suggestions, the platform may use it to improve
                    services. However, we are not responsible for the accuracy or safety of content shared by other
                    users.</p>
            </div>

            <div class="section inner-section">
                <h2>Technical Limitations</h2>
                <p>No technology is perfect. Bugs, glitches, or errors may occur. We will always try to fix problems
                    quickly, but we cannot promise a system without flaws.</p>
            </div>

            <div class="section inner-section">
                <h2>Your Agreement</h2>
                <p>By using this site, you confirm that you have read and accepted this Disclaimer. You agree to take
                    responsibility for your own actions and follow all Terms & Conditions and platform rules.</p>
            </div>

            <div class="section inner-section">
                <h2>Modification of Disclaimer</h2>
                <p>We may update or change this Disclaimer at any time. Changes will be posted on this page. It is your
                    responsibility to check this page regularly.</p>
            </div>

            <div class="section inner-section">
                <h2>Contact Us for Inquiry</h2>
                <p>If you have questions about this Disclaimer, you can reach us through the <a href="https://1lotteryy.io/contact-us/">Contact Us</a> page or email
                    us. We are happy to explain in simple terms if needed.</p>
            </div>

            <div class="section inner-section">
                <h2>Last Words</h2>
                <p>The purpose of this Disclaimer is to protect both players and the platform. We remind you to use the
                    site responsibly, legally, and with care. Thank you for trusting 1 Lottery Game. Your safety and
                    enjoyment are always our priority.</p>
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