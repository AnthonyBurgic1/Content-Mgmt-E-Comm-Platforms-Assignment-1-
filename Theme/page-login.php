<?php
/* Template Name: Login Page */

get_header();

if ( is_user_logged_in() ) {
    echo "<p>You are already logged in.</p>";
    get_footer();
    exit;
}
?>

<main class="login-container">
    <h2>Login</h2>

    <?php
    if ( isset($_GET['login']) && $_GET['login'] == 'failed' ) {
        echo '<p class="error">Invalid username or password.</p>';
    }
    ?>

    <form method="post" action="<?php echo esc_url( site_url('wp-login.php') ); ?>">
        <input type="text" name="log" placeholder="Username" required>

        <input type="password" name="pwd" placeholder="Password" required>

        <input type="hidden" name="redirect_to" value="<?php echo esc_url( home_url() ); ?>">

        <button type="submit">Login</button>
    </form>
</main>

<?php get_footer(); ?>
