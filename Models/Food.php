<?php
require_once __DIR__ . '/Product.php';

class Food extends Product {

    function __construct( public Category $category, public $name, public $price, public $expire)
    {
        parent::__construct($category, $name, $price);
        $this->expire = $expire;
    }
    public function getClassName(){
        return get_class();
    }
}

?>