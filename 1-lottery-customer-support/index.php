<?php
// Base URL setup (works on localhost subfolder and production root)
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$isLocal = ($host === 'localhost' || $host === '127.0.0.1');
$basePath = $isLocal ? '/1lotteryyio' : '';
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$BASE_URL = $protocol . '://' . $host . $basePath;
?>
<!doctype html>
<html lang="en-IN">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>1 Lottery Customer Support</title>
  <meta name="description" content="Learn how to contact the 1 Lottery customer service and what issues to resolve. This customer support guide provides you with everything you need to know.">
  <meta name="robots" content="index, follow">

  <link rel="canonical" href="https://1lotteryy.io/1-lottery-customer-support/">

  <meta property="og:title" content="1 Lottery Customer Support">
  <meta property="og:description" content="Learn how to contact the 1 Lottery customer service and what issues to resolve. This customer support guide provides you with everything you need to know.">
  <meta property="og:url" content="https://1lotteryy.io/1-lottery-customer-support/">
  <meta property="og:type" content="article">
  <meta property="og:site_name" content="1 Lottery">
  <meta property="og:image" content="https://1lotteryy.io/assets/image/customer-support.webp">
  <meta property="og:image:alt" content="1 Lottery Customer Support">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="1 Lottery Customer Support">
  <meta name="twitter:description" content="Learn how to contact the 1 Lottery customer service and what issues to resolve. This customer support guide provides you with everything you need to know.">
  <meta name="twitter:image" content="https://1lotteryy.io/assets/image/customer-support.webp">
  <meta name="twitter:image:alt" content="1 Lottery Customer Support">

  <link rel="icon" href="<?php echo $BASE_URL; ?>/assets/image/1lottery-favicon.webp" sizes="32x32" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo $BASE_URL; ?>/assets/image/1lottery-favicon.webp">

  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

  <style>
    .article-image { max-width: 100%; height: auto; border-radius: 10px; }
    .figure-wrap { margin: 14px 0; }
    .figure-caption { font-size: 14px; opacity: 0.85; margin-top: 6px; }

    /* Force page content left aligned */
    .h1head { text-align: left !important; }
    .about-section .inner-section { text-align: left !important; }
    .about-section .inner-section h2,
    .about-section .inner-section h3,
    .about-section .inner-section p,
    .about-section .inner-section li { text-align: left !important; }

    /* FAQ dropdown overrides to fix white text + right-aligned question */
    .faq-section .dg-box { text-align: left !important; }
    .faq-section .h2heading { text-align: left !important; }

    .faq-section .faq-item {
      cursor: pointer;
      border: 1px solid rgba(0,0,0,0.12);
      border-radius: 10px;
      padding: 14px;
      margin-bottom: 12px;
      background: #fff;
    }

    .faq-section .faq-question {
      display: flex;
      align-items: center;
      justify-content: flex-start !important;
      gap: 10px;
      width: 100%;
      text-align: left !important;
    }

    .faq-section .faq-question h3 {
      margin: 0;
      font-size: 18px;
      color: #111 !important;
      text-align: left !important;
    }

    .faq-section .faq-answer {
      display: none;
      padding-top: 10px;
      text-align: left !important;
    }

    .faq-section .faq-answer p {
      margin: 0;
      color: #111 !important;
      text-align: left !important;
    }

    .faq-section .faq-item.active .faq-answer { display: block; }

    .faq-section .arrow {
      width: 10px;
      height: 10px;
      border-right: 2px solid rgba(0,0,0,0.6);
      border-bottom: 2px solid rgba(0,0,0,0.6);
      transform: rotate(-45deg);
      transition: transform 0.2s ease;
      flex: 0 0 auto;
    }

    .faq-section .faq-item.active .arrow { transform: rotate(45deg); }
  </style>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "WebPage",
        "@id": "https://1lotteryy.io/1-lottery-customer-support/#webpage",
        "url": "https://1lotteryy.io/1-lottery-customer-support/",
        "name": "1 Lottery Customer Support",
        "description": "Learn how to contact the 1 Lottery customer service and what issues to resolve. This customer support guide provides you with everything you need to know.",
        "isPartOf": { "@id": "https://1lotteryy.io/#website" }
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://1lotteryy.io/1-lottery-customer-support/#breadcrumb",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://1lotteryy.io/" },
          { "@type": "ListItem", "position": 2, "name": "1 Lottery Customer Support", "item": "https://1lotteryy.io/1-lottery-customer-support/" }
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
        <h1>1 Lottery Customer Support</h1>
      </div>

      <div class="section inner-section">
        <div class="figure-wrap">
          <img class="article-image" src="<?php echo $BASE_URL; ?>/assets/image/customer-support.webp" alt="1 Lottery Customer Support featured image">
          <div class="figure-caption">Guide to contacting 1 Lottery customer support inside the app.</div>
        </div>

        <p>
          The 1 Lottery customer support team is available 24/7 to help with account, login, verification,
          wallet, or app-related issues. If you are searching for 1 Lottery customer service because something is not working,
          this page shows the easiest ways to contact support before login and after login.
        </p>
        <p>
          It also explains what to keep ready so you can get a faster solution through the official helpdesk.
        </p>
      </div>

      <div class="section inner-section">
        <h2>Why do you need customer support?</h2>
        <p>
          Customer support helps keep your experience smooth and secure. When you contact the helpdesk, the team can guide you step-by-step,
          check your issue, and share the correct solution based on your situation.
        </p>

        <ul>
          <li><b>Technical help:</b> App not opening, crashing, or not updating properly.</li>
          <li><b>Account safety:</b> Guidance if you feel your account is at risk.</li>
          <li><b>Wallet and transaction help:</b> Deposit errors, pending status, or <a href="<?php echo $BASE_URL; ?>/1-lottery-withdraw/">withdrawal</a> delays.</li>
          <li><b>Feature guidance:</b> Help understanding offers, rules, and in-app settings.</li>
          <li>
            <b>Codes and programs:</b> Help if you have confusion using an
            <a href="<?php echo $BASE_URL; ?>/1-lottery-invite-code/">1 Lottery invite code</a>
            or
            <a href="<?php echo $BASE_URL; ?>/1-lottery-gift-code/">1 Lottery gift code</a>.
          </li>
        </ul>

        <div class="table-responsive">
          <table class="table table-bordered align-middle">
            <thead>
              <tr>
                <th>Support benefit</th>
                <th>How it helps you</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Quick issue handling</td>
                <td>Less waiting and less confusion</td>
              </tr>
              <tr>
                <td>Simple guidance</td>
                <td>Better understanding of features and steps</td>
              </tr>
              <tr>
                <td>Account safety</td>
                <td>Protection from misuse and risky actions</td>
              </tr>
              <tr>
                <td>Fair review process</td>
                <td>Proper handling of complaints and disputes</td>
              </tr>
              <tr>
                <td>Better platform improvement</td>
                <td>Your feedback helps improve the app</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="section inner-section">
        <h2>How can you contact the 1 Lottery customer care?</h2>
        <p>
          You can contact support in two main ways: before login and after login. Many users search for a customer care number,
          but the fastest option is the in-app Customer Service portal, which opens the official helpdesk chat.
        </p>

        <h3>Method 1: Contact support before login</h3>
        <ol>
          <li>Open the app and go to the <a href="https://d1lotteryo.com/#/login">Login</a> screen.</li>
          <li>Find the <b>Customer Service</b> option near the bottom.</li>
          <li>Tap it to open a list of issue categories.</li>
          <li>Select the issue you are facing.</li>
          <li>The official helpdesk chat will open. Type your message clearly and send it.</li>
        </ol>

        <div class="figure-wrap">
          <img class="article-image" src="<?php echo $BASE_URL; ?>/assets/image/click-customer-service.webp" alt="Click Customer Service on the login screen">
          <div class="figure-caption">Customer Service option on the Login screen.</div>
        </div>

        <h3>Method 2: Contact support after login</h3>
        <ol>
          <li>Log in to your account.</li>
          <li>Tap the <b>Account</b> section in the bottom navigation.</li>
          <li>Tap <b>Customer Service</b>.</li>
          <li>Select your issue category and open it.</li>
          <li>Send your message with the correct details.</li>
        </ol>

        <p>
          If you are new and not registered yet, complete
          <a href="https://d1lotteryo.com/register">1 Lottery register</a>
          and then contact support from inside your account if needed.
        </p>
      </div>

      <div class="section inner-section">
        <h2>Which issues can the customer support team help you with?</h2>
        <p>
          Support handles both simple and advanced issues, including password resets, login problems, wallet checks,
          verification questions, and technical bugs.
        </p>

        <h3>Issues that are usually resolved quickly (within hours)</h3>
        <ul>
          <li><b>Password reset help:</b> Guidance if you forget your password.</li>
          <li><b>Login issues:</b> Missing OTP, login errors, or repeated failures.</li>
          <li><b>Temporary restriction review:</b> Steps if your account shows a temporary lock.</li>
          <li>
            <b>Gift code help:</b> If your
            <a href="<?php echo $BASE_URL; ?>/1-lottery-gift-code/">1 Lottery gift code</a>
            is not applying, support can help check common reasons.
          </li>
          <li><b>Basic guidance:</b> Simple questions about how a feature works.</li>
        </ul>

        <h3>Issues that may take 1 to 3 days</h3>
        <ul>
          <li><b>Wallet and payment checks:</b> Deposit pending, failed status, or mismatch details.</li>
          <li><b>Verification support:</b> Help with account verification and document checks (when required).</li>
          <li><b>Withdrawal delay tracking:</b> Transaction verification and status checks.</li>
          <li><b>Offer and bonus correction:</b> If an offer is not reflected properly, support can review it.</li>
        </ul>

        <h3>Issues that may take 3 to 7 days</h3>
        <ul>
          <li><b>Security reviews:</b> Suspicious activity checks and account protection steps.</li>
          <li><b>Bug investigation:</b> Repeated crashes or technical issues that need deeper review.</li>
          <li><b>Policy concerns:</b> Account restriction reasons and review requests.</li>
          <li><b>Dispute review:</b> If you request a session review, it follows a checking process.</li>
        </ul>

        <p>
          If you are using features like <a href="<?php echo $BASE_URL; ?>/1-lottery-aviator/">1 Lottery Aviator</a>
          or reading tips for <a href="<?php echo $BASE_URL; ?>/1-lottery-prediction/">1 Lottery prediction</a>,
          support can guide you to rules and help pages, but outcomes are never guaranteed.
        </p>
      </div>

      <div class="section inner-section">
        <h2>Tips to get a faster solution</h2>
        <ul>
          <li>Explain your issue clearly (what happened, when, and what you tried).</li>
          <li>Keep your UID, registered phone number, and transaction ID ready (for wallet issues).</li>
          <li>Attach screenshots if the app shows an error message.</li>
          <li>Select the correct issue category to reach the right team faster.</li>
          <li>Use clear, polite messages to avoid delays.</li>
        </ul>

        <p>
          If your question is about programs like <a href="<?php echo $BASE_URL; ?>/1-lottery-teacher/">1 Lottery teacher</a>
          or referral benefits via <a href="<?php echo $BASE_URL; ?>/1-lottery-referral/">1 Lottery referral</a>,
          mention that clearly so support can guide you to the correct section.
        </p>
      </div>

      <div class="section inner-section">
        <h2>What to remember before contacting support</h2>
        <ul>
          <li>Use only the official in-app Customer Service option or the official helpdesk shown there.</li>
          <li>Never share your password or OTP with anyone.</li>
          <li>Do not upload sensitive documents unless the official helpdesk asks for them.</li>
          <li>Check your internet connection so messages send properly.</li>
          <li>Complex issues can take longer because they may require investigation.</li>
        </ul>
      </div>

      <div class="section inner-section">
        <h2>Conclusion</h2>
        <p>
          1 Lottery customer service helps keep the platform smooth, safe, and easy to use. If you face any issue,
          contact the in-app helpdesk and share the right details to get faster support.
        </p>
      </div>

    </div>
  </section>

  <section class="faq-section jalwa-section" id="faqs">
    <div class="container content-border">
      <div class="row">
        <div class="col-12">
          <div class="dg-box">
            <div class="h2heading">
              <h2>Frequently Asked Questions</h2>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Is 1 Lottery customer support available 24/7?</h3>
              </div>
              <div class="faq-answer">
                <p>Yes. Support is available 24/7 through the in-app Customer Service option.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Can the customer care team help if I forget my password?</h3>
              </div>
              <div class="faq-answer">
                <p>Yes. Use the Forgot Password option first, and contact support if you still face trouble.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Can I contact support before logging in?</h3>
              </div>
              <div class="faq-answer">
                <p>Yes. Use the Customer Service option on the Login screen and send your issue through the helpdesk.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>What details should I share for faster help?</h3>
              </div>
              <div class="faq-answer">
                <p>Share your UID or registered phone number, your issue details, and a transaction ID if the issue is wallet-related.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>What should I do if my withdrawal is delayed?</h3>
              </div>
              <div class="faq-answer">
                <p>Keep your transaction details ready and contact support from the Customer Service section for a status check.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Is my data safe when I contact customer service?</h3>
              </div>
              <div class="faq-answer">
                <p>Use only official channels and never share your OTP or password with anyone.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>What if my account shows a temporary restriction?</h3>
              </div>
              <div class="faq-answer">
                <p>Contact support with your registered details so the team can guide you through the review steps.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Can support help with gift code issues?</h3>
              </div>
              <div class="faq-answer">
                <p>Yes. If your gift code is not applying, share the code and a screenshot of the error (if any) in the helpdesk chat.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Can support help with invite code or referral confusion?</h3>
              </div>
              <div class="faq-answer">
                <p>Yes. Contact support and share what you see on your screen so the team can guide you correctly.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Does support provide guaranteed strategy tips?</h3>
              </div>
              <div class="faq-answer">
                <p>Support can guide you to rules and help pages, but outcomes are never guaranteed.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function toggleFAQ(item) {
      if (!item) return;
      item.classList.toggle('active');
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="../js/custom.js"></script>
  <?php include('../footer.php'); ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>
