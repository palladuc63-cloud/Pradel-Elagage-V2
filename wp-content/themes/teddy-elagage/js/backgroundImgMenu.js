document.addEventListener("DOMContentLoaded", function() {
    const lienMenus = document.querySelectorAll(".lienMenu");
    const imageBaseUrl = custom_vars.template_directory + '/img/';

    // Obtenir l'URL de la page actuelle
    const currentPageUrl = window.location.href;

    lienMenus.forEach(lienMenu => {
        const backgroundImage = document.createElement("div");
        backgroundImage.classList.add("backgroundImage");

        // Obtenir l'URL liée au lien du menu
        const menuLinkUrl = lienMenu.getAttribute("href");

        // Vérifier si l'URL de la page correspond à l'URL du lien du menu
        if (currentPageUrl === menuLinkUrl) {
            backgroundImage.style.opacity = "0.2"; // Appliquer le fond persistant
        }

        if (lienMenu.classList.contains('page-accueil')) {
            backgroundImage.style.backgroundImage = `url(${imageBaseUrl}IconeAccueil.png)`;
        } else if (lienMenu.classList.contains('page-contact')) {
            backgroundImage.style.backgroundImage = `url(${imageBaseUrl}IconeContact.png)`;
        } else if (lienMenu.classList.contains('page-elagage')) {
            backgroundImage.style.backgroundImage = `url(${imageBaseUrl}IconeElagage.png)`;
        } else if (lienMenu.classList.contains('page-bois')) {
            backgroundImage.style.backgroundImage = `url(${imageBaseUrl}IconeBois.png)`;
        }
        lienMenu.appendChild(backgroundImage);

        lienMenu.addEventListener("mouseenter", () => {
            backgroundImage.style.opacity = "0.2";
        });

        lienMenu.addEventListener("mouseleave", () => {
            // Vérifier si l'URL de la page correspond à l'URL du lien du menu
            if (currentPageUrl !== menuLinkUrl) {
                backgroundImage.style.opacity = "0"; // Réinitialiser l'opacité
            }
        });
    });
});

