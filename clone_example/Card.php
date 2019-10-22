<?php

require_once "ClonableObject.php";

class Card extends ClonableObject
{
    protected $products = [];
    public function addProduct($product)
    {
        $this->products[] = $product;
    }
    protected function getProperties()
    {
        return array_keys(get_object_vars($this));
    }
}
