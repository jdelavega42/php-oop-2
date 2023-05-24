<?php
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Game.php";
require_once __DIR__ . "/Models/Kennel.php";
require_once __DIR__ . "/Models/Product.php";

$categories = [
    new Category('cane'),
    new Category('gatto')
];

$products = [
    new Food($categories[0],'snack', 19.99, '01/01/01'),
    new Game($categories[1], 'gioco', 9.99, 'rosso'),
    new Kennel($categories[0], 'cuccia', 25.99, '100x150') 
]
?>

