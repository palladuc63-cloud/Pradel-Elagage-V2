/*
  Données centrales du site Pradel Elagage.
  Modifiez ici les informations de l'entreprise, la navigation et les services.
  Le contenu textuel des pages (textes des slides, paragraphes, cards) sera
  intégré ici une fois l'export BDD WordPress récupéré.
*/

export const site = {
  name: 'Pradel Elagage',
  url: 'https://pradel-elagage.fr',
  description: 'Pradel Elagage — élagage, abattage, bois de chauffage et travaux TP à Thiers (63300) et dans la montagne Thiernoise.',
  themeColor: '#39887B',
  email: 'pradel.teddy@orange.fr',
  phone: '06 75 96 13 03',
  address: {
    street: '9 rue de Chantegrelet',
    locality: 'Lieu-Dit Lombard',
    postalCode: '63300',
    city: 'Thiers',
    region: 'Auvergne-Rhône-Alpes',
    country: 'FR',
  },
  geo: {
    lat: 45.86693676923829,
    lng: 3.5824949075896733,
  },
  social: {
    facebook: 'https://www.facebook.com/',
    linkedin: 'https://www.linkedin.com/',
  },
};

export const navLinks = [
  { href: '/', label: 'Accueil', class: 'page-accueil', icon: 'IconeAccueil.png' },
  { href: '/elagage-thiers-forez/', label: 'Elagage', class: 'page-elagage', icon: 'IconeElagage.png' },
  { href: '/bois-de-chauffage-thiers/', label: 'Bois', class: 'page-bois', icon: 'IconeBois.png' },
  { href: '/travaux-tp/', label: 'Travaux TP', class: 'page-tp', icon: 'un-camion.webp' },
  { href: '/contact/', label: 'Contact', class: 'page-contact', icon: 'IconeContact.png' },
];

/*
  Services affichés sur la page d'accueil (cards).
  TODO: remplacer les textes par le contenu réel depuis la BDD WordPress.
*/
export const homeServices = [
  {
    title: 'ELAGAGE',
    icon: '/img/chainsaw.webp',
    iconAlt: 'Tronçonneuse élagage Thiers',
    description: 'Mes compétences en <strong>élagage</strong> 🌳 me permettent de travailler dans les meilleures conditions afin de <strong>maintenir la sécurité</strong> 🦺 des bâtiments tout en préservant la <strong>santé</strong> 👩\u200d⚕️ <strong>de vos arbres</strong>.',
    link: '/elagage-thiers-forez/',
    linkLabel: 'En savoir +',
  },
  {
    title: 'ABATTAGE',
    icon: '/img/arbreRelou.webp',
    iconAlt: 'Abattage arbre Thiers Forez',
    description: 'Votre <strong>partenaire de confiance</strong> pour tous vos besoins en <strong>abattage</strong> dans des <strong>zones délicates</strong> ⚠️ et/ou proches de <strong>lignes électriques</strong> ⚡ et <strong>téléphoniques</strong> ☎️',
    link: '/elagage-thiers-forez/',
    linkLabel: 'En savoir +',
  },
  {
    title: 'BOIS DE CHAUFFAGE',
    icon: '/img/wood.webp',
    iconAlt: 'Bois de chauffage Thiers',
    description: 'Je suis fier de vous fournir 💁 un <strong>approvisionnement en bois de chauffage 🪵 de qualité supérieure</strong> pour répondre à vos besoins hivernaux ⛄',
    link: '/bois-de-chauffage-thiers/',
    linkLabel: 'En savoir +',
  },
  {
    title: 'TRAVAUX TP',
    icon: '/svg/mini-pelle.svg',
    iconAlt: 'Mini-pelle pour travaux TP à Thiers',
    description: 'Des <strong>travaux de terrassement</strong> et <strong> TP</strong> réalisés avec un matériel professionnel 🚜 pour vos projets d\'aménagement, défrichage et préparation de terrain.',
    link: '/travaux-tp/',
    linkLabel: 'En savoir +',
  },
];

/*
  Slides du carrousel de la page d'accueil.
  TODO: remplacer les textes et images par le contenu réel depuis la BDD.
*/
export const homeSlides = [
  {
    image: '/img/slider-elagage.webp',
    alt: 'Élagage professionnel à Thiers',
    eyebrow: 'Notre cœur de métier',
    title: 'Élagage',
    description: 'Un savoir-faire de plus de 15 ans pour préserver la santé de vos arbres et sécuriser durablement votre environnement.',
    link: '/elagage-thiers-forez/',
    linkLabel: 'Découvrir l’élagage',
  },
  {
    image: '/img/slider-bois-chauffage.webp',
    alt: 'Bois de chauffage livré autour de Thiers',
    eyebrow: 'Chaleur locale',
    title: 'Bois de chauffage',
    description: 'Du bois de qualité préparé en plusieurs dimensions, avec livraison sur Thiers et dans la montagne Thiernoise.',
    link: '/bois-de-chauffage-thiers/',
    linkLabel: 'Découvrir le bois',
  },
  {
    image: '/img/pexels-timothy-huliselan-205951426-20609454.jpg',
    alt: 'Travaux de terrassement et travaux publics à Thiers',
    eyebrow: 'Aménager vos extérieurs',
    title: 'Travaux TP',
    description: 'Terrassement, défrichage et préparation de terrain réalisés avec un matériel professionnel adapté à votre projet.',
    link: '/travaux-tp/',
    linkLabel: 'Découvrir les travaux TP',
  },
];
