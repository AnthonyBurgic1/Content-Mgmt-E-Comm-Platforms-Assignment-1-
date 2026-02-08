<?php
function assignmentone_styles() {
    wp_enqueue_style(
        'assignmentone-style',
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts', 'assignmentone_styles');

function assignmentone_login_failed() {
    $login_page = home_url('/login/');
    wp_redirect($login_page . '?login=failed');
    exit;
}
add_action('wp_login_failed', 'assignmentone_login_failed');


function assignmentone_logout_redirect() {
    wp_redirect(home_url('/login/'));
    exit;
}
add_action('wp_logout', 'assignmentone_logout_redirect');
