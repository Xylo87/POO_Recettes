<?php

ob_start();



spl_autoload_register(function ($class_name) {
    require "classes/". $class_name . ".php";
});



$tomatoSoup = new Recette("Tomato Soup", 10, "Mix tomatoes and lettuce", "Starter",
[new Ingredient("Tomato", 2, "units")]);

$chickenSoup = new Recette("Chicken Soup", 20, "Boil chicken and add vegetables", "Starter",
[new Ingredient("Chicken", 1, "unit"), new Ingredient("Tomato", 2, "units"), new Ingredient("Lettuce", 1, "unit"), new Ingredient("Onion", 1, "unit")]);

$bruschetta = new Recette("Bruschetta", 15, "Toast bread and top with tomatoes", "Starter",
[new Ingredient("Tomato", 2, "units"), new Ingredient("Bread", 4, "slices")]);

$grilledChicken = new Recette("Grilled Chicken", 30, "Grill the chicken and serve", "Main",
[new Ingredient("Chicken", 1, "unit")]);

$beefStroganoff = new Recette("Beef Stroganoff", 40, "Cook beef with mushrooms and serve", "Main",
[new Ingredient("Beef", 0.5, "kg")]);

$pastaPrimavera = new Recette("Pasta Primavera", 25, "Cook pasta and add vegetables", "Main",
[new Ingredient("Pasta", 0.2, "kg")]);

$chocolateCake = new Recette("Chocolate Cake", 35, "Mix all ingredients and bake", "Dessert",
[new Ingredient("Chocolate", 200, "g"), new Ingredient("Floor", 50, "g"), new Ingredient("Egg", 3, "units"), new Ingredient("Butter", 100, "g")]);

$fruitSalad = new Recette("Fruit Salad", 10, "Chop fruits and mix", "Dessert",
[new Ingredient("Banana", 4, "units"), new Ingredient("Pineapple", 1, "unit"), new Ingredient("Kiwi", 4, "units"), new Ingredient("Apple", 3, "units")]);



$recettes = [$tomatoSoup, $chickenSoup, $bruschetta, $grilledChicken, $beefStroganoff, $pastaPrimavera, $chocolateCake, $fruitSalad];

// echo '<pre>';
// var_export($recettes);
// echo '</pre>';



foreach ($recettes as $recette) {
    echo $recette->afficherRecette();
}





$titre = "My Recipes";
$titre_secondaire = $titre;



$contenu = ob_get_clean();

require "template.php";

