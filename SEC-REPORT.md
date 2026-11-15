# Rapport de veille sécurité — dépendances npm

**Date :** 15 novembre 2026
**Périmètre :** `npm audit` sur `package-lock.json` (prod + dev)
**Environnement :** Node v22.22.1, npm 9.2.0

## Synthèse

| État | Critique | Haute | Modérée | Basse | Total |
|---|---|---|---|---|---|
| Avant | 0 | 6 | 3 | 0 | 9 |
| Après | 0 | 0 | 1 | 0 | 1 |

## Vulnérabilités trouvées

| Paquet | Sévérité max | Rôle | Avis principaux |
|---|---|---|---|
| `astro` | modérée | framework (dep. directe) | XSS réfléchie/stockée via balises `<script>`/`<style>` non échappées (GHSA-98hj-9722-w3j8), injection CSS dans View Transitions (GHSA-mpr7-6m5w-76rw), XSS par injection d'attribut sur noms de balises dynamiques (GHSA-mh32-jxcr-mh9f), lecture de fichiers via endpoint image de `@astrojs/node` (GHSA-r3h5-4585-7x3w) |
| `devalue` | haute | transitive (astro) | Sérialisation de mémoire partagée, DoS par amplification CPU, rejet `__proto__` contournable, etc. (7 avis) |
| `undici` | haute | transitive (unifont) | DoS EventSource/décompression/TLS, empoisonnement de cache, contournement SRI et validation TLS (8 avis) |
| `vite` | haute | transitive (astro) | Exécution de commande via `launch-editor`, fuite de fichiers hors `server.fs.allow` (6 avis, contexte dev-server) |
| `zod` | haute | transitive (astro) | Épuisement mémoire sur collections contraintes surdimensionnées |
| `sharp` | haute | transitive (traitement images) | Vulnérabilité librsvg CVE-2026-96889 |
| `fast-uri` | modérée | transitive (ajv) | Normalisation d'hôte/schéma URI incohérente (5 avis) |
| `smol-toml` | modérée | transitive (astro) | Parsing TOML en temps quadratique (DoS) |
| `source-map-js` | haute | transitive (postcss/css-tree) | DoS via offsets de sections de source-map indexées |

## Corrections appliquées

Mises à jour **mineures/patch uniquement**, sans `--force` ni changement de majeure :

| Paquet | Avant | Après |
|---|---|---|
| `astro` (directe, `package.json`) | 7.3.1 (`^7.3.1`) | 7.3.8 (`^7.3.8`) |
| `vite` | 8.2.x | 8.3.8 |
| `devalue` | ≤5.9.2 | 5.9.4 |
| `undici` | ≤8.12.1 | 8.12.4 |
| `zod` | <4.6.6 | 4.6.7 |
| `sharp` | <0.35.5 | 0.35.5 |
| `fast-uri` | ≤3.1.8 | 3.1.9 |
| `smol-toml` | ≤1.8.0 | 1.9.1 |
| `source-map-js` | ≤1.2.1 | 1.2.2 |

**Vérification :** `npm run build` passe (7 pages générées, sitemap OK).

## Vulnérabilités restantes

| Paquet | Sévérité | Avis | Pourquoi non corrigé |
|---|---|---|---|
| `astro` 7.3.8 | modérée | GHSA-r3h5-4585-7x3w — lecture de fichiers via l'endpoint image de **`@astrojs/node`** (corrigé en astro 7.4.7) | Le correctif exige astro ≥7.4.5, or **toute la branche 7.4.x requiert Node ≥22.23.4** ; l'environnement est en Node 22.22.1. Le bump vers 7.4.12 a été testé : `astro build` échoue immédiatement (« Node.js not supported »). Retour arrière appliqué conformément à la procédure. **Impact concret nul ici :** `@astrojs/node` n'est pas installé, le site est en `output: 'static'` — l'endpoint image concerné n'existe pas dans ce projet. |
| `astro` 7.3.8 | basse | GHSA-mh32-jxcr-mh9f — XSS par injection d'attribut sur noms de balises dynamiques (corrigé en 7.4.5) | Même contrainte de version Node. Risque faible : site vitrine statique, pas de noms de balises issus de données externes a priori. |

Note : `npm audit` agrège ces deux avis sous une seule entrée « modérée » pour `astro`.

## Actions manuelles suggérées

1. **Mettre à jour Node.js ≥ 22.23.4** (ou 24 LTS) sur l'environnement de build/CI, puis :
   `npm install astro@^7.4.7 && npm audit fix` — résorbe les 2 avis restants.
   Penser à aligner le champ `engines` de `package.json` (`>=20.0.0` aujourd'hui, devenu inexact vis-à-vis d'astro 7.4.x).
2. **Ne pas relancer `npm audit fix` en l'état** : avec `astro: ^7.3.8`, il proposerait le bump vers 7.4.x qui casse le build sous Node 22.22.1.
3. Rejouer `npm run validate` (`astro check` + build + audit prod) après la mise à jour de Node.
