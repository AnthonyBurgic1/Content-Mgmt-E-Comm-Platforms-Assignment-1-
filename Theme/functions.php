<?php
function assignmentone_styles() {
    wp_enqueue_style(
        'assignmentone-style',
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts', 'assignmentone_styles');
