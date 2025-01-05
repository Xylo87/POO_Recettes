# ⚡🍴 Exercice de Programmation Orientée Objet en PHP et d'affichage CSS, autour de recettes de cuisine

## 1. Description
Exercice pratique de **POO** en **PHP** qui permet de gérer la création de recettes de cuisine et des ingrédients associés, en les insérant en tant qu'objets lors de la création de chacune.
L'exercice met en oeuvre : 
- **L'encapsulation**
- **Les méthodes personnalisées**
- **L'utilisation de `__toString`**
L'affichage des différentes recettes crées pour l'exercice a été stylisé avec **CSS**, en utilisant des conventions de **Responsive Design** pour une accessibilité sur tous supports.

---

## 2. Fonctionnalités 

- Création de recettes et de leurs ingrédients associés au sein d'un même objet.
Ce choix a été fait pour tenir compte des ingrédients, des quantités et des mesures qui différent d'une recette à l'autre.
- Fonction d'affichage d'une recette, de l'ensemble de ses attributs et des ingrédients (nom, quantité, mesure) qui lui sont associés.

---

## 3. Installation

1. Clonez ce projet depuis GitHub :
   ```bash
   git clone 1. Clonez ce projet depuis GitHub :
   ```bash
   git clone https://github.com/Xylo87/PHP.git
   cd POO_Recettes
   ```

2. Assurez-vous que PHP est installé sur votre machine en exécutant la commande suivante :
   ```bash
   php --version
   ```

3. Installer un logiciel type "Laragon" pour disposer d'un environnement qui permet d'exécuter un script PHP :
- Téléchargez Laragon [ici](https://laragon.org/download/)
- Démarrer Laragon
- Enregistrer le "Repo" dans le dossier laragon\www\
- Exécuter la fonction "Web" de Laragon

4. Exécutez le fichier principal pour tester le projet :
   ```bash
   php index.php
   ```
---

## 4. Utilisation

Voici un exemple d'utilisation du projet dans un script PHP :

```php
require_once 'Recette.php';
require_once 'Ingredient.php';

// Création d'une recette
$recette = new Recette("Tomato Soup", 10, "Mix tomatoes and lettuce", "Starter",
[new Ingredient("Tomato", 2, "units")]);

// Affichage d'une recette, de l'ensemble de ses attributs et des ingrédients (nom, quantité, mesure) qui lui sont associés.
echo $recette->afficherRecette();
```
---

## 5. Structure des classes

### Classe `Recette`
- **Propriétés** :
  - `nom` : Nom de la recette
  - `tpsPrepaMin` : Temps de préparation de la recette en minute(s)
  - `instructions` : Instructions pour la réalisation de la recette
  - `typePlat` : Type de plat (entrée, plat de résistance, dessert)
  - `ingredients` : Liste des ingrédients associés à la recette
- **Méthodes** :
  - `afficherRecette() : array` : Affichage d'une recette, de l'ensemble de ses attributs et des ingrédients (nom, quantité, mesure) qui lui sont associés.
  - `__toString(): string` : Affiche le nom de la recette

### Classe `Ingredient`
- **Propriétés** :
  - `nom` : Nom de l'ingrédient
  - `quantite` : Quantite nécessaire à la recette
  - `mesure` : Unité de mesure de la quantité
- **Méthodes** :
  - `__toString(): string` : Affiche le nom de l'ingrédient

---

## 6. Conventions de codage respectées

- **Encapsulation** : Les propriétés des classes sont privées et accessibles via des méthodes (`getters` et `setters`).
- **Conventions PSR-12** : Respect des normes de codage PHP pour une meilleure lisibilité.
- **Méthodes personnalisées** : Les classes sont enrichies avec des méthodes adaptées aux relations entre auteurs et livres.

---

## 7. Auteur
Ce projet a été réalisé par Théo Arbogast (aka Xylo87).  
N'hésitez pas à ouvrir une issue ou à me contacter pour toute suggestion ou question.