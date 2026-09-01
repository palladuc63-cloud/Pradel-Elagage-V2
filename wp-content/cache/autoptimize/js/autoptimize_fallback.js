document.addEventListener("DOMContentLoaded",function(){var swiper=new Swiper(".mySwiper",{loop:true,spaceBetween:0,centeredSlides:true,autoplay:{delay:3000,disableOnInteraction:false,},pagination:{el:".swiper-pagination",clickable:true,},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev",},});var swiper2=new Swiper(".swiper-container",{loop:true,autoplay:{delay:6000,},pagination:{el:".swiper-pagination",clickable:true,},on:{slideChange:function(){var slideContents=document.querySelectorAll(".slide-content");slideContents.forEach(function(content){content.classList.remove("active-slide-content");});var activeSlide=swiper2.slides[swiper2.activeIndex];var activeContent=activeSlide.querySelector(".slide-content");if(activeContent){activeContent.classList.add("active-slide-content");}},},});var swiperContainer=document.querySelector(".swiper-container");var initialSlide=swiper2.slides[0];if(initialSlide){var initialContent=initialSlide.querySelector(".slide-content");if(initialContent){initialContent.classList.add("active-slide-content");}}
if(swiperContainer){swiperContainer.addEventListener("mouseenter",function(){swiper2.autoplay.stop();});swiperContainer.addEventListener("mouseleave",function(){swiper2.autoplay.start();});}});
document.addEventListener("DOMContentLoaded",function(){var animatedElements=document.querySelectorAll(".animated-element");animatedElements.forEach(function(element){element.classList.add("animate");});});document.addEventListener("scroll",function(){var animatedElements2=document.querySelectorAll(".animated-element-2");var windowHeight=window.innerHeight;animatedElements2.forEach(function(element){var elementOffset=element.getBoundingClientRect().top;if(elementOffset<windowHeight*1){element.classList.add("animate");}});});
// document.addEventListener("DOMContentLoaded", function() {

//   var containerImage = document.querySelector(".containerImagePresentation");

//   console.log(containerImage);

//   containerImage.classList.add("fade-in");

// });
var burgerMenu=document.getElementById('burger-menu');var overlay=document.getElementById('menu');burgerMenu.addEventListener('click',function(){this.classList.toggle("close");console.log('testpour vooir')
overlay.classList.toggle("overlay");});
document.addEventListener("DOMContentLoaded",function(){const lienMenus=document.querySelectorAll(".lienMenu");const imageBaseUrl=custom_vars.template_directory+'/img/';const currentPageUrl=window.location.href;lienMenus.forEach(lienMenu=>{const backgroundImage=document.createElement("div");backgroundImage.classList.add("backgroundImage");const menuLinkUrl=lienMenu.getAttribute("href");if(currentPageUrl===menuLinkUrl){backgroundImage.style.opacity="0.2";}
if(lienMenu.classList.contains('page-accueil')){backgroundImage.style.backgroundImage=`url(${imageBaseUrl}IconeAccueil.png)`;}else if(lienMenu.classList.contains('page-contact')){backgroundImage.style.backgroundImage=`url(${imageBaseUrl}IconeContact.png)`;}else if(lienMenu.classList.contains('page-elagage')){backgroundImage.style.backgroundImage=`url(${imageBaseUrl}IconeElagage.png)`;}else if(lienMenu.classList.contains('page-bois')){backgroundImage.style.backgroundImage=`url(${imageBaseUrl}IconeBois.png)`;}
lienMenu.appendChild(backgroundImage);lienMenu.addEventListener("mouseenter",()=>{backgroundImage.style.opacity="0.2";});lienMenu.addEventListener("mouseleave",()=>{if(currentPageUrl!==menuLinkUrl){backgroundImage.style.opacity="0";}});});});
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