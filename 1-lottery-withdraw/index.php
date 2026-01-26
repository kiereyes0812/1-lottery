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

  <title>1 Lottery Withdraw</title>
  <meta name="description" content="1 Lottery Withdraw offers fast and secure withdrawals with trusted payment methods, quick processing times, and smooth transactions for hassle-free gaming.">
  <meta name="robots" content="index, follow">

  <link rel="canonical" href="https://1lotteryy.io/1-lottery-withdraw/">

  <meta property="og:title" content="1 Lottery Withdraw">
  <meta property="og:description" content="1 Lottery Withdraw offers fast and secure withdrawals with trusted payment methods, quick processing times, and smooth transactions for hassle-free gaming.">
  <meta property="og:url" content="https://1lotteryy.io/1-lottery-withdraw/">
  <meta property="og:type" content="article">
  <meta property="og:site_name" content="1 Lottery">
  <meta property="og:image" content="https://1lotteryy.io/assets/image/lottery-withdraw.webp">
  <meta property="og:image:alt" content="1 Lottery Withdraw">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="1 Lottery Withdraw">
  <meta name="twitter:description" content="1 Lottery Withdraw offers fast and secure withdrawals with trusted payment methods, quick processing times, and smooth transactions for hassle-free gaming.">
  <meta name="twitter:image" content="https://1lotteryy.io/assets/image/lottery-withdraw.webp">
  <meta name="twitter:image:alt" content="1 Lottery Withdraw">

  <link rel="icon" href="<?php echo $BASE_URL; ?>/assets/image/1lottery-favicon.webp" sizes="32x32" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php echo $BASE_URL; ?>/assets/image/1lottery-favicon.webp">

  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.4.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    .article-image { max-width: 100%; height: auto; border-radius: 10px; }
    .figure-wrap { margin: 14px 0; }
    .figure-caption { font-size: 14px; opacity: 0.85; margin-top: 6px; }

    /* Force left alignment */
    .h1head { text-align: left !important; }
    .about-section .inner-section { text-align: left !important; }
    .about-section .inner-section h2,
    .about-section .inner-section h3,
    .about-section .inner-section p,
    .about-section .inner-section li { text-align: left !important; }

    /* FAQ dropdown (readable and left aligned) */
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
        "@id": "https://1lotteryy.io/1-lottery-withdraw/#webpage",
        "url": "https://1lotteryy.io/1-lottery-withdraw/",
        "name": "1 Lottery Withdraw",
        "description": "1 Lottery Withdraw offers fast and secure withdrawals with trusted payment methods, quick processing times, and smooth transactions for hassle-free gaming.",
        "isPartOf": { "@id": "https://1lotteryy.io/#website" }
      },
      {
        "@type": "BreadcrumbList",
        "@id": "https://1lotteryy.io/1-lottery-withdraw/#breadcrumb",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://1lotteryy.io/" },
          { "@type": "ListItem", "position": 2, "name": "1 Lottery Withdraw", "item": "https://1lotteryy.io/1-lottery-withdraw/" }
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
        <h1>How to Withdraw Money in 1 Lottery App</h1>
      </div>

      <div class="section inner-section">
        <div class="figure-wrap">
          <img class="article-image" src="<?php echo $BASE_URL; ?>/assets/image/lottery-withdraw.webp" alt="1 Lottery Withdraw featured image">
          <div class="figure-caption">Withdraw option inside the 1 Lottery wallet.</div>
        </div>

        <p>
          Withdrawing your winnings is the final step after playing. To avoid delays, it helps to understand the withdrawal options,
          limits, and rules inside the 1 Lottery app.
        </p>
        <p>
          This guide explains how withdrawals work, how to withdraw step by step, available methods, common problems, and safety tips.
        </p>
      </div>

      <div class="section inner-section">
        <h2>1. Understanding Withdrawals in 1 Lottery App</h2>
        <p>
          A withdrawal means transferring your payable balance or winnings from the 1 Lottery app to your selected bank account or wallet
          using approved payment methods.
        </p>
        <ul>
          <li>Only funds available in your gaming wallet can be withdrawn.</li>
          <li>Your request is verified, then the payment processor credits the amount to your chosen method.</li>
          <li>Processing time depends on the method. UPI and e-wallet options are often faster than bank transfers and crypto.</li>
          <li>You can track records in the app using Withdrawal History.</li>
        </ul>
      </div>

      <div class="section inner-section">
        <h2>2. Step-by-Step Guide to Withdraw Money</h2>
        <p>Follow these steps in order to submit a withdrawal request correctly.</p>

        <h3>2.1 Login to Your 1 Lottery Account</h3>
        <p>
          Open the app and log in with your registered phone number or email and password.
          If you need the login guide, see <a href="<?php echo $BASE_URL; ?>/1-lottery-login/">1 Lottery Login</a>.
        </p>
        <div class="figure-wrap">
          <img class="article-image" src="<?php echo $BASE_URL; ?>/assets/image/open-lottery-app-and-login.webp" alt="Open 1 Lottery app and login">
          <div class="figure-caption">Log in to your 1 Lottery account first.</div>
        </div>

        <h3>2.2 Go to the “Withdraw” Section</h3>
        <p>
          After login, tap either Account or Wallet from the home screen. Both routes lead to the same withdrawal process.
        </p>
        <div class="figure-wrap">
          <img class="article-image" src="<?php echo $BASE_URL; ?>/assets/image/go-to-account-or-wallet.webp" alt="Go to Account or Wallet in 1 Lottery app">
          <div class="figure-caption">Open Wallet or Account from the bottom menu.</div>
        </div>

        <p>
          Inside Wallet, you will see Withdraw at the top. Tap it to open the withdrawal page.
        </p>
        <div class="figure-wrap">
          <img class="article-image" src="<?php echo $BASE_URL; ?>/assets/image/tap-the-withdrawal-button-in-wallet.webp" alt="Tap the Withdraw button in wallet">
          <div class="figure-caption">Tap Withdraw from the Wallet screen.</div>
        </div>

        <h3>2.3 Choose Withdrawal Method</h3>
        <p>
          On the withdrawal page, select your preferred payout option such as C2C Wallet, Bank Card, USDT, or UPAY (UPI).
          Add the payout method if the app asks you to add details first.
        </p>
        <div class="figure-wrap">
          <img class="article-image" src="<?php echo $BASE_URL; ?>/assets/image/select-withdrawal-payment-method.webp" alt="Select withdrawal payment method">
          <div class="figure-caption">Choose the method you want to withdraw to.</div>
        </div>

        <h3>2.4 Enter the Withdrawal Amount</h3>
        <p>
          Enter the amount you want to withdraw. Make sure the amount is within the allowed range for your selected method.
        </p>

        <h3>2.5 Submit and Confirm the Request</h3>
        <p>
          Tap Withdraw to submit. Your request is processed based on the chosen method. Save the transaction details if you need support help.
        </p>
        <div class="figure-wrap">
          <img class="article-image" src="<?php echo $BASE_URL; ?>/assets/image/enter-amount-and-confirm.webp" alt="Enter withdrawal amount and confirm">
          <div class="figure-caption">Add payout details (if needed), enter amount, then submit Withdraw.</div>
        </div>
      </div>

      <div class="section inner-section">
        <h2>3. Types of Withdrawal Options</h2>
        <p>The app provides multiple withdrawal methods. Availability and timing can vary.</p>

        <div class="table-responsive">
          <table class="table table-bordered align-middle">
            <thead>
              <tr>
                <th>Withdrawal Method</th>
                <th>How it works</th>
                <th>Expected processing time</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>UPI C2C</td>
                <td>Transfer funds directly from a customer’s account to another customer’s account using a UPI ID.</td>
                <td>Works instantly (often)</td>
              </tr>
              <tr>
                <td>USDT</td>
                <td>Send your winnings using Tether (USDT) to your wallet after KYC verification.</td>
                <td>15 minutes to 1 hour (network dependent)</td>
              </tr>
              <tr>
                <td>Bank Card</td>
                <td>Credits winnings to your linked card via banking channels such as NEFT/IMPS.</td>
                <td>2 to 24 hours (bank dependent)</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="section inner-section">
        <h2>4. Minimum and Maximum Withdrawal Limits</h2>
        <p>Withdrawal limits depend on the payment option you choose.</p>

        <h3>Minimum withdrawal amount</h3>
        <div class="table-responsive">
          <table class="table table-bordered align-middle">
            <thead>
              <tr>
                <th>Withdrawal Method</th>
                <th>Minimum Limit</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>UPI C2C</td><td>₹100</td></tr>
              <tr><td>USDT</td><td>₹110</td></tr>
              <tr><td>Bank Card</td><td>₹850</td></tr>
            </tbody>
          </table>
        </div>

        <h3>Maximum withdrawal amount</h3>
        <div class="table-responsive">
          <table class="table table-bordered align-middle">
            <thead>
              <tr>
                <th>Withdrawal Method</th>
                <th>Maximum Limit</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>UPI C2C</td><td>₹50,000</td></tr>
              <tr><td>USDT</td><td>₹50,000</td></tr>
              <tr><td>Bank Card</td><td>₹1,000,000</td></tr>
            </tbody>
          </table>
        </div>

        <h3>Daily free withdrawal requests by VIP level</h3>
        <p>The number of free withdrawals per day depends on your VIP level.</p>
        <div class="table-responsive">
          <table class="table table-bordered align-middle">
            <thead>
              <tr>
                <th>VIP Level</th>
                <th>Free withdrawal numbers per day</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>VIP 0</td><td>2</td></tr>
              <tr><td>VIP 1</td><td>3</td></tr>
              <tr><td>VIP 2</td><td>3</td></tr>
              <tr><td>VIP 3</td><td>3</td></tr>
              <tr><td>VIP 4</td><td>4</td></tr>
              <tr><td>VIP 5</td><td>4</td></tr>
              <tr><td>VIP 6</td><td>5</td></tr>
              <tr><td>VIP 7</td><td>5</td></tr>
              <tr><td>VIP 8</td><td>6</td></tr>
              <tr><td>VIP 9</td><td>7</td></tr>
              <tr><td>VIP 10</td><td>8</td></tr>
            </tbody>
          </table>
        </div>

        <h3>Processing fee for extra withdrawals</h3>
        <p>
          If you exceed your daily free withdrawal limit, a handling fee may apply.
          A common fee shown is 3% of the withdrawal amount plus ₹6 (fixed fee).
        </p>
      </div>

      <div class="section inner-section">
        <h2>5. Withdrawal Processing Time</h2>
        <p>
          Withdrawal time depends on the selected method and verification. UPI methods can be quick, while bank card transfers and USDT can take longer.
          If your withdrawal is delayed beyond 24 hours, contact support with your transaction details.
        </p>
      </div>

      <div class="section inner-section">
        <h2>6. Withdrawal Rules &amp; Conditions</h2>
        <p>Before requesting a withdrawal, review these common rules shown in the app.</p>
        <ul>
          <li><b>KYC requirements:</b> KYC may be required for higher limits and smoother processing.</li>
          <li><b>Same account rule:</b> Deposits and withdrawals may need to use the same payment account or method.</li>
          <li><b>Minimum activity requirement:</b> Some accounts must meet a minimum play amount (example shown: ₹290) before withdrawing.</li>
          <li><b>Withdrawal time window:</b> Requests can be placed between 00:00 and 23:59.</li>
          <li><b>Withdrawal range:</b> Common range is ₹100 to ₹50,000, but it can vary by method.</li>
          <li><b>Blockchain verification (USDT):</b> Crypto withdrawals can require network confirmations before credit.</li>
          <li><b>Account accuracy:</b> Double-check beneficiary details to avoid failed withdrawals.</li>
        </ul>

        <p>
          If you have issues, contact <a href="<?php echo $BASE_URL; ?>/1-lottery-customer-support/">1 Lottery Customer Support</a>.
        </p>
      </div>

      <div class="section inner-section">
        <h2>7. Common Withdrawal Issues &amp; Solutions</h2>
        <p>Below are common problems and basic fixes you can try first.</p>

        <div class="table-responsive">
          <table class="table table-bordered align-middle">
            <thead>
              <tr>
                <th>Issue</th>
                <th>Possible cause</th>
                <th>How to fix</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Request pending</td>
                <td>Bank downtime, heavy traffic, extra verification</td>
                <td>Wait for processing. If delayed beyond 24 hours, contact support.</td>
              </tr>
              <tr>
                <td>UPI not working</td>
                <td>Incorrect UPI ID, daily limit exceeded, UPI server issues</td>
                <td>Re-check UPI ID, confirm limits, try again later.</td>
              </tr>
              <tr>
                <td>Bank rejection</td>
                <td>Name mismatch, wrong IFSC, wrong account number</td>
                <td>Make sure bank details match your profile and re-enter correctly.</td>
              </tr>
              <tr>
                <td>Partial or incorrect credit</td>
                <td>Typing errors, technical glitches</td>
                <td>Save transaction proof and contact customer support.</td>
              </tr>
              <tr>
                <td>Duplicate request</td>
                <td>Submitted multiple times due to slow internet</td>
                <td>Wait for confirmation before retrying.</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p>
          Tip: Keep your transaction ID and screenshots ready for faster help.
        </p>
      </div>

      <div class="section inner-section">
        <h2>8. Safety &amp; Security of Withdrawals</h2>
        <p>Use these safety steps to protect your account and money.</p>
        <ul>
          <li>Use a secure network and avoid public Wi-Fi during withdrawals.</li>
          <li>Enable two-factor authentication if available.</li>
          <li>Install the app only from trusted sources. For downloads, use <a href="<?php echo $BASE_URL; ?>/apk/">1 Lottery APK</a>.</li>
          <li>Monitor your bank or wallet activity for unauthorised transactions.</li>
          <li>Use a strong password and change it periodically.</li>
        </ul>
      </div>

      <div class="section inner-section">
        <h2>9. Tips for Smooth Withdrawals</h2>
        <p>These steps reduce errors and help avoid delays.</p>
        <ul>
          <li>Complete KYC verification in advance.</li>
          <li>Use the same payment account for deposit and withdrawal when required.</li>
          <li>Verify beneficiary details before submitting.</li>
          <li>Use a stable internet connection during the request.</li>
          <li>Avoid withdrawals during banking downtime where possible (holidays or late night processing).</li>
          <li>Do not exceed free withdrawal requests to avoid extra fees.</li>
        </ul>

        <p>
          If you need to add funds first, see <a href="<?php echo $BASE_URL; ?>/1-lottery-deposit/">1 Lottery Deposit</a>.
        </p>
      </div>

      <div class="section inner-section">
        <h2>Conclusion</h2>
        <p>
          Withdrawing winnings is straightforward if you follow the correct steps, stay within limits, and use accurate account details.
          Keep records of your transactions and contact support if a request remains pending beyond normal processing time.
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
                <h3>What is the minimum withdrawal amount in 1 Lottery App?</h3>
              </div>
              <div class="faq-answer">
                <p>The minimum starts around ₹100 for UPI C2C, and can vary by method (example: ₹110 for USDT, ₹850 for Bank Card).</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>What is the maximum withdrawal limit per day?</h3>
              </div>
              <div class="faq-answer">
                <p>Common maximum limits are ₹50,000 for UPI C2C and USDT. Bank Card limits can be higher depending on the app rules shown for your account.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>How long does it take to receive withdrawn money?</h3>
              </div>
              <div class="faq-answer">
                <p>UPI methods can be fast. Bank transfers and USDT may take longer depending on bank processing or blockchain confirmations.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>What withdrawal methods are available in the app?</h3>
              </div>
              <div class="faq-answer">
                <p>Common methods include UPI C2C, USDT, and Bank Card. Some accounts may also show C2C Wallet and UPAY (UPI).</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Do I need to complete KYC before making a withdrawal?</h3>
              </div>
              <div class="faq-answer">
                <p>KYC is often required for higher limits and smoother processing. Small withdrawals may work without KYC, but verification is recommended.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Why is my withdrawal request pending or delayed?</h3>
              </div>
              <div class="faq-answer">
                <p>Delays can happen due to bank downtime, verification checks, holidays, or incorrect payout details. If it goes beyond 24 hours, contact support.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Can I withdraw money to a different account than the one used for deposit?</h3>
              </div>
              <div class="faq-answer">
                <p>Generally, withdrawals must be made to the same account or UPI ID used for deposits, depending on platform rules.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Are there any charges or fees on withdrawals?</h3>
              </div>
              <div class="faq-answer">
                <p>If you exceed your daily free withdrawals, a handling fee may apply (example shown: 3% plus ₹6 fixed fee).</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>What should I do if my withdrawal fails?</h3>
              </div>
              <div class="faq-answer">
                <p>Check whether the amount was deducted. Save transaction proof and contact <a href="<?php echo $BASE_URL; ?>/1-lottery-customer-support/">customer support</a> with your transaction ID and screenshot.</p>
              </div>
            </div>

            <div class="faq-item" onclick="toggleFAQ(this)">
              <div class="faq-question">
                <span class="arrow"></span>
                <h3>Can I cancel a withdrawal request after placing it?</h3>
              </div>
              <div class="faq-answer">
                <p>If the status is pending, you can contact support to request cancellation. Once processed, cancellation is usually not possible.</p>
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

  <script src="../js/custom.js"></script>
  <?php include('../footer.php'); ?>
</body>
</html>
