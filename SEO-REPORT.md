# Audit SEO hebdomadaire — Pradel Élagage

**Date :** 15/11/2026 · **Slug :** pradel · **Périmètre :** 7 pages (accueil, élagage, bois, travaux TP, contact, mentions légales, 404)

## a) Score global : 81/100

Socle technique solide et stable : métas complètes sur toutes les pages, canonical cohérent (`www`), JSON-LD LocalBusiness, sitemap + robots conformes, un seul H1 par page, attributs `alt` systématiquement renseignés (ou vidés quand décoratifs). Points de perte inchangés : contenu d'accueil mince, maillage interne faible, URLs sociales placeholder, chemins d'assets absolus, données structurées perfectibles.

## b) Constats par page

### Accueil `/`
- **Title :** « Élagage, abattage & bois de chauffage à Thiers (63) » — riche en mots-clés locaux ; la marque n'y figure pas (contrairement aux autres pages qui utilisent « | Pradel Élagage »).
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
- **Liens internes :** lien vers mentions légales (ancre confidentialité) ; aucun renvoi vers les pages services.
- **Remarque :** formulaire désactivé assumé — pas un problème SEO, mais friction conversion.

### Mentions légales `/mentions-legales/`
- **noindex :** oui (correct). Title/meta présents. Rien à signaler.

### 404 `/404.html`
- **noindex :** oui, exclue du sitemap, texte clair + lien retour accueil. Correct.

### Éléments transverses
- **robots.txt :** conforme (URL sitemap avec `www`, cohérent avec les canonicals).
- **Sitemap :** généré (`sitemap-index.xml` + `sitemap-0.xml`, recopié en `sitemap.xml`), 404 exclue. Conforme.
- **Canonical :** présent sur toutes les pages, domaine `www` cohérent.
- **JSON-LD :** LocalBusiness avec adresse, geo, téléphone, `priceRange` — à enrichir (horaires, `sameAs`, `areaServed` détaillé).
- **Alt décoratifs :** 2 icônes du menu « Services » portaient un `alt` non vide à l'intérieur d'un `span aria-hidden="true"` → **corrigé** (`alt=""`).
- **Liens sans texte :** aucun (icônes dans des liens `aria-label`).
- **Réseaux sociaux :** liens footer vers `facebook.com` / `linkedin.com` génériques (placeholders) — à remplacer ou retirer.
- **Assets :** plusieurs `url('/img/…')` / `url('/svg/…')` et `src="/…"` absolus — risque si déploiement sous sous-chemin (non corrigé, hors périmètre « sûr »).
- **Composant `InfoCards` :** inutilisé, emploie des `<h1>` par carte — à corriger ou supprimer si réutilisation prévue.

## c) Top 5 actions prioritaires

1. **Épaissir la page d'accueil** : ajouter un bloc éditorial (~300-400 mots) — présentation de l'entreprise, zone d'intervention, garanties. Page la plus importante et la plus pauvre en texte.
2. **Renforcer le maillage interne** : liens contextuels entre les 3 pages services (ex. bois ↔ élagage) et navigation principale dans le footer.
3. **Enrichir le JSON-LD LocalBusiness** : `openingHours`, `sameAs` (vraies URLs sociales), `areaServed` avec les communes citées, éventuellement `Service` par activité.
4. **Corriger les URLs sociales placeholder** ou masquer les liens — signal de confiance et cohérence `sameAs`.
5. **Harmoniser les chemins d'assets** (CSS `url('/…')`, `src="/…"` en dur, favicon du marqueur carte) avec `import.meta.env.BASE_URL` pour sécuriser le déploiement sous sous-chemin.

## d) 3 propositions de contenus

1. **« Quand tailler ses arbres dans le Puy-de-Dôme ? Calendrier et conseils par essence »** — cible les requêtes saisonnières locales (« taille arbre Thiers », « quand élaguer ») et renforce la page élagage en lien interne.
2. **« Élagage près des lignes électriques : ce qu'il faut savoir avant d'intervenir »** — met en avant une expertise différenciante déjà mentionnée sur le site, faible concurrence sur cette requête locale.
3. **« Chêne, hêtre ou frêne : quel bois de chauffage choisir pour votre poêle ou insert ? »** — capte les recherches pré-hivernales (« acheter bois de chauffage Thiers ») et alimente la page bois.

---

*Correctifs appliqués dans ce lot : attributs `alt` vidés sur les 2 icônes décoratives du menu « Services » (Header.astro) — `alt` non vide dans un conteneur `aria-hidden`. Aucun changement de structure, design ou fonctionnalité.*
