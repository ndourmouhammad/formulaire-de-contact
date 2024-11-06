# Formulaire de Contact

Un formulaire de contact simple avec validation côté client (JavaScript) et côté serveur (PHP). Ce formulaire permet aux utilisateurs de saisir leur nom, adresse e-mail, sujet et message, avec des messages d'erreur pour les champs manquants ou invalides.

## Table des matières

- [Fonctionnalités](#fonctionnalités)
- [Technologies Utilisées](#technologies-utilisées)
- [Installation](#installation)
- [Lancement du projet](#lancement-du-projet)

## Fonctionnalités

- **Validation Côté Client** : Vérification en temps réel des champs obligatoires et de la validité de l'email en utilisant JavaScript.
- **Validation Côté Serveur** : Vérification et nettoyage des données saisies avant traitement.
- **Feedback Visuel** : Messages d'erreur en rouge affichés sous chaque champ en cas de saisie incorrecte.
- **Confirmation d'Envoi** : Message de succès après soumission réussie.

## Technologies Utilisées

- **HTML** pour la structure du formulaire.
- **CSS** pour le style du formulaire.
- **JavaScript** pour la validation en temps réel des champs.
- **PHP** pour la validation côté serveur et la gestion des données.

## Installation

1. **Clonez le dépôt ou téléchargez les fichiers du projet** :
   ```bash
   git clone https://github.com/votre-utilisateur/votre-repo.git

## Lancement du projet

1. **Naviguer au repertoire du projet** :
    ```bash
   cd FormulaireDeContact
   
2. **Lancer un serveur PHP local** :
    ```bash
   php -S localhost:8000
3. **Ouvrez le formulaire dans votre navigateur** :
    ```bash
   http://localhost:8000