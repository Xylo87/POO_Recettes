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