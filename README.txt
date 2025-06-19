# Landing Page Readme

## Description

Ce projet est une landing page destinée à présenter les fonctionnalités d'une application citoyenne, axée sur la participation simplifiée, la mobilité responsable, les récompenses locales, le suivi transparent des signalements, l'agenda collectif et l'accessibilité de l'application.

La page intègre :

* Un formulaire de contact (via Formspree).
* Une newsletter.
* Un module d'inscription à une newsletter, stockant les adresses dans un fichier JSON local.
* Une grille responsive de cards illustrant les principales fonctionnalités.

## Structure du projet

```
/ (racine du projet)
│
├── index.html           # Page principale de la landing
├── main.css             # Styles globaux (Flexbox, grilles, responsivité)
├── subscribe.php        # Script PHP pour enregistrer les abonnés newsletter
├── subscribers.json     # Fichier JSON stockant les emails abonnés
├── images/              # Dossier contenant les illustrations des cards
├── .vscode/             # Configuration VSCode (Live Server)
│   └── settings.json
└── README.md            # Ce fichier
```

## Technologies utilisées

* **HTML5** : structure sémantique de la page.
* **CSS3** :
  * Flexbox et grilles pour la mise en page responsive.
  * `object-fit: contain` pour un affichage uniforme des images.
  * Media queries pour les adaptions mobile.
* **JavaScript (ES6+)** :
  * `fetch()` pour les requêtes AJAX vers `subscribe.php`.
  * Gestion dynamique des retours (succès, erreur) sans rechargement.
* **PHP** :
  * Script `subscribe.php` pour lire/écrire dans `subscribers.json`.
  * Validation d'email et contrôle des doublons.
* **JSON** :
  * `subscribers.json` comme datastore simple pour les emails.
* **Font Awesome** :
  * Icons pour illustrer les sections (par ex. `<span class="icon fa-crosshairs">`).
* **VSCode** + **Live Server** pour le développement local.


## Déploiement

* Hébergement avec support PHP (mutualisé, VPS, etc.).
* Vérifier que `subscribers.json` est inscriptible par le serveur web.
* Conserver la même structure de dossiers.

## Personnalisation

* Modifier les couleurs et typographies dans `main.css`.
* Ajuster la hauteur des images en modifiant la règle CSS :

  ```css
  article.box.style2 .image.featured {
    height: 150px; /* Modifier selon vos besoins */
  }
  ```
* Ajouter/supprimer des cards dans `index.html` en dupliquant les blocs `<article class="box style2">...`.

---

*Landing page développée pour illustrer une application citoyenne, simple à déployer et à personnaliser.*
