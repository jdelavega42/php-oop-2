<?php
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Game.php";
require_once __DIR__ . "/Models/Kennel.php";
require_once __DIR__ . "/Models/Product.php";

$products = [
    new Food(new Category('cane'),'snack', '19,99', '01/01/01'),
    new Game(new Category('gatto'), 'gioco', '9,99', 'rosso'),
    new Kennel(new Category('cane'), 'cuccia', '25,99', '100x150') 
]
?>

