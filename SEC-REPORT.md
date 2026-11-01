# Rapport de veille sécurité — 2026-11-01

Dépôt : Pradel-Elagage-V2 · Branche : `chore/sec-20261101`
Méthode : `npm install` → `npm audit --json` → `npm audit fix` (sans `--force`,
uniquement des mises à jour mineures/patch) → `npm run build`.

## Synthèse

| État | Critique | Haute | Moyenne | Basse | Total |
|------|----------|-------|---------|-------|-------|
| Avant | 0 | 6 | 3 | 0 | **9** |
| Après | 0 | 0 | 0 | 0 | **0** |

**Résultat : 9 vulnérabilités corrigées, 0 restante.** Le build
(`npm run build`) passe après correction.

## Vulnérabilités corrigées

| Paquet | Sévérité | Avant | Après | Correctif |
|--------|----------|-------|-------|-----------|
| `astro` (direct) | moyenne | 7.3.1 | 7.3.8 | XSS réfléchi/stocké via contenu `<script>`/`<style>` non échappé (GHSA-98hj-9722-w3j8) ; injection CSS arbitraire dans les View Transitions (GHSA-mpr7-6m5w-76rw) |
| `undici` (transitif) | haute | 8.10.2 | 8.12.3 | DoS multiples, contournement de validation TLS, empoisonnement de cache / divulgation inter-utilisateurs via redirections cross-origin, bypass SRI (GHSA-4qv8-2p9j-2685, -f72v-6w45-q472, -xjj6-f33q-929c, -4w7w-5xrc-9h26, -2m5v-pch6-74hx, -qrxm-fqhp-jwvm, -9fm3-97px-rjf6, -55wc-3pg8-jfw6) |
| `vite` (transitif) | haute | 8.2.2 | 8.3.5 | Exécution de commande arbitraire et contournement `fs.existsSync` dans launch-editor, fuite de fichiers hors `server.fs`, exécution de script cross-origin (GHSA-698v-4r3x-3vcv, -r825-w8mm-5pxw, -587h-7wmj-h5pm, -9jrq-w75r-8gcw, -rq7h-c2jc-7f22, -vfpm-58rq-9qcg) |
| `devalue` (transitif) | haute | 5.9.2 | 6.0.3 | Sérialisation de mémoire partagée, expansions quadratiques, contournement `__proto__`, rejet de promesse non géré (GHSA-j22f-vq7h-c4qm, -hx4r-w6wj-j8fg, -mcm9-63f2-9j32, -wf3x-273g-mvxv, -x5rw-q4pp-hg5g, -4q55-j62x-fr9h, -r9w8-h9r3-54w4) |
| `sharp` (transitif) | haute | 0.35.4 | 0.35.5 | Vulnérabilité dans la dépendance librsvg, CVE-2026-96889 (GHSA-wq5f-xc86-pv6w) |
| `source-map-js` (transitif) | haute | 1.2.1 | 1.2.2 | Déni de service de la boucle d'événements via offsets de sections indexées (GHSA-68fv-2mgg-jv7q) |
| `zod` (transitif) | haute | 4.5.4 | 4.6.7 | Épuisement mémoire lors de la validation de collections contraintes surdimensionnées (GHSA-mrhx-c7xc-m3w5) |
| `fast-uri` (transitif) | moyenne | 3.1.7 | 3.1.9 | Normalisation d'hôte incohérente, usurpation de schéma d'URI, confusion d'hôte (GHSA-hrr3-gc8f-f4qj, -w74x-v6f9-j3xg, -xhq7-xmqj-769h, -wjr9-j795-jxcr, -333x-w4r6-6crp) |
| `smol-toml` (transitif) | moyenne | 1.8.0 | 1.9.1 | `parse()` en temps quadratique sur documents malformés (GHSA-r4xh-jqrq-34v2) |

## Vulnérabilités restantes

Aucune — `npm audit` rapporte 0 vulnérabilité après correction.

## Notes et actions manuelles suggérées

- **Astro plafonné à 7.3.8 (au lieu de 7.4.4)** : `npm audit fix` avait d'abord
  remonté `astro` en 7.4.4, qui exige Node >= 22.23.4 et cassait le build
  (environnement en Node 22.22.1). La version 7.3.8 corrige les deux avis tout
  en restant compatible (Node >= 22.12.0).
  → **Action suggérée :** mettre à jour Node.js en >= 22.23.4 (env de build et
  CI), puis passer à `astro@^7.4` dans une veille ultérieure.
- **`devalue` 5.9.2 → 6.0.3** : montée de version majeure, mais appliquée
  automatiquement par `npm audit fix` en tant que dépendance transitive —
  aucune contrainte directe n'a été forcée (`--force` non utilisé).
- **Avertissements `EBADENGINE`** : quelques paquets transitifs
  (`@astrojs/telemetry`, `@astrojs/prism`, `@astrojs/internal-helpers`)
  déclarent Node >= 22.23.4. Ce sont des avertissements non bloquants ; le
  build passe. Ils disparaîtront avec la montée de Node.
- **Vérifications effectuées :** `npm audit` → 0 vulnérabilité ;
  `npm run build` → succès (7 pages générées).
