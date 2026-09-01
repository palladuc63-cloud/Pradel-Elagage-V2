document.addEventListener("DOMContentLoaded", function () {
  // Vérifiez si le consentement a déjà été donné (par exemple, en vérifiant un cookie).
  if (!cookiesAccepted()) {
    // Créez la bannière de consentement ici.
    createCookieBanner();
  }
});

// Fonction pour créer la bannière de consentement.
function createCookieBanner() {
  var banner = document.createElement("div");
  banner.classList.add('containerCookie');
  banner.innerHTML = `
        <div id="cookie-banner" class="cookie-banner">
            <p class="cookieTxt">Nous utilisons des cookies pour améliorer votre expérience sur notre site. En continuant à naviguer, vous acceptez notre utilisation des cookies.</p>
            <button id="accept-cookies" class="accept-cookies">ACCEPTER</button>
            <button id="reject-cookies" class="reject-cookies">REFUSER</button>
        </div>
    `;

  // Ajoutez la bannière au corps du document.
  document.body.appendChild(banner);

  // Attachez des gestionnaires d'événements pour accepter et refuser les cookies.
  document
    .getElementById("accept-cookies")
    .addEventListener("click", acceptCookies);
  document
    .getElementById("reject-cookies")
    .addEventListener("click", rejectCookies);
}

// Fonction pour accepter les cookies.
function acceptCookies() {
  document.cookie =
    "cookiesAccepted=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";

  // Supprimez la bannière de consentement.
  var banner = document.getElementById("cookie-banner");
  banner.parentNode.removeChild(banner);
}

// Fonction pour refuser les cookies.
function rejectCookies() {
  document.cookie =
    "cookiesAccepted=false; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";

  // Supprimez la bannière de consentement.
  var banner = document.getElementById("cookie-banner");
  banner.parentNode.removeChild(banner);
}

// Fonction pour vérifier si le consentement a déjà été donné.
function cookiesAccepted() {
  return document.cookie.includes("cookiesAccepted=true");
}
