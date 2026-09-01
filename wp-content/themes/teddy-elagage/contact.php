<?php function load_custom_styles()

{

    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');

    wp_enqueue_style('footer-default', get_template_directory_uri() . '/css/footer-default.css');

    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('body', get_template_directory_uri() . '/css/body.css');

    wp_enqueue_style('contact', get_template_directory_uri() . '/css/contact.css');
}



add_action('wp_enqueue_scripts', 'load_custom_styles');

?>



<?php get_header();

/*

  Template Name: Contact

  Template Name: Full-width

  Template Post Type: post, page, product

*/

?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>



        <div class="containerImagePresentation">

            <div class="imgPrezSingle">

                <?php the_post_thumbnail(); ?>

            </div>

            <h1 class="titleSinglePage"><?php the_title(); ?></h1>

        </div>



        <div class="containerContact">



            <article class="post">

                <div class="containerSinglePage">

                    <div class="paragrapheSingle">

                        <h1 class="titreContactPage">Laissez moi un message</h1>

                        <p class="contenuContact"><?php the_content(); ?></p>

                    </div>

                </div>

            </article>



            <div class="containerForm fade-in-contact">
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                    <input type="hidden" name="action" value="custom_contact_form">

                    <label for="favoriteOnly">
                        <p class="txtForm">Quel est l'objet de votre email:</p>
                    </label>
                    <select name="favoriteOnly" id="favoriteOnly">
                        <option value="Elagage">Elagage</option>
                        <option value="Abattage">Abattage</option>
                        <option value="Bois de chauffage">Bois de chauffage</option>
                        <option value="Autre">Autre</option>
                    </select>

                    <label for="name">
                        <p class="txtForm">Nom :</p>
                    </label>
                    <input type="text" name="name" required>

                    <label for="email">
                        <p class="txtForm">Email :</p>
                    </label>
                    <input type="email" name="email" required>

                    <label for="message">
                        <p class="txtForm">Message :</p>
                    </label>
                    <textarea name="message" required></textarea>

                    <input type="submit" class="btnForm" value="Envoyer ✉️">
                </form>
            </div>

        </div>

        <?php

        if (isset($_GET['success']) && $_GET['success'] == 'true') {

            echo '<p>Merci, votre message a été envoyé avec succès !</p>';
        }

        ?>

<?php endwhile;

endif; ?>



<?php custom_get_footer_template(); ?>