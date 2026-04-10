<?php
/**
 * Plugin Name: Demo Plugin
 * Description: A dummy plugin deployed via GitHub Actions to WP Engine.
 * Version:     1.0.0
 * Author:      aatifwaza-tru
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Inject a comment in the footer to confirm deploy
add_action( 'wp_footer', function() {
    echo '<!-- ✅ Demo Plugin active — deployed via GitHub Actions to WP Engine -->';
});

// Shortcode: [demo_hello]
add_shortcode( 'demo_hello', function() {
    return '<p style="color:green;font-weight:bold;font-family:sans-serif;">
        🚀 Hello from Demo Plugin! Deployed via GitHub → WP Engine.
    </p>';
});
