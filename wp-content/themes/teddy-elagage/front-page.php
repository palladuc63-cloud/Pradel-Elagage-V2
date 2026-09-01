<?php get_header(); ?>



<div class="sliderHome">



    <div class="swiper-container">



        <div class="swiper-wrapper">



            <div class="swiper-slide">

                <?php

                // Boucle pour afficher les informations depuis les champs personnalisés

                if (have_posts()) :

                    while (have_posts()) : the_post();

                        $imgSlideA = get_field('img-slider-a');

                        $textSlideA = get_field('text-slider-a');

                ?>

                        <div class="swiper-slide">

                            <img src="<?php echo esc_url($imgSlideA); ?>" alt="Elagage Thiers 63300" loading="lazy" preload="true">

                            <div class="slide-content">

                                <?php echo wp_kses_post($textSlideA); ?>

                                <button onclick="redirectToPage('www.pradel-elagage.fr/elagage-thiers-forez/');" class="button-17" role="button">En savoir +</button>

                                <script>
                                    function redirectToPage(url) {
                                        window.location.href = url;
                                    }
                                </script>

                            </div>

                        </div>

                <?php

                    endwhile;

                endif;

                ?>

            </div>



            <div class="swiper-slide">

                <?php

                // Boucle pour afficher les informations depuis les champs personnalisés

                if (have_posts()) :

                    while (have_posts()) : the_post();

                        $imgSlideB = get_field('img-slider-b');

                        $textSlideB = get_field('text-slider-b');

                ?>

                        <div class="swiper-slide">

                            <img src="<?php echo esc_url($imgSlideB); ?>" alt="Abattage Elagage Thiers 63300" loading="lazy" preload="true">

                            <div class="slide-content">

                                <?php echo wp_kses_post($textSlideB); ?>

                                <button onclick="redirectToPage('www.pradel-elagage.fr/elagage-thiers-forez/');" class="button-17" role="button">En savoir +</button>

                                <script>
                                    function redirectToPage(url) {
                                        window.location.href = url;
                                    }
                                </script>




                            </div>

                        </div>

                <?php

                    endwhile;

                endif;

                ?>

            </div>



            <div class="swiper-slide">

                <?php

                // Boucle pour afficher les informations depuis les champs personnalisés

                if (have_posts()) :

                    while (have_posts()) : the_post();

                        $imgSlideC = get_field('img-slider-c');

                        $textSlideC = get_field('text-slider-c');

                ?>

                        <div class="swiper-slide">

                            <img src="<?php echo esc_url($imgSlideC); ?>" alt="Bois de chauffage Thiers 63300" loading="lazy" preload="true">

                            <div class="slide-content">

                                <?php echo wp_kses_post($textSlideC); ?>

                                <button onclick="redirectToPage('www.pradel-elagage.fr/bois-de-chauffage-thiers/');" class="button-17" role="button">En savoir +</button>

                                <script>
                                    function redirectToPage(url) {
                                        window.location.href = url;
                                    }
                                </script>

                            </div>

                        </div>

                <?php

                    endwhile;

                endif;

                ?>

            </div>



        </div>

        <!-- <div class="swiper-pagination"></div> -->

    </div>



</div>



<!-- SEPARATOR Chaine des puys -->



