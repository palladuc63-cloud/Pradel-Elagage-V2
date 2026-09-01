<?php
// Ajouter la prise en charge des images mises en avant

add_theme_support('post-thumbnails');


// Ajouter automatiquement le titre du site dans l'en-tête du site

add_theme_support('title-tag');


//Charger CSS dans le wp_head en fonction des pages visitées

function load_CSS_homePage()

{

    if (is_page('')) {

        $stylesheet_url = get_theme_file_uri('style.css');
        wp_enqueue_style('style.css', esc_url($stylesheet_url));


        $stylesheet_url = get_theme_file_uri('css/body.css');
        wp_enqueue_style('body.css', esc_url($stylesheet_url));


        $stylesheet_url = get_theme_file_uri('css/header.css');
        wp_enqueue_style('header.css', esc_url($stylesheet_url));


        $stylesheet_url = get_theme_file_uri('css/homePage.css');
        wp_enqueue_style('homePage.css', esc_url($stylesheet_url));


        $stylesheet_url = get_theme_file_uri('css/footer-page.css');
        wp_enqueue_style('footer-page.css', esc_url($stylesheet_url));


        $stylesheet_url = get_theme_file_uri('css/footer-default.css');
        wp_enqueue_style('footer-default.css', esc_url($stylesheet_url));
    }
}

add_action('wp_head', 'load_CSS_homePage');


// Google maps

// function mon_theme_enqueue_scripts() {
//     wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCH-p-HWALe7e2mCk_JZ3pMguSOoPWZaig&callback=initMap', array(), null, true);
//     wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCH-p-HWALe7e2mCk_JZ3pMguSOoPWZaig', array(), null, true);

// }
// add_action('wp_enqueue_scripts', 'mon_theme_enqueue_scripts');


//Ajout des scripts JS

function add_menu_script()

{
    // wp_enqueue_script('initMap', get_template_directory_uri() . '/js/initMap.js', array(), null, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.js', array(), null, true);
    wp_enqueue_script('animations', get_template_directory_uri() . '/js/animations.js', array(), null, true);
    wp_enqueue_script('title-anim', get_template_directory_uri() . '/js/title-anim.js', array(), null, true);
    wp_enqueue_script('burgerMenu', get_template_directory_uri() . '/js/burgerMenu.js', array(), null, true);
    wp_enqueue_script('backgroundImgMenu', get_template_directory_uri() . '/js/backgroundImgMenu.js', array(), null, true);
    wp_enqueue_script('cookies-consent', get_template_directory_uri() . '/js/cookies-consent.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'add_menu_script');


// Forcer le script Img Backgound a s'afficher sur toutes les pages

function enqueue_custom_script()
{
    wp_enqueue_script('backgroundImgMenu', get_template_directory_uri() . '/js/backgroundImgMenu.js', array('jquery'), null, true);

    wp_localize_script('backgroundImgMenu', 'custom_vars', array(
        'template_directory' => get_template_directory_uri()
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');


// Personnalisation des footers

function custom_get_footer_template()

{
    if (is_home()) {
        get_template_part('footers/footer-default');
    } elseif (is_page('bois-de-chauffage-thiers')) {
        get_template_part('footers/footer-page');
    } elseif (is_page('elagage-thiers-forez')) {
        get_template_part('footers/footer-page');
    } elseif (is_page('mentions-legales')) {
        get_template_part('footers/footer-page');
    } elseif (is_page('404')) {
        get_template_part('footers/footer-page');
    } else {
        get_template_part('footers/footer-default');
    }
}


//Swiper.js

function enqueue_swiper_css()
{
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_css');

function enqueue_swiper_js()
{
    wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_js');


//Formualire de contact

function custom_contact_form_handler()
{

    if (isset($_POST['action']) && $_POST['action'] == 'custom_contact_form') {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);
        $selectedOption = sanitize_text_field($_POST['favoriteOnly']);

        $to = EMAIL_TO;
        $subject = 'Sujet de l\'e-mail';

        // Vérification de l'adresse e-mail de l'expéditeur
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $headers = "From: $name <$email>";

            // Ajouter l'option sélectionnée au message
            $message .= "\n\nObjet : $selectedOption";

            wp_mail($to, $subject, $message, $headers);

            wp_redirect(get_permalink(get_page_by_title('Contact')) . '?success=true');
            exit;
        } else {
            // Gérer l'erreur si l'adresse e-mail n'est pas valide
            wp_die('L\'adresse e-mail de l\'expéditeur n\'est pas valide.');
        }
    }
}

add_action('admin_post_nopriv_custom_contact_form', 'custom_contact_form_handler');
add_action('admin_post_custom_contact_form', 'custom_contact_form_handler');
