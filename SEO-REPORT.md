# Audit SEO hebdomadaire — Pradel Élagage

**Date :** 22/11/2026 · **Slug :** pradel · **Périmètre :** 8 pages (accueil, élagage, bois, travaux TP, contact, mentions légales, politique de confidentialité, 404)

## a) Score global : 82/100

Socle technique stable et sain : métas complètes sur les 8 pages, canonical cohérent (`www`), JSON-LD LocalBusiness, sitemap + robots conformes, un seul H1 par page, `alt` renseignés (ou vidés à juste titre quand décoratifs). Progression cette semaine : le `<title>` de l'accueil reprend désormais la marque comme les autres pages. Points de perte inchangés : contenu d'accueil mince, maillage interne faible, URLs sociales placeholder, chemins d'assets absolus, pages `noindex` présentes dans le sitemap.

## b) Constats par page

### Accueil `/`
- **Title :** « Élagage, abattage & bois de chauffage à Thiers (63) **| Pradel Élagage** » — **corrigé** : la marque manquait alors que les autres pages utilisent toutes le schéma « mot-clé | Pradel Élagage ».
- **Meta description :** présente, ~130 car., efficace (services + zone + ancienneté + devis).
- **Hn :** 1 seul H1 (masqué visuellement, descriptif) ; H2 sur les slides et cartes services. Correct.
- **Alt images :** tous renseignés et descriptifs (slider + icônes services).
- **Liens internes :** renvoie vers élagage, bois, TP, contact — mais aucun lien contextuel dans du texte rédactionnel.
- **Épaisseur du contenu :** **faible** (~200 mots) — quasi uniquement cartes et slider. Principal point faible du site.
- **Remarque :** emojis dans les descriptions de cartes — neutre pour le SEO, image de marque à arbitrer.

### Élagage `/elagage-thiers-forez/`
- **Title / meta :** optimisés, mots-clés locaux présents.
- **Hn :** 1 H1 + hiérarchie H2/H3 propre.
- **Alt :** 11 images, toutes décrites avec mots-clés naturels. Très bien.
- **Liens internes :** uniquement vers contact — aucun renvoi vers bois ou TP dans le corps de page.
- **Contenu :** bon (~500 mots, zones desservies listées, prestations détaillées).

### Bois `/bois-de-chauffage-thiers/`
- **Title / meta :** optimisés (essences, dimensions, seuil de livraison — différenciant).
- **Hn :** 1 H1 + H2/H3 cohérents.
- **Alt :** tous renseignés et descriptifs.
- **Liens internes :** contact uniquement.
- **Contenu :** correct (~450 mots), communes de livraison citées.

### Travaux TP `/travaux-tp/`
- **Title / meta :** optimisés (terrassement, défrichage, mini-pelle).
- **Hn :** 1 H1 + H2/H3 propres.
- **Alt :** tous renseignés ; l'image décorative de la section « zone » porte bien `alt=""` + `aria-hidden`. Conforme.
- **Liens internes :** contact uniquement.
- **Contenu :** correct (~450 mots).

### Contact `/contact/`
- **Title / meta :** corrects.
- **Hn :** 1 H1 ; plusieurs H2 (dont « Votre projet » dans le formulaire) — acceptable.
- **Alt :** toutes renseignées.
- **Liens internes :** lien vers politique de confidentialité ; aucun renvoi vers les pages services.
- **Remarque :** formulaire désactivé assumé — pas un problème SEO, mais friction conversion.

### Mentions légales `/mentions-legales/`
- **noindex :** oui (correct). Title/meta présents. Rien à signaler.

### Politique de confidentialité `/politique-confidentialite/`
- **noindex :** oui (correct). Title/meta présents, contenu structuré en H2. Rien à signaler.

### 404 `/404.html`
- **noindex :** oui, exclue du sitemap, texte clair + lien retour accueil. Correct.

### Éléments transverses
- **robots.txt :** conforme (URL sitemap avec `www`, cohérent avec les canonicals).
- **Sitemap :** généré (`sitemap-index.xml` + `sitemap-0.xml`, recopié en `sitemap.xml`), 404 exclue — **mais les 2 pages `noindex` (mentions légales, politique) y figurent** : incohérence mineure, à filtrer dans `astro.config.mjs`.
- **Canonical :** présent sur toutes les pages, domaine `www` cohérent.
- **JSON-LD :** LocalBusiness avec adresse, geo, téléphone, `priceRange` — à enrichir (horaires, `sameAs`, `areaServed` détaillé).
- **Alt décoratifs :** conformes partout (icônes de navigation, logos dans liens `aria-label`, images `aria-hidden`).
- **Liens sans texte :** aucun (icônes dans des liens `aria-label` ou accompagnés d'un libellé).
- **Réseaux sociaux :** liens footer vers `facebook.com` / `linkedin.com` génériques (placeholders) — à remplacer ou retirer, inchangé.
- **Assets :** plusieurs `url('/img/…')` / `url('/svg/…')` et `src="/…"` absolus — risque si déploiement sous sous-chemin (non corrigé, hors périmètre « sûr »).
- **Composant `InfoCards` :** inutilisé, emploie des `<h1>` par carte — à corriger ou supprimer si réutilisation prévue.

## c) Top 5 actions prioritaires

1. **Épaissir la page d'accueil** : ajouter un bloc éditorial (~300-400 mots) — présentation de l'entreprise, zone d'intervention, garanties. Page la plus importante et la plus pauvre en texte.
2. **Renforcer le maillage interne** : liens contextuels entre les 3 pages services (ex. bois ↔ élagage) et depuis le corps des pages vers les prestations connexes.
3. **Corriger les URLs sociales placeholder** ou masquer les liens — signal de confiance et cohérence `sameAs` dans le JSON-LD.
4. **Exclure les pages `noindex` du sitemap** (filter `astro.config.mjs`) pour aligner sitemap et directives robots.
5. **Harmoniser les chemins d'assets** (CSS `url('/…')`, `src="/…"` en dur, favicon du marqueur carte) avec `import.meta.env.BASE_URL` pour sécuriser le déploiement sous sous-chemin.

## d) 3 propositions de contenus

1. **« Défricher un terrain avant de construire : mini-pelle ou débroussaillage ? »** — nourrit la page Travaux TP, cible les recherches de particuliers avant projet de construction dans la montagne Thiernoise.
2. **« Arbre dangereux après une tempête : les bons réflexes et qui appeler »** — capte les requêtes d'urgence locale (« arbre tombé Thiers », « élagueur urgence 63 ») et met en avant l'abattage sécurisé.
3. **« Faut-il une autorisation pour abattre un arbre sur son terrain en Auvergne ? »** — requête informationnelle fréquente à faible concurrence, renforce l'expertise et renvoie vers la page élagage/abattage.

---

*Correctifs appliqués dans ce lot : ajout de « | Pradel Élagage » au `<title>` de l'accueil (cohérence de marque avec les autres pages). Aucun changement de structure, design ou fonctionnalité.*
