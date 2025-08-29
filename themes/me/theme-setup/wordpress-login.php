<?php
// == WCAG Fixes for WordPress Login Page ==

// 1. Make "Log In" heading visible and styled accessibly
function wcag_login_heading_style() {
    ?>
    <style>
        h1.screen-reader-text {
            position: static !important;
            width: auto !important;
            height: auto !important;
            overflow: visible !important;
            clip: auto !important;
            white-space: normal !important;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            text-align: center;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'wcag_login_heading_style');

// 2. Hide conflicting "Powered by WordPress" logo text safely
function wcag_hide_wp_login_logo_text() {
    ?>
    <style>
        h1.wp-login-logo {
            display: none !important;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'wcag_hide_wp_login_logo_text');

// 3. Wrap login page main content in <main> landmark for screen readers
function wcag_wrap_login_main() {
    echo '<main id="main-content" role="main" tabindex="-1">';
}
add_action('login_header', 'wcag_wrap_login_main');

function wcag_close_login_main() {
    echo '</main>';
}
add_action('login_footer', 'wcag_close_login_main');

