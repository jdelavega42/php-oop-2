<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Color.php';

class Game extends Product {
    use Color;

    function __construct( $category, $name, $price, public $color)
    {
        parent::__construct( $category, $name, $price);
        $this->setColor($color);
    }
    public function getClassName(){
        return get_class();
    }
}

?>