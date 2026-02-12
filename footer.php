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

<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <ul>
                <li><a href="<?php echo $BASE_URL; ?>/about-us/">About Us</a></li> |
                <li><a href="<?php echo $BASE_URL; ?>/responsible-gaming/">Responsible Gaming</a></li> |
                <li><a href="<?php echo $BASE_URL; ?>/privacy-policy/">Privacy Policy</a></li> |
                <li><a href="<?php echo $BASE_URL; ?>/terms-conditions/">Terms &amp; Conditions</a></li> |
                <li><a href="<?php echo $BASE_URL; ?>/disclaimer/">Disclaimer</a></li>|
                <li><a href="<?php echo $BASE_URL; ?>/contact-us/">Contact Us</a></li>
            </ul>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-bottom">
                    <p class="copy-right">© 2026, <a href="<?php echo $BASE_URL; ?>/">1 Lottery Game </a>
                        All
                        rights
                        reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Site JS (menu, sticky header, FAQ) -->
<script src="<?php echo $BASE_URL; ?>/js/custom.js"></script>
<script src="<?php echo $BASE_URL; ?>/js/toc.js"></script>
