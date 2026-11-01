# Audit SEO hebdomadaire — Pradel Elagage

- **Site** : https://pradel-elagage.fr (Astro statique)
- **Slug** : pradel
- **Date** : 2026-11-01
- **Périmètre** : 7 pages générées (`/`, `/elagage-thiers-forez/`, `/bois-de-chauffage-thiers/`, `/travaux-tp/`, `/contact/`, `/mentions-legales/`, `/404.html`)

## a) Score global : 76 / 100

Base technique solide (titles et descriptions uniques, canonical, Open Graph, JSON-LD LocalBusiness, sitemap, robots.txt, attributs alt soignés). Points perdus principalement sur : hiérarchie Hn de l'accueil (3 H1), règles `.htaccess` défectueuses (boucles 301 probables + soft-404), contenu d'accueil mince, incohérence sitemap/noindex, liens sociaux génériques.

## b) Constats par page

### `/` — Accueil
- **Title** : descriptif et riche en mots-clés, mais ~105 caractères → tronqué dans les SERP.
- **Meta description** : présente, ~186 caractères → légèrement longue (idéal < 160).
- **Hn** : **3 `<h1>`** (un par slide : « Élagage », « Bois de chauffage », « Travaux TP »). Aucun ne contient le nom de l'entreprise ni la localisation. Les `<h2>` des cards services sont corrects mais la hiérarchie est diluée.
- **Alt images** : corrects (slides descriptifs, icônes décoratives en `alt=""` justifié).
- **Liens internes** : cards cliquables vers 3 services + CTA contact. La card « Abattage » est filtrée de l'accueil (`featuredServices` dans `src/pages/index.astro`) : la 2e activité du site n'a aucun lien depuis le corps de la home.
- **Épaisseur** : faible (~200 mots utiles, essentiellement les slides). Pas de texte d'introduction, de zone d'intervention ni d'argumentaire.

### `/elagage-thiers-forez/` — Élagage & abattage
- **Title** : bon (~75 c). **Meta** : ~180 c, un peu longue.
- **Hn** : H1 unique (« Élagage & abattage », sans mention de Thiers — perfectible), H2/H3 propres.
- **Alt** : tous descriptifs et localisés.
- **Liens internes** : uniquement CTA contact/téléphone — aucun lien croisé vers bois/TP.
- **Contenu** : ~500 mots, bonne densité, liste de communes desservies (SEO local).

### `/bois-de-chauffage-thiers/` — Bois de chauffage
- **Title** : bon. **Meta** : ~160 c, adaptée.
- **Hn** : H1 « Bois de chauffage », H2 nombreux et pertinents, H3 dans les cards formats.
- **Alt** : corrects. **Liens internes** : CTA contact uniquement.
- **Contenu** : ~450 mots, informations utiles (essences, dimensions, seuil de livraison).

### `/travaux-tp/` — Travaux TP
- **Title** : bon. **Meta** : ~150 c.
- **Hn** : H1 « Travaux TP » générique (pourrait intégrer « terrassement »), H2/H3 corrects.
- **Alt** : corrects, image décorative bien marquée `aria-hidden`.
- **Contenu** : ~450 mots, structure en étapes pertinente.

### `/contact/` — Contact
- **Title / Meta** : bons.
- **Hn** : H1 « Contact & devis », plusieurs H2 cohérents.
- **Alt** : corrects. **Liens** : mailto/tel/itinéraire fonctionnels.
- Note hors SEO : le formulaire est désactivé, ce qui limite la conversion (déjà explicite en page).

### `/mentions-legales/` — Mentions légales
- `noindex` posé volontairement : cohérent. **En revanche la page reste dans le sitemap** → signal contradictoire (corrigé dans cette passe).
- H1 unique, H2 nombreux, contenu complet.

### `/404.html` — Page 404
- `noindex` ✓, exclue du sitemap ✓, lien retour accueil ✓.
- Canonical présent mais inutile sur une 404 (anodin).

