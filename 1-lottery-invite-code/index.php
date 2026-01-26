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

  <title>1 Lottery Invite Code</title>
  <meta name="description" content="Get your 1 Lottery Invite Code to earn rewards, bonuses, and exclusive player benefits. Join now and enjoy a seamless gaming experience with great features!">
  <meta name="robots" content="index, follow">

  <link rel="canonical" href="https://1lotteryy.io/1-lottery-invite-code/">

  <meta property="og:title" content="1 Lottery Invite Code">
  <meta property="og:description" content="Get your 1 Lottery Invite Code to earn rewards, bonuses, and exclusive player benefits. Join now and enjoy a seamless gaming experience with great features!">
  <meta property="og:url" content="https://1lotteryy.io/1-lottery-invite-code/">
  <meta property="og:type" content="article">
  <meta property="og:site_name" content="1 Lottery">
  <meta property="og:image" content="https://1lotteryy.io/assets/image/lottery-invite-code.webp">
  <meta property="og:image:alt" content="1 Lottery Invite Code">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="1 Lottery Invite Code">
  <meta name="twitter:description" content="Get your 1 Lottery Invite Code to earn rewards, bonuses, and exclusive player benefits. Join now and enjoy a seamless gaming experience with great features!">
  <meta name="twitter:image" content="https://1lotteryy.io/assets/image/lottery-invite-code.webp">
  <meta name="twitter:image:alt" content="1 Lottery Invite Code">

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

    /* FAQ dropdown overrides (readable text + left-aligned question) */
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
        "@id": "https://1lotteryy.io/1-lottery-invite-code/#webpage",
        "url": "https://1lotteryy.io/1-lottery-invite-code/",
        "name": "1 Lottery Invite Code",
        "description": "Get your 1 Lottery Invite Code to earn rewards, bonuses, and exclusive player benefits. Join now and enjoy a seamless gaming experience with great features!",
        "isPartOf": { "@id": "https://1lotteryy.io/#website" }
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://1lotteryy.io/1-lottery-invite-code/#breadcrumb",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://1lotteryy.io/" },
          { "@type": "ListItem", "position": 2, "name": "1 Lottery Invite Code", "item": "https://1lotteryy.io/1-lottery-invite-code/" }
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
        <h1>1 Lottery Invite Code</h1>
      </div>

      <div class="section inner-section">
        <div class="figure-wrap">
          <img class="article-image" src="<?php echo $BASE_URL; ?>/assets/image/lottery-invite-code.webp" alt="1 Lottery Invite Code featured image">
          <div class="figure-caption">Invite code option inside the 1 Lottery app.</div>
        </div>

        <p>
          Joining the 1 Lottery app? You can make the start more rewarding using a <b>1 Lottery invite code</b>.
          An invite code is a simple code that is assigned to every user. When a new user enters an invite code during registration,
          they may receive a joining reward.
        </p>
        <p>
          The user who shared the invite code can also receive a reward. This makes it a simple referral system where both users benefit.
          Invite codes are easy to find, easy to share, and free to use.
        </p>
      </div>

      <div class="section inner-section">
        <h2>1. What is a 1 Lottery Invite Code?</h2>
        <p>
          A 1 Lottery invite code is a unique code connected to your account. It helps the app identify which existing user invited a new user.
          When the new user registers using that code, the app can apply referral rewards automatically.
        </p>
        <p>
          Every account has its own invite code. You can share it with friends, family, or anyone who wants to join.
          If you want a different type of reward code, check
          <a href="<?php echo $BASE_URL; ?>/1-lottery-gift-code/">1 Lottery Gift Code</a>.
        </p>
      </div>

      <div class="section inner-section">
        <h2>2. How to Get Your 1 Lottery Invite Code</h2>
        <p>
          You do not need to apply for an invite code. After you create an account, the app automatically assigns you a unique code.
          You can find it inside the Promotions section after login.
        </p>

        <h3>2.1 Steps to Generate Your Invite Code</h3>
        <p>
          The code is already generated after registration. You only need to open the correct section to view or copy it.
        </p>
        <ol>
          <li>Open the 1 Lottery app.</li>
          <li>Log in using your registered phone number or email.</li>
          <li>Tap <b>Promotion</b> (Promotions) on the bottom menu.</li>
          <li>Open the invite or agency area and copy your invite code or invitation link.</li>
        </ol>

        <h3>2.2 Where to Find Your Invite Code in the App</h3>
        <p>
          After you open Promotions, you typically see options like <b>Invitation Link</b> and <b>Copy invitation code</b>.
          You can share either the code or the direct link.
        </p>

        <div class="figure-wrap">
          <img class="article-image" src="<?php echo $BASE_URL; ?>/assets/image/lottery-app-login-screen.jpg" alt="1 Lottery app login screen">
          <div class="figure-caption">Log in first, then open Promotions to find your invite code.</div>
        </div>
      </div>

      <div class="section inner-section">
        <h2>3. How to Use 1 Lottery Invite Code</h2>
        <p>
          You can use an invite code while creating a new account. This is the most common and most reliable time to apply it.
          Some users also focus on sharing their code after registration to increase referral rewards.
        </p>

        <h3>3.1 Applying Invite Code During Registration</h3>
        <p>
          During signup, the registration screen includes a field for the invite code. Enter the code carefully (or paste it).
          After registration and login, the system may apply the joining reward.
        </p>
        <p>
          If you have not created an account yet, start here:
          <a href="<?php echo $BASE_URL; ?>/1-lottery-register/">1 Lottery Register</a>.
        </p>

        <h3>3.2 Using Invite Code for Bonus Rewards</h3>
        <p>
          Once you have your own invite code, you can share it with others. If they register using your code, you can receive referral rewards.
          Many users share the code through WhatsApp, Telegram groups, or with friends and family directly.
        </p>
      </div>

      <div class="section inner-section">
        <h2>4. Benefits of Using Invite Codes</h2>
        <p>
          Invite codes are mainly used because they provide extra value at the start and encourage sharing.
          Common benefits include:
        </p>
        <ul>
          <li><b>Extra reward at signup:</b> New users may receive a joining bonus.</li>
          <li><b>Referral rewards:</b> Existing users can earn when someone joins using their code.</li>
          <li><b>Easy sharing:</b> Copy and share in seconds.</li>
          <li><b>No extra cost:</b> Invite codes are free.</li>
        </ul>
      </div>

      <div class="section inner-section">
        <h2>5. Referral Rewards System in 1 Lottery</h2>
        <p>
          The referral system is built to reward both the person who invites and the person who joins. The exact reward amount can vary
          depending on current app rules and campaigns.
        </p>

        <h3>5.1 Rewards for Inviter</h3>
        <p>
          The inviter is the existing user who shares their invite code. When a new user registers using that code,
          the inviter may receive a bonus or balance credit in their account.
        </p>

        <h3>5.2 Rewards for Invitee</h3>
        <p>
          The invitee is the new user who registers using the invite code. The invitee may receive a welcome reward after successful registration and login.
        </p>
      </div>

      <div class="section inner-section">
        <h2>6. Terms &amp; Conditions of Invite Codes</h2>
        <p>
          Invite codes are simple, but a few rules usually apply to keep the system fair:
        </p>
        <ul>
          <li>Each player has only one invite code.</li>
          <li>A player cannot use an invite code more than once to register.</li>
          <li>You cannot use your own invite code to get rewards.</li>
          <li>The code must be entered correctly to receive bonuses.</li>
        </ul>
      </div>

      <div class="section inner-section">
        <h2>7. Common Issues with Invite Codes</h2>
        <p>
          If an invite code does not work, the reason is usually simple. Below are the most common problems and what to do next.
        </p>

        <h3>7.1 Code Not Accepted</h3>
        <p>
          This is often caused by typing mistakes. Copy and paste the code when possible to avoid errors.
          Also check that the code is entered in the correct field during registration.
        </p>

        <h3>7.2 No Bonus Credited</h3>
        <p>
          Rewards may take a few minutes to appear. If you still do not see the reward after some time,
          confirm the invite code was applied correctly during signup and that your internet connection was stable.
        </p>
      </div>

      <div class="section inner-section">
        <h2>8. Safety &amp; Fair Use of Invite Codes</h2>
        <p>
          Use invite codes safely to protect your account and avoid problems.
        </p>
        <ul>
          <li>Use invite codes only from trusted sources.</li>
          <li>Never share passwords, OTP, or payment details when sharing a code.</li>
          <li>Avoid creating fake or multiple accounts to increase rewards.</li>
          <li>Use official app features and official support if you face issues.</li>
        </ul>
      </div>

      <div class="section inner-section">
        <h2>9. Comparing Invite Codes vs Gift Codes</h2>
        <p>
          Invite codes and gift codes both provide rewards, but they work differently. Invite codes are mainly used during registration,
          while gift codes are usually released by the app team for players to redeem.
        </p>

        <div class="table-responsive">
          <table class="table table-bordered align-middle">
            <thead>
              <tr>
                <th>Invite Code</th>
                <th>Gift Code</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Shared by a player to invite new users</td>
                <td>Released by the platform for users to redeem</td>
              </tr>
              <tr>
                <td>Commonly used during registration</td>
                <td>Can be redeemed by eligible users (depends on rules)</td>
              </tr>
              <tr>
                <td>Rewards both inviter and invitee</td>
                <td>Rewards the user who redeems it</td>
              </tr>
              <tr>
                <td>Usually tied to referral benefits</td>
                <td>Often time-limited and may have conditions</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p>
          Read more here:
          <a href="<?php echo $BASE_URL; ?>/1-lottery-gift-code/">1 Lottery Gift Code</a>.
        </p>
      </div>

      <div class="section inner-section">
        <h2>10. Contact Support for Invite Code Issues</h2>
        <p>
          If your invite code is rejected, rewards are not showing, or you cannot share your code,
          contact <a href="<?php echo $BASE_URL; ?>/1-lottery-customer-support/">1 Lottery customer support</a>.
          Support is available 24/7 and is the safest way to resolve account or reward issues.
        </p>
      </div>

      <div class="section inner-section">
        <h2>11. User Experiences &amp; Reviews of Invite Code System</h2>
        <p>
          Many users like the invite code system because it is simple to use and gives rewards without extra effort.
          Some shared experiences include:
        </p>
        <ul>
          <li>“My friend shared his invite code, and I used it to join 1 Lottery. I got extra points quickly.”</li>
          <li>“I share my invite code with family and friends. When someone joins, I receive a bonus.”</li>
          <li>“I was not sure at first, but rewards appeared after registration. It felt easy to use.”</li>
        </ul>
      </div>

      <div class="section inner-section">
        <h2>12. Conclusion</h2>
        <p>
          1 Lottery invite codes are a simple way for new users to receive a welcome reward and for existing users to earn referral rewards.
          Use the invite code during signup, share your own code safely, and contact support if you face any issues.
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
                <h3>What is a 1 Lottery invite code?</h3>
              </div>
              <div class="faq-answer">
                <p>A 1 Lottery invite code is a unique code that can give a joining reward to a new user and referral rewards to the user who shared the code.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Is the 1 Lottery invite code free to use?</h3>
              </div>
              <div class="faq-answer">
                <p>Yes. Invite codes are free. Avoid anyone asking you to pay money for an invite code.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>How to use an invite code?</h3>
              </div>
              <div class="faq-answer">
                <p>During registration, enter your mobile number, set a password, then enter the invite code in the invite field, agree to the terms, and complete signup.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>What are the advantages of using an invite code?</h3>
              </div>
              <div class="faq-answer">
                <p>It can provide a welcome reward for new users and referral rewards for the inviter, depending on current app rules.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Is it safe to use an invite code for 1 Lottery registration?</h3>
              </div>
              <div class="faq-answer">
                <p>Yes, if you use a code from a trusted source and do not share your OTP, password, or payment details with anyone.</p>
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
