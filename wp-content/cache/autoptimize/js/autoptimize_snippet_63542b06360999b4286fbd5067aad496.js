document.addEventListener("DOMContentLoaded",function(){if(!cookiesAccepted()){createCookieBanner();}});function createCookieBanner(){var banner=document.createElement("div");banner.classList.add('containerCookie');banner.innerHTML=`
        <div id="cookie-banner" class="cookie-banner">
            <p class="cookieTxt">Nous utilisons des cookies pour améliorer votre expérience sur notre site. En continuant à naviguer, vous acceptez notre utilisation des cookies.</p>
            <button id="accept-cookies" class="accept-cookies">ACCEPTER</button>
            <button id="reject-cookies" class="reject-cookies">REFUSER</button>
        </div>
    `;document.body.appendChild(banner);document.getElementById("accept-cookies").addEventListener("click",acceptCookies);document.getElementById("reject-cookies").addEventListener("click",rejectCookies);}
function acceptCookies(){document.cookie="cookiesAccepted=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";var banner=document.getElementById("cookie-banner");banner.parentNode.removeChild(banner);}
function rejectCookies(){document.cookie="cookiesAccepted=false; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/";var banner=document.getElementById("cookie-banner");banner.parentNode.removeChild(banner);}
function cookiesAccepted(){return document.cookie.includes("cookiesAccepted=true");};