<div class="containerSperatorPuy">



    <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 847.26 91.91">

        <defs>

            <style>
                .cls-2 {

                    fill: #fff;

                }
            </style>

        </defs>

        <path class="cls-2" d="M843.63,54.88c-10.45-2.4-30.69-10.55-40.79-13.37-9.44-2.64-18.73-3.28-28.36-1.42-3.21,.62-7.53,1.12-9.91-.48-7.59-5.09-13.63-1.73-19.86,2.15-8.56,5.31-17.72,8.18-27.9,6.96-6.73-.8-13.57-1.12-20.16-2.55-12.22-2.64-24.25-6.18-36.48-8.82-3.64-.78-8.63-1.31-11.34,.53-12.4,8.39-25.57,9.3-39.37,5.7-14.48-3.76-28.79-8.12-43.24-12.01-2.11-.58-5.05-.91-6.71,.1-7.43,4.55-13.76,2.79-20.58-1.6-13.74-8.85-27.85-17.13-41.75-25.73-2.16-1.33-4.09-3.04-5.8-4.34-.42,.53-1.5,3.46-3.18,3.84-7.61,1.78-15.36,3.84-23.09,3.91-12.38,.11-24.03,2.85-33.73,9.93-16.27,11.89-31.38,25.42-52.7,27.39-1.58,.14-3.13,.53-4.62,1.12-12,4.77-23.6,2.93-34.96-1.89-4.35-1.84-8.34-2.58-13.21-1.23-5.8,1.6-12.41,3.33-18.01,2.05-13.52-3.09-26.7-3.92-40.15-.35-1.84,.48-4.15,.88-5.77,.18-13.44-5.83-27.18-5.51-41.13-2.55-6.34,1.34-12,3.27-19.27,.69-12.83-4.55-26.67-6.21-39.93-9.67-15-3.91-66.45,2.35-79.65,11.06-1.15,.77-36.94,4-41.69,8.96l-40.3,.11v38.37H847.26V54.88h-3.63Z" />

    </svg>



</div>



<!-- CARDS -->



<div class="containerShapeElagageBois">

    <div class="blocShapeOrder">



        <div class="shapeWhiteOrder">

            <div class="containerImgTitleSvgHome">

                <img class="svgCardHome" src="<?php echo get_template_directory_uri(); ?>/svg/imgBackgroundHomePageOffer.svg" alt="Elagage Thiers 63300" preload="true">

                <img class="imgOrigamiPreparation tronconneuseSizeResponsive" src="<?php echo get_template_directory_uri(); ?>/img/chainsaw.webp" alt="elagage thiers" preload="true">

                <h1>ELAGAGE</h1>

                <p>Mes compétences en <strong>élagage</strong> 🌳 me permettent de travailler

                    dans les meilleures conditions afin de <strong>maintenir la sécurité</strong> 🦺 des batiments

                    tout en préservant la <strong>santé</strong> 👩‍⚕️ <strong>de vos arbres</strong>.</p>

            </div>


            <button onclick="redirectToPage('www.pradel-elagage.fr/elagage-thiers-forez/');" class="button-17" role="button">En savoir +</button>

            <script>
                function redirectToPage(url) {
                    window.location.href = url;
                }
            </script>

        </div>



        <div class="shapeWhiteOrder">

            <img class="svgCardHome" src="<?php echo get_template_directory_uri(); ?>/svg/imgBackgroundHomePageOffer.svg" alt="Abattage Elagage Thiers Forez" preload="true">

            <img class="imgOrigamiPreparation" src="<?php echo get_template_directory_uri(); ?>/img/arbreRelou.webp" alt="elagage thiers" preload="true">

            <h1>ABATTAGE</h1>

            <p>Votre <strong>partenaire de confiance</strong> pour tous vos besoins en <strong>abattage</strong> dans des <strong>zones délicates</strong>

                ⚠️ et/ou proches de <strong>lignes électriques</strong> ⚡ et <strong>téléphoniques</strong> ☎️</p>

                <button onclick="redirectToPage('www.pradel-elagage.fr/elagage-thiers-forez');" class="button-17" role="button">En savoir +</button>

            <script>
                function redirectToPage(url) {
                    window.location.href = url;
                }
            </script>

        </div>



        <div class="shapeWhiteOrder">

            <img class="svgCardHome" src="<?php echo get_template_directory_uri(); ?>/svg/imgBackgroundHomePageOffer.svg" alt="pradel elagage Thiers" preload="true">

            <img class="imgOrigamiPreparation" src="<?php echo get_template_directory_uri(); ?>/img/wood.webp" alt="elagage abattage bois de chauffage thiers" preload="true">

            <h1>BOIS DE CHAUFFAGE</h1>

            <p>Je suis fiers de vous fournir 💁 un <strong>approvisionnement en bois de chauffage 🪵 de qualité supérieure</strong>

                pour répondre à vos besoins hivernaux ⛄</p>

            <button onclick="redirectToPage('www.pradel-elagage.fr/bois-de-chauffage-thiers/');" class="button-17" role="button">En savoir +</button>

            <script>
                function redirectToPage(url) {
                    window.location.href = url;
                }
            </script>

        </div>



    </div>

</div>



<?php get_footer(); ?>