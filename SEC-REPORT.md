# Rapport de veille sécurité — 2026-11-08

Repo : Pradel-Elagage-V2 — branche `chore/sec-20261108`
Méthode : `npm install` → `npm audit --json` → `npm audit fix` (correctifs
mineurs/patch uniquement, aucune version majeure, aucun `--force`).

## Vulnérabilités trouvées : 9 paquets (3 modérées, 6 élevées)

| Paquet | Sévérité | Version avant | Version après | Problèmes corrigés |
|---|---|---|---|---|
| `astro` | modérée | 7.3.1 | 7.4.1 | XSS réfléchi/stocké via balises `<script>`/`<style>` non échappées en JSX/MDX (<7.3.2) ; injection CSS dans les View Transitions (faible, ≤7.3.2) |
| `vite` (via astro) | élevée | 8.2.2 | 8.3.6 | `launch-editor` : exécution de commande arbitraire, contournement `fs.existsSync` sous Windows ; `server.fs` : fuite de fichiers hors périmètre, exécution de script cross-origin |
| `undici` | élevée | 8.10.2 | 8.12.4 | DoS (EventSource, content-encodings, renegociation TLS 1.2, decompress, WebSocket PONG) ; contournement SRI ; empoisonnement de cache / divulgation cross-user ; contournement validation de certificat TLS |
| `devalue` | élevée | 5.9.2 | 6.0.3 | Sérialisation de mémoire partagée ; amplification CPU sur tableaux creux ; expansion quadratique sur chaînes répétées ; contournement du rejet `__proto__` ; rejet non géré dans `stringifyAsync` |
| `sharp` | élevée | 0.35.4 | 0.35.5 | Vulnérabilité dans la dépendance librsvg (CVE-2026-96889) |
| `zod` | élevée | 4.5.4 | 4.6.7 | Épuisement mémoire lors de la validation de collections contraintes surdimensionnées |
| `fast-uri` | modérée | 3.1.7 | 3.1.9 | Normalisation d'hôte incohérente, usurpation de schéma d'URI, confusion d'hôte (canonicalisation WHATWG), injection de schéma |
| `smol-toml` | modérée | 1.8.0 | 1.9.1 | `parse()` en temps quadratique (rescan à la fin du document à chaque ligne de clé) |
| `source-map-js` | élevée | 1.2.1 | 1.2.2 | Déni de service de la boucle d'événements via les offsets de sections de source-map indexées |

## Vulnérabilités corrigées : 9 / 9

`npm audit` final : **0 vulnérabilité** (0 critique, 0 élevée, 0 modérée).

## Vulnérabilités restantes : aucune

## Notes et ajustements

- `npm audit fix` a d'abord remonté `astro` en 7.4.7, qui exige
  Node `>=22.23.4`. L'environnement de build étant en Node 22.22.1, le
  build échouait. `astro` a donc été épinglé à **7.4.1** — dernière
  version mineure compatible (`>=22.22.0`) — qui corrige toutes les
  vulnérabilités concernées. Aucune vulnérabilité ne réapparaît.
- `package.json` : seule la ligne `astro` passe de `^7.3.1` à `^7.4.1`
  (mise à jour mineure). Tous les autres correctifs sont des bumps
  patch/mineur de dépendances transitives dans `package-lock.json`.

## Vérification

- `npm run build` : **succès** (7 pages générées, sitemap OK).

## Actions manuelles suggérées

1. **Mettre à jour Node.js en `>=22.23.4`** sur les environnements de
   build/CI, afin de pouvoir suivre les futures mises à jour d'Astro
   (7.4.2+) sans blocage moteur.
2. Répercuter la même montée de version Node dans les workflows de
   déploiement (non modifiés ici, hors périmètre de cette veille).
3. Reprogrammer une veille la semaine prochaine : plusieurs avis
   récents (`undici`, `vite`, `devalue`) ont connu des correctifs en
   cascade, de nouveaux avis peuvent apparaître rapidement.
