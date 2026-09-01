<?php function load_custom_styles()
{
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');
    wp_enqueue_style('body', get_template_directory_uri() . '/css/body.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('footer-default', get_template_directory_uri() . '/css/footer-default.css');

}
    add_action('wp_enqueue_scripts', 'load_custom_styles');
?>

<?php get_header();?>

<?php get_template_part( 'archive' ); ?>

<?php custom_get_footer_template(); ?>