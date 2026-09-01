document.addEventListener('DOMContentLoaded', function() {

    // Récupération de l'URL actuelle de la page
    const currentUrl = window.location.href;

    // Sélection de tous les liens dans notre menu
    const menuLinks = document.querySelectorAll('.lienMenu');

    // Pour chaque lien, on va vérifier s'il correspond à l'URL actuelle
    menuLinks.forEach(link => {
        if (link.href === currentUrl) {
            // Si le lien correspond à l'URL actuelle, on ajoute la classe "active"
            link.classList.add('active');
        }
    });

});
