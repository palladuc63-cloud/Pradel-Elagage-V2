<?php function load_custom_styles()

{

    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');

    wp_enqueue_style('footer-page', get_template_directory_uri() . '/css/footer-page.css');

    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('body', get_template_directory_uri() . '/css/body.css');

    // wp_enqueue_style('single', get_template_directory_uri() . '/css/boisChauffage.css');

    wp_enqueue_style('single', get_template_directory_uri() . '/css/single.css');

}



add_action('wp_enqueue_scripts', 'load_custom_styles');

?>



<?php get_header();

/*

  Template Name: Page Bois de Chauffage

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



                            if (get_field('imgcarrouselbois-a')) :

                                $carrouselBois1 = get_field('imgcarrouselbois-a');

                            ?>

                                <img src="<?php echo $carrouselBois1; ?>">

                            <?php endif; ?>

                        </div>



                        <div class="swiper-slide">



                            <?php



                            if (get_field('imgcarrouselbois-b')) :

                                $carrouselBois2 = get_field('imgcarrouselbois-b');



                            ?>



                                <img src="<?php echo $carrouselBois2; ?>">

                            <?php endif; ?>

                        </div>



                        <div class="swiper-slide">



                            <?php



                            if (get_field('imgcarrouselbois-c')) :

                                $carrouselBois3 = get_field('imgcarrouselbois-c');



                            ?>



                                <img src="<?php echo $carrouselBois3; ?>">

                            <?php endif; ?>

                        </div>



                    </div>



                    <!-- <div class="swiper-button-next"></div>

                    <div class="swiper-button-prev"></div> -->

                    <div class="swiper-pagination"></div>

                </div>



                <div class="paragrapheSingle animated-element">

                    <p><?php the_content(); ?></p>

                </div>



            </div>



            <!-- <div class="SingleSeparator animated-separator">Mes Offres de services</div> -->



        </article>



        <div class="containerInformationSingle animated-element-2">



            <!-- CARDS 1 -->

            <div class="containerCARDSInformationSingle">

                <?php



                if (get_field('imgessences')) :

                    $picture = get_field('imgessences');

                ?>

                    <img src="<?php echo $picture; ?>">

                <?php endif; ?>



                <h1>

                    <?php

                    echo get_field('titreessence');

                    ?>

                </h1>



                <?php

                echo get_field('infoessences');

                ?>



            </div>



            <!-- CARDS 2 -->

            <div class="containerCARDSInformationSingle">

                <?php



                if (get_field('taillesbois')) :

                    $picture2 = get_field('taillesbois');

                ?>

                    <img src="<?php echo $picture2; ?>">

                <?php endif; ?>



                <h1>

                    <?php

                    echo get_field('titretaillebois');

                    ?>

                </h1>



                <?php

                echo get_field('infotaillebois');

                ?>

            </div>



            <!-- CARDS 3 -->

            <div class="containerCARDSInformationSingle">

                <?php



                if (get_field('imglivraison')) :

                    $picture3 = get_field('imglivraison');

                ?>

                    <img src="<?php echo $picture3; ?>">

                <?php endif; ?>



                <h1>

                    <?php

                    echo get_field('titrelivraison');

                    ?>

                </h1>



                <?php

                echo get_field('infolivraison');

                ?>



            </div>



        </div>



<?php endwhile;

endif; ?>

<?php custom_get_footer_template(); ?>