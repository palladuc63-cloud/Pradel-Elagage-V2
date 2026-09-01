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

  Template Name: Page Presentation Services

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
                <div class="swiper mySwiper animated-element">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <?php
                            if (get_field('imgcarrousel1')) :
                                $carrousel1 = get_field('imgcarrousel1');
                            ?>
                                <img src="<?php echo $carrousel1; ?>">
                            <?php endif; ?>
                        </div>

                        <div class="swiper-slide">
                            <?php
                            if (get_field('imgcarrousela')) :

                                $carrousel2 = get_field('imgcarrousela');
                            ?>
                                <img src="<?php echo $carrousel2; ?>">

                            <?php endif; ?>
                        </div>



                        <div class="swiper-slide">
                            <?php
                            if (get_field('imgcarrouselb')) :
                                $carrousel3 = get_field('imgcarrouselb');
                            ?>
                                <img src="<?php echo $carrousel3; ?>">
                            <?php endif; ?>
                        </div>



                        <div class="swiper-slide">
                            <?php
                            if (get_field('imgcarrouselc')) :
                                $carrousel4 = get_field('imgcarrouselc');
                            ?>
                                <img src="<?php echo $carrousel4; ?>">
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="swiper-pagination"></div>
                </div>



                <div class="paragrapheSingle animated-element">
                    <p><?php the_content(); ?></p>
                </div>
            </div>

        </article>



        <div class="containerInformationSingle animated-element-2">


            <!-- CARDS 1 -->

            <div class="containerCARDSInformationSingle">

                <?php
                if (get_field('imgCard')) :
                    $picture = get_field('imgCard');
                ?>
                    <img src="<?php echo $picture; ?>">
                <?php endif; ?>

                <h1>
                    <?php
                    echo get_field('titreCard1');
                    ?>
                </h1>
                <?php
                echo get_field('txtcard1');
                ?>

            </div>



            <!-- CARDS 2 -->

            <div class="containerCARDSInformationSingle">

                <?php
                if (get_field('imgCard2')) :
                    $picture2 = get_field('imgCard2');
                ?>
                    <img src="<?php echo $picture2; ?>">
                <?php endif; ?>

                <h1>
                    <?php
                    echo get_field('titreCard2');
                    ?>
                </h1>
                <?php
                echo get_field('txtcard2');
                ?>

            </div>



            <!-- CARDS 3 -->

            <div class="containerCARDSInformationSingle">
                <?php
                if (get_field('imgCard3')) :
                    $picture3 = get_field('imgCard3');
                ?>
                    <img src="<?php echo $picture3; ?>">
                <?php endif; ?>
                <h1>
                    <?php
                    echo get_field('titreCard3');
                    ?>
                </h1>
                <?php
                echo get_field('txtcard3');
                ?>
            </div>



            <!-- CARDS 4 -->

            <div class="containerCARDSInformationSingle">

                <?php



                if (get_field('imgCard4')) :

                    $picture4 = get_field('imgCard4');

                ?>

                    <img src="<?php echo $picture4; ?>">

                <?php endif; ?>



                <h1>

                    <?php

                    echo get_field('titreCard4');

                    ?>

                </h1>



                <?php

                echo get_field('txtcard4');

                ?>



            </div>



        </div>



<?php endwhile;

endif; ?>



<?php custom_get_footer_template(); ?>