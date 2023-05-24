<?php
require_once __DIR__ . '/Category.php';

class Product {

    function __construct(public Category $category, public $name, public $price)
    {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
    }

    public function setPrice($price) {
        if (!is_int($price)){
            throw new Exception("Price must be a number", 1);
        } else if($price < 0){
            throw new Exception(('Price must be higher than 0'));
        } else {
            $this -> price = $price;
        }
    } 

    public function getClassName(){
        return get_class();
    }

    function getDetails(){
        return "";
    }
}   
?>