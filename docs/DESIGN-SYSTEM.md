# Pradel Élagage — Design system

> Grammaire canonique partagée avec l'écosystème Point
> (voir `Point-site/docs/DESIGN-TOKENS.md`). Palette reprise du thème
> WordPress `teddy-elagage` : **teal** en accent, **anthracite** en
> surface sombre.

## Tokens

Déclarés dans `src/styles/tokens.css` — **seule source de vérité**.
`global.css` garde les anciens noms (`--txtColor`, `--btnColor`,
`--colorVar*`…) en alias ; ne plus utiliser les anciens noms dans du
nouveau code.

| Token | Valeur | Rôle |
|---|---|---|
| `--paper` | `#ece9e6` | fond de page (gris chaud) |
| `--basalt` | `#1d343a` | surface sombre / titres (anthracite) |
| `--ink` | `#000000` | texte principal |
| `--stone` | `#6b6b6b` | texte atténué |
| `--line` | `#e6e6e6` | bordures, hover boutons |
| `--signal` | `#39887b` | accent teal : CTA, footer, liens |
| `--signal-dark` / `-light` / `-soft` | `#2c6b61` / `#5aa99c` / `#d9ebe8` | variantes accent |
| `--ok` / `--warn` / `--danger` (+ `-soft`) | `#2f9e63` / `#d97706` / `#dc2626` | statuts |
| `--radius` | `0.5rem` | rayon |
| `--font-display` | Adventure (`@font-face` local) | titres |
| `--font-body` | Open Sans | texte courant |

## Locaux (hors grammaire)

`--colorVar1` `hsl(103,22%,75%)` (sauge clair décoratif),
`--color1` `#ffffff`.