### Sitemap / robots / .htaccess
- `sitemap-index.xml` + `sitemap-0.xml` générés, `/404` filtré.
- `robots.txt` : valide, mais l'URL du sitemap est codée en dur sur le domaine de production → fausse sur la variante GitHub Pages.
- **`public/.htaccess` (critique si déployé sur O2switch)** :
  - Les règles `RewriteRule ^elagage-thiers-forez/?$ /elagage-thiers-forez/ [R=301]` (idem bois, contact, mentions-legales) redirigent chaque URL vers elle-même → **boucle de redirections 301** sur les pages principales.
  - Le fallback `RewriteRule ^(.*)$ /404.html [L]` sert la 404 avec un statut **200** → *soft 404* pour toutes les URLs inexistantes.

### Transverse
- JSON-LD `LocalBusiness` présent : améliorable (`@id`, `openingHours`, `sameAs`, `geo` déjà présent).
- Liens sociaux du footer = URLs génériques (`facebook.com/`, `linkedin.com/`) : signal de confiance nul, voire négatif.
- Images sans attributs `width`/`height` → risque CLS ; plusieurs PNG lourds (`arbre.png`, `foret.png`, `IconeBois.png`).
- Google Fonts chargé via `@import` CSS (bloquant) malgré les `preconnect`.
- `InfoCards.astro` : composant inutilisé (code mort).
- `<link rel="icon" href="/favicon.ico">` en absolu : cassé sous le base-path GitHub Pages (corrigé dans cette passe).

## c) Top 5 actions prioritaires

1. **Corriger `public/.htaccess`** : supprimer les 301 bouclantes (source = cible) et faire renvoyer un vrai statut 404 pour les URLs inexistantes (supprimer le fallback interne ou utiliser `ErrorDocument` seul). Bloquant en production Apache.
2. **Un seul H1 sur l'accueil** : passer les titres de slides en `<h2>` (et ajuster le sélecteur CSS `.hero-card h1`), en gardant un H1 unique mentionnant « Pradel Élagage — élagueur à Thiers ».
3. **Épaissir la home** : ajouter un bloc texte (présentation, zone d'intervention, garanties), réafficher la card « Abattage » et ajouter des liens croisés entre les 3 pages services.
4. **Fiabiliser les signaux de confiance** : vraies URLs Facebook/LinkedIn (ou suppression), ajout de `sameAs` et `openingHours` au JSON-LD, attribution `width`/`height` aux images principales.
5. **Performance/contenu** : remplacer l'`@import` Google Fonts par un `<link>` ou des fichiers locaux, convertir les gros PNG en WebP, raccourcir le title de l'accueil sous ~60 caractères.

## d) 3 propositions de contenus

1. **« Quand tailler ses arbres à Thiers : le calendrier d'élagage par essence »** — guide saisonnier (feuillus, fruitiers, haies) ciblant « taille arbre Thiers », « quand élaguer » + lien vers la page élagage. Intention informationnelle forte en local.
2. **« Abattage près d'une ligne électrique ou d'une maison : comment se passe une intervention sécurisée »** — rassure sur le démontage et la proximité des réseaux, cible la longue traîne (« abattage arbre proche maison », « élagage ligne électrique ») où l'entreprise a un vrai différenciant.
3. **« Chêne, hêtre ou frêne : quel bois de chauffage choisir et combien de stères prévoir pour l'hiver »** — compare pouvoir calorifique, formats (25–50 cm) et quantités selon le logement, avec CTA livraison dans la montagne Thiernoise.

---

## Correctifs appliqués dans cette passe (sûrs, sans impact visuel/fonctionnel)

- `astro.config.mjs` : exclusion de `/mentions-legales/` du sitemap (page volontairement `noindex` → signal cohérent).
- `src/layouts/MainLayout.astro` : favicon résolu via `BASE_URL` au lieu de `/favicon.ico` absolu (conforme à la règle base-path de l'agence ; identique en production, corrigé sur la variante GitHub Pages).

Aucun correctif dans les catégories « meta descriptions manquantes / alt vides / titres vagues / liens sans texte » n'était nécessaire : toutes les pages ont un title et une description propres, tous les alt vides concernent des images décoratives dans des liens/boutons déjà nommés, et aucun lien n'est dépourvu de texte ou d'`aria-label`.
