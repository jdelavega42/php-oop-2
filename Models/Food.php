<?php
require_once __DIR__ . '/Product.php';

class Food extends Product {
    public $expire;
    function __construct($_name, $_price, $_category, $_expire)
    {
        parent::__construct($_name, $_price, $_category);
        $this->expire = $_expire;
    }
}

?>