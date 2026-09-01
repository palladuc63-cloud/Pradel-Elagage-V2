<!DOCTYPE html>

<html lang="fr" <?php language_attributes(); ?>>



<head>

  <meta charset="<?php bloginfo('charset'); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <meta name="theme-color" content="#39887B" />

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      initMap();
    });

    function initMap() {
      const companyLocation = {
        lat: 45.86693676923829,
        lng: 3.5824949075896733
      };

      var map = new google.maps.Map(document.getElementById("google-map"), {
        center: companyLocation,
        zoom: 13,
        mapTypeControl: false, // Désactive les contrôles de changement de type de carte
        styles: [{
            featureType: "landscape",
            elementType: "geometry",
            stylers: [{
              color: "#B8CCB0"
            }],
          },
          {
            featureType: "administrative",
            elementType: "labels.text.fill",
            stylers: [{
              color: "#344E50"
            }],
          },
          {
            featureType: "road",
            elementType: "geometry",
            stylers: [{
              color: "#39897B",
              saturation: -50,
            }, ],
          },
          {
            featureType: "road",
            elementType: "labels.text.fill",
            stylers: [{
              color: "#FFFFFF"
            }],
          },
          {
            featureType: "poi.business", // Masquer les commerces (restaurants, boutiques, etc.)
            stylers: [{
              visibility: "off"
            }],
          },
          {
            featureType: "landscape",

            featureType: "poi.business",
            stylers: [{
              visibility: "off"
            }], // Masquer les commerces (restaurants,

            elementType: "geometry",
            stylers: [{
              color: "#B8CCB0", // Couleur du fond de carte #B8CCB0 #39897B
            }, ],
          },
          {
            featureType: "administrative",
            elementType: "labels.text.fill",
            stylers: [{
              color: "#344E50", // Couleur du texte administratif
            }, ],
          },
          {
            featureType: "road",
            elementType: "geometry",
            stylers: [{
              color: "#39897B", // Couleur des routes
              saturation: -50, // Valeur de l'opacité, ajustez cette valeur selon vos besoins
            }, ],
          },
          {
            featureType: "road",
            elementType: "labels.text.fill", // Couleur des numéros de route
            stylers: [{
              color: "#FFFFFF", // Couleur des numéros de route
            }, ],
          },

        ],
      });

      // Personnalisation du marqueur
      const customMarker = new google.maps.Marker({
        position: companyLocation,
        map: map,
        title: "Emplacement de l'entreprise",
        icon: {
          url: "/favicon.ico",
          scaledSize: new google.maps.Size(40, 40), // Taille de l'icône
        },
      });

      // Personnalisation de la position des boutons
      map.setOptions({
        fullscreenControl: true, // Activer le bouton de plein écran
        fullscreenControlOptions: {
          position: google.maps.ControlPosition.LEFT_BOTTOM, // Position du bouton de plein écran
        },

        zoomControlOptions: {
          position: google.maps.ControlPosition.RIGHT_BOTTOM,
        },
        mapTypeControlOptions: {
          style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
          position: google.maps.ControlPosition.LEFT_BOTTOM,
        },
      });

      // Vous pouvez également ajouter une info-bulle personnalisée au marqueur
      const infowindow = new google.maps.InfoWindow({
        content: `
      <h2 class="titreInfoBulleGoogleMaps">ICI C EST PRADEL ELAGAGE</h2>
      <p class="txtInfoBulleGoogleMaps">Services d’élagage d’abattage 🌳 et vente de Bois de chauffage 🪵 à Thiers.</p>
      <p class="txtInfoBulleGoogleMaps">Je propose également un service de vente et de livraison de bois de chauffage. 100% feuillus 🌳, mes dimensions 25, 33, 40, 50 cm, en livraison 🚚 de 5 stères et sur la zone de Thiers 🔪 et de la montagne Thiernoise ⛰️.</p>
      <p class="txtInfoBulleGoogleMaps">Si vous avez des questions ❓ n'hésitez pas à me contacter de préférence par ☎️ téléphone ☎️.</p>`,
      });

      // Lorsqu'un utilisateur clique sur le marqueur, afficher l'info-bulle
      customMarker.addListener("click", () => {
        infowindow.open(map, customMarker);
      });
    }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH-p-HWALe7e2mCk_JZ3pMguSOoPWZaig&callback=initMap" defer></script>

  <?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>



  <header class="header">

    <!-- Menu responsive  -->

    <div class="containerMenuHeaderResponsive">

      <div id="burger-menu">

        <span></span>

      </div>

      <img src="<?php echo get_template_directory_uri(); ?>/img/LogoTeddyV2.webp" alt="Logo Elagage Thiers">


      <div id="menu">

        <ul>

          <li><a href="https://www.pradel-elagage.fr/">Accueil</a></li>

          <li><a href="https://www.pradel-elagage.fr/elagage-thiers-forez/">Elagage</a></li>

          <li><a href="https://www.pradel-elagage.fr/bois-de-chauffage-thiers/">Bois</a></li>

          <li><a href="https://www.pradel-elagage.fr/contact/">Contact</a></li>

        </ul>

      </div>

    </div>


    <!-- Menu classique -->



    <nav class="containerMenuHeader">
      <a class="lienMenu page-accueil active-menu-item" href="https://www.pradel-elagage.fr">ACCUEIL</a>
      <a class="lienMenu page-elagage active-menu-item" href="https://www.pradel-elagage.fr/elagage-thiers-forez/">ELAGAGE</a>
      <div class="containerLogo">
        <a href="<?php echo home_url('/'); ?>">
          <img class="logoHeader" src="<?php echo get_template_directory_uri();?>/img/LogoTeddy.png" alt="Logo Elagage Thiers">
        </a>
      </div>
      <a class="lienMenu page-bois active-menu-item" href="https://www.pradel-elagage.fr/bois-de-chauffage-thiers/">BOIS</a>
      <a class="lienMenu page-contact active-menu-item" href="https://www.pradel-elagage.fr/contact/">CONTACT</a>
    </nav>



  </header>



  <?php wp_body_open(); ?>