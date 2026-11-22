# Rapport de veille sécurité — dépendances npm

**Date :** 22 novembre 2026
**Périmètre :** `npm audit` sur `package-lock.json` (prod + dev)
**Environnement :** Node v22.22.1, npm 9.2.0 (build vérifié sous Node v22.23.4)

## Synthèse

| État | Critique | Haute | Modérée | Basse | Total |
|---|---|---|---|---|---|
| Avant | 0 | 0 | 0 | 0 | 0 |
| Après | 0 | 0 | 0 | 0 | 0 |

`npm audit --json` : 0 vulnérabilité sur 397 dépendances (291 paquets audités).

## Vulnérabilités trouvées

Aucune. Les deux avis restants de la veille du 15 novembre (GHSA-r3h5-4585-7x3w
et GHSA-mh32-jxcr-mh9f, portés par `astro`) sont résorbés : `package.json` est
désormais en `astro: ^7.4.1`, résolu en **7.4.13** — au-dessus des versions
corrigées (7.4.5 / 7.4.7).

## Corrections appliquées

Aucune nécessaire : `npm audit fix` est un no-op (« up to date », 0 vulnérabilité).
Aucune mise à jour majeure, aucun `--force` utilisé.

**Vérification :** `npm run build` **passe** (8 pages générées, sitemap OK)
sous Node v22.23.4. Il **échoue** sous le Node v22.22.1 de l'environnement
par défaut — `astro` 7.4.x exige `node >=22.23.4` et refuse de démarrer.
Échec préexistant, purement environnemental : aucun fichier du repo n'a été
modifié par cette veille hors ce rapport (arbre git propre après
`npm install`).

## Vulnérabilités restantes

Aucune.

## Actions manuelles suggérées

1. **Mettre à jour Node.js ≥ 22.23.4** (ou 24 LTS) sur l'environnement de
   build/CI — recommandation déjà formulée le 15 novembre, devenue
   **bloquante** : le `npm run build` ne passe plus sous Node 22.22.1 depuis
   le passage à `astro ^7.4.1`.
2. **Aligner le champ `engines`** de `package.json` (`>=20.0.0` aujourd'hui)
   sur l'exigence réelle `>=22.23.4`, et envisager `npm >=10.8.2`
   (avertissement EBADENGINE de `sitemap@10`).
3. Rejouer `npm run validate` (`astro check` + build + audit prod) après la
   mise à jour de Node.
