# Plan de modernisation et de sécurisation

## Objectif

Finaliser la migration WordPress vers Astro, assainir le dépôt Git, corriger les vulnérabilités connues, renforcer la conformité et intégrer des contrôles automatisés reproductibles.

## Principes d’exécution

- Exécuter les chapitres dans l’ordre.
- Ne jamais versionner `wordpress-backup/`, les dépendances, les artefacts de build ou les secrets.
- Réaliser un contrôle ciblé à la fin de chaque chapitre.
- Conserver un site statique compatible avec l’hébergement mutualisé O2switch.
- Ne créer que des commits locaux ; aucun push n’est effectué.

## Chapitre 1 — Assainissement du dépôt Git

- [ ] Exclure complètement `wordpress-backup/` du suivi Git.
- [ ] Vérifier les règles d’exclusion pour les secrets, dépendances et artefacts.
- [ ] Vérifier qu’aucun secret serveur ou export de base de données n’est suivi.
- [ ] Confirmer que le nouveau projet Astro remplace proprement l’ancien WordPress.

### Tests du chapitre

- [ ] Contrôler `git status` et les fichiers ignorés.
- [ ] Rechercher les noms de fichiers sensibles parmi les fichiers suivis et à committer.
- [ ] Vérifier que `wordpress-backup/`, `node_modules/` et `dist/` sont ignorés.

## Chapitre 2 — Mise à niveau des dépendances

- [ ] Migrer Astro vers une version majeure sûre et stable.
- [ ] Migrer Swiper vers une version majeure sûre et stable.
- [ ] Mettre à niveau l’intégration sitemap.
- [ ] Adapter la configuration et le code aux éventuelles ruptures d’API.
- [ ] Régénérer le verrou npm.

### Tests du chapitre

- [ ] Installer les dépendances depuis le verrou.
- [ ] Exécuter le build statique.
- [ ] Exécuter l’audit npm et examiner chaque alerte restante.
- [ ] Vérifier la génération des sept routes et du sitemap.

## Chapitre 3 — Configuration et services externes

- [ ] Centraliser les paramètres publics configurables via les variables d’environnement Astro.
- [ ] Retirer la clé Google Maps codée en dur du code source.
- [ ] Fournir un modèle d’environnement sans valeur sensible.
- [ ] Prévoir un comportement dégradé lorsque Maps ou Formspree ne sont pas configurés.
- [ ] Vérifier les liens sociaux provisoires.

### Tests du chapitre

- [ ] Construire sans fichier `.env`.
- [ ] Vérifier qu’aucune clé ou valeur sensible n’apparaît dans les sources suivies.
- [ ] Construire avec des variables publiques factices.

## Chapitre 4 — Consentement et formulaire

- [ ] Empêcher le chargement de Google Maps avant consentement explicite.
- [ ] Mémoriser proprement l’acceptation ou le refus.
- [ ] Permettre la modification ultérieure du choix.
- [ ] Améliorer l’accessibilité de la bannière de consentement.
- [ ] Ajouter au formulaire les informations essentielles de confidentialité.
- [ ] Désactiver proprement l’envoi lorsque Formspree n’est pas configuré.

### Tests du chapitre

- [ ] Vérifier statiquement qu’aucun script Google Maps n’est chargé par défaut.
- [ ] Vérifier les états accepter, refuser et modifier le choix.
- [ ] Vérifier la structure et les champs obligatoires du formulaire.
- [ ] Exécuter un build complet.

## Chapitre 5 — Qualité, accessibilité et responsive

- [ ] Ajouter le contrôle Astro/TypeScript.
- [ ] Corriger les erreurs de structure HTML et d’accessibilité détectées.
- [ ] Respecter `prefers-reduced-motion` pour les animations et carrousels.
- [ ] Améliorer les contrôles et libellés des carrousels.
- [ ] Réduire les risques liés aux positionnements CSS les plus fragiles sans refonte visuelle complète.
- [ ] Vérifier les liens internes et les ressources locales générées.

### Tests du chapitre

- [ ] Exécuter `astro check`.
- [ ] Exécuter le build de production.
- [ ] Contrôler automatiquement les liens et ressources internes du dossier `dist/`.
- [ ] Vérifier les pages principales sur plusieurs largeurs d’écran si un navigateur est disponible.

## Chapitre 6 — Automatisation et Semgrep

- [ ] Ajouter une commande locale de validation globale.
- [ ] Ajouter une configuration Semgrep adaptée à JavaScript, TypeScript et Astro.
- [ ] Ajouter un workflow GitHub Actions sur les push et pull requests.
- [ ] Exécuter dans la CI l’installation verrouillée, les contrôles Astro, le build, l’audit et Semgrep.
- [ ] Restreindre les permissions du workflow au minimum nécessaire.

### Tests du chapitre

- [ ] Valider la syntaxe YAML du workflow.
- [ ] Exécuter localement les commandes équivalentes à la CI.
- [ ] Exécuter Semgrep et traiter les résultats pertinents.

## Chapitre 7 — Validation finale et commits

- [ ] Réinstaller les dépendances de manière reproductible.
- [ ] Exécuter tous les contrôles depuis un état propre.
- [ ] Examiner le diff complet et rechercher les données sensibles.
- [ ] Vérifier la taille et la composition des fichiers à committer.
- [ ] Créer des commits locaux cohérents avec un message expliquant la migration et sa sécurisation.
- [ ] Confirmer l’état final du dépôt sans pousser vers un dépôt distant.

### Tests du chapitre

- [ ] Validation globale réussie.
- [ ] Audit npm sans vulnérabilité connue, ou justification explicite des alertes restantes.
- [ ] Semgrep sans résultat bloquant.
- [ ] Build statique complet avec sept pages et sitemap.
- [ ] `git status` final vérifié.
