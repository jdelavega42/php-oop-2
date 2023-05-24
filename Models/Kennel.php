<?php
require_once __DIR__ . '/Product.php';

class Kennel extends Product {

    function __construct($category, $name, $price, public $dimension)
    {
        parent::__construct( $category, $name, $price);
        $this->dimension = $dimension;
    }
    
}

?>