<?php function load_custom_styles()

{

    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');

    wp_enqueue_style('footer-page', get_template_directory_uri() . '/css/footer-page.css');

    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('body', get_template_directory_uri() . '/css/body.css');

    wp_enqueue_style('single', get_template_directory_uri() . '/css/single.css');
}


add_action('wp_enqueue_scripts', 'load_custom_styles');

?>


<?php get_header();

/*

  Template Name: Mentions Légales

  Template Name: Full-width

  Template Post Type: post, page, product

*/

?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



        <div class="containerImagePresentation fade-in">

            <div class="imgPrezSingle">

                <?php the_post_thumbnail(); ?>

            </div>

            <h1 class="titleSinglePage"><?php the_title(); ?></h1>

        </div>


        <article class="post">


            <div class="containerSinglePage">

                <div class="paragrapheSingle animated-element">

                    <p><?php the_content(); ?></p>

                </div>

            </div>


        </article>


    <?php endwhile;

endif; ?>


<?php custom_get_footer_template(); ?>