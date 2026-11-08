# Audit SEO hebdomadaire — Pradel Élagage

**Date :** 08/11/2026 · **Slug :** pradel · **Périmètre :** 7 pages (accueil, élagage, bois, travaux TP, contact, mentions légales, 404)

## a) Score global : 80/100

Socle technique solide (métas complètes, canonical, JSON-LD LocalBusiness, sitemap, un seul H1 par page, textes optimisés pour le local). Points de perte : contenu d'accueil mince, maillage interne limité, données structurées perfectibles, URLs sociales placeholder, chemins d'assets absolus.

## b) Constats par page

### Accueil `/`
- **Title :** « Élagage, abattage & bois de chauffage à Thiers (63) » — riche en mots-clés, mais sans la marque.
- **Meta description :** présente, ~130 car., efficace.
- **Hn :** 1 seul H1 (masqué visuellement, descriptif) ; H2 sur les slides et cartes services. Correct.
- **Alt images :** tous renseignés et descriptifs (slider + icônes services).
- **Liens internes :** renvoie vers élagage, bois, TP, contact. Correct mais aucun lien contextuel dans du texte rédactionnel.
- **Épaisseur du contenu :** **faible** (~200 mots) — quasi uniquement cartes et slider, presque pas de texte éditorial. Point faible principal.
- **Remarque :** les descriptions de cartes contiennent des emojis — neutre pour le SEO, image de marque à arbitrer.

### Élagage `/elagage-thiers-forez/`
- **Title / meta :** optimisés, mots-clés locaux présents.
- **Hn :** 1 H1 + hiérarchie H2/H3 propre.
- **Alt :** 11 images, toutes décrites avec mots-clés naturels. Très bien.
- **Liens internes :** uniquement vers contact — pas de renvoi vers bois ou TP dans le corps de page.
- **Contenu :** bon (zones desservies listées, prestations détaillées ~500 mots).

### Bois `/bois-de-chauffage-thiers/`
- **Title / meta :** optimisés (essences, dimensions, seuil de livraison dans la meta — différenciant).
- **Hn :** 1 H1 + H2/H3 cohérents.
- **Alt :** tous renseignés.
- **Liens internes :** contact uniquement.
- **Contenu :** correct (~450 mots), communes de livraison citées.

### Travaux TP `/travaux-tp/`
- **Title / meta :** optimisés (terrassement, défrichage, mini-pelle).
- **Hn :** 1 H1 + H2/H3 propres.
- **Alt :** tous renseignés ; une image décorative portait à la fois `alt` et `aria-hidden` → corrigé (`alt=""`).
- **Liens internes :** contact uniquement.
- **Contenu :** correct (~450 mots).

### Contact `/contact/`
- **Title / meta :** corrects.
- **Hn :** 1 H1 ; plusieurs H2 (dont « Votre projet » dans le formulaire) — acceptable.
- **Liens internes :** lien vers mentions légales (ancre confidentialité) ; aucun renvoi vers les pages services.
- **Remarque :** formulaire désactivé assumé — pas un problème SEO, mais friction conversion.

### Mentions légales `/mentions-legales/`
- **noindex :** oui (correct). Title/meta présents. Rien à signaler.

### 404 `/404.html`
- **noindex :** oui, exclue du sitemap, texte clair + lien retour accueil. Correct.

### Éléments transverses
- **robots.txt :** présent ; l'URL du sitemap était sans `www` alors que les canonicals utilisent `www.pradel-elagage.fr` → **corrigé**.
- **Sitemap :** généré (`sitemap-index.xml` + `sitemap-0.xml`, recopié en `sitemap.xml`), 404 exclue. Conforme.
- **Canonical :** présent sur toutes les pages, domaine `www` cohérent.
- **JSON-LD :** LocalBusiness avec adresse, geo, téléphone — bon ; à enrichir (horaires, `sameAs`, `areaServed` détaillé, `priceRange` déjà présent).
- **Favicon :** chemin absolu `/favicon.ico` → corrigé via `BASE_URL` (règle base-path).
- **Assets CSS :** plusieurs `url('/img/...')` / `url('/svg/...')` absolus dans les feuilles de style — à risque si déploiement sous sous-chemin (non corrigé, hors périmètre « sûr »).
- **Liens sans texte :** aucun (icônes dans des liens `aria-label`). Les `alt` décoratifs redondants (icônes de nav, réseaux sociaux, logos dans liens labellisés) → **vidés** (`alt=""`).
- **Réseaux sociaux :** les liens footer pointent vers `facebook.com` / `linkedin.com` génériques (placeholders) — à remplacer par les vraies pages ou à retirer.
- **Composant `InfoCards` :** inutilisé, emploie des `<h1>` par carte — à corriger ou supprimer si réutilisation prévue.

## c) Top 5 actions prioritaires

1. **Épaissir la page d'accueil** : ajouter un bloc éditorial (~300-400 mots) — présentation de l'entreprise, zone d'intervention, garanties — c'est la page la plus importante et la plus pauvre en texte.
2. **Renforcer le maillage interne** : liens contextuels entre les 3 pages services (ex. bois ↔ élagage), et ajouter la navigation principale dans le footer.
3. **Enrichir le JSON-LD LocalBusiness** : `openingHours`, `sameAs` (vraies URLs sociales), `areaServed` avec les communes citées, éventuellement `Service` par activité.
4. **Corriger les URLs sociales placeholder** ou masquer les liens — signal de confiance et cohérence `sameAs`.
5. **Harmoniser les chemins d'assets** (CSS `url('/…')`, images en dur) avec `import.meta.env.BASE_URL` pour sécuriser le déploiement sous sous-chemin.

## d) 3 propositions de contenus

1. **« Quand tailler ses arbres dans le Puy-de-Dôme ? Calendrier et conseils par essence »** — cible les requêtes saisonnières locales (« taille arbre Thiers », « quand élaguer ») et renforce la page élagage en lien interne.
2. **« Élagage près des lignes électriques : ce qu'il faut savoir avant d'intervenir »** — met en avant une expertise différenciante déjà mentionnée sur le site, faible concurrence sur cette requête locale.
3. **« Chêne, hêtre ou frêne : quel bois de chauffage choisir pour votre poêle ou insert ? »** — capte les recherches pré-hivernales (« acheter bois de chauffage Thiers », « quel bois brûle le mieux ») et alimente la page bois.

---

*Correctifs appliqués dans ce lot : `robots.txt` (URL sitemap avec `www`), favicon via `BASE_URL`, attributs `alt` décoratifs vidés (header, footer, travaux-tp). Aucun changement de structure, design ou fonctionnalité.*
