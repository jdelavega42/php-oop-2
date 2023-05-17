<?php
require_once __DIR__ . '/Category.php';

class Product {
    public $category;
    public $name;
    public $price;

    function __construct(Category $_category,$_name, $_price)
    {
        $this->category = $_category;
        $this->name = $_name;
        $this->price = $_price;
    }
}
?>