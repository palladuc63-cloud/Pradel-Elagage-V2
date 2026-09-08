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
    icon: '/img/un-camion.webp',
    iconAlt: 'Travaux TP Thiers',
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
    image: '/img/foret.png', // TODO: remplacer par l'image réelle du slide A
    alt: 'Elagage Thiers 63300',
    text: '<h1>ÉLAGAGE</h1><p>Un savoir-faire au service de la santé de vos arbres et de votre sécurité.</p>',
    link: '/elagage-thiers-forez/',
    linkLabel: 'En savoir +',
  },
  {
    image: '/img/arbre.png', // TODO: remplacer par l'image réelle du slide B
    alt: 'Abattage Elagage Thiers 63300',
    text: '<h1>ABATTAGE</h1><p>Abattage sécurisé dans les zones délicates, proches de lignes électriques et téléphoniques.</p>',
    link: '/elagage-thiers-forez/',
    linkLabel: 'En savoir +',
  },
  {
    image: '/img/bois-de-chauffage.webp', // TODO: remplacer par l'image réelle du slide C
    alt: 'Bois de chauffage Thiers 63300',
    text: '<h1>BOIS DE CHAUFFAGE</h1><p>Bois de chauffage 100% feuux, dimensions 25, 33, 40, 50 cm. Livraison de 5 stères sur Thiers et la montagne Thiernoise.</p>',
    link: '/bois-de-chauffage-thiers/',
    linkLabel: 'En savoir +',
  },
];
