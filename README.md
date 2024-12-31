# CRUD PHP avec MySQL

Ce projet implémente les opérations de base pour un CRUD (Créer, Lire, Mettre à jour, Supprimer) en PHP avec une base de données MySQL.

## Création des opérations CRUD

### 1. **Create (Créer)**
- **Objectif** : Permet à l'utilisateur d'ajouter de nouvelles données dans la base de données.
- **Étapes** :
  - Créer un formulaire HTML pour saisir les données.
  - Récupérer les données via PHP et les insérer dans la base de données en utilisant une requête `INSERT INTO`.

### 2. **Read (Lire)**
- **Objectif** : Afficher les données existantes dans la base de données.
- **Étapes** :
  - Créer une page PHP qui exécute une requête `SELECT` pour récupérer les données.
  - Afficher les résultats dans un tableau HTML.

### 3. **Update (Mettre à jour)**
- **Objectif** : Permettre à l'utilisateur de modifier des données existantes.
- **Étapes** :
  - Créer une page PHP pour afficher un formulaire pré-rempli avec les données existantes.
  - Utiliser une requête `UPDATE` pour enregistrer les modifications dans la base de données après la soumission du formulaire.

### 4. **Delete (Supprimer)**
- **Objectif** : Permettre à l'utilisateur de supprimer des données existantes.
- **Étapes** :
  - Ajouter un lien ou un bouton "Supprimer" à côté de chaque élément affiché.
  - Exécuter une requête `DELETE` pour supprimer l'enregistrement de la base de données lorsque l'utilisateur clique sur ce lien.

## Résumé
1. **Create** : Ajouter des données via un formulaire et `INSERT`.
2. **Read** : Afficher les données avec `SELECT`.
3. **Update** : Modifier des données avec un formulaire pré-rempli et `UPDATE`.
4. **Delete** : Supprimer des données avec `DELETE`.

