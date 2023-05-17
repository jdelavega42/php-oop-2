<?php
require_once __DIR__ . '/Product.php';

class Kennel extends Product {
    public $dimension;
    function __construct($_name, $_price, $_category, $_dimension)
    {
        parent::__construct($_name, $_price, $_category);
        $this->dimension = $_dimension;
    }
    
}

?>