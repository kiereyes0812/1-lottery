<?php
// Base URL helper (works on localhost subfolders and production domains)
if (!isset($BASE_URL)) {
    $host = $_SERVER['HTTP_HOST'] ?? '';
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
    $basePath = '';

    // Localhost support (handles /1lotteryyio and /1lotteryyio/1lotteryyio)
    if ($host === 'localhost' || $host === '127.0.0.1') {
        if (strpos($scriptName, '/1lotteryyio/1lotteryyio/') === 0) {
            $basePath = '/1lotteryyio/1lotteryyio';
        } elseif (strpos($scriptName, '/1lotteryyio/') === 0) {
            $basePath = '/1lotteryyio';
        }
    }

    $BASE_URL = $host ? ($scheme . '://' . $host . $basePath) : $basePath;
}
?>
<?php
$reqUri = $_SERVER['REQUEST_URI'] ?? '';
$isApkPage = (strpos($reqUri, '/apk') !== false);
$IMG_ALT = $isApkPage ? '1 Lottery App Download' : '1 Lottery Login';
?>



<header id="myheader" class="myheader">
    <div class="container">
        <div class="row">
            <div class="nav__data">
                <div class="main-logo"><a href="<?php echo $BASE_URL; ?>/"><img src="<?php echo $BASE_URL; ?>/assets/image/1lottery-logo.webp" alt="<?php echo $IMG_ALT; ?>"></a>
                </div>
                <div class="nav__menu" id="nav__menu">
                    <ul class="menu-list">
                        <li class="menu-link"><a href="<?php echo $BASE_URL; ?>/">Home</a></li>
                        <li class="menu-link"><a href="<?php echo $BASE_URL; ?>/responsible-gaming/">Responsible Gaming</a></li>
                        <li class="menu-link"><a href="<?php echo $BASE_URL; ?>/apk/">Download App</a></li>

                        <li class="menu-link">
                            <a href="#" class="services-toggle">How to<i class="ri-arrow-down-s-fill"></i></a>
                            <ul class="sunmenu">
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/1-lottery-deposit/">How to Deposit</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/1-lottery-withdraw/">How to Withdraw</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/1-lottery-gift-code/">How to Use Gift Code</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/1-lottery-invite-code/">How to Use Invite Code</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/1-lottery-customer-support/">How to Contact Customer Support</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/1-lottery-teacher/">How to Contact Lottery Teacher</a></li>
                            </ul>
                        </li>

                        <li class="menu-link">
                            <a href="#" class="services-toggle">More<i class="ri-arrow-down-s-fill"></i></a>
                            <ul class="sunmenu">
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/about-us/">About Us</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/contact-us/">Contact Us</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/privacy-policy/">Privacy Policy</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/terms-conditions/">Terms &amp; Conditions</a></li>
                                <li class="sb-links"><a href="<?php echo $BASE_URL; ?>/disclaimer/">Disclaimer</a></li>


                                <!-- New Service Added -->
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="button-group">
                    <a href="https://d1lotteryo.com/#/login" target="_blank" rel="nofollow noopener noreferrer" class="bttn bttn-login">
                        Login
                    </a>
                    <a href="https://d1lotteryo.com/#/register?invitationCode=8563410639952"  target="_blank" rel="nofollow noopener noreferrer"
                        class="bttn bttn-register">
                        Register
                    </a>

                </div>
                <div class="nav__toggle" id="nav__toggle">
                    <i class="ri-menu-3-line pizza"></i>
                    <i class="ri-close-line close"></i>
                </div>
            </div>
        </div>
    </div>
</header>
