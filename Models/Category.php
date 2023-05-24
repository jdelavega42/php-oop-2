<?php 
class Category {

    function __construct(public String $category, public String $icon = '')
    {
        $this->category = $category;
    }
}

?>