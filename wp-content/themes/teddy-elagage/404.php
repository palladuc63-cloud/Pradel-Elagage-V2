<?php function load_custom_styles()
{
  wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');
  // wp_enqueue_style('footer-page', get_template_directory_uri() . '/css/footer-page.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('body', get_template_directory_uri() . '/css/body.css');
  // wp_enqueue_style('single', get_template_directory_uri() . '/css/boisChauffage.css');
  wp_enqueue_style('single', get_template_directory_uri() . '/css/single.css');
}

add_action('wp_enqueue_scripts', 'load_custom_styles');
?>


<?php get_header();

/*

  Template Name: 404

  Template Name: Full-width

  Template Post Type: post, page, product

*/

?>

<h1 class="page-title" style="text-align: center;">Erreur 404 - Page non trouvée</h1>
<p style="text-align: center;">Désolé, la page que vous recherchez est introuvable. Veuillez retourner à <a href="<?php echo home_url(); ?>">la page d'accueil</a>.</p